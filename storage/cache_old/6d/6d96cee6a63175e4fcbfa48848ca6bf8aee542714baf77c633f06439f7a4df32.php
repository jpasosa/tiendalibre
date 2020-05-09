<?php

/* catalog/review_form.twig */
class __TwigTemplate_e76beeac6aa9fd6e680deed526f4dbb76356c0dc4856b6b49090563106999aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 28
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 30
        echo (isset($context["author"]) ? $context["author"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              ";
        // line 31
        if ((isset($context["error_author"]) ? $context["error_author"] : null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_author"]) ? $context["error_author"] : null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 36
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "\">";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 38
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 39
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              ";
        // line 40
        if ((isset($context["error_product"]) ? $context["error_product"] : null)) {
            // line 41
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_product"]) ? $context["error_product"] : null);
            echo "</div>
              ";
        }
        // line 42
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 45
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 47
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo (isset($context["text"]) ? $context["text"] : null);
        echo "</textarea>
              ";
        // line 48
        if ((isset($context["error_text"]) ? $context["error_text"] : null)) {
            // line 49
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_text"]) ? $context["error_text"] : null);
            echo "</div>
              ";
        }
        // line 50
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 53
        echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 55
        if (((isset($context["rating"]) ? $context["rating"] : null) == 1)) {
            // line 56
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                1
                ";
        } else {
            // line 59
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" />
                1
                ";
        }
        // line 61
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 62
        if (((isset($context["rating"]) ? $context["rating"] : null) == 2)) {
            // line 63
            echo "                <input type=\"radio\" name=\"rating\" value=\"2\" checked=\"checked\" />
                2
                ";
        } else {
            // line 66
            echo "                <input type=\"radio\" name=\"rating\" value=\"2\" />
                2
                ";
        }
        // line 68
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 69
        if (((isset($context["rating"]) ? $context["rating"] : null) == 3)) {
            // line 70
            echo "                <input type=\"radio\" name=\"rating\" value=\"3\" checked=\"checked\" />
                3
                ";
        } else {
            // line 73
            echo "                <input type=\"radio\" name=\"rating\" value=\"3\" />
                3
                ";
        }
        // line 75
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 76
        if (((isset($context["rating"]) ? $context["rating"] : null) == 4)) {
            // line 77
            echo "                <input type=\"radio\" name=\"rating\" value=\"4\" checked=\"checked\" />
                4
                ";
        } else {
            // line 80
            echo "                <input type=\"radio\" name=\"rating\" value=\"4\" />
                4
                ";
        }
        // line 82
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 83
        if (((isset($context["rating"]) ? $context["rating"] : null) == 5)) {
            // line 84
            echo "                <input type=\"radio\" name=\"rating\" value=\"5\" checked=\"checked\" />
                5
                ";
        } else {
            // line 87
            echo "                <input type=\"radio\" name=\"rating\" value=\"5\" />
                5
                ";
        }
        // line 89
        echo " </label>
              ";
        // line 90
        if ((isset($context["error_rating"]) ? $context["error_rating"] : null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_rating"]) ? $context["error_rating"] : null);
            echo "</div>
              ";
        }
        // line 92
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 95
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"date_added\" value=\"";
        // line 98
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 105
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                
                ";
        // line 109
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 110
            echo "                
                <option value=\"1\" selected=\"selected\">";
            // line 111
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 112
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                ";
        } else {
            // line 115
            echo "                
                <option value=\"1\">";
            // line 116
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 117
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                ";
        }
        // line 120
        echo "              
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 130
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 139
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t\t
\t}\t
});
//--></script></div>
";
        // line 157
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 157,  336 => 139,  324 => 130,  312 => 120,  306 => 117,  302 => 116,  299 => 115,  293 => 112,  289 => 111,  286 => 110,  284 => 109,  277 => 105,  265 => 98,  259 => 95,  254 => 92,  248 => 91,  246 => 90,  243 => 89,  238 => 87,  233 => 84,  231 => 83,  228 => 82,  223 => 80,  218 => 77,  216 => 76,  213 => 75,  208 => 73,  203 => 70,  201 => 69,  198 => 68,  193 => 66,  188 => 63,  186 => 62,  183 => 61,  178 => 59,  173 => 56,  171 => 55,  166 => 53,  161 => 50,  155 => 49,  153 => 48,  147 => 47,  142 => 45,  137 => 42,  131 => 41,  129 => 40,  125 => 39,  119 => 38,  112 => 36,  107 => 33,  101 => 32,  99 => 31,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-review" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-review" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-author">{{ entry_author }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="author" value="{{ author }}" placeholder="{{ entry_author }}" id="input-author" class="form-control" />*/
/*               {% if error_author %}*/
/*               <div class="text-danger">{{ error_author }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-product"><span data-toggle="tooltip" title="{{ help_product }}">{{ entry_product }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="product" value="{{ product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               {% if error_product %}*/
/*               <div class="text-danger">{{ error_product }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-text">{{ entry_text }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="text" cols="60" rows="8" placeholder="{{ entry_text }}" id="input-text" class="form-control">{{ text }}</textarea>*/
/*               {% if error_text %}*/
/*               <div class="text-danger">{{ error_text }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_rating }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline"> {% if rating == 1 %}*/
/*                 <input type="radio" name="rating" value="1" checked="checked" />*/
/*                 1*/
/*                 {% else %}*/
/*                 <input type="radio" name="rating" value="1" />*/
/*                 1*/
/*                 {% endif %} </label>*/
/*               <label class="radio-inline"> {% if rating == 2 %}*/
/*                 <input type="radio" name="rating" value="2" checked="checked" />*/
/*                 2*/
/*                 {% else %}*/
/*                 <input type="radio" name="rating" value="2" />*/
/*                 2*/
/*                 {% endif %} </label>*/
/*               <label class="radio-inline"> {% if rating == 3 %}*/
/*                 <input type="radio" name="rating" value="3" checked="checked" />*/
/*                 3*/
/*                 {% else %}*/
/*                 <input type="radio" name="rating" value="3" />*/
/*                 3*/
/*                 {% endif %} </label>*/
/*               <label class="radio-inline"> {% if rating == 4 %}*/
/*                 <input type="radio" name="rating" value="4" checked="checked" />*/
/*                 4*/
/*                 {% else %}*/
/*                 <input type="radio" name="rating" value="4" />*/
/*                 4*/
/*                 {% endif %} </label>*/
/*               <label class="radio-inline"> {% if rating == 5 %}*/
/*                 <input type="radio" name="rating" value="5" checked="checked" />*/
/*                 5*/
/*                 {% else %}*/
/*                 <input type="radio" name="rating" value="5" />*/
/*                 5*/
/*                 {% endif %} </label>*/
/*               {% if error_rating %}*/
/*               <div class="text-danger">{{ error_rating }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*             <div class="col-sm-3">*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="date_added" value="{{ date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD HH:mm:ss" id="input-date-added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span> </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 */
/*                 {% if status %}*/
/*                 */
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 */
/*                 {% else %}*/
/*                 */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 */
/*                 {% endif %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'product\']').val(item['label']);*/
/* 		$('input[name=\'product_id\']').val(item['value']);		*/
/* 	}	*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
