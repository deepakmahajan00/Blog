<?php

/* ::base.html.twig */
class __TwigTemplate_6b92aaf8d08a73e848f2b338940f6e5582496d1b58a13902f7d982a7d3349ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18f4b67c604f5f4d6f7874aa67795c738393939a23f5379d1fdf7f055eda9d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f4b67c604f5f4d6f7874aa67795c738393939a23f5379d1fdf7f055eda9d73->enter($__internal_18f4b67c604f5f4d6f7874aa67795c738393939a23f5379d1fdf7f055eda9d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "        </div>

        <hgroup>
            <h2>";
        // line 40
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    </section>

    <div id=\"footer\">
        ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "    </div>
</section>

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
</html>";
        
        $__internal_18f4b67c604f5f4d6f7874aa67795c738393939a23f5379d1fdf7f055eda9d73->leave($__internal_18f4b67c604f5f4d6f7874aa67795c738393939a23f5379d1fdf7f055eda9d73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72b92660ff4757f9dd005106e4b68d0f0f1731200198e35370a0541dcadc9d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b92660ff4757f9dd005106e4b68d0f0f1731200198e35370a0541dcadc9d8f->enter($__internal_72b92660ff4757f9dd005106e4b68d0f0f1731200198e35370a0541dcadc9d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "IProgrammer";
        
        $__internal_72b92660ff4757f9dd005106e4b68d0f0f1731200198e35370a0541dcadc9d8f->leave($__internal_72b92660ff4757f9dd005106e4b68d0f0f1731200198e35370a0541dcadc9d8f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34aa355078d8fe67b81dd056d1447039d3d299621473962f3c12df5d61d060c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34aa355078d8fe67b81dd056d1447039d3d299621473962f3c12df5d61d060c7->enter($__internal_34aa355078d8fe67b81dd056d1447039d3d299621473962f3c12df5d61d060c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_34aa355078d8fe67b81dd056d1447039d3d299621473962f3c12df5d61d060c7->leave($__internal_34aa355078d8fe67b81dd056d1447039d3d299621473962f3c12df5d61d060c7_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f73d7ec64c91d58fae46a257bde7dd63c81fb95a9401d854a278c38bf6eb920f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73d7ec64c91d58fae46a257bde7dd63c81fb95a9401d854a278c38bf6eb920f->enter($__internal_f73d7ec64c91d58fae46a257bde7dd63c81fb95a9401d854a278c38bf6eb920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 22
        echo "                <nav>
                    <ul class=\"navigation\">


                        ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                            <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Homepage</a>
                            |
                            <a class=\"link\" href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 31
            echo "
                            <a class=\"link\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_form");
            echo "\">Login</a>
                        ";
        }
        // line 34
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_f73d7ec64c91d58fae46a257bde7dd63c81fb95a9401d854a278c38bf6eb920f->leave($__internal_f73d7ec64c91d58fae46a257bde7dd63c81fb95a9401d854a278c38bf6eb920f_prof);

    }

    // line 40
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_87cec79b73aa116604f7060d05ac779e5ff4a1cdefe823705aa7565b8a4698ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cec79b73aa116604f7060d05ac779e5ff4a1cdefe823705aa7565b8a4698ee->enter($__internal_87cec79b73aa116604f7060d05ac779e5ff4a1cdefe823705aa7565b8a4698ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">iprogrammer-blog</a>";
        
        $__internal_87cec79b73aa116604f7060d05ac779e5ff4a1cdefe823705aa7565b8a4698ee->leave($__internal_87cec79b73aa116604f7060d05ac779e5ff4a1cdefe823705aa7565b8a4698ee_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_80df294934c36e8bad32483aa2df4189c0cc7568a826c2fe2f5e16136307d62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80df294934c36e8bad32483aa2df4189c0cc7568a826c2fe2f5e16136307d62f->enter($__internal_80df294934c36e8bad32483aa2df4189c0cc7568a826c2fe2f5e16136307d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80df294934c36e8bad32483aa2df4189c0cc7568a826c2fe2f5e16136307d62f->leave($__internal_80df294934c36e8bad32483aa2df4189c0cc7568a826c2fe2f5e16136307d62f_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_75cb8809cdfd5ec9c116404aca8c670e8aa442affb83534d6cd3173762b1f85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cb8809cdfd5ec9c116404aca8c670e8aa442affb83534d6cd3173762b1f85b->enter($__internal_75cb8809cdfd5ec9c116404aca8c670e8aa442affb83534d6cd3173762b1f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "            created by Deepak Mahajan
        ";
        
        $__internal_75cb8809cdfd5ec9c116404aca8c670e8aa442affb83534d6cd3173762b1f85b->leave($__internal_75cb8809cdfd5ec9c116404aca8c670e8aa442affb83534d6cd3173762b1f85b_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0aaee949bb612437d595cf27daea65fa7bc80ce65e7823df126df86440b13f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0aaee949bb612437d595cf27daea65fa7bc80ce65e7823df126df86440b13f5->enter($__internal_a0aaee949bb612437d595cf27daea65fa7bc80ce65e7823df126df86440b13f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0aaee949bb612437d595cf27daea65fa7bc80ce65e7823df126df86440b13f5->leave($__internal_a0aaee949bb612437d595cf27daea65fa7bc80ce65e7823df126df86440b13f5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 55,  198 => 50,  192 => 49,  181 => 45,  169 => 40,  160 => 34,  155 => 32,  152 => 31,  145 => 29,  139 => 27,  137 => 26,  131 => 22,  125 => 21,  116 => 11,  113 => 10,  107 => 9,  95 => 5,  87 => 56,  85 => 55,  80 => 52,  78 => 49,  73 => 46,  71 => 45,  63 => 40,  58 => 37,  56 => 21,  44 => 13,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}IProgrammer{% endblock %} - blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\"/>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">


                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                            <a class=\"link\" href=\"{{ path('homepage') }}\">Homepage</a>
                            |
                            <a class=\"link\" href=\"{{ path('logout') }}\">Logout {{ app.user.username }}</a>
                        {% else %}

                            <a class=\"link\" href=\"{{ path('login_form') }}\">Login</a>
                        {% endif %}
                    </ul>
                </nav>
            {% endblock %}
        </div>

        <hgroup>
            <h2>{% block blog_title %}<a href=\"#\">iprogrammer-blog</a>{% endblock %}</h2>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>

    <div id=\"footer\">
        {% block footer %}
            created by Deepak Mahajan
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>";
    }
}
