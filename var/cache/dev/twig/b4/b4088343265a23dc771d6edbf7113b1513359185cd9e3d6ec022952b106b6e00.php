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
        $__internal_f43e2d06fed49e575ed84c845a1edb6bb9b65d8eda696fe81c541bbbddeaf615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43e2d06fed49e575ed84c845a1edb6bb9b65d8eda696fe81c541bbbddeaf615->enter($__internal_f43e2d06fed49e575ed84c845a1edb6bb9b65d8eda696fe81c541bbbddeaf615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f8054cbdd486c2e6f32f5a4de07cb1179ffa12b6d69b5f7d39bd598323ebd012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8054cbdd486c2e6f32f5a4de07cb1179ffa12b6d69b5f7d39bd598323ebd012->enter($__internal_f8054cbdd486c2e6f32f5a4de07cb1179ffa12b6d69b5f7d39bd598323ebd012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f43e2d06fed49e575ed84c845a1edb6bb9b65d8eda696fe81c541bbbddeaf615->leave($__internal_f43e2d06fed49e575ed84c845a1edb6bb9b65d8eda696fe81c541bbbddeaf615_prof);

        
        $__internal_f8054cbdd486c2e6f32f5a4de07cb1179ffa12b6d69b5f7d39bd598323ebd012->leave($__internal_f8054cbdd486c2e6f32f5a4de07cb1179ffa12b6d69b5f7d39bd598323ebd012_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a647c3f59528031fb357cd5903b2f5d9099b88642c3a49120a6eb98e0dac7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a647c3f59528031fb357cd5903b2f5d9099b88642c3a49120a6eb98e0dac7fe->enter($__internal_5a647c3f59528031fb357cd5903b2f5d9099b88642c3a49120a6eb98e0dac7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67db534cbc4b9ed94ec30fe460330fd6c502a79b64d14b39ac23c9f9680ad13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67db534cbc4b9ed94ec30fe460330fd6c502a79b64d14b39ac23c9f9680ad13f->enter($__internal_67db534cbc4b9ed94ec30fe460330fd6c502a79b64d14b39ac23c9f9680ad13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_67db534cbc4b9ed94ec30fe460330fd6c502a79b64d14b39ac23c9f9680ad13f->leave($__internal_67db534cbc4b9ed94ec30fe460330fd6c502a79b64d14b39ac23c9f9680ad13f_prof);

        
        $__internal_5a647c3f59528031fb357cd5903b2f5d9099b88642c3a49120a6eb98e0dac7fe->leave($__internal_5a647c3f59528031fb357cd5903b2f5d9099b88642c3a49120a6eb98e0dac7fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd8c5ee620a18966e1a61359aac8a98214a138c22dc05daf71d01a3d9a19b603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8c5ee620a18966e1a61359aac8a98214a138c22dc05daf71d01a3d9a19b603->enter($__internal_dd8c5ee620a18966e1a61359aac8a98214a138c22dc05daf71d01a3d9a19b603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4bb066081cbf834fbeca6139ce2efa94a44b917f3213461cc3a52ecba198992b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb066081cbf834fbeca6139ce2efa94a44b917f3213461cc3a52ecba198992b->enter($__internal_4bb066081cbf834fbeca6139ce2efa94a44b917f3213461cc3a52ecba198992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4bb066081cbf834fbeca6139ce2efa94a44b917f3213461cc3a52ecba198992b->leave($__internal_4bb066081cbf834fbeca6139ce2efa94a44b917f3213461cc3a52ecba198992b_prof);

        
        $__internal_dd8c5ee620a18966e1a61359aac8a98214a138c22dc05daf71d01a3d9a19b603->leave($__internal_dd8c5ee620a18966e1a61359aac8a98214a138c22dc05daf71d01a3d9a19b603_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_798f054a6c7d9d903e9cf58d3a2aca52a9769559396d36c8c02fa065ebfa0b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798f054a6c7d9d903e9cf58d3a2aca52a9769559396d36c8c02fa065ebfa0b03->enter($__internal_798f054a6c7d9d903e9cf58d3a2aca52a9769559396d36c8c02fa065ebfa0b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fc61f3e1706dba35dc42dbdfed39eb9bfcb77e29cb4212d9b6b2189c7e5ddad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc61f3e1706dba35dc42dbdfed39eb9bfcb77e29cb4212d9b6b2189c7e5ddad->enter($__internal_9fc61f3e1706dba35dc42dbdfed39eb9bfcb77e29cb4212d9b6b2189c7e5ddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fc61f3e1706dba35dc42dbdfed39eb9bfcb77e29cb4212d9b6b2189c7e5ddad->leave($__internal_9fc61f3e1706dba35dc42dbdfed39eb9bfcb77e29cb4212d9b6b2189c7e5ddad_prof);

        
        $__internal_798f054a6c7d9d903e9cf58d3a2aca52a9769559396d36c8c02fa065ebfa0b03->leave($__internal_798f054a6c7d9d903e9cf58d3a2aca52a9769559396d36c8c02fa065ebfa0b03_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d08e9f070b83477f08462ddf3dc7f4b62e59a9c68e4b560c2bfce62dfb02f2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08e9f070b83477f08462ddf3dc7f4b62e59a9c68e4b560c2bfce62dfb02f2db->enter($__internal_d08e9f070b83477f08462ddf3dc7f4b62e59a9c68e4b560c2bfce62dfb02f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65dd50a8b263da775e613aea96da05f01fcc97a6d7dad9e0b0447fcfa16b099f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dd50a8b263da775e613aea96da05f01fcc97a6d7dad9e0b0447fcfa16b099f->enter($__internal_65dd50a8b263da775e613aea96da05f01fcc97a6d7dad9e0b0447fcfa16b099f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65dd50a8b263da775e613aea96da05f01fcc97a6d7dad9e0b0447fcfa16b099f->leave($__internal_65dd50a8b263da775e613aea96da05f01fcc97a6d7dad9e0b0447fcfa16b099f_prof);

        
        $__internal_d08e9f070b83477f08462ddf3dc7f4b62e59a9c68e4b560c2bfce62dfb02f2db->leave($__internal_d08e9f070b83477f08462ddf3dc7f4b62e59a9c68e4b560c2bfce62dfb02f2db_prof);

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
", "base.html.twig", "C:\\htdocs\\stagemarkt\\app\\Resources\\views\\base.html.twig");
    }
}
