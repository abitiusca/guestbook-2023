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

/* header.html.twig */
class __TwigTemplate_bcdb85ef7d31023a5f489fc4509c23a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "header.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
<div class=\"header\">
    <div class=\"main_menu\">
        <h3>
            <a
                    class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                    href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"
                    @click=\"isOpen = false\">
                Home
            </a>
        </h3>
    </div>
    <div class=\"right_menu\">
        <h3>
            Hello ✅ ";
        // line 18
        ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true))) : (print ("")));
        echo " |
            <a
                    class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                    href=\"/";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) ? ("logout") : ("login"));
        echo "\"
                    @click=\"isOpen = false\">
                ";
        // line 23
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) ? ("logout") : ("login"));
        echo "</a> |
            <a
                    class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                    href=\"/register\"
                    @click=\"isOpen = false\">
                register
            </a>
            ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                | Role: admin
            ";
        }
        // line 33
        echo "        </h3>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  101 => 31,  99 => 30,  89 => 23,  84 => 21,  78 => 18,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}

<div class=\"header\">
    <div class=\"main_menu\">
        <h3>
            <a
                    class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                    href=\"{{ path('index') }}\"
                    @click=\"isOpen = false\">
                Home
            </a>
        </h3>
    </div>
    <div class=\"right_menu\">
        <h3>
            Hello ✅ {{ app.user ? app.user.email : '' }} |
            <a
                    class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                    href=\"/{{ app.user ? 'logout' : 'login' }}\"
                    @click=\"isOpen = false\">
                {{ app.user ? 'logout' : 'login' }}</a> |
            <a
                    class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\"
                    href=\"/register\"
                    @click=\"isOpen = false\">
                register
            </a>
            {% if is_granted('ROLE_ADMIN') %}
                | Role: admin
            {% endif %}
        </h3>
    </div>

</div>
{% endblock %}
", "header.html.twig", "/var/www/project/templates/header.html.twig");
    }
}
