<?php

/* FTCarnetBundle:Default:index.html.twig */
class __TwigTemplate_71aa0c6dcbba8aa2d05a2cfb89846aceead53522b9297114c06fcb9b1619a779 extends Twig_Template
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
        $__internal_8ecc2e180c430c7d110d5a63f0ada14bccacac31ebc58de3b18de316fdbf54ab = $this->env->getExtension("native_profiler");
        $__internal_8ecc2e180c430c7d110d5a63f0ada14bccacac31ebc58de3b18de316fdbf54ab->enter($__internal_8ecc2e180c430c7d110d5a63f0ada14bccacac31ebc58de3b18de316fdbf54ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FTCarnetBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <script src=\"https://code.jquery.com/jquery-2.2.3.min.js\"   integrity=\"sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=\"   crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../css/extended_dropdown.css\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    <script src=\"../js/extended_dropbown.js\"></script>
    <script src=\"../js/script.js\"></script>
    <style>
        body {
            background-color: #F0F0F0 ;
        }
        #row_footer{
            text-align:center;
        }
        .be_black{
            color:#000;
        }
        .add_favorite:hover{
            color:#F3E700;
        }
        .remove_favorite{
            color:#F3E700;
        }
        .remove_favorite:hover{
            color:#000;
        }
        .glyphicon{
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <!-- Modale affiche contact -->
    <div id=\"all_contact_modal\">
    </div>

    <!-- Modale ajout contact -->
    <div id=\"modale_new\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\">Ajouter un contact</h4>
          </div>
          <div class=\"modal-body\">
          <div id=\"alert_add_contact\" style=\"display:none\" class=\"alert alert-danger\" role=\"alert\">Une erreur est survenue, veuillez verifier votre connexion</div>
          <div class='row'>
            <div class=\"col-md-4\">
                <a href=\"#\" class=\"thumbnail\">
                  <img src=\"../img/ghost.png\" style='height:150px;width:150px'>
                </a>
                <div class=\"btn-group\">
                  <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"  data-placeholder=\"Please select\">Ajouter à liste <span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                      <li><input type=\"checkbox\" id=\"new_Favoris\"><label for=\"new_Favoris\" name=\"NAME\" value=\"VALUE\">Favoris</label></li>
                      <li><input type=\"checkbox\" id=\"new_liste1\"><label for=\"new_liste1\" name=\"NAME\" value=\"VALUE\">Liste 1</label></li>
                      <li><input type=\"checkbox\" id=\"new_liste2\"><label for=\"new_liste2\" name=\"NAME\" value=\"VALUE\">Liste 2</label></li>
                      <li><input type=\"checkbox\" id=\"new_liste3\"><label for=\"new_liste3\" name=\"NAME\" value=\"VALUE\">Liste 2</label></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div id=\"new_contact_full_edit_view\">
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\">Nom  </span>
                      <input id=\"new_nom\" type=\"text\" class=\"form-control\" placeholder=\"TEST\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\">Prenom</span></span>
                      <input id=\"new_prenom\" type=\"text\" class=\"form-control\" placeholder=\"Jean\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span></span>
                      <input id=\"new_tel\" type=\"text\" class=\"form-control\" placeholder=\"06 00 00 00 00\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:3px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span></span>
                      <input id=\"new_email\" type=\"text\" class=\"form-control\" placeholder=\"exemple@test.fr\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span></span>
                      <input id=\"new_adresse\" type=\"text\" class=\"form-control\" placeholder=\"23 rue du test\" aria-describedby=\"basic-addon1\">
                    </div>
                    <hr>
                    <div class=\"input-group\" style=\"margin-bottom:2px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></span>
                      <input id=\"new_website\" type=\"text\" class=\"form-control\" placeholder=\" http://mysite.fr\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:2px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span></span>
                      <input id=\"new_fb\" type=\"text\" class=\"form-control\" placeholder=\"my facebook\" aria-describedby=\"basic-addon1\">
                    </div>
                    <div class=\"input-group\" style=\"margin-bottom:2px\">
                      <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span></span>
                      <input id=\"new_twitter\" type=\"text\" class=\"form-control\" placeholder=\"my twitter\" aria-describedby=\"basic-addon1\">
                    </div>               
                </div>
            </div>
          </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"button\" onclick=\"add_contact()\" class=\"btn btn-primary\">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modale gerer liste -->
    <div id=\"modale_manage_list\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-body\">
          <div class='row'>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-10\">
                <br>
                <div class=\"list-group\">
                  <button type=\"button\" onclick=\"remove_list('liste1')\" class=\"list-group-item\">Liste 1 <span class=\"glyphicon glyphicon-trash\" style=\"float:right\" aria-hidden=\"true\"></span></button>
                  <button type=\"button\" onclick=\"remove_list('liste1')\" class=\"list-group-item\">Liste 1 <span class=\"glyphicon glyphicon-trash\" style=\"float:right\" aria-hidden=\"true\"></span></button>
                  <button type=\"button\" onclick=\"remove_list('liste1')\" class=\"list-group-item\">Liste 1 <span class=\"glyphicon glyphicon-trash\" style=\"float:right\" aria-hidden=\"true\"></span></button>
                </div>  
                <hr>
                <div class=\"input-group\">
                  <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></span>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Nom de la nouvelle liste\" aria-describedby=\"basic-addon1\">
                </div>
            </div>
            <div class=\"col-md-1\"></div>
          </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
            <button type=\"button\" onclick=\"\" class=\"btn btn-primary\">Ajouter</button>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <!-- Container -->
    <div class=\"container\">
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-10\">
            <br>
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <div class=\"page-header\">
                     ";
        // line 154
        if ((isset($context["is_connected"]) ? $context["is_connected"] : $this->getContext($context, "is_connected"))) {
            // line 155
            echo "                     <form method=\"post\" action=\"#\">
                      <button type=\"submit\" name=\"submit_logout\" type=\"button\" class=\"btn btn-danger\" style=\"float:right\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                        Deconnexion
                      </button>
                     </form>
                      <h1>Mes Contacts <small>";
            // line 161
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
            echo "</small></h1>
                     ";
        } else {
            // line 163
            echo "                      <h1>Carnet de Contacts </h1>
                     ";
        }
        // line 165
        echo "                    </div>
                    ";
        // line 166
        if ((isset($context["is_connected"]) ? $context["is_connected"] : $this->getContext($context, "is_connected"))) {
            // line 167
            echo "                    <div id=\"is_connected\" >
                    <!-- MENU -->
                   
                    <div class=\"row\">
                        <div class=\"col-md-1\"></div>
                          <div class=\"col-md-10\">
                            <div class=\"row\">
                                 <div class=\"col-md-12\">
                                    <!-- Menu Ajouter contact -->
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modale_new\">+ Ajouter Contact</button>
                                    <!-- Menu Listes -->
                                    <div class=\"btn-group\">
                                      <button type=\"button\" class=\"btn btn-primary\">Listes</button>
                                      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">Listes</span>
                                      </button>
                                      <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:sort_contact('fav')\">Favoris</a></li>
                                        <li><a href=\"#\">Liste 1</a></li>
                                        <li><a href=\"#\">Liste 2</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#modale_manage_list\">Gerer les listes</a></li>
                                      </ul>
                                    </div>
                                    <!-- Menu vues -->
                                    <button id=\"card_button\" type=\"button\" class=\"btn btn-primary\" style=\"display:none\" onclick=\"switch_view('card','list')\">
                                        <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button id=\"list_button\" type=\"button\" class=\"btn btn-primary\" onclick=\"switch_view('list','card')\" >
                                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                    </button> 
                                 </div>
                            </div>
                         </div>
                        <div class=\"col-md-1\"></div>
                    </div>
                    <br>
                    <!-- LISTE CONTACTS -->
                    <div id=\"row_liste_contacts\" class=\"row\">
                        <div class=\"col-md-1\"></div>
                        <div class=\"card col-md-10\">
                          <!-- Vue en cartes -->
                          <div id=\"card_view\">
                            <img src=\"../img/loading.gif\" style=\"width:200px\">
                          </div>
                          <!-- Vue en liste -->
                          <div id=\"list_view\" style=\"display:none\">
                        <ul id=\"list_contact_view\" class=\"list-group\">
                        <img src=\"../img/loading.gif\" style=\"width:150px\">
                        </ul>
                        </div>  
                        </div>  
                        <div class=\"col-md-1\"></div>
                    </div>
                    
                    </div>
                    ";
        } else {
            // line 225
            echo "                    <div id=\"is_not_connected\" class=\"row\">
                        <div class=\"col-md-1\"></div>
                        <div class=\"col-md-4\">
                            <h3>Se connecter</h3>
                            <hr>
                            <button type=\"button\" onclick=\"location.href='login'\"\" class=\"btn btn-primary btn-lg btn-block login-button\">Se connecter</button>

                        </div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-4\">
                            <h3>Creer un compte</h3>
                            <hr>
                            ";
            // line 237
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 238
                echo "                            <div class=\"alert alert-danger\" role=\"alert\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "</div>
                            ";
            }
            // line 240
            echo "                            <form class=\"form-horizontal\" method=\"post\" action=\"#\">
                                
                                <div class=\"form-group\">
                                    <label for=\"name\" class=\"cols-sm-2 control-label\">Votre Nom</label>
                                    <div class=\"cols-sm-10\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"  placeholder=\"Entrez votre nom\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"firstname\" class=\"cols-sm-2 control-label\">Votre Prenom</label>
                                    <div class=\"cols-sm-10\">
                                        <input type=\"text\" class=\"form-control\" name=\"firstname\" id=\"firstname\"  placeholder=\"Entrez votre prenom\"/>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"email\" class=\"cols-sm-2 control-label\">Votre Email</label>
                                    <div class=\"cols-sm-10\">
                                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\"  placeholder=\"Votre Email\"/>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"cols-sm-2 control-label\">Votre nom d'utilisateur</label>
                                    <div class=\"cols-sm-10\">
                                        <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\"  placeholder=\"Votre nom d'utilisateur\"/>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"cols-sm-2 control-label\">Votre Mot de Passe</label>
                                    <div class=\"cols-sm-10\">
                                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\"  placeholder=\"Votre Mot de Passe\"/>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"confirm\" class=\"cols-sm-2 control-label\">Répétez votre Mot de Passe</label>
                                    <div class=\"cols-sm-10\">
                                            <input type=\"password\" class=\"form-control\" name=\"confirm\" id=\"confirm\"  placeholder=\"Répétez votre Mot de Passe\"/>
                                    </div>
                                </div>

                                <div class=\"form-group \">
                                    <button type=\"submit\" name=\"submit_register\" id=\"register_button\" onclick=\"register()\" class=\"btn btn-primary btn-lg btn-block login-button\">S'enregistrer</button>
                                </div>
                            </form>
                        
                        </div>
                        <div class=\"col-md-1\"></div>
                    </div>
                    ";
        }
        // line 292
        echo "                    <div id=\"row_footer\" class=\"row\">
                        <hr>
                        Copyright 2016 - Farah TOUATI
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-1\"></div>
    </div>
    
</body>
</html>";
        
        $__internal_8ecc2e180c430c7d110d5a63f0ada14bccacac31ebc58de3b18de316fdbf54ab->leave($__internal_8ecc2e180c430c7d110d5a63f0ada14bccacac31ebc58de3b18de316fdbf54ab_prof);

    }

    public function getTemplateName()
    {
        return "FTCarnetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 292,  285 => 240,  279 => 238,  277 => 237,  263 => 225,  203 => 167,  201 => 166,  198 => 165,  194 => 163,  187 => 161,  179 => 155,  177 => 154,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*     <link rel="stylesheet" href="../css/extended_dropdown.css">*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*     <script src="../js/extended_dropbown.js"></script>*/
/*     <script src="../js/script.js"></script>*/
/*     <style>*/
/*         body {*/
/*             background-color: #F0F0F0 ;*/
/*         }*/
/*         #row_footer{*/
/*             text-align:center;*/
/*         }*/
/*         .be_black{*/
/*             color:#000;*/
/*         }*/
/*         .add_favorite:hover{*/
/*             color:#F3E700;*/
/*         }*/
/*         .remove_favorite{*/
/*             color:#F3E700;*/
/*         }*/
/*         .remove_favorite:hover{*/
/*             color:#000;*/
/*         }*/
/*         .glyphicon{*/
/*             font-size: 1.2em;*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body>*/
/*     <!-- Modale affiche contact -->*/
/*     <div id="all_contact_modal">*/
/*     </div>*/
/* */
/*     <!-- Modale ajout contact -->*/
/*     <div id="modale_new" class="modal fade" tabindex="-1" role="dialog">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             <h4 class="modal-title">Ajouter un contact</h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*           <div id="alert_add_contact" style="display:none" class="alert alert-danger" role="alert">Une erreur est survenue, veuillez verifier votre connexion</div>*/
/*           <div class='row'>*/
/*             <div class="col-md-4">*/
/*                 <a href="#" class="thumbnail">*/
/*                   <img src="../img/ghost.png" style='height:150px;width:150px'>*/
/*                 </a>*/
/*                 <div class="btn-group">*/
/*                   <button data-toggle="dropdown" class="btn dropdown-toggle"  data-placeholder="Please select">Ajouter à liste <span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                       <li><input type="checkbox" id="new_Favoris"><label for="new_Favoris" name="NAME" value="VALUE">Favoris</label></li>*/
/*                       <li><input type="checkbox" id="new_liste1"><label for="new_liste1" name="NAME" value="VALUE">Liste 1</label></li>*/
/*                       <li><input type="checkbox" id="new_liste2"><label for="new_liste2" name="NAME" value="VALUE">Liste 2</label></li>*/
/*                       <li><input type="checkbox" id="new_liste3"><label for="new_liste3" name="NAME" value="VALUE">Liste 2</label></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-8">*/
/*                 <div id="new_contact_full_edit_view">*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1">Nom  </span>*/
/*                       <input id="new_nom" type="text" class="form-control" placeholder="TEST" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1">Prenom</span></span>*/
/*                       <input id="new_prenom" type="text" class="form-control" placeholder="Jean" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>*/
/*                       <input id="new_tel" type="text" class="form-control" placeholder="06 00 00 00 00" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:3px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>*/
/*                       <input id="new_email" type="text" class="form-control" placeholder="exemple@test.fr" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>*/
/*                       <input id="new_adresse" type="text" class="form-control" placeholder="23 rue du test" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <hr>*/
/*                     <div class="input-group" style="margin-bottom:2px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></span>*/
/*                       <input id="new_website" type="text" class="form-control" placeholder=" http://mysite.fr" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:2px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>*/
/*                       <input id="new_fb" type="text" class="form-control" placeholder="my facebook" aria-describedby="basic-addon1">*/
/*                     </div>*/
/*                     <div class="input-group" style="margin-bottom:2px">*/
/*                       <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>*/
/*                       <input id="new_twitter" type="text" class="form-control" placeholder="my twitter" aria-describedby="basic-addon1">*/
/*                     </div>               */
/*                 </div>*/
/*             </div>*/
/*           </div>*/
/*           </div>*/
/*           <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*             <button type="button" onclick="add_contact()" class="btn btn-primary">Enregistrer</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <!-- Modale gerer liste -->*/
/*     <div id="modale_manage_list" class="modal fade" tabindex="-1" role="dialog">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*           <div class="modal-body">*/
/*           <div class='row'>*/
/*             <div class="col-md-1"></div>*/
/*             <div class="col-md-10">*/
/*                 <br>*/
/*                 <div class="list-group">*/
/*                   <button type="button" onclick="remove_list('liste1')" class="list-group-item">Liste 1 <span class="glyphicon glyphicon-trash" style="float:right" aria-hidden="true"></span></button>*/
/*                   <button type="button" onclick="remove_list('liste1')" class="list-group-item">Liste 1 <span class="glyphicon glyphicon-trash" style="float:right" aria-hidden="true"></span></button>*/
/*                   <button type="button" onclick="remove_list('liste1')" class="list-group-item">Liste 1 <span class="glyphicon glyphicon-trash" style="float:right" aria-hidden="true"></span></button>*/
/*                 </div>  */
/*                 <hr>*/
/*                 <div class="input-group">*/
/*                   <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>*/
/*                   <input type="text" class="form-control" placeholder="Nom de la nouvelle liste" aria-describedby="basic-addon1">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-1"></div>*/
/*           </div>*/
/*           </div>*/
/*           <div class="modal-footer">*/
/*             <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*             <button type="button" onclick="" class="btn btn-primary">Ajouter</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     */
/*     */
/*     */
/*     <!-- Container -->*/
/*     <div class="container">*/
/*         <div class="col-md-1"></div>*/
/*         <div class="col-md-10">*/
/*             <br>*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <div class="page-header">*/
/*                      {% if is_connected %}*/
/*                      <form method="post" action="#">*/
/*                       <button type="submit" name="submit_logout" type="button" class="btn btn-danger" style="float:right">*/
/*                         <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*                         Deconnexion*/
/*                       </button>*/
/*                      </form>*/
/*                       <h1>Mes Contacts <small>{{ utilisateur.prenom|capitalize}}  {{ utilisateur.nom|upper}}</small></h1>*/
/*                      {% else %}*/
/*                       <h1>Carnet de Contacts </h1>*/
/*                      {% endif %}*/
/*                     </div>*/
/*                     {% if is_connected %}*/
/*                     <div id="is_connected" >*/
/*                     <!-- MENU -->*/
/*                    */
/*                     <div class="row">*/
/*                         <div class="col-md-1"></div>*/
/*                           <div class="col-md-10">*/
/*                             <div class="row">*/
/*                                  <div class="col-md-12">*/
/*                                     <!-- Menu Ajouter contact -->*/
/*                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modale_new">+ Ajouter Contact</button>*/
/*                                     <!-- Menu Listes -->*/
/*                                     <div class="btn-group">*/
/*                                       <button type="button" class="btn btn-primary">Listes</button>*/
/*                                       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         <span class="caret"></span>*/
/*                                         <span class="sr-only">Listes</span>*/
/*                                       </button>*/
/*                                       <ul class="dropdown-menu">*/
/*                                         <li><a href="javascript:sort_contact('fav')">Favoris</a></li>*/
/*                                         <li><a href="#">Liste 1</a></li>*/
/*                                         <li><a href="#">Liste 2</a></li>*/
/*                                         <li role="separator" class="divider"></li>*/
/*                                         <li><a href="javascript:void(0)" data-toggle="modal" data-target="#modale_manage_list">Gerer les listes</a></li>*/
/*                                       </ul>*/
/*                                     </div>*/
/*                                     <!-- Menu vues -->*/
/*                                     <button id="card_button" type="button" class="btn btn-primary" style="display:none" onclick="switch_view('card','list')">*/
/*                                         <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>*/
/*                                     </button>*/
/*                                     <button id="list_button" type="button" class="btn btn-primary" onclick="switch_view('list','card')" >*/
/*                                         <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>*/
/*                                     </button> */
/*                                  </div>*/
/*                             </div>*/
/*                          </div>*/
/*                         <div class="col-md-1"></div>*/
/*                     </div>*/
/*                     <br>*/
/*                     <!-- LISTE CONTACTS -->*/
/*                     <div id="row_liste_contacts" class="row">*/
/*                         <div class="col-md-1"></div>*/
/*                         <div class="card col-md-10">*/
/*                           <!-- Vue en cartes -->*/
/*                           <div id="card_view">*/
/*                             <img src="../img/loading.gif" style="width:200px">*/
/*                           </div>*/
/*                           <!-- Vue en liste -->*/
/*                           <div id="list_view" style="display:none">*/
/*                         <ul id="list_contact_view" class="list-group">*/
/*                         <img src="../img/loading.gif" style="width:150px">*/
/*                         </ul>*/
/*                         </div>  */
/*                         </div>  */
/*                         <div class="col-md-1"></div>*/
/*                     </div>*/
/*                     */
/*                     </div>*/
/*                     {% else %}*/
/*                     <div id="is_not_connected" class="row">*/
/*                         <div class="col-md-1"></div>*/
/*                         <div class="col-md-4">*/
/*                             <h3>Se connecter</h3>*/
/*                             <hr>*/
/*                             <button type="button" onclick="location.href='login'"" class="btn btn-primary btn-lg btn-block login-button">Se connecter</button>*/
/* */
/*                         </div>*/
/*                         <div class="col-md-2"></div>*/
/*                         <div class="col-md-4">*/
/*                             <h3>Creer un compte</h3>*/
/*                             <hr>*/
/*                             {% if error %}*/
/*                             <div class="alert alert-danger" role="alert">{{error}}</div>*/
/*                             {% endif %}*/
/*                             <form class="form-horizontal" method="post" action="#">*/
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label for="name" class="cols-sm-2 control-label">Votre Nom</label>*/
/*                                     <div class="cols-sm-10">*/
/*                                         <input type="text" class="form-control" name="name" id="name"  placeholder="Entrez votre nom"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="firstname" class="cols-sm-2 control-label">Votre Prenom</label>*/
/*                                     <div class="cols-sm-10">*/
/*                                         <input type="text" class="form-control" name="firstname" id="firstname"  placeholder="Entrez votre prenom"/>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="email" class="cols-sm-2 control-label">Votre Email</label>*/
/*                                     <div class="cols-sm-10">*/
/*                                             <input type="text" class="form-control" name="email" id="email"  placeholder="Votre Email"/>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="username" class="cols-sm-2 control-label">Votre nom d'utilisateur</label>*/
/*                                     <div class="cols-sm-10">*/
/*                                         <input type="text" class="form-control" name="username" id="username"  placeholder="Votre nom d'utilisateur"/>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="password" class="cols-sm-2 control-label">Votre Mot de Passe</label>*/
/*                                     <div class="cols-sm-10">*/
/*                                             <input type="password" class="form-control" name="password" id="password"  placeholder="Votre Mot de Passe"/>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label for="confirm" class="cols-sm-2 control-label">Répétez votre Mot de Passe</label>*/
/*                                     <div class="cols-sm-10">*/
/*                                             <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Répétez votre Mot de Passe"/>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group ">*/
/*                                     <button type="submit" name="submit_register" id="register_button" onclick="register()" class="btn btn-primary btn-lg btn-block login-button">S'enregistrer</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         */
/*                         </div>*/
/*                         <div class="col-md-1"></div>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     <div id="row_footer" class="row">*/
/*                         <hr>*/
/*                         Copyright 2016 - Farah TOUATI*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-1"></div>*/
/*     </div>*/
/*     */
/* </body>*/
/* </html>*/
