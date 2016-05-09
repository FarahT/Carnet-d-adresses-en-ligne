<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2bec05434f9174e0a64d6c23508f5b99906ac491929b6105ad3fd5cb6433c637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc7dba723aa0a07df7f3a6de030c88ee3e308063f667f8612111157926dbdd5b = $this->env->getExtension("native_profiler");
        $__internal_bc7dba723aa0a07df7f3a6de030c88ee3e308063f667f8612111157926dbdd5b->enter($__internal_bc7dba723aa0a07df7f3a6de030c88ee3e308063f667f8612111157926dbdd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc7dba723aa0a07df7f3a6de030c88ee3e308063f667f8612111157926dbdd5b->leave($__internal_bc7dba723aa0a07df7f3a6de030c88ee3e308063f667f8612111157926dbdd5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b8c21aeac1d25f1c27b4f47c353707197d94b243835fbe47478de718b1e7ba7 = $this->env->getExtension("native_profiler");
        $__internal_7b8c21aeac1d25f1c27b4f47c353707197d94b243835fbe47478de718b1e7ba7->enter($__internal_7b8c21aeac1d25f1c27b4f47c353707197d94b243835fbe47478de718b1e7ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7b8c21aeac1d25f1c27b4f47c353707197d94b243835fbe47478de718b1e7ba7->leave($__internal_7b8c21aeac1d25f1c27b4f47c353707197d94b243835fbe47478de718b1e7ba7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
