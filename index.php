<head>
  <link href="style.scss" rel="stylesheet">
  <link href="style2.scss" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="bg">


</div>
<?php
	if (empty($_POST)) {
?>
  <main class="form-signin">
    <h1 class="h5">Вход в социофобную сеть</h1>
    <div class="center7">
      <h1>Меня забыли спросить</h1>
    </div>
    <form action="" method="post">


      <div class="form-floating">
        <input name="name" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required >
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password" required >
        <label for="floatingPassword">Password</label>
      </div>

      
  
</div>
        
      </div>
      <button class="w-100 btn btn-lg" type="submit">Подключиться </button>
    </form>
          <p class="copyright">&copy; 2024</p>
  </main>

  <?php
	} else {
		echo  "Emailadress: " . $_POST['name'] . "<br>\n";
    echo "Пароль: " . $_POST['pass'];
	}
?>


