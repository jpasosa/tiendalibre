<?php

/* journal2/template/product/category.twig */
class __TwigTemplate_4f31387ce46505e9132aebc4122993555f4b31ea844e9b067ffb5c74d99cff07 extends Twig_Template
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


";
        // line 10
        echo "
";
        // line 15
        echo "

<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
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
        // line 22
        echo "  </ul>
  <div class=\"row\">";
        // line 23
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 32
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 33
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 34
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 35
            echo "        <div class=\"category-info\">
          ";
            // line 36
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 37
                echo "            <div class=\"image\"><img width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></div>
          ";
            }
            // line 39
            echo "          ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 40
                echo "            ";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
          ";
            }
            // line 42
            echo "        </div>
      ";
        }
        // line 44
        echo "
      ";
        // line 45
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "grid") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method")) > 0))) {
            // line 46
            echo "        <div class=\"refine-images\">
          ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 48
                echo "            <div class=\"refine-image ";
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProductGridClasses", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
                echo "\">
              <a href=\"";
                // line 49
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img style=\"display: block\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_width", 1 => 175), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_height", 1 => 175), "method");
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"refine-category-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "          <script>
            if (!Journal.isFlexboxSupported) {
              Journal.equalHeight(\$(\".refine-images .refine-image\"), '.refine-category-name');
            }
          </script>
        </div>
      ";
        }
        // line 59
        echo "
      ";
        // line 60
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "carousel") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method")) > 0))) {
            // line 61
            echo "        <div id=\"refine-images\">
          <div class=\"swiper\">
            <div class=\"swiper-container\" ";
            // line 63
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                echo " dir=\"rtl\" ";
            }
            echo ">
              <div class=\"swiper-wrapper\">
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 66
                echo "                  <div class=\"refine-image swiper-slide ";
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProductGridClasses", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
                echo "\">
                    <a href=\"";
                // line 67
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img style=\"display: block\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_width", 1 => 175), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_height", 1 => 175), "method");
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"refine-category-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "              </div>
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
        ";
            // line 75
            $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
            // line 76
            echo "        ";
            $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(            // line 77
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(            // line 78
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(            // line 79
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(            // line 80
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(            // line 81
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
            // line 83
            echo "        <script>
          (function () {
            var grid = \$.parseJSON('";
            // line 85
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

            var opts = {
              slidesPerView: grid[4][1],
              slidesPerGroup: grid[4][1],
              breakpoints: breakpoints,
              spaceBetween: parseInt('";
            // line 110
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
            echo "', 10),
              pagination: \$('#refine-images .swiper-pagination'),
              paginationClickable: true,
              nextButton: \$('#refine-images .swiper-button-next'),
              prevButton: \$('#refine-images .swiper-button-prev'),
              autoplayStopOnHover: ";
            // line 115
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_pause_on_hover"), "method")) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
              autoplay: ";
            // line 116
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
            echo ",
              speed: parseInt(";
            // line 117
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_transition_speed", 1 => 400), "method");
            echo ", 10),
              touchEventsTarget: ";
            // line 118
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_touchdrag"), "method")) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            // line 119
            echo "            };

            \$('#refine-images .swiper-container').swiper(opts);
          })();
        </script>
      ";
        }
        // line 125
        echo "
      ";
        // line 126
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "text") && (isset($context["categories"]) ? $context["categories"] : null))) {
            // line 127
            echo "        <h2 class=\"refine\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h2>
        <div class=\"category-list\">
          <ul>
            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 131
                echo "              <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "          </ul>
        </div>
      ";
        }
        // line 136
        echo "
      ";
        // line 137
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 138
            echo "
        <div class=\"product-filter\">
          <div class=\"display\">
            <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 141
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
            <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 142
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
          </div>
          <div class=\"product-compare\"><a href=\"";
            // line 144
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
          <div class=\"limit\"><b>";
            // line 145
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 148
                echo "                ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 149
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 151
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 153
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "            </select>
          </div>
          <div class=\"sort\"><b>";
            // line 156
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 159
                echo "                ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 160
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 162
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 164
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </select>
          </div>
        </div>

        <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 169
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">
          ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 171
                echo "            <div class=\"product-grid-item ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
              <div class=\"product-thumb product-wrapper ";
                // line 172
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                <div class=\"image ";
                // line 173
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                  <a href=\"";
                // line 174
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                    <div class=\"prod_overdata\" data-content='Ancho: ";
                // line 175
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "ancho", array());
                echo "&#xa;
                                                        Rinde: ";
                // line 176
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "rendimiento", array());
                echo "&#xa;
                                                        Piezas de: ";
                // line 177
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "piezasde", array());
                echo "&#xa;
                                                        Peso: ";
                // line 178
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "peso", array());
                echo "&#xa;
                                                        Composición: ";
                // line 179
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "comp", array());
                echo "&#xa;' >
                    ";
                // line 185
                echo "                      <img class=\"lazy first-image\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                    </div>
                  </a>
                  ";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 189
                    echo "                    <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                  ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 192
                    echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 193
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                  ";
                }
                // line 195
                echo "                </div>
                <div class=\"product-details\">
                    <div class=\"caption\">
                        <h4 class=\"name\"><a href=\"";
                // line 198
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                        
                        <div class=\"styled__PricesContainer\">
                            <div class=\"styled__PriceGridRow\">
                                <p class=\"styled__PriceType-sc\">
                                    Por menor<span data-dialog=\"El precio por menor es a partir de 1mt.\" class=\"tooltip-info-am\"><span></span></span>
                                </p>
                                <p class=\"styled__ListPrice-sc-\"></p>
                                <p class=\"styled__BestPrice-sc-\">";
                // line 206
                echo $this->getAttribute($context["product"], "price", array());
                echo "</p>
                            </div>
                            <div class=\"styled__PriceGridRow\">
                                <p class=\"styled__PriceType-sc\">
                                    Por mayor<span data-dialog=\"El precio por mayor es a partir de los ";
                // line 210
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "all_prices", array()), "por_mayor", array()), "quantity", array());
                echo "mts.\" class=\"tooltip-info-am\"><span></span></span>
                                </p>
                                <p class=\"styled__ListPrice-sc-\"></p>
                                <p class=\"styled__BestPrice-sc-\">";
                // line 213
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "all_prices", array()), "por_mayor", array()), "price", array());
                echo "</p>
                            </div>
                            <div class=\"styled__PriceGridRow\">
                                <p class=\"styled__PriceType-sc\">
                                    Por pieza<span data-dialog=\"El precio por pieza es a partir de los ";
                // line 217
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "all_prices", array()), "por_pieza", array()), "quantity", array());
                echo "mts\" class=\"tooltip-info-am\"><span></span></span>
                                </p>
                                <p class=\"styled__ListPrice-sc-\"></p>
                                <p class=\"styled__BestPrice-sc-\">";
                // line 220
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "all_prices", array()), "por_pieza", array()), "price", array());
                echo "</p>
                            </div>
                        </div>


                        <p class=\"description\">
                            ";
                // line 227
                echo "                        </p>


                        ";
                // line 230
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 231
                    echo "                            <div class=\"price\">
                                ";
                    // line 239
                    echo "                            </div>
                            ";
                    // line 240
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 241
                        echo "                                <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                            ";
                    }
                    // line 243
                    echo "                        ";
                }
                // line 244
                echo "                        ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 245
                    echo "                            <div class=\"rating\">
                                ";
                    // line 246
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 247
                        echo "                                    ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 248
                            echo "                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        } else {
                            // line 250
                            echo "                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        }
                        // line 252
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "                            </div>
                        ";
                }
                // line 255
                echo "                    </div>

                    <div class=\"button-group\">
                        ";
                // line 258
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 259
                    echo "                            <div class=\"cart enquiry-button\">
                                <a href=\"javascript:Journal.openPopup('";
                    // line 260
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
                    // line 263
                    echo "                            <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                                <a onclick=\"addToCart('";
                    // line 264
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
                // line 267
                echo "                        <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                        <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 268
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
            // line 274
            echo "        </div>

        <div class=\"row pagination\">
          <div class=\"col-sm-6 text-left links\">";
            // line 277
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right results\">";
            // line 278
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        }
        // line 281
        echo "
      ";
        // line 282
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 283
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 285
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary button\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 288
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
  <script>Journal.applyView('";
        // line 290
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>
  ";
        // line 291
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 292
            echo "    <script>Journal.enableCountdown();</script>
  ";
        }
        // line 294
        echo "</div>
";
        // line 295
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 295,  775 => 294,  771 => 292,  769 => 291,  765 => 290,  759 => 288,  751 => 285,  745 => 283,  743 => 282,  740 => 281,  734 => 278,  730 => 277,  725 => 274,  709 => 268,  700 => 267,  688 => 264,  681 => 263,  665 => 260,  662 => 259,  660 => 258,  655 => 255,  651 => 253,  645 => 252,  641 => 250,  637 => 248,  634 => 247,  630 => 246,  627 => 245,  624 => 244,  621 => 243,  613 => 241,  611 => 240,  608 => 239,  605 => 231,  603 => 230,  598 => 227,  589 => 220,  583 => 217,  576 => 213,  570 => 210,  563 => 206,  550 => 198,  545 => 195,  536 => 193,  527 => 192,  524 => 191,  513 => 189,  509 => 188,  492 => 185,  488 => 179,  484 => 178,  480 => 177,  476 => 176,  472 => 175,  462 => 174,  456 => 173,  450 => 172,  445 => 171,  441 => 170,  433 => 169,  427 => 165,  421 => 164,  413 => 162,  405 => 160,  402 => 159,  398 => 158,  393 => 156,  389 => 154,  383 => 153,  375 => 151,  367 => 149,  364 => 148,  360 => 147,  355 => 145,  349 => 144,  344 => 142,  340 => 141,  335 => 138,  333 => 137,  330 => 136,  325 => 133,  314 => 131,  310 => 130,  303 => 127,  301 => 126,  298 => 125,  290 => 119,  284 => 118,  280 => 117,  276 => 116,  268 => 115,  260 => 110,  232 => 85,  228 => 83,  226 => 81,  225 => 80,  224 => 79,  223 => 78,  222 => 77,  220 => 76,  218 => 75,  211 => 70,  192 => 67,  187 => 66,  183 => 65,  176 => 63,  172 => 61,  170 => 60,  167 => 59,  158 => 52,  139 => 49,  134 => 48,  130 => 47,  127 => 46,  125 => 45,  122 => 44,  118 => 42,  112 => 40,  109 => 39,  97 => 37,  95 => 36,  92 => 35,  90 => 34,  86 => 33,  82 => 32,  77 => 31,  74 => 30,  71 => 29,  68 => 28,  65 => 27,  62 => 26,  59 => 25,  57 => 24,  52 => 23,  49 => 22,  38 => 20,  34 => 19,  28 => 15,  25 => 10,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* */
/* {# <ol>*/
/*     {% for key, value in _context  %}*/
/*       <li>{{ key }}</li>*/
/*     {% endfor %}*/
/* </ol>*/
/*  #}{# and then #}*/
/* */
/* {# <pre>*/
/*     {{ dump() }}*/
/* </pre>*/
/*  #}*/
/* */
/* */
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       {% if thumb or description %}*/
/*         <div class="category-info">*/
/*           {% if thumb %}*/
/*             <div class="image"><img width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ thumb }}" alt="{{ heading_title }}"/></div>*/
/*           {% endif %}*/
/*           {% if description %}*/
/*             {{ description }}*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'grid' and journal2.settings.get('refine_category_images', []) | length > 0 %}*/
/*         <div class="refine-images">*/
/*           {% for category in journal2.settings.get('refine_category_images', []) %}*/
/*             <div class="refine-image {{ staticCall('Journal2Utils', 'getProductGridClasses', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) }}">*/
/*               <a href="{{ category.href }}"><img style="display: block" width="{{ journal2.settings.get('refine_image_width', 175) }}" height="{{ journal2.settings.get('refine_image_height', 175) }}" src="{{ category.thumb }}" alt="{{ category.name }}"/><span class="refine-category-name">{{ category.name }}</span></a>*/
/*             </div>*/
/*           {% endfor %}*/
/*           <script>*/
/*             if (!Journal.isFlexboxSupported) {*/
/*               Journal.equalHeight($(".refine-images .refine-image"), '.refine-category-name');*/
/*             }*/
/*           </script>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'carousel' and journal2.settings.get('refine_category_images', []) | length > 0 %}*/
/*         <div id="refine-images">*/
/*           <div class="swiper">*/
/*             <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*               <div class="swiper-wrapper">*/
/*                 {% for category in journal2.settings.get('refine_category_images', []) %}*/
/*                   <div class="refine-image swiper-slide {{ staticCall('Journal2Utils', 'getProductGridClasses', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) }}">*/
/*                     <a href="{{ category.href }}"><img style="display: block" width="{{ journal2.settings.get('refine_image_width', 175) }}" height="{{ journal2.settings.get('refine_image_height', 175) }}" src="{{ category.thumb }}" alt="{{ category.name }}"/><span class="refine-category-name">{{ category.name }}</span></a>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="swiper-pagination"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) %}*/
/*         {% set grid = [*/
/*         [0, grid.xs],*/
/*         [470, grid.sm],*/
/*         [760, grid.md],*/
/*         [980, grid.lg],*/
/*         [1100, grid.xl],*/
/*         ] %}*/
/*         <script>*/
/*           (function () {*/
/*             var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*             var breakpoints = {*/
/*               470: {*/
/*                 slidesPerView: grid[0][1],*/
/*                 slidesPerGroup: grid[0][1]*/
/*               },*/
/*               760: {*/
/*                 slidesPerView: grid[1][1],*/
/*                 slidesPerGroup: grid[1][1]*/
/*               },*/
/*               980: {*/
/*                 slidesPerView: grid[2][1],*/
/*                 slidesPerGroup: grid[2][1]*/
/*               },*/
/*               1220: {*/
/*                 slidesPerView: grid[3][1],*/
/*                 slidesPerGroup: grid[3][1]*/
/*               }*/
/*             };*/
/* */
/*             var opts = {*/
/*               slidesPerView: grid[4][1],*/
/*               slidesPerGroup: grid[4][1],*/
/*               breakpoints: breakpoints,*/
/*               spaceBetween: parseInt('{{ journal2.settings.get('refine_grid_item_spacing', '15') }}', 10),*/
/*               pagination: $('#refine-images .swiper-pagination'),*/
/*               paginationClickable: true,*/
/*               nextButton: $('#refine-images .swiper-button-next'),*/
/*               prevButton: $('#refine-images .swiper-button-prev'),*/
/*               autoplayStopOnHover: {% if journal2.settings.get('refine_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*               autoplay: {{ journal2.settings.get('refine_carousel_autoplay') ? journal2.settings.get('refine_carousel_transition_delay', 4000) : 'false' }},*/
/*               speed: parseInt({{ journal2.settings.get('refine_carousel_transition_speed', 400) }}, 10),*/
/*               touchEventsTarget: {% if journal2.settings.get('refine_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*             };*/
/* */
/*             $('#refine-images .swiper-container').swiper(opts);*/
/*           })();*/
/*         </script>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'text' and categories %}*/
/*         <h2 class="refine">{{ text_refine }}</h2>*/
/*         <div class="category-list">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*               <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if products %}*/
/* */
/*         <div class="product-filter">*/
/*           <div class="display">*/
/*             <a onclick="Journal.gridView()" class="grid-view">{{ journal2.settings.get('category_grid_view_icon', button_grid) }}</a>*/
/*             <a onclick="Journal.listView()" class="list-view">{{ journal2.settings.get('category_list_view_icon', button_list) }}</a>*/
/*           </div>*/
/*           <div class="product-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*           <div class="limit"><b>{{ text_limit }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*                 {% if limits.value == limit %}*/
/*                   <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="sort"><b>{{ text_sort }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                   <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row main-products product-grid" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*           {% for product in products %}*/
/*             <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*               <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                 <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                   <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                     <div class="prod_overdata" data-content='Ancho: {{ product.product_attributes.ancho }}&#xa;*/
/*                                                         Rinde: {{ product.product_attributes.rendimiento }}&#xa;*/
/*                                                         Piezas de: {{ product.product_attributes.piezasde }}&#xa;*/
/*                                                         Peso: {{ product.product_attributes.peso }}&#xa;*/
/*                                                         Composición: {{ product.product_attributes.comp }}&#xa;' >*/
/*                     {# <div class="prod_overdata" data-content='Ancho: 1&#xa;*/
/*                                                         Rinde: 80%&#xa;*/
/*                                                         Piezas de: 80m&#xa;*/
/*                                                         Peso: 100gr&#xa;*/
/*                                                         Composición: Algodón&#xa;' > #}*/
/*                       <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                     </div>*/
/*                   </a>*/
/*                   {% for label, name in product.labels %}*/
/*                     <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="product-details">*/
/*                     <div class="caption">*/
/*                         <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                         */
/*                         <div class="styled__PricesContainer">*/
/*                             <div class="styled__PriceGridRow">*/
/*                                 <p class="styled__PriceType-sc">*/
/*                                     Por menor<span data-dialog="El precio por menor es a partir de 1mt." class="tooltip-info-am"><span></span></span>*/
/*                                 </p>*/
/*                                 <p class="styled__ListPrice-sc-"></p>*/
/*                                 <p class="styled__BestPrice-sc-">{{ product.price }}</p>*/
/*                             </div>*/
/*                             <div class="styled__PriceGridRow">*/
/*                                 <p class="styled__PriceType-sc">*/
/*                                     Por mayor<span data-dialog="El precio por mayor es a partir de los {{product.all_prices.por_mayor.quantity}}mts." class="tooltip-info-am"><span></span></span>*/
/*                                 </p>*/
/*                                 <p class="styled__ListPrice-sc-"></p>*/
/*                                 <p class="styled__BestPrice-sc-">{{product.all_prices.por_mayor.price}}</p>*/
/*                             </div>*/
/*                             <div class="styled__PriceGridRow">*/
/*                                 <p class="styled__PriceType-sc">*/
/*                                     Por pieza<span data-dialog="El precio por pieza es a partir de los {{product.all_prices.por_pieza.quantity}}mts" class="tooltip-info-am"><span></span></span>*/
/*                                 </p>*/
/*                                 <p class="styled__ListPrice-sc-"></p>*/
/*                                 <p class="styled__BestPrice-sc-">{{product.all_prices.por_pieza.price}}</p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <p class="description">*/
/*                             {# {{ product.description }} #}*/
/*                         </p>*/
/* */
/* */
/*                         {% if product.price %}*/
/*                             <div class="price">*/
/*                                 {#*/
/*                                     {% if not product.special %}*/
/*                                         {{ product.price }}*/
/*                                     {% else %}*/
/*                                         <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                                     {% endif %}*/
/*                                 #}*/
/*                             </div>*/
/*                             {% if product.tax %}*/
/*                                 <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                         {% if product.rating %}*/
/*                             <div class="rating">*/
/*                                 {% for i in 1..5 %}*/
/*                                     {% if product.rating < i %}*/
/*                                         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% else %}*/
/*                                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <div class="button-group">*/
/*                         {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                             <div class="cart enquiry-button">*/
/*                                 <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                             </div>*/
/*                         {% else %}*/
/*                             <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                 <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                         <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                     </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/* */
/*         <div class="row pagination">*/
/*           <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right results">{{ results }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if not categories and not products %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/*   <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*   {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>Journal.enableCountdown();</script>*/
/*   {% endif %}*/
/* </div>*/
/* {{ footer }}*/
/* */
