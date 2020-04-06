<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Accueil</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">User</a></li>
        <li class="breadcrumb-item active">Nouveau</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <!-- begin wizard-form -->
    <form action="<?php echo site_url() ?>admin/user" method="POST" name="form-wizard" class="form-control-with-bg">
        <!-- begin wizard -->
        <div id="wizard">
            <!-- begin wizard-step -->
            <ul>
                <li class="col-md-3 col-sm-4 col-6">
                    <a href="#step-1">
                        <span class="number">1</span>
                        <span class="info text-ellipsis">
									Info user
									<small class="text-ellipsis">Nom, Prenom, Contact</small>
								</span>
                    </a>
                </li>
                <!--li class="col-md-3 col-sm-4 col-6">
                    <a href="#step-2">
                        <span class="number">2</span>
                        <span class="info text-ellipsis">
                                    Gestion accueil
									<small class="text-ellipsis">Rdv, Collaborateur</small>
								</span>
                    </a>
                </li>
                <li class="col-md-3 col-sm-4 col-6">
                    <a href="#step-3">
                        <span class="number">3</span>
                        <span class="info text-ellipsis">
									Terminer
									<small class="text-ellipsis">Terminer l'enregistrement</small>
								</span>
                    </a>
                </li-->
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
                                    <label class="col-md-3 col-form-label text-md-right">Nom <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" name="nomuser" placeholder="Nom du user" required class="form-control" />
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Prénom <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" name="prenomuser" placeholder="Prénom du user"  required class="form-control" />
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Contact</label>
                                    <div class="col-md-6">
                                        <input type="text" name="contactuser" placeholder="Contact du user"  class="form-control" />
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="text" name="emailuser" placeholder="Email du user"  class="form-control" />
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Username <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" name="username" placeholder="Username"  required class="form-control"  />
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Password <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="password" name="password" placeholder="Password du client"  required class="form-control"  />
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right">Rôle<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select name="fkidrole" class="form-control selectpicker" data-live-search="true" data-style="btn-white" required >
                                            <option value="" selected>Choix du rôle</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Moderateur</option>
                                            <option value="3">Partenaire</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end form-group -->
                                <!-- begin form-group -->
                                <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-9">
                                        <p><button class="btn btn-success" type="submit">Enregistrer</button></p>
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
            </div>
            <!-- end wizard-content -->
        </div>
        <!-- end wizard -->
    </form>
    <!-- end wizard-form -->
</div>
<!-- end #content -->
