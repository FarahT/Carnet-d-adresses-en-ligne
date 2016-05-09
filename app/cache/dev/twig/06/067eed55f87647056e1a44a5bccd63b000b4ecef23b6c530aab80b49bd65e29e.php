<?php

/* FTCarnetBundle:Default:contact_list.html.twig */
class __TwigTemplate_959ccb718d1858e6e8b7929d7f7d6f32df61914d948b1779ce011c5bb337eb6f extends Twig_Template
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
        $__internal_1ea8ef0cada103ab920e65428faad242342dac64a6e8273ac71d56d01a599071 = $this->env->getExtension("native_profiler");
        $__internal_1ea8ef0cada103ab920e65428faad242342dac64a6e8273ac71d56d01a599071->enter($__internal_1ea8ef0cada103ab920e65428faad242342dac64a6e8273ac71d56d01a599071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FTCarnetBundle:Default:contact_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 2
            echo "<li id=\"list_contact_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"list-group-item\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <h4>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["contact"], "nom", array())), "html", null, true);
            echo "</h4>
        </div>
        <div class=\"col-md-5\" style=\"text-align:right\">
        <button id=\"fav_icon_list_";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\"  type=\"button\" class=\"btn btn-default\" onclick=\"switch_thing('fav_icon_list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','fav_icon_list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_like');add_to_list('fav','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "',true)\" ><span class=\"glyphicon glyphicon-star be_black add_favorite\" aria-hidden=\"true\"></span></button>
        <button id=\"fav_icon_list_";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_like\" style=\"display:none\" type=\"button\" class=\"btn btn-default\" onclick=\"switch_thing('fav_icon_list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_like','fav_icon_list_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "');add_to_list('fav','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "',false)\"><span class=\"glyphicon glyphicon-star remove_favorite\"  aria-hidden=\"true\"></span></button> 
        <button type=\"button\"  class=\"btn btn-default\" onclick=\"switch_view('contact_full_edit_";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_show_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" data-toggle=\"modal\" data-target=\"#modale_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></button>
        <button type=\"button\"  class=\"btn btn-default\" onclick=\"remove_contact('";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>
        <button type=\"button\" class=\"btn btn-primary\"  onclick=\"switch_view('contact_full_show_";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_edit_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" data-toggle=\"modal\" data-target=\"#modale_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">Voir</button>

        </div>
    </div>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1ea8ef0cada103ab920e65428faad242342dac64a6e8273ac71d56d01a599071->leave($__internal_1ea8ef0cada103ab920e65428faad242342dac64a6e8273ac71d56d01a599071_prof);

    }

    public function getTemplateName()
    {
        return "FTCarnetBundle:Default:contact_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  69 => 11,  61 => 10,  51 => 9,  41 => 8,  33 => 5,  26 => 2,  22 => 1,);
    }
}
/* {% for contact in contacts %}*/
/* <li id="list_contact_{{contact.id}}" class="list-group-item">*/
/*     <div class="row">*/
/*         <div class="col-md-7">*/
/*             <h4>{{contact.prenom}} {{contact.nom|upper}}</h4>*/
/*         </div>*/
/*         <div class="col-md-5" style="text-align:right">*/
/*         <button id="fav_icon_list_{{contact.id}}"  type="button" class="btn btn-default" onclick="switch_thing('fav_icon_list_{{contact.id}}','fav_icon_list_{{contact.id}}_like');add_to_list('fav','{{contact.id}}',true)" ><span class="glyphicon glyphicon-star be_black add_favorite" aria-hidden="true"></span></button>*/
/*         <button id="fav_icon_list_{{contact.id}}_like" style="display:none" type="button" class="btn btn-default" onclick="switch_thing('fav_icon_list_{{contact.id}}_like','fav_icon_list_{{contact.id}}');add_to_list('fav','{{contact.id}}',false)"><span class="glyphicon glyphicon-star remove_favorite"  aria-hidden="true"></span></button> */
/*         <button type="button"  class="btn btn-default" onclick="switch_view('contact_full_edit_{{contact.id}}','contact_full_show_{{contact.id}}')" data-toggle="modal" data-target="#modale_{{contact.id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>*/
/*         <button type="button"  class="btn btn-default" onclick="remove_contact('{{contact.id}}')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>*/
/*         <button type="button" class="btn btn-primary"  onclick="switch_view('contact_full_show_{{contact.id}}','contact_full_edit_{{contact.id}}')" data-toggle="modal" data-target="#modale_{{contact.id}}">Voir</button>*/
/* */
/*         </div>*/
/*     </div>*/
/* </li>*/
/* {% endfor %}*/
