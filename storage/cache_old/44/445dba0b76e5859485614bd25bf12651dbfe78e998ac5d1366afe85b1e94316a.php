<?php

/* journal2/template/journal2/checkout/cart.twig */
class __TwigTemplate_ae716fadaa87f830930fc515fca12584d6a39f684f19f4024efca15c8926d0ef extends Twig_Template
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
        echo "<div class=\"checkout-content checkout-cart\">
  <h2 class=\"secondary-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_shop_cart", 1 => "Shopping Cart"), "method");
        echo "</h2>
  <div class=\"table-responsive checkout-product\">
    <table class=\"table table-bordered table-hover\">
      <thead>
      <tr>
        <td class=\"text-left name\" colspan=\"2\">";
        // line 7
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
        <td class=\"text-left quantity\">";
        // line 8
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
        <td class=\"text-right price\">";
        // line 9
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
        <td class=\"text-right total\">";
        // line 10
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
      </tr>
      </thead>
      <tbody>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "        <tr>
          <td class=\"text-center image\">";
            // line 16
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 17
                echo "              <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a>
            ";
            }
            // line 19
            echo "          <td class=\"text-left name\"><a
              href=\"";
            // line 20
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 22
                echo "              <br/>
              &nbsp;
              <small> - ";
                // line 24
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                // line 27
                echo "              <br/>
              <span class=\"label label-info\">";
                // line 28
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span>
              <small>";
                // line 29
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small>
            ";
            }
            // line 31
            echo "          <td class=\"text-left quantity\">
            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
              <input type=\"text\" name=\"quantity[";
            // line 33
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\"/>
              <span class=\"input-group-btn\">
                <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 35
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" data-product-key=\"";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "\" class=\"btn btn-primary btn-update\"><i class=\"fa fa-refresh\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 36
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" data-product-key=\"";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "\" class=\"btn btn-danger  btn-delete\"><i class=\"fa fa-times-circle\"></i></button>
              </span>
            </div>
          </td>
          <td class=\"text-right price\">";
            // line 40
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
          <td class=\"text-right total\">";
            // line 41
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 45
            echo "        <tr>
          <td class=\"text-left\">";
            // line 46
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
          <td class=\"text-left\"></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
            // line 49
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
          <td class=\"text-right\">";
            // line 50
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </tbody>
      <tfoot>
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 56
            echo "        <tr>
          <td colspan=\"4\" class=\"text-right\">";
            // line 57
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</td>
          <td class=\"text-right\">";
            // line 58
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      </tfoot>
    </table>
  </div>
  <div id=\"payment-confirm-button\" class=\"payment-";
        // line 64
        echo (isset($context["payment_code"]) ? $context["payment_code"] : null);
        echo "\">
    <h2 class=\"secondary-title\">";
        // line 65
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_payment_details", 1 => "Payment Details"), "method");
        echo "</h2>
    ";
        // line 66
        echo (isset($context["payment"]) ? $context["payment"] : null);
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 66,  211 => 65,  207 => 64,  202 => 61,  193 => 58,  189 => 57,  186 => 56,  182 => 55,  178 => 53,  169 => 50,  165 => 49,  159 => 46,  156 => 45,  151 => 44,  142 => 41,  138 => 40,  129 => 36,  123 => 35,  116 => 33,  112 => 31,  107 => 29,  103 => 28,  100 => 27,  97 => 26,  87 => 24,  83 => 22,  79 => 21,  73 => 20,  70 => 19,  58 => 17,  56 => 16,  53 => 15,  49 => 14,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-content checkout-cart">*/
/*   <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_shop_cart', 'Shopping Cart') }}</h2>*/
/*   <div class="table-responsive checkout-product">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*       <tr>*/
/*         <td class="text-left name" colspan="2">{{ column_name }}</td>*/
/*         <td class="text-left quantity">{{ column_quantity }}</td>*/
/*         <td class="text-right price">{{ column_price }}</td>*/
/*         <td class="text-right total">{{ column_total }}</td>*/
/*       </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center image">{% if product.thumb %}*/
/*               <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a>*/
/*             {% endif %}*/
/*           <td class="text-left name"><a*/
/*               href="{{ product.href }}">{{ product.name }}</a>*/
/*             {% for option in product.option %}*/
/*               <br/>*/
/*               &nbsp;*/
/*               <small> - {{ option.name }}: {{ option.value }}</small>*/
/*             {% endfor %}*/
/*             {% if product.recurring %}*/
/*               <br/>*/
/*               <span class="label label-info">{{ text_recurring_item }}</span>*/
/*               <small>{{ product.recurring }}</small>*/
/*             {% endif %}*/
/*           <td class="text-left quantity">*/
/*             <div class="input-group btn-block" style="max-width: 200px;">*/
/*               <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control"/>*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" data-toggle="tooltip" title="{{ button_update }}" data-product-key="{{ product.cart_id }}" class="btn btn-primary btn-update"><i class="fa fa-refresh"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_remove }}" data-product-key="{{ product.cart_id }}" class="btn btn-danger  btn-delete"><i class="fa fa-times-circle"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </td>*/
/*           <td class="text-right price">{{ product.price }}</td>*/
/*           <td class="text-right total">{{ product.total }}</td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*       {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-left"></td>*/
/*           <td class="text-right">1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*       </tbody>*/
/*       <tfoot>*/
/*       {% for total in totals %}*/
/*         <tr>*/
/*           <td colspan="4" class="text-right">{{ total.title }}:</td>*/
/*           <td class="text-right">{{ total.text }}</td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*       </tfoot>*/
/*     </table>*/
/*   </div>*/
/*   <div id="payment-confirm-button" class="payment-{{ payment_code }}">*/
/*     <h2 class="secondary-title">{{ journal2.settings.get('one_page_lang_payment_details', 'Payment Details') }}</h2>*/
/*     {{ payment }}*/
/*   </div>*/
/* </div>*/
/* */
/* */
