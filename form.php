<?php





?>

<!-- VISTA -->
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script>

</head>
<body>
<!-- aquí va un formulario -->
<div class="container-fluid">
<div class="col-md-10 col-xs-12">

<h1>Formulario PEX.2</h1>

</div>



<div class="col-md-10 col-xs-12">

<form name="altaCV" action="<?php $_SERVER['PHP_SELF'] ?>"
    method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $trabajado->getId() ?>">
    <div class="elemForm">
    <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-5">
    <input type="text" class="form-control" id="nombre" name="nombre"
    placeholder="Nombre" value="<?php echo $trabajado->getNombre() ?>">
    </div>
    </div>
    </div>
    
    <div class="elemForm">
    <div class="form-group">
    <label for="web" class="col-lg-2 control-label">Web (URL)</label>
    <div class="col-lg-5">
    <input type="url" class="form-control" id="web" name="web"
    placeholder="Web" value="<?php echo $trabajado->getWeb() ?>">
    </div>
    </div>
    </div>
    
    <div class="elemForm">
    <div class="form-group">
    <label for="mail" class="col-lg-2 control-label">E-mail:</label>
    <div class="col-lg-5">
    <input type="email" class="form-control" id="mail" name="mail"
    placeholder="E-mail" value="<?php echo $trabajado->getMail() ?>">
    </div>
    </div>
    </div>
    
    <div class="elemForm">
    <div class="form-group">
    <label for="tel" class="col-lg-2 control-label">Teléfono:</label>
    <div class="col-lg-5">
    <input type="number" class="form-control" id="tel" name="tel"
    placeholder="Teléfono" value="<?php echo $trabajado->getTel() ?>">
    </div>
    </div>
    </div>
    
    
    
    <input type="submit" value="Guardar">
    </form>
    
    </div>
    
    </div>
    
    </body>
    </html>
    