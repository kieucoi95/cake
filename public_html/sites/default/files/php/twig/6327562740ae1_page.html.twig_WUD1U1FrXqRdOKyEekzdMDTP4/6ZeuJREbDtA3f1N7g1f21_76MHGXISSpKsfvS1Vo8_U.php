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

/* page.html.twig */
class __TwigTemplate_4b33fa9bab78e2f0122b8364293654e0659a6b2af81f2dee410be3e87cf45b18 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"layout-container\">
    <header id=\"header\" >
        ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "page.html.twig", 3)->display($context);
        // line 4
        echo "    </header>
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9 col-12\">
                ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "            </div>
            <div class=\"col-md-3 col-12\">
                <div class=\"sidebar_content mt-3\">
                    <div class=\"block_content menu_product\">
                        <div class=\"block_header\">
                            <h2 class=\"block_title\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Chuyên mục sản phẩm"));
        echo "</h2>
                        </div>
                        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("category"), "html", null, true);
        echo "
                    </div>
                    
                    <div class=\"block_content menu_product mt-3\">
                        <div class=\"block_header\">
                            <h2 class=\"block_title\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sản phẩm bán chạy"));
        echo "</h2>
                        </div>
                        ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("product", "block_4"), "html", null, true);
        echo "
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <footer role=\"contentinfo\">
        ";
        // line 38
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "page.html.twig", 38)->display($context);
        // line 39
        echo "    </footer>
</div>";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <div id=\"main\">
                    ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 11,  104 => 10,  100 => 9,  95 => 39,  93 => 38,  80 => 28,  75 => 26,  67 => 21,  62 => 19,  55 => 14,  53 => 9,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "themes/cake/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "block" => 9);
        static $filters = array("t" => 19, "escape" => 21);
        static $functions = array("drupal_menu" => 21, "drupal_view" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'block'],
                ['t', 'escape'],
                ['drupal_menu', 'drupal_view']
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
