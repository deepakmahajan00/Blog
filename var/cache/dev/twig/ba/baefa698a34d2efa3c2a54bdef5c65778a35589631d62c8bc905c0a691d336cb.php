<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0803e5d2cc7a79dbc07bf35281f557b4dad511a4e4abae470c366bae175c4b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83aa80acfc54ddd50c0071fd95815ff4c5d42e622ef5fa37f69ec02a817f5eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aa80acfc54ddd50c0071fd95815ff4c5d42e622ef5fa37f69ec02a817f5eb4->enter($__internal_83aa80acfc54ddd50c0071fd95815ff4c5d42e622ef5fa37f69ec02a817f5eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83aa80acfc54ddd50c0071fd95815ff4c5d42e622ef5fa37f69ec02a817f5eb4->leave($__internal_83aa80acfc54ddd50c0071fd95815ff4c5d42e622ef5fa37f69ec02a817f5eb4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7ebd632548b0273b73325bf2f9f67dc2725f69a2bce917c966d9690c884292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ebd632548b0273b73325bf2f9f67dc2725f69a2bce917c966d9690c884292f->enter($__internal_f7ebd632548b0273b73325bf2f9f67dc2725f69a2bce917c966d9690c884292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7ebd632548b0273b73325bf2f9f67dc2725f69a2bce917c966d9690c884292f->leave($__internal_f7ebd632548b0273b73325bf2f9f67dc2725f69a2bce917c966d9690c884292f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44acf007e18fcdbc673ee906408e328a50edb2993a88e9de9b523a9112f7f3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44acf007e18fcdbc673ee906408e328a50edb2993a88e9de9b523a9112f7f3ea->enter($__internal_44acf007e18fcdbc673ee906408e328a50edb2993a88e9de9b523a9112f7f3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44acf007e18fcdbc673ee906408e328a50edb2993a88e9de9b523a9112f7f3ea->leave($__internal_44acf007e18fcdbc673ee906408e328a50edb2993a88e9de9b523a9112f7f3ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_206c89cf297e1b97e3a7bd6b56befcfd16a11af643b83f4eb8027dff9fe8e37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206c89cf297e1b97e3a7bd6b56befcfd16a11af643b83f4eb8027dff9fe8e37a->enter($__internal_206c89cf297e1b97e3a7bd6b56befcfd16a11af643b83f4eb8027dff9fe8e37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_206c89cf297e1b97e3a7bd6b56befcfd16a11af643b83f4eb8027dff9fe8e37a->leave($__internal_206c89cf297e1b97e3a7bd6b56befcfd16a11af643b83f4eb8027dff9fe8e37a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
