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

/* themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-search.html.twig */
class __TwigTemplate_0fbf78a945611549a9946debf6ec8497b167f5459c8bd8c5b2b815e4b60be6f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 40
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 40), 40, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 41
($context["plugin_id"] ?? null), 41, $this->source))), 3 => "search-block", 4 => "has-dropdown"];
        // line 46
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">
  ";
        // line 47
        if (($context["label"] ?? null)) {
            // line 48
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 48, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 50
        echo "  <a href=\"#\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
        echo "\">
    <span class=\"shop-icon fa fa-search\"></span>
  </a>
  <div class=\"block-content header-dropdown search-block-form\">
    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "  </div>
</div>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 55, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 55,  75 => 54,  69 => 57,  67 => 54,  59 => 50,  51 => 48,  49 => 47,  44 => 46,  42 => 41,  41 => 40,  40 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-search.html.twig", "C:\\xampp\\htdocs\\Arigatea\\themes\\sshop\\templates\\block\\nav_collapsible\\block--navigation-collapsible--sshop-search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 38, "if" => 47, "block" => 54);
        static $filters = array("clean_class" => 40, "escape" => 46, "t" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
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
