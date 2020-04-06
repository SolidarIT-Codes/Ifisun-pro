<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">Bienvenue
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">

        <div class="col-lg-12">
            <?php
            echo validation_errors("<div class='alert alert-danger'>", "Erreur soumission formulaire </div>");

            if ($this->session->flashdata('msg')) {
                echo $this->session->flashdata('msg');
            }
            ?>
        </div>
      
        
    </div>
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-8 col-md-8">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Note du Modérateur</h4>
                    </div>
                    <div class="panel-body">
                        <div id="interactive-chart" class="height-sm">
                            <p>Un modérateur ou modératrice (abrégé "Mod" ou "Modo") est un internaute, parfois bénévole, dont le rôle est de faire de la modération d'informations. Il s'agit d'animer et surtout de modérer, un réseau social, un forum sur un site internet, un jeu vidéo, une communauté ou une discussion en ligne. Les modérateurs avertissent les joueurs, régulent leur langage s'il est incorrect, effacent les messages qui n'ont pas leur place sur le forum, soit parce qu'ils contreviennent à la loi, soit parce qu'ils enfreignent les règles explicites ou implicites du forum1.

Le modérateur efface après discussion et justification les messages d'injure ou de diffamation, ceux à caractère raciste ou incitant à la violence ou à la haine. Un modérateur se doit d'être impartial dans le débat, de tempérer son opinion personnelle afin qu'elle n'entache pas son jugement, et de rappeler à l'ordre les participants hors-sujet ou irrespectueux.

La plupart du temps, les forums ont une « charte » que le modérateur doit faire respecter et qui l'aide à savoir ce qu'il doit sanctionner. Avant d'avoir le rôle de censurer, un modérateur a un rôle de présence afin de dissuader les membres de commettre des abu</p>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
    <!-- end row -->
</div>
<!-- end #content -->