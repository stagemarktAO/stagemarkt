<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
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
        $__internal_8946b4d6fa758ba4a00616fad612280103045f482dd0f15c2e082f62238a0cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8946b4d6fa758ba4a00616fad612280103045f482dd0f15c2e082f62238a0cf9->enter($__internal_8946b4d6fa758ba4a00616fad612280103045f482dd0f15c2e082f62238a0cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8c2397865fef60f75aaeb7c397eb0e340970c1f0cf92ed391ba085a1b221bf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2397865fef60f75aaeb7c397eb0e340970c1f0cf92ed391ba085a1b221bf89->enter($__internal_8c2397865fef60f75aaeb7c397eb0e340970c1f0cf92ed391ba085a1b221bf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8946b4d6fa758ba4a00616fad612280103045f482dd0f15c2e082f62238a0cf9->leave($__internal_8946b4d6fa758ba4a00616fad612280103045f482dd0f15c2e082f62238a0cf9_prof);

        
        $__internal_8c2397865fef60f75aaeb7c397eb0e340970c1f0cf92ed391ba085a1b221bf89->leave($__internal_8c2397865fef60f75aaeb7c397eb0e340970c1f0cf92ed391ba085a1b221bf89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b181dec7743a0d47c4caa8d6e8092539bd2c5727575f09a5ea31f0e465de0989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b181dec7743a0d47c4caa8d6e8092539bd2c5727575f09a5ea31f0e465de0989->enter($__internal_b181dec7743a0d47c4caa8d6e8092539bd2c5727575f09a5ea31f0e465de0989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d53d3cc3deddfeb4f780694f7cddd2b22b1d6f6fd01e3bba819de2b62127680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d53d3cc3deddfeb4f780694f7cddd2b22b1d6f6fd01e3bba819de2b62127680->enter($__internal_9d53d3cc3deddfeb4f780694f7cddd2b22b1d6f6fd01e3bba819de2b62127680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9d53d3cc3deddfeb4f780694f7cddd2b22b1d6f6fd01e3bba819de2b62127680->leave($__internal_9d53d3cc3deddfeb4f780694f7cddd2b22b1d6f6fd01e3bba819de2b62127680_prof);

        
        $__internal_b181dec7743a0d47c4caa8d6e8092539bd2c5727575f09a5ea31f0e465de0989->leave($__internal_b181dec7743a0d47c4caa8d6e8092539bd2c5727575f09a5ea31f0e465de0989_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1b6f39a6f52ad28cd6944c9e1cdd48f25299d3ce03d45236e079d752fc0b4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b6f39a6f52ad28cd6944c9e1cdd48f25299d3ce03d45236e079d752fc0b4ef->enter($__internal_c1b6f39a6f52ad28cd6944c9e1cdd48f25299d3ce03d45236e079d752fc0b4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7c103717ad10797fe55659a5ab4d96c3b9fd1fe7e8cfc9c37dbc98f2493df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c103717ad10797fe55659a5ab4d96c3b9fd1fe7e8cfc9c37dbc98f2493df99->enter($__internal_e7c103717ad10797fe55659a5ab4d96c3b9fd1fe7e8cfc9c37dbc98f2493df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e7c103717ad10797fe55659a5ab4d96c3b9fd1fe7e8cfc9c37dbc98f2493df99->leave($__internal_e7c103717ad10797fe55659a5ab4d96c3b9fd1fe7e8cfc9c37dbc98f2493df99_prof);

        
        $__internal_c1b6f39a6f52ad28cd6944c9e1cdd48f25299d3ce03d45236e079d752fc0b4ef->leave($__internal_c1b6f39a6f52ad28cd6944c9e1cdd48f25299d3ce03d45236e079d752fc0b4ef_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fbed0bb9bb9c0c651114047b1365c4e1e13e9b7304ac5affa2cb6e97a5c5bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbed0bb9bb9c0c651114047b1365c4e1e13e9b7304ac5affa2cb6e97a5c5bce->enter($__internal_7fbed0bb9bb9c0c651114047b1365c4e1e13e9b7304ac5affa2cb6e97a5c5bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70f89a8c9f6e5e3136d0c4ca4e593c7b53346f8ed81bc4b288b70c22bd302c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f89a8c9f6e5e3136d0c4ca4e593c7b53346f8ed81bc4b288b70c22bd302c59->enter($__internal_70f89a8c9f6e5e3136d0c4ca4e593c7b53346f8ed81bc4b288b70c22bd302c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70f89a8c9f6e5e3136d0c4ca4e593c7b53346f8ed81bc4b288b70c22bd302c59->leave($__internal_70f89a8c9f6e5e3136d0c4ca4e593c7b53346f8ed81bc4b288b70c22bd302c59_prof);

        
        $__internal_7fbed0bb9bb9c0c651114047b1365c4e1e13e9b7304ac5affa2cb6e97a5c5bce->leave($__internal_7fbed0bb9bb9c0c651114047b1365c4e1e13e9b7304ac5affa2cb6e97a5c5bce_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\htdocs\\jaar 2\\stagemarkt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
