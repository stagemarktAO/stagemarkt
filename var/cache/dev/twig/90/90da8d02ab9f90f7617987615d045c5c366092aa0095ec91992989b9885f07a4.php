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
        $__internal_8664116352a6be4d37643e62bf20c26918ff4e44454b16e0cbc51a3614080b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8664116352a6be4d37643e62bf20c26918ff4e44454b16e0cbc51a3614080b42->enter($__internal_8664116352a6be4d37643e62bf20c26918ff4e44454b16e0cbc51a3614080b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9cc6790c1a68c9a4fde47763770fe971ca27e6b757c556896fd45c0dac6fbbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc6790c1a68c9a4fde47763770fe971ca27e6b757c556896fd45c0dac6fbbb0->enter($__internal_9cc6790c1a68c9a4fde47763770fe971ca27e6b757c556896fd45c0dac6fbbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8664116352a6be4d37643e62bf20c26918ff4e44454b16e0cbc51a3614080b42->leave($__internal_8664116352a6be4d37643e62bf20c26918ff4e44454b16e0cbc51a3614080b42_prof);

        
        $__internal_9cc6790c1a68c9a4fde47763770fe971ca27e6b757c556896fd45c0dac6fbbb0->leave($__internal_9cc6790c1a68c9a4fde47763770fe971ca27e6b757c556896fd45c0dac6fbbb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53b513db7fff5a6a8168dac6b363e5da6fb0487092566b50afae946e547386d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b513db7fff5a6a8168dac6b363e5da6fb0487092566b50afae946e547386d0->enter($__internal_53b513db7fff5a6a8168dac6b363e5da6fb0487092566b50afae946e547386d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_172c386087678ea38e2f99268b0f831fb4f895c893dfc887bafba37b24275b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172c386087678ea38e2f99268b0f831fb4f895c893dfc887bafba37b24275b76->enter($__internal_172c386087678ea38e2f99268b0f831fb4f895c893dfc887bafba37b24275b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_172c386087678ea38e2f99268b0f831fb4f895c893dfc887bafba37b24275b76->leave($__internal_172c386087678ea38e2f99268b0f831fb4f895c893dfc887bafba37b24275b76_prof);

        
        $__internal_53b513db7fff5a6a8168dac6b363e5da6fb0487092566b50afae946e547386d0->leave($__internal_53b513db7fff5a6a8168dac6b363e5da6fb0487092566b50afae946e547386d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3723ec3e064aeb3341f22ffc2f5b73d527c3d33f9471fba15b059c112790e929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3723ec3e064aeb3341f22ffc2f5b73d527c3d33f9471fba15b059c112790e929->enter($__internal_3723ec3e064aeb3341f22ffc2f5b73d527c3d33f9471fba15b059c112790e929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da0420d80dc41fa05b1367705dae6dff57e1ab1b7d0591042ec26d7b4e2499e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0420d80dc41fa05b1367705dae6dff57e1ab1b7d0591042ec26d7b4e2499e5->enter($__internal_da0420d80dc41fa05b1367705dae6dff57e1ab1b7d0591042ec26d7b4e2499e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da0420d80dc41fa05b1367705dae6dff57e1ab1b7d0591042ec26d7b4e2499e5->leave($__internal_da0420d80dc41fa05b1367705dae6dff57e1ab1b7d0591042ec26d7b4e2499e5_prof);

        
        $__internal_3723ec3e064aeb3341f22ffc2f5b73d527c3d33f9471fba15b059c112790e929->leave($__internal_3723ec3e064aeb3341f22ffc2f5b73d527c3d33f9471fba15b059c112790e929_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e837e240409b2d7ae3ab8821534b9a3fbeb0762d71a7b9b03d9f17cf02c045a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e837e240409b2d7ae3ab8821534b9a3fbeb0762d71a7b9b03d9f17cf02c045a6->enter($__internal_e837e240409b2d7ae3ab8821534b9a3fbeb0762d71a7b9b03d9f17cf02c045a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49c158de890b47a15bc19c04fefee83cac005ea10c3020673245844aefbc1110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c158de890b47a15bc19c04fefee83cac005ea10c3020673245844aefbc1110->enter($__internal_49c158de890b47a15bc19c04fefee83cac005ea10c3020673245844aefbc1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49c158de890b47a15bc19c04fefee83cac005ea10c3020673245844aefbc1110->leave($__internal_49c158de890b47a15bc19c04fefee83cac005ea10c3020673245844aefbc1110_prof);

        
        $__internal_e837e240409b2d7ae3ab8821534b9a3fbeb0762d71a7b9b03d9f17cf02c045a6->leave($__internal_e837e240409b2d7ae3ab8821534b9a3fbeb0762d71a7b9b03d9f17cf02c045a6_prof);

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
