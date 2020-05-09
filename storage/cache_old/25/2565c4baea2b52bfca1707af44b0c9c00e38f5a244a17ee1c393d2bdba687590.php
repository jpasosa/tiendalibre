<?php

/* journal2/template/journal2/module/popup.twig */
class __TwigTemplate_1091ae75554be618643f1363eb3d1bfab4921bc8abd2c2f4a8e13a676514caf9 extends Twig_Template
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
        echo "<div id=\"journal-popup-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"journal-popup-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " journal-popup journal-popup-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        if ( !(isset($context["close_button"]) ? $context["close_button"] : null)) {
            echo " hide-close-button ";
        }
        echo "\" style=\"";
        echo twig_join_filter((isset($context["global_style"]) ? $context["global_style"] : null), "; ");
        echo "; ";
        if ( !(isset($context["is_ajax"]) ? $context["is_ajax"] : null)) {
            echo " display: none ";
        }
        echo "\">
  ";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    <div class=\"journal-popup-header\">
      <div class=\"journal-popup-header-content heading-title\" style=\"";
            // line 4
            echo twig_join_filter((isset($context["header_style"]) ? $context["header_style"] : null), "; ");
            echo "\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</div>
    </div>
  ";
        }
        // line 7
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
            // line 8
            echo "    <div class=\"journal-popup-content ";
            echo (isset($context["content_overflow"]) ? $context["content_overflow"] : null);
            echo "\" style=\"";
            echo twig_join_filter((isset($context["content_style"]) ? $context["content_style"] : null), "; ");
            echo "\">
      ";
            // line 9
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if (((isset($context["type"]) ? $context["type"] : null) == "contact")) {
            // line 14
            echo "    ";
            echo twig_include($this->env, $context, ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_template"), "method") . "/template/information/contact.twig"));
            echo "
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        if (((isset($context["newsletter"]) ? $context["newsletter"] : null) && ((isset($context["type"]) ? $context["type"] : null) == "text"))) {
            // line 18
            echo "    <div class=\"journal-popup-newsletter\">
      <div class=\"journal-popup-newsletter-content\" style=\"";
            // line 19
            echo twig_join_filter((isset($context["newsletter_style"]) ? $context["newsletter_style"] : null), "; ");
            echo "\">";
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "</div>
    </div>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (((isset($context["footer"]) ? $context["footer"] : null) && ((isset($context["type"]) ? $context["type"] : null) == "contact"))) {
            // line 24
            echo "    <div class=\"journal-popup-footer\">
      <div class=\"journal-popup-footer-content ";
            // line 25
            echo (isset($context["footer_buttons_class"]) ? $context["footer_buttons_class"] : null);
            echo "\" style=\"";
            echo twig_join_filter((isset($context["footer_style"]) ? $context["footer_style"] : null), "; ");
            echo "\">
        <a onclick=\"Journal.contact(\$('#journal-popup-";
            // line 26
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "'))\" class=\"button button-icon-";
            echo $this->getAttribute((isset($context["button_submit"]) ? $context["button_submit"] : null), "icon_position", array());
            echo "\" style=\"";
            echo $this->getAttribute((isset($context["button_submit"]) ? $context["button_submit"] : null), "style", array());
            echo "\">";
            echo $this->getAttribute((isset($context["button_submit"]) ? $context["button_submit"] : null), "icon", array());
            echo $this->getAttribute((isset($context["button_submit"]) ? $context["button_submit"] : null), "text", array());
            echo "</a>
      </div>
    </div>
    <script>\$('head').append('<style>.journal-popup-footer-content  .button:hover { ";
            // line 29
            echo $this->getAttribute((isset($context["button_submit"]) ? $context["button_submit"] : null), "hover_style", array());
            echo "</style>');</script>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (((isset($context["footer"]) ? $context["footer"] : null) && ((isset($context["type"]) ? $context["type"] : null) == "text"))) {
            // line 33
            echo "    <div class=\"journal-popup-footer\">
      <div class=\"journal-popup-footer-content ";
            // line 34
            echo (isset($context["footer_buttons_class"]) ? $context["footer_buttons_class"] : null);
            echo "\" style=\"";
            echo twig_join_filter((isset($context["footer_style"]) ? $context["footer_style"] : null), "; ");
            echo "\">
        ";
            // line 35
            if (( !(isset($context["is_ajax"]) ? $context["is_ajax"] : null) && (isset($context["do_not_show_again"]) ? $context["do_not_show_again"] : null))) {
                // line 36
                echo "          <span class=\"dont-show-label\">
                <label>
                    <input type=\"checkbox\" class=\"dont-show-me\"/>
                    <span style=\"";
                // line 39
                echo twig_join_filter((isset($context["do_not_show_again_font"]) ? $context["do_not_show_again_font"] : null), "; ");
                echo "\">";
                echo (isset($context["do_not_show_again_text"]) ? $context["do_not_show_again_text"] : null);
                echo "</span>
                </label>
            </span>
        ";
            }
            // line 43
            echo "        ";
            if ($this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "status", array())) {
                // line 44
                echo "          ";
                if ($this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "link", array())) {
                    // line 45
                    echo "            <a href=\"";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "link", array());
                    echo "\" class=\"button button-1 button-icon-";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "icon_position", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "target", array());
                    echo " style=\"";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "style", array());
                    echo "\">";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "icon", array());
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "text", array());
                    echo "</a>
          ";
                } else {
                    // line 47
                    echo "            <a onclick=\"\$.magnificPopup.close();\" class=\"button button-1 button-icon-";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "icon_position", array());
                    echo "\" style=\"";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "style", array());
                    echo "\">";
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "icon", array());
                    echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "text", array());
                    echo "</a>
          ";
                }
                // line 49
                echo "        ";
            }
            // line 50
            echo "
        ";
            // line 51
            if ($this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "status", array())) {
                // line 52
                echo "          ";
                if ($this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "link", array())) {
                    // line 53
                    echo "            <a href=\"";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "link", array());
                    echo "\" class=\"button button-1 button-icon-";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "icon_position", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "target", array());
                    echo " style=\"";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "style", array());
                    echo "\">";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "icon", array());
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "text", array());
                    echo "</a>
          ";
                } else {
                    // line 55
                    echo "            <a onclick=\"\$.magnificPopup.close();\" class=\"button button-1 button-icon-";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "icon_position", array());
                    echo "\" style=\"";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "style", array());
                    echo "\">";
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "icon", array());
                    echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "text", array());
                    echo "</a>
          ";
                }
                // line 57
                echo "        ";
            }
            // line 58
            echo "      </div>
    </div>
  ";
        }
        // line 61
        echo "</div>
";
        // line 62
        if ( !(isset($context["is_ajax"]) ? $context["is_ajax"] : null)) {
            // line 63
            echo "<script>
  (function () {
    ";
            // line 65
            if (($this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "status", array()) && $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "hover_style", array()))) {
                // line 66
                echo "    \$('<style>#journal-popup-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .button-1:hover { ";
                echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "hover_style", array());
                echo "</style>').appendTo(\$('head'));
    ";
            }
            // line 68
            echo "
    ";
            // line 69
            if (($this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "status", array()) && $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "hover_style", array()))) {
                // line 70
                echo "    \$('<style>#journal-popup-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .button-1:hover { ";
                echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "hover_style", array());
                echo "</style>').appendTo(\$('head'));
    ";
            }
            // line 72
            echo "
    var open_after = parseInt('";
            // line 73
            echo (isset($context["open_after"]) ? $context["open_after"] : null);
            echo "', 10);
    var close_after = parseInt('";
            // line 74
            echo (isset($context["close_after"]) ? $context["close_after"] : null);
            echo "', 10);

    setTimeout(function () {
      \$('#journal-popup-";
            // line 77
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "').show();
      \$.magnificPopup.open({
        items: {
          src: '#journal-popup-";
            // line 80
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "',
          type: 'inline'
        },
        showCloseBtn: ";
            // line 83
            if ((isset($context["close_button"]) ? $context["close_button"] : null)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        enableEscapeKey: ";
            // line 84
            if ((isset($context["close_button"]) ? $context["close_button"] : null)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        closeOnContentClick: false,
        closeOnBgClick: false,
        removalDelay: 200,
        callbacks: {
          close: function () {
            \$('html').removeClass('has-popup');
            \$('#journal-popup-";
            // line 91
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "').remove();
          },
          open: function () {
            \$('html').addClass('has-popup');
          }
        }
      });

      if (close_after > 0) {
        setTimeout(function () {
          \$.magnificPopup.close();
        }, close_after);
      }
    }, open_after);

    \$('#journal-popup-";
            // line 106
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .dont-show-me').change(function () {
      if (\$(this).is(':checked')) {
        \$.cookie('";
            // line 108
            echo (isset($context["cookie_name"]) ? $context["cookie_name"] : null);
            echo "', true, {
          path: '/',
          expires: 365
        });
      } else {
        \$.removeCookie('";
            // line 113
            echo (isset($context["cookie_name"]) ? $context["cookie_name"] : null);
            echo "')
      }
    });
  }());
</script>
";
        } else {
            // line 119
            echo "<script type=\"text/html\" style=\"display: none;\">
  ";
            // line 120
            if (($this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "status", array()) && $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "hover_style", array()))) {
                // line 121
                echo "    \$('
    <style>#journal-popup-";
                // line 122
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .button-1:hover { ";
                echo $this->getAttribute((isset($context["button_1"]) ? $context["button_1"] : null), "hover_style", array());
                echo "</style>').appendTo(\$('head'));
  ";
            }
            // line 124
            echo "
  ";
            // line 125
            if (($this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "status", array()) && $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "hover_style", array()))) {
                // line 126
                echo "    \$('
    <style>#journal-popup-";
                // line 127
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .button-1:hover { ";
                echo $this->getAttribute((isset($context["button_2"]) ? $context["button_2"] : null), "hover_style", array());
                echo "</style>').appendTo(\$('head'));
  ";
            }
            // line 129
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 129,  377 => 127,  374 => 126,  372 => 125,  369 => 124,  362 => 122,  359 => 121,  357 => 120,  354 => 119,  345 => 113,  337 => 108,  332 => 106,  314 => 91,  300 => 84,  292 => 83,  286 => 80,  280 => 77,  274 => 74,  270 => 73,  267 => 72,  259 => 70,  257 => 69,  254 => 68,  246 => 66,  244 => 65,  240 => 63,  238 => 62,  235 => 61,  230 => 58,  227 => 57,  216 => 55,  201 => 53,  198 => 52,  196 => 51,  193 => 50,  190 => 49,  179 => 47,  164 => 45,  161 => 44,  158 => 43,  149 => 39,  144 => 36,  142 => 35,  136 => 34,  133 => 33,  131 => 32,  128 => 31,  123 => 29,  110 => 26,  104 => 25,  101 => 24,  99 => 23,  96 => 22,  88 => 19,  85 => 18,  83 => 17,  80 => 16,  74 => 14,  72 => 13,  69 => 12,  63 => 9,  56 => 8,  53 => 7,  45 => 4,  42 => 3,  40 => 2,  19 => 1,);
    }
}
/* <div id="journal-popup-{{ module }}" class="journal-popup-{{ module_id }} journal-popup journal-popup-{{ type }} {{ disable_on_classes | join(' ') }} {% if not close_button %} hide-close-button {% endif %}" style="{{ global_style | join('; ') }}; {% if not is_ajax %} display: none {% endif %}">*/
/*   {% if title %}*/
/*     <div class="journal-popup-header">*/
/*       <div class="journal-popup-header-content heading-title" style="{{ header_style | join ('; ') }}">{{ title }}</div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if type == 'text' %}*/
/*     <div class="journal-popup-content {{ content_overflow }}" style="{{ content_style | join ('; ') }}">*/
/*       {{ content }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if type == 'contact' %}*/
/*     {{ include(config.get('config_template') ~ "/template/information/contact.twig") }}*/
/*   {% endif %}*/
/* */
/*   {% if newsletter and type == 'text' %}*/
/*     <div class="journal-popup-newsletter">*/
/*       <div class="journal-popup-newsletter-content" style="{{ newsletter_style | join ('; ') }}">{{ newsletter }}</div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if footer and type == 'contact' %}*/
/*     <div class="journal-popup-footer">*/
/*       <div class="journal-popup-footer-content {{ footer_buttons_class }}" style="{{ footer_style | join('; ') }}">*/
/*         <a onclick="Journal.contact($('#journal-popup-{{ module }}'))" class="button button-icon-{{ button_submit.icon_position }}" style="{{ button_submit.style }}">{{ button_submit.icon }}{{ button_submit.text }}</a>*/
/*       </div>*/
/*     </div>*/
/*     <script>$('head').append('<style>.journal-popup-footer-content  .button:hover { {{ button_submit.hover_style }}</style>');</script>*/
/*   {% endif %}*/
/* */
/*   {% if footer and type == 'text' %}*/
/*     <div class="journal-popup-footer">*/
/*       <div class="journal-popup-footer-content {{ footer_buttons_class }}" style="{{ footer_style | join('; ') }}">*/
/*         {% if not is_ajax and do_not_show_again %}*/
/*           <span class="dont-show-label">*/
/*                 <label>*/
/*                     <input type="checkbox" class="dont-show-me"/>*/
/*                     <span style="{{ do_not_show_again_font | join ('; ') }}">{{ do_not_show_again_text }}</span>*/
/*                 </label>*/
/*             </span>*/
/*         {% endif %}*/
/*         {% if button_1.status %}*/
/*           {% if button_1.link %}*/
/*             <a href="{{ button_1.link }}" class="button button-1 button-icon-{{ button_1.icon_position }}" {{ button_1.target }} style="{{ button_1.style }}">{{ button_1.icon }}{{ button_1.text }}</a>*/
/*           {% else %}*/
/*             <a onclick="$.magnificPopup.close();" class="button button-1 button-icon-{{ button_1.icon_position }}" style="{{ button_1.style }}">{{ button_1.icon }}{{ button_1.text }}</a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if button_2.status %}*/
/*           {% if button_2.link %}*/
/*             <a href="{{ button_2.link }}" class="button button-1 button-icon-{{ button_2.icon_position }}" {{ button_2.target }} style="{{ button_2.style }}">{{ button_2.icon }}{{ button_2.text }}</a>*/
/*           {% else %}*/
/*             <a onclick="$.magnificPopup.close();" class="button button-1 button-icon-{{ button_2.icon_position }}" style="{{ button_2.style }}">{{ button_2.icon }}{{ button_2.text }}</a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* {% if not is_ajax %}*/
/* <script>*/
/*   (function () {*/
/*     {% if button_1.status and button_1.hover_style %}*/
/*     $('<style>#journal-popup-{{ module }} .button-1:hover { {{ button_1.hover_style }}</style>').appendTo($('head'));*/
/*     {% endif %}*/
/* */
/*     {% if button_2.status and button_2.hover_style %}*/
/*     $('<style>#journal-popup-{{ module }} .button-1:hover { {{ button_2.hover_style }}</style>').appendTo($('head'));*/
/*     {% endif %}*/
/* */
/*     var open_after = parseInt('{{ open_after }}', 10);*/
/*     var close_after = parseInt('{{ close_after }}', 10);*/
/* */
/*     setTimeout(function () {*/
/*       $('#journal-popup-{{ module }}').show();*/
/*       $.magnificPopup.open({*/
/*         items: {*/
/*           src: '#journal-popup-{{ module }}',*/
/*           type: 'inline'*/
/*         },*/
/*         showCloseBtn: {% if close_button %} true {% else %} false {% endif %},*/
/*         enableEscapeKey: {% if close_button %} true {% else %} false {% endif %},*/
/*         closeOnContentClick: false,*/
/*         closeOnBgClick: false,*/
/*         removalDelay: 200,*/
/*         callbacks: {*/
/*           close: function () {*/
/*             $('html').removeClass('has-popup');*/
/*             $('#journal-popup-{{ module }}').remove();*/
/*           },*/
/*           open: function () {*/
/*             $('html').addClass('has-popup');*/
/*           }*/
/*         }*/
/*       });*/
/* */
/*       if (close_after > 0) {*/
/*         setTimeout(function () {*/
/*           $.magnificPopup.close();*/
/*         }, close_after);*/
/*       }*/
/*     }, open_after);*/
/* */
/*     $('#journal-popup-{{ module }} .dont-show-me').change(function () {*/
/*       if ($(this).is(':checked')) {*/
/*         $.cookie('{{ cookie_name }}', true, {*/
/*           path: '/',*/
/*           expires: 365*/
/*         });*/
/*       } else {*/
/*         $.removeCookie('{{ cookie_name }}')*/
/*       }*/
/*     });*/
/*   }());*/
/* </script>*/
/* {% else %}*/
/* <script type="text/html" style="display: none;">*/
/*   {% if button_1.status and button_1.hover_style %}*/
/*     $('*/
/*     <style>#journal-popup-{{ module }} .button-1:hover { {{ button_1.hover_style }}</style>').appendTo($('head'));*/
/*   {% endif %}*/
/* */
/*   {% if button_2.status and button_2.hover_style %}*/
/*     $('*/
/*     <style>#journal-popup-{{ module }} .button-1:hover { {{ button_2.hover_style }}</style>').appendTo($('head'));*/
/*   {% endif %}*/
/* </script>*/
/* {% endif %}*/
/* */
