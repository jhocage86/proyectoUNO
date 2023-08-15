<?php
  require_once("config/conexion.php"); 

?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("view/MainHead/MainHead.php");?> 

        <title>CRUD | Administracion</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="public/assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="public/assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="public/assets/img/favicons/apple-touch-icon-180x180.png">
        <link rel="stylesheet" id="css-main" href="public/assets/css/codebase.min.css">

    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed  sidebar-inverse">
            <aside id="side-overlay">
                <div id="side-overlay-scroll">
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>

                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="public/assets/img/avatars/avatar15.png" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">JJ SAnz</a>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>

            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <?php require_once("view/MainSidebar/MainSidebar.php");?> 
                        
                        <?php require_once("view/MainMenu/MainMenu.php");?> 
                    </div>

                </div>
            </nav>

            <php require_once("view/MainHeader/MainHeader.php"); ?> 

            <!--Contenido -->
            <main id="main-container">
                <div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Listado de Menu <small>..</small></h3>
                            <button type="button" class="btn btn-alt-primary" id="btnnuevo">
                                Nuevo <i class="fa fa-newspaper-o ml-5"></i>
                            </button>
                        </div>
                        <div class="block-content block-content-full">
                            <table id="menu_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">Ruta</th>
                                        <th style="width: 15%;">Icon</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">Nom</th>
                                        <th class="text-center" style="width: 15%;"></th>
                                        <th class="text-center" style="width: 15%;"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            
            </main>
            <!-- Contenido -->

            <div id="modalcrud" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form method="post" id="menu_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titulo_crud">CRUD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="men_id" name="men_id">
                            <div class="form-group row">
                                <label class="col-12" for="men_ruta">Ruta</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="men_ruta" name="men_ruta" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="men_icon">Icon</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="men_icon" name="men_icon" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="men_nom">Nom</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="men_nom" name="men_nom" placeholder="" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

        <?php require_once("view/MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("view/MainJs/MainJs.php");?> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript" src="CRUDMenu.js"></script>
       
    </body>
</html>
<?php
  
?>