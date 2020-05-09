<?php

/* journal2/template/common/column_left.twig */
class __TwigTemplate_78aac0b559fe2badf4b923d99e59c452b133dd02bf6470c72d38a1ad855b9a83 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "  <div id=\"column-left\" class=\"col-sm-3 hidden-xs side-column ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "flyout_column_left_active"), "method")) {
                echo " flyout-left ";
            }
            echo "\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo "      ";
                echo $context["module"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  32 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/*   <div id="column-left" class="col-sm-3 hidden-xs side-column {% if journal2.settings.get('flyout_column_left_active') %} flyout-left {% endif %}">*/
/*     {% for module in modules %}*/
/*       {{ module }}*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
