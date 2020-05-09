<?php

/* journal2/template/journal2/checkout/shipping_methods.twig */
class __TwigTemplate_a7e7ae4046bcf2fd03509ed9c28af054c4271d1034aaa157b9360ac3ce286c1f extends Twig_Template
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
        echo "<div class=\"checkout-content checkout-shipping-methods\">
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
        if ((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) {
            // line 6
            echo "    <h2 class=\"secondary-title\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_ship_method", 1 => "Shipping Method"), "method");
            echo "</h2>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 8
                echo "      <p><strong>";
                echo $this->getAttribute($context["shipping_method"], "title", array());
                echo "</strong></p>
      ";
                // line 9
                if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                    // line 10
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 11
                        echo "          <div class=\"radio\">
            <label> ";
                        // line 12
                        if ((($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                            // line 13
                            echo "                ";
                            $context["code"] = $this->getAttribute($context["quote"], "code", array());
                            // line 14
                            echo "                <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" checked=\"checked\"/>
              ";
                        } else {
                            // line 16
                            echo "                <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\"/>
              ";
                        }
                        // line 18
                        echo "              ";
                        echo $this->getAttribute($context["quote"], "title", array());
                        echo " - ";
                        echo $this->getAttribute($context["quote"], "text", array());
                        echo "</label>
          </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "      ";
                } else {
                    // line 22
                    echo "        <div class=\"alert alert-danger alert-dismissible\">";
                    echo $this->getAttribute($context["shipping_method"], "error", array());
                    echo "</div>
      ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/shipping_methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  101 => 25,  95 => 24,  89 => 22,  86 => 21,  74 => 18,  68 => 16,  62 => 14,  59 => 13,  57 => 12,  54 => 11,  49 => 10,  47 => 9,  42 => 8,  38 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-content checkout-shipping-methods">*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   {% if shipping_methods %}*/
/*     <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_ship_method', 'Shipping Method') }}</h2>*/
/*     {% for shipping_method in shipping_methods %}*/
/*       <p><strong>{{ shipping_method.title }}</strong></p>*/
/*       {% if not shipping_method.error %}*/
/*         {% for quote in shipping_method.quote %}*/
/*           <div class="radio">*/
/*             <label> {% if quote.code == code or not code %}*/
/*                 {% set code = quote.code %}*/
/*                 <input type="radio" name="shipping_method" value="{{ quote.code }}" checked="checked"/>*/
/*               {% else %}*/
/*                 <input type="radio" name="shipping_method" value="{{ quote.code }}"/>*/
/*               {% endif %}*/
/*               {{ quote.title }} - {{ quote.text }}</label>*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*         <div class="alert alert-danger alert-dismissible">{{ shipping_method.error }}</div>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* </div>*/
/* */
