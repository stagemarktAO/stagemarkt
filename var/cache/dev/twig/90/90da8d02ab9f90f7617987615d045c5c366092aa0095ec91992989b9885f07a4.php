<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
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
        $__internal_0a22808b7b50614e13ce0f95fff9d24d659633b196e2d6edf888e0ab55c077fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a22808b7b50614e13ce0f95fff9d24d659633b196e2d6edf888e0ab55c077fb->enter($__internal_0a22808b7b50614e13ce0f95fff9d24d659633b196e2d6edf888e0ab55c077fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_34fe3099847ae4aad24d580cde9bc838e2a533574c56942dadb2f4ff781dc0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fe3099847ae4aad24d580cde9bc838e2a533574c56942dadb2f4ff781dc0f8->enter($__internal_34fe3099847ae4aad24d580cde9bc838e2a533574c56942dadb2f4ff781dc0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a22808b7b50614e13ce0f95fff9d24d659633b196e2d6edf888e0ab55c077fb->leave($__internal_0a22808b7b50614e13ce0f95fff9d24d659633b196e2d6edf888e0ab55c077fb_prof);

        
        $__internal_34fe3099847ae4aad24d580cde9bc838e2a533574c56942dadb2f4ff781dc0f8->leave($__internal_34fe3099847ae4aad24d580cde9bc838e2a533574c56942dadb2f4ff781dc0f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_175dab97f2bfcc566cb5e91eb6d2a24bfe0221f44f5c02082d162ded49d9241e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175dab97f2bfcc566cb5e91eb6d2a24bfe0221f44f5c02082d162ded49d9241e->enter($__internal_175dab97f2bfcc566cb5e91eb6d2a24bfe0221f44f5c02082d162ded49d9241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4635d561093e4924812fa3db48d2551310160486e300c3e8b1afbf3e777cadf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4635d561093e4924812fa3db48d2551310160486e300c3e8b1afbf3e777cadf1->enter($__internal_4635d561093e4924812fa3db48d2551310160486e300c3e8b1afbf3e777cadf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4635d561093e4924812fa3db48d2551310160486e300c3e8b1afbf3e777cadf1->leave($__internal_4635d561093e4924812fa3db48d2551310160486e300c3e8b1afbf3e777cadf1_prof);

        
        $__internal_175dab97f2bfcc566cb5e91eb6d2a24bfe0221f44f5c02082d162ded49d9241e->leave($__internal_175dab97f2bfcc566cb5e91eb6d2a24bfe0221f44f5c02082d162ded49d9241e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d703cd7f442ca464243c6f6ebf2b3887588a172ef82165089359b832553a0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d703cd7f442ca464243c6f6ebf2b3887588a172ef82165089359b832553a0c5->enter($__internal_9d703cd7f442ca464243c6f6ebf2b3887588a172ef82165089359b832553a0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3768c26d9aeed312856fb6f06da04856bafe4fe0f3a9cc6ed5d49a6d1e0c9b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3768c26d9aeed312856fb6f06da04856bafe4fe0f3a9cc6ed5d49a6d1e0c9b53->enter($__internal_3768c26d9aeed312856fb6f06da04856bafe4fe0f3a9cc6ed5d49a6d1e0c9b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3768c26d9aeed312856fb6f06da04856bafe4fe0f3a9cc6ed5d49a6d1e0c9b53->leave($__internal_3768c26d9aeed312856fb6f06da04856bafe4fe0f3a9cc6ed5d49a6d1e0c9b53_prof);

        
        $__internal_9d703cd7f442ca464243c6f6ebf2b3887588a172ef82165089359b832553a0c5->leave($__internal_9d703cd7f442ca464243c6f6ebf2b3887588a172ef82165089359b832553a0c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89fddf96e4aa7d7dc74f22caa837bb91e218be5daefdc18e79deb4b37cfe5d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fddf96e4aa7d7dc74f22caa837bb91e218be5daefdc18e79deb4b37cfe5d7a->enter($__internal_89fddf96e4aa7d7dc74f22caa837bb91e218be5daefdc18e79deb4b37cfe5d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2a5db658145c597092314b8bce43962e611e74e6fb9e096d382f4668760ebaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a5db658145c597092314b8bce43962e611e74e6fb9e096d382f4668760ebaa->enter($__internal_c2a5db658145c597092314b8bce43962e611e74e6fb9e096d382f4668760ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2a5db658145c597092314b8bce43962e611e74e6fb9e096d382f4668760ebaa->leave($__internal_c2a5db658145c597092314b8bce43962e611e74e6fb9e096d382f4668760ebaa_prof);

        
        $__internal_89fddf96e4aa7d7dc74f22caa837bb91e218be5daefdc18e79deb4b37cfe5d7a->leave($__internal_89fddf96e4aa7d7dc74f22caa837bb91e218be5daefdc18e79deb4b37cfe5d7a_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "C:\\htdocs\\stagemarkt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
