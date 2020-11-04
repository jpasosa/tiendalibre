<?php

/* journal2/template/product/product.twig */
class __TwigTemplate_4418d298ab4f3b1083ed064cdf490457fda7da379017944c05530975f3f37c1d extends Twig_Template
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
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
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
        // line 7
        echo "</ul>
<div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "          ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "          ";
        } else {
            // line 14
            echo "              ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "              ";
        }
        // line 16
        echo "              <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-page-content\" itemscope itemtype=\"http://schema.org/Product\">
                  ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "top")) {
            // line 18
            echo "                    <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
                ";
        }
        // line 20
        echo "                ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                <div class=\"row product-info ";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "split_ratio"), "method");
        echo "\">
                    <div class=\"left\">
                      ";
        // line 23
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 24
            echo "                        <div class=\"image\">
                          ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 26
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
            // line 28
            echo "                        <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" id=\"image\" data-largeimg=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" itemprop=\"image\"/></a>
                    </div>
                    ";
            // line 30
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method")) {
                // line 31
                echo "                      <div class=\"gallery-text\"><span>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_text"), "method");
                echo "</span></div>
                  ";
            }
            // line 33
            echo "              ";
        }
        // line 34
        echo "              ";
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 35
            echo "                <div id=\"product-gallery\" class=\"image-additional ";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">
                  ";
            // line 36
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 37
                echo "                      <div class=\"swiper\">
                        <div class=\"swiper-container\" ";
                // line 38
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                          <div class=\"swiper-wrapper\">
                          ";
            }
            // line 41
            echo "                          ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 42
                echo "                              <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo (((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) ? ((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) ? ((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) : ((isset($context["thumb"]) ? $context["thumb"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></a>
                          ";
            }
            // line 44
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 45
                echo "                              <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" itemprop=\"image\"/></a>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                          ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 48
                echo "                          </div>
                      </div>
                      ";
                // line 50
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows"), "method") != "never")) {
                    // line 51
                    echo "                        <div class=\"swiper-button-next swiper-hidden\"></div>
                        <div class=\"swiper-button-prev swiper-hidden\"></div>
                    ";
                }
                // line 54
                echo "                </div>
            ";
            }
            // line 56
            echo "        </div>
        ";
            // line 57
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 58
                echo "            <script>
            (function () {
                var opts = {
                  slidesPerView: parseInt('";
                // line 61
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  slidesPerGroup: parseInt('";
                // line 62
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  spaceBetween: parseInt('";
                // line 63
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                  ";
                // line 64
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows"), "method") != "never")) {
                    // line 65
                    echo "                  nextButton: \$('#product-gallery .swiper-button-next'),
                  prevButton: \$('#product-gallery .swiper-button-prev'),
                  ";
                }
                // line 68
                echo "                  autoplay: ";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                  speed: parseInt(";
                // line 69
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_speed"), "method");
                echo ", 10) || 400,
                  touchEventsTarget: ";
                // line 70
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 71
                echo "              };

              \$('#product-gallery .swiper-container').swiper(opts);
          })();
          </script>
      ";
            }
            // line 77
            echo "  ";
        }
        // line 78
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_image", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 79
            echo "    <div class=\"journal-custom-tab journal-custom-tab-";
            echo $this->getAttribute($context["tab"], "module_id", array());
            echo "\">
      ";
            // line 80
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 81
                echo "        <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
    ";
            }
            // line 83
            echo "    ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 84
                echo "        <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
    ";
            }
            // line 86
            echo "    ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "<div class=\"image-gallery\" style=\"display: none !important;\">
    ";
        // line 90
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 91
            echo "      <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" data-original=\"";
            echo (((isset($context["original"]) ? $context["original"] : null)) ? ((isset($context["original"]) ? $context["original"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
  ";
        }
        // line 93
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 94
            echo "      <a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" data-original=\"";
            echo (($this->getAttribute($context["image"], "original", array())) ? ($this->getAttribute($context["image"], "original", array())) : ($this->getAttribute($context["image"], "popup", array())));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "</div>
";
        // line 97
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "left")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 98
            echo "    <div class=\"social share-this\">
      <div class=\"social-loaded\">
        <script type=\"text/javascript\">var switchTo5x = true;</script>
        <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
        <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 102
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 104
                echo "          <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "  </div>
</div>
";
        }
        // line 109
        echo "<meta itemprop=\"description\" content=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_description"), "method");
        echo "\"/>
<div class=\"product-tabs\">
    ";
        // line 111
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "bottom")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 112
            echo "      <div class=\"social share-this\">
        <div class=\"social-loaded\">
          <script type=\"text/javascript\">var switchTo5x = true;</script>
          <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
          <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 116
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
          ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 118
                echo "            <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "    </div>
</div>
";
        }
        // line 123
        echo "
";
        // line 142
        echo "<div class=\"tabs-content\">
    ";
        // line 143
        $context["is_active"] = true;
        // line 144
        echo "        ";
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 145
            echo "            <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
        ";
        }
        // line 147
        echo "        ";
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 148
            echo "            <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-specification\">
                <div class=\"text-center\">
                    <h2>ESPECIFICACIONES</h2>
                </div>

            ";
            // line 182
            echo "            ";
            // line 183
            echo "            <div class=\"table_specifications\">
                <table class=\"table table-bordered attr_especific\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"5\" cellspacing=\"10\">
                    <tbody>
                        <tr>
                            <td align=\"center\" valign=\"middle\">";
            // line 187
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 0, array(), "array"), "name", array(), "array");
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 0, array(), "array"), "text", array(), "array");
            echo "&nbsp;</td>
                            <td>";
            // line 188
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 1, array(), "array"), "name", array(), "array");
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 1, array(), "array"), "text", array(), "array");
            echo "</td>
                        </tr>
                        <tr>
                            <td align=\"center\" valign=\"middle\">";
            // line 191
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 2, array(), "array"), "name", array(), "array");
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 2, array(), "array"), "text", array(), "array");
            echo "</td>
                            <td>";
            // line 192
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 3, array(), "array"), "name", array(), "array");
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 3, array(), "array"), "text", array(), "array");
            echo "</td>
                        </tr>
                        <tr>
                            <td align=\"center\">";
            // line 195
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 4, array(), "array"), "name", array(), "array");
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 4, array(), "array"), "text", array(), "array");
            echo "</td>
                            <td>";
            // line 196
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 5, array(), "array"), "name", array(), "array");
            echo " ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null), 0, array(), "array"), "attribute", array(), "array"), 5, array(), "array"), "text", array(), "array");
            echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    ";
        }
        // line 205
        echo "
    ";
        // line 206
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 207
            echo "        <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-review\" ";
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                echo " itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\" ";
            }
            echo ">
          ";
            // line 208
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                // line 209
                echo "            <meta itemprop=\"ratingValue\" content=\"";
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\"/>
            <meta itemprop=\"reviewCount\" content=\"";
                // line 210
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_num_reviews"), "method");
                echo "\"/>
            <meta itemprop=\"bestRating\" content=\"5\"/>
            <meta itemprop=\"worstRating\" content=\"1\"/>
        ";
            }
            // line 214
            echo "        <form class=\"form-horizontal\" id=\"form-review\">
            <div id=\"review\"></div>
            <h2 id=\"review-title\">";
            // line 216
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
            ";
            // line 217
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 218
                echo "              <div class=\"form-group required\">
                <div class=\"col-sm-12\">
                  <label class=\"control-label\" for=\"input-name\">";
                // line 220
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                  <input type=\"text\" name=\"name\" value=\"";
                // line 221
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
              </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-review\">";
                // line 226
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
              <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
              <div class=\"help-block\">";
                // line 228
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
          </div>
      </div>
      <div class=\"form-group required\">
        <div class=\"col-sm-12\">
          <label class=\"control-label\">";
                // line 233
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
          &nbsp;&nbsp;&nbsp; ";
                // line 234
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
          <input type=\"radio\" name=\"rating\" value=\"1\"/>
          &nbsp;
          <input type=\"radio\" name=\"rating\" value=\"2\"/>
          &nbsp;
          <input type=\"radio\" name=\"rating\" value=\"3\"/>
          &nbsp;
          <input type=\"radio\" name=\"rating\" value=\"4\"/>
          &nbsp;
          <input type=\"radio\" name=\"rating\" value=\"5\"/>
          &nbsp;";
                // line 244
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
      </div>
      ";
                // line 246
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 249
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary button\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
      </div>
  </div>
";
            } else {
                // line 253
                echo "  ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
";
            }
            // line 255
            echo "</form>
</div>
";
        }
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 259
            echo "    <div id=\"additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"tab-pane tab-content journal-custom-tab ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "</div>
</div>
</div>
";
        // line 264
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 265
            echo "  ";
            $context["class"] = "col-sm-6";
            // line 266
            echo "  ";
        } else {
            // line 267
            echo "      ";
            $context["class"] = "col-sm-4";
            // line 268
            echo "      ";
        }
        // line 269
        echo "      <div class=\"right\">
          ";
        // line 270
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 271
            echo "            <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
        ";
        }
        // line 273
        echo "        <div id=\"product\" class=\"product-options\">
            ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_top", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 275
            echo "              <div class=\"journal-custom-tab journal-custom-tab-";
            echo $this->getAttribute($context["tab"], "module_id", array());
            echo "\">
                ";
            // line 276
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 277
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
              ";
            }
            // line 279
            echo "              ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 280
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
              ";
            }
            // line 282
            echo "              ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
          </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "      <ul class=\"list-unstyled description\">
          ";
        // line 286
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 287
            echo "            <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ": ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>
        ";
        }
        // line 289
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 290
            echo "            <li class=\"brand-logo\">
              <a href=\"";
            // line 291
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                <img src=\"";
            // line 292
            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
            echo "\" width=\"";
            echo (isset($context["manufacturer_image_width"]) ? $context["manufacturer_image_width"] : null);
            echo "\" height=\"";
            echo (isset($context["manufacturer_image_height"]) ? $context["manufacturer_image_height"] : null);
            echo "\" alt=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\"/>
            </a>
            ";
            // line 294
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 295
                echo "                <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">
                  ";
                // line 296
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
              </a>
          ";
            }
            // line 299
            echo "      </li>
  ";
        } else {
            // line 301
            echo "    ";
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 302
                echo "      <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
  ";
            }
        }
        // line 305
        echo "<li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
";
        // line 306
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 307
            echo "    <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
";
        }
        // line 309
        echo "<li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock ";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
</ul>
";
        // line 311
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 312
            echo "  <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>
";
        }
        // line 314
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 315
            echo "  <div class=\"countdown-wrapper\">
    <div class=\"expire-text\">";
            // line 316
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
    <div class=\"countdown\"></div>
</div>
<script>Journal.countdown(\$('.right .countdown'), '";
            // line 319
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>
";
        }
        // line 321
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 322
            echo "  <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
    <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
    <meta itemprop=\"priceCurrency\" content=\"";
            // line 324
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
    <meta itemprop=\"price\" content=\"";
            // line 325
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>
    ";
            // line 326
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 327
                echo "      <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
  ";
            }
            // line 329
            echo "
    ";
            // line 338
            echo "        ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 339
                echo "          ";
                // line 340
                echo "      ";
            }
            // line 341
            echo "      ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 342
                echo "          <li class=\"reward\">
            <small>";
                // line 343
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
        </li>
    ";
            }
            // line 346
            echo "
";
            // line 351
            echo "</ul>
";
        }
        // line 353
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 354
            echo "  <div class=\"options ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
    <h3>";
            // line 355
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
    ";
            // line 356
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 357
                echo "      ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 358
                    echo "        <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
          <label class=\"control-label\" for=\"input-option";
                    // line 359
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
          <select name=\"option[";
                    // line 360
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
            <option value=\"\">";
                    // line 361
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
            ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 363
                        echo "              <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 364
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 365
                            echo "                  (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
              ";
                        }
                        // line 366
                        echo " </option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 368
                    echo "      </select>
  </div>
";
                }
                // line 371
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 372
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\">";
                    // line 373
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <div id=\"input-option";
                    // line 374
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 375
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"option[";
                        // line 377
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
              ";
                        // line 378
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 379
                        echo "                  ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                  ";
                        // line 380
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 381
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 382
                        echo " </label>
            </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 384
                    echo " </div>
    </div>
";
                }
                // line 387
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 388
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\">";
                    // line 389
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <div id=\"input-option";
                    // line 390
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 391
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"option[";
                        // line 393
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
              ";
                        // line 394
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 395
                        echo "                  ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                  ";
                        // line 396
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 397
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 398
                        echo " </label>
            </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 400
                    echo " </div>
    </div>
";
                }
                // line 403
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 404
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\" for=\"input-option";
                    // line 405
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <input type=\"text\" name=\"option[";
                    // line 406
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
  </div>
";
                }
                // line 409
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 410
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\" for=\"input-option";
                    // line 411
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <textarea name=\"option[";
                    // line 412
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
  </div>
";
                }
                // line 415
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 416
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\">";
                    // line 417
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <button type=\"button\" id=\"button-upload";
                    // line 418
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
      <input type=\"hidden\" name=\"option[";
                    // line 419
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
  </div>
";
                }
                // line 422
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 423
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\" for=\"input-option";
                    // line 424
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <div class=\"input-group date\">
        <input type=\"text\" name=\"option[";
                    // line 426
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
        </span></div>
    </div>
";
                }
                // line 432
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 433
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\" for=\"input-option";
                    // line 434
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <div class=\"input-group datetime\">
        <input type=\"text\" name=\"option[";
                    // line 436
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
        </span></div>
    </div>
";
                }
                // line 442
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 443
                    echo "    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
      <label class=\"control-label\" for=\"input-option";
                    // line 444
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
      <div class=\"input-group time\">
        <input type=\"text\" name=\"option[";
                    // line 446
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
        <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
        </span></div>
    </div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 453
            echo "</div>
<script>Journal.enableSelectOptionAsButtonsList();</script>
";
        }
        // line 456
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 457
            echo "  <hr>
  <h3>";
            // line 458
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
  <div class=\"form-group required\">
    <select name=\"recurring_id\" class=\"form-control\">
      <option value=\"\">";
            // line 461
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
      ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 463
                echo "        <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            echo "</select>
<div class=\"help-block\" id=\"recurring-description\"></div>
</div>
";
        }
        // line 469
        echo "<div class=\"form-group cart ";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock ";
        }
        echo "\">
  <div>
    ";
        // line 471
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 472
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_enquiry", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 473
                echo "        <div>";
                echo $this->getAttribute($context["tab"], "content", array());
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "    <input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
";
        } else {
            // line 477
            echo "  <span class=\"qty\">
      <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 478
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
      <input type=\"text\" name=\"quantity\" value=\"";
            // line 479
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo " mts.\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo " mts.\" id=\"input-quantity\" class=\"form-control\"/>
      <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 480
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
      <script>
      /* quantity buttons */
      var \$input = \$('.cart input[name=\"quantity\"]');
      function up() {
          var val = parseInt(\$input.val(), 10) + 1 || parseInt(\$input.attr('data-min-value'), 10);
          var valor_txt_mts = val + ' mts.';
          \$input.val(valor_txt_mts);
      }
      function down() {
          var val = parseInt(\$input.val(), 10) - 1 || 0;
          var min = parseInt(\$input.attr('data-min-value'), 10) || 1;
          var valor_txt_mts = Math.max(val, min) + ' mts.';
          \$input.val(valor_txt_mts);
      }
      \$('<a href=\"javascript:;\" class=\"journal-stepper\">-</a>').insertBefore(\$input).click(down);
      \$('<a href=\"javascript:;\" class=\"journal-stepper\">+</a>').insertAfter(\$input).click(up);
      \$input.keydown(function (e) {
          if (e.which === 38) {
            up();
            return false;
        }
        if (e.which === 40) {
            down();
            return false;
        }
    });
      </script>
  </span>
  <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 509
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"button\"><span class=\"button-cart-text\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
";
        }
        // line 511
        echo "</div>
</div>
";
        // line 513
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 514
            echo "  <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
";
        }
        // line 516
        echo "<div class=\"wishlist-compare\">
  <span class=\"links\">
      <a onclick=\"addToWishList('";
        // line 518
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
      <a onclick=\"addToCompare('";
        // line 519
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
  </span>
</div>
";
        // line 522
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 523
            echo "  <div class=\"rating\">
    <p>";
            // line 524
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 525
                echo "        ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 526
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
    </div>
";
        }
        // line 529
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "right")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 530
            echo "  <div class=\"social share-this\">
    <div class=\"social-loaded\">
      <script type=\"text/javascript\">var switchTo5x = true;</script>
      <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
      <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 534
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
      ";
            // line 535
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 536
                echo "        <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 538
            echo "</div>
</div>
";
        }
        // line 541
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_bottom", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 542
            echo "  <div class=\"journal-custom-tab journal-custom-tab-";
            echo $this->getAttribute($context["tab"], "module_id", array());
            echo "\">
    ";
            // line 543
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 544
                echo "      <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
  ";
            }
            // line 546
            echo "  ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 547
                echo "      <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
  ";
            }
            // line 549
            echo "  ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
        echo "</div>
</div>
</div>
";
        // line 555
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 556
            echo "    <p class=\"tags\">
      <b>";
            // line 557
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</b>
      ";
            // line 558
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 559
                echo "        ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 560
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>
      ";
                } else {
                    // line 562
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>,
      ";
                }
                // line 564
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 565
            echo "</p>
";
        }
        // line 567
        if (((isset($context["products"]) ? $context["products"] : null) && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_status"), "method"))) {
            // line 568
            echo "    <div class=\"box related-products ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                echo " journal-carousel ";
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") == "top")) {
                    echo " arrows-top ";
                }
                echo " ";
            }
            echo "\">
      <div>
        <div class=\"box-heading\">";
            // line 570
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</div>
        <div class=\"box-content\">
          ";
            // line 572
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 573
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container\" ";
                // line 574
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                  <div class=\"swiper-wrapper\">
                  ";
            }
            // line 577
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 578
                echo "                      <div class=\"product-grid-item ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_grid_classes"), "method");
                echo " ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                    echo " swiper-slide ";
                }
                echo " display-";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                echo "\">
                        <div class=\"product-thumb product-wrapper ";
                // line 579
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                          <div class=\"image ";
                // line 580
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                            <a href=\"";
                // line 581
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                              <img class=\"lazy first-image\" width=\"";
                // line 582
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
                          </a>
                          ";
                // line 584
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 585
                    echo "                              <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 587
                echo "                          ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 588
                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 589
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                          ";
                }
                // line 591
                echo "                      </div>
                      <div class=\"product-details\">
                        <div class=\"caption\">
                          <h4 class=\"name\"><a href=\"";
                // line 594
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                          <p class=\"description\">";
                // line 595
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                          ";
                // line 596
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 597
                    echo "                            <div class=\"price\">
                              ";
                    // line 598
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 599
                        echo "                                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                            ";
                    } else {
                        // line 601
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
                    // line 603
                    echo "                        </div>
                    ";
                }
                // line 605
                echo "                    ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 606
                    echo "                        <div class=\"rating\">
                          ";
                    // line 607
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 608
                        echo "                            ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 609
                            echo "                              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 611
                            echo "                              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 613
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 614
                    echo "                  </div>
              ";
                }
                // line 616
                echo "          </div>
          <div class=\"button-group\">
              ";
                // line 618
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 619
                    echo "                <div class=\"cart enquiry-button\">
                  <a href=\"javascript:Journal.openPopup('";
                    // line 620
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
                    // line 623
                    echo "            <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
              <a onclick=\"addToCart('";
                    // line 624
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
                // line 627
                echo "      <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
      <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 628
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
            // line 634
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 635
                echo "</div>
</div>
";
                // line 637
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none"))) {
                    // line 638
                    echo "  <div class=\"swiper-button-next\"></div>
  <div class=\"swiper-button-prev\"></div>
";
                }
            }
            // line 642
            echo "</div>
";
            // line 643
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method"))) {
                // line 644
                echo "    <div class=\"swiper-pagination\"></div>
";
            }
            // line 646
            echo "</div>
</div>
</div>





";
            // line 654
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
                // line 655
                echo "    <script>
    \$('.related-products .product-grid-item > div').each(function () {
        var \$new = \$(this).find('.price-new');
        if (\$new.length && \$new.attr('data-end-date')) {
          \$(this).find('.image').append('<div class=\"countdown\"></div>');
      }
      Journal.countdown(\$(this).find('.countdown'), \$new.attr('data-end-date'));
  });
    </script>
";
            }
            // line 665
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 666
                echo "    ";
                $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_items_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count", 1 => 0), "method"))));
                // line 667
                echo "        ";
                $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(                // line 668
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(                // line 669
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(                // line 670
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(                // line 671
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(                // line 672
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
                // line 674
                echo "        <script>
        (function () {
            var grid = \$.parseJSON('";
                // line 676
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
                // line 701
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "15"), "method");
                echo "', 10),
          pagination: ";
                // line 702
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method")) {
                    echo " \$('.related-products .swiper-pagination') ";
                } else {
                    echo " false ";
                }
                echo ",
          paginationClickable: true,
          nextButton: ";
                // line 704
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-next') ";
                } else {
                    echo " false ";
                }
                echo ",
          prevButton: ";
                // line 705
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-prev') ";
                } else {
                    echo " false ";
                }
                echo ",
          autoplayStopOnHover: ";
                // line 706
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_pause_on_hover"), "method")) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                echo ",
          autoplay: ";
                // line 707
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
          speed: parseInt(";
                // line 708
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_transition_speed"), "method");
                echo ", 10) || 400,
          touchEventsTarget: ";
                // line 709
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 710
                echo "      };

      \$('.related-products .swiper-container').swiper(opts);
  })();
  </script>
";
            }
        }
        // line 717
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
</div>
</div>

<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
    \$.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
      dataType: 'json',
      beforeSend: function () {
        \$('#recurring-description').html('');
    },
    success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();

        if (json['success']) {
          \$('#recurring-description').html(json['success']);
      }
  }
});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-cart').button('loading');
    },
    complete: function() {
        \$('#button-cart').button('reset');
    },
    success: function(json) {
        \$('.alert-dismissible, .text-danger').remove();
        \$('.form-group').removeClass('has-error');

        if (json['error']) {
          if (json['error']['option']) {
            for (i in json['error']['option']) {
              var element = \$('#input-option' + i.replace('_', '-'));

              if (element.parent().hasClass('input-group')) {
                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
        }
    }

    if (json['error']['recurring']) {
        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
    }

          // Highlight any found errors
          \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
          if (!Journal.showNotification(json['success'], json['image'], true)) {
            \$('.breadcrumb').after('<div class=\"alert alert-success success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        \$('#cart-total').html(json['total']);

        if (Journal.scrollToTop) {
            \$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        \$('#cart ul').load('index.php?route=common/cart/info ul li');
    }
},
error: function(xhr, ajaxOptions, thrownError) {
    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickTime: false
});

\$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
});

\$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function () {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function () {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            \$(node).button('loading');
        },
        complete: function () {
            \$(node).button('reset');
        },
        success: function (json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input').val(json['code']);
          }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
});
    }
}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 879
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 883
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function () {
        \$('#button-review').button('loading');
    },
    complete: function () {
        \$('#button-review').button('reset');
    },
    success: function (json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
  }
});
});

\$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
    }
});
});
//--></script>
";
        // line 921
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2298 => 921,  2257 => 883,  2250 => 879,  2085 => 717,  2076 => 710,  2070 => 709,  2066 => 708,  2062 => 707,  2054 => 706,  2046 => 705,  2038 => 704,  2029 => 702,  2025 => 701,  1997 => 676,  1993 => 674,  1991 => 672,  1990 => 671,  1989 => 670,  1988 => 669,  1987 => 668,  1985 => 667,  1982 => 666,  1980 => 665,  1968 => 655,  1966 => 654,  1956 => 646,  1952 => 644,  1950 => 643,  1947 => 642,  1941 => 638,  1939 => 637,  1935 => 635,  1933 => 634,  1917 => 628,  1908 => 627,  1896 => 624,  1889 => 623,  1873 => 620,  1870 => 619,  1868 => 618,  1864 => 616,  1860 => 614,  1854 => 613,  1850 => 611,  1846 => 609,  1843 => 608,  1839 => 607,  1836 => 606,  1833 => 605,  1829 => 603,  1815 => 601,  1809 => 599,  1807 => 598,  1804 => 597,  1802 => 596,  1798 => 595,  1792 => 594,  1787 => 591,  1778 => 589,  1769 => 588,  1766 => 587,  1755 => 585,  1751 => 584,  1736 => 582,  1726 => 581,  1720 => 580,  1714 => 579,  1701 => 578,  1696 => 577,  1688 => 574,  1685 => 573,  1683 => 572,  1678 => 570,  1666 => 568,  1664 => 567,  1660 => 565,  1646 => 564,  1638 => 562,  1630 => 560,  1627 => 559,  1610 => 558,  1606 => 557,  1603 => 556,  1601 => 555,  1596 => 552,  1586 => 549,  1580 => 547,  1577 => 546,  1569 => 544,  1567 => 543,  1562 => 542,  1558 => 541,  1553 => 538,  1541 => 536,  1537 => 535,  1533 => 534,  1527 => 530,  1525 => 529,  1511 => 526,  1504 => 525,  1500 => 524,  1497 => 523,  1495 => 522,  1487 => 519,  1481 => 518,  1477 => 516,  1471 => 514,  1469 => 513,  1465 => 511,  1458 => 509,  1426 => 480,  1420 => 479,  1416 => 478,  1413 => 477,  1407 => 475,  1398 => 473,  1393 => 472,  1391 => 471,  1383 => 469,  1377 => 465,  1366 => 463,  1362 => 462,  1358 => 461,  1352 => 458,  1349 => 457,  1347 => 456,  1342 => 453,  1325 => 446,  1318 => 444,  1309 => 443,  1307 => 442,  1294 => 436,  1287 => 434,  1278 => 433,  1276 => 432,  1263 => 426,  1256 => 424,  1247 => 423,  1245 => 422,  1237 => 419,  1229 => 418,  1225 => 417,  1216 => 416,  1214 => 415,  1202 => 412,  1196 => 411,  1187 => 410,  1185 => 409,  1173 => 406,  1167 => 405,  1158 => 404,  1156 => 403,  1151 => 400,  1143 => 398,  1136 => 397,  1134 => 396,  1129 => 395,  1113 => 394,  1107 => 393,  1103 => 391,  1097 => 390,  1093 => 389,  1084 => 388,  1082 => 387,  1077 => 384,  1069 => 382,  1062 => 381,  1060 => 380,  1055 => 379,  1039 => 378,  1033 => 377,  1029 => 375,  1023 => 374,  1019 => 373,  1010 => 372,  1008 => 371,  1003 => 368,  996 => 366,  989 => 365,  987 => 364,  980 => 363,  976 => 362,  972 => 361,  966 => 360,  960 => 359,  951 => 358,  948 => 357,  944 => 356,  940 => 355,  935 => 354,  933 => 353,  929 => 351,  926 => 346,  918 => 343,  915 => 342,  912 => 341,  909 => 340,  907 => 339,  904 => 338,  901 => 329,  897 => 327,  895 => 326,  891 => 325,  887 => 324,  883 => 322,  881 => 321,  876 => 319,  870 => 316,  867 => 315,  865 => 314,  859 => 312,  857 => 311,  847 => 309,  839 => 307,  837 => 306,  830 => 305,  819 => 302,  816 => 301,  812 => 299,  806 => 296,  801 => 295,  799 => 294,  788 => 292,  784 => 291,  781 => 290,  778 => 289,  770 => 287,  768 => 286,  765 => 285,  755 => 282,  749 => 280,  746 => 279,  738 => 277,  736 => 276,  731 => 275,  727 => 274,  724 => 273,  718 => 271,  716 => 270,  713 => 269,  710 => 268,  707 => 267,  704 => 266,  701 => 265,  699 => 264,  694 => 261,  670 => 259,  653 => 258,  648 => 255,  642 => 253,  633 => 249,  627 => 246,  622 => 244,  609 => 234,  605 => 233,  597 => 228,  592 => 226,  584 => 221,  580 => 220,  576 => 218,  574 => 217,  570 => 216,  566 => 214,  559 => 210,  554 => 209,  552 => 208,  540 => 207,  538 => 206,  535 => 205,  521 => 196,  515 => 195,  507 => 192,  501 => 191,  493 => 188,  487 => 187,  481 => 183,  479 => 182,  467 => 148,  464 => 147,  453 => 145,  450 => 144,  448 => 143,  445 => 142,  442 => 123,  437 => 120,  425 => 118,  421 => 117,  417 => 116,  411 => 112,  409 => 111,  403 => 109,  398 => 106,  386 => 104,  382 => 103,  378 => 102,  372 => 98,  370 => 97,  367 => 96,  348 => 94,  343 => 93,  327 => 91,  325 => 90,  322 => 89,  312 => 86,  306 => 84,  303 => 83,  295 => 81,  293 => 80,  288 => 79,  283 => 78,  280 => 77,  272 => 71,  266 => 70,  262 => 69,  257 => 68,  252 => 65,  250 => 64,  246 => 63,  242 => 62,  238 => 61,  233 => 58,  231 => 57,  228 => 56,  224 => 54,  219 => 51,  217 => 50,  213 => 48,  210 => 47,  187 => 45,  182 => 44,  162 => 42,  159 => 41,  151 => 38,  148 => 37,  146 => 36,  141 => 35,  138 => 34,  135 => 33,  129 => 31,  127 => 30,  111 => 28,  100 => 26,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  81 => 20,  75 => 18,  73 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*           {% set class = 'col-sm-9' %}*/
/*           {% else %}*/
/*               {% set class = 'col-sm-12' %}*/
/*               {% endif %}*/
/*               <div id="content" class="{{ class }} product-page-content" itemscope itemtype="http://schema.org/Product">*/
/*                   {% if journal2.settings.get('product_page_title_position', 'top') == 'top' %}*/
/*                     <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*                 {% endif %}*/
/*                 {{ content_top }}*/
/*                 <div class="row product-info {{ journal2.settings.get('split_ratio') }}">*/
/*                     <div class="left">*/
/*                       {% if thumb %}*/
/*                         <div class="image">*/
/*                           {% for label, name in labels %}*/
/*                             <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                         {% endfor %}*/
/*                         <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*                     </div>*/
/*                     {% if journal2.settings.get('product_page_gallery') %}*/
/*                       <div class="gallery-text"><span>{{ journal2.settings.get('product_page_gallery_text') }}</span></div>*/
/*                   {% endif %}*/
/*               {% endif %}*/
/*               {% if images %}*/
/*                 <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                       <div class="swiper">*/
/*                         <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                           <div class="swiper-wrapper">*/
/*                           {% endif %}*/
/*                           {% if thumb %}*/
/*                               <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                           {% endif %}*/
/*                           {% for image in images %}*/
/*                               <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" itemprop="image"/></a>*/
/*                           {% endfor %}*/
/*                           {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                           </div>*/
/*                       </div>*/
/*                       {% if journal2.settings.get('product_page_gallery_carousel_arrows') != 'never' %}*/
/*                         <div class="swiper-button-next swiper-hidden"></div>*/
/*                         <div class="swiper-button-prev swiper-hidden"></div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <script>*/
/*             (function () {*/
/*                 var opts = {*/
/*                   slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel_arrows') != 'never' %}*/
/*                   nextButton: $('#product-gallery .swiper-button-next'),*/
/*                   prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                   {% endif %}*/
/*                   autoplay: {{ journal2.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                   speed: parseInt({{ journal2.settings.get('product_page_gallery_carousel_transition_speed') }}, 10) || 400,*/
/*                   touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*               };*/
/* */
/*               $('#product-gallery .swiper-container').swiper(opts);*/
/*           })();*/
/*           </script>*/
/*       {% endif %}*/
/*   {% endif %}*/
/*   {% for tab in journal2.settings.get('additional_product_description_image', []) %}*/
/*     <div class="journal-custom-tab journal-custom-tab-{{ tab.module_id }}">*/
/*       {% if tab.has_icon %}*/
/*         <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*     {% endif %}*/
/*     {% if tab.name %}*/
/*         <h3>{{ tab.name }}</h3>*/
/*     {% endif %}*/
/*     {{ tab.content }}*/
/* </div>*/
/* {% endfor %}*/
/* <div class="image-gallery" style="display: none !important;">*/
/*     {% if thumb %}*/
/*       <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*   {% endif %}*/
/*   {% for image in images %}*/
/*       <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*   {% endfor %}*/
/* </div>*/
/* {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'left' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*     <div class="social share-this">*/
/*       <div class="social-loaded">*/
/*         <script type="text/javascript">var switchTo5x = true;</script>*/
/*         <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*         <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*         {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*           <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*       {% endfor %}*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* <meta itemprop="description" content="{{ journal2.settings.get('product_description') }}"/>*/
/* <div class="product-tabs">*/
/*     {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'bottom' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*       <div class="social share-this">*/
/*         <div class="social-loaded">*/
/*           <script type="text/javascript">var switchTo5x = true;</script>*/
/*           <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*           <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*           {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*             <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {# Si agregamos más especificaciones no se van a mostrar. Lo sacamos para maquetar bien las especificaciones que quieren poner #}*/
/* {# <ul id="tabs" class="nav nav-tabs htabs">*/
/*   {% set is_active = true %}*/
/*       {% if description and not journal2.settings.get('hide_product_description') %}*/
/*         <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*     {% endif %}*/
/*     {% if attribute_groups %}*/
/*         <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*     {% endif %}*/
/*     {% if review_status %}*/
/*         <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*     {% endif %}*/
/*     {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*         <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#additional-product-tab-{{ loop.index }}" data-toggle="tab">{{ tab.name }}</a></li>*/
/*     {% endfor %}*/
/* </ul>*/
/* #}*/
/* {# Especificaciones #}*/
/* <div class="tabs-content">*/
/*     {% set is_active = true %}*/
/*         {% if description and not journal2.settings.get('hide_product_description') %}*/
/*             <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-description">{{ description }}</div>*/
/*         {% endif %}*/
/*         {% if attribute_groups %}*/
/*             <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-specification">*/
/*                 <div class="text-center">*/
/*                     <h2>ESPECIFICACIONES</h2>*/
/*                 </div>*/
/* */
/*             {# <table class="table table-bordered attribute">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for attribute in attribute_group.attribute %}*/
/*                             <tr>*/
/*                                 <td>{{ attribute.name }}</td>*/
/*                                 <td>{{ attribute.text }}</td>*/
/*                             </tr>*/
/*                         */
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>COLOR: Rojo negro verde </td>*/
/*                             <td>COMPOSICION: 1.5 metros </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>ANCHO: xxxx </td>*/
/*                             <td>PIEZAS DE: xxxxxx</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 {% endfor %}*/
/*             </table>*/
/*             #}*/
/*             {# <table class="table table-bordered attribute attr_especific" width="100%" border="0" align="center" cellpadding="5" cellspacing="10"> #}*/
/*             <div class="table_specifications">*/
/*                 <table class="table table-bordered attr_especific" width="100%" border="0" align="center" cellpadding="5" cellspacing="10">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td align="center" valign="middle">{{ attribute_groups[0]['attribute'][0]['name'] }} {{ attribute_groups[0]['attribute'][0]['text'] }}&nbsp;</td>*/
/*                             <td>{{ attribute_groups[0]['attribute'][1]['name'] }} {{ attribute_groups[0]['attribute'][1]['text'] }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td align="center" valign="middle">{{ attribute_groups[0]['attribute'][2]['name'] }} {{ attribute_groups[0]['attribute'][2]['text'] }}</td>*/
/*                             <td>{{ attribute_groups[0]['attribute'][3]['name'] }} {{ attribute_groups[0]['attribute'][3]['text'] }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td align="center">{{ attribute_groups[0]['attribute'][4]['name'] }} {{ attribute_groups[0]['attribute'][4]['text'] }}</td>*/
/*                             <td>{{ attribute_groups[0]['attribute'][5]['name'] }} {{ attribute_groups[0]['attribute'][5]['text'] }}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if review_status %}*/
/*         <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-review" {% if rating %} itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" {% endif %}>*/
/*           {% if rating %}*/
/*             <meta itemprop="ratingValue" content="{{ rating }}"/>*/
/*             <meta itemprop="reviewCount" content="{{ journal2.settings.get('product_num_reviews') }}"/>*/
/*             <meta itemprop="bestRating" content="5"/>*/
/*             <meta itemprop="worstRating" content="1"/>*/
/*         {% endif %}*/
/*         <form class="form-horizontal" id="form-review">*/
/*             <div id="review"></div>*/
/*             <h2 id="review-title">{{ text_write }}</h2>*/
/*             {% if review_guest %}*/
/*               <div class="form-group required">*/
/*                 <div class="col-sm-12">*/
/*                   <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                   <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control"/>*/
/*               </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*               <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*               <div class="help-block">{{ text_note }}</div>*/
/*           </div>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <div class="col-sm-12">*/
/*           <label class="control-label">{{ entry_rating }}</label>*/
/*           &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*           <input type="radio" name="rating" value="1"/>*/
/*           &nbsp;*/
/*           <input type="radio" name="rating" value="2"/>*/
/*           &nbsp;*/
/*           <input type="radio" name="rating" value="3"/>*/
/*           &nbsp;*/
/*           <input type="radio" name="rating" value="4"/>*/
/*           &nbsp;*/
/*           <input type="radio" name="rating" value="5"/>*/
/*           &nbsp;{{ entry_good }}</div>*/
/*       </div>*/
/*       {{ captcha }}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right">*/
/*           <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary button">{{ button_continue }}</button>*/
/*       </div>*/
/*   </div>*/
/* {% else %}*/
/*   {{ text_login }}*/
/* {% endif %}*/
/* </form>*/
/* </div>*/
/* {% endif %}*/
/* {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*     <div id="additional-product-tab-{{ loop.index }}" class="tab-pane tab-content journal-custom-tab {% if is_active %} active {% set is_active = false %}{% endif %}">{{ tab.content }}</div>*/
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% if column_left or column_right %}*/
/*   {% set class = 'col-sm-6' %}*/
/*   {% else %}*/
/*       {% set class = 'col-sm-4' %}*/
/*       {% endif %}*/
/*       <div class="right">*/
/*           {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*             <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*         <div id="product" class="product-options">*/
/*             {% for tab in journal2.settings.get('additional_product_description_top', []) %}*/
/*               <div class="journal-custom-tab journal-custom-tab-{{ tab.module_id }}">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*               {% endif %}*/
/*               {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*               {% endif %}*/
/*               {{ tab.content }}*/
/*           </div>*/
/*       {% endfor %}*/
/*       <ul class="list-unstyled description">*/
/*           {% if journal2.settings.get('product_views') %}*/
/*             <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*         {% endif %}*/
/*         {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*             <li class="brand-logo">*/
/*               <a href="{{ manufacturers }}" class="brand-image">*/
/*                 <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*             </a>*/
/*             {% if manufacturer_image_name %}*/
/*                 <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                   {{ manufacturer_image_name }}*/
/*               </a>*/
/*           {% endif %}*/
/*       </li>*/
/*   {% else %}*/
/*     {% if manufacturer %}*/
/*       <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/* {% if reward %}*/
/*     <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/* {% endif %}*/
/* <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/* </ul>*/
/* {% if journal2.settings.get('product_sold') %}*/
/*   <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/* {% endif %}*/
/* {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*   <div class="countdown-wrapper">*/
/*     <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*     <div class="countdown"></div>*/
/* </div>*/
/* <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/* {% endif %}*/
/* {% if price %}*/
/*   <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*     <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*     <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*     <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*     {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*       <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*   {% endif %}*/
/* */
/*     {#*/
/*         {% if not special %}*/
/*           <li class="product-price">{{ price }}</li>*/
/*         {% else %}*/
/*           <li class="price-old">{{ price }}</li>*/
/*           <li class="price-new" {% if date_end %}data-end-date="{{ date_end }}"{% endif %}>{{ special }}</li>*/
/*         {% endif %}*/
/*     #}*/
/*         {% if tax %}*/
/*           {# <li class="price-tax">{{ text_tax }} {{ tax }}</li> #}*/
/*       {% endif %}*/
/*       {% if points %}*/
/*           <li class="reward">*/
/*             <small>{{ text_points }} {{ points }}</small>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* {# {% for discount in discounts %}*/
/*   <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/* {% endfor %}*/
/* #}*/
/* </ul>*/
/* {% endif %}*/
/* {% if options %}*/
/*   <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*     <h3>{{ text_option }}</h3>*/
/*     {% for option in options %}*/
/*       {% if option.type == 'select' %}*/
/*         <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*           <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*           <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*             <option value="">{{ text_select }}</option>*/
/*             {% for option_value in option.product_option_value %}*/
/*               <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                   ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*               {% endif %} </option>*/
/*           {% endfor %}*/
/*       </select>*/
/*   </div>*/
/* {% endif %}*/
/* {% if option.type == 'radio' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label">{{ option.name }}</label>*/
/*       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                   {{ option_value.name }}*/
/*                   {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </label>*/
/*             </div>*/
/*         {% endfor %} </div>*/
/*     </div>*/
/* {% endif %}*/
/* {% if option.type == 'checkbox' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label">{{ option.name }}</label>*/
/*       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/*               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                   {{ option_value.name }}*/
/*                   {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </label>*/
/*             </div>*/
/*         {% endfor %} </div>*/
/*     </div>*/
/* {% endif %}*/
/* {% if option.type == 'text' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*   </div>*/
/* {% endif %}*/
/* {% if option.type == 'textarea' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*       <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*   </div>*/
/* {% endif %}*/
/* {% if option.type == 'file' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label">{{ option.name }}</label>*/
/*       <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*       <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*   </div>*/
/* {% endif %}*/
/* {% if option.type == 'date' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*       <div class="input-group date">*/
/*         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*         </span></div>*/
/*     </div>*/
/* {% endif %}*/
/* {% if option.type == 'datetime' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*       <div class="input-group datetime">*/
/*         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*         </span></div>*/
/*     </div>*/
/* {% endif %}*/
/* {% if option.type == 'time' %}*/
/*     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*       <div class="input-group time">*/
/*         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*         <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*         </span></div>*/
/*     </div>*/
/* {% endif %}*/
/* {% endfor %}*/
/* </div>*/
/* <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/* {% endif %}*/
/* {% if recurrings %}*/
/*   <hr>*/
/*   <h3>{{ text_payment_recurring }}</h3>*/
/*   <div class="form-group required">*/
/*     <select name="recurring_id" class="form-control">*/
/*       <option value="">{{ text_select }}</option>*/
/*       {% for recurring in recurrings %}*/
/*         <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*     {% endfor %}*/
/* </select>*/
/* <div class="help-block" id="recurring-description"></div>*/
/* </div>*/
/* {% endif %}*/
/* <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*   <div>*/
/*     {% if journal2.settings.get('hide_add_to_cart_button') %}*/
/*       {% for tab in journal2.settings.get('additional_product_enquiry', []) %}*/
/*         <div>{{ tab.content }}</div>*/
/*     {% endfor %}*/
/*     <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/* {% else %}*/
/*   <span class="qty">*/
/*       <label class="control-label text-qty" for="input-quantity">{{ entry_qty }}</label>*/
/*       <input type="text" name="quantity" value="{{ minimum }} mts." size="2" data-min-value="{{ minimum }} mts." id="input-quantity" class="form-control"/>*/
/*       <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*       <script>*/
/*       /* quantity buttons *//* */
/*       var $input = $('.cart input[name="quantity"]');*/
/*       function up() {*/
/*           var val = parseInt($input.val(), 10) + 1 || parseInt($input.attr('data-min-value'), 10);*/
/*           var valor_txt_mts = val + ' mts.';*/
/*           $input.val(valor_txt_mts);*/
/*       }*/
/*       function down() {*/
/*           var val = parseInt($input.val(), 10) - 1 || 0;*/
/*           var min = parseInt($input.attr('data-min-value'), 10) || 1;*/
/*           var valor_txt_mts = Math.max(val, min) + ' mts.';*/
/*           $input.val(valor_txt_mts);*/
/*       }*/
/*       $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);*/
/*       $('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);*/
/*       $input.keydown(function (e) {*/
/*           if (e.which === 38) {*/
/*             up();*/
/*             return false;*/
/*         }*/
/*         if (e.which === 40) {*/
/*             down();*/
/*             return false;*/
/*         }*/
/*     });*/
/*       </script>*/
/*   </span>*/
/*   <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* {% if minimum > 1 %}*/
/*   <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/* {% endif %}*/
/* <div class="wishlist-compare">*/
/*   <span class="links">*/
/*       <a onclick="addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*       <a onclick="addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*   </span>*/
/* </div>*/
/* {% if review_status %}*/
/*   <div class="rating">*/
/*     <p>{% for i in 1..5 %}*/
/*         {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*         {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*     </div>*/
/* {% endif %}*/
/* {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'right' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*   <div class="social share-this">*/
/*     <div class="social-loaded">*/
/*       <script type="text/javascript">var switchTo5x = true;</script>*/
/*       <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*       <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*       {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*         <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*     {% endfor %}*/
/* </div>*/
/* </div>*/
/* {% endif %}*/
/* {% for tab in journal2.settings.get('additional_product_description_bottom', []) %}*/
/*   <div class="journal-custom-tab journal-custom-tab-{{ tab.module_id }}">*/
/*     {% if tab.has_icon %}*/
/*       <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*   {% endif %}*/
/*   {% if tab.name %}*/
/*       <h3>{{ tab.name }}</h3>*/
/*   {% endif %}*/
/*   {{ tab.content }}*/
/* </div>*/
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% if tags %}*/
/*     <p class="tags">*/
/*       <b>{{ text_tags }}</b>*/
/*       {% for tag in tags %}*/
/*         {% if loop.last %}*/
/*           <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*       {% else %}*/
/*           <a href="{{ tag.href }}">{{ tag.tag }}</a>,*/
/*       {% endif %}*/
/*   {% endfor %}*/
/* </p>*/
/* {% endif %}*/
/* {% if products and journal2.settings.get('related_products_status') %}*/
/*     <div class="box related-products {% if journal2.settings.get('related_products_carousel') %} journal-carousel {% if journal2.settings.get('related_products_carousel_arrows') == 'top' %} arrows-top {% endif %} {% endif %}">*/
/*       <div>*/
/*         <div class="box-heading">{{ text_related }}</div>*/
/*         <div class="box-content">*/
/*           {% if journal2.settings.get('related_products_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                   <div class="swiper-wrapper">*/
/*                   {% endif %}*/
/*                   {% for product in products %}*/
/*                       <div class="product-grid-item {{ journal2.settings.get('related_products_grid_classes') }} {% if journal2.settings.get('related_products_carousel') %} swiper-slide {% endif %} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                             <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                               <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                           </a>*/
/*                           {% for label, name in product.labels %}*/
/*                               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                           {% endfor %}*/
/*                           {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                           {% endif %}*/
/*                       </div>*/
/*                       <div class="product-details">*/
/*                         <div class="caption">*/
/*                           <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                           <p class="description">{{ product.description }}</p>*/
/*                           {% if product.price %}*/
/*                             <div class="price">*/
/*                               {% if not product.special %}*/
/*                                 {{ product.price }}*/
/*                             {% else %}*/
/*                                 <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if product.rating %}*/
/*                         <div class="rating">*/
/*                           {% for i in 1..5 %}*/
/*                             {% if product.rating < i %}*/
/*                               <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                               <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                       {% endfor %}*/
/*                   </div>*/
/*               {% endif %}*/
/*           </div>*/
/*           <div class="button-group">*/
/*               {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                 <div class="cart enquiry-button">*/
/*                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*               </div>*/
/*           {% else %}*/
/*             <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*               <a onclick="addToCart('{{ product.product_id }}', '{{ product.minimum }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*           </div>*/
/*       {% endif %}*/
/*       <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*       <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* {% if journal2.settings.get('related_products_carousel') %}*/
/* </div>*/
/* </div>*/
/* {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_arrows') != 'none' %}*/
/*   <div class="swiper-button-next"></div>*/
/*   <div class="swiper-button-prev"></div>*/
/* {% endif %}*/
/* {% endif %}*/
/* </div>*/
/* {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_bullets') %}*/
/*     <div class="swiper-pagination"></div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>*/
/*     $('.related-products .product-grid-item > div').each(function () {*/
/*         var $new = $(this).find('.price-new');*/
/*         if ($new.length && $new.attr('data-end-date')) {*/
/*           $(this).find('.image').append('<div class="countdown"></div>');*/
/*       }*/
/*       Journal.countdown($(this).find('.countdown'), $new.attr('data-end-date'));*/
/*   });*/
/*     </script>*/
/* {% endif %}*/
/* {% if journal2.settings.get('related_products_carousel') %}*/
/*     {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('related_products_items_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count', 0)]) %}*/
/*         {% set grid = [*/
/*         [0, grid.xs],*/
/*         [470, grid.sm],*/
/*         [760, grid.md],*/
/*         [980, grid.lg],*/
/*         [1100, grid.xl],*/
/*         ] %}*/
/*         <script>*/
/*         (function () {*/
/*             var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*             var breakpoints = {*/
/*               470: {*/
/*                 slidesPerView: grid[0][1],*/
/*                 slidesPerGroup: grid[0][1]*/
/*             },*/
/*             760: {*/
/*                 slidesPerView: grid[1][1],*/
/*                 slidesPerGroup: grid[1][1]*/
/*             },*/
/*             980: {*/
/*                 slidesPerView: grid[2][1],*/
/*                 slidesPerGroup: grid[2][1]*/
/*             },*/
/*             1220: {*/
/*                 slidesPerView: grid[3][1],*/
/*                 slidesPerGroup: grid[3][1]*/
/*             }*/
/*         };*/
/* */
/*         var opts = {*/
/*           slidesPerView: grid[4][1],*/
/*           slidesPerGroup: grid[4][1],*/
/*           breakpoints: breakpoints,*/
/*           spaceBetween: parseInt('{{ journal2.settings.get('product_grid_item_spacing', '15') }}', 10),*/
/*           pagination: {% if journal2.settings.get('related_products_carousel_bullets') %} $('.related-products .swiper-pagination') {% else %} false {% endif %},*/
/*           paginationClickable: true,*/
/*           nextButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-next') {% else %} false {% endif %},*/
/*           prevButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-prev') {% else %} false {% endif %},*/
/*           autoplayStopOnHover: {% if journal2.settings.get('related_products_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*           autoplay: {{ journal2.settings.get('related_products_carousel_autoplay') ? journal2.settings.get('related_products_carousel_transition_delay', 4000) : 'false' }},*/
/*           speed: parseInt({{ journal2.settings.get('related_products_carousel_transition_speed') }}, 10) || 400,*/
/*           touchEventsTarget: {% if journal2.settings.get('related_products_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*       };*/
/* */
/*       $('.related-products .swiper-container').swiper(opts);*/
/*   })();*/
/*   </script>*/
/* {% endif %}*/
/* {% endif %}*/
/* {{ content_bottom }}</div>*/
/* </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/getRecurringDescription',*/
/*       type: 'post',*/
/*       data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#recurring-description').html('');*/
/*     },*/
/*     success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/* */
/*         if (json['success']) {*/
/*           $('#recurring-description').html(json['success']);*/
/*       }*/
/*   }*/
/* });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#button-cart').button('loading');*/
/*     },*/
/*     complete: function() {*/
/*         $('#button-cart').button('reset');*/
/*     },*/
/*     success: function(json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/*         $('.form-group').removeClass('has-error');*/
/* */
/*         if (json['error']) {*/
/*           if (json['error']['option']) {*/
/*             for (i in json['error']['option']) {*/
/*               var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*               if (element.parent().hasClass('input-group')) {*/
/*                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             } else {*/
/*                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             }*/
/*         }*/
/*     }*/
/* */
/*     if (json['error']['recurring']) {*/
/*         $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*     }*/
/* */
/*           // Highlight any found errors*/
/*           $('.text-danger').parent().addClass('has-error');*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*           if (!Journal.showNotification(json['success'], json['image'], true)) {*/
/*             $('.breadcrumb').after('<div class="alert alert-success success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         $('#cart-total').html(json['total']);*/
/* */
/*         if (Journal.scrollToTop) {*/
/*             $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*         }*/
/* */
/*         $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/*     }*/
/* },*/
/* error: function(xhr, ajaxOptions, thrownError) {*/
/*     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* }*/
/* });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function () {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*   }*/
/* */
/*   timer = setInterval(function () {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function () {*/
/*             $(node).button('loading');*/
/*         },*/
/*         complete: function () {*/
/*             $(node).button('reset');*/
/*         },*/
/*         success: function (json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*           }*/
/* */
/*           if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input').val(json['code']);*/
/*           }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*     }*/
/* });*/
/*     }*/
/* }, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function (e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button-review').button('loading');*/
/*     },*/
/*     complete: function () {*/
/*         $('#button-review').button('reset');*/
/*     },*/
/*     success: function (json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*       }*/
/*   }*/
/* });*/
/* });*/
/* */
/* $(document).ready(function () {*/
/*     $('.thumbnails').magnificPopup({*/
/*       type: 'image',*/
/*       delegate: 'a',*/
/*       gallery: {*/
/*         enabled: true*/
/*     }*/
/* });*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
