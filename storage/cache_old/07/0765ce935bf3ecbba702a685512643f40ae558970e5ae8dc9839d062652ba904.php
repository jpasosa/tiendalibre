<?php

/* journal2/template/journal2/checkout/coupon_voucher_reward.twig */
class __TwigTemplate_ffd260e5c12d6d4e9e000f74af47378b120fadf064d9e228d742378ac85581cc extends Twig_Template
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
        echo "<div class=\"checkout-content coupon-voucher\">
  <h2 class=\"secondary-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_coupon_voucher", 1 => "Do you Have a Coupon or Voucher?"), "method");
        echo "</h2>
  <div class=\"cvr\">
    ";
        // line 4
        if ((isset($context["coupon_status"]) ? $context["coupon_status"] : null)) {
            // line 5
            echo "      <div class=\"panel-body checkout-coupon\">
        <label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
            // line 6
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_coupon_placeholder", 1 => "Enter coupon code"), "method");
            echo "</label>
        <div class=\"input-group\">
          <input type=\"text\" name=\"coupon\" value=\"";
            // line 8
            echo (isset($context["coupon"]) ? $context["coupon"] : null);
            echo "\" placeholder=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_coupon_placeholder", 1 => "Enter coupon code"), "method");
            echo "\" id=\"input-coupon\" class=\"form-control\"/>
          <span class=\"input-group-btn\">
                <input type=\"button\" value=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_coupon_button", 1 => "Apply Coupon"), "method");
            echo "\" id=\"button-coupon\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn-primary button\"/>
            </span>
        </div>
      </div>
    ";
        }
        // line 15
        echo "    ";
        if ((isset($context["voucher_status"]) ? $context["voucher_status"] : null)) {
            // line 16
            echo "      <div class=\"panel-body checkout-voucher\">
        <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
            // line 17
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_voucher_placeholder", 1 => "Enter voucher code"), "method");
            echo "</label>
        <div class=\"input-group\">
          <input type=\"text\" name=\"voucher\" value=\"";
            // line 19
            echo (isset($context["voucher"]) ? $context["voucher"] : null);
            echo "\" placeholder=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_voucher_placeholder", 1 => "Enter voucher code"), "method");
            echo "\" id=\"input-voucher\" class=\"form-control\"/>
          <span class=\"input-group-btn\">
                <input type=\"button\" value=\"";
            // line 21
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_voucher_button", 1 => "Apply Voucher"), "method");
            echo "\" id=\"button-voucher\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn-primary button\"/>
            </span>
        </div>
      </div>
    ";
        }
        // line 26
        echo "    ";
        if ((isset($context["reward_status"]) ? $context["reward_status"] : null)) {
            // line 27
            echo "      <div class=\"panel-body checkout-reward\">
        <label class=\"col-sm-2 control-label\" for=\"input-reward\">";
            // line 28
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_reward_placeholder", 1 => "Enter reward points"), "method");
            echo "</label>
        <div class=\"reward-stats\">
          <span class=\"reward-total\">";
            // line 30
            echo (isset($context["reward_total"]) ? $context["reward_total"] : null);
            echo "</span>
          <span class=\"reward-use\">";
            // line 31
            echo (isset($context["reward_use"]) ? $context["reward_use"] : null);
            echo "</span>
        </div>
        <div class=\"input-group\">
          <input type=\"text\" name=\"reward\" value=\"";
            // line 34
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\" placeholder=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_reward_placeholder", 1 => "Enter reward points"), "method");
            echo "\" id=\"input-reward\" class=\"form-control\"/>
          <span class=\"input-group-btn\">
                <input type=\"button\" value=\"";
            // line 36
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_reward_button", 1 => "Apply Points"), "method");
            echo "\" id=\"button-reward\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn-primary button\"/>
            </span>
        </div>
      </div>
    ";
        }
        // line 41
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/coupon_voucher_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  110 => 36,  103 => 34,  97 => 31,  93 => 30,  88 => 28,  85 => 27,  82 => 26,  72 => 21,  65 => 19,  60 => 17,  57 => 16,  54 => 15,  44 => 10,  37 => 8,  32 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-content coupon-voucher">*/
/*   <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_coupon_voucher', 'Do you Have a Coupon or Voucher?') }}</h2>*/
/*   <div class="cvr">*/
/*     {% if coupon_status %}*/
/*       <div class="panel-body checkout-coupon">*/
/*         <label class="col-sm-2 control-label" for="input-coupon">{{ journal2.settings.get('one_page_lang_coupon_placeholder', 'Enter coupon code') }}</label>*/
/*         <div class="input-group">*/
/*           <input type="text" name="coupon" value="{{ coupon }}" placeholder="{{ journal2.settings.get('one_page_lang_coupon_placeholder', 'Enter coupon code') }}" id="input-coupon" class="form-control"/>*/
/*           <span class="input-group-btn">*/
/*                 <input type="button" value="{{ journal2.settings.get('one_page_lang_coupon_button', 'Apply Coupon') }}" id="button-coupon" data-loading-text="{{ text_loading }}" class="btn-primary button"/>*/
/*             </span>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if voucher_status %}*/
/*       <div class="panel-body checkout-voucher">*/
/*         <label class="col-sm-2 control-label" for="input-voucher">{{ journal2.settings.get('one_page_lang_voucher_placeholder', 'Enter voucher code') }}</label>*/
/*         <div class="input-group">*/
/*           <input type="text" name="voucher" value="{{ voucher }}" placeholder="{{ journal2.settings.get('one_page_lang_voucher_placeholder', 'Enter voucher code') }}" id="input-voucher" class="form-control"/>*/
/*           <span class="input-group-btn">*/
/*                 <input type="button" value="{{ journal2.settings.get('one_page_lang_voucher_button', 'Apply Voucher') }}" id="button-voucher" data-loading-text="{{ text_loading }}" class="btn-primary button"/>*/
/*             </span>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if reward_status %}*/
/*       <div class="panel-body checkout-reward">*/
/*         <label class="col-sm-2 control-label" for="input-reward">{{ journal2.settings.get('one_page_lang_reward_placeholder', 'Enter reward points') }}</label>*/
/*         <div class="reward-stats">*/
/*           <span class="reward-total">{{ reward_total }}</span>*/
/*           <span class="reward-use">{{ reward_use }}</span>*/
/*         </div>*/
/*         <div class="input-group">*/
/*           <input type="text" name="reward" value="{{ reward }}" placeholder="{{ journal2.settings.get('one_page_lang_reward_placeholder', 'Enter reward points') }}" id="input-reward" class="form-control"/>*/
/*           <span class="input-group-btn">*/
/*                 <input type="button" value="{{ journal2.settings.get('one_page_lang_reward_button', 'Apply Points') }}" id="button-reward" data-loading-text="{{ text_loading }}" class="btn-primary button"/>*/
/*             </span>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
