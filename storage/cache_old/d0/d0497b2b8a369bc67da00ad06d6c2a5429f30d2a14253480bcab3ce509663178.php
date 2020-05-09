<?php

/* sale/recurring_list.twig */
class __TwigTemplate_2149e3d6d554c5625ee6079e7186274d994e5f77dafab580709dd5f50441d1e8 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-recurring').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"row\">
      <div id=\"filter-recurring\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 30
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-recurring-id\">";
        // line 34
        echo (isset($context["entry_order_recurring_id"]) ? $context["entry_order_recurring_id"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_recurring_id\" value=\"";
        // line 35
        echo (isset($context["filter_order_recurring_id"]) ? $context["filter_order_recurring_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_recurring_id"]) ? $context["entry_order_recurring_id"] : null);
        echo "\" id=\"input-order-recurring-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 38
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 39
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 42
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_recurring_id\" value=\"";
        // line 43
        echo (isset($context["filter_order_recurring_id"]) ? $context["filter_order_recurring_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                
                  
                
                
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurring_statuses"]) ? $context["recurring_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring_status"]) {
            // line 53
            echo "                  ";
            if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == $this->getAttribute($context["recurring_status"], "value", array()))) {
                // line 54
                echo "                  
                
                
                  
                <option value=\"";
                // line 58
                echo $this->getAttribute($context["recurring_status"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["recurring_status"], "text", array());
                echo "</option>
                
                  
                
                
                  ";
            } else {
                // line 64
                echo "                  
                
                
                  
                <option value=\"";
                // line 68
                echo $this->getAttribute($context["recurring_status"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["recurring_status"], "text", array());
                echo "</option>
                
                  
                
                
                  ";
            }
            // line 74
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                
              
              
                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-reference\">";
        // line 82
        echo (isset($context["entry_reference"]) ? $context["entry_reference"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_reference\" value=\"";
        // line 83
        echo (isset($context["filter_reference"]) ? $context["filter_reference"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_reference"]) ? $context["entry_reference"] : null);
        echo "\" id=\"input-reference\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-date_added\">";
        // line 86
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 88
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-date_added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 94
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 102
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-right\">";
        // line 110
        if (((isset($context["sort"]) ? $context["sort"] : null) == "or.order_recurring_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_order_recurring"]) ? $context["sort_order_recurring"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_order_recurring_id"]) ? $context["column_order_recurring_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_order_recurring"]) ? $context["sort_order_recurring"] : null);
            echo "\">";
            echo (isset($context["column_order_recurring_id"]) ? $context["column_order_recurring_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 111
        if (((isset($context["sort"]) ? $context["sort"] : null) == "or.order_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 112
        if (((isset($context["sort"]) ? $context["sort"] : null) == "or.reference")) {
            echo " <a href=\"";
            echo (isset($context["sort_reference"]) ? $context["sort_reference"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_reference"]) ? $context["column_reference"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_reference"]) ? $context["sort_reference"] : null);
            echo "\">";
            echo (isset($context["column_reference"]) ? $context["column_reference"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 113
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer")) {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer"]) ? $context["sort_customer"] : null);
            echo "\">";
            echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 114
        if (((isset($context["sort"]) ? $context["sort"] : null) == "or.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 115
        if (((isset($context["sort"]) ? $context["sort"] : null) == "or.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 116
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 121
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 122
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 123
                echo "                  <tr>
                    <td class=\"text-right\">";
                // line 124
                echo $this->getAttribute($context["recurring"], "order_recurring_id", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 125
                echo $this->getAttribute($context["recurring"], "order_id", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 126
                echo $this->getAttribute($context["recurring"], "reference", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 127
                echo $this->getAttribute($context["recurring"], "customer", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 128
                echo $this->getAttribute($context["recurring"], "status", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 129
                echo $this->getAttribute($context["recurring"], "date_added", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 130
                echo $this->getAttribute($context["recurring"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_order_recurring"]) ? $context["button_order_recurring"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a> <a href=\"";
                echo $this->getAttribute($context["recurring"], "order", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_order"]) ? $context["button_order"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-shopping-cart\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                  ";
        } else {
            // line 134
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 135
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 138
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 144
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 145
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=sale/recurring&user_token=";
        // line 154
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_order_recurring_id = \$('input[name=\\'filter_order_recurring_id\\']').val();

\tif (filter_order_recurring_id) {
\t\turl += '&filter_order_recurring_id=' + encodeURIComponent(filter_order_recurring_id);
\t}

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_reference = \$('input[name=\\'filter_reference\\']').val();
\t
\tif (filter_reference) {
\t\turl += '&filter_reference=' + encodeURIComponent(filter_reference);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status != 0) {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}
\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added != '') {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}
\t\t
\tlocation = url;
});

\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\tfilter();
\t}
});

\$('.date').datetimepicker({ 
\tlanguage: '";
        // line 202
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false 
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 210
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 227
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 227,  506 => 210,  495 => 202,  444 => 154,  432 => 145,  428 => 144,  420 => 138,  414 => 135,  411 => 134,  408 => 133,  393 => 130,  389 => 129,  385 => 128,  381 => 127,  377 => 126,  373 => 125,  369 => 124,  366 => 123,  361 => 122,  359 => 121,  351 => 116,  333 => 115,  315 => 114,  297 => 113,  279 => 112,  261 => 111,  243 => 110,  232 => 102,  221 => 94,  210 => 88,  205 => 86,  197 => 83,  193 => 82,  184 => 75,  178 => 74,  167 => 68,  161 => 64,  150 => 58,  144 => 54,  141 => 53,  137 => 52,  128 => 46,  120 => 43,  116 => 42,  108 => 39,  104 => 38,  96 => 35,  92 => 34,  85 => 30,  79 => 26,  71 => 22,  68 => 21,  60 => 17,  58 => 16,  53 => 13,  42 => 11,  38 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-recurring').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*       </div>*/
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
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-recurring" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-order-recurring-id">{{ entry_order_recurring_id }}</label>*/
/*               <input type="text" name="filter_order_recurring_id" value="{{ filter_order_recurring_id }}" placeholder="{{ entry_order_recurring_id }}" id="input-order-recurring-id" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*               <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*               <input type="text" name="filter_order_recurring_id" value="{{ filter_order_recurring_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 */
/*                   */
/*                 */
/*                 */
/*                   {% for recurring_status in recurring_statuses %}*/
/*                   {% if filter_status == recurring_status.value %}*/
/*                   */
/*                 */
/*                 */
/*                   */
/*                 <option value="{{ recurring_status.value }}" selected="selected">{{ recurring_status.text }}</option>*/
/*                 */
/*                   */
/*                 */
/*                 */
/*                   {% else %}*/
/*                   */
/*                 */
/*                 */
/*                   */
/*                 <option value="{{ recurring_status.value }}">{{ recurring_status.text }}</option>*/
/*                 */
/*                   */
/*                 */
/*                 */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*               */
/*               */
/*                 */
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-reference">{{ entry_reference }}</label>*/
/*               <input type="text" name="filter_reference" value="{{ filter_reference }}" placeholder="{{ entry_reference }}" id="input-reference" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-date_added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-date_added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span> </div>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="" method="post" enctype="multipart/form-data" id="form-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-right">{% if sort == 'or.order_recurring_id' %} <a href="{{ sort_order_recurring }}" class="{{ order|lower }}">{{ column_order_recurring_id }}</a> {% else %} <a href="{{ sort_order_recurring }}">{{ column_order_recurring_id }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'or.order_id' %} <a href="{{ sort_order }}" class="{{ order|lower }}">{{ column_order_id }}</a> {% else %} <a href="{{ sort_order }}">{{ column_order_id }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'or.reference' %} <a href="{{ sort_reference }}" class="{{ order|lower }}">{{ column_reference }}</a> {% else %} <a href="{{ sort_reference }}">{{ column_reference }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'customer' %} <a href="{{ sort_customer }}" class="{{ order|lower }}">{{ column_customer }}</a> {% else %} <a href="{{ sort_customer }}">{{ column_customer }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'or.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'or.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if recurrings %}*/
/*                   {% for recurring in recurrings %}*/
/*                   <tr>*/
/*                     <td class="text-right">{{ recurring.order_recurring_id }}</td>*/
/*                     <td class="text-right">{{ recurring.order_id }}</td>*/
/*                     <td class="text-left">{{ recurring.reference }}</td>*/
/*                     <td class="text-left">{{ recurring.customer }}</td>*/
/*                     <td class="text-left">{{ recurring.status }}</td>*/
/*                     <td class="text-left">{{ recurring.date_added }}</td>*/
/*                     <td class="text-right"><a href="{{ recurring.view }}" data-toggle="tooltip" title="{{ button_order_recurring }}" class="btn btn-info"><i class="fa fa-eye"></i></a> <a href="{{ recurring.order }}" data-toggle="tooltip" title="{{ button_order }}" class="btn btn-info"><i class="fa fa-shopping-cart"></i></a></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=sale/recurring&user_token={{ user_token }}';*/
/* */
/* 	var filter_order_recurring_id = $('input[name=\'filter_order_recurring_id\']').val();*/
/* */
/* 	if (filter_order_recurring_id) {*/
/* 		url += '&filter_order_recurring_id=' + encodeURIComponent(filter_order_recurring_id);*/
/* 	}*/
/* */
/* 	var filter_order_id = $('input[name=\'filter_order_id\']').val();*/
/* */
/* 	if (filter_order_id) {*/
/* 		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);*/
/* 	}*/
/* */
/* 	var filter_reference = $('input[name=\'filter_reference\']').val();*/
/* 	*/
/* 	if (filter_reference) {*/
/* 		url += '&filter_reference=' + encodeURIComponent(filter_reference);*/
/* 	}*/
/* */
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* 	*/
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* 	*/
/* 	if (filter_status != 0) {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* 	*/
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* 	*/
/* 	if (filter_date_added != '') {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* 		*/
/* 	location = url;*/
/* });*/
/* */
/* $('#form input').keydown(function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		filter();*/
/* 	}*/
/* });*/
/* */
/* $('.date').datetimepicker({ */
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false */
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
