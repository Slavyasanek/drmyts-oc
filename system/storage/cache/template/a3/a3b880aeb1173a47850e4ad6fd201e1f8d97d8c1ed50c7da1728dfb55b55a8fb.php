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

/* catalog/review_list.twig */
class __TwigTemplate_ff980666c1a1754365d13294255ebe2063243acd6f39a56fd3f2458979ece3aa extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 8
        echo ($context["enabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_enable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 9
        echo ($context["disabled"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_disable"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 34
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div  class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 38
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 39
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">";
        // line 42
        echo ($context["entry_author"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_author\" value=\"";
        // line 43
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        // line 58
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 59
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"1\" selected=\"selected\">";
            // line 68
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        } else {
            // line 79
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"1\">";
            // line 88
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        }
        // line 99
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 100
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"0\" selected=\"selected\">";
            // line 109
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        } else {
            // line 120
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"0\">";
            // line 129
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                  ";
        }
        // line 132
        echo "                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 136
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 138
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 144
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 152
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 155
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 161
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 162
        if ((($context["sort"] ?? null) == "r.author")) {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 163
        if ((($context["sort"] ?? null) == "r.rating")) {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 164
        if ((($context["sort"] ?? null) == "r.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 165
        if ((($context["sort"] ?? null) == "r.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 166
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 171
        if (($context["reviews"] ?? null)) {
            // line 172
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 173
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 174
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 174), ($context["selected"] ?? null))) {
                    // line 175
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 175);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 177
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 177);
                    echo "\" />
                      ";
                }
                // line 178
                echo "</td>
                    <td class=\"text-left\">";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 179);
                echo "</td>
                    <td class=\"text-left\">";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 180);
                echo "</td>
                    <td class=\"text-right\">";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 181);
                echo "</td>
                    <td class=\"text-left\">";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 182);
                echo "</td>
                    <td class=\"text-left\">";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 183);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 184);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                  ";
        } else {
            // line 188
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 189
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 192
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 198
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 199
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/review&user_token=";
        // line 208
        echo ($context["user_token"] ?? null);
        echo "';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 239
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 243
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 243,  544 => 239,  510 => 208,  498 => 199,  494 => 198,  486 => 192,  480 => 189,  477 => 188,  474 => 187,  463 => 184,  459 => 183,  455 => 182,  451 => 181,  447 => 180,  443 => 179,  440 => 178,  434 => 177,  428 => 175,  426 => 174,  423 => 173,  418 => 172,  416 => 171,  408 => 166,  390 => 165,  372 => 164,  354 => 163,  336 => 162,  318 => 161,  309 => 155,  303 => 152,  292 => 144,  281 => 138,  276 => 136,  270 => 132,  264 => 129,  253 => 120,  239 => 109,  228 => 100,  225 => 99,  211 => 88,  200 => 79,  186 => 68,  175 => 59,  173 => 58,  158 => 46,  150 => 43,  146 => 42,  138 => 39,  134 => 38,  127 => 34,  121 => 30,  113 => 26,  110 => 25,  102 => 21,  100 => 20,  95 => 17,  84 => 15,  80 => 14,  75 => 12,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-review\" formaction=\"{{ enabled }}\" data-toggle=\"tooltip\" title=\"{{ button_enable }}\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-review\" formaction=\"{{ disabled }}\" data-toggle=\"tooltip\" title=\"{{ button_disable }}\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"confirm('{{ text_confirm }}') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">{% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> {{ text_filter }}</h3>
          </div>
          <div  class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">{{ entry_product }}</label>
              <input type=\"text\" name=\"filter_product\" value=\"{{ filter_product }}\" placeholder=\"{{ entry_product }}\" id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">{{ entry_author }}</label>
              <input type=\"text\" name=\"filter_author\" value=\"{{ filter_author }}\" placeholder=\"{{ entry_author }}\" id=\"input-author\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">{{ entry_status }}</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
              
              
          
          
                  
                  
                  
                  {% if filter_status == '1' %}
                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                
                  
              
              
          
          
                  
                  
                  
                  {% else %}
                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"1\">{{ text_enabled }}</option>
                
                  
              
              
          
          
                  
                  
                  
                  {% endif %}
                  {% if filter_status == '0' %}
                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
                
                  
              
              
          
          
                  
                  
                  
                  {% else %}
                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"0\">{{ text_disabled }}</option>
                
                  {% endif %}
                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">{{ entry_date_added }}</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"{{ filter_date_added }}\" placeholder=\"{{ entry_date_added }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> {{ button_filter }}</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> {{ text_list }}</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"{{ delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">{% if sort == 'pd.name' %} <a href=\"{{ sort_product }}\" class=\"{{ order|lower }}\">{{ column_product }}</a> {% else %} <a href=\"{{ sort_product }}\">{{ column_product }}</a> {% endif %}</td>
                      <td class=\"text-left\">{% if sort == 'r.author' %} <a href=\"{{ sort_author }}\" class=\"{{ order|lower }}\">{{ column_author }}</a> {% else %} <a href=\"{{ sort_author }}\">{{ column_author }}</a> {% endif %}</td>
                      <td class=\"text-right\">{% if sort == 'r.rating' %} <a href=\"{{ sort_rating }}\" class=\"{{ order|lower }}\">{{ column_rating }}</a> {% else %} <a href=\"{{ sort_rating }}\">{{ column_rating }}</a> {% endif %}</td>
                      <td class=\"text-left\">{% if sort == 'r.status' %} <a href=\"{{ sort_status }}\" class=\"{{ order|lower }}\">{{ column_status }}</a> {% else %} <a href=\"{{ sort_status }}\">{{ column_status }}</a> {% endif %}</td>
                      <td class=\"text-left\">{% if sort == 'r.date_added' %} <a href=\"{{ sort_date_added }}\" class=\"{{ order|lower }}\">{{ column_date_added }}</a> {% else %} <a href=\"{{ sort_date_added }}\">{{ column_date_added }}</a> {% endif %}</td>
                      <td class=\"text-right\">{{ column_action }}</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  {% if reviews %}
                  {% for review in reviews %}
                  <tr>
                    <td class=\"text-center\">{% if review.review_id in selected %}
                      <input type=\"checkbox\" name=\"selected[]\" value=\"{{ review.review_id }}\" checked=\"checked\" />
                      {% else %}
                      <input type=\"checkbox\" name=\"selected[]\" value=\"{{ review.review_id }}\" />
                      {% endif %}</td>
                    <td class=\"text-left\">{{ review.name }}</td>
                    <td class=\"text-left\">{{ review.author }}</td>
                    <td class=\"text-right\">{{ review.rating }}</td>
                    <td class=\"text-left\">{{ review.status }}</td>
                    <td class=\"text-left\">{{ review.date_added }}</td>
                    <td class=\"text-right\"><a href=\"{{ review.edit }}\" data-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  {% endfor %}
                  {% else %}
                  <tr>
                    <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
                  </tr>
                  {% endif %}
                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
              <div class=\"col-sm-6 text-right\">{{ results }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/review&user_token={{ user_token }}';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickTime: false
});
//--></script></div>
{{ footer }}", "catalog/review_list.twig", "");
    }
}
