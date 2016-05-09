<?php

/* FTCarnetBundle:Default:contact_carte.html.twig */
class __TwigTemplate_75b499159bf678b318682c481fa4406d40e5c554576b9c6c0ab85783daa4adbb extends Twig_Template
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
        $__internal_06b5fd360aef568191b5a57c15ec363ecf848d33c99966b33282d7d72e1b2f64 = $this->env->getExtension("native_profiler");
        $__internal_06b5fd360aef568191b5a57c15ec363ecf848d33c99966b33282d7d72e1b2f64->enter($__internal_06b5fd360aef568191b5a57c15ec363ecf848d33c99966b33282d7d72e1b2f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FTCarnetBundle:Default:contact_carte.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 2
            echo "<div class=\"panel panel-primary\" id=\"carte_contact_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">
    <div class=\"panel-body\">
        <div class=\"col-md-3\">
            <a href=\"javascript:switch_view('contact_full_show_";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_edit_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" class=\"thumbnail\" data-toggle=\"modal\" data-target=\"#modale_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">
              <img src=\"../img/ghost.png\" style='height:100px;width:100px' alt=\"...\">
            </a>
        </div>
        <div class=\"col-md-6\">
            <h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["contact"], "nom", array())), "html", null, true);
            echo "</h3>
            <span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "tel", array()), "html", null, true);
            echo "<br>
            <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "<br>
            <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "<br>
        </div>
        <div class=\"col-md-3\">
            <div class=\"row\">
              <button type=\"button\" class=\"btn btn-primary\" style=\"float:right\" onclick=\"switch_view('contact_full_show_";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_edit_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" data-toggle=\"modal\" data-target=\"#modale_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">Voir Contact</button><br><br>
            </div>
            <div class=\"row\" style=\"text-align:right\">
                    <button id=\"fav_icon_";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\"  type=\"button\" class=\"btn btn-default\" onclick=\"switch_thing('fav_icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','fav_icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_like');add_to_list('fav','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "',true)\" ><span class=\"glyphicon glyphicon-star be_black add_favorite\" aria-hidden=\"true\"></span></button>
                    <button id=\"fav_icon_";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_like\" style=\"display:none\" type=\"button\" class=\"btn btn-default\" onclick=\"switch_thing('fav_icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_like','fav_icon_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "');add_to_list('fav','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "',false)\"><span class=\"glyphicon glyphicon-star remove_favorite\"  aria-hidden=\"true\"></span></button> 
                    <button type=\"button\" class=\"btn btn-default\" onclick=\"switch_view('contact_full_edit_";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_show_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" data-toggle=\"modal\" data-target=\"#modale_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>                                                
                    <button type=\"button\" class=\"btn btn-default\" onclick=\"remove_contact('";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>
            </div>                                     
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_06b5fd360aef568191b5a57c15ec363ecf848d33c99966b33282d7d72e1b2f64->leave($__internal_06b5fd360aef568191b5a57c15ec363ecf848d33c99966b33282d7d72e1b2f64_prof);

    }

    public function getTemplateName()
    {
        return "FTCarnetBundle:Default:contact_carte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  96 => 22,  86 => 21,  76 => 20,  66 => 17,  59 => 13,  55 => 12,  51 => 11,  45 => 10,  33 => 5,  26 => 2,  22 => 1,);
    }
}
/* {% for contact in contacts %}*/
/* <div class="panel panel-primary" id="carte_contact_{{contact.id}}">*/
/*     <div class="panel-body">*/
/*         <div class="col-md-3">*/
/*             <a href="javascript:switch_view('contact_full_show_{{contact.id}}','contact_full_edit_{{contact.id}}')" class="thumbnail" data-toggle="modal" data-target="#modale_{{contact.id}}">*/
/*               <img src="../img/ghost.png" style='height:100px;width:100px' alt="...">*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h3>{{contact.prenom}} {{contact.nom|upper}}</h3>*/
/*             <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> {{contact.tel}}<br>*/
/*             <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{contact.email}}<br>*/
/*             <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{contact.adresse}}<br>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <div class="row">*/
/*               <button type="button" class="btn btn-primary" style="float:right" onclick="switch_view('contact_full_show_{{contact.id}}','contact_full_edit_{{contact.id}}')" data-toggle="modal" data-target="#modale_{{contact.id}}">Voir Contact</button><br><br>*/
/*             </div>*/
/*             <div class="row" style="text-align:right">*/
/*                     <button id="fav_icon_{{contact.id}}"  type="button" class="btn btn-default" onclick="switch_thing('fav_icon_{{contact.id}}','fav_icon_{{contact.id}}_like');add_to_list('fav','{{contact.id}}',true)" ><span class="glyphicon glyphicon-star be_black add_favorite" aria-hidden="true"></span></button>*/
/*                     <button id="fav_icon_{{contact.id}}_like" style="display:none" type="button" class="btn btn-default" onclick="switch_thing('fav_icon_{{contact.id}}_like','fav_icon_{{contact.id}}');add_to_list('fav','{{contact.id}}',false)"><span class="glyphicon glyphicon-star remove_favorite"  aria-hidden="true"></span></button> */
/*                     <button type="button" class="btn btn-default" onclick="switch_view('contact_full_edit_{{contact.id}}','contact_full_show_{{contact.id}}')" data-toggle="modal" data-target="#modale_{{contact.id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>                                                */
/*                     <button type="button" class="btn btn-default" onclick="remove_contact('{{contact.id}}')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>*/
/*             </div>                                     */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endfor %}*/
