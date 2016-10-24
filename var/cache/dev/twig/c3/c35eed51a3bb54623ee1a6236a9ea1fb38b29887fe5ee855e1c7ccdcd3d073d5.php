<?php

/* IProgrammerBlogFrontBundle:Security:login.html.twig */
class __TwigTemplate_629bd030eac04d1d651a28d8adff8d0015d94e2bdaa10e5e5bbab87dcaa584c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "IProgrammerBlogFrontBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec58d08acc50c8f5315544d4e634eb25c7b9397f49b34016f4bb863b6ea5b17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec58d08acc50c8f5315544d4e634eb25c7b9397f49b34016f4bb863b6ea5b17a->enter($__internal_ec58d08acc50c8f5315544d4e634eb25c7b9397f49b34016f4bb863b6ea5b17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IProgrammerBlogFrontBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec58d08acc50c8f5315544d4e634eb25c7b9397f49b34016f4bb863b6ea5b17a->leave($__internal_ec58d08acc50c8f5315544d4e634eb25c7b9397f49b34016f4bb863b6ea5b17a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59ef6be12c1868def7049a281ffc73b7656fc8253feb324753961f6a03312703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ef6be12c1868def7049a281ffc73b7656fc8253feb324753961f6a03312703->enter($__internal_59ef6be12c1868def7049a281ffc73b7656fc8253feb324753961f6a03312703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/iprogrammerblogfront/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_59ef6be12c1868def7049a281ffc73b7656fc8253feb324753961f6a03312703->leave($__internal_59ef6be12c1868def7049a281ffc73b7656fc8253feb324753961f6a03312703_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9902ece74082e1521337b885cc848cd461eaad6972aeec72a63a52633daedb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9902ece74082e1521337b885cc848cd461eaad6972aeec72a63a52633daedb6d->enter($__internal_9902ece74082e1521337b885cc848cd461eaad6972aeec72a63a52633daedb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <section class=\"login\">
        <article>

            ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "                <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 17
        echo "
            <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <hr/>
                <button type=\"submit\" class=\"btn btn-primary pull-right\">login</button>
            </form>

        </article>
    </section>
";
        
        $__internal_9902ece74082e1521337b885cc848cd461eaad6972aeec72a63a52633daedb6d->leave($__internal_9902ece74082e1521337b885cc848cd461eaad6972aeec72a63a52633daedb6d_prof);

    }

    public function getTemplateName()
    {
        return "IProgrammerBlogFrontBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  79 => 18,  76 => 17,  70 => 15,  68 => 14,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/iprogrammerblogfront/css/login.css') }}\" />
{% endblock %}

{% block body %}

    <section class=\"login\">
        <article>

            {% if error %}
                <div class=\"error\">{{ error.message }}</div>
            {% endif %}

            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <hr/>
                <button type=\"submit\" class=\"btn btn-primary pull-right\">login</button>
            </form>

        </article>
    </section>
{% endblock %}";
    }
}
