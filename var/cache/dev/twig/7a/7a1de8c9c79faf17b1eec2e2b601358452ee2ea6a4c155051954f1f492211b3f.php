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

/* inc/navbar.html.twig */
class __TwigTemplate_55a77b053cd023fcda0a08eb0a8192294e6db582b9c624d8ba8aaf19f8720b06 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">

    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">SymphArt</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a href=\"/\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/article/new\" class=\"nav-link\">New Article</a>
                </li>
            </ul>
        </div>
    </div>

</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">

    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">SymphArt</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a href=\"/\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/article/new\" class=\"nav-link\">New Article</a>
                </li>
            </ul>
        </div>
    </div>

</nav>", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\symphart\\templates\\inc\\navbar.html.twig");
    }
}
