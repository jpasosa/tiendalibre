<?php

/* extension/captcha/google.twig */
class __TwigTemplate_bf68434e20ba6c8ca006a310a94d9d6fb26409f7d299401f074ea410bc092c97 extends Twig_Template
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
        <button type=\"submit\" form=\"form-captcha\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-captcha\" class=\"form-horizontal\">
          <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 28
        echo (isset($context["text_signup"]) ? $context["text_signup"] : null);
        echo "</div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 30
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"captcha_google_key\" value=\"";
        // line 32
        echo (isset($context["captcha_google_key"]) ? $context["captcha_google_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 33
        if ((isset($context["error_key"]) ? $context["error_key"] : null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_key"]) ? $context["error_key"] : null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-secret\">";
        // line 39
        echo (isset($context["entry_secret"]) ? $context["entry_secret"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"captcha_google_secret\" value=\"";
        // line 41
        echo (isset($context["captcha_google_secret"]) ? $context["captcha_google_secret"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_secret"]) ? $context["entry_secret"] : null);
        echo "\" id=\"input-secret\" class=\"form-control\" />
              ";
        // line 42
        if ((isset($context["error_secret"]) ? $context["error_secret"] : null)) {
            // line 43
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_secret"]) ? $context["error_secret"] : null);
            echo "</div>
              ";
        }
        // line 45
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 48
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"captcha_google_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 51
        if ((isset($context["captcha_google_status"]) ? $context["captcha_google_status"] : null)) {
            // line 52
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 53
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 55
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 56
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 58
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 66
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/captcha/google.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 66,  169 => 58,  164 => 56,  159 => 55,  154 => 53,  149 => 52,  147 => 51,  141 => 48,  136 => 45,  130 => 43,  128 => 42,  122 => 41,  117 => 39,  112 => 36,  106 => 34,  104 => 33,  98 => 32,  93 => 30,  88 => 28,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-captcha" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-captcha" class="form-horizontal">*/
/*           <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_signup }}</div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-key">{{ entry_key }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="captcha_google_key" value="{{ captcha_google_key }}" placeholder="{{ entry_key }}" id="input-key" class="form-control" />*/
/*               {% if error_key %}*/
/*               <div class="text-danger">{{ error_key }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-secret">{{ entry_secret }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="captcha_google_secret" value="{{ captcha_google_secret }}" placeholder="{{ entry_secret }}" id="input-secret" class="form-control" />*/
/*               {% if error_secret %}*/
/*               <div class="text-danger">{{ error_secret }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="captcha_google_status" id="input-status" class="form-control">*/
/*                 {% if captcha_google_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
