<?php

/* journal2/template/extension/module/account.twig */
class __TwigTemplate_ae2cd140b613ab74299ac566b59b66df9a9aeca185f1800dac0b9ef2e5e5330f extends Twig_Template
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
    <div class=\"list-group\">
      <ul class=\"box-category\">
        ";
        // line 5
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 6
            echo "          <li><a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a> <a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a> <a href=\"";
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a></li>
        ";
        }
        // line 8
        echo "        <li><a href=\"";
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
        ";
        // line 9
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 10
            echo "          <li><a href=\"";
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a> <a href=\"";
            echo (isset($context["password"]) ? $context["password"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_password"]) ? $context["text_password"] : null);
            echo "</a></li>
        ";
        }
        // line 12
        echo "        <li><a href=\"";
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a><a href=\"";
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["reward"]) ? $context["reward"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a> <a href=\"";
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\" class=\"list-group-item\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        ";
        // line 13
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 14
            echo "          <li><a href=\"";
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" class=\"list-group-item\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
        ";
        }
        // line 16
        echo "      </ul>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  105 => 14,  103 => 13,  64 => 12,  52 => 10,  50 => 9,  43 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="box oc-module">*/
/*   <div class="list-group box-content">*/
/*     <div class="list-group">*/
/*       <ul class="box-category">*/
/*         {% if not logged %}*/
/*           <li><a href="{{ login }}" class="list-group-item">{{ text_login }}</a> <a href="{{ register }}" class="list-group-item">{{ text_register }}</a> <a href="{{ forgotten }}" class="list-group-item">{{ text_forgotten }}</a></li>*/
/*         {% endif %}*/
/*         <li><a href="{{ account }}" class="list-group-item">{{ text_account }}</a></li>*/
/*         {% if logged %}*/
/*           <li><a href="{{ edit }}" class="list-group-item">{{ text_edit }}</a> <a href="{{ password }}" class="list-group-item">{{ text_password }}</a></li>*/
/*         {% endif %}*/
/*         <li><a href="{{ address }}" class="list-group-item">{{ text_address }}</a> <a href="{{ wishlist }}" class="list-group-item">{{ text_wishlist }}</a> <a href="{{ order }}" class="list-group-item">{{ text_order }}</a> <a href="{{ download }}" class="list-group-item">{{ text_download }}</a><a href="{{ recurring }}" class="list-group-item">{{ text_recurring }}</a> <a href="{{ reward }}" class="list-group-item">{{ text_reward }}</a> <a href="{{ return }}" class="list-group-item">{{ text_return }}</a> <a href="{{ transaction }}" class="list-group-item">{{ text_transaction }}</a> <a href="{{ newsletter }}" class="list-group-item">{{ text_newsletter }}</a></li>*/
/*         {% if logged %}*/
/*           <li><a href="{{ logout }}" class="list-group-item">{{ text_logout }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
