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

/* drmyts/template/extension/module/account.twig */
class __TwigTemplate_85fe25ca880fc2673cd88a499d0c7f99becde01fc253ff8bb11e997c871a907d extends \Twig\Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 5
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 6
        if (($context["logged"] ?? null)) {
            // line 7
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 9
        echo "  <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_address"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_download"] ?? null);
        echo "</a><a href=\"";
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_reward"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_return"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 10
        if (($context["logged"] ?? null)) {
            // line 11
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 13,  120 => 11,  118 => 10,  79 => 9,  67 => 7,  65 => 6,  58 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-group\">
  {% if not logged %}
  <a href=\"{{ login }}\" class=\"list-group-item\">{{ text_login }}</a> <a href=\"{{ register }}\" class=\"list-group-item\">{{ text_register }}</a> <a href=\"{{ forgotten }}\" class=\"list-group-item\">{{ text_forgotten }}</a>
  {% endif %}
  <a href=\"{{ account }}\" class=\"list-group-item\">{{ text_account }}</a>
  {% if logged %}
  <a href=\"{{ edit }}\" class=\"list-group-item\">{{ text_edit }}</a> <a href=\"{{ password }}\" class=\"list-group-item\">{{ text_password }}</a>
  {% endif %}
  <a href=\"{{ address }}\" class=\"list-group-item\">{{ text_address }}</a> <a href=\"{{ wishlist }}\" class=\"list-group-item\">{{ text_wishlist }}</a> <a href=\"{{ order }}\" class=\"list-group-item\">{{ text_order }}</a> <a href=\"{{ download }}\" class=\"list-group-item\">{{ text_download }}</a><a href=\"{{ recurring }}\" class=\"list-group-item\">{{ text_recurring }}</a> <a href=\"{{ reward }}\" class=\"list-group-item\">{{ text_reward }}</a> <a href=\"{{ return }}\" class=\"list-group-item\">{{ text_return }}</a> <a href=\"{{ transaction }}\" class=\"list-group-item\">{{ text_transaction }}</a> <a href=\"{{ newsletter }}\" class=\"list-group-item\">{{ text_newsletter }}</a>
  {% if logged %}
  <a href=\"{{ logout }}\" class=\"list-group-item\">{{ text_logout }}</a>
  {% endif %}
</div>
", "drmyts/template/extension/module/account.twig", "");
    }
}
