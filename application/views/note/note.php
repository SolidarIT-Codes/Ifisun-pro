<div class="sidebar-bg" style="background-image: url(<?php echo base_url(); ?>assets/img/feedback.png)"></div>


<!-- begin #content -->
<div id="content" class="content">

    <div class="panel panel-success" data-sortable-id="index-1">
        <div class="panel-heading">
            <h3 style="color:white;">Que pensez-vous de notre service ?</h3>
        </div>
        <div class="panel-body">
            <?php
            echo validation_errors("<div class='alert alert-danger'>", "Erreur soumission formulaire </div>");

            if ($this->session->flashdata('msg')) {
                echo $this->session->flashdata('msg');
            }
            ?>
            <!-- begin wizard-form -->
            <form id="wizard1" class="wizard" action="<?php echo site_url() ?>note" method="POST" >
                <div class="wizard-header">
                    <div id="progressbar"></div>
                    <!--ul class="nav nav-tabs">
                        <li role="presentation" class="wizard-step-indicator"><a href="#start">Start</a></li>
                        <li role="presentation" class="wizard-step-indicator"><a href="#profile">Profile</a></li>
                        <li role="presentation" class="wizard-step-indicator"><a href="#messages">Messages</a></li>
                        <li role="presentation" class="wizard-step-indicator"><a href="#finish">Finish</a></li>
                    </ul-->
                </div>
                <div class="wizard-content">
                    <div id="start" class="wizard-step">
                        <span class="number">1/10</span>
                        <h3 class="main_question">Type de dossier que vous avez chez nous?</h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row m-b-10">
                                    <div class="col-md-9">
                                        <div class="radio radio-css">
                                            <input type="radio" value="1" name="dossier" id="cssRadio1" required />
                                            <label for="cssRadio1">IMMOBILIER</label>
                                        </div>
                                        <div class="radio radio-css">
                                            <input type="radio" value="2" name="dossier" id="cssRadio2" required />
                                            <label for="cssRadio2">CREDITS</label>
                                        </div>
                                        <div class="radio radio-css">
                                            <input type="radio" value="3" name="dossier" id="cssRadio3"  required/>
                                            <label for="cssRadio3">FAMILLE</label>
                                        </div>
                                        <div class="radio radio-css">
                                            <input type="radio" value="4" name="dossier" id="cssRadio4" required />
                                            <label for="cssRadio4">AFFAIRES</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                        <!--button type="button" class="wizard-goto btn btn-danger" value="10">Fin</button-->
                    </div>
                    <div id="profile" class="wizard-step">
                        <span class="number">2/10</span>
                        <h3 class="main_question">Votre appréciation du service Accueil?</h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="accueil" class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="accueil"
                                                  class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="accueil"
                                                  class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/sad.png" alt="">Pas Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>
                    <div id="messages" class="wizard-step">
                        <span class="number">3/10</span>
                        <h3 class="main_question">Votre appréciation sur les Délais de traitement?
                        </h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="delai"
                                                  class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="delai" class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="delai"
                                                  class="icheck required"><img
                                                src="<?php echo base_url() ?>assets/img/sad.png" alt="">Pas Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>

                    <div id="messages" class="wizard-step">
                        <span class="number">4/10</span>
                        <h3 class="main_question">Votre appréciation sur la disponibilité des
                            collaborateurs?</h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="dispo"
                                                  class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="dispo" class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="dispo"
                                                  class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/sad.png" alt="">Pas Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>
                    <div id="messages" class="wizard-step">
                        <span class="number">5/10</span>
                        <h3 class="main_question">Votre appréciation sur la clarté des
                            explications?</h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="clarte"
                                                  class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="clarte" class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="clarte"
                                                  class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/sad.png" alt="">Pas Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>

                    <div id="messages" class="wizard-step">
                        <span class="number">6/10</span>
                        <h3 class="main_question">Votre appréciation sur le suivi des dossiers?
                        </h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="suivi"
                                                  class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="suivi" class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="suivi"
                                                  class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/sad.png" alt="">Pas Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>
                    <div id="messages" class="wizard-step">
                        <span class="number">7/10</span>
                        <h3 class="main_question">Votre appréciation sur l'efficacité de la
                            prestation?
                        </h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="efficacite"
                                                  class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="efficacite" class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="efficacite"
                                                  class="icheck required"><img src="<?php echo base_url();?>assets/img/sad.png" alt="">Pas
                                        Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>
                    <div id="messages" class="wizard-step">
                        <span class="number">8/10</span>
                        <h3 class="main_question">Votre appréciation sur l'accessibilité des
                            locaux?</h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="satisfait" name="access"
                                                  class="icheck required"><img
                                                src="<?php echo base_url(); ?>assets/img/happy.png" alt="">Satisfait</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Neutre" name="access" class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/neutre.png" alt="">Neutre</label>
                                </div>
                                <div class="form-group radio_input">
                                    <label><input type="radio" value="Pas satisfait" name="access"
                                                  class="icheck required"><img
                                                src="<?php echo base_url();?>assets/img/sad.png" alt="">Pas Satisfait</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>
                    <div id="messages" class="wizard-step">
                        <span class="number">9/10</span>
                        <h3 class="main_question">Vos Suggestions d'amélioration</h3><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                            <textarea name="review" class="form-control required" style="height:180px;"
                                      placeholder="Laisser un commentaires ici ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="button" class="wizard-next btn btn-primary">Suivant</button>
                    </div>

                    <div id="finish" class="wizard-step">
                        <span class="number">10/10</span>
                        <h3 class="main_question">Votre satisfaction globale</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="1" name="note" id="inlineCssRadio1"/>
                                            <label for="inlineCssRadio1">1</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="2" name="note" id="inlineCssRadio2" />
                                            <label for="inlineCssRadio2">2</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="3" name="note" id="inlineCssRadio3"  />
                                            <label for="inlineCssRadio3">3</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="4" name="note" id="inlineCssRadio4" />
                                            <label for="inlineCssRadio4">4</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="5" name="note" id="inlineCssRadio5" />
                                            <label for="inlineCssRadio5">5</label>
                                        </div>
                                    </div>
                                </div><div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="6" name="note" id="inlineCssRadio6" required />
                                            <label for="inlineCssRadio6">6</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="7" name="note" id="inlineCssRadio7" required />
                                            <label for="inlineCssRadio7">7</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="8" name="note" id="inlineCssRadio8" required/>
                                            <label for="inlineCssRadio8">8</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="9" name="note" id="inlineCssRadio9" required />
                                            <label for="inlineCssRadio9">9</label>
                                        </div>
                                        <div class="radio radio-css radio-inline">
                                            <input type="radio" value="10" name="note" id="inlineCssRadio10" required />
                                            <label for="inlineCssRadio10">10</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="wizard-prev btn btn-default">Précédent</button>
                        <button type="submit" class="btn btn-success">Somettre</button>
                        <button type="button" class="wizard-goto btn btn-primary" value="0">Début</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end #content -->
