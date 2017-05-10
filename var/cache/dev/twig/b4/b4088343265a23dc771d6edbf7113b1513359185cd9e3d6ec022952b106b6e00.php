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
        $__internal_7b8f7ea8cb9669e66fb661875530593cb43f6544d1106fca9e9f8cb4bb6b99fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8f7ea8cb9669e66fb661875530593cb43f6544d1106fca9e9f8cb4bb6b99fb->enter($__internal_7b8f7ea8cb9669e66fb661875530593cb43f6544d1106fca9e9f8cb4bb6b99fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1be6510e722dcacb63638e345767dd9d3ad58ce8b8b4c100ca26f31c38694b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be6510e722dcacb63638e345767dd9d3ad58ce8b8b4c100ca26f31c38694b76->enter($__internal_1be6510e722dcacb63638e345767dd9d3ad58ce8b8b4c100ca26f31c38694b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7b8f7ea8cb9669e66fb661875530593cb43f6544d1106fca9e9f8cb4bb6b99fb->leave($__internal_7b8f7ea8cb9669e66fb661875530593cb43f6544d1106fca9e9f8cb4bb6b99fb_prof);

        
        $__internal_1be6510e722dcacb63638e345767dd9d3ad58ce8b8b4c100ca26f31c38694b76->leave($__internal_1be6510e722dcacb63638e345767dd9d3ad58ce8b8b4c100ca26f31c38694b76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_742c7b99f20c0a1e4b86fd73f0fafb52f5e9022dd2cdaa38c87ba2ba55408f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742c7b99f20c0a1e4b86fd73f0fafb52f5e9022dd2cdaa38c87ba2ba55408f43->enter($__internal_742c7b99f20c0a1e4b86fd73f0fafb52f5e9022dd2cdaa38c87ba2ba55408f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0e18313a11ff8f9d33fb6ddebd0333216a346b18dcb42ad8f5373a7cbf90862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e18313a11ff8f9d33fb6ddebd0333216a346b18dcb42ad8f5373a7cbf90862->enter($__internal_f0e18313a11ff8f9d33fb6ddebd0333216a346b18dcb42ad8f5373a7cbf90862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0e18313a11ff8f9d33fb6ddebd0333216a346b18dcb42ad8f5373a7cbf90862->leave($__internal_f0e18313a11ff8f9d33fb6ddebd0333216a346b18dcb42ad8f5373a7cbf90862_prof);

        
        $__internal_742c7b99f20c0a1e4b86fd73f0fafb52f5e9022dd2cdaa38c87ba2ba55408f43->leave($__internal_742c7b99f20c0a1e4b86fd73f0fafb52f5e9022dd2cdaa38c87ba2ba55408f43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc5f55354a499e8e29ecdf3bf8fd52b95a9ba5b72d6ea99688c8e7d8f5a707ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5f55354a499e8e29ecdf3bf8fd52b95a9ba5b72d6ea99688c8e7d8f5a707ab->enter($__internal_bc5f55354a499e8e29ecdf3bf8fd52b95a9ba5b72d6ea99688c8e7d8f5a707ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e60a6b199a4979cd7975487a3b5f7d238f1004d320a90d4f930367e6a706b0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60a6b199a4979cd7975487a3b5f7d238f1004d320a90d4f930367e6a706b0a7->enter($__internal_e60a6b199a4979cd7975487a3b5f7d238f1004d320a90d4f930367e6a706b0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e60a6b199a4979cd7975487a3b5f7d238f1004d320a90d4f930367e6a706b0a7->leave($__internal_e60a6b199a4979cd7975487a3b5f7d238f1004d320a90d4f930367e6a706b0a7_prof);

        
        $__internal_bc5f55354a499e8e29ecdf3bf8fd52b95a9ba5b72d6ea99688c8e7d8f5a707ab->leave($__internal_bc5f55354a499e8e29ecdf3bf8fd52b95a9ba5b72d6ea99688c8e7d8f5a707ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac0c8d096fbc5e49133655a0dafa3d2ff004de33341cda3ff39c6ece089f5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac0c8d096fbc5e49133655a0dafa3d2ff004de33341cda3ff39c6ece089f5c2->enter($__internal_7ac0c8d096fbc5e49133655a0dafa3d2ff004de33341cda3ff39c6ece089f5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b0cd3086205321e43b9e5400237e7c8bc495e464314957dbf40d7a7cf97d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b0cd3086205321e43b9e5400237e7c8bc495e464314957dbf40d7a7cf97d98->enter($__internal_e5b0cd3086205321e43b9e5400237e7c8bc495e464314957dbf40d7a7cf97d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5b0cd3086205321e43b9e5400237e7c8bc495e464314957dbf40d7a7cf97d98->leave($__internal_e5b0cd3086205321e43b9e5400237e7c8bc495e464314957dbf40d7a7cf97d98_prof);

        
        $__internal_7ac0c8d096fbc5e49133655a0dafa3d2ff004de33341cda3ff39c6ece089f5c2->leave($__internal_7ac0c8d096fbc5e49133655a0dafa3d2ff004de33341cda3ff39c6ece089f5c2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48d3e475703e50915f8bbe51d71f4e90362cd6c8533aabc84b375488c352350e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d3e475703e50915f8bbe51d71f4e90362cd6c8533aabc84b375488c352350e->enter($__internal_48d3e475703e50915f8bbe51d71f4e90362cd6c8533aabc84b375488c352350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fff87b708b0f4acaa47020c8d4d61c0cc3efd44dbbdc6f6c5bc07ba906fbcc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff87b708b0f4acaa47020c8d4d61c0cc3efd44dbbdc6f6c5bc07ba906fbcc4f->enter($__internal_fff87b708b0f4acaa47020c8d4d61c0cc3efd44dbbdc6f6c5bc07ba906fbcc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fff87b708b0f4acaa47020c8d4d61c0cc3efd44dbbdc6f6c5bc07ba906fbcc4f->leave($__internal_fff87b708b0f4acaa47020c8d4d61c0cc3efd44dbbdc6f6c5bc07ba906fbcc4f_prof);

        
        $__internal_48d3e475703e50915f8bbe51d71f4e90362cd6c8533aabc84b375488c352350e->leave($__internal_48d3e475703e50915f8bbe51d71f4e90362cd6c8533aabc84b375488c352350e_prof);

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
", "base.html.twig", "C:\\htdocs\\jaar 2\\stagemarkt\\app\\Resources\\views\\base.html.twig");
    }
}
