<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b6548f8c723001adb432afab2663b668d18e6f482d550b697c21f44756d11f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6011833aa86bf8a3b92af850d788a1d66e5f56216784fc0fc57e6fdde80f5063 = $this->env->getExtension("native_profiler");
        $__internal_6011833aa86bf8a3b92af850d788a1d66e5f56216784fc0fc57e6fdde80f5063->enter($__internal_6011833aa86bf8a3b92af850d788a1d66e5f56216784fc0fc57e6fdde80f5063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6011833aa86bf8a3b92af850d788a1d66e5f56216784fc0fc57e6fdde80f5063->leave($__internal_6011833aa86bf8a3b92af850d788a1d66e5f56216784fc0fc57e6fdde80f5063_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
