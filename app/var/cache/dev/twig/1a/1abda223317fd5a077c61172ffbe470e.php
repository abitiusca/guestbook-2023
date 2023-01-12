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

/* guestbook/index.html.twig */
class __TwigTemplate_2590de5d148a25dd66f62cb07e176628 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guestbook/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guestbook/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guestbook index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Guestbook index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Index</th>
                <th>Guest review message</th>
                <th>Guest review image</th>
                <th>CreatedAt</th>
                ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                    <th>UpdatedAt</th>
                    <th>UserId</th>
                    <th>IsDeleted</th>
                    <th>IsActive</th>
                    <th>actions</th>
                ";
        }
        // line 22
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guestbooks"]) || array_key_exists("guestbooks", $context) ? $context["guestbooks"] : (function () { throw new RuntimeError('Variable "guestbooks" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["guestbook"]) {
            // line 26
            echo "            <tr>
                <td class=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guestbook"], "text", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td class=\"center\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["guestbook"], "image", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    <image width=\"200\" src=\"/images/guestbook/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guestbook"], "image", [], "any", false, false, false, 31), "html", null, true);
                echo "\" />
                    ";
            } else {
                // line 33
                echo "                        - No image -
                    ";
            }
            // line 35
            echo "                </td>
                <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["guestbook"], "createdAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guestbook"], "createdAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                    ";
                $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["guestbook"], "isActive", [], "any", false, false, false, 38)) ? ("0") : ("1"));
                // line 39
                echo "                    ";
                $context["approve"] = ((twig_get_attribute($this->env, $this->source, $context["guestbook"], "isActive", [], "any", false, false, false, 39)) ? ("unapprove") : ("approve"));
                // line 40
                echo "                    <td>";
                ((twig_get_attribute($this->env, $this->source, $context["guestbook"], "updatedAt", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guestbook"], "updatedAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["guestbook"], "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                    <td class=\"center\">";
                // line 42
                echo ((twig_get_attribute($this->env, $this->source, $context["guestbook"], "isDeleted", [], "any", false, false, false, 42)) ? ("Yes") : ("No"));
                echo "</td>
                    <td class=\"center\">";
                // line 43
                echo ((twig_get_attribute($this->env, $this->source, $context["guestbook"], "isActive", [], "any", false, false, false, 43)) ? ("Yes") : ("No"));
                echo "</td>
                    <td>
                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guestbook_approve", ["id" => twig_get_attribute($this->env, $this->source, $context["guestbook"], "id", [], "any", false, false, false, 45), "active" => (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 45, $this->source); })())]), "html", null, true);
                echo "\">
                            ";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["approve"]) || array_key_exists("approve", $context) ? $context["approve"] : (function () { throw new RuntimeError('Variable "approve" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "
                        </a> |
                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guestbook_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["guestbook"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">edit</a> |
                        <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guestbook_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["guestbook"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">delete</a>
                    </td>
                ";
            }
            // line 52
            echo "            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guestbook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
    <br>
    ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 62
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guestbook_new");
            echo "\">Create new</a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "guestbook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 62,  221 => 61,  216 => 58,  207 => 54,  193 => 52,  187 => 49,  183 => 48,  178 => 46,  174 => 45,  169 => 43,  165 => 42,  161 => 41,  156 => 40,  153 => 39,  150 => 38,  148 => 37,  144 => 36,  141 => 35,  137 => 33,  131 => 31,  129 => 30,  124 => 28,  120 => 27,  117 => 26,  99 => 25,  94 => 22,  86 => 16,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Guestbook index{% endblock %}

{% block body %}
    <h1>Guestbook index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Index</th>
                <th>Guest review message</th>
                <th>Guest review image</th>
                <th>CreatedAt</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>UpdatedAt</th>
                    <th>UserId</th>
                    <th>IsDeleted</th>
                    <th>IsActive</th>
                    <th>actions</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for guestbook in guestbooks %}
            <tr>
                <td class=\"center\">{{ loop.index }}</td>
                <td>{{ guestbook.text }}</td>
                <td class=\"center\">
                    {% if guestbook.image %}
                    <image width=\"200\" src=\"/images/guestbook/{{ guestbook.image }}\" />
                    {% else %}
                        - No image -
                    {% endif %}
                </td>
                <td>{{ guestbook.createdAt ? guestbook.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                {% if is_granted('ROLE_ADMIN') %}
                    {% set active = guestbook.isActive ? '0' : '1' %}
                    {% set approve = guestbook.isActive ? 'unapprove' : 'approve' %}
                    <td>{{ guestbook.updatedAt ? guestbook.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ guestbook.user.email }}</td>
                    <td class=\"center\">{{ guestbook.isDeleted ? 'Yes' : 'No' }}</td>
                    <td class=\"center\">{{ guestbook.isActive ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href=\"{{ path('app_guestbook_approve', {'id': guestbook.id, 'active': active}) }}\">
                            {{ approve }}
                        </a> |
                        <a href=\"{{ path('app_guestbook_edit', {'id': guestbook.id}) }}\">edit</a> |
                        <a href=\"{{ path('app_guestbook_delete', {'id': guestbook.id}) }}\">delete</a>
                    </td>
                {% endif %}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br>
    {% if is_granted('ROLE_USER') %}
    <a href=\"{{ path('app_guestbook_new') }}\">Create new</a>
    {% endif %}
{% endblock %}
", "guestbook/index.html.twig", "/var/www/project/templates/guestbook/index.html.twig");
    }
}
