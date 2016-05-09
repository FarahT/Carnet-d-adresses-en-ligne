<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e5b97324250ecf73b1caaf554e28576f03b5739f4f748fd91a2609176ea6304f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_67514ccf285ba6d4355c50d5c01af4b9bc9bcbc73ab8aed8dfa2bdd593aa7f5a = $this->env->getExtension("native_profiler");
        $__internal_67514ccf285ba6d4355c50d5c01af4b9bc9bcbc73ab8aed8dfa2bdd593aa7f5a->enter($__internal_67514ccf285ba6d4355c50d5c01af4b9bc9bcbc73ab8aed8dfa2bdd593aa7f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67514ccf285ba6d4355c50d5c01af4b9bc9bcbc73ab8aed8dfa2bdd593aa7f5a->leave($__internal_67514ccf285ba6d4355c50d5c01af4b9bc9bcbc73ab8aed8dfa2bdd593aa7f5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69fd1d5ec8933dc77b76b913e104d1c89a87288a13adc96696652c8e2220c83f = $this->env->getExtension("native_profiler");
        $__internal_69fd1d5ec8933dc77b76b913e104d1c89a87288a13adc96696652c8e2220c83f->enter($__internal_69fd1d5ec8933dc77b76b913e104d1c89a87288a13adc96696652c8e2220c83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
<div id=\"is_not_connected\" class=\"row\">



";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>aa
";
        }
        // line 12
        echo "
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4\">
        <h3>Se connecter</h3>
        <hr>
       
        <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <div class=\"form-group\">
                <label for=\"username\" class=\"cols-sm-2 control-label\">Votre nom d'utilisateur</label>
                <div class=\"cols-sm-10\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span>
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  placeholder=\"Votre nom d'utilisateur\"/>
                    </div>
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"password\" class=\"cols-sm-2 control-label\">Votre Mot de Passe</label>
                <div class=\"cols-sm-10\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-barcode\" aria-hidden=\"true\"></span></span>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"   placeholder=\"Votre Mot de Passe\"/>
                    </div>
                </div>
            </div>
            
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"display:none\" />
            <label for=\"remember_me\"  style=\"display:none\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            
            <div class=\"form-group \">
                <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\" id=\"_submit\" name=\"_submit\" value=\"Se Connecter\" />
            </div>
        </form>
    </div>
    <div class=\"col-md-4\"></div>
</div>
";
        
        $__internal_69fd1d5ec8933dc77b76b913e104d1c89a87288a13adc96696652c8e2220c83f->leave($__internal_69fd1d5ec8933dc77b76b913e104d1c89a87288a13adc96696652c8e2220c83f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  76 => 25,  67 => 19,  63 => 18,  55 => 12,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block fos_user_content %}*/
/* */
/* <div id="is_not_connected" class="row">*/
/* */
/* */
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>aa*/
/* {% endif %}*/
/* */
/*     <div class="col-md-4"></div>*/
/*     <div class="col-md-4">*/
/*         <h3>Se connecter</h3>*/
/*         <hr>*/
/*        */
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <div class="form-group">*/
/*                 <label for="username" class="cols-sm-2 control-label">Votre nom d'utilisateur</label>*/
/*                 <div class="cols-sm-10">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>*/
/*                         <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required"  placeholder="Votre nom d'utilisateur"/>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="password" class="cols-sm-2 control-label">Votre Mot de Passe</label>*/
/*                 <div class="cols-sm-10">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></span>*/
/*                         <input type="password" id="password" name="_password" required="required" class="form-control"   placeholder="Votre Mot de Passe"/>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" style="display:none" />*/
/*             <label for="remember_me"  style="display:none">{{ 'security.login.remember_me'|trans }}</label>*/
/*             */
/*             <div class="form-group ">*/
/*                 <input type="submit" class="btn btn-primary btn-lg btn-block login-button" id="_submit" name="_submit" value="Se Connecter" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*     <div class="col-md-4"></div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
