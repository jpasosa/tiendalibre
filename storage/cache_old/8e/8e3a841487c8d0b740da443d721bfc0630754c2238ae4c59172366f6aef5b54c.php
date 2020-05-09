<?php

/* sale/return_list.twig */
class __TwigTemplate_4419d25d1d2d9e49a06177c6eadbd9da5b947e9682044f3868fcf9703fa9307f extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-return').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "') ? \$('#form-return').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-return\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-return-id\">";
        // line 36
        echo (isset($context["entry_return_id"]) ? $context["entry_return_id"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_return_id\" value=\"";
        // line 37
        echo (isset($context["filter_return_id"]) ? $context["filter_return_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_return_id"]) ? $context["entry_return_id"] : null);
        echo "\" id=\"input-return-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 40
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 41
        echo (isset($context["filter_order_id"]) ? $context["filter_order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 44
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 45
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 48
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 49
        echo (isset($context["filter_product"]) ? $context["filter_product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 52
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 53
        echo (isset($context["filter_model"]) ? $context["filter_model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-return-status\">";
        // line 56
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</label>
              <select name=\"filter_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
                
                
                
                
            
                  
                  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 68
            echo "                  ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["filter_return_status_id"]) ? $context["filter_return_status_id"] : null))) {
                // line 69
                echo "                  
                  
            
                
                
                
                
                  
                <option value=\"";
                // line 77
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                
                  
                
                
                
                
            
                  
                  ";
            } else {
                // line 87
                echo "                  
                  
            
                
                
                
                
                  
                <option value=\"";
                // line 95
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                
                  
                
                
                
                
            
                  
                  ";
            }
            // line 105
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                
                
          
              
              
              
              
                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 117
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 119
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-modified\">";
        // line 125
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 127
        echo (isset($context["filter_date_modified"]) ? $context["filter_date_modified"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 133
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
        // line 141
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 144
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-return\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-right\">";
        // line 150
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.return_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_return_id"]) ? $context["sort_return_id"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_return_id"]) ? $context["column_return_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_return_id"]) ? $context["sort_return_id"] : null);
            echo "\">";
            echo (isset($context["column_return_id"]) ? $context["column_return_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 151
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.order_id")) {
            echo " <a href=\"";
            echo (isset($context["sort_order_id"]) ? $context["sort_order_id"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_order_id"]) ? $context["sort_order_id"] : null);
            echo "\">";
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 152
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
        // line 153
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.product")) {
            echo " <a href=\"";
            echo (isset($context["sort_product"]) ? $context["sort_product"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_product"]) ? $context["sort_product"] : null);
            echo "\">";
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 154
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.model")) {
            echo " <a href=\"";
            echo (isset($context["sort_model"]) ? $context["sort_model"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_model"]) ? $context["sort_model"] : null);
            echo "\">";
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 155
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
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
        // line 156
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.date_added")) {
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
                      <td class=\"text-left\">";
        // line 157
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.date_modified")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 158
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 163
        if ((isset($context["returns"]) ? $context["returns"] : null)) {
            // line 164
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["returns"]) ? $context["returns"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 165
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 166
                if (twig_in_filter($this->getAttribute($context["return"], "return_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 167
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["return"], "return_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 169
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["return"], "return_id", array());
                    echo "\" />
                      ";
                }
                // line 170
                echo "</td>
                    <td class=\"text-right\">";
                // line 171
                echo $this->getAttribute($context["return"], "return_id", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 172
                echo $this->getAttribute($context["return"], "order_id", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 173
                echo $this->getAttribute($context["return"], "customer", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 174
                echo $this->getAttribute($context["return"], "product", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 175
                echo $this->getAttribute($context["return"], "model", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 176
                echo $this->getAttribute($context["return"], "return_status", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 177
                echo $this->getAttribute($context["return"], "date_added", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 178
                echo $this->getAttribute($context["return"], "date_modified", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 179
                echo $this->getAttribute($context["return"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                  ";
        } else {
            // line 183
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"10\">";
            // line 184
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 187
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 193
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 194
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
\turl = 'index.php?route=sale/return&user_token=";
        // line 203
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
\t
\tvar filter_return_id = \$('input[name=\\'filter_return_id\\']').val();
\t
\tif (filter_return_id) {
\t\turl += '&filter_return_id=' + encodeURIComponent(filter_return_id);
\t}
\t
\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();
\t
\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}\t
\t\t
\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();
\t
\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}
\t\t
\tvar filter_return_status_id = \$('select[name=\\'filter_return_status_id\\']').val();
\t
\tif (filter_return_status_id !== '') {
\t\turl += '&filter_return_status_id=' + encodeURIComponent(filter_return_status_id);
\t}\t
\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();
\t
\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}
\t\t\t
\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 260
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
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
\t}\t
});

\$('input[name=\\'filter_product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 280
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_product\\']').val(item['label']);
\t}\t
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 300
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}\t
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 319
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script> 
</div>
";
        // line 324
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/return_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 324,  698 => 319,  676 => 300,  653 => 280,  630 => 260,  570 => 203,  558 => 194,  554 => 193,  546 => 187,  540 => 184,  537 => 183,  534 => 182,  523 => 179,  519 => 178,  515 => 177,  511 => 176,  507 => 175,  503 => 174,  499 => 173,  495 => 172,  491 => 171,  488 => 170,  482 => 169,  476 => 167,  474 => 166,  471 => 165,  466 => 164,  464 => 163,  456 => 158,  438 => 157,  420 => 156,  402 => 155,  384 => 154,  366 => 153,  348 => 152,  330 => 151,  312 => 150,  303 => 144,  297 => 141,  286 => 133,  275 => 127,  270 => 125,  259 => 119,  254 => 117,  241 => 106,  235 => 105,  220 => 95,  210 => 87,  195 => 77,  185 => 69,  182 => 68,  178 => 67,  164 => 56,  156 => 53,  152 => 52,  144 => 49,  140 => 48,  132 => 45,  128 => 44,  120 => 41,  116 => 40,  108 => 37,  104 => 36,  97 => 32,  91 => 28,  83 => 24,  80 => 23,  72 => 19,  70 => 18,  65 => 15,  54 => 13,  50 => 12,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-return').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-return').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*       <div id="filter-return" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-return-id">{{ entry_return_id }}</label>*/
/*               <input type="text" name="filter_return_id" value="{{ filter_return_id }}" placeholder="{{ entry_return_id }}" id="input-return-id" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*               <input type="text" name="filter_order_id" value="{{ filter_order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*               <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-product">{{ entry_product }}</label>*/
/*               <input type="text" name="filter_product" value="{{ filter_product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-model">{{ entry_model }}</label>*/
/*               <input type="text" name="filter_model" value="{{ filter_model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-return-status">{{ entry_return_status }}</label>*/
/*               <select name="filter_return_status_id" id="input-return-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 */
/*                   */
/*                 */
/*                 */
/*                 */
/*                 */
/*             */
/*                   */
/*                   {% for return_status in return_statuses %}*/
/*                   {% if return_status.return_status_id == filter_return_status_id %}*/
/*                   */
/*                   */
/*             */
/*                 */
/*                 */
/*                 */
/*                 */
/*                   */
/*                 <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                 */
/*                   */
/*                 */
/*                 */
/*                 */
/*                 */
/*             */
/*                   */
/*                   {% else %}*/
/*                   */
/*                   */
/*             */
/*                 */
/*                 */
/*                 */
/*                 */
/*                   */
/*                 <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                 */
/*                   */
/*                 */
/*                 */
/*                 */
/*                 */
/*             */
/*                   */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 */
/*                 */
/*           */
/*               */
/*               */
/*               */
/*               */
/*                 */
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-modified">{{ entry_date_modified }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_modified" value="{{ filter_date_modified }}" placeholder="{{ entry_date_modified }}" data-date-format="YYYY-MM-DD" id="input-date-modified" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
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
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-return">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-right">{% if sort == 'r.return_id' %} <a href="{{ sort_return_id }}" class="{{ order|lower }}">{{ column_return_id }}</a> {% else %} <a href="{{ sort_return_id }}">{{ column_return_id }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'r.order_id' %} <a href="{{ sort_order_id }}" class="{{ order|lower }}">{{ column_order_id }}</a> {% else %} <a href="{{ sort_order_id }}">{{ column_order_id }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'customer' %} <a href="{{ sort_customer }}" class="{{ order|lower }}">{{ column_customer }}</a> {% else %} <a href="{{ sort_customer }}">{{ column_customer }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.product' %} <a href="{{ sort_product }}" class="{{ order|lower }}">{{ column_product }}</a> {% else %} <a href="{{ sort_product }}">{{ column_product }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.model' %} <a href="{{ sort_model }}" class="{{ order|lower }}">{{ column_model }}</a> {% else %} <a href="{{ sort_model }}">{{ column_model }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.date_modified' %} <a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a> {% else %} <a href="{{ sort_date_modified }}">{{ column_date_modified }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if returns %}*/
/*                   {% for return in returns %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if return.return_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ return.return_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ return.return_id }}" />*/
/*                       {% endif %}</td>*/
/*                     <td class="text-right">{{ return.return_id }}</td>*/
/*                     <td class="text-right">{{ return.order_id }}</td>*/
/*                     <td class="text-left">{{ return.customer }}</td>*/
/*                     <td class="text-left">{{ return.product }}</td>*/
/*                     <td class="text-left">{{ return.model }}</td>*/
/*                     <td class="text-left">{{ return.return_status }}</td>*/
/*                     <td class="text-left">{{ return.date_added }}</td>*/
/*                     <td class="text-left">{{ return.date_modified }}</td>*/
/*                     <td class="text-right"><a href="{{ return.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="10">{{ text_no_results }}</td>*/
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
/* 	url = 'index.php?route=sale/return&user_token={{ user_token }}';*/
/* 	*/
/* 	var filter_return_id = $('input[name=\'filter_return_id\']').val();*/
/* 	*/
/* 	if (filter_return_id) {*/
/* 		url += '&filter_return_id=' + encodeURIComponent(filter_return_id);*/
/* 	}*/
/* 	*/
/* 	var filter_order_id = $('input[name=\'filter_order_id\']').val();*/
/* 	*/
/* 	if (filter_order_id) {*/
/* 		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);*/
/* 	}	*/
/* 		*/
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* 	*/
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* 	*/
/* 	var filter_product = $('input[name=\'filter_product\']').val();*/
/* 	*/
/* 	if (filter_product) {*/
/* 		url += '&filter_product=' + encodeURIComponent(filter_product);*/
/* 	}*/
/* */
/* 	var filter_model = $('input[name=\'filter_model\']').val();*/
/* 	*/
/* 	if (filter_model) {*/
/* 		url += '&filter_model=' + encodeURIComponent(filter_model);*/
/* 	}*/
/* 		*/
/* 	var filter_return_status_id = $('select[name=\'filter_return_status_id\']').val();*/
/* 	*/
/* 	if (filter_return_status_id !== '') {*/
/* 		url += '&filter_return_status_id=' + encodeURIComponent(filter_return_status_id);*/
/* 	}	*/
/* 	*/
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* 	*/
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	var filter_date_modified = $('input[name=\'filter_date_modified\']').val();*/
/* 	*/
/* 	if (filter_date_modified) {*/
/* 		url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);*/
/* 	}*/
/* 			*/
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
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
/* 	}	*/
/* });*/
/* */
/* $('input[name=\'filter_product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_product\']').val(item['label']);*/
/* 	}	*/
/* });*/
/* */
/* $('input[name=\'filter_model\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_model=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',			*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['model'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_model\']').val(item['label']);*/
/* 	}	*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script> */
/* </div>*/
/* {{ footer }} */
