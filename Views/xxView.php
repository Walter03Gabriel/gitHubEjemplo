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
	  <h1 class="text-center">Login</h1>
        <div class="card p-4 bg-light">
  <form action=<?php echo $name ?> method="POST">
    <div class="form-group text-left">
      <label for="Login">Login:</label>
      <input type="text" name="Login" class="form-control">
    </div>
    <div class="form-group text-left">
      <label for="Password">Password:</label>
      <input type="Password" name="Password" class="form-control">
    </div>
    <div class="form-group text-left">
      
      <input type="submit" value="Verify"   id="Verify"  name="actionSubmit" class="btn btn-success"/>
    </div>
  </form>
</div><!--card-->

</body>
</html>
