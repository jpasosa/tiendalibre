<?php

/* journal2/template/product/search.twig */
class __TwigTemplate_f33c200628382badfccecf941be19bb88fdb11a058e8a77f064417fd18b9e2b7 extends Twig_Template
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
        echo "
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
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
        // line 8
        echo "  </ul>
  <div class=\"row\">";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " search-page\">
      <h1 class=\"heading-title\">";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 19
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 20
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</h2>
      <div class=\"row content\">
        <div class=\"col-sm-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
        </div>
        <div class=\"col-sm-3 s-cat\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 27
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 29
            echo "              ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 30
                echo "                <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
              ";
            } else {
                // line 32
                echo "                <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
              ";
            }
            // line 34
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 36
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
                ";
                } else {
                    // line 38
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
                ";
                }
                // line 40
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 41
                    echo "                  ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 42
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
                  ";
                    } else {
                        // line 44
                        echo "                    <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
                  ";
                    }
                    // line 46
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </select>
        </div>
        <div class=\"col-sm-3 s-check\">
          <label class=\"checkbox-inline\">
            ";
        // line 53
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 54
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>
            ";
        } else {
            // line 56
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>
            ";
        }
        // line 58
        echo "            ";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
        <div class=\"col-sm-3 s-check\">
          <label class=\"checkbox-inline\">
            ";
        // line 62
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 63
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>
            ";
        } else {
            // line 65
            echo "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>
            ";
        }
        // line 67
        echo "            ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
        </div>
      </div>
      <div class=\"buttons\">
        <div class=\"right\">
          <input type=\"button\" value=\"";
        // line 72
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary button\"/>
        </div>
      </div>
      <h2>";
        // line 75
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</h2>
      ";
        // line 76
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 77
            echo "        <div class=\"product-filter\">
          <div class=\"display\">
            <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 79
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
            <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 80
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
          </div>
          <div class=\"product-compare\"><a href=\"";
            // line 82
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
          <div class=\"limit\"><b>";
            // line 83
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 86
                echo "                ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 87
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 89
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 91
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </select>
          </div>
          <div class=\"sort\"><b>";
            // line 94
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 97
                echo "                ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 98
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 100
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 102
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            </select>
          </div>
        </div>
        <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 106
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">
          ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "            <div class=\"product-grid-item ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
              <div class=\"product-thumb product-wrapper ";
                // line 109
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                <div class=\"image ";
                // line 110
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                  <a href=\"";
                // line 111
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                     <div class=\"prod_overdata\" data-content='Ancho: ";
                // line 112
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "ancho", array());
                echo "&#xa;
                                                        Rinde: ";
                // line 113
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "rendimiento", array());
                echo "&#xa;
                                                        Piezas de: ";
                // line 114
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "piezasde", array());
                echo "&#xa;
                                                        Peso: ";
                // line 115
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "peso", array());
                echo "&#xa;
                                                        Composición: ";
                // line 116
                echo $this->getAttribute($this->getAttribute($context["product"], "product_attributes", array()), "comp", array());
                echo "&#xa;' >
                      <img class=\"lazy first-image\" width=\"";
                // line 117
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
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 121
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
                // line 123
                echo "                  ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 124
                    echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 125
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                  ";
                }
                // line 127
                echo "                </div>
                <div class=\"product-details\">
                  <div class=\"caption\">
                    <h4 class=\"name\"><a href=\"";
                // line 130
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                    <p class=\"description\">";
                // line 131
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                    ";
                // line 132
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 133
                    echo "                      <div class=\"price\">
                        ";
                    // line 134
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 135
                        echo "                          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 137
                        echo "                          <span class=\"price-old\">";
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
                    // line 139
                    echo "                        ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 140
                        echo "                          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
                        ";
                    }
                    // line 142
                    echo "                      </div>
                    ";
                }
                // line 144
                echo "                    ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 145
                    echo "                      <div class=\"rating\">
                        ";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 147
                        echo "                          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 148
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 150
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 152
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    echo "                      </div>
                    ";
                }
                // line 155
                echo "                  </div>
                  <div class=\"button-group\">
                    ";
                // line 157
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 158
                    echo "                      <div class=\"cart enquiry-button\">
                        <a href=\"javascript:Journal.openPopup('";
                    // line 159
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
                    // line 162
                    echo "                      <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                        <a onclick=\"addToCart('";
                    // line 163
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
                // line 166
                echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 167
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
            // line 173
            echo "        </div>
        <div class=\"row pagination\">
          <div class=\"col-sm-6 text-left links\">";
            // line 175
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right results\">";
            // line 176
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        } else {
            // line 179
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 181
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
  <script>Journal.applyView('";
        // line 183
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>
  ";
        // line 184
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 185
            echo "    <script>Journal.enableCountdown();</script>
  ";
        }
        // line 187
        echo "</div>
<script type=\"text/javascript\"><!--
  \$('#button-search').bind('click', function () {
    url = 'index.php?route=product/search';

    var search = \$('#content input[name=\\'search\\']').prop('value');

    if (search) {
      url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

    if (category_id > 0) {
      url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

    if (sub_category) {
      url += '&sub_category=true';
    }

    var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

    if (filter_description) {
      url += '&description=true';
    }

    location = url;
  });

  \$('#content input[name=\\'search\\']').bind('keydown', function (e) {
    if (e.keyCode == 13) {
      \$('#button-search').trigger('click');
    }
  });

  \$('select[name=\\'category_id\\']').on('change', function () {
    if (this.value == '0') {
      \$('input[name=\\'sub_category\\']').prop('disabled', true);
    } else {
      \$('input[name=\\'sub_category\\']').prop('disabled', false);
    }
  });

  \$('select[name=\\'category_id\\']').trigger('change');
  --></script>
";
        // line 235
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 235,  647 => 187,  643 => 185,  641 => 184,  637 => 183,  631 => 181,  625 => 179,  619 => 176,  615 => 175,  611 => 173,  595 => 167,  586 => 166,  574 => 163,  567 => 162,  551 => 159,  548 => 158,  546 => 157,  542 => 155,  538 => 153,  532 => 152,  528 => 150,  524 => 148,  521 => 147,  517 => 146,  514 => 145,  511 => 144,  507 => 142,  499 => 140,  496 => 139,  482 => 137,  476 => 135,  474 => 134,  471 => 133,  469 => 132,  465 => 131,  459 => 130,  454 => 127,  445 => 125,  436 => 124,  433 => 123,  422 => 121,  418 => 120,  402 => 117,  398 => 116,  394 => 115,  390 => 114,  386 => 113,  382 => 112,  372 => 111,  366 => 110,  360 => 109,  355 => 108,  351 => 107,  343 => 106,  338 => 103,  332 => 102,  324 => 100,  316 => 98,  313 => 97,  309 => 96,  304 => 94,  300 => 92,  294 => 91,  286 => 89,  278 => 87,  275 => 86,  271 => 85,  266 => 83,  260 => 82,  255 => 80,  251 => 79,  247 => 77,  245 => 76,  241 => 75,  235 => 72,  226 => 67,  222 => 65,  218 => 63,  216 => 62,  208 => 58,  204 => 56,  200 => 54,  198 => 53,  192 => 49,  186 => 48,  180 => 47,  174 => 46,  166 => 44,  158 => 42,  155 => 41,  150 => 40,  142 => 38,  134 => 36,  131 => 35,  126 => 34,  118 => 32,  110 => 30,  107 => 29,  103 => 28,  99 => 27,  90 => 23,  84 => 20,  80 => 19,  76 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  51 => 10,  46 => 9,  43 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
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
/*     <div id="content" class="{{ class }} search-page">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <h2>{{ entry_search }}</h2>*/
/*       <div class="row content">*/
/*         <div class="col-sm-4">*/
/*           <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control"/>*/
/*         </div>*/
/*         <div class="col-sm-3 s-cat">*/
/*           <select name="category_id" class="form-control">*/
/*             <option value="0">{{ text_category }}</option>*/
/*             {% for category_1 in categories %}*/
/*               {% if category_1.category_id == category_id %}*/
/*                 <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*               {% else %}*/
/*                 <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*               {% endif %}*/
/*               {% for category_2 in category_1.children %}*/
/*                 {% if category_2.category_id == category_id %}*/
/*                   <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*                 {% endif %}*/
/*                 {% for category_3 in category_2.children %}*/
/*                   {% if category_3.category_id == category_id %}*/
/*                     <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               {% endfor %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-sm-3 s-check">*/
/*           <label class="checkbox-inline">*/
/*             {% if sub_category %}*/
/*               <input type="checkbox" name="sub_category" value="1" checked="checked"/>*/
/*             {% else %}*/
/*               <input type="checkbox" name="sub_category" value="1"/>*/
/*             {% endif %}*/
/*             {{ text_sub_category }}</label>*/
/*         </div>*/
/*         <div class="col-sm-3 s-check">*/
/*           <label class="checkbox-inline">*/
/*             {% if description %}*/
/*               <input type="checkbox" name="description" value="1" id="description" checked="checked"/>*/
/*             {% else %}*/
/*               <input type="checkbox" name="description" value="1" id="description"/>*/
/*             {% endif %}*/
/*             {{ entry_description }}</label>*/
/*         </div>*/
/*       </div>*/
/*       <div class="buttons">*/
/*         <div class="right">*/
/*           <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary button"/>*/
/*         </div>*/
/*       </div>*/
/*       <h2>{{ text_search }}</h2>*/
/*       {% if products %}*/
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
/*         <div class="row main-products product-grid" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*           {% for product in products %}*/
/*             <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*               <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                 <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                   <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                      <div class="prod_overdata" data-content='Ancho: {{ product.product_attributes.ancho }}&#xa;*/
/*                                                         Rinde: {{ product.product_attributes.rendimiento }}&#xa;*/
/*                                                         Piezas de: {{ product.product_attributes.piezasde }}&#xa;*/
/*                                                         Peso: {{ product.product_attributes.peso }}&#xa;*/
/*                                                         Composición: {{ product.product_attributes.comp }}&#xa;' >*/
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
/*                   <div class="caption">*/
/*                     <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                     <p class="description">{{ product.description }}</p>*/
/*                     {% if product.price %}*/
/*                       <div class="price">*/
/*                         {% if not product.special %}*/
/*                           {{ product.price }}*/
/*                         {% else %}*/
/*                           <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                         {% endif %}*/
/*                         {% if product.tax %}*/
/*                           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     {% if product.rating %}*/
/*                       <div class="rating">*/
/*                         {% for i in 1..5 %}*/
/*                           {% if product.rating < i %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <div class="button-group">*/
/*                     {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                       <div class="cart enquiry-button">*/
/*                         <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                         <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*         <div class="row pagination">*/
/*           <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right results">{{ results }}</div>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/*   <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*   {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>Journal.enableCountdown();</script>*/
/*   {% endif %}*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-search').bind('click', function () {*/
/*     url = 'index.php?route=product/search';*/
/* */
/*     var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/*     if (search) {*/
/*       url += '&search=' + encodeURIComponent(search);*/
/*     }*/
/* */
/*     var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/*     if (category_id > 0) {*/
/*       url += '&category_id=' + encodeURIComponent(category_id);*/
/*     }*/
/* */
/*     var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/*     if (sub_category) {*/
/*       url += '&sub_category=true';*/
/*     }*/
/* */
/*     var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/*     if (filter_description) {*/
/*       url += '&description=true';*/
/*     }*/
/* */
/*     location = url;*/
/*   });*/
/* */
/*   $('#content input[name=\'search\']').bind('keydown', function (e) {*/
/*     if (e.keyCode == 13) {*/
/*       $('#button-search').trigger('click');*/
/*     }*/
/*   });*/
/* */
/*   $('select[name=\'category_id\']').on('change', function () {*/
/*     if (this.value == '0') {*/
/*       $('input[name=\'sub_category\']').prop('disabled', true);*/
/*     } else {*/
/*       $('input[name=\'sub_category\']').prop('disabled', false);*/
/*     }*/
/*   });*/
/* */
/*   $('select[name=\'category_id\']').trigger('change');*/
/*   --></script>*/
/* {{ footer }}*/
/* */
