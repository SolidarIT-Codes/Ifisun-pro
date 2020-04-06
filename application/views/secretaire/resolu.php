<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">
        <small>Plaintes Résolus</small>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Effectués</h4>
                </div>
                <div class="panel-body">
                    <?php
                    echo validation_errors("<div class='alert alert-danger'>", "Erreur soumission formulaire </div>");

                    if ($this->session->flashdata('msg')) {
                        echo $this->session->flashdata('msg');
                    }


                    if ($this->session->flashdata('msg1')) {
                        echo $this->session->flashdata('msg1');
                    }
                    ?>
                        <table class="table table-striped table-bordered table-hover wrap"
                               width="100%" id="table1" style="color: #0c0c0c;">
                            <thead>
                            <tr>
                                <th data-field="idreceipt" data-visible="true">
                                    ID
                                </th>
                                <!--th>urlqrcodegenrate</th-->
                                <th>Nom & Prenom</th>
                                <th>Age</th>
                                <th>Telephone</th>
                                <th>Histoire</th>
                                <!--th>Effectué</th-->
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (isset($resolu) & count($resolu) > 0) {
                                foreach ($resolu as $item) :
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['nom'] . ' ' . $item['prenom']; ?></td>
                                        <td><?php echo $item['age']; ?></td>
                                        <td><?php echo $item['telephone']; ?></td>
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