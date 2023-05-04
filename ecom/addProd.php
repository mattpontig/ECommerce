<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PontigShop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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
      <h1 class="text-center">Add product</h1>
      <form action="chk/chkAddProd.php" method="post" enctype="multipart/form-data" >
        <div class="form-group">
          <label for="nome">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Inserisci il nome">
        </div>
        <div class="form-group">
          <label for="text">Descrizione</label>
          <input type="text" class="form-control" name="desc" placeholder="Inserisci la descrizione">
        </div>
        <div class="form-group">
          <label for="text">Quantità</label>
          <input type="number" class="form-control" name="quant" placeholder="Inserisci la quantità">
        </div>
        <div class="form-group">
          <label for="text">Prezzo</label>
          <input type="number" class="form-control" name="prezzo" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
          <label for="file">Categoria</label>
          <select name='cmbRep'>"
            <?php include "home/getCatSelect.php" ?>
          </select>
        </div>
        <div class="form-group">
          <label for="file">Immagine</label>
          <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>