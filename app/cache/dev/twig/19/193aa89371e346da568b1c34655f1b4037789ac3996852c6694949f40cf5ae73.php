<?php

/* FTCarnetBundle:Default:contact_modale.html.twig */
class __TwigTemplate_278773ff9a83d1ffca6932c1a3cf76999902120e0f403672a3ba92f1447af2c2 extends Twig_Template
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
        $__internal_a183afff4423983505c90212cd615408017684f48f25220e47c2d94d6ce476f9 = $this->env->getExtension("native_profiler");
        $__internal_a183afff4423983505c90212cd615408017684f48f25220e47c2d94d6ce476f9->enter($__internal_a183afff4423983505c90212cd615408017684f48f25220e47c2d94d6ce476f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FTCarnetBundle:Default:contact_modale.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 2
            echo "    <div id=\"modale_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["contact"], "nom", array())), "html", null, true);
            echo "</h4>
          </div>
          <div class=\"modal-body\">
          <div class='row'>
            <div class=\"col-md-4\">
                <a href=\"#\" class=\"thumbnail\">
                  <img src=\"../img/ghost.png\" style='height:150px;width:150px'>
                </a>
                <div class=\"btn-group\">
                  <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"  data-placeholder=\"Please select\">Ajouter à liste <span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                      <li><input id=\"list_111_fav\" type=\"checkbox\" onchange=\"add_to_list('fav','111')\" ><label for=\"list_111_fav\" name=\"NAME\" value=\"VALUE\">Favoris</label></li>
                      <li><input type=\"checkbox\" id=\"ID1\"><label for=\"ID1\" name=\"NAME\" value=\"VALUE\">Liste 1</label></li>
                      <li><input type=\"checkbox\" id=\"ID2\"><label for=\"ID2\" name=\"NAME\" value=\"VALUE\">Liste 2</label></li>
                      <li><input type=\"checkbox\" id=\"ID3\"><label for=\"ID3\" name=\"NAME\" value=\"VALUE\">Liste 2</label></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div id=\"contact_full_show_";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_view\">
                    <span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "tel", array()), "html", null, true);
            echo "<br>
                    <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "<br>
                    <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "<br>
                    <hr>
                    <span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "website", array()), "html", null, true);
            echo "<br>
                    <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "facebook", array()), "html", null, true);
            echo "<br>
                    <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "twitter", array()), "html", null, true);
            echo "<br>
                </div>
                <div id=\"contact_full_edit_";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_view\" style=\"display:none\">
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_prenom_";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo "\" placeholder=\"Prenom\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_nom_";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "\" placeholder=\"Nom\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\"id=\"new_tel_";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "tel", array()), "html", null, true);
            echo "\" placeholder=\"Telephone\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_email_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "\" placeholder=\"Email\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_adresse_";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "\" placeholder=\"Adresse\" aria-describedby=\"basic-addon1\">
                    </div>
                    <hr>
                    <div class=\"input-group\" style=\"margin-bottom:2px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_website_";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "website", array()), "html", null, true);
            echo "\" placeholder=\"Site Web\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:2px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_fb_";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "facebook", array()), "html", null, true);
            echo "\" placeholder=\"Facebook\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:2px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span></span>
                      <input type=\"text\" id=\"new_twitter_";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "twitter", array()), "html", null, true);
            echo "\" placeholder=\"Twitter\" aria-describedby=\"basic-addon1\">
                    </div>
                    <a href=\"javascript:switch_view('contact_full_show_";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_edit_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\"><span class=\"glyphicon glyphicon-triangle-left\" aria-hidden=\"true\"></span> Annuler</a>
                
                </div>
            </div>
          </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"remove_contact('";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" ><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></button>
            <button type=\"button\" id=\"contact_full_edit_";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_button\" onclick=\"switch_view('contact_full_edit_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "','contact_full_show_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" class=\"btn btn-primary\">Modifier</button>
            <button type=\"button\" id=\"contact_full_show_";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "_button\" onclick=\"edit_contact('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "')\" style=\"display:none\" class=\"btn btn-primary\">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a183afff4423983505c90212cd615408017684f48f25220e47c2d94d6ce476f9->leave($__internal_a183afff4423983505c90212cd615408017684f48f25220e47c2d94d6ce476f9_prof);

    }

    public function getTemplateName()
    {
        return "FTCarnetBundle:Default:contact_modale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 79,  184 => 78,  180 => 77,  167 => 69,  160 => 67,  151 => 63,  142 => 59,  132 => 54,  123 => 50,  114 => 46,  105 => 42,  96 => 38,  90 => 35,  85 => 33,  81 => 32,  77 => 31,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  36 => 7,  27 => 2,  22 => 1,);
    }
}
/*  {% for contact in contacts %}*/
/*     <div id="modale_{{contact.id}}" class="modal fade" tabindex="-1" role="dialog">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             <h4 class="modal-title">{{contact.prenom}} {{contact.nom|upper}}</h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*           <div class='row'>*/
/*             <div class="col-md-4">*/
/*                 <a href="#" class="thumbnail">*/
/*                   <img src="../img/ghost.png" style='height:150px;width:150px'>*/
/*                 </a>*/
/*                 <div class="btn-group">*/
/*                   <button data-toggle="dropdown" class="btn dropdown-toggle"  data-placeholder="Please select">Ajouter à liste <span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                       <li><input id="list_111_fav" type="checkbox" onchange="add_to_list('fav','111')" ><label for="list_111_fav" name="NAME" value="VALUE">Favoris</label></li>*/
/*                       <li><input type="checkbox" id="ID1"><label for="ID1" name="NAME" value="VALUE">Liste 1</label></li>*/
/*                       <li><input type="checkbox" id="ID2"><label for="ID2" name="NAME" value="VALUE">Liste 2</label></li>*/
/*                       <li><input type="checkbox" id="ID3"><label for="ID3" name="NAME" value="VALUE">Liste 2</label></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-8">*/
/*                 <div id="contact_full_show_{{contact.id}}_view">*/
/*                     <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>{{contact.tel}}<br>*/
/*                     <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{contact.email}}<br>*/
/*                     <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{contact.adresse}}<br>*/
/*                     <hr>*/
/*                     <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> {{contact.website}}<br>*/
/*                     <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> {{contact.facebook}}<br>*/
/*                     <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{contact.twitter}}<br>*/
/*                 </div>*/
/*                 <div id="contact_full_edit_{{contact.id}}_view" style="display:none">*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_prenom_{{contact.id}}" class="form-control" value="{{contact.prenom}}" placeholder="Prenom" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_nom_{{contact.id}}" class="form-control" value="{{contact.nom}}" placeholder="Nom" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>*/
/*                       <input type="text"id="new_tel_{{contact.id}}" class="form-control" value="{{contact.tel}}" placeholder="Telephone" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_email_{{contact.id}}" class="form-control" value="{{contact.email}}" placeholder="Email" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_adresse_{{contact.id}}" class="form-control" value="{{contact.adresse}}" placeholder="Adresse" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="input-group" style="margin-bottom:2px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_website_{{contact.id}}" class="form-control" value="{{contact.website}}" placeholder="Site Web" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:2px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_fb_{{contact.id}}" class="form-control" value="{{contact.facebook}}" placeholder="Facebook" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:2px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>*/
/*                       <input type="text" id="new_twitter_{{contact.id}}" class="form-control" value="{{contact.twitter}}" placeholder="Twitter" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <a href="javascript:switch_view('contact_full_show_{{contact.id}}','contact_full_edit_{{contact.id}}')"><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span> Annuler</a>*/
/*                 */
/*                 </div>*/
/*             </div>*/
/*           </div>*/
/*           </div>*/
/*           <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*             <button type="button" class="btn btn-primary" onclick="remove_contact('{{contact.id}}')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>*/
/*             <button type="button" id="contact_full_edit_{{contact.id}}_button" onclick="switch_view('contact_full_edit_{{contact.id}}','contact_full_show_{{contact.id}}')" class="btn btn-primary">Modifier</button>*/
/*             <button type="button" id="contact_full_show_{{contact.id}}_button" onclick="edit_contact('{{contact.id}}')" style="display:none" class="btn btn-primary">Enregistrer</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
