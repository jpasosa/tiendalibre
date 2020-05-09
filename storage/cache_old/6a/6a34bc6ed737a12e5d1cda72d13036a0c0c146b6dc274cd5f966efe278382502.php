<?php

/* journal2/template/journal2/module/side_blocks.twig */
class __TwigTemplate_23cec7208aae4b3b09c6ff2d5ba32b2235d1e277b885685e127142f3a8f34ab3 extends Twig_Template
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
        echo "<div id=\"side-block-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"side-block-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " side-block-";
        echo (isset($context["alignment"]) ? $context["alignment"] : null);
        echo " side-block-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  ";
        // line 2
        if (((isset($context["type"]) ? $context["type"] : null) == "button")) {
            // line 3
            echo "    <div class=\"side-block-icon\" style=\"width: ";
            echo (isset($context["icon_width"]) ? $context["icon_width"] : null);
            echo "; height: ";
            echo (isset($context["icon_height"]) ? $context["icon_height"] : null);
            echo "; line-height: ";
            echo (isset($context["icon_height"]) ? $context["icon_height"] : null);
            echo "; background-color: ";
            echo (isset($context["icon_bgcolor"]) ? $context["icon_bgcolor"] : null);
            echo "; ";
            echo (isset($context["icon_border"]) ? $context["icon_border"] : null);
            echo "; ";
            echo (isset($context["pos_offset"]) ? $context["pos_offset"] : null);
            echo "\"><a href=\"";
            echo (isset($context["url"]) ? $context["url"] : null);
            echo "\" ";
            echo (isset($context["target"]) ? $context["target"] : null);
            echo ">";
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "</a></div>
  ";
            // line 4
            if ((isset($context["icon_bg_hover_color"]) ? $context["icon_bg_hover_color"] : null)) {
                // line 5
                echo "    <script>\$('<style>#side-block-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .side-block-icon:hover { background-color: ";
                echo (isset($context["icon_bg_hover_color"]) ? $context["icon_bg_hover_color"] : null);
                echo " !important; }</style>').appendTo(\$('head'));</script>
  ";
            }
            // line 7
            echo "  ";
        }
        // line 8
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : null) == "block")) {
            // line 9
            echo "    <div class=\"side-block-icon\" style=\"width: ";
            echo (isset($context["icon_width"]) ? $context["icon_width"] : null);
            echo "; height: ";
            echo (isset($context["icon_height"]) ? $context["icon_height"] : null);
            echo "; line-height: ";
            echo (isset($context["icon_height"]) ? $context["icon_height"] : null);
            echo "; background-color: ";
            echo (isset($context["icon_bgcolor"]) ? $context["icon_bgcolor"] : null);
            echo "; ";
            echo (isset($context["icon_border"]) ? $context["icon_border"] : null);
            echo "; ";
            echo (isset($context["pos_offset"]) ? $context["pos_offset"] : null);
            echo "\">";
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "</div>
    <div class=\"side-block-content\" style=\"background-color: ";
            // line 10
            echo (isset($context["content_bgcolor"]) ? $context["content_bgcolor"] : null);
            echo "; padding: ";
            echo (isset($context["content_padding"]) ? $context["content_padding"] : null);
            echo "\" data-url=\"";
            echo (isset($context["url"]) ? $context["url"] : null);
            echo "\">Loading...</div>
  ";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/side_blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 12,  88 => 10,  71 => 9,  68 => 8,  65 => 7,  57 => 5,  55 => 4,  34 => 3,  32 => 2,  19 => 1,);
    }
}
/* <div id="side-block-{{ module }}" class="side-block-{{ module_id }} side-block-{{ alignment }} side-block-{{ type }}" style="{{ css }}">*/
/*   {% if type == 'button' %}*/
/*     <div class="side-block-icon" style="width: {{ icon_width }}; height: {{ icon_height }}; line-height: {{ icon_height }}; background-color: {{ icon_bgcolor }}; {{ icon_border }}; {{ pos_offset }}"><a href="{{ url }}" {{ target }}>{{ icon }}</a></div>*/
/*   {% if icon_bg_hover_color %}*/
/*     <script>$('<style>#side-block-{{ module }} .side-block-icon:hover { background-color: {{ icon_bg_hover_color }} !important; }</style>').appendTo($('head'));</script>*/
/*   {% endif %}*/
/*   {% endif %}*/
/*   {% if type == 'block' %}*/
/*     <div class="side-block-icon" style="width: {{ icon_width }}; height: {{ icon_height }}; line-height: {{ icon_height }}; background-color: {{ icon_bgcolor }}; {{ icon_border }}; {{ pos_offset }}">{{ icon }}</div>*/
/*     <div class="side-block-content" style="background-color: {{ content_bgcolor }}; padding: {{ content_padding }}" data-url="{{ url }}">Loading...</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
