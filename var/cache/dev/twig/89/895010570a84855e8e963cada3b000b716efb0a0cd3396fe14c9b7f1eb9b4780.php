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
        $__internal_4ffd160bad95c6089996ffb5d504e8148b5147c1aef5d6ce67175595f11255a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffd160bad95c6089996ffb5d504e8148b5147c1aef5d6ce67175595f11255a8->enter($__internal_4ffd160bad95c6089996ffb5d504e8148b5147c1aef5d6ce67175595f11255a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d55c8cc2becc13ad28e9f5c6aa79b0da9ed440e65b00c8777f44e828211cf1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55c8cc2becc13ad28e9f5c6aa79b0da9ed440e65b00c8777f44e828211cf1d7->enter($__internal_d55c8cc2becc13ad28e9f5c6aa79b0da9ed440e65b00c8777f44e828211cf1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ffd160bad95c6089996ffb5d504e8148b5147c1aef5d6ce67175595f11255a8->leave($__internal_4ffd160bad95c6089996ffb5d504e8148b5147c1aef5d6ce67175595f11255a8_prof);

        
        $__internal_d55c8cc2becc13ad28e9f5c6aa79b0da9ed440e65b00c8777f44e828211cf1d7->leave($__internal_d55c8cc2becc13ad28e9f5c6aa79b0da9ed440e65b00c8777f44e828211cf1d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_572f741ee15891c6b98b09beb29c29717e5bb275221b2ab65b83e989b74159b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572f741ee15891c6b98b09beb29c29717e5bb275221b2ab65b83e989b74159b4->enter($__internal_572f741ee15891c6b98b09beb29c29717e5bb275221b2ab65b83e989b74159b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7b67070db7e02920b6e3a722a3f830675e0ac2a82c41540cf1f73d923ed9a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b67070db7e02920b6e3a722a3f830675e0ac2a82c41540cf1f73d923ed9a2f->enter($__internal_a7b67070db7e02920b6e3a722a3f830675e0ac2a82c41540cf1f73d923ed9a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a7b67070db7e02920b6e3a722a3f830675e0ac2a82c41540cf1f73d923ed9a2f->leave($__internal_a7b67070db7e02920b6e3a722a3f830675e0ac2a82c41540cf1f73d923ed9a2f_prof);

        
        $__internal_572f741ee15891c6b98b09beb29c29717e5bb275221b2ab65b83e989b74159b4->leave($__internal_572f741ee15891c6b98b09beb29c29717e5bb275221b2ab65b83e989b74159b4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c5b0e04b5f887a32e0ca7372074f42c1a2e82fef640f2498c6cfe5748bcd6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5b0e04b5f887a32e0ca7372074f42c1a2e82fef640f2498c6cfe5748bcd6c2->enter($__internal_6c5b0e04b5f887a32e0ca7372074f42c1a2e82fef640f2498c6cfe5748bcd6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5dcf9b38089192fb7712038178df06fe025e6e42d30235e6a9be0bc698de3ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcf9b38089192fb7712038178df06fe025e6e42d30235e6a9be0bc698de3ae3->enter($__internal_5dcf9b38089192fb7712038178df06fe025e6e42d30235e6a9be0bc698de3ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5dcf9b38089192fb7712038178df06fe025e6e42d30235e6a9be0bc698de3ae3->leave($__internal_5dcf9b38089192fb7712038178df06fe025e6e42d30235e6a9be0bc698de3ae3_prof);

        
        $__internal_6c5b0e04b5f887a32e0ca7372074f42c1a2e82fef640f2498c6cfe5748bcd6c2->leave($__internal_6c5b0e04b5f887a32e0ca7372074f42c1a2e82fef640f2498c6cfe5748bcd6c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1eaf9e8b69e5f178df37966b19df9c3aa51bb5ab14e3025db66664a0dcde605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1eaf9e8b69e5f178df37966b19df9c3aa51bb5ab14e3025db66664a0dcde605->enter($__internal_d1eaf9e8b69e5f178df37966b19df9c3aa51bb5ab14e3025db66664a0dcde605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a868c8c32a25d96ecd2f21321b9fecea695d7d6d038135d0cb762ace6f50c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a868c8c32a25d96ecd2f21321b9fecea695d7d6d038135d0cb762ace6f50c70->enter($__internal_7a868c8c32a25d96ecd2f21321b9fecea695d7d6d038135d0cb762ace6f50c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7a868c8c32a25d96ecd2f21321b9fecea695d7d6d038135d0cb762ace6f50c70->leave($__internal_7a868c8c32a25d96ecd2f21321b9fecea695d7d6d038135d0cb762ace6f50c70_prof);

        
        $__internal_d1eaf9e8b69e5f178df37966b19df9c3aa51bb5ab14e3025db66664a0dcde605->leave($__internal_d1eaf9e8b69e5f178df37966b19df9c3aa51bb5ab14e3025db66664a0dcde605_prof);

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
