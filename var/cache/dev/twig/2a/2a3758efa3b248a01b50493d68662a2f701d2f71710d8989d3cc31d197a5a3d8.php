<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_92598685945bfb0e044479815126b8d1f4a734f3b102a99224e64d5e5bc783ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_07d269378446e8e883f5aeaa5d59f6bb11493f9418ea29497a267020debc893b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d269378446e8e883f5aeaa5d59f6bb11493f9418ea29497a267020debc893b->enter($__internal_07d269378446e8e883f5aeaa5d59f6bb11493f9418ea29497a267020debc893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d269378446e8e883f5aeaa5d59f6bb11493f9418ea29497a267020debc893b->leave($__internal_07d269378446e8e883f5aeaa5d59f6bb11493f9418ea29497a267020debc893b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_322b119e8aa967353a787a40efdbf24b40c2242966bbab07dc91c9c89a6302ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322b119e8aa967353a787a40efdbf24b40c2242966bbab07dc91c9c89a6302ac->enter($__internal_322b119e8aa967353a787a40efdbf24b40c2242966bbab07dc91c9c89a6302ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_322b119e8aa967353a787a40efdbf24b40c2242966bbab07dc91c9c89a6302ac->leave($__internal_322b119e8aa967353a787a40efdbf24b40c2242966bbab07dc91c9c89a6302ac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e704d36ffb31389e8234f0830559a696a920bf85322e225c7e09c4f3fbf8388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e704d36ffb31389e8234f0830559a696a920bf85322e225c7e09c4f3fbf8388->enter($__internal_4e704d36ffb31389e8234f0830559a696a920bf85322e225c7e09c4f3fbf8388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4e704d36ffb31389e8234f0830559a696a920bf85322e225c7e09c4f3fbf8388->leave($__internal_4e704d36ffb31389e8234f0830559a696a920bf85322e225c7e09c4f3fbf8388_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e952cea2f2b174ecec610b92b256181836a8ce459e839356a661221edd24f2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e952cea2f2b174ecec610b92b256181836a8ce459e839356a661221edd24f2d1->enter($__internal_e952cea2f2b174ecec610b92b256181836a8ce459e839356a661221edd24f2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e952cea2f2b174ecec610b92b256181836a8ce459e839356a661221edd24f2d1->leave($__internal_e952cea2f2b174ecec610b92b256181836a8ce459e839356a661221edd24f2d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
