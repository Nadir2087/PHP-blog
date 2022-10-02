
<?php // require_once 'conect.php';

$connect = mysqli_connect('localhost', 'root', '', 'PHP-blog');

$goods = mysqli_query($connect, "SELECT * FROM `admin`");
$goods = mysqli_fetch_assoc($goods);
// var_dump($goods);


// print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$error = '';


if($email == $goods['email'] && $password == $goods['password']){
    header("Location:/admin.php");
}else{
    $error = 'Вы неправельно ввели почту или пороль!';
    // header("Location:/reg.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body class="text-center">
  <h2 style="color:red"><?= $error?></h2>
<main class="form-signin w-25 m-auto">
  <form action="reg.php" method="post">
    <h1>Blog</h1>

    <h2 class="h3 mb-3 fw-normal">Please sign in</h2>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</main>
</body>
</html>