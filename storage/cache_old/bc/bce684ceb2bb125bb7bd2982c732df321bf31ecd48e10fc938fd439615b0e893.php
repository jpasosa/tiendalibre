<?php

/* journal2/template/journal2/checkout/checkout.twig */
class __TwigTemplate_8d8f6608b7f265c90907eb14ab4ae2e40acb8188baa28c3482552cf2eba98e4c extends Twig_Template
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
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"one-page-checkout ";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 22
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_title", 1 => "Quick Checkout"), "method");
        echo "</h1>

      <div class=\"journal-checkout\">
        <div class=\"left\">
          ";
        // line 26
        if ( !(isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 27
            echo "            <div class=\"checkout-content login-box\">
              <h2 class=\"secondary-title\">";
            // line 28
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_register_selector", 1 => "Create an Account or Login"), "method");
            echo "</h2>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"account\" value=\"register\" ";
            // line 31
            if (((isset($context["default_auth"]) ? $context["default_auth"] : null) == "register")) {
                echo " checked=\"checked\" ";
            }
            echo " />
                  ";
            // line 32
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "
                </label>
              </div>
              ";
            // line 35
            if ((isset($context["allow_guest_checkout"]) ? $context["allow_guest_checkout"] : null)) {
                // line 36
                echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"account\" value=\"guest\" ";
                // line 38
                if (((isset($context["default_auth"]) ? $context["default_auth"] : null) == "guest")) {
                    echo " checked=\"checked\" ";
                }
                echo " />
                    ";
                // line 39
                echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
                echo "
                  </label>
                </div>
              ";
            }
            // line 43
            echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"account\" value=\"login\" ";
            // line 45
            if (((isset($context["default_auth"]) ? $context["default_auth"] : null) == "login")) {
                echo " checked=\"checked\" ";
            }
            echo "/>
                  ";
            // line 46
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_returning", 1 => "Returning Customer"), "method");
            echo "
                </label>
              </div>
            </div>
            <script>
              \$(document).delegate('input[name=\"shipping_address\"]', 'change', function () {
                var \$this = \$(this);

                if (\$this.is(':checked')) {
                  \$('#shipping-address').hide();
                  \$this.val(1);
                  \$(document).trigger('journal_checkout_address_changed', 'payment');
                } else {
                  \$('#shipping-address').show().find('input[type=\"text\"]').val('');
                  \$(document).trigger('journal_checkout_address_changed', 'payment');
                  \$(document).trigger('journal_checkout_address_changed', 'shipping');
                  \$this.val(0);
                }
              });
              \$(document).delegate('input[name=\"account\"]', 'change', function () {
                if (this.value === 'login') {
                  \$('.checkout-login').slideDown(300);
                  \$('.checkout-register').parent().addClass('login-mobile');
                  //\$('.checkout-register').slideUp(300);
                } else {
                  \$('.checkout-login').slideUp(300);
                  \$('.checkout-register').parent().removeClass('login-mobile');
                  //\$('.checkout-register').slideDown(300);
                  if (this.value === 'register') {
                    \$('#password').slideDown(300);
                  } else {
                    \$('#password').slideUp(300);
                  }
                }

                \$('html').removeClass('checkout-type-login checkout-type-register checkout-type-guest').addClass('checkout-type-' + this.value);
              });
            </script>
          ";
        }
        // line 85
        echo "
          ";
        // line 86
        if ( !(isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 87
            echo "            <div class=\"checkout-content checkout-login\">
              <fieldset>
                <h2 class=\"secondary-title\">";
            // line 89
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_returning", 1 => "Returning Customer"), "method");
            echo "</h2>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-login_email\">";
            // line 91
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
                  <input type=\"text\" name=\"login_email\" value=\"\" placeholder=\"";
            // line 92
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "\" id=\"input-login_email\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-login_password\">";
            // line 95
            echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
            echo "</label>
                  <input type=\"password\" name=\"login_password\" value=\"\" placeholder=\"";
            // line 96
            echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
            echo "\" id=\"input-login_password\" class=\"form-control\"/>
                  <a href=\"";
            // line 97
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a>
                </div>
                <div class=\"form-group\">
                  <input type=\"button\" value=\"";
            // line 100
            echo (isset($context["button_login"]) ? $context["button_login"] : null);
            echo "\" id=\"button-login\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn-primary button\"/>
                </div>
              </fieldset>
            </div>

            ";
            // line 105
            echo (isset($context["register_form"]) ? $context["register_form"] : null);
            echo "
          ";
        }
        // line 107
        echo "        </div>
        <div class=\"right\">
          <section class=\"section-left\">
            ";
        // line 110
        if ((isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 111
            echo "              ";
            echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
            echo "
              ";
            // line 112
            if ((isset($context["is_shipping_required"]) ? $context["is_shipping_required"] : null)) {
                // line 113
                echo "                ";
                echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
                echo "
              ";
            }
            // line 115
            echo "            ";
        }
        // line 116
        echo "
            <div class=\"spw\">
              ";
        // line 118
        if ((isset($context["is_shipping_required"]) ? $context["is_shipping_required"] : null)) {
            // line 119
            echo "                ";
            echo (isset($context["shipping_methods"]) ? $context["shipping_methods"] : null);
            echo "
              ";
        }
        // line 121
        echo "              ";
        echo (isset($context["payment_methods"]) ? $context["payment_methods"] : null);
        echo "
            </div>
          </section>
          <section class=\"section-right\">
            ";
        // line 125
        echo (isset($context["coupon_voucher_reward"]) ? $context["coupon_voucher_reward"] : null);
        echo "
            ";
        // line 126
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
            <div class=\"checkout-content confirm-section\">
              <div>
                <h2 class=\"secondary-title\">";
        // line 129
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_comments", 1 => (isset($context["text_comments"]) ? $context["text_comments"] : null)), "method");
        echo "</h2>
                <label>
                  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 131
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
                </label>
              </div>
              ";
        // line 134
        if ((isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null)) {
            // line 135
            echo "                <div class=\"checkbox check-newsletter\">
                  <label for=\"newsletter\">
                    <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\"/>
                    <span>";
            // line 138
            echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
            echo "</span>
                    ";
            // line 139
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "newsletter_privacy_information"), "method")) {
                // line 140
                echo "                    <span>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "newsletter_privacy_information.information_text"), "method");
                echo "</span>
                    ";
            }
            // line 142
            echo "                  </label>
                </div>
              ";
        }
        // line 145
        echo "
              ";
        // line 146
        if ((isset($context["text_privacy"]) ? $context["text_privacy"] : null)) {
            // line 147
            echo "                <div class=\"radio check-privacy\">
                  <label>
                    <input type=\"checkbox\" name=\"privacy\" value=\"1\"/>
                    <span>";
            // line 150
            echo (isset($context["text_privacy"]) ? $context["text_privacy"] : null);
            echo "</span>
                  </label>
                </div>
              ";
        }
        // line 154
        echo "
              ";
        // line 155
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 156
            echo "                <div class=\"radio check-terms\">
                  <label>
                    <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                    <span>";
            // line 159
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</span>
                  </label>
                </div>
              ";
        }
        // line 163
        echo "              <div class=\"confirm-order\">
                <button id=\"journal-checkout-confirm-button\" data-loading-text=\"";
        // line 164
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_loading_text", 1 => "Loading.."), "method");
        echo "\" class=\"button confirm-button\">";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_confirm_order", 1 => "Confirm Order"), "method");
        echo "</button>
              </div>
            </div>
          </section>
        </div>
      </div>
      ";
        // line 170
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
</div>
<script>
  window['journal_account_status'] = ";
        // line 175
        echo twig_number_format_filter($this->env, (isset($context["is_logged_in"]) ? $context["is_logged_in"] : null));
        echo ";

  \$(document).delegate('input[name=\"shipping_method\"]', 'change', function () {
    \$(document).trigger('journal_checkout_shipping_changed', this.value);
  });

  \$(document).delegate('input[name=\"payment_method\"]', 'change', function () {
    \$(document).trigger('journal_checkout_payment_changed', this.value);
  });

  \$(document).delegate('#input-login_email, #input-login_password, #button-login', 'keydown', function (e) {
    if (e.keyCode == 13) {
      _do_login();
    }
  });

  \$(document).delegate('#button-login', 'click', function () {
    _do_login();
  });

  function _do_login() {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/login',
      type: 'post',
      data: {
        email: \$('input[name=\"login_email\"]').val(),
        password: \$('input[name=\"login_password\"]').val()
      },
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
        \$('#button-login').button('loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#button-login').button('reset');
      },
      success: function (json) {
        if (json['error'] && json['error']['warning']) {
          alert(json['error']['warning']);
        }
        if (json['redirect']) {
          location = json['redirect'];
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  function _clear_success_message() {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/clear_success_message',
      type: 'get',
      dataType: 'html',
      success: function(response){
        console.log(response);
        \$('#cart ul').load('index.php?route=common/cart/info ul li');

        \$(document).trigger('journal_checkout_reload_payment');
        \$(document).trigger('journal_checkout_reload_shipping');
      }
    });
  }

  \$(document).delegate('.journal-checkout .confirm-button', 'click', function () {
    var data = {};

    \$('.journal-checkout input[type=\"text\"], .journal-checkout input[type=\"password\"], .journal-checkout .left input[type=\"hidden\"], .journal-checkout select, .journal-checkout input:checked, .journal-checkout textarea').each(function () {
      data[\$(this).attr('name')] = \$(this).val();
    });

    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/confirm',
      type: 'post',
      data: data,
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
      },
      success: function (json) {
        \$('.text-danger').remove();
        \$('.has-error').removeClass('has-error');

        if (json['redirect_cart']) {
          location = json['redirect_cart'];
          return;
        }

        window['journal_current_account_status'] = json['account_status'];

        if (json['errors']) {
          \$.each(json['errors'], function (k, v) {
            if (k === 'shipping_method' || k === 'payment_method') {
              return;
            }
            if (\$.inArray(k, ['payment_country', 'payment_zone', 'shipping_country', 'shipping_zone']) !== -1) {
              k += '_id';
            } else if (k.indexOf('custom_field') === 0) {
              k = k.replace('custom_field', '');
              k = 'custom_field[' + k + ']';
            } else if (k.indexOf('payment_custom_field') === 0) {
              k = k.replace('payment_custom_field', '');
              k = 'payment_custom_field[' + k + ']';
            } else if (k.indexOf('shipping_custom_field') === 0) {
              k = k.replace('shipping_custom_field', '');
              k = 'shipping_custom_field[' + k + ']';
            }
            var \$element = \$('.journal-checkout [name=\"' + k + '\"]');
            \$element.closest('.form-group').addClass('has-error');
            \$element.after('<div class=\"text-danger\">' + v + '</div>');
          });
          triggerLoadingOff();
          try {
            \$('html, body').animate({scrollTop: \$('.has-error').offset().top}, 'slow');
          } catch (e) {
          }
        } else if (json['redirect']) {
          location = json['redirect'];
        } else {
          var \$btn = \$('#payment-confirm-button input[type=\"button\"], #payment-confirm-button input[type=\"submit\"], #payment-confirm-button .pull-right a, #payment-confirm-button .right a, #payment-confirm-button a.button, #button-confirm, #button-pay, #payment-confirm-button.payment-iyzico_checkout_installment .submitButton, #stripe-confirm').first();
          if (\$btn.attr('href')) {
            location = \$btn.attr('href');
          } else {
            \$btn.trigger('click');
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_customer_group_changed', function (e, value) {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout',
      type: 'get',
      data: {
        customer_group_id: value
      },
      beforeSend: function () {
        triggerLoadingOn();
        \$('#account, #address').addClass('checkout-loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#account, #address').removeClass('checkout-loading');
      },
      success: function (html) {
        var \$html = \$(html);
        \$('#account').html(\$html.find('#account'));
        \$('#address').html(\$html.find('#address'));
        \$('#password').html(\$html.find('#password'));
        \$('#account .form-group[data-sort]').detach().each(function () {
          if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
            \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
          }

          if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
            \$('#account .form-group:last').after(this);
          }

          if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
            \$('#account .form-group:first').before(this);
          }
        });
        \$(document).trigger('journal_checkout_reload_payment');
        if (\$('input[name=\"shipping_address\"]').is(':checked')) {
          \$(document).trigger('journal_checkout_reload_shipping');
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_address_changed', function (e, type) {
    var data = {};
    if (\$('input[name=\"' + type + '_address\"]:checked').val() === 'existing') {
      data[type + '_address_id'] = \$('select[name=\"' + type + '_address_id\"]').val();
    } else {
      data[type + '_country_id'] = \$('select[name=\"' + type + '_country_id\"]').val();
      data[type + '_postcode'] = \$('input[name=\"' + type + '_postcode\"]').val();
      data[type + '_zone_id'] = \$('select[name=\"' + type + '_zone_id\"]').val();
      ";
        // line 366
        if ( !(isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 367
            echo "      if (type === 'payment' && \$('input[name=\"shipping_address\"]').is(\":checked\")) {
        data['shipping_country_id'] = \$('select[name=\"' + type + '_country_id\"]').val();
        data['shipping_postcode'] = \$('input[name=\"' + type + '_postcode\"]').val();
        data['shipping_zone_id'] = \$('select[name=\"' + type + '_zone_id\"]').val();
      }
      ";
        }
        // line 373
        echo "    }
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/save',
      type: 'post',
      data: data,
      dataType: 'json',
      success: function (json) {
        \$(document).trigger('journal_checkout_reload_' + type);
        ";
        // line 382
        if ( !(isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 383
            echo "        if (type === 'payment' && \$('input[name=\"shipping_address\"]').is(':checked')) {
          \$(document).trigger('journal_checkout_reload_shipping');
        }
        ";
        }
        // line 387
        echo "      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_shipping_changed', function (e, value) {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/save',
      type: 'post',
      data: {
        shipping_method: value
      },
      dataType: 'json',
      success: function () {
        \$.ajax({
          cache: false,
          url: 'index.php?route=journal2/checkout/cart_update',
          type: 'post',
          dataType: 'json',
          success: function (json) {
            setTimeout(function () {
              \$('#cart-total').html(json['total']);
            }, 100);

            \$('#cart ul').load('index.php?route=common/cart/info ul li');
          }
        });
        \$(document).trigger('journal_checkout_reload_payment');
        \$(document).trigger('journal_checkout_reload_cart');
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_payment_changed', function (e, value) {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/save',
      type: 'post',
      data: {
        payment_method: value
      },
      dataType: 'json',
      success: function () {
        \$(document).trigger('journal_checkout_reload_cart');
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_reload_shipping', function () {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/shipping',
      type: 'get',
      dataType: 'html',
      beforeSend: function () {
        triggerLoadingOn();
        \$('.checkout-shipping-methods').addClass('checkout-loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('.checkout-shipping-methods').removeClass('checkout-loading');
      },
      success: function (html) {
        \$('.checkout-shipping-methods').replaceWith(html);
        \$(document).trigger('journal_checkout_reload_cart');
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_reload_payment', function () {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/payment',
      type: 'get',
      dataType: 'html',
      beforeSend: function () {
        triggerLoadingOn();
        \$('.checkout-payment-methods').addClass('checkout-loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('.checkout-payment-methods').removeClass('checkout-loading');
      },
      success: function (html) {
        \$('.checkout-payment-methods').replaceWith(html);
        \$(document).trigger('journal_checkout_reload_cart');
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).on('journal_checkout_reload_cart', function (e, first) {
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/cart',
      type: 'get',
      dataType: 'html',
      beforeSend: function () {
        if (!first) {
          triggerLoadingOn();
          \$('.checkout-cart').addClass('checkout-loading');
        }
      },
      complete: function () {
        if (!first) {
          triggerLoadingOff();
          \$('.checkout-cart').removeClass('checkout-loading');
        }
      },
      success: function (html) {
        \$('.checkout-cart').replaceWith(html);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$(document).delegate('.checkout-product .input-group .btn-update', 'click', function () {
    var key = \$(this).attr('data-product-key');
    var qty = \$('input[name=\"quantity[' + key + ']\"]').val();
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/cart_update',
      type: 'post',
      data: {
        key: key,
        quantity: qty
      },
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
        \$('#cart > button > a > span').button('loading');
        \$('.checkout-cart').addClass('checkout-loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#cart > button > a > span').button('reset');
      },
      success: function (json) {
        setTimeout(function () {
          \$('#cart-total').html(json['total']);
        }, 100);

        if (json['redirect']) {
          location = json['redirect'];
        } else {
          \$('#cart ul').load('index.php?route=common/cart/info ul li');

          \$(document).trigger('journal_checkout_reload_payment');
          \$(document).trigger('journal_checkout_reload_shipping');
        }
      }
    });
  });

  \$(document).delegate('.checkout-product .input-group .btn-delete', 'click', function () {
    var key = \$(this).attr('data-product-key');
    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/cart_delete',
      type: 'post',
      data: {
        key: key
      },
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
        \$('#cart > button > a > span').button('loading');
        \$('.checkout-cart').addClass('checkout-loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#cart > button > a > span').button('reset');
      },
      success: function (json) {
        setTimeout(function () {
          \$('#cart-total').html(json['total']);
        }, 100);

        if (json['redirect']) {
          location = json['redirect'];
        } else {
          \$('#cart ul').load('index.php?route=common/cart/info ul li');

          \$(document).trigger('journal_checkout_reload_payment');
          \$(document).trigger('journal_checkout_reload_shipping');
        }
      }
    });
  });

  \$(document).delegate('#button-voucher', 'click', function () {
    \$.ajax({
      cache: false,
      url: 'index.php?route=extension/total/voucher/voucher',
      type: 'post',
      data: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
        \$('#button-voucher').button('loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#button-voucher').button('reset');
      },
      success: function (json) {
        if (json['error']) {
          alert(json['error']);
        } else {
          _clear_success_message();
        }
      }
    });
  });

  \$(document).delegate('#button-coupon', 'click', function () {
    \$.ajax({
      cache: false,
      url: 'index.php?route=extension/total/coupon/coupon',
      type: 'post',
      data: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
        \$('#button-coupon').button('loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#button-coupon').button('reset');
      },
      success: function (json) {
        if (json['error']) {
          alert(json['error']);
        } else {
          _clear_success_message();
        }
      }
    });
  });

  \$(document).delegate('#button-reward', 'click', function () {
    \$.ajax({
      cache: false,
      url: 'index.php?route=extension/total/reward/reward',
      type: 'post',
      data: 'reward=' + encodeURIComponent(\$('input[name=\\'reward\\']').val()),
      dataType: 'json',
      beforeSend: function () {
        triggerLoadingOn();
        \$('#button-reward').button('loading');
      },
      complete: function () {
        triggerLoadingOff();
        \$('#button-reward').button('reset');
      },
      success: function (json) {
        if (json['error']) {
          alert(json['error']);
        } else {
          _clear_success_message();
        }
      }
    });
  });

  var ajax_calls = 0;

  function triggerLoadingOn() {
    \$('body > .tooltip').remove();
    ajax_calls++;
    if (ajax_calls === 1) {
      \$('#journal-checkout-confirm-button').button('loading');
      \$('#journal-checkout-confirm-button, .checkout-register, .checkout-payment-form, .checkout-shipping-form, .checkout-cart, .confirm-section, .checkout-shipping-methods, .checkout-payment-methods, .coupon-voucher').addClass('checkout-loading');
    }
  }

  function triggerLoadingOff() {
    ajax_calls--;
    if (ajax_calls === 0) {
      \$('#journal-checkout-confirm-button').button('reset');
      \$('#journal-checkout-confirm-button, .checkout-register, .checkout-payment-form, .checkout-shipping-form, .checkout-cart, .confirm-section, .checkout-shipping-methods, .checkout-payment-methods, .coupon-voucher').removeClass('checkout-loading');
    }
  }

  ";
        // line 687
        if ((isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 688
            echo "  \$('.journal-checkout [value=\"existing\"]').trigger('change');
  ";
        } else {
            // line 690
            echo "  \$('input[name=\"account\"]:checked').trigger('change');
  ";
        }
        // line 692
        echo "
  \$(document).trigger('journal_checkout_reload_cart', true);

  ";
        // line 695
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_auto_save", 1 => "0"), "method") == "1")) {
            // line 696
            echo "  function _auto_save() {
    var data = {};

    \$('.journal-checkout input[type=\"text\"], .journal-checkout .left input[type=\"hidden\"], .journal-checkout input[type=\"password\"], .journal-checkout select, .journal-checkout input:checked, .journal-checkout textarea').each(function () {
      data[\$(this).attr('name')] = \$(this).val();
    });

    \$.ajax({
      cache: false,
      url: 'index.php?route=journal2/checkout/confirm&saveOnly=true',
      type: 'post',
      data: data,
      dataType: 'json',
      success: function () {
        \$(document).trigger('journal_checkout_reload_cart', true);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.error && console.error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('.journal-checkout .left input').on('blur', _auto_save);
  \$('.journal-checkout .left input[type=\"hidden\"]').on('change', _auto_save);
  ";
        }
        // line 721
        echo "
  \$(document).delegate('button[id^=\\'button-payment-custom-field\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input[name*=\\'custom_field\\']').val(json['code']).trigger('change');
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
</script>
";
        // line 774
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1010 => 774,  955 => 721,  928 => 696,  926 => 695,  921 => 692,  917 => 690,  913 => 688,  911 => 687,  609 => 387,  603 => 383,  601 => 382,  590 => 373,  582 => 367,  580 => 366,  386 => 175,  378 => 170,  367 => 164,  364 => 163,  357 => 159,  352 => 156,  350 => 155,  347 => 154,  340 => 150,  335 => 147,  333 => 146,  330 => 145,  325 => 142,  319 => 140,  317 => 139,  313 => 138,  308 => 135,  306 => 134,  300 => 131,  295 => 129,  289 => 126,  285 => 125,  277 => 121,  271 => 119,  269 => 118,  265 => 116,  262 => 115,  256 => 113,  254 => 112,  249 => 111,  247 => 110,  242 => 107,  237 => 105,  227 => 100,  219 => 97,  215 => 96,  211 => 95,  205 => 92,  201 => 91,  196 => 89,  192 => 87,  190 => 86,  187 => 85,  145 => 46,  139 => 45,  135 => 43,  128 => 39,  122 => 38,  118 => 36,  116 => 35,  110 => 32,  104 => 31,  98 => 28,  95 => 27,  93 => 26,  86 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="one-page-checkout {{ class }}">{{ content_top }}*/
/*       <h1 class="heading-title">{{ journal2.settings.get('one_page_title', 'Quick Checkout') }}</h1>*/
/* */
/*       <div class="journal-checkout">*/
/*         <div class="left">*/
/*           {% if not is_logged_in %}*/
/*             <div class="checkout-content login-box">*/
/*               <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_register_selector', 'Create an Account or Login') }}</h2>*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="account" value="register" {% if default_auth == 'register' %} checked="checked" {% endif %} />*/
/*                   {{ text_register }}*/
/*                 </label>*/
/*               </div>*/
/*               {% if allow_guest_checkout %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="account" value="guest" {% if default_auth == 'guest' %} checked="checked" {% endif %} />*/
/*                     {{ text_guest }}*/
/*                   </label>*/
/*                 </div>*/
/*               {% endif %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="account" value="login" {% if default_auth == 'login' %} checked="checked" {% endif %}/>*/
/*                   {{ journal2.settings.get('one_page_lang_returning', 'Returning Customer') }}*/
/*                 </label>*/
/*               </div>*/
/*             </div>*/
/*             <script>*/
/*               $(document).delegate('input[name="shipping_address"]', 'change', function () {*/
/*                 var $this = $(this);*/
/* */
/*                 if ($this.is(':checked')) {*/
/*                   $('#shipping-address').hide();*/
/*                   $this.val(1);*/
/*                   $(document).trigger('journal_checkout_address_changed', 'payment');*/
/*                 } else {*/
/*                   $('#shipping-address').show().find('input[type="text"]').val('');*/
/*                   $(document).trigger('journal_checkout_address_changed', 'payment');*/
/*                   $(document).trigger('journal_checkout_address_changed', 'shipping');*/
/*                   $this.val(0);*/
/*                 }*/
/*               });*/
/*               $(document).delegate('input[name="account"]', 'change', function () {*/
/*                 if (this.value === 'login') {*/
/*                   $('.checkout-login').slideDown(300);*/
/*                   $('.checkout-register').parent().addClass('login-mobile');*/
/*                   //$('.checkout-register').slideUp(300);*/
/*                 } else {*/
/*                   $('.checkout-login').slideUp(300);*/
/*                   $('.checkout-register').parent().removeClass('login-mobile');*/
/*                   //$('.checkout-register').slideDown(300);*/
/*                   if (this.value === 'register') {*/
/*                     $('#password').slideDown(300);*/
/*                   } else {*/
/*                     $('#password').slideUp(300);*/
/*                   }*/
/*                 }*/
/* */
/*                 $('html').removeClass('checkout-type-login checkout-type-register checkout-type-guest').addClass('checkout-type-' + this.value);*/
/*               });*/
/*             </script>*/
/*           {% endif %}*/
/* */
/*           {% if not is_logged_in %}*/
/*             <div class="checkout-content checkout-login">*/
/*               <fieldset>*/
/*                 <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_returning', 'Returning Customer') }}</h2>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-login_email">{{ entry_email }}</label>*/
/*                   <input type="text" name="login_email" value="" placeholder="{{ entry_email }}" id="input-login_email" class="form-control"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-login_password">{{ entry_password }}</label>*/
/*                   <input type="password" name="login_password" value="" placeholder="{{ entry_password }}" id="input-login_password" class="form-control"/>*/
/*                   <a href="{{ forgotten }}">{{ text_forgotten }}</a>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <input type="button" value="{{ button_login }}" id="button-login" data-loading-text="{{ text_loading }}" class="btn-primary button"/>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/* */
/*             {{ register_form }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="right">*/
/*           <section class="section-left">*/
/*             {% if is_logged_in %}*/
/*               {{ payment_address }}*/
/*               {% if is_shipping_required %}*/
/*                 {{ shipping_address }}*/
/*               {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="spw">*/
/*               {% if is_shipping_required %}*/
/*                 {{ shipping_methods }}*/
/*               {% endif %}*/
/*               {{ payment_methods }}*/
/*             </div>*/
/*           </section>*/
/*           <section class="section-right">*/
/*             {{ coupon_voucher_reward }}*/
/*             {{ cart }}*/
/*             <div class="checkout-content confirm-section">*/
/*               <div>*/
/*                 <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_comments', text_comments) }}</h2>*/
/*                 <label>*/
/*                   <textarea name="comment" rows="8" class="form-control">{{ comment }}</textarea>*/
/*                 </label>*/
/*               </div>*/
/*               {% if entry_newsletter %}*/
/*                 <div class="checkbox check-newsletter">*/
/*                   <label for="newsletter">*/
/*                     <input type="checkbox" name="newsletter" value="1" id="newsletter"/>*/
/*                     <span>{{ entry_newsletter }}</span>*/
/*                     {% if journal2.settings.get('newsletter_privacy_information') %}*/
/*                     <span>{{ journal2.settings.get('newsletter_privacy_information.information_text') }}</span>*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*               {% endif %}*/
/* */
/*               {% if text_privacy %}*/
/*                 <div class="radio check-privacy">*/
/*                   <label>*/
/*                     <input type="checkbox" name="privacy" value="1"/>*/
/*                     <span>{{ text_privacy }}</span>*/
/*                   </label>*/
/*                 </div>*/
/*               {% endif %}*/
/* */
/*               {% if text_agree %}*/
/*                 <div class="radio check-terms">*/
/*                   <label>*/
/*                     <input type="checkbox" name="agree" value="1"/>*/
/*                     <span>{{ text_agree }}</span>*/
/*                   </label>*/
/*                 </div>*/
/*               {% endif %}*/
/*               <div class="confirm-order">*/
/*                 <button id="journal-checkout-confirm-button" data-loading-text="{{ journal2.settings.get('one_page_lang_loading_text', 'Loading..') }}" class="button confirm-button">{{ journal2.settings.get('one_page_lang_confirm_order', 'Confirm Order') }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </section>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   window['journal_account_status'] = {{ is_logged_in | number_format }};*/
/* */
/*   $(document).delegate('input[name="shipping_method"]', 'change', function () {*/
/*     $(document).trigger('journal_checkout_shipping_changed', this.value);*/
/*   });*/
/* */
/*   $(document).delegate('input[name="payment_method"]', 'change', function () {*/
/*     $(document).trigger('journal_checkout_payment_changed', this.value);*/
/*   });*/
/* */
/*   $(document).delegate('#input-login_email, #input-login_password, #button-login', 'keydown', function (e) {*/
/*     if (e.keyCode == 13) {*/
/*       _do_login();*/
/*     }*/
/*   });*/
/* */
/*   $(document).delegate('#button-login', 'click', function () {*/
/*     _do_login();*/
/*   });*/
/* */
/*   function _do_login() {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/login',*/
/*       type: 'post',*/
/*       data: {*/
/*         email: $('input[name="login_email"]').val(),*/
/*         password: $('input[name="login_password"]').val()*/
/*       },*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#button-login').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#button-login').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         if (json['error'] && json['error']['warning']) {*/
/*           alert(json['error']['warning']);*/
/*         }*/
/*         if (json['redirect']) {*/
/*           location = json['redirect'];*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   function _clear_success_message() {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/clear_success_message',*/
/*       type: 'get',*/
/*       dataType: 'html',*/
/*       success: function(response){*/
/*         console.log(response);*/
/*         $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*         $(document).trigger('journal_checkout_reload_payment');*/
/*         $(document).trigger('journal_checkout_reload_shipping');*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   $(document).delegate('.journal-checkout .confirm-button', 'click', function () {*/
/*     var data = {};*/
/* */
/*     $('.journal-checkout input[type="text"], .journal-checkout input[type="password"], .journal-checkout .left input[type="hidden"], .journal-checkout select, .journal-checkout input:checked, .journal-checkout textarea').each(function () {*/
/*       data[$(this).attr('name')] = $(this).val();*/
/*     });*/
/* */
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/confirm',*/
/*       type: 'post',*/
/*       data: data,*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*       },*/
/*       success: function (json) {*/
/*         $('.text-danger').remove();*/
/*         $('.has-error').removeClass('has-error');*/
/* */
/*         if (json['redirect_cart']) {*/
/*           location = json['redirect_cart'];*/
/*           return;*/
/*         }*/
/* */
/*         window['journal_current_account_status'] = json['account_status'];*/
/* */
/*         if (json['errors']) {*/
/*           $.each(json['errors'], function (k, v) {*/
/*             if (k === 'shipping_method' || k === 'payment_method') {*/
/*               return;*/
/*             }*/
/*             if ($.inArray(k, ['payment_country', 'payment_zone', 'shipping_country', 'shipping_zone']) !== -1) {*/
/*               k += '_id';*/
/*             } else if (k.indexOf('custom_field') === 0) {*/
/*               k = k.replace('custom_field', '');*/
/*               k = 'custom_field[' + k + ']';*/
/*             } else if (k.indexOf('payment_custom_field') === 0) {*/
/*               k = k.replace('payment_custom_field', '');*/
/*               k = 'payment_custom_field[' + k + ']';*/
/*             } else if (k.indexOf('shipping_custom_field') === 0) {*/
/*               k = k.replace('shipping_custom_field', '');*/
/*               k = 'shipping_custom_field[' + k + ']';*/
/*             }*/
/*             var $element = $('.journal-checkout [name="' + k + '"]');*/
/*             $element.closest('.form-group').addClass('has-error');*/
/*             $element.after('<div class="text-danger">' + v + '</div>');*/
/*           });*/
/*           triggerLoadingOff();*/
/*           try {*/
/*             $('html, body').animate({scrollTop: $('.has-error').offset().top}, 'slow');*/
/*           } catch (e) {*/
/*           }*/
/*         } else if (json['redirect']) {*/
/*           location = json['redirect'];*/
/*         } else {*/
/*           var $btn = $('#payment-confirm-button input[type="button"], #payment-confirm-button input[type="submit"], #payment-confirm-button .pull-right a, #payment-confirm-button .right a, #payment-confirm-button a.button, #button-confirm, #button-pay, #payment-confirm-button.payment-iyzico_checkout_installment .submitButton, #stripe-confirm').first();*/
/*           if ($btn.attr('href')) {*/
/*             location = $btn.attr('href');*/
/*           } else {*/
/*             $btn.trigger('click');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_customer_group_changed', function (e, value) {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout',*/
/*       type: 'get',*/
/*       data: {*/
/*         customer_group_id: value*/
/*       },*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#account, #address').addClass('checkout-loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#account, #address').removeClass('checkout-loading');*/
/*       },*/
/*       success: function (html) {*/
/*         var $html = $(html);*/
/*         $('#account').html($html.find('#account'));*/
/*         $('#address').html($html.find('#address'));*/
/*         $('#password').html($html.find('#password'));*/
/*         $('#account .form-group[data-sort]').detach().each(function () {*/
/*           if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/*             $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/*           }*/
/* */
/*           if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/*             $('#account .form-group:last').after(this);*/
/*           }*/
/* */
/*           if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/*             $('#account .form-group:first').before(this);*/
/*           }*/
/*         });*/
/*         $(document).trigger('journal_checkout_reload_payment');*/
/*         if ($('input[name="shipping_address"]').is(':checked')) {*/
/*           $(document).trigger('journal_checkout_reload_shipping');*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_address_changed', function (e, type) {*/
/*     var data = {};*/
/*     if ($('input[name="' + type + '_address"]:checked').val() === 'existing') {*/
/*       data[type + '_address_id'] = $('select[name="' + type + '_address_id"]').val();*/
/*     } else {*/
/*       data[type + '_country_id'] = $('select[name="' + type + '_country_id"]').val();*/
/*       data[type + '_postcode'] = $('input[name="' + type + '_postcode"]').val();*/
/*       data[type + '_zone_id'] = $('select[name="' + type + '_zone_id"]').val();*/
/*       {% if not is_logged_in %}*/
/*       if (type === 'payment' && $('input[name="shipping_address"]').is(":checked")) {*/
/*         data['shipping_country_id'] = $('select[name="' + type + '_country_id"]').val();*/
/*         data['shipping_postcode'] = $('input[name="' + type + '_postcode"]').val();*/
/*         data['shipping_zone_id'] = $('select[name="' + type + '_zone_id"]').val();*/
/*       }*/
/*       {% endif %}*/
/*     }*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/save',*/
/*       type: 'post',*/
/*       data: data,*/
/*       dataType: 'json',*/
/*       success: function (json) {*/
/*         $(document).trigger('journal_checkout_reload_' + type);*/
/*         {% if not is_logged_in %}*/
/*         if (type === 'payment' && $('input[name="shipping_address"]').is(':checked')) {*/
/*           $(document).trigger('journal_checkout_reload_shipping');*/
/*         }*/
/*         {% endif %}*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_shipping_changed', function (e, value) {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/save',*/
/*       type: 'post',*/
/*       data: {*/
/*         shipping_method: value*/
/*       },*/
/*       dataType: 'json',*/
/*       success: function () {*/
/*         $.ajax({*/
/*           cache: false,*/
/*           url: 'index.php?route=journal2/checkout/cart_update',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           success: function (json) {*/
/*             setTimeout(function () {*/
/*               $('#cart-total').html(json['total']);*/
/*             }, 100);*/
/* */
/*             $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/*           }*/
/*         });*/
/*         $(document).trigger('journal_checkout_reload_payment');*/
/*         $(document).trigger('journal_checkout_reload_cart');*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_payment_changed', function (e, value) {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/save',*/
/*       type: 'post',*/
/*       data: {*/
/*         payment_method: value*/
/*       },*/
/*       dataType: 'json',*/
/*       success: function () {*/
/*         $(document).trigger('journal_checkout_reload_cart');*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_reload_shipping', function () {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/shipping',*/
/*       type: 'get',*/
/*       dataType: 'html',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('.checkout-shipping-methods').addClass('checkout-loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('.checkout-shipping-methods').removeClass('checkout-loading');*/
/*       },*/
/*       success: function (html) {*/
/*         $('.checkout-shipping-methods').replaceWith(html);*/
/*         $(document).trigger('journal_checkout_reload_cart');*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_reload_payment', function () {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/payment',*/
/*       type: 'get',*/
/*       dataType: 'html',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('.checkout-payment-methods').addClass('checkout-loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('.checkout-payment-methods').removeClass('checkout-loading');*/
/*       },*/
/*       success: function (html) {*/
/*         $('.checkout-payment-methods').replaceWith(html);*/
/*         $(document).trigger('journal_checkout_reload_cart');*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).on('journal_checkout_reload_cart', function (e, first) {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/cart',*/
/*       type: 'get',*/
/*       dataType: 'html',*/
/*       beforeSend: function () {*/
/*         if (!first) {*/
/*           triggerLoadingOn();*/
/*           $('.checkout-cart').addClass('checkout-loading');*/
/*         }*/
/*       },*/
/*       complete: function () {*/
/*         if (!first) {*/
/*           triggerLoadingOff();*/
/*           $('.checkout-cart').removeClass('checkout-loading');*/
/*         }*/
/*       },*/
/*       success: function (html) {*/
/*         $('.checkout-cart').replaceWith(html);*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).delegate('.checkout-product .input-group .btn-update', 'click', function () {*/
/*     var key = $(this).attr('data-product-key');*/
/*     var qty = $('input[name="quantity[' + key + ']"]').val();*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/cart_update',*/
/*       type: 'post',*/
/*       data: {*/
/*         key: key,*/
/*         quantity: qty*/
/*       },*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#cart > button > a > span').button('loading');*/
/*         $('.checkout-cart').addClass('checkout-loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#cart > button > a > span').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         setTimeout(function () {*/
/*           $('#cart-total').html(json['total']);*/
/*         }, 100);*/
/* */
/*         if (json['redirect']) {*/
/*           location = json['redirect'];*/
/*         } else {*/
/*           $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*           $(document).trigger('journal_checkout_reload_payment');*/
/*           $(document).trigger('journal_checkout_reload_shipping');*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).delegate('.checkout-product .input-group .btn-delete', 'click', function () {*/
/*     var key = $(this).attr('data-product-key');*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/cart_delete',*/
/*       type: 'post',*/
/*       data: {*/
/*         key: key*/
/*       },*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#cart > button > a > span').button('loading');*/
/*         $('.checkout-cart').addClass('checkout-loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#cart > button > a > span').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         setTimeout(function () {*/
/*           $('#cart-total').html(json['total']);*/
/*         }, 100);*/
/* */
/*         if (json['redirect']) {*/
/*           location = json['redirect'];*/
/*         } else {*/
/*           $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*           $(document).trigger('journal_checkout_reload_payment');*/
/*           $(document).trigger('journal_checkout_reload_shipping');*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).delegate('#button-voucher', 'click', function () {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=extension/total/voucher/voucher',*/
/*       type: 'post',*/
/*       data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#button-voucher').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#button-voucher').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         if (json['error']) {*/
/*           alert(json['error']);*/
/*         } else {*/
/*           _clear_success_message();*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).delegate('#button-coupon', 'click', function () {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=extension/total/coupon/coupon',*/
/*       type: 'post',*/
/*       data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#button-coupon').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#button-coupon').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         if (json['error']) {*/
/*           alert(json['error']);*/
/*         } else {*/
/*           _clear_success_message();*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).delegate('#button-reward', 'click', function () {*/
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=extension/total/reward/reward',*/
/*       type: 'post',*/
/*       data: 'reward=' + encodeURIComponent($('input[name=\'reward\']').val()),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         triggerLoadingOn();*/
/*         $('#button-reward').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         triggerLoadingOff();*/
/*         $('#button-reward').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         if (json['error']) {*/
/*           alert(json['error']);*/
/*         } else {*/
/*           _clear_success_message();*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   var ajax_calls = 0;*/
/* */
/*   function triggerLoadingOn() {*/
/*     $('body > .tooltip').remove();*/
/*     ajax_calls++;*/
/*     if (ajax_calls === 1) {*/
/*       $('#journal-checkout-confirm-button').button('loading');*/
/*       $('#journal-checkout-confirm-button, .checkout-register, .checkout-payment-form, .checkout-shipping-form, .checkout-cart, .confirm-section, .checkout-shipping-methods, .checkout-payment-methods, .coupon-voucher').addClass('checkout-loading');*/
/*     }*/
/*   }*/
/* */
/*   function triggerLoadingOff() {*/
/*     ajax_calls--;*/
/*     if (ajax_calls === 0) {*/
/*       $('#journal-checkout-confirm-button').button('reset');*/
/*       $('#journal-checkout-confirm-button, .checkout-register, .checkout-payment-form, .checkout-shipping-form, .checkout-cart, .confirm-section, .checkout-shipping-methods, .checkout-payment-methods, .coupon-voucher').removeClass('checkout-loading');*/
/*     }*/
/*   }*/
/* */
/*   {% if is_logged_in %}*/
/*   $('.journal-checkout [value="existing"]').trigger('change');*/
/*   {% else %}*/
/*   $('input[name="account"]:checked').trigger('change');*/
/*   {% endif %}*/
/* */
/*   $(document).trigger('journal_checkout_reload_cart', true);*/
/* */
/*   {% if journal2.settings.get('one_page_auto_save', '0') == '1' %}*/
/*   function _auto_save() {*/
/*     var data = {};*/
/* */
/*     $('.journal-checkout input[type="text"], .journal-checkout .left input[type="hidden"], .journal-checkout input[type="password"], .journal-checkout select, .journal-checkout input:checked, .journal-checkout textarea').each(function () {*/
/*       data[$(this).attr('name')] = $(this).val();*/
/*     });*/
/* */
/*     $.ajax({*/
/*       cache: false,*/
/*       url: 'index.php?route=journal2/checkout/confirm&saveOnly=true',*/
/*       type: 'post',*/
/*       data: data,*/
/*       dataType: 'json',*/
/*       success: function () {*/
/*         $(document).trigger('journal_checkout_reload_cart', true);*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         console.error && console.error(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   $('.journal-checkout .left input').on('blur', _auto_save);*/
/*   $('.journal-checkout .left input[type="hidden"]').on('change', _auto_save);*/
/*   {% endif %}*/
/* */
/*   $(document).delegate('button[id^=\'button-payment-custom-field\']', 'click', function() {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input[name*=\'custom_field\']').val(json['code']).trigger('change');*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* </script>*/
/* {{ footer }}*/
/* */
