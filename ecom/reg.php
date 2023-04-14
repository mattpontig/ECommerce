<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PontigShop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
  <body>
  <?php include "navbar.php" ?>
    <div class="container mt-5">
      <h1 class="text-center">Registrazione</h1>
      <form>
        <div class="form-group">
          <label for="nome">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Inserisci il tuo nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password">
        </div>
        <div class="form-group">
          <label for="confirmPassword">Conferma Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Conferma la tua password">
        </div>
        <button type="submit" class="btn btn-primary">Registra</button>
      </form>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>