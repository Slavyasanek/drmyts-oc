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

/* drmyts/template/product/manufacturer_info.twig */
class __TwigTemplate_370c8ea09ab7ea9d284df651ef480cd1b1ef060aec6859d996164cc369883841 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 18
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 19
            echo "      <div class=\"row\"> ";
            if (($context["thumb"] ?? null)) {
                // line 20
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 22
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 23
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 24
            echo "</div>
      <hr>
\t  ";
        }
        // line 27
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 28
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 31
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 32
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"> <a href=\"";
            // line 36
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a> </div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 40
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 44
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 44) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 45
                    echo "              
              <option value=\"";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 46);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 46);
                    echo "</option>
              
              ";
                } else {
                    // line 49
                    echo "              
              <option value=\"";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 50);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 50);
                    echo "</option>
              
              ";
                }
                // line 53
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 60
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 64
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 64) == ($context["limit"] ?? null))) {
                    // line 65
                    echo "              
              <option value=\"";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 66);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 66);
                    echo "</option>
              
              ";
                } else {
                    // line 69
                    echo "              
              <option value=\"";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 70);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 70);
                    echo "</option>
              
              ";
                }
                // line 73
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 82);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 85);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
                echo "</a></h4>
                <p>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 86);
                echo "</p>
                ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                        echo "
                  ";
                    } else {
                        // line 90
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        echo "</span> ";
                    }
                    // line 91
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 91)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 91);
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 93
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "                <div class=\"rating\">
                  ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 96
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 96) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 97
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 98
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 100);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 100);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 101
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 102
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 109
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 110
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 113
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 115
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 118
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 119
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 121
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "drmyts/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 121,  401 => 119,  396 => 118,  388 => 115,  382 => 113,  376 => 110,  372 => 109,  368 => 107,  354 => 102,  348 => 101,  340 => 100,  336 => 98,  327 => 97,  320 => 96,  316 => 95,  313 => 94,  310 => 93,  298 => 91,  291 => 90,  285 => 89,  282 => 88,  280 => 87,  276 => 86,  270 => 85,  258 => 82,  254 => 80,  250 => 79,  243 => 74,  237 => 73,  229 => 70,  226 => 69,  218 => 66,  215 => 65,  212 => 64,  208 => 63,  202 => 60,  194 => 54,  188 => 53,  180 => 50,  177 => 49,  169 => 46,  166 => 45,  163 => 44,  159 => 43,  153 => 40,  144 => 36,  137 => 32,  133 => 31,  128 => 28,  125 => 27,  120 => 24,  114 => 23,  111 => 22,  101 => 20,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if thumb or description %}
      <div class=\"row\"> {% if thumb %}
        <div class=\"col-sm-2\"><img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"img-thumbnail\" /></div>
        {% endif %}
        {% if description %}
        <div class=\"col-sm-10\">{{ description }}</div>
        {% endif %}</div>
      <hr>
\t  {% endif %}
      {% if products %}
      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"> <a href=\"{{ compare }}\" id=\"compare-total\" class=\"btn btn-link\">{{ text_compare }}</a> </div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">{{ text_sort }}</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              {% for sorts in sorts %}
              {% if sorts.value == '%s-%s'|format(sort, order) %}
              
              <option value=\"{{ sorts.href }}\" selected=\"selected\">{{ sorts.text }}</option>
              
              {% else %}
              
              <option value=\"{{ sorts.href }}\">{{ sorts.text }}</option>
              
              {% endif %}
              {% endfor %}
            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">{{ text_limit }}</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              {% for limits in limits %}
              {% if limits.value == limit %}
              
              <option value=\"{{ limits.href }}\" selected=\"selected\">{{ limits.text }}</option>
              
              {% else %}
              
              <option value=\"{{ limits.href }}\">{{ limits.text }}</option>
              
              {% endif %}
              {% endfor %}
            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> {% for product in products %}
        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"{{ product.href }}\">{{ product.name }}</a></h4>
                <p>{{ product.description }}</p>
                {% if product.price %}
                <p class=\"price\"> {% if not product.special %}
                  {{ product.price }}
                  {% else %} <span class=\"price-new\">{{ product.special }}</span> <span class=\"price-old\">{{ product.price }}</span> {% endif %}
                  {% if product.tax %} <span class=\"price-tax\">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>
                {% endif %}
                {% if product.rating %}
                <div class=\"rating\">
                  {% for i in 1..5 %}
                  {% if product.rating < i %} <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> {% else %} <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> {% endif %}
                  {% endfor %} </div>
                {% endif %} </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}', '{{ product.minimum }}');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ button_cart }}</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_wishlist }}\" onclick=\"wishlist.add('{{ product.product_id }}');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_compare }}\" onclick=\"compare.add('{{ product.product_id }}');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        {% endfor %} </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
        <div class=\"col-sm-6 text-right\">{{ results }}</div>
      </div>
      {% else %}
      <p>{{ text_empty }}</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "drmyts/template/product/manufacturer_info.twig", "");
    }
}
