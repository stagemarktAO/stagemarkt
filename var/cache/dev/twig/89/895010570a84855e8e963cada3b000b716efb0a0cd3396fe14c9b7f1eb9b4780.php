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
        $__internal_11770fc6345d01158717edf7b0b2c7c25d5a613bed8764796a6efa2ecbd98a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11770fc6345d01158717edf7b0b2c7c25d5a613bed8764796a6efa2ecbd98a95->enter($__internal_11770fc6345d01158717edf7b0b2c7c25d5a613bed8764796a6efa2ecbd98a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5cf6e9fe6146b7f3480b0172e666cf94f054b7751b15277c8d29fa2372c98c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf6e9fe6146b7f3480b0172e666cf94f054b7751b15277c8d29fa2372c98c2c->enter($__internal_5cf6e9fe6146b7f3480b0172e666cf94f054b7751b15277c8d29fa2372c98c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11770fc6345d01158717edf7b0b2c7c25d5a613bed8764796a6efa2ecbd98a95->leave($__internal_11770fc6345d01158717edf7b0b2c7c25d5a613bed8764796a6efa2ecbd98a95_prof);

        
        $__internal_5cf6e9fe6146b7f3480b0172e666cf94f054b7751b15277c8d29fa2372c98c2c->leave($__internal_5cf6e9fe6146b7f3480b0172e666cf94f054b7751b15277c8d29fa2372c98c2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_869d4d2c6a3ab691dac8207d483e1a5be361719a6937e82197da5c894ed8c9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869d4d2c6a3ab691dac8207d483e1a5be361719a6937e82197da5c894ed8c9cf->enter($__internal_869d4d2c6a3ab691dac8207d483e1a5be361719a6937e82197da5c894ed8c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c756064865b4e6dc37d796ae0dfba781bf9f8aec76f7faa230f99977949ca531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c756064865b4e6dc37d796ae0dfba781bf9f8aec76f7faa230f99977949ca531->enter($__internal_c756064865b4e6dc37d796ae0dfba781bf9f8aec76f7faa230f99977949ca531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c756064865b4e6dc37d796ae0dfba781bf9f8aec76f7faa230f99977949ca531->leave($__internal_c756064865b4e6dc37d796ae0dfba781bf9f8aec76f7faa230f99977949ca531_prof);

        
        $__internal_869d4d2c6a3ab691dac8207d483e1a5be361719a6937e82197da5c894ed8c9cf->leave($__internal_869d4d2c6a3ab691dac8207d483e1a5be361719a6937e82197da5c894ed8c9cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa80a25785290854f3af036ba832e64d42065c800beb03a9d4de416e68f8c95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa80a25785290854f3af036ba832e64d42065c800beb03a9d4de416e68f8c95d->enter($__internal_aa80a25785290854f3af036ba832e64d42065c800beb03a9d4de416e68f8c95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a844979d1b325d5fb198d39e835869bea12e4f48e52d45ab23166ff2c137b80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a844979d1b325d5fb198d39e835869bea12e4f48e52d45ab23166ff2c137b80a->enter($__internal_a844979d1b325d5fb198d39e835869bea12e4f48e52d45ab23166ff2c137b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a844979d1b325d5fb198d39e835869bea12e4f48e52d45ab23166ff2c137b80a->leave($__internal_a844979d1b325d5fb198d39e835869bea12e4f48e52d45ab23166ff2c137b80a_prof);

        
        $__internal_aa80a25785290854f3af036ba832e64d42065c800beb03a9d4de416e68f8c95d->leave($__internal_aa80a25785290854f3af036ba832e64d42065c800beb03a9d4de416e68f8c95d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b72204542850e3b9f9b8337be1f57da104fc8753197d912da9d0e22bee9efb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b72204542850e3b9f9b8337be1f57da104fc8753197d912da9d0e22bee9efb3->enter($__internal_8b72204542850e3b9f9b8337be1f57da104fc8753197d912da9d0e22bee9efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44696815994648b4485626e5d677fcc74866491807ba079a1d7d4d4d3f8ff865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44696815994648b4485626e5d677fcc74866491807ba079a1d7d4d4d3f8ff865->enter($__internal_44696815994648b4485626e5d677fcc74866491807ba079a1d7d4d4d3f8ff865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_44696815994648b4485626e5d677fcc74866491807ba079a1d7d4d4d3f8ff865->leave($__internal_44696815994648b4485626e5d677fcc74866491807ba079a1d7d4d4d3f8ff865_prof);

        
        $__internal_8b72204542850e3b9f9b8337be1f57da104fc8753197d912da9d0e22bee9efb3->leave($__internal_8b72204542850e3b9f9b8337be1f57da104fc8753197d912da9d0e22bee9efb3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\htdocs\\stagemarkt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
