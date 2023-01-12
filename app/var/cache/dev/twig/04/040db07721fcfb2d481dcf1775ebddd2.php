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

/* guestbook/show.html.twig */
class __TwigTemplate_5cb721e0789480feed0f5f29d737a998 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guestbook/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guestbook/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guestbook";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Guestbook</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "                <tr>
                    <th>Image</th>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>UserId</th>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 25, $this->source); })()), "userId", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>CreatedAt</th>
                    <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 29, $this->source); })()), "createdAt", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 29, $this->source); })()), "createdAt", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                </tr>
                <tr>
                    <th>UpdatedAt</th>
                    <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 33, $this->source); })()), "updatedAt", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 33, $this->source); })()), "updatedAt", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                </tr>
                <tr>
                    <th>IsDeleted</th>
                    <td>";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 37, $this->source); })()), "isDeleted", [], "any", false, false, false, 37)) ? ("Yes") : ("No"));
            echo "</td>
                </tr>
                <tr>
                    <th>IsActive</th>
                    <td>";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 41, $this->source); })()), "isActive", [], "any", false, false, false, 41)) ? ("Yes") : ("No"));
            echo "</td>
                </tr>
            ";
        }
        // line 44
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guestbook_index");
        echo "\">back to list</a>

    ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guestbook_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guestbook"]) || array_key_exists("guestbook", $context) ? $context["guestbook"] : (function () { throw new RuntimeError('Variable "guestbook" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        echo twig_include($this->env, $context, "guestbook/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "guestbook/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 53,  158 => 52,  152 => 50,  150 => 49,  145 => 47,  140 => 44,  134 => 41,  127 => 37,  120 => 33,  113 => 29,  106 => 25,  99 => 21,  95 => 19,  93 => 18,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Guestbook{% endblock %}

{% block body %}
    <h1>Guestbook</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ guestbook.id }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ guestbook.text }}</td>
            </tr>
            {% if is_granted('ROLE_ADMIN') %}
                <tr>
                    <th>Image</th>
                    <td>{{ guestbook.image }}</td>
                </tr>
                <tr>
                    <th>UserId</th>
                    <td>{{ guestbook.userId }}</td>
                </tr>
                <tr>
                    <th>CreatedAt</th>
                    <td>{{ guestbook.createdAt ? guestbook.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
                <tr>
                    <th>UpdatedAt</th>
                    <td>{{ guestbook.updatedAt ? guestbook.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
                <tr>
                    <th>IsDeleted</th>
                    <td>{{ guestbook.isDeleted ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>IsActive</th>
                    <td>{{ guestbook.isActive ? 'Yes' : 'No' }}</td>
                </tr>
            {% endif %}
        </tbody>
    </table>

    <a href=\"{{ path('app_guestbook_index') }}\">back to list</a>

    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_guestbook_edit', {'id': guestbook.id}) }}\">edit</a>
    {% endif %}

    {{ include('guestbook/_delete_form.html.twig') }}
{% endblock %}
", "guestbook/show.html.twig", "/var/www/project/templates/guestbook/show.html.twig");
    }
}
