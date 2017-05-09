<?php

/* base.html.twig */
class __TwigTemplate_8b9af363f79570f54baa8c6ff66ed3fd291fa90ae054c39ca27af4c2c64f332b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58c393f397ba4d00c9adbbd186a4baf5987332dfdeba63ab38327ae0d7fbf0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c393f397ba4d00c9adbbd186a4baf5987332dfdeba63ab38327ae0d7fbf0c4->enter($__internal_58c393f397ba4d00c9adbbd186a4baf5987332dfdeba63ab38327ae0d7fbf0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3ae28ccd2c569fcae5af06ddcb93cf45e3a4cdfc63fc5baa580873670ce6e829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae28ccd2c569fcae5af06ddcb93cf45e3a4cdfc63fc5baa580873670ce6e829->enter($__internal_3ae28ccd2c569fcae5af06ddcb93cf45e3a4cdfc63fc5baa580873670ce6e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_58c393f397ba4d00c9adbbd186a4baf5987332dfdeba63ab38327ae0d7fbf0c4->leave($__internal_58c393f397ba4d00c9adbbd186a4baf5987332dfdeba63ab38327ae0d7fbf0c4_prof);

        
        $__internal_3ae28ccd2c569fcae5af06ddcb93cf45e3a4cdfc63fc5baa580873670ce6e829->leave($__internal_3ae28ccd2c569fcae5af06ddcb93cf45e3a4cdfc63fc5baa580873670ce6e829_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b55d6bf5d556506c4ccd9e0fe045c51346d326d5639af347358d32cc186dbaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55d6bf5d556506c4ccd9e0fe045c51346d326d5639af347358d32cc186dbaa4->enter($__internal_b55d6bf5d556506c4ccd9e0fe045c51346d326d5639af347358d32cc186dbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09665c671c0e4402acee41901e2dc533e76868484faad8db2e51c6949dfe4ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09665c671c0e4402acee41901e2dc533e76868484faad8db2e51c6949dfe4ff3->enter($__internal_09665c671c0e4402acee41901e2dc533e76868484faad8db2e51c6949dfe4ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_09665c671c0e4402acee41901e2dc533e76868484faad8db2e51c6949dfe4ff3->leave($__internal_09665c671c0e4402acee41901e2dc533e76868484faad8db2e51c6949dfe4ff3_prof);

        
        $__internal_b55d6bf5d556506c4ccd9e0fe045c51346d326d5639af347358d32cc186dbaa4->leave($__internal_b55d6bf5d556506c4ccd9e0fe045c51346d326d5639af347358d32cc186dbaa4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f56a6e2b27b720ca15bb1873e346f074b914ede61a096b72df8beedd2187ed70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56a6e2b27b720ca15bb1873e346f074b914ede61a096b72df8beedd2187ed70->enter($__internal_f56a6e2b27b720ca15bb1873e346f074b914ede61a096b72df8beedd2187ed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac7a059b1b84c6d54c124f732c080129cefef71ad4db358b6f412b13b58fd4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7a059b1b84c6d54c124f732c080129cefef71ad4db358b6f412b13b58fd4be->enter($__internal_ac7a059b1b84c6d54c124f732c080129cefef71ad4db358b6f412b13b58fd4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac7a059b1b84c6d54c124f732c080129cefef71ad4db358b6f412b13b58fd4be->leave($__internal_ac7a059b1b84c6d54c124f732c080129cefef71ad4db358b6f412b13b58fd4be_prof);

        
        $__internal_f56a6e2b27b720ca15bb1873e346f074b914ede61a096b72df8beedd2187ed70->leave($__internal_f56a6e2b27b720ca15bb1873e346f074b914ede61a096b72df8beedd2187ed70_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b98a280b79d6b3d0e3244d2e68f5993ae6529d37245e0190074c9c600cf680ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98a280b79d6b3d0e3244d2e68f5993ae6529d37245e0190074c9c600cf680ac->enter($__internal_b98a280b79d6b3d0e3244d2e68f5993ae6529d37245e0190074c9c600cf680ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85ef58a2b29b3a22cee74c4a30cc82362d9b53ff290e53ed8be037ea7b436990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ef58a2b29b3a22cee74c4a30cc82362d9b53ff290e53ed8be037ea7b436990->enter($__internal_85ef58a2b29b3a22cee74c4a30cc82362d9b53ff290e53ed8be037ea7b436990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85ef58a2b29b3a22cee74c4a30cc82362d9b53ff290e53ed8be037ea7b436990->leave($__internal_85ef58a2b29b3a22cee74c4a30cc82362d9b53ff290e53ed8be037ea7b436990_prof);

        
        $__internal_b98a280b79d6b3d0e3244d2e68f5993ae6529d37245e0190074c9c600cf680ac->leave($__internal_b98a280b79d6b3d0e3244d2e68f5993ae6529d37245e0190074c9c600cf680ac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a96b39fa66afe47db484af4c5a7b7d2ef4c5d8630ddee089aa1fffaa19354660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96b39fa66afe47db484af4c5a7b7d2ef4c5d8630ddee089aa1fffaa19354660->enter($__internal_a96b39fa66afe47db484af4c5a7b7d2ef4c5d8630ddee089aa1fffaa19354660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2b75edfbdd0dc77f9613e0e887f0eb5537409a3bfbfc0c7e1b18398de0cd597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b75edfbdd0dc77f9613e0e887f0eb5537409a3bfbfc0c7e1b18398de0cd597->enter($__internal_a2b75edfbdd0dc77f9613e0e887f0eb5537409a3bfbfc0c7e1b18398de0cd597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2b75edfbdd0dc77f9613e0e887f0eb5537409a3bfbfc0c7e1b18398de0cd597->leave($__internal_a2b75edfbdd0dc77f9613e0e887f0eb5537409a3bfbfc0c7e1b18398de0cd597_prof);

        
        $__internal_a96b39fa66afe47db484af4c5a7b7d2ef4c5d8630ddee089aa1fffaa19354660->leave($__internal_a96b39fa66afe47db484af4c5a7b7d2ef4c5d8630ddee089aa1fffaa19354660_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\htdocs\\stagemarkt\\app\\Resources\\views\\base.html.twig");
    }
}
