<?php

/* customer/custom_field_list.twig */
class __TwigTemplate_b39061cb7eecdd856445b7db7008a3c718ecb0d70929957822f0bdc536bd1f13 extends Twig_Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-custom-field').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-custom-field\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cfd.name")) {
            // line 39
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cf.location")) {
            // line 44
            echo "                    <a href=\"";
            echo (isset($context["sort_location"]) ? $context["sort_location"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_location"]) ? $context["column_location"] : null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo (isset($context["sort_location"]) ? $context["sort_location"] : null);
            echo "\">";
            echo (isset($context["column_location"]) ? $context["column_location"] : null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
                  <td class=\"text-left\">";
        // line 48
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cf.type")) {
            // line 49
            echo "                    <a href=\"";
            echo (isset($context["sort_type"]) ? $context["sort_type"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_type"]) ? $context["column_type"] : null);
            echo "</a>
                    ";
        } else {
            // line 51
            echo "                    <a href=\"";
            echo (isset($context["sort_type"]) ? $context["sort_type"] : null);
            echo "\">";
            echo (isset($context["column_type"]) ? $context["column_type"] : null);
            echo "</a>
                    ";
        }
        // line 52
        echo "</td>
                  <td class=\"text-right\">";
        // line 53
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cf.sort_order")) {
            // line 54
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        }
        // line 57
        echo "</td>
                  <td class=\"text-right\">";
        // line 58
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        if ((isset($context["custom_fields"]) ? $context["custom_fields"] : null)) {
            // line 63
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 64
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 65
                if (twig_in_filter($this->getAttribute($context["custom_field"], "custom_field_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 66
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 68
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                    ";
                }
                // line 69
                echo "</td>
                  <td class=\"text-left\">";
                // line 70
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 71
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 72
                echo $this->getAttribute($context["custom_field"], "type", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 73
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 74
                echo $this->getAttribute($context["custom_field"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                ";
        } else {
            // line 78
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 79
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 82
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 87
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 88
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 94
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "customer/custom_field_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 94,  282 => 88,  278 => 87,  271 => 82,  265 => 79,  262 => 78,  259 => 77,  248 => 74,  244 => 73,  240 => 72,  236 => 71,  232 => 70,  229 => 69,  223 => 68,  217 => 66,  215 => 65,  212 => 64,  207 => 63,  205 => 62,  198 => 58,  195 => 57,  187 => 56,  177 => 54,  175 => 53,  172 => 52,  164 => 51,  154 => 49,  152 => 48,  149 => 47,  141 => 46,  131 => 44,  129 => 43,  126 => 42,  118 => 41,  108 => 39,  106 => 38,  97 => 32,  91 => 29,  87 => 27,  79 => 23,  76 => 22,  68 => 18,  66 => 17,  60 => 13,  49 => 11,  45 => 10,  40 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-custom-field').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
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
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-custom-field">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'cfd.name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'cf.location' %}*/
/*                     <a href="{{ sort_location }}" class="{{ order|lower }}">{{ column_location }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_location }}">{{ column_location }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'cf.type' %}*/
/*                     <a href="{{ sort_type }}" class="{{ order|lower }}">{{ column_type }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_type }}">{{ column_type }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'cf.sort_order' %}*/
/*                     <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if custom_fields %}*/
/*                 {% for custom_field in custom_fields %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if custom_field.custom_field_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ custom_field.custom_field_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ custom_field.custom_field_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ custom_field.name }}</td>*/
/*                   <td class="text-left">{{ custom_field.location }}</td>*/
/*                   <td class="text-left">{{ custom_field.type }}</td>*/
/*                   <td class="text-right">{{ custom_field.sort_order }}</td>*/
/*                   <td class="text-right"><a href="{{ custom_field.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
