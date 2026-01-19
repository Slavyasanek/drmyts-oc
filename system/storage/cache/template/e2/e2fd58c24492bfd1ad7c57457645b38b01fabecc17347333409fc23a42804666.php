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

/* drmyts/template/blog/article.twig */
class __TwigTemplate_60e202d35c73c3917288a21c26e5fa27517e1b0d7f0c70ace2257c9e7ba0e5b0 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
      <div class=\"row\"> ";
        // line 17
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 23
            echo "          <ul class=\"thumbnails\">
            ";
            // line 24
            if (($context["thumb"] ?? null)) {
                // line 25
                echo "            <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></li>
            ";
            }
            // line 27
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 28
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 29);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 29);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            // line 32
            echo "          </ul>
          ";
        }
        // line 34
        echo "         
          <div class=\"content\">
\t\t   <h1>";
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 37
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t";
        // line 38
        if (($context["review_status"] ?? null)) {
            // line 39
            echo "          <div class=\"rating\">
            <p>";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 41
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 42
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t  <a href=\"\" onclick=\"gotoReview(); return false;\">";
            // line 43
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"gotoReviewWrite(); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 46
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 51
        echo "\t\t  
\t\t  ";
        // line 52
        if (($context["download_status"] ?? null)) {
            // line 53
            echo "\t\t\t<div class=\"blog-info\">
\t\t\t";
            // line 54
            if (($context["downloads"] ?? null)) {
                // line 55
                echo "\t\t\t<br />
\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                    // line 57
                    echo "\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "href", [], "any", false, false, false, 57);
                    echo "\" title=\"\"><i class=\"fa fa-floppy-o\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 57);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "size", [], "any", false, false, false, 57);
                    echo "</a><br>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t<br />
\t\t\t";
            }
            // line 60
            echo " 
\t\t\t</div>
\t\t  ";
        }
        // line 62
        echo " 
            
            
      ";
        // line 65
        if (($context["products"] ?? null)) {
            // line 66
            echo "      <h3>";
            echo ($context["text_related_product"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 67
            $context["i"] = 0;
            // line 68
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 70
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 71
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 72
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 73
                    echo "        ";
                } else {
                    // line 74
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 75
                    echo "        ";
                }
                // line 76
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 78);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "</a></h4>
              <p>";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 81);
                echo "</p>
              ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 84
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 84) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 85
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 87
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "                ";
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
                    echo "                ";
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
                // line 92
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 94);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 94);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 95
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "article_id", [], "any", false, false, false, 95);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 96
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "article_id", [], "any", false, false, false, 96);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 100
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 101
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 102
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 103
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 104
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 105
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 107
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 108
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 110
        echo "\t\t
\t\t";
        // line 111
        if (($context["articles"] ?? null)) {
            // line 112
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 113
            $context["i"] = 0;
            // line 114
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 115
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 116
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 117
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 118
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 119
                    echo "        ";
                } else {
                    // line 120
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 121
                    echo "        ";
                }
                // line 122
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 124);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 124);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 124);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 124);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 126);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 126);
                echo "</a></h4>
              <p>";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 127);
                echo "</p>
              ";
                // line 128
                if (twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 130
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 130) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 131
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 133
                echo "              </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"location.href = ('";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 135);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_more"] ?? null);
                echo "</span> <i class=\"fa fa-share\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 136);
                echo "\" \"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 137
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 137);
                echo "\" \"><i class=\"fa fa-eye\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 141
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 142
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 143
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 144
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 145
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 146
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 148
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 149
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 151
        echo "\t\t
\t\t";
        // line 152
        if (($context["review_status"] ?? null)) {
            // line 153
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 156
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 157
            if (($context["review_guest"] ?? null)) {
                // line 158
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 160
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 161
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 166
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 168
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 173
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 174
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 184
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 186
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 189
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 193
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 195
            echo "              </form>
            </div>
            ";
        }
        // line 197
        echo "</div>
        </div>
      
      </div>
        
      ";
        // line 202
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 203
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 261
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 266
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 272
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=blog/article/review&article_id=";
        // line 339
        echo ($context["article_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=blog/article/write&article_id=";
        // line 343
        echo ($context["article_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
  \$('#description').find('a>img').each(function(){
    \$(this).parent().addClass('gallery');
  });
  \$('#description').magnificPopup({
    delegate: 'a.gallery',
    type: 'image',
    gallery: {
        enabled: true
    }
  });

  gotoReview = function() {
    offset = \$('#form-review').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  gotoReviewWrite = function() {
    offset = \$('#form-review h2').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  
});
--></script>
";
        // line 405
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "drmyts/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  892 => 405,  827 => 343,  820 => 339,  750 => 272,  741 => 266,  733 => 261,  672 => 203,  668 => 202,  661 => 197,  656 => 195,  650 => 193,  641 => 189,  635 => 186,  630 => 184,  617 => 174,  613 => 173,  605 => 168,  600 => 166,  592 => 161,  588 => 160,  584 => 158,  582 => 157,  578 => 156,  573 => 153,  571 => 152,  568 => 151,  559 => 149,  556 => 148,  552 => 146,  550 => 145,  547 => 144,  545 => 143,  542 => 142,  540 => 141,  531 => 137,  527 => 136,  521 => 135,  517 => 133,  508 => 131,  501 => 130,  496 => 129,  494 => 128,  490 => 127,  484 => 126,  473 => 124,  467 => 122,  464 => 121,  461 => 120,  458 => 119,  455 => 118,  452 => 117,  449 => 116,  446 => 115,  441 => 114,  439 => 113,  434 => 112,  432 => 111,  429 => 110,  420 => 108,  417 => 107,  413 => 105,  411 => 104,  408 => 103,  406 => 102,  403 => 101,  401 => 100,  392 => 96,  386 => 95,  378 => 94,  374 => 92,  362 => 91,  355 => 90,  349 => 89,  346 => 88,  343 => 87,  334 => 85,  327 => 84,  322 => 83,  320 => 82,  316 => 81,  310 => 80,  299 => 78,  293 => 76,  290 => 75,  287 => 74,  284 => 73,  281 => 72,  278 => 71,  275 => 70,  272 => 69,  267 => 68,  265 => 67,  260 => 66,  258 => 65,  253 => 62,  248 => 60,  244 => 59,  231 => 57,  227 => 56,  224 => 55,  222 => 54,  219 => 53,  217 => 52,  214 => 51,  206 => 46,  198 => 43,  190 => 42,  183 => 41,  179 => 40,  176 => 39,  174 => 38,  170 => 37,  166 => 36,  162 => 34,  158 => 32,  155 => 31,  138 => 29,  133 => 28,  130 => 27,  116 => 25,  114 => 24,  111 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"product-product\" class=\"container\">
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
      <div class=\"row\"> {% if column_left or column_right %}
        {% set class = 'col-sm-12' %}
        {% else %}
        {% set class = 'col-sm-12' %}
        {% endif %}
        <div class=\"{{ class }}\"> {% if thumb or images %}
          <ul class=\"thumbnails\">
            {% if thumb %}
            <li><a class=\"thumbnail\" href=\"{{ popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" /></a></li>
            {% endif %}
            {% if images %}
            {% for image in images %}
            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"{{ image.popup }}\" title=\"{{ heading_title }}\"> <img src=\"{{ image.thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" /></a></li>
            {% endfor %}
            {% endif %}
          </ul>
          {% endif %}
         
          <div class=\"content\">
\t\t   <h1>{{ heading_title }}</h1>
            <div class=\"tab-pane active\" id=\"tab-description\">{{ description }}</div>
\t\t\t{% if review_status %}
          <div class=\"rating\">
            <p>{% for i in 1..5 %}
              {% if rating < i %}<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>{% else %}<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>{% endif %}
              {% endfor %} 
\t\t\t  <a href=\"\" onclick=\"gotoReview(); return false;\">{{ reviews }}</a> / <a href=\"\" onclick=\"gotoReviewWrite(); return false;\">{{ text_write }}</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"{{ share }}\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          {% endif %}
\t\t  
\t\t  {% if download_status %}
\t\t\t<div class=\"blog-info\">
\t\t\t{% if downloads %}
\t\t\t<br />
\t\t\t{% for download in downloads %}
\t\t\t<a href=\"{{ download.href }}\" title=\"\"><i class=\"fa fa-floppy-o\"></i> {{ download.name }} {{ download.size }}</a><br>
\t\t\t{% endfor %}
\t\t\t<br />
\t\t\t{% endif %} 
\t\t\t</div>
\t\t  {% endif %} 
            
            
      {% if products %}
      <h3>{{ text_related_product }}</h3>
      <div class=\"row\"> {% set i = 0 %}
        {% for product in products %}
        {% if column_left and column_right %}
        {% set class = 'col-xs-8 col-sm-6' %}
        {% elseif column_left or column_right %}
        {% set class = 'col-xs-6 col-md-4' %}
        {% else %}
        {% set class = 'col-xs-6 col-sm-3' %}
        {% endif %}
        <div class=\"{{ class }}\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"{{ product.href }}\">{{ product.name }}</a></h4>
              <p>{{ product.description }}</p>
              {% if product.rating %}
              <div class=\"rating\"> {% for j in 1..5 %}
                {% if product.rating < j %} <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> {% else %} <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> {% endif %}
                {% endfor %} </div>
              {% endif %}
              {% if product.price %}
              <p class=\"price\"> {% if not product.special %}
                {{ product.price }}
                {% else %} <span class=\"price-new\">{{ product.special }}</span> <span class=\"price-old\">{{ product.price }}</span> {% endif %}
                {% if product.tax %} <span class=\"price-tax\">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>
              {% endif %} </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}', '{{ product.minimum }}');\"><span class=\"hidden-xs hidden-sm hidden-md\">{{ button_cart }}</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_wishlist }}\" onclick=\"wishlist.add('{{ product.article_id }}');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_compare }}\" onclick=\"compare.add('{{ product.article_id }}');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        {% if column_left and column_right and (i + 1) % 2 == 0 %}
        <div class=\"clearfix visible-md visible-sm\"></div>
        {% elseif column_left or column_right and (i + 1) % 3 == 0 %}
        <div class=\"clearfix visible-md\"></div>
        {% elseif (i + 1) % 4 == 0 %}
        <div class=\"clearfix visible-md\"></div>
        {% endif %}
        {% set i = i + 1 %}
        {% endfor %} </div>
        {% endif %}
\t\t
\t\t{% if articles %}
      <h3>{{ text_related }}</h3>
      <div class=\"row\"> {% set i = 0 %}
        {% for article in articles %}
        {% if column_left and column_right %}
        {% set class = 'col-xs-8 col-sm-6' %}
        {% elseif column_left or column_right %}
        {% set class = 'col-xs-6 col-md-4' %}
        {% else %}
        {% set class = 'col-xs-6 col-sm-3' %}
        {% endif %}
        <div class=\"{{ class }}\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"{{ article.href }}\"><img src=\"{{ article.thumb }}\" alt=\"{{ article.name }}\" title=\"{{ article.name }}\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"{{ article.href }}\">{{ article.name }}</a></h4>
              <p>{{ article.description }}</p>
              {% if article.rating %}
              <div class=\"rating\"> {% for j in 1..5 %}
                {% if article.rating < j %} <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> {% else %} <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> {% endif %}
                {% endfor %} </div>
              {% endif %}
              </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"location.href = ('{{ article.href }}');\"><span class=\"hidden-xs hidden-sm hidden-md\">{{ button_more }}</span> <i class=\"fa fa-share\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ article.date_added }}\" \"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t  <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ text_views }} {{ article.viewed }}\" \"><i class=\"fa fa-eye\"></i></button>
            </div>
          </div>
        </div>
        {% if column_left and column_right and (i + 1) % 2 == 0 %}
        <div class=\"clearfix visible-md visible-sm\"></div>
        {% elseif column_left or column_right and (i + 1) % 3 == 0 %}
        <div class=\"clearfix visible-md\"></div>
        {% elseif (i + 1) % 4 == 0 %}
        <div class=\"clearfix visible-md\"></div>
        {% endif %}
        {% set i = i + 1 %}
        {% endfor %} </div>
        {% endif %}
\t\t
\t\t{% if review_status %}
            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>{{ text_write }}</h2>
                {% if review_guest %}
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">{{ entry_name }}</label>
                    <input type=\"text\" name=\"name\" value=\"{{ customer_name }}\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">{{ entry_review }}</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">{{ text_note }}</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">{{ entry_rating }}</label>
                    &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;{{ entry_good }}</div>
                </div>
                {{ captcha }}
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\">{{ button_continue }}</button>
                  </div>
                </div>
                {% else %}
                {{ text_login }}
                {% endif %}
              </form>
            </div>
            {% endif %}</div>
        </div>
      
      </div>
        
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=blog/article/review&article_id={{ article_id }}');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=blog/article/write&article_id={{ article_id }}',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
  \$('#description').find('a>img').each(function(){
    \$(this).parent().addClass('gallery');
  });
  \$('#description').magnificPopup({
    delegate: 'a.gallery',
    type: 'image',
    gallery: {
        enabled: true
    }
  });

  gotoReview = function() {
    offset = \$('#form-review').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  gotoReviewWrite = function() {
    offset = \$('#form-review h2').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  
});
--></script>
{{ footer }} 
", "drmyts/template/blog/article.twig", "");
    }
}
