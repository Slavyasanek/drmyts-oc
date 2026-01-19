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

/* drmyts/template/common/menu.twig */
class __TwigTemplate_50f3e08773fa33ba7a5cdf16d572f2b30c0b8002b75849a96c371b88a2f158b6 extends \Twig\Template
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
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/common/menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% if categories %}
<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">{{ text_category }}</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        {% for category in categories %}
        {% if category.children %}
        <li class=\"dropdown\"><a href=\"{{ category.href }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ category.name }}</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
              <ul class=\"list-unstyled\">
                {% for child in children %}
                <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                {% endfor %}
              </ul>
              {% endfor %}</div>
            <a href=\"{{ category.href }}\" class=\"see-all\">{{ text_all }} {{ category.name }}</a> </div>
        </li>
        {% else %}
        <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
        {% endif %}
        {% endfor %}
      </ul>
    </div>
  </nav>
</div>
{% endif %}  #}

{# {{ dump(categories)}} #}", "drmyts/template/common/menu.twig", "");
    }
}
