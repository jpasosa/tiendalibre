<?php

/* journal2/template/journal2/module/carousel_product.twig */
class __TwigTemplate_04fe6045a4cf8b498fb07b260a251d39ba01292afa2876ccd94043dc0f02b6ac extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"carousel-";
        echo (isset($context["module_id"]) ? $context["module_id"] : null);
        echo " box journal-carousel carousel-product ";
        echo twig_join_filter((isset($context["disable_on_classes"]) ? $context["disable_on_classes"] : null), " ");
        echo " ";
        echo (isset($context["show_title_class"]) ? $context["show_title_class"] : null);
        echo " ";
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " bullets-on ";
        }
        echo " ";
        if (((isset($context["arrows"]) ? $context["arrows"] : null) == "top")) {
            echo " arrows-top ";
        }
        echo " ";
        echo (isset($context["gutter_on_class"]) ? $context["gutter_on_class"] : null);
        echo "\" style=\"";
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "\">
  <div>
    <div class=\"htabs box-heading ";
        // line 3
        echo (isset($context["single_class"]) ? $context["single_class"] : null);
        echo "\" ";
        if ( !(isset($context["show_title"]) ? $context["show_title"] : null)) {
            echo " style=\"display: none\" ";
        }
        echo ">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 5
            echo "        ";
            if ($this->getAttribute($context["section"], "is_link", array())) {
                // line 6
                echo "          <a href=\"";
                echo $this->getAttribute($context["section"], "url", array());
                echo "\" ";
                echo $this->getAttribute($context["section"], "target", array());
                echo ">";
                echo $this->getAttribute($context["section"], "section_name", array());
                echo "</a>
        ";
            } elseif ($this->getAttribute(            // line 7
$context["section"], "items", array())) {
                // line 8
                echo "          <a href=\"#carousel-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo "-";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\" class=\"atab\">";
                echo $this->getAttribute($context["section"], "section_name", array());
                echo "</a>
        ";
            }
            // line 10
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 13
            echo "      ";
            if ($this->getAttribute($context["section"], "items", array())) {
                // line 14
                echo "        <div id=\"carousel-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo "-";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\" class=\"tab-content box-content\">
          <div class=\"swiper\">
            <div class=\"swiper-container\" ";
                // line 16
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
              <div class=\"swiper-wrapper\">
                ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 19
                    echo "                  <div class=\"product-grid-item swiper-slide display-";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                    echo " ";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                    echo " ";
                    echo $this->getAttribute($context["product"], "classes", array());
                    echo " ";
                    echo (isset($context["grid_classes"]) ? $context["grid_classes"] : null);
                    echo "\">
                    <div class=\"product-wrapper ";
                    // line 20
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\" style=\"";
                    echo (isset($context["image_bgcolor"]) ? $context["image_bgcolor"] : null);
                    echo "\">
                      ";
                    // line 21
                    if ($this->getAttribute($context["product"], "thumb", array())) {
                        // line 22
                        echo "                        <div class=\"image ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                            echo " has-countdown ";
                        }
                        echo "\">
                          <a href=\"";
                        // line 23
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\" ";
                        if ($this->getAttribute($context["product"], "thumb2", array())) {
                            echo " class=\"has-second-image\" style=\"";
                            echo (isset($context["image_border_css"]) ? $context["image_border_css"] : null);
                            echo "; background: url('";
                            echo $this->getAttribute($context["product"], "thumb2", array());
                            echo "') no-repeat\" ";
                        } else {
                            echo " style=\"";
                            echo (isset($context["image_border_css"]) ? $context["image_border_css"] : null);
                            echo "\" ";
                        }
                        echo ">
                             <div class=\"prod_overdata\"
                                    data-content='Ancho: ";
                        // line 25
                        echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "ancho", array());
                        echo "&#xa;
                                                  Rinde: ";
                        // line 26
                        echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "rendimiento", array());
                        echo "&#xa;
                                                  Piezas de: ";
                        // line 27
                        echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "piezasde", array());
                        echo "&#xa;
                                                  Peso: ";
                        // line 28
                        echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "peso", array());
                        echo "&#xa;
                                                  Composición: ";
                        // line 29
                        echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "comp", array());
                        echo "&#xa;' >
                             ";
                        // line 36
                        echo "                                  <img class=\"first-image\" width=\"";
                        echo (isset($context["image_width"]) ? $context["image_width"] : null);
                        echo "\" height=\"";
                        echo (isset($context["image_height"]) ? $context["image_height"] : null);
                        echo "\" src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"/>
                              </div>
                          </a>
                          ";
                        // line 39
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                        foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                            // line 40
                            echo "                            <span class=\"label-";
                            echo $context["label"];
                            echo "\"><b>";
                            echo $context["name"];
                            echo "</b></span>
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                          ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                            // line 43
                            echo "                            <div class=\"wishlist\"><a onclick=\"addToWishList('";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "</span></a></div>
                            <div class=\"compare\"><a onclick=\"addToCompare('";
                            // line 44
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "');\" class=\"hint--top\" data-hint=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "</span></a></div>
                          ";
                        }
                        // line 46
                        echo "                        </div>
                      ";
                    }
                    // line 48
                    echo "                      <div class=\"product-details\">
                        <div class=\"caption\">
                          <div class=\"name\"><a href=\"";
                    // line 50
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></div>
                          <div class=\"description\">";
                    // line 51
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</div>
                          ";
                    // line 52
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 53
                        echo "                            <div class=\"price\">
                              ";
                        // line 54
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 55
                            echo "                                ";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
                              ";
                        } else {
                            // line 57
                            echo "                                <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span> <span class=\"price-new\" ";
                            if ($this->getAttribute($context["product"], "date_end", array())) {
                                echo "data-end-date=\"";
                                echo $this->getAttribute($context["product"], "date_end", array());
                                echo "\"";
                            }
                            echo ">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span>
                              ";
                        }
                        // line 59
                        echo "                              ";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            // line 60
                            echo "                                <span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span>
                              ";
                        }
                        // line 62
                        echo "                            </div>
                          ";
                    }
                    // line 64
                    echo "                          ";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 65
                        echo "                            <div class=\"rating\">
                              ";
                        // line 66
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 67
                            echo "                                ";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                // line 68
                                echo "                                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                ";
                            } else {
                                // line 70
                                echo "                                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                ";
                            }
                            // line 72
                            echo "                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "                            </div>
                          ";
                    }
                    // line 75
                    echo "                        </div>
                        <div class=\"button-group\">
                          ";
                    // line 77
                    if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                        // line 78
                        echo "                            <div class=\"cart enquiry-button\">
                              <a href=\"javascript:Journal.openPopup('";
                        // line 79
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                        echo "', '";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" data-clk=\"addToCart('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" class=\"button hint--top\" data-hint=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                        echo "<span class=\"button-cart-text\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                        echo "</span></a>
                            </div>
                          ";
                    } else {
                        // line 82
                        echo "                            <div class=\"cart ";
                        if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                            echo " outofstock ";
                        }
                        echo "\">
                              <a onclick=\"addToCart('";
                        // line 83
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "', '";
                        echo $this->getAttribute($context["product"], "minimum", array());
                        echo "');\" class=\"button hint--top\" data-hint=\"";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "</span><i class=\"button-right-icon\"></i></a>
                            </div>
                          ";
                    }
                    // line 86
                    echo "                          <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                          <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 87
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "              </div>
            </div>
            ";
                // line 95
                if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
                    // line 96
                    echo "              <div class=\"swiper-button-next\"></div>
              <div class=\"swiper-button-prev\"></div>
            ";
                }
                // line 99
                echo "          </div>
          ";
                // line 100
                if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
                    // line 101
                    echo "            <div class=\"swiper-pagination\"></div>
          ";
                }
                // line 103
                echo "        </div>
      ";
            }
            // line 105
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
    <script>
      (function () {
        \$('#carousel-";
        // line 109
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .htabs a.atab').tabs();

        var grid = \$.parseJSON('";
        // line 111
        echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
        echo "');

        var breakpoints = {
          470: {
            slidesPerView: grid[0][1],
            slidesPerGroup: grid[0][1]
          },
          760: {
            slidesPerView: grid[1][1],
            slidesPerGroup: grid[1][1]
          },
          980: {
            slidesPerView: grid[2][1],
            slidesPerGroup: grid[2][1]
          },
          1220: {
            slidesPerView: grid[3][1],
            slidesPerGroup: grid[3][1]
          }
        };

        var current = null;

        \$('#carousel-";
        // line 134
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .htabs a.atab').click(function () {
          if (this === current) {
            return;
          }

          current = this;

          var opts = {
            slidesPerView: grid[4][1],
            slidesPerGroup: grid[4][1],
            breakpoints: breakpoints,
            spaceBetween: parseInt('";
        // line 145
        echo (isset($context["spacing"]) ? $context["spacing"] : null);
        echo "', 10),
            pagination: ";
        // line 146
        if ((isset($context["bullets"]) ? $context["bullets"] : null)) {
            echo " \$(\$(this).attr('href')).find('.swiper-pagination') ";
        } else {
            echo " false ";
        }
        echo ",
            paginationClickable: true,
            nextButton: ";
        // line 148
        if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
            echo " \$(\$(this).attr('href')).find('.swiper-button-next') ";
        } else {
            echo " false ";
        }
        echo ",
            prevButton: ";
        // line 149
        if (((isset($context["arrows"]) ? $context["arrows"] : null) != "none")) {
            echo " \$(\$(this).attr('href')).find('.swiper-button-prev') ";
        } else {
            echo " false ";
        }
        echo ",
            autoplay: ";
        // line 150
        echo (((isset($context["autoplay"]) ? $context["autoplay"] : null)) ? ((isset($context["autoplay"]) ? $context["autoplay"] : null)) : (0));
        echo ",
            autoplayStopOnHover: ";
        // line 151
        if ((isset($context["pause_on_hover"]) ? $context["pause_on_hover"] : null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
            speed: ";
        // line 152
        echo (isset($context["slide_speed"]) ? $context["slide_speed"] : null);
        echo ",
            touchEventsTarget: ";
        // line 153
        if ((isset($context["touch_drag"]) ? $context["touch_drag"] : null)) {
            echo " 'container' ";
        } else {
            echo " false ";
        }
        echo ",
            preventClicks: false,
            preventClicksPropagation: false
          };

          \$(\$(this).attr('href') + ' .swiper-container').swiper(opts);

          ";
        // line 160
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 161
            echo "          \$(\$(this).attr('href') + ' .product-grid-item > div').each(function () {
            var \$new = \$(this).find('.price-new');
            if (\$new.length && \$new.attr('data-end-date')) {
              \$(this).find('.image').append('<div class=\"countdown\"></div>');
            }
            Journal.countdown(\$(this).find('.countdown'), \$new.attr('data-end-date'));
          });
          ";
        }
        // line 169
        echo "
          if (!Journal.isFlexboxSupported) {
            Journal.equalHeight(\$('#carousel-";
        // line 171
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .product-grid-item'), '.name');
            Journal.equalHeight(\$('#carousel-";
        // line 172
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .product-grid-item'), '.description');
          }
        });

        \$('#carousel-";
        // line 176
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .htabs a.atab[href=\"#carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "-";
        echo (isset($context["default_section"]) ? $context["default_section"] : null);
        echo "\"]').click();
      })();
    </script>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/module/carousel_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 176,  591 => 172,  587 => 171,  583 => 169,  573 => 161,  571 => 160,  557 => 153,  553 => 152,  545 => 151,  541 => 150,  533 => 149,  525 => 148,  516 => 146,  512 => 145,  498 => 134,  472 => 111,  467 => 109,  462 => 106,  448 => 105,  444 => 103,  440 => 101,  438 => 100,  435 => 99,  430 => 96,  428 => 95,  424 => 93,  408 => 87,  399 => 86,  387 => 83,  380 => 82,  364 => 79,  361 => 78,  359 => 77,  355 => 75,  351 => 73,  345 => 72,  341 => 70,  337 => 68,  334 => 67,  330 => 66,  327 => 65,  324 => 64,  320 => 62,  312 => 60,  309 => 59,  295 => 57,  289 => 55,  287 => 54,  284 => 53,  282 => 52,  278 => 51,  272 => 50,  268 => 48,  264 => 46,  255 => 44,  246 => 43,  243 => 42,  232 => 40,  228 => 39,  213 => 36,  209 => 29,  205 => 28,  201 => 27,  197 => 26,  193 => 25,  176 => 23,  169 => 22,  167 => 21,  159 => 20,  148 => 19,  144 => 18,  137 => 16,  129 => 14,  126 => 13,  109 => 12,  106 => 11,  92 => 10,  82 => 8,  80 => 7,  71 => 6,  68 => 5,  51 => 4,  43 => 3,  19 => 1,);
    }
}
/* <div id="carousel-{{ module }}" class="carousel-{{ module_id }} box journal-carousel carousel-product {{ disable_on_classes | join(' ') }} {{ show_title_class }} {% if bullets %} bullets-on {% endif %} {% if arrows == 'top' %} arrows-top {% endif %} {{ gutter_on_class }}" style="{{ css }}">*/
/*   <div>*/
/*     <div class="htabs box-heading {{ single_class }}" {% if not show_title %} style="display: none" {% endif %}>*/
/*       {% for section in sections %}*/
/*         {% if section.is_link %}*/
/*           <a href="{{ section.url }}" {{ section.target }}>{{ section.section_name }}</a>*/
/*         {% elseif section.items %}*/
/*           <a href="#carousel-{{ module }}-{{ loop.index - 1 }}" class="atab">{{ section.section_name }}</a>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/*     {% for section in sections %}*/
/*       {% if section.items %}*/
/*         <div id="carousel-{{ module }}-{{ loop.index - 1 }}" class="tab-content box-content">*/
/*           <div class="swiper">*/
/*             <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*               <div class="swiper-wrapper">*/
/*                 {% for product in section.items %}*/
/*                   <div class="product-grid-item swiper-slide display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }} {{ product.classes }} {{ grid_classes }}">*/
/*                     <div class="product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}" style="{{ image_bgcolor }}">*/
/*                       {% if product.thumb %}*/
/*                         <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                           <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="{{ image_border_css }}; background: url('{{ product.thumb2 }}') no-repeat" {% else %} style="{{ image_border_css }}" {% endif %}>*/
/*                              <div class="prod_overdata"*/
/*                                     data-content='Ancho: {{ product.product_attributes.ancho }}&#xa;*/
/*                                                   Rinde: {{ product.product_attributes.rendimiento }}&#xa;*/
/*                                                   Piezas de: {{ product.product_attributes.piezasde }}&#xa;*/
/*                                                   Peso: {{ product.product_attributes.peso }}&#xa;*/
/*                                                   Composición: {{ product.product_attributes.comp }}&#xa;' >*/
/*                              {#  <div class="prod_overdata"*/
/*                                     data-content='Ancho: 1m&#xa;*/
/*                                                   Rinde: 100%&#xa;*/
/*                                                   Piezas de: 20m&#xa;*/
/*                                                   Peso: 120gr&#xa;*/
/*                                                   Composicion: Algodon&#xa;'> #}*/
/*                                   <img class="first-image" width="{{ image_width }}" height="{{ image_height }}" src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                               </div>*/
/*                           </a>*/
/*                           {% for label, name in product.labels %}*/
/*                             <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                           {% endfor %}*/
/*                           {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                             <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                             <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       {% endif %}*/
/*                       <div class="product-details">*/
/*                         <div class="caption">*/
/*                           <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*                           <div class="description">{{ product.description }}</div>*/
/*                           {% if product.price %}*/
/*                             <div class="price">*/
/*                               {% if not product.special %}*/
/*                                 {{ product.price }}*/
/*                               {% else %}*/
/*                                 <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                               {% endif %}*/
/*                               {% if product.tax %}*/
/*                                 <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                           {% endif %}*/
/*                           {% if product.rating %}*/
/*                             <div class="rating">*/
/*                               {% for i in 1..5 %}*/
/*                                 {% if product.rating < i %}*/
/*                                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                 {% else %}*/
/*                                   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/*                             </div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         <div class="button-group">*/
/*                           {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                             <div class="cart enquiry-button">*/
/*                               <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                             </div>*/
/*                           {% else %}*/
/*                             <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                               <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                             </div>*/
/*                           {% endif %}*/
/*                           <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                           <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             {% if arrows != 'none' %}*/
/*               <div class="swiper-button-next"></div>*/
/*               <div class="swiper-button-prev"></div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if bullets %}*/
/*             <div class="swiper-pagination"></div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script>*/
/*       (function () {*/
/*         $('#carousel-{{ module }} .htabs a.atab').tabs();*/
/* */
/*         var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*         var breakpoints = {*/
/*           470: {*/
/*             slidesPerView: grid[0][1],*/
/*             slidesPerGroup: grid[0][1]*/
/*           },*/
/*           760: {*/
/*             slidesPerView: grid[1][1],*/
/*             slidesPerGroup: grid[1][1]*/
/*           },*/
/*           980: {*/
/*             slidesPerView: grid[2][1],*/
/*             slidesPerGroup: grid[2][1]*/
/*           },*/
/*           1220: {*/
/*             slidesPerView: grid[3][1],*/
/*             slidesPerGroup: grid[3][1]*/
/*           }*/
/*         };*/
/* */
/*         var current = null;*/
/* */
/*         $('#carousel-{{ module }} .htabs a.atab').click(function () {*/
/*           if (this === current) {*/
/*             return;*/
/*           }*/
/* */
/*           current = this;*/
/* */
/*           var opts = {*/
/*             slidesPerView: grid[4][1],*/
/*             slidesPerGroup: grid[4][1],*/
/*             breakpoints: breakpoints,*/
/*             spaceBetween: parseInt('{{ spacing }}', 10),*/
/*             pagination: {% if bullets %} $($(this).attr('href')).find('.swiper-pagination') {% else %} false {% endif %},*/
/*             paginationClickable: true,*/
/*             nextButton: {% if arrows != 'none' %} $($(this).attr('href')).find('.swiper-button-next') {% else %} false {% endif %},*/
/*             prevButton: {% if arrows != 'none' %} $($(this).attr('href')).find('.swiper-button-prev') {% else %} false {% endif %},*/
/*             autoplay: {{ autoplay ? autoplay : 0 }},*/
/*             autoplayStopOnHover: {% if pause_on_hover %} true {% else %} false {% endif %},*/
/*             speed: {{ slide_speed }},*/
/*             touchEventsTarget: {% if touch_drag %} 'container' {% else %} false {% endif %},*/
/*             preventClicks: false,*/
/*             preventClicksPropagation: false*/
/*           };*/
/* */
/*           $($(this).attr('href') + ' .swiper-container').swiper(opts);*/
/* */
/*           {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*           $($(this).attr('href') + ' .product-grid-item > div').each(function () {*/
/*             var $new = $(this).find('.price-new');*/
/*             if ($new.length && $new.attr('data-end-date')) {*/
/*               $(this).find('.image').append('<div class="countdown"></div>');*/
/*             }*/
/*             Journal.countdown($(this).find('.countdown'), $new.attr('data-end-date'));*/
/*           });*/
/*           {% endif %}*/
/* */
/*           if (!Journal.isFlexboxSupported) {*/
/*             Journal.equalHeight($('#carousel-{{ module }} .product-grid-item'), '.name');*/
/*             Journal.equalHeight($('#carousel-{{ module }} .product-grid-item'), '.description');*/
/*           }*/
/*         });*/
/* */
/*         $('#carousel-{{ module }} .htabs a.atab[href="#carousel-{{ module }}-{{ default_section }}"]').click();*/
/*       })();*/
/*     </script>*/
/*   </div>*/
/* </div>*/
/* */
