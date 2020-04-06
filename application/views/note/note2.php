<div class="sidebar-bg"></div>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Accueil</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Client</a></li>
        <li class="breadcrumb-item active">Nouveau</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <!-- begin wizard-form -->
    <form action="<?php echo site_url() ?>secretaire/client" method="POST" name="form-wizard" class="form-control-with-bg">
        <!-- begin wizard -->
        <div id="wizard">
            <!-- begin wizard-step -->
            <ul>
                <li class="col-md-2 col-sm-4 col-6">
                    <a href="#step-1">
                        <span class="number">1/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-2">
                        <span class="number">2/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-3">
                        <span class="number">3/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-2">
                        <span class="number">4/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-3">
                        <span class="number">6/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-3">
                        <span class="number">7/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-3">
                        <span class="number">8/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-3">
                        <span class="number">9/10</span>
                    </a>
                </li>
                <li class="col-md-2">
                    <a href="#step-3">
                        <span class="number">10/10</span>
                    </a>
                </li>
            </ul>
            <!-- end wizard-step -->
            <!-- begin wizard-content -->
            <div>
                <!-- begin step-1 -->
                <div id="step-1">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-md-8 offset-md-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informations personnel</legend>
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Avez-vous un rendez-vous ? <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="radio" name="hasrdv" data-parsley-required="true"  data-parsley-group="step-2" value="1" /><label>Oui</label>
                                        <input type="radio" name="hasrdv" data-parsley-group="step-2" value="2"  /><label>Non</label>
                                    </div>
                                </div>
                                <!-- end form-group -->

                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- end step-1 -->
                <!-- begin step-2 -->
                <div id="step-2">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-md-8 offset-md-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Information accueil</legend>
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Avez-vous un rendez-vous ? <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="radio" name="hasrdv" data-parsley-required="true"  data-parsley-group="step-2" value="1" /><label>Oui</label>
                                        <input type="radio" name="hasrdv" data-parsley-group="step-2" value="2"  /><label>Non</label>
                                    </div>
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- end step-2-->

                <!-- begin step-3 -->
                <div id="step-3">
                    <div class="jumbotron m-b-0 text-center">
                        <h2 class="text-inverse">Finaliser l'enregistrement</h2>
                        <p class="m-b-30 f-s-16">En cliquant sur le bouton ci-dessous, vous insérer les données du client </p>
                        <p><button class="btn btn-success" type="submit">Enregistrez</button></p>
                    </div>
                </div>
                <!-- end step-4 -->
            </div>
            <!-- end wizard-content -->
        </div>
        <!-- end wizard -->
    </form>
    <!-- end wizard-form -->
</div>
<!-- end #content -->
