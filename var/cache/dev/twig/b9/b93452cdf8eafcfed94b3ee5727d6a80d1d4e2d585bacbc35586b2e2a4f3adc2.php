<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e8ae8df6650848f45d5465098d805c3459bb86eb36819e430253d65941024773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2f9594cd67ec1e61447689bd9855806abc6983f05f70d5ae998226b5f7736d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f9594cd67ec1e61447689bd9855806abc6983f05f70d5ae998226b5f7736d6->enter($__internal_f2f9594cd67ec1e61447689bd9855806abc6983f05f70d5ae998226b5f7736d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_84074cd9b97e6ad0f062e033c7eb78cdda1771a8cfb15240bb48a0f3c5c48463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84074cd9b97e6ad0f062e033c7eb78cdda1771a8cfb15240bb48a0f3c5c48463->enter($__internal_84074cd9b97e6ad0f062e033c7eb78cdda1771a8cfb15240bb48a0f3c5c48463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f9594cd67ec1e61447689bd9855806abc6983f05f70d5ae998226b5f7736d6->leave($__internal_f2f9594cd67ec1e61447689bd9855806abc6983f05f70d5ae998226b5f7736d6_prof);

        
        $__internal_84074cd9b97e6ad0f062e033c7eb78cdda1771a8cfb15240bb48a0f3c5c48463->leave($__internal_84074cd9b97e6ad0f062e033c7eb78cdda1771a8cfb15240bb48a0f3c5c48463_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e570ad6f95a30df4908a2ae76d5fe296cc38bb218c23aa1f6a896b4cd8f43d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e570ad6f95a30df4908a2ae76d5fe296cc38bb218c23aa1f6a896b4cd8f43d6e->enter($__internal_e570ad6f95a30df4908a2ae76d5fe296cc38bb218c23aa1f6a896b4cd8f43d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1566e784efc97302f30bf7cba156be08d66a1052222dfacdfb95e01246b4f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1566e784efc97302f30bf7cba156be08d66a1052222dfacdfb95e01246b4f8e->enter($__internal_d1566e784efc97302f30bf7cba156be08d66a1052222dfacdfb95e01246b4f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d1566e784efc97302f30bf7cba156be08d66a1052222dfacdfb95e01246b4f8e->leave($__internal_d1566e784efc97302f30bf7cba156be08d66a1052222dfacdfb95e01246b4f8e_prof);

        
        $__internal_e570ad6f95a30df4908a2ae76d5fe296cc38bb218c23aa1f6a896b4cd8f43d6e->leave($__internal_e570ad6f95a30df4908a2ae76d5fe296cc38bb218c23aa1f6a896b4cd8f43d6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\htdocs\\stagemarkt\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
