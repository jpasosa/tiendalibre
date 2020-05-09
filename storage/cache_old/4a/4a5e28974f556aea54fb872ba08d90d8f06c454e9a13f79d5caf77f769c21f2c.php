<?php

/* journal2/template/journal2/checkout/register.twig */
class __TwigTemplate_ef53cd81b7e675c972886480e7ebae14c3bdde1a4c2a5b1ff4481851911b54b7 extends Twig_Template
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
        echo "<div class=\"checkout-content checkout-register\">
    <fieldset id=\"account\">
        <h2 class=\"secondary-title\">";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_pers_details", 1 => (isset($context["text_your_details"]) ? $context["text_your_details"] : null)), "method");
        echo "</h2>

      <div class=\"form-group customer-group\" style=\"display: ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"control-label\">";
        // line 6
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            echo "          ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 9
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 11
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                ";
                // line 12
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
            </div>
          ";
            } else {
                // line 15
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 17
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                ";
                // line 18
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
            </div>
          ";
            }
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </div>
        <div class=\"form-group required\">
            <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 24
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <input type=\"text\" name=\"firstname\" value=\"";
        // line 25
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => "firstname", 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\"
                   id=\"input-payment-firstname\" class=\"form-control\"/>
        </div>
        <div class=\"form-group required\">
            <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 29
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <input type=\"text\" name=\"lastname\" value=\"";
        // line 30
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => "lastname", 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\"
                   id=\"input-payment-lastname\" class=\"form-control\"/>
        </div>
        <div class=\"form-group required\">
            <label class=\"control-label\" for=\"input-payment-email\">";
        // line 34
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <input type=\"text\" name=\"email\" value=\"";
        // line 35
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => "email", 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\"
                   id=\"input-payment-email\" class=\"form-control\"/>
        </div>
        <div class=\"form-group phone-input ";
        // line 38
        echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_phone_required", 1 => "1"), "method")) ? ("required") : (""));
        echo "\">
            <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 39
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <input type=\"text\" name=\"telephone\" value=\"";
        // line 40
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => "telephone", 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\"
                   id=\"input-payment-telephone\" class=\"form-control\"/>
        </div>
        ";
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        // line 46
        echo "                   ";
        // line 47
        echo "        ";
        // line 48
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 49
            echo "
        ";
            // line 50
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 51
                echo "
          ";
                // line 52
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 53
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 54
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <select name=\"custom_field[";
                    // line 55
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 56
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>



                ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 61
                        echo "


                  <option value=\"";
                        // line 64
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>



                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "


              </select>
            </div>
          ";
                }
                // line 75
                echo "
          ";
                // line 76
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 77
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 78
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 79
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 80
                        echo "                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"custom_field[";
                        // line 82
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                      ";
                        // line 83
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo " </div>
            </div>
          ";
                }
                // line 88
                echo "
          ";
                // line 89
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 90
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 91
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 92
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 93
                        echo "                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\" name=\"custom_field[";
                        // line 95
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                      ";
                        // line 96
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo " </div>
            </div>
          ";
                }
                // line 101
                echo "
          ";
                // line 102
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 103
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 104
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"custom_field[";
                    // line 105
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
            </div>
          ";
                }
                // line 108
                echo "
          ";
                // line 109
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 110
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 111
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <textarea name=\"custom_field[";
                    // line 112
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
            </div>
          ";
                }
                // line 115
                echo "
          ";
                // line 116
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 117
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 118
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <br />
              <button type=\"button\" id=\"button-payment-custom-field";
                    // line 120
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 121
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            </div>
          ";
                }
                // line 124
                echo "
          ";
                // line 125
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 126
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 127
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 129
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
            </div>
          ";
                }
                // line 135
                echo "
          ";
                // line 136
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 137
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 138
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 140
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
            </div>
          ";
                }
                // line 146
                echo "
          ";
                // line 147
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 148
                    echo "            <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field ";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo "required";
                    }
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 149
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 151
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
            </div>
          ";
                }
                // line 157
                echo "
        ";
            }
            // line 159
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "    </fieldset>
    <fieldset id=\"password\">
        <h2 class=\"secondary-title\">";
        // line 163
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_your_pass", 1 => (isset($context["text_your_password"]) ? $context["text_your_password"] : null)), "method");
        echo "</h2>

        <div class=\"form-group required\">
            <label class=\"control-label\" for=\"input-payment-password\">";
        // line 166
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <input type=\"password\" name=\"password\" value=\"";
        // line 167
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => "password", 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\"
                   id=\"input-payment-password\" class=\"form-control\"/>
        </div>
        <div class=\"form-group required\">
            <label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 171
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
            <input type=\"password\" name=\"confirm\" value=\"";
        // line 172
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => "confirm", 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\"
                   id=\"input-payment-confirm\" class=\"form-control\"/>
        </div>
    </fieldset>
    <fieldset id=\"address\">
        <h2 class=\"secondary-title\">";
        // line 177
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_your_address", 1 => (isset($context["text_your_address"]) ? $context["text_your_address"] : null)), "method");
        echo "</h2>
        ";
        // line 178
        echo (isset($context["payment_address_form"]) ? $context["payment_address_form"] : null);
        echo "
    </fieldset>
  ";
        // line 180
        if ((isset($context["is_shipping_required"]) ? $context["is_shipping_required"] : null)) {
            // line 181
            echo "    <div class=\"checkbox\">
        <label>
          ";
            // line 183
            if (((isset($context["shipping_address"]) ? $context["shipping_address"] : null) == "1")) {
                // line 184
                echo "            <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 186
                echo "            <input type=\"checkbox\" name=\"shipping_address\" value=\"0\" />
            ";
            }
            // line 188
            echo "            ";
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "
        </label>
    </div>
    <fieldset id=\"shipping-address\" style=\"display: ";
            // line 191
            echo ((((isset($context["shipping_address"]) ? $context["shipping_address"] : null) == "1")) ? ("none") : ("block"));
            echo "\">
        <h2 class=\"secondary-title\">";
            // line 192
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_ship_address", 1 => "Shipping Address"), "method");
            echo "</h2>
        ";
            // line 193
            echo (isset($context["shipping_address_form"]) ? $context["shipping_address_form"] : null);
            echo "
    </fieldset>
    ";
        }
        // line 196
        echo "    <script>
        \$(document).delegate('input[name=\"customer_group_id\"]', 'change', function () {
            \$(document).trigger('journal_checkout_customer_group_changed', this.value);
        });
    </script>
        <script type=\"text/javascript\"><!--
        \$('#account .date').datetimepicker({
            pickTime: false
        });

        \$('#account .time').datetimepicker({
            pickDate: false
        });

        \$('#account .datetime').datetimepicker({
            pickDate: true,
            pickTime: true
        });
        //--></script>
        <script>
        \$('#account .form-group[data-sort]').detach().each(function() {
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
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 196,  631 => 193,  627 => 192,  623 => 191,  616 => 188,  612 => 186,  608 => 184,  606 => 183,  602 => 181,  600 => 180,  595 => 178,  591 => 177,  581 => 172,  577 => 171,  568 => 167,  564 => 166,  558 => 163,  554 => 161,  547 => 159,  543 => 157,  528 => 151,  521 => 149,  510 => 148,  508 => 147,  505 => 146,  490 => 140,  483 => 138,  472 => 137,  470 => 136,  467 => 135,  452 => 129,  445 => 127,  434 => 126,  432 => 125,  429 => 124,  419 => 121,  411 => 120,  406 => 118,  395 => 117,  393 => 116,  390 => 115,  378 => 112,  372 => 111,  361 => 110,  359 => 109,  356 => 108,  344 => 105,  338 => 104,  327 => 103,  325 => 102,  322 => 101,  317 => 98,  308 => 96,  302 => 95,  298 => 93,  292 => 92,  288 => 91,  277 => 90,  275 => 89,  272 => 88,  267 => 85,  258 => 83,  252 => 82,  248 => 80,  242 => 79,  238 => 78,  227 => 77,  225 => 76,  222 => 75,  214 => 69,  201 => 64,  196 => 61,  192 => 60,  185 => 56,  179 => 55,  173 => 54,  162 => 53,  160 => 52,  157 => 51,  155 => 50,  152 => 49,  147 => 48,  145 => 47,  143 => 46,  141 => 45,  139 => 44,  131 => 40,  127 => 39,  123 => 38,  115 => 35,  111 => 34,  102 => 30,  98 => 29,  89 => 25,  85 => 24,  81 => 22,  75 => 21,  69 => 18,  65 => 17,  61 => 15,  55 => 12,  51 => 11,  47 => 9,  44 => 8,  40 => 7,  36 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="checkout-content checkout-register">*/
/*     <fieldset id="account">*/
/*         <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_pers_details', text_your_details) }}</h2>*/
/* */
/*       <div class="form-group customer-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*         <label class="control-label">{{ entry_customer_group }}</label>*/
/*         {% for customer_group in customer_groups %}*/
/*           {% if customer_group.customer_group_id == customer_group_id %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                 {{ customer_group.name }}</label>*/
/*             </div>*/
/*           {% else %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                 {{ customer_group.name }}</label>*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*         <div class="form-group required">*/
/*             <label class="control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*             <input type="text" name="firstname" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'firstname', '']) }}" placeholder="{{ entry_firstname }}"*/
/*                    id="input-payment-firstname" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <label class="control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*             <input type="text" name="lastname" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'lastname', '']) }}" placeholder="{{ entry_lastname }}"*/
/*                    id="input-payment-lastname" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <label class="control-label" for="input-payment-email">{{ entry_email }}</label>*/
/*             <input type="text" name="email" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'email', '']) }}" placeholder="{{ entry_email }}"*/
/*                    id="input-payment-email" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group phone-input {{ journal2.settings.get('one_page_phone_required', '1') ? 'required' : '' }}">*/
/*             <label class="control-label" for="input-payment-telephone">{{ entry_telephone }}</label>*/
/*             <input type="text" name="telephone" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'telephone', '']) }}" placeholder="{{ entry_telephone }}"*/
/*                    id="input-payment-telephone" class="form-control"/>*/
/*         </div>*/
/*         {#<div class="form-group fax-input">#}*/
/*             {#<label class="control-label" for="input-payment-fax">{{ entry_fax }}</label>#}*/
/*             {#<input type="text" name="fax" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'fax', '']) }}" placeholder="{{ entry_fax }}" id="input-payment-fax"#}*/
/*                    {#class="form-control"/>#}*/
/*         {#</div>#}*/
/*       {% for custom_field in custom_fields %}*/
/* */
/*         {% if custom_field.location == 'account' %}*/
/* */
/*           {% if custom_field.type == 'select' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/* */
/* */
/* */
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/* */
/* */
/* */
/*                   <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* */
/*                 {% endfor %}*/
/* */
/* */
/* */
/*               </select>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'radio' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label">{{ custom_field.name }}</label>*/
/*               <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <div class="radio">*/
/*                     <label>*/
/*                       <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                       {{ custom_field_value.name }}</label>*/
/*                   </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'checkbox' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label">{{ custom_field.name }}</label>*/
/*               <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                       {{ custom_field_value.name }}</label>*/
/*                   </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'text' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'textarea' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'file' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label">{{ custom_field.name }}</label>*/
/*               <br />*/
/*               <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default button"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'date' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'time' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if custom_field.type == 'time' %}*/
/*             <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field {% if custom_field.required %}required{% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*               <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*         {% endif %}*/
/* */
/*       {% endfor %}*/
/*     </fieldset>*/
/*     <fieldset id="password">*/
/*         <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_your_pass', text_your_password) }}</h2>*/
/* */
/*         <div class="form-group required">*/
/*             <label class="control-label" for="input-payment-password">{{ entry_password }}</label>*/
/*             <input type="password" name="password" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'password', '']) }}" placeholder="{{ entry_password }}"*/
/*                    id="input-payment-password" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <label class="control-label" for="input-payment-confirm">{{ entry_confirm }}</label>*/
/*             <input type="password" name="confirm" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, 'confirm', '']) }}" placeholder="{{ entry_confirm }}"*/
/*                    id="input-payment-confirm" class="form-control"/>*/
/*         </div>*/
/*     </fieldset>*/
/*     <fieldset id="address">*/
/*         <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_your_address', text_your_address) }}</h2>*/
/*         {{ payment_address_form }}*/
/*     </fieldset>*/
/*   {% if is_shipping_required %}*/
/*     <div class="checkbox">*/
/*         <label>*/
/*           {% if shipping_address == '1' %}*/
/*             <input type="checkbox" name="shipping_address" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="shipping_address" value="0" />*/
/*             {% endif %}*/
/*             {{ entry_shipping }}*/
/*         </label>*/
/*     </div>*/
/*     <fieldset id="shipping-address" style="display: {{ shipping_address == '1' ? 'none' : 'block' }}">*/
/*         <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_ship_address', 'Shipping Address') }}</h2>*/
/*         {{ shipping_address_form }}*/
/*     </fieldset>*/
/*     {% endif %}*/
/*     <script>*/
/*         $(document).delegate('input[name="customer_group_id"]', 'change', function () {*/
/*             $(document).trigger('journal_checkout_customer_group_changed', this.value);*/
/*         });*/
/*     </script>*/
/*         <script type="text/javascript"><!--*/
/*         $('#account .date').datetimepicker({*/
/*             pickTime: false*/
/*         });*/
/* */
/*         $('#account .time').datetimepicker({*/
/*             pickDate: false*/
/*         });*/
/* */
/*         $('#account .datetime').datetimepicker({*/
/*             pickDate: true,*/
/*             pickTime: true*/
/*         });*/
/*         //--></script>*/
/*         <script>*/
/*         $('#account .form-group[data-sort]').detach().each(function() {*/
/*             if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/*                 $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/*             }*/
/* */
/*             if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/*                 $('#account .form-group:last').after(this);*/
/*             }*/
/* */
/*             if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/*                 $('#account .form-group:first').before(this);*/
/*             }*/
/*         });*/
/*     </script>*/
/* </div>*/
/* */
