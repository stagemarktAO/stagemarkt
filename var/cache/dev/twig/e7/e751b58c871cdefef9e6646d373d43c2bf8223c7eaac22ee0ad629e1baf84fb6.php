<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3d0c933cf3f16c68c308e84e4dd784fa58d7c8e0a43a44712199a7d91c004a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b18a3fad707ed0eadcbe32ae2d8ffcec4b6068b3a759b8887d1464b9ce9fc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b18a3fad707ed0eadcbe32ae2d8ffcec4b6068b3a759b8887d1464b9ce9fc68->enter($__internal_4b18a3fad707ed0eadcbe32ae2d8ffcec4b6068b3a759b8887d1464b9ce9fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1ea384b6a859a06cb7f8b58d8b903e15cc25e46a9c064eeff47edba00cb7456e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea384b6a859a06cb7f8b58d8b903e15cc25e46a9c064eeff47edba00cb7456e->enter($__internal_1ea384b6a859a06cb7f8b58d8b903e15cc25e46a9c064eeff47edba00cb7456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b18a3fad707ed0eadcbe32ae2d8ffcec4b6068b3a759b8887d1464b9ce9fc68->leave($__internal_4b18a3fad707ed0eadcbe32ae2d8ffcec4b6068b3a759b8887d1464b9ce9fc68_prof);

        
        $__internal_1ea384b6a859a06cb7f8b58d8b903e15cc25e46a9c064eeff47edba00cb7456e->leave($__internal_1ea384b6a859a06cb7f8b58d8b903e15cc25e46a9c064eeff47edba00cb7456e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46d5462a589cc69504f27b88997ae470b15d2846a60179202d9c6eb4fe953e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d5462a589cc69504f27b88997ae470b15d2846a60179202d9c6eb4fe953e7b->enter($__internal_46d5462a589cc69504f27b88997ae470b15d2846a60179202d9c6eb4fe953e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4fe5033219cf0da13c62471c9161a0f07416c2c2d80920170e09ac26d0fb799c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe5033219cf0da13c62471c9161a0f07416c2c2d80920170e09ac26d0fb799c->enter($__internal_4fe5033219cf0da13c62471c9161a0f07416c2c2d80920170e09ac26d0fb799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4fe5033219cf0da13c62471c9161a0f07416c2c2d80920170e09ac26d0fb799c->leave($__internal_4fe5033219cf0da13c62471c9161a0f07416c2c2d80920170e09ac26d0fb799c_prof);

        
        $__internal_46d5462a589cc69504f27b88997ae470b15d2846a60179202d9c6eb4fe953e7b->leave($__internal_46d5462a589cc69504f27b88997ae470b15d2846a60179202d9c6eb4fe953e7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\htdocs\\jaar 2\\stagemarkt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
