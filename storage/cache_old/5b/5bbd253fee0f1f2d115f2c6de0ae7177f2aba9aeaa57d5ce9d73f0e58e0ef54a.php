<?php

/* design/seo_url_form.twig */
class __TwigTemplate_fddef63e74f78b74450840deeaa652f98504771efd4b2d367ae4a9a420757c03 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-seo-url\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seo-url\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-query\">";
        // line 28
        echo (isset($context["entry_query"]) ? $context["entry_query"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"query\" value=\"";
        // line 30
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_query"]) ? $context["entry_query"] : null);
        echo "\" id=\"input-query\" class=\"form-control\" />
              ";
        // line 31
        if ((isset($context["error_query"]) ? $context["error_query"] : null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_query"]) ? $context["error_query"] : null);
            echo "</div>
              ";
        }
        // line 33
        echo "          
           
           </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-keyword\">";
        // line 38
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"keyword\" value=\"";
        // line 40
        echo (isset($context["keyword"]) ? $context["keyword"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "\" id=\"input-keyword\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_keyword"]) ? $context["error_keyword"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_keyword"]) ? $context["error_keyword"] : null);
            echo "</div>
              ";
        }
        // line 43
        echo "            
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 47
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 51
            echo "                ";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                // line 52
                echo "                <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                ";
            } else {
                // line 54
                echo "                <option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
                ";
            }
            // line 56
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 61
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-control\">
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 65
            echo "                ";
            if (($this->getAttribute($context["language"], "language_id", array()) == (isset($context["language_id"]) ? $context["language_id"] : null))) {
                // line 66
                echo "                <option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                ";
            } else {
                // line 68
                echo "                <option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                ";
            }
            // line 70
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 79
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "design/seo_url_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 79,  215 => 71,  209 => 70,  201 => 68,  193 => 66,  190 => 65,  186 => 64,  180 => 61,  174 => 57,  168 => 56,  160 => 54,  152 => 52,  149 => 51,  145 => 50,  139 => 47,  133 => 43,  127 => 42,  125 => 41,  119 => 40,  114 => 38,  107 => 33,  101 => 32,  99 => 31,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-seo-url" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-seo-url" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-query">{{ entry_query }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="query" value="{{ query }}" placeholder="{{ entry_query }}" id="input-query" class="form-control" />*/
/*               {% if error_query %}*/
/*               <div class="text-danger">{{ error_query }}</div>*/
/*               {% endif %}          */
/*            */
/*            </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-keyword">{{ entry_keyword }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="keyword" value="{{ keyword }}" placeholder="{{ entry_keyword }}" id="input-keyword" class="form-control" />*/
/*               {% if error_keyword %}*/
/*               <div class="text-danger">{{ error_keyword }}</div>*/
/*               {% endif %}            */
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-store">{{ entry_store }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="store_id" id="input-store" class="form-control">*/
/*                 {% for store in stores %}*/
/*                 {% if store.store_id == store_id %}*/
/*                 <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="language_id" id="input-language" class="form-control">*/
/*                 {% for language in languages %}*/
/*                 {% if language.language_id == language_id %}*/
/*                 <option value="{{ language.language_id }}" selected="selected">{{ language.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ language.language_id }}">{{ language.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
