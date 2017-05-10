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
        $__internal_694837d97b943f0443b1dc74ba052cc9fc5ff44791deb865c306d67da6b1d960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694837d97b943f0443b1dc74ba052cc9fc5ff44791deb865c306d67da6b1d960->enter($__internal_694837d97b943f0443b1dc74ba052cc9fc5ff44791deb865c306d67da6b1d960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5d6fd1a965bc3f05549d41479751600381bdf9223c2a2ca802d87a9a62beea3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6fd1a965bc3f05549d41479751600381bdf9223c2a2ca802d87a9a62beea3a->enter($__internal_5d6fd1a965bc3f05549d41479751600381bdf9223c2a2ca802d87a9a62beea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694837d97b943f0443b1dc74ba052cc9fc5ff44791deb865c306d67da6b1d960->leave($__internal_694837d97b943f0443b1dc74ba052cc9fc5ff44791deb865c306d67da6b1d960_prof);

        
        $__internal_5d6fd1a965bc3f05549d41479751600381bdf9223c2a2ca802d87a9a62beea3a->leave($__internal_5d6fd1a965bc3f05549d41479751600381bdf9223c2a2ca802d87a9a62beea3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82f9da9dd2ba523cabb086c1f218f5b80cb96d309285bd4b1bf81c2105343a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f9da9dd2ba523cabb086c1f218f5b80cb96d309285bd4b1bf81c2105343a8a->enter($__internal_82f9da9dd2ba523cabb086c1f218f5b80cb96d309285bd4b1bf81c2105343a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_019c6687d80fc97374481beb8e6c6d7deb199fa77f85307062643431dc1618e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019c6687d80fc97374481beb8e6c6d7deb199fa77f85307062643431dc1618e7->enter($__internal_019c6687d80fc97374481beb8e6c6d7deb199fa77f85307062643431dc1618e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_019c6687d80fc97374481beb8e6c6d7deb199fa77f85307062643431dc1618e7->leave($__internal_019c6687d80fc97374481beb8e6c6d7deb199fa77f85307062643431dc1618e7_prof);

        
        $__internal_82f9da9dd2ba523cabb086c1f218f5b80cb96d309285bd4b1bf81c2105343a8a->leave($__internal_82f9da9dd2ba523cabb086c1f218f5b80cb96d309285bd4b1bf81c2105343a8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71cad4cda008b1f0f754e2575db17ff33a55a029137dc6249d3817f25998273a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cad4cda008b1f0f754e2575db17ff33a55a029137dc6249d3817f25998273a->enter($__internal_71cad4cda008b1f0f754e2575db17ff33a55a029137dc6249d3817f25998273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d21e95e148af22e71da24c32708fa8d5612d0d41b3c22bd5a9682287eddb2527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21e95e148af22e71da24c32708fa8d5612d0d41b3c22bd5a9682287eddb2527->enter($__internal_d21e95e148af22e71da24c32708fa8d5612d0d41b3c22bd5a9682287eddb2527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d21e95e148af22e71da24c32708fa8d5612d0d41b3c22bd5a9682287eddb2527->leave($__internal_d21e95e148af22e71da24c32708fa8d5612d0d41b3c22bd5a9682287eddb2527_prof);

        
        $__internal_71cad4cda008b1f0f754e2575db17ff33a55a029137dc6249d3817f25998273a->leave($__internal_71cad4cda008b1f0f754e2575db17ff33a55a029137dc6249d3817f25998273a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35f2d3cb187362526a1c878759d387387add92623784801fbdbcef45bb6e2742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f2d3cb187362526a1c878759d387387add92623784801fbdbcef45bb6e2742->enter($__internal_35f2d3cb187362526a1c878759d387387add92623784801fbdbcef45bb6e2742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_393893b3c593a19479b2560daf18e29df40cdab5fd43546e527cb2ba63bded35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393893b3c593a19479b2560daf18e29df40cdab5fd43546e527cb2ba63bded35->enter($__internal_393893b3c593a19479b2560daf18e29df40cdab5fd43546e527cb2ba63bded35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_393893b3c593a19479b2560daf18e29df40cdab5fd43546e527cb2ba63bded35->leave($__internal_393893b3c593a19479b2560daf18e29df40cdab5fd43546e527cb2ba63bded35_prof);

        
        $__internal_35f2d3cb187362526a1c878759d387387add92623784801fbdbcef45bb6e2742->leave($__internal_35f2d3cb187362526a1c878759d387387add92623784801fbdbcef45bb6e2742_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\htdocs\\jaar 2\\stagemarkt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
