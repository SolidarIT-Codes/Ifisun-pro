<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">
        <small>Details</small>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="index-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Details Plainte</h4>
                </div>
                <div class="panel-body">
                    <?php if (isset($vue) & count($vue) > 0) {
                                foreach ($vue as $item) :
                                    ?>
                    <p><strong>Nom:</strong> <?php echo $item['nom']; ?></p>
                    <p><strong>Prenom:</strong> <?php echo $item['prenom']; ?></p>
                    <p><strong>Email:</strong> <?php echo $item['email']; ?></p>
                    <p><strong>Age:</strong> <?php echo $item['age']; ?></p>
                    <p><strong>Numéro de Télephone:</strong> <?php echo $item['telephone']; ?></p>
                    <p><strong>Type de Violence:</strong> <?php echo $item['type']; ?></p>
                    <p><strong>Description:</strong> <?php echo $item['description']; ?></p>
                    <p><strong>Preuve:</strong> <?php  
                    $extension = substr( strrchr($item['preuve'], '.')  ,1);echo "<br>";
                    //echo $extension;
                    if ($extension =='png'OR $extension =='PNG' OR $extension =='gif') {
                        echo "<img  width='400' height='400' src='http://localhost/ifi/uploads/images/".$item['preuve']."'
     alt='Grapefruit slice atop a pile of other slices'>";
                    }elseif ($extension =='mp3' OR $extension =='opus' ) {
                        echo " <audio controls preload>
                            <source src='http://localhost/ifi/uploads/images/".$item['preuve']."''>
                        </audio>";
                    } elseif ($extension =='avi' OR $extension =='mp4') {
                        echo "<video width='400' height='222' controls src='http://localhost/ifi/uploads/images/".$item['preuve']."''>Ici la description alternative</video>";
                    }else

                    echo "<a href='http://localhost/ifi/uploads/images/".$item['preuve']."' class='btn btn-info'>Voir</a>";
                    

                    ?></p>
                      <?php
                                endforeach;
                            }
                            ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->