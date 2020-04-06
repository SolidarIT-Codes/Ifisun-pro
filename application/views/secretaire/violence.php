<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">
        <small>Violences dénoncer</small>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Liste des violences</h4>
                </div>
                <div class="panel-body">
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
                                <th>Age</th>
                                <th>Type Plainte</th>
                                <th>Description</th>
                                <!--th>Effectué</th-->
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (isset($violence) & count($violence) > 0) {
                                foreach ($violence as $item) :
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><a class="btn btn-default" href="<?php echo site_url() ?>secretaire/voir/<?php echo $item['id']; ?>"><span class="fa fa-eye"></span></a></td>
                                        <td><?php echo $item['nom'] . ' ' . $item['prenom']; ?></td>
                                       <td><?php echo $item['email']." / ".$item['telephone']; ?></td>
                                        <td><?php echo $item['age']; ?></td>
                                        <td><?php echo $item['type']; ?></td>
                                        <td><?php echo $item['description']; ?></td>
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