<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d0176b9f2a66e1977cd705e542b5e0abd766465e11f8d83f8a7060db1db5281b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_0d6ae9004f645c59589b65c35baae43a497bc1fbc1dc6ed378144042967a9c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6ae9004f645c59589b65c35baae43a497bc1fbc1dc6ed378144042967a9c6a->enter($__internal_0d6ae9004f645c59589b65c35baae43a497bc1fbc1dc6ed378144042967a9c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_10a6855d8b1c66ea540250fd108c6b4bfdd3a498e2d84d906579f93344c145ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a6855d8b1c66ea540250fd108c6b4bfdd3a498e2d84d906579f93344c145ba->enter($__internal_10a6855d8b1c66ea540250fd108c6b4bfdd3a498e2d84d906579f93344c145ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6ae9004f645c59589b65c35baae43a497bc1fbc1dc6ed378144042967a9c6a->leave($__internal_0d6ae9004f645c59589b65c35baae43a497bc1fbc1dc6ed378144042967a9c6a_prof);

        
        $__internal_10a6855d8b1c66ea540250fd108c6b4bfdd3a498e2d84d906579f93344c145ba->leave($__internal_10a6855d8b1c66ea540250fd108c6b4bfdd3a498e2d84d906579f93344c145ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1fd4b680705542ce75f64954d37ea600ad4bce6a4f705c9860d6bf0eabfc2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fd4b680705542ce75f64954d37ea600ad4bce6a4f705c9860d6bf0eabfc2e8->enter($__internal_b1fd4b680705542ce75f64954d37ea600ad4bce6a4f705c9860d6bf0eabfc2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a06c623251b092f01fd6f6fec43da0f5cad50ddac9878d04a298de4101d8287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a06c623251b092f01fd6f6fec43da0f5cad50ddac9878d04a298de4101d8287->enter($__internal_3a06c623251b092f01fd6f6fec43da0f5cad50ddac9878d04a298de4101d8287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3a06c623251b092f01fd6f6fec43da0f5cad50ddac9878d04a298de4101d8287->leave($__internal_3a06c623251b092f01fd6f6fec43da0f5cad50ddac9878d04a298de4101d8287_prof);

        
        $__internal_b1fd4b680705542ce75f64954d37ea600ad4bce6a4f705c9860d6bf0eabfc2e8->leave($__internal_b1fd4b680705542ce75f64954d37ea600ad4bce6a4f705c9860d6bf0eabfc2e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\htdocs\\stagemarkt\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
