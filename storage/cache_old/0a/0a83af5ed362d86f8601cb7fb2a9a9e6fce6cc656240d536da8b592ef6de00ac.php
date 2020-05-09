<?php

/* sale/voucher_list.twig */
class __TwigTemplate_79a43766b19ed71121d238e175bb7f8990fbc1edfe73966c8de7fe89427d7130 extends Twig_Template
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
        <button type=\"button\" id=\"button-send\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_send"]) ? $context["button_send"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-envelope\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-voucher').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-voucher\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 40
        if (((isset($context["sort"]) ? $context["sort"] : null) == "v.code")) {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>
                    ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>
                    ";
        }
        // line 44
        echo "</td>
                  <td class=\"text-left\">";
        // line 45
        if (((isset($context["sort"]) ? $context["sort"] : null) == "v.from_name")) {
            // line 46
            echo "                    <a href=\"";
            echo (isset($context["sort_from"]) ? $context["sort_from"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_from"]) ? $context["column_from"] : null);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo (isset($context["sort_from"]) ? $context["sort_from"] : null);
            echo "\">";
            echo (isset($context["column_from"]) ? $context["column_from"] : null);
            echo "</a>
                    ";
        }
        // line 49
        echo "</td>
                  <td class=\"text-left\">";
        // line 50
        if (((isset($context["sort"]) ? $context["sort"] : null) == "v.to_name")) {
            // line 51
            echo "                    <a href=\"";
            echo (isset($context["sort_to"]) ? $context["sort_to"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_to"]) ? $context["column_to"] : null);
            echo "</a>
                    ";
        } else {
            // line 53
            echo "                    <a href=\"";
            echo (isset($context["sort_to"]) ? $context["sort_to"] : null);
            echo "\">";
            echo (isset($context["column_to"]) ? $context["column_to"] : null);
            echo "</a>
                    ";
        }
        // line 54
        echo "</td>
                  <td class=\"text-right\">";
        // line 55
        if (((isset($context["sort"]) ? $context["sort"] : null) == "v.amount")) {
            // line 56
            echo "                    <a href=\"";
            echo (isset($context["sort_amount"]) ? $context["sort_amount"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
            echo "</a>
                    ";
        } else {
            // line 58
            echo "                    <a href=\"";
            echo (isset($context["sort_amount"]) ? $context["sort_amount"] : null);
            echo "\">";
            echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
            echo "</a>
                    ";
        }
        // line 59
        echo "</td>
                  <td class=\"text-left\">";
        // line 60
        if (((isset($context["sort"]) ? $context["sort"] : null) == "theme")) {
            // line 61
            echo "                    <a href=\"";
            echo (isset($context["sort_theme"]) ? $context["sort_theme"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_theme"]) ? $context["column_theme"] : null);
            echo "</a>
                    ";
        } else {
            // line 63
            echo "                    <a href=\"";
            echo (isset($context["sort_theme"]) ? $context["sort_theme"] : null);
            echo "\">";
            echo (isset($context["column_theme"]) ? $context["column_theme"] : null);
            echo "</a>
                    ";
        }
        // line 64
        echo "</td>
                  <td class=\"text-left\">";
        // line 65
        if (((isset($context["sort"]) ? $context["sort"] : null) == "v.status")) {
            // line 66
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        } else {
            // line 68
            echo "                    <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                    ";
        }
        // line 69
        echo "</td>
                  <td class=\"text-left\">";
        // line 70
        if (((isset($context["sort"]) ? $context["sort"] : null) == "v.date_added")) {
            // line 71
            echo "                    <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                    ";
        } else {
            // line 73
            echo "                    <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                    ";
        }
        // line 74
        echo "</td>
                  <td class=\"text-right\">";
        // line 75
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 79
        if ((isset($context["vouchers"]) ? $context["vouchers"] : null)) {
            // line 80
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 81
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 82
                if (twig_in_filter($this->getAttribute($context["voucher"], "voucher_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 83
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["voucher"], "voucher_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 85
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["voucher"], "voucher_id", array());
                    echo "\" />
                    ";
                }
                // line 86
                echo "</td>
                  <td class=\"text-left\">";
                // line 87
                echo $this->getAttribute($context["voucher"], "code", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 88
                echo $this->getAttribute($context["voucher"], "from", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 89
                echo $this->getAttribute($context["voucher"], "to", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 90
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 91
                echo $this->getAttribute($context["voucher"], "theme", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 92
                echo $this->getAttribute($context["voucher"], "status", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 93
                echo $this->getAttribute($context["voucher"], "date_added", array());
                echo "</td>
                  <td class=\"text-right\">
                  ";
                // line 95
                if ($this->getAttribute($context["voucher"], "order", array())) {
                    // line 96
                    echo "                  <a href=\"";
                    echo $this->getAttribute($context["voucher"], "order", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_order"]) ? $context["button_order"] : null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa fa-eye\"></i></a>
                  ";
                }
                // line 98
                echo "                  <a href=\"";
                echo $this->getAttribute($context["voucher"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                ";
        } else {
            // line 102
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"9\">";
            // line 103
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 106
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 111
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 112
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-send').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/voucher/send&user_token=";
        // line 120
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$('input[name^=\\'selected\\']:checked'),
\t\tbeforeSend: function() {
\t\t\t\$('#button-send i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\$('#button-send').prop('disabled', true);
\t\t},\t
\t\tcomplete: function() {
\t\t\t\$('#button-send i').replaceWith('<i class=\"fa fa-envelope\"></i>');
\t\t\t\$('#button-send').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t}\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
})
//--></script></div>
";
        // line 149
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "sale/voucher_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 149,  391 => 120,  380 => 112,  376 => 111,  369 => 106,  363 => 103,  360 => 102,  357 => 101,  345 => 98,  337 => 96,  335 => 95,  330 => 93,  326 => 92,  322 => 91,  318 => 90,  314 => 89,  310 => 88,  306 => 87,  303 => 86,  297 => 85,  291 => 83,  289 => 82,  286 => 81,  281 => 80,  279 => 79,  272 => 75,  269 => 74,  261 => 73,  251 => 71,  249 => 70,  246 => 69,  238 => 68,  228 => 66,  226 => 65,  223 => 64,  215 => 63,  205 => 61,  203 => 60,  200 => 59,  192 => 58,  182 => 56,  180 => 55,  177 => 54,  169 => 53,  159 => 51,  157 => 50,  154 => 49,  146 => 48,  136 => 46,  134 => 45,  131 => 44,  123 => 43,  113 => 41,  111 => 40,  102 => 34,  96 => 31,  92 => 29,  84 => 25,  81 => 24,  73 => 20,  71 => 19,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" id="button-send" data-toggle="tooltip" title="{{ button_send }}" class="btn btn-warning"><i class="fa fa-envelope"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-voucher').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-voucher">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'v.code' %}*/
/*                     <a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_code }}">{{ column_code }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'v.from_name' %}*/
/*                     <a href="{{ sort_from }}" class="{{ order|lower }}">{{ column_from }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_from }}">{{ column_from }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'v.to_name' %}*/
/*                     <a href="{{ sort_to }}" class="{{ order|lower }}">{{ column_to }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_to }}">{{ column_to }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'v.amount' %}*/
/*                     <a href="{{ sort_amount }}" class="{{ order|lower }}">{{ column_amount }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_amount }}">{{ column_amount }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'theme' %}*/
/*                     <a href="{{ sort_theme }}" class="{{ order|lower }}">{{ column_theme }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_theme }}">{{ column_theme }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'v.status' %}*/
/*                     <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'v.date_added' %}*/
/*                     <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if vouchers %}*/
/*                 {% for voucher in vouchers %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if voucher.voucher_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ voucher.voucher_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ voucher.voucher_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ voucher.code }}</td>*/
/*                   <td class="text-left">{{ voucher.from }}</td>*/
/*                   <td class="text-left">{{ voucher.to }}</td>*/
/*                   <td class="text-right">{{ voucher.amount }}</td>*/
/*                   <td class="text-left">{{ voucher.theme }}</td>*/
/*                   <td class="text-left">{{ voucher.status }}</td>*/
/*                   <td class="text-left">{{ voucher.date_added }}</td>*/
/*                   <td class="text-right">*/
/*                   {% if voucher.order %}*/
/*                   <a href="{{ voucher.order }}" data-toggle="tooltip" title="{{ button_order }}" class="btn btn-info"><i class="fa fa fa-eye"></i></a>*/
/*                   {% endif %}*/
/*                   <a href="{{ voucher.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="9">{{ text_no_results }}</td>*/
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
/*   <script type="text/javascript"><!--*/
/* $('#button-send').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/voucher/send&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $('input[name^=\'selected\']:checked'),*/
/* 		beforeSend: function() {*/
/* 			$('#button-send i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 			$('#button-send').prop('disabled', true);*/
/* 		},	*/
/* 		complete: function() {*/
/* 			$('#button-send i').replaceWith('<i class="fa fa-envelope"></i>');*/
/* 			$('#button-send').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* 			*/
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* 			}		*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});	*/
/* })*/
/* //--></script></div>*/
/* {{ footer }}*/
