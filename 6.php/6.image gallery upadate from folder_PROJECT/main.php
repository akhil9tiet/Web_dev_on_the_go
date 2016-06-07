    <!DOCTYPE html>
        <html>
        <head>
            <title>Picking images from a directory</title>
            <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        </head>

    <body>

    <!--.............image show from a file on local computer..............-->
    <section class="container">
        <div class="row">

       <?php
        $directory ='images'; //folder name
        if($handle = opendir($directory. '/')){
            while($file= readdir($handle)){
                if($file!= '.' && $file!= '..'){
                    echo '<div class="col-sm-6 col-md-4">
                    <div class= "thumbnail">
                    <img src="'.$directory.'/'.$file.'">'.$file.'</a></div></div>';
                }
            }
        }
        ?> 
        </div>
        <div class="row text-center">
          <a class="btn btn-secondary" href="#">View Complete Catalogue</a>
        </div>
      </section>

    </body>
    </html>