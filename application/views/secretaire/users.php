<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">Utilisateurs
        <small>Liste</small>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="btn btn-lg pull-right">
                <a href="<?php echo site_url(); ?>admin/user"
                   class="label label-danger">
                    <i class="fa fa-plus"></i> Nouveau user
                </a>
            </div>
            <div class="panel panel-inverse" data-sortable-id="index-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Liste des Users</h4>
                </div>
                <div class="panel-body">
                    <?php
                    echo validation_errors("<div class='alert alert-danger'>", "Erreur soumission formulaire </div>");

                    if ($this->session->flashdata('msg')) {
                        echo $this->session->flashdata('msg');
                    }
                    ?>

                        <table class="table table-striped table-bordered table-hover wrap"
                               width="100%" id="table1" style="color: #0c0c0c;">
                            <thead>
                            <tr>
                                <th data-field="idreceipt" data-visible="false">
                                    ID
                                </th>
                                <!--th>urlqrcodegenrate</th-->
                                <th>Nom & Prénom</th>
                                <th>Username</th>
                                <th>Rôle</th>
                                <!--th>Effectué</th-->
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (isset($users) & count($users) > 0) {
                                foreach ($users as $item) :
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $item['iduser']; ?></td>
                                        <td><?php echo $item['nomuser'] . ' ' . $item['prenomuser']; ?></td>
                                        <td><?php echo $item['username']; ?></td>
                                        <td><?php echo $item['libellerole']; ?></td>
                                    </tr>
                                <?php
                                endforeach;
                            }
                            ?>
                            </tbody>
                        </table>
                    <div class="clearfix mb30"></div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->