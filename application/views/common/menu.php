<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="<?php echo base_url(); ?>assets/img/user/male.png" alt=""/>
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <?php echo $_SESSION['login']; ?>
                        <small><?php echo $_SESSION['role']; ?></small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="<?php echo site_url() ?>admin/logout"><i class="fa fa-cog"></i> Se déconnecter</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>

            <?php if(isset($_SESSION['idrole']) & $_SESSION['idrole'] == 1) { ?>
                <li class="<?php echo ($menu == 'rdvfuturs') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/rdvfuturs">
                        <i class="fa fa-volume-up"></i>
                        <span>Plaintes</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'violence') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/violence">
                        <i class="fa fa-bullhorn"></i>
                        <span>Violences Dénoncer</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'temoignage') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/temoignage">
                        <i class="fa fa-street-view"></i>
                        <span>Témoignages</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'partago') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/load">
                        <i class="fa fa-share-square"></i>
                        <span>Plaintes Transférer</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'resolu') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/done">
                        <i class="fa fa-fire-extinguisher"></i>
                        <span>Plaintes résolus</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'partage') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/load_off">
                        <i class="fa fa-fire-extinguisher"></i><i class="fa fa-filter"></i>
                        <span>Plaintes résolus | Partenaires</span>
                    </a>
                </li><hr>
                <li class="<?php echo ($menu == 'clients') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>admin/users">
                        <i class="fa fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
            <?php } elseif(isset($_SESSION['idrole']) & $_SESSION['idrole'] == 2) { ?>
               
               <li class="<?php echo ($menu == 'rdvfuturs') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/rdvfuturs">
                        <i class="fa fa-volume-up"></i>
                        <span>Plaintes</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'violence') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/violence">
                        <i class="fa fa-bullhorn"></i>
                        <span>Violences Dénoncer</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'temoignage') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/temoignage">
                        <i class="fa fa-street-view"></i>
                        <span>Témoignages</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'partago') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/load">
                        <i class="fa fa-share-square"></i>
                        <span>Plaintes Transférer</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'resolu') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/done">
                        <i class="fa fa-fire-extinguisher"></i>
                        <span>Plaintes résolus</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'partage') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/load_off">
                        <i class="fa fa-fire-extinguisher"></i><i class="fa fa-filter"></i>
                        <span>Plaintes résolus | Partenaires</span>
                    </a>
                </li>
                
            <?php } else { ?>
                <li class="<?php echo ($menu == 'partago') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/prpartenaire">
                        <i class="fa fa-share-square"></i>
                        <span>Plaintes</span>
                    </a>
                </li>
                <li class="<?php echo ($menu == 'partage') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url(); ?>secretaire/load_off">
                        <i class="fa fa-fire-extinguisher"></i><i class="fa fa-filter"></i>
                        <span>Plaintes résolus</span>
                    </a>
                </li>
            <?php } ?>



            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                            class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->