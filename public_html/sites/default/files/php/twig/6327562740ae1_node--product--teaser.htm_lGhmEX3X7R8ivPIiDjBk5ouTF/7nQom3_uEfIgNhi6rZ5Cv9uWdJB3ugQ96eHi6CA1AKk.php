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

/* themes/cake/templates/node/node--product--teaser.html.twig */
class __TwigTemplate_006cddea322257d56e81c26ae8dd616acc1363ab53a3bdb14ddaef0e1a049687 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cake/product_teaser"), "html", null, true);
        echo "
    ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cake/rating"), "html", null, true);
        echo "
    <div";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 75, $this->source), "html", null, true);
        echo ">
        ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 76, $this->source), "html", null, true);
        echo "
        ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 77, $this->source), "html", null, true);
        echo "

        <div class=\"product_teaser\">
            <a href=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 80)]), "html", null, true);
        echo "\">
                ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_discount", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81) > 0)) {
            // line 82
            echo "                <div class=\"discount\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_discount", [], "any", false, false, true, 82), "value", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "%<span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Giảm"));
            echo "</span></div>
                ";
        }
        // line 84
        echo "                <img src=\"https://cf.shopee.vn/file/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_avatar", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" width=\"200\" height=\"200\">
            </a>
            <div class=\"inner\">
                <a href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 87)]), "html", null, true);
        echo "\"><h3 class=\"title\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "</h3></a>
                <div class=\"price\">
                    <div class=\"price-raw\"><span class=\"currncy\">₫</span>";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_price", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89) / 100000), 0, ".", ","), "html", null, true);
        echo "</div>
                    ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_price_before_discount", [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90) > 0)) {
            // line 91
            echo "                    <div class=\"price-before\"><span class=\"currncy\">₫</span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_price_before_discount", [], "any", false, false, true, 91), "value", [], "any", false, false, true, 91) / 100000), 0, ".", ","), "html", null, true);
            echo "</div>
                    ";
        }
        // line 93
        echo "                </div>
                <div class=\"like-rate\">
                    <div class=\"like\">
                        <i class=\"fad fa-heart-circle\"></i>
                        ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_liked_count", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97) > 1000)) {
            // line 98
            echo "                        <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_liked_count", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98) / 1000), 1, ".", ","), "html", null, true);
            echo "k</span>
                        ";
        } else {
            // line 100
            echo "                        <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_liked_count", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "</span>
                        ";
        }
        // line 102
        echo "                    </div>
                    <div class=\"rating\">
                        <div class=\"rate\" data-rating=\"";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_round($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_rating_star", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104), 104, $this->source), 1, "floor"), "html", null, true);
        echo "\"></div>
                    </div>
                </div>
                <div class=\"location-sold\">
                    <div class=\"location\">";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_shop_location", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "</div>
                    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_historical_sold", [], "any", false, false, true, 109), "value", [], "any", false, false, true, 109) > 1000)) {
            // line 110
            echo "                    <div class=\"sold\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Đã bán"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_historical_sold", [], "any", false, false, true, 110), "value", [], "any", false, false, true, 110) / 1000), 1, ".", ","), "html", null, true);
            echo "k</div>
                    ";
        } else {
            // line 112
            echo "                    <div class=\"sold\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Đã bán"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_historical_sold", [], "any", false, false, true, 112), "value", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "</div>
                    ";
        }
        // line 114
        echo "                </div>
            </div>
            <div class=\"buy-now\"><a href=\"https://shopee.vn/mua-sach-nhanh-i.";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_id", [], "any", false, false, true, 116), "value", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "?";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["shopee_affiliate"] ?? null), 116, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mua ngay"));
        echo "</a></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/cake/templates/node/node--product--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 116,  161 => 114,  153 => 112,  145 => 110,  143 => 109,  139 => 108,  132 => 104,  128 => 102,  122 => 100,  116 => 98,  114 => 97,  108 => 93,  102 => 91,  100 => 90,  96 => 89,  87 => 87,  76 => 84,  68 => 82,  66 => 81,  62 => 80,  56 => 77,  52 => 76,  48 => 75,  44 => 74,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/cake/templates/node/node--product--teaser.html.twig", "C:\\xampp\\htdocs\\cake\\web\\themes\\cake\\templates\\node\\node--product--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 81);
        static $filters = array("escape" => 73, "t" => 82, "number_format" => 89, "round" => 104);
        static $functions = array("attach_library" => 73, "path" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'number_format', 'round'],
                ['attach_library', 'path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
