<?php

/* journal2/template/journal2/checkout/payment_methods.twig */
class __TwigTemplate_564d160eb35a1f63fecc42f6c8c129707261bda07858b3a6166d0e65e7bd588d extends Twig_Template
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
        echo "<div class=\"checkout-content checkout-payment-methods\">
  ";
        // line 2
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 3
            echo "    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  ";
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 6
            echo "    <h2 class=\"secondary-title\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_payment_method", 1 => "Payment Method"), "method");
            echo "</h2>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 8
                echo "      <div class=\"radio\">
        <label>";
                // line 9
                if ((($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                    // line 10
                    echo "            ";
                    $context["code"] = $this->getAttribute($context["payment_method"], "code", array());
                    // line 11
                    echo "            <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" checked=\"checked\"/>
          ";
                } else {
                    // line 13
                    echo "            <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\"/>
          ";
                }
                // line 15
                echo "          ";
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "
          ";
                // line 16
                if ($this->getAttribute($context["payment_method"], "terms", array())) {
                    // line 17
                    echo "            (";
                    echo $this->getAttribute($context["payment_method"], "terms", array());
                    echo ")
          ";
                }
                // line 18
                echo " </label>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  ";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/payment_methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  83 => 21,  75 => 18,  69 => 17,  67 => 16,  62 => 15,  56 => 13,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  38 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-content checkout-payment-methods">*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   {% if payment_methods %}*/
/*     <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_payment_method', 'Payment Method') }}</h2>*/
/*     {% for payment_method in payment_methods %}*/
/*       <div class="radio">*/
/*         <label>{% if payment_method.code == code or not code %}*/
/*             {% set code = payment_method.code %}*/
/*             <input type="radio" name="payment_method" value="{{ payment_method.code }}" checked="checked"/>*/
/*           {% else %}*/
/*             <input type="radio" name="payment_method" value="{{ payment_method.code }}"/>*/
/*           {% endif %}*/
/*           {{ payment_method.title }}*/
/*           {% if payment_method.terms %}*/
/*             ({{ payment_method.terms }})*/
/*           {% endif %} </label>*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* </div>*/
/* */
