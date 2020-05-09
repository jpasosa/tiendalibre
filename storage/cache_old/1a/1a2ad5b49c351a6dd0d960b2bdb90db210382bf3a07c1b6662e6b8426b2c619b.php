<?php

/* journal2/template/extension/module/category.twig */
class __TwigTemplate_724568ae10713e2d0f7278f03f9654d16e7b373156c3052681e583bc3d18765c extends Twig_Template
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
        echo "<div class=\"box oc-module\">
  <div class=\"list-group box-content\">
    <ul class=\"box-category\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "        ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 6
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
          ";
                // line 7
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 8
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 9
                        echo "              ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 10
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
              ";
                        } else {
                            // line 12
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
              ";
                        }
                        // line 14
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "          ";
                }
                // line 16
                echo "        ";
            } else {
                // line 17
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
        ";
            }
            // line 19
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  84 => 19,  76 => 17,  73 => 16,  70 => 15,  64 => 14,  56 => 12,  48 => 10,  45 => 9,  40 => 8,  38 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="box oc-module">*/
/*   <div class="list-group box-content">*/
/*     <ul class="box-category">*/
/*       {% for category in categories %}*/
/*         {% if category.category_id == category_id %}*/
/*           <li><a href="{{ category.href }}" class="list-group-item active">{{ category.name }}</a></li>*/
/*           {% if category.children %}*/
/*             {% for child in category.children %}*/
/*               {% if child.category_id == child_id %}*/
/*                 <li><a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a></li>*/
/*               {% else %}*/
/*                 <li><a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a></li>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*         {% else %}*/
/*           <li><a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
