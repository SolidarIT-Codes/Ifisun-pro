<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">
        <small>Plaintes</small>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Liste des Plaintes</h4>
                </div>
                <div class="panel-body">
                    <div class="alert alert-success" role="alert">
  Action effectué avec Succes
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
<table class="table table-striped table-bordered table-hover wrap"
                               width="100%" id="table1" style="color: #0c0c0c;">
                            <thead>
                            <tr>
                                <th data-field="idreceipt" data-visible="true">
                                    Voir
                                </th>
                                <!--th>urlqrcodegenrate</th-->
                                <th>Nom & Prenom</th>
                                <th>Email / Telephone</th>
                                <th>Type Plainte</th>
                                <th>Description</th>
                                
                                <!--th>Effectué</th-->
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (isset($rdvfuturslist) & count($rdvfuturslist) > 0) {
                                foreach ($rdvfuturslist as $item) :
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><a class="btn btn-default" href="<?php echo site_url() ?>secretaire/view/<?php echo $item['id']; ?>"><span class="fa fa-eye"></span></a></td>
                                        <td><?php echo $item['nom'] . ' ' . $item['prenom']; ?></td>
                                       <td><?php echo $item['email']." / ".$item['telephone']; ?></td>
                                        <td><?php echo $item['type']; ?></td>
                                        <td><?php echo $item['description']; ?></td>
                                        <td><a class="btn btn-success" href="<?php echo site_url() ?>secretaire/validate/<?php echo $item['id']; ?>"><span class="fa fa-check-circle"></span></a></td>
                                        <td><a class="btn btn-warning" href="<?php echo site_url() ?>secretaire/transfer/<?php echo $item['id']; ?>"><span class="fa fa-share-square"></span></a>
                                        </td>
                                        <td><div class="dropdown">
  <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-trash"></span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo site_url() ?>secretaire/suppr/<?php echo $item['id']; ?>">Confirmer</a>
  </div>
</div>
                                        </td>
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