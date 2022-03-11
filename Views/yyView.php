<?php   
  $name=basename(__FILE__); 
  if(isset($_POST['actionSubmit'])){
      $nameController=str_replace("View","Controller",$name);   
      require("../Controllers/".$nameController);
      $nameClass=str_replace(".php","",$nameController);   
      $c = new $nameClass();
    }else{
      $name="Views/".$name;
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<link rel="stylesheet" href="">
</head>
<body>
	  <h2 class="text-center">Register</h2>
  <div class="card p-4 bg-primary">
<form action=<?php echo $name ?> method="POST">
    <div class="form-group text-left">
      <label for="Login">* Login:</label>
      <input type="text" name="Login" id="Login" class="form-control" required placeholder="Escriba su Login"/>
    </div>


    <div class="form-group text-left">
      <label for="Password1">* Password1:</label>
      <input type="password" name="Password" id="Password" class="form-control" placeholder="Escriba su Password" required />
    </div>

    <div class="form-group text-left">
      <label for="Password2">* Password2:</label>
      <input type="Password" name="Password2" id="Password2" class="form-control" placeholder="Repita su Password" required/>
    </div>

    <div class="form-group text-left">
      <label for="Email">* Email:</label>
      <input type="text" name="Email" id="Email" class="form-control" placeholder="Escriba su Email"/>
    </div>

    <div class="form-group text-left">
      <label for="enviar"></label>
      <input type="submit" value="Crear usuario"  class="btn btn-success" name="actionSubmit" role="button"/>
    </div>
</form>
</div><!--card-->

</body>
</html>
