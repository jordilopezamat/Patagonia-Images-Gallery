<!DOCTYPE html>
<html lang="en"><head>
<!--- here goes meta.php -->
<?php include "components/php/meta.php"; ?>

    <title>Patagonia Images |   Artesanos y Oficios   </title>

    <!-- Bootstrap core CSS -->
    <link href="grid-template_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="grid-template_files/grid.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="grid-template_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="grid-template_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-size: cover;
        background-repeat:no-repeatdisplay: compact;
      }

      body#home {
        background-color: #4e9258;
      }


      div#content {
      

        color: #D6D6D6;
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        background-color: #f8f8f8;
        background-color: rgba(50, 50, 50,.6);

        border: 1px solid #999;
        padding: 10px;
        border-radius: 15px;
        -border-radius: 3px;
        -webkit-border-radius: 10px;
        box-shadow: 5px 5px 10px #999;

      }

    </style>

<!-- ++ as per Bootstrap-Images-Gallery -->

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/blueimp-gallery.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    

  </head>

  <body id="home">

	<!-- { navbar-->
	<?php include "components/php/navbar.php"; ?>
	    <section class="container">

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

 <!--- ++ aqui van los nuevos links : AYO gallery -->


    <div id='links'>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO- 001_Patagonia_Arreo en el valle de Trevelin-Chubut.jpg' title='01_Patagonia_Arreo en el valle de Trevelin-Chubut'>
        <img src='/images/collections-thumbs/AYO/AYO- 001_Patagonia_Arreo en el valle de Trevelin-Chubut.jpg' alt='01_Patagonia_Arreo en el valle de Trevelin-Chubut'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-002_Patagonia_Bueyero, PN Lanin_Neuquen.jpg' title='02_Patagonia_Bueyero, PN Lanin_Neuquen'>
        <img src='/images/collections-thumbs/AYO/AYO-002_Patagonia_Bueyero, PN Lanin_Neuquen.jpg' alt='02_Patagonia_Bueyero, PN Lanin_Neuquen'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-003_Patagonia_Cabalgata en area Lago Cholila_Chubut.jpg' title='03_Patagonia_Cabalgata en area Lago Cholila_Chubut'>
        <img src='/images/collections-thumbs/AYO/AYO-003_Patagonia_Cabalgata en area Lago Cholila_Chubut.jpg' alt='03_Patagonia_Cabalgata en area Lago Cholila_Chubut'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-004_Patagonia_ Cosechando frambuesas_Cabaña Mico_El Bols.jpg' title='04_Patagonia_ Cosechando frambuesas_Cabaña Mico_El Bols'>
        <img src='/images/collections-thumbs/AYO/AYO-004_Patagonia_ Cosechando frambuesas_Cabaña Mico_El Bols.jpg' alt='04_Patagonia_ Cosechando frambuesas_Cabaña Mico_El Bols'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-005_Patagonia_Alimentos organicos_Proyecto CIESA_Golondr.jpg' title='05_Patagonia_Alimentos organicos_Proyecto CIESA_Golondr'>
        <img src='/images/collections-thumbs/AYO/AYO-005_Patagonia_Alimentos organicos_Proyecto CIESA_Golondr.jpg' alt='05_Patagonia_Alimentos organicos_Proyecto CIESA_Golondr'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-006_Patagonia_Cosecha de Frambuesas_Granja Humus_El Bols.jpg' title='06_Patagonia_Cosecha de Frambuesas_Granja Humus_El Bols'>
        <img src='/images/collections-thumbs/AYO/AYO-006_Patagonia_Cosecha de Frambuesas_Granja Humus_El Bols.jpg' alt='06_Patagonia_Cosecha de Frambuesas_Granja Humus_El Bols'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-007_Patagonia_Cosecha de frutillas_Cbaña Mico_El Bolson.jpg' title='07_Patagonia_Cosecha de frutillas_Cbaña Mico_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-007_Patagonia_Cosecha de frutillas_Cbaña Mico_El Bolson.jpg' alt='07_Patagonia_Cosecha de frutillas_Cbaña Mico_El Bolson'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-008_Patagonia_Cosecha del lupulo_El Bolson.jpg' title='08_Patagonia_Cosecha del lupulo_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-008_Patagonia_Cosecha del lupulo_El Bolson.jpg' alt='08_Patagonia_Cosecha del lupulo_El Bolson'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-009_Patagonia_Chacra lupulera_El Bolson.jpg' title='09_Patagonia_Chacra lupulera_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-009_Patagonia_Chacra lupulera_El Bolson.jpg' alt='09_Patagonia_Chacra lupulera_El Bolson'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-010_Patagonia_Cosechando lupulo 2_El Bolson.jpg' title='10_Patagonia_Cosechando lupulo 2_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-010_Patagonia_Cosechando lupulo 2_El Bolson.jpg' alt='10_Patagonia_Cosechando lupulo 2_El Bolson'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-011_Patagonia_Proyecto CIESA-Golondrinas_Chubut.jpg' title='11_Patagonia_Proyecto CIESA-Golondrinas_Chubut'>
        <img src='/images/collections-thumbs/AYO/AYO-011_Patagonia_Proyecto CIESA-Golondrinas_Chubut.jpg' alt='11_Patagonia_Proyecto CIESA-Golondrinas_Chubut'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-012_Patagonia_Cerezas de Los Antiguos-Santa Cruz.jpg' title='12_Patagonia_Cerezas de Los Antiguos-Santa Cruz'>
        <img src='/images/collections-thumbs/AYO/AYO-012_Patagonia_Cerezas de Los Antiguos-Santa Cruz.jpg' alt='12_Patagonia_Cerezas de Los Antiguos-Santa Cruz'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-013_Patagonia_Feria regional El Bolson_Joyeros artesanos.jpg' title='13_Patagonia_Feria regional El Bolson_Joyeros artesanos'>
        <img src='/images/collections-thumbs/AYO/AYO-013_Patagonia_Feria regional El Bolson_Joyeros artesanos.jpg' alt='13_Patagonia_Feria regional El Bolson_Joyeros artesanos'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-014_Patagonia_Joyes El Bolson_feria_Rio negro.jpg' title='14_Patagonia_Joyes El Bolson_feria_Rio negro'>
        <img src='/images/collections-thumbs/AYO/AYO-014_Patagonia_Joyes El Bolson_feria_Rio negro.jpg' alt='14_Patagonia_Joyes El Bolson_feria_Rio negro'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-015_Patagonia_flor de Lupulo_El Bolson.jpg' title='15_Patagonia_flor de Lupulo_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-015_Patagonia_flor de Lupulo_El Bolson.jpg' alt='15_Patagonia_flor de Lupulo_El Bolson'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-016_Patagonia_Vendimia_El Hoyo_Bodegas Weinert_Chubut.jpg' title='16_Patagonia_Vendimia_El Hoyo_Bodegas Weinert_Chubut'>
        <img src='/images/collections-thumbs/AYO/AYO-016_Patagonia_Vendimia_El Hoyo_Bodegas Weinert_Chubut.jpg' alt='16_Patagonia_Vendimia_El Hoyo_Bodegas Weinert_Chubut'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-017_Patagonia_Procesamiento de Frambuesas congeladas_ Gr.jpg' title='17_Patagonia_Procesamiento de Frambuesas congeladas_ Gr'>
        <img src='/images/collections-thumbs/AYO/AYO-017_Patagonia_Procesamiento de Frambuesas congeladas_ Gr.jpg' alt='17_Patagonia_Procesamiento de Frambuesas congeladas_ Gr'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-018_Patagonia_Fabricantes de chocolate artesanal_Esquel_.jpg' title='18_Patagonia_Fabricantes de chocolate artesanal_Esquel_'>
        <img src='/images/collections-thumbs/AYO/AYO-018_Patagonia_Fabricantes de chocolate artesanal_Esquel_.jpg' alt='18_Patagonia_Fabricantes de chocolate artesanal_Esquel_'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-019_Patagonia_Labor de artesano de madera_El Bolson.jpg' title='19_Patagonia_Labor de artesano de madera_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-019_Patagonia_Labor de artesano de madera_El Bolson.jpg' alt='19_Patagonia_Labor de artesano de madera_El Bolson'>
      </a>
      <a href='/images/collections/AYO_Artesanos-y-oficios/AYO-020_Patagonia_Labor de artesano de madera 2_El Bolson.jpg' title='20_Patagonia_Labor de artesano de madera 2_El Bolson'>
        <img src='/images/collections-thumbs/AYO/AYO-020_Patagonia_Labor de artesano de madera 2_El Bolson.jpg' alt='20_Patagonia_Labor de artesano de madera 2_El Bolson'>
      </a>
    </div>

 	     <!-- here goes main-content.php comp. -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>

<!-- triggering the whole thing -->

    <script src="js/blueimp-gallery.min.js"></script>

    <script>
      document.getElementById('links').onclick = function (event) {
      event = event || window.event;
      var target = event.target || event.srcElement,
      link = target.src ? target.parentNode : target,
      options = {index: link, event: event},
      links = this.getElementsByTagName('a');
      blueimp.Gallery(links, options);
      };
    </script>

    <footer> <!-- /container -->
	      <?php include "components/php/footer.php"; ?>
    </footer> <!-- /container -->
