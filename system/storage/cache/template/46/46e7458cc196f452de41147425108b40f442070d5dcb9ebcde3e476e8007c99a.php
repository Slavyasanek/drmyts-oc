<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* drmyts/template/account/account.twig */
class __TwigTemplate_644d6dc5766041fcefbeb968c87db088a5eb38451719d5d3b32f08e9f54b7563 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 20
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 22
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 23
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 24
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 25
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 27
        if (($context["credit_cards"] ?? null)) {
            // line 28
            echo "      <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 31
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 31);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      </ul>
      ";
        }
        // line 35
        echo "      <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 37
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 38
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 39
        if (($context["reward"] ?? null)) {
            // line 40
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 42
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 43
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 44
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 46
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 48
        if ( !($context["tracking"] ?? null)) {
            // line 49
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 51
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 52
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 54
        echo "      </ul>
      <h2>";
        // line 55
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 57
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      ";
        // line 59
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 60
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 62
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 62,  254 => 60,  250 => 59,  243 => 57,  238 => 55,  235 => 54,  228 => 52,  221 => 51,  213 => 49,  211 => 48,  206 => 46,  199 => 44,  193 => 43,  186 => 42,  178 => 40,  176 => 39,  170 => 38,  164 => 37,  158 => 35,  154 => 33,  143 => 31,  139 => 30,  133 => 28,  131 => 27,  124 => 25,  118 => 24,  112 => 23,  106 => 22,  101 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h2>{{ text_my_account }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
        <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
        <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
        <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
      </ul>
      {% if credit_cards %}
      <h2>{{ text_credit_card }}</h2>
      <ul class=\"list-unstyled\">
        {% for credit_card in credit_cards %}
        <li><a href=\"{{ credit_card.href }}\">{{ credit_card.name }}</a></li>
        {% endfor %}
      </ul>
      {% endif %}
      <h2>{{ text_my_orders }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
        <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
        {% if reward %}
        <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
        {% endif %}
        <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
        <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li>
        <li><a href=\"{{ recurring }}\">{{ text_recurring }}</a></li>
      </ul>
      <h2>{{ text_my_affiliate }}</h2>
      <ul class=\"list-unstyled\">
        {% if not tracking %}
        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
        {% else %}
        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
        <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
        {% endif %}
      </ul>
      <h2>{{ text_my_newsletter }}</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
      </ul>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "drmyts/template/account/account.twig", "");
    }
}
