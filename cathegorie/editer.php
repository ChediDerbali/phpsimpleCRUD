<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Edit</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Categories</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="consulter.php">consulter</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ajouter.php">ajouter</a></li>
                            <li><i class="fa fa-bars"></i><a href="suprimer.php">suprimer</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="editer.php">editer</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="chercher.php">chercher</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>produits</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="../produit/consulter.php">consulter</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="../produit/ajouter.php">ajouter</a></li>
                            <li><i class="fa fa-bars"></i><a href="../produit/suprimer.php">suprimer</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="../produit/editer.php">editer</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="../produit/chercher.php">chercher</a></li>
                        </ul>
                    </li>
                 </div>   
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">                        
                    <h3>Admin Space</h3>

                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ajouter Categorie</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                            <li class="active">Cathegorie</li>
                            <li class= "active">Ajouter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


            <!--/.col-->
            <!--/.col-->

           
            <!--/.col-->

            
            <!--/.col-->
                <!--/social-box-->
           
                <!--/social-box-->
         
            <!--/.col-->


            
            <!--/.col-->


            <div class="col-lg-12">
            <?php

include '../connection.php';
$id1 = $_POST['id'];
$name1 = $_POST['nom'];
$subname1 = $_POST['sousnom'];
$sqlname = "UPDATE `categorie` SET `nom`='$name1' WHERE `id`='$id1'";

$sqlsubname = "UPDATE `categorie` SET `nomSousCategorie`='$subname1' WHERE `id`='$id1'";

if ($_POST['submit']){
    if ($name1 != ""){
    if (mysqli_query($bdd,$sqlname)){
        echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        la categorie a ete ajoutee.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
    </div>';
    }
    else
    echo'<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">echec</span>
    Ajout echoue.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
</div>';
}
if ($subname1 != ""){
    if (mysqli_query($bdd,$sqlsubname)){
        echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        la categorie a ete ajoutee.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
    </div>';
    }
    else
    echo'<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-success">echec</span>
    Ajout echoue.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
</div>';
}}

?>
<div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" v-if="headerText">Modals</strong>
                    </div>
                    <div class="card-body">
                     <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">nom categorie</th>
                                            <th scope="col">nou sous-categorie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
 <?php
$query= 'select * from categorie';
$data = mysqli_query($bdd,$query);
while ($row_data = mysqli_fetch_array($data)){
    $id = $row_data['idCategorie'];
    $name = $row_data['nom'];
    $subname = $row_data['nomSousCategorie'];
    echo '<tr><th scope= "row">'.$id.'</th><td>'.$name.'</td><td>'.$subname.'</td></tr>';
}

?>
                                    </tbody>
                                </table>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#scrollmodal">
                            edit
                        </button>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Scrolling Long Content Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="editer.php" method="POST">

                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="id" class=" form-control-label">Categorie</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="id" id="id" class="form-control">
                                                                            <option value="">categorie (sous-categorie)</option>
                                                                            <?php
$query= 'select * from categorie';
$data = mysqli_query($bdd,$query);
while ($row_data = mysqli_fetch_array($data)){
    $id = $row_data['idCategorie'];
    $name = $row_data['nom'];
    $subname = $row_data['nomSousCategorie'];
    echo '<option value="'.$id.'">'.$name.' ('.$subname.')</option>';
}

?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                            
                            
                                <div class="form-group"><label for="nom" class=" form-control-label">Nom Categorie</label><input type="text" name="nom" id="nom" placeholder="Enter your company name" class="form-control"/>
                                </div>
                                <div class="form-group"><label for="sousnom" class=" form-control-label">Sous-Nom Categorie</label><textarea name="sousnom" id="sousnom" rows="9" placeholder="Content..." class="form-control"></textarea>
                                </div>
                                
                                
                            </div>
                            <div class="card-footer">
                                                        
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                                                            
                                                            <button type="reset" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-ban"></i> Reset
                                                            </button>
                                                        
                                                        </form>
                                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--/.col-->
            

    <!-- Right Panel -->

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
