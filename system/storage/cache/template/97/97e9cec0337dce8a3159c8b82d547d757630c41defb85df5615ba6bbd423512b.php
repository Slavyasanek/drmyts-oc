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

/* drmyts/template/mail/forgotten.twig */
class __TwigTemplate_ab9aad6f8b07d267ff25f19b0650071d567ec7d9201a0a4eab5cc70de9643966 extends \Twig\Template
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
        echo ($context["text_greeting"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_change"] ?? null);
        echo "

";
        // line 5
        echo ($context["reset"] ?? null);
        echo "

";
        // line 7
        echo ($context["text_ip"] ?? null);
        echo " 

";
        // line 9
        echo ($context["ip"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ text_greeting }}

{{ text_change }}

{{ reset }}

{{ text_ip }} 

{{ ip }}", "drmyts/template/mail/forgotten.twig", "");
    }
}
