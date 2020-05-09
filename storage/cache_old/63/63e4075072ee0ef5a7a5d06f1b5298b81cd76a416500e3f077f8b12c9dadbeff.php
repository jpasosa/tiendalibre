<?php

/* journal2/template/journal2/module/header_notice.twig */
class __TwigTemplate_6c54bb4b77b055b90f31f8c4275e3f0eb1cceb70477229420847f2b7880caf18 extends Twig_Template
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
        echo "<div id=\"journal-header-notice-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-header-notice-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " header-notice ";
        echo (isset($context["text_align"]) ? $context["text_align"] : null);
        echo "-notice ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["float_icon"]) ? $context["float_icon"] : null);
        echo " ";
        echo (isset($context["fullwidth"]) ? $context["fullwidth"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <div>
    <span class=\"notice-text\">";
        // line 3
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "<span>";
        echo (isset($context["text"]) ? $context["text"] : null);
        echo "</span></span>

    ";
        // line 5
        if (((isset($context["close_button_type"]) ? $context["close_button_type"] : null) == "icon")) {
            // line 6
            echo "      <button class=\"close-notice x-icon\"></button>
    ";
        } else {
            // line 8
            echo "      <button class=\"close-notice button\">";
            echo (isset($context["close_button_text"]) ? $context["close_button_text"] : null);
            echo "</button>
    ";
        }
        // line 10
        echo "
    <script>
      \$('#journal-header-notice-";
        // line 12
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .close-notice').click(function () {
        var isSticky = \$('html').hasClass('header-sticky');
        var h = \$('#journal-header-notice-";
        // line 14
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').outerHeight();
        Journal.stickyHeaderHeight -= h;
        \$('#journal-header-notice-";
        // line 16
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').slideUp(function () {
          if (isSticky) {
            \$('.header').css('top', \$('.header').css('top') - h);
          }
        });
        ";
        // line 21
        if ((isset($context["do_not_show_again"]) ? $context["do_not_show_again"] : null)) {
            // line 22
            echo "        \$.cookie('";
            echo (isset($context["cookie_name"]) ? $context["cookie_name"] : null);
            echo "', true, {
          expires: 365
        });
        ";
        }
        // line 26
        echo "      });

      ";
        // line 28
        if ((isset($context["global_style"]) ? $context["global_style"] : null)) {
            // line 29
            echo "      \$('<style>";
            echo twig_join_filter((isset($context["global_style"]) ? $context["global_style"] : null), " ");
            echo "</style>').appendTo(\$('head'));
      ";
        }
        // line 31
        echo "    </script>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/header_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  94 => 29,  92 => 28,  88 => 26,  80 => 22,  78 => 21,  70 => 16,  65 => 14,  60 => 12,  56 => 10,  50 => 8,  46 => 6,  44 => 5,  37 => 3,  19 => 1,);
    }
}
/* <div id="journal-header-notice-{{ module }}" class="journal-header-notice-{{ module_id }} header-notice {{ text_align }}-notice {{ disable_on_classes | join(' ') }} {{ float_icon }} {{ fullwidth }}" style="{{ css }}">*/
/*   <div>*/
/*     <span class="notice-text">{{ icon }}<span>{{ text }}</span></span>*/
/* */
/*     {% if close_button_type == 'icon' %}*/
/*       <button class="close-notice x-icon"></button>*/
/*     {% else %}*/
/*       <button class="close-notice button">{{ close_button_text }}</button>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*       $('#journal-header-notice-{{ module }} .close-notice').click(function () {*/
/*         var isSticky = $('html').hasClass('header-sticky');*/
/*         var h = $('#journal-header-notice-{{ module }}').outerHeight();*/
/*         Journal.stickyHeaderHeight -= h;*/
/*         $('#journal-header-notice-{{ module }}').slideUp(function () {*/
/*           if (isSticky) {*/
/*             $('.header').css('top', $('.header').css('top') - h);*/
/*           }*/
/*         });*/
/*         {% if do_not_show_again %}*/
/*         $.cookie('{{ cookie_name }}', true, {*/
/*           expires: 365*/
/*         });*/
/*         {% endif %}*/
/*       });*/
/* */
/*       {% if global_style %}*/
/*       $('<style>{{ global_style | join(' ') }}</style>').appendTo($('head'));*/
/*       {% endif %}*/
/*     </script>*/
/*   </div>*/
/* </div>*/
/* */
