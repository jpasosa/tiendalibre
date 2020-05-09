define(['underscore', 'underscore.string', './module'], function(_, _S, module){

    module
		.config(['$httpProvider', function($httpProvider) {
			//initialize get if not there
			if (!$httpProvider.defaults.headers.get) {
				$httpProvider.defaults.headers.get = {};
			}

			// Answer edited to include suggestions from comments
			// because previous version of code introduced browser-related errors

			//disable IE ajax request caching
			$httpProvider.defaults.headers.get['If-Modified-Since'] = 'Mon, 26 Jul 1997 05:00:00 GMT';
			// extra
			$httpProvider.defaults.headers.get['Cache-Control'] = 'no-cache';
			$httpProvider.defaults.headers.get['Pragma'] = 'no-cache';
		}])
        .factory('Url', [function(){
            return {
                generateLink: function(url) {
                    var args = Array.prototype.slice.call(arguments).slice(1);
                    return args.length ? url + '&' + args.join('&') : url;
                }
            };
        }])
        .factory('Ajax', ['$http', '$q', function($http, $q){
            return {
                get: function(url, data) {
                    var deferred = $q.defer();
                    $http
                        .get(url, data)
                        .success(function(response){
                            if (_S.endsWith(url, '.json')) {
                                deferred.resolve(response);
                            }
                            if (typeof(response) !== 'object') {
                                deferred.reject('Cannot access ' + url);
                            }
                            if(response.status === 'success') {
                                deferred.resolve(response.response);
                            } else {
                                deferred.reject(response.error);
                            }
                        }).error(function(response){
                            deferred.reject(response);
                        });
                    return deferred.promise;
                },
                post: function(url, data) {
                    var deferred = $q.defer();
                    $http
                        .post(url, angular.copy(data))
                        .success(function(response){
                            if (typeof(response) !== 'object') {
                                deferred.reject('Cannot access ' + url);
                            }
                            if(response.status === 'success') {
                                deferred.resolve(response.response);
                            } else {
                                deferred.reject(response.error);
                            }
                        }).error(function(response){
                            deferred.reject(response);
                        });
                    return deferred.promise;
                }
            };
        }]);

});


