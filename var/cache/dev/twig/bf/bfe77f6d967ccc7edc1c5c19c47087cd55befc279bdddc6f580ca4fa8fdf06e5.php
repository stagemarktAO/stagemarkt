<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_66582e688313f5466a5952de9ae999123e4f8377fe5a11a2ebc5e5f5636f2f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_a66643452357a48829dad2bfae8e79ae9e50e023f39b90554eb6241a96f13f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66643452357a48829dad2bfae8e79ae9e50e023f39b90554eb6241a96f13f54->enter($__internal_a66643452357a48829dad2bfae8e79ae9e50e023f39b90554eb6241a96f13f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_9e309cca3b7ffdd98edecf299ea13e0989ff8046ad641f82e45dc3e4adfb18d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e309cca3b7ffdd98edecf299ea13e0989ff8046ad641f82e45dc3e4adfb18d1->enter($__internal_9e309cca3b7ffdd98edecf299ea13e0989ff8046ad641f82e45dc3e4adfb18d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66643452357a48829dad2bfae8e79ae9e50e023f39b90554eb6241a96f13f54->leave($__internal_a66643452357a48829dad2bfae8e79ae9e50e023f39b90554eb6241a96f13f54_prof);

        
        $__internal_9e309cca3b7ffdd98edecf299ea13e0989ff8046ad641f82e45dc3e4adfb18d1->leave($__internal_9e309cca3b7ffdd98edecf299ea13e0989ff8046ad641f82e45dc3e4adfb18d1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfe1be8130e525715680f1b050a4be17d305cd3b62fd1db6556758ed61459f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe1be8130e525715680f1b050a4be17d305cd3b62fd1db6556758ed61459f4e->enter($__internal_bfe1be8130e525715680f1b050a4be17d305cd3b62fd1db6556758ed61459f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7de744af9327e441cd0868994365159b07f01231ad970b3ea2eb8cc683cd5b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de744af9327e441cd0868994365159b07f01231ad970b3ea2eb8cc683cd5b9b->enter($__internal_7de744af9327e441cd0868994365159b07f01231ad970b3ea2eb8cc683cd5b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7de744af9327e441cd0868994365159b07f01231ad970b3ea2eb8cc683cd5b9b->leave($__internal_7de744af9327e441cd0868994365159b07f01231ad970b3ea2eb8cc683cd5b9b_prof);

        
        $__internal_bfe1be8130e525715680f1b050a4be17d305cd3b62fd1db6556758ed61459f4e->leave($__internal_bfe1be8130e525715680f1b050a4be17d305cd3b62fd1db6556758ed61459f4e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\htdocs\\stagemarkt\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
