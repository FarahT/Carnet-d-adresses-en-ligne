<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6b676ec362f638d240afec4c6ef23ecd785dc2bb123707d73572df8808eda0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d8b361e2847b3dfd0e2a34da05d6c79967d25b383874ee0e26e3f46069b40d = $this->env->getExtension("native_profiler");
        $__internal_f8d8b361e2847b3dfd0e2a34da05d6c79967d25b383874ee0e26e3f46069b40d->enter($__internal_f8d8b361e2847b3dfd0e2a34da05d6c79967d25b383874ee0e26e3f46069b40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d8b361e2847b3dfd0e2a34da05d6c79967d25b383874ee0e26e3f46069b40d->leave($__internal_f8d8b361e2847b3dfd0e2a34da05d6c79967d25b383874ee0e26e3f46069b40d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2133162b6648d1c881ed6d4247021cf9a9508812edaa3a43e2157df41d940b91 = $this->env->getExtension("native_profiler");
        $__internal_2133162b6648d1c881ed6d4247021cf9a9508812edaa3a43e2157df41d940b91->enter($__internal_2133162b6648d1c881ed6d4247021cf9a9508812edaa3a43e2157df41d940b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2133162b6648d1c881ed6d4247021cf9a9508812edaa3a43e2157df41d940b91->leave($__internal_2133162b6648d1c881ed6d4247021cf9a9508812edaa3a43e2157df41d940b91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f449f4eaa6cf6b2f6b8b344c03dcc04d57ee305ea605c38fb5f4c7ad5feed3 = $this->env->getExtension("native_profiler");
        $__internal_93f449f4eaa6cf6b2f6b8b344c03dcc04d57ee305ea605c38fb5f4c7ad5feed3->enter($__internal_93f449f4eaa6cf6b2f6b8b344c03dcc04d57ee305ea605c38fb5f4c7ad5feed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93f449f4eaa6cf6b2f6b8b344c03dcc04d57ee305ea605c38fb5f4c7ad5feed3->leave($__internal_93f449f4eaa6cf6b2f6b8b344c03dcc04d57ee305ea605c38fb5f4c7ad5feed3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49c869bdfa7cf9c8bc742ff52b58ff39c2ae6bd3e41241d40da4dec9a46df630 = $this->env->getExtension("native_profiler");
        $__internal_49c869bdfa7cf9c8bc742ff52b58ff39c2ae6bd3e41241d40da4dec9a46df630->enter($__internal_49c869bdfa7cf9c8bc742ff52b58ff39c2ae6bd3e41241d40da4dec9a46df630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_49c869bdfa7cf9c8bc742ff52b58ff39c2ae6bd3e41241d40da4dec9a46df630->leave($__internal_49c869bdfa7cf9c8bc742ff52b58ff39c2ae6bd3e41241d40da4dec9a46df630_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
