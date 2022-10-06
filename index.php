<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Mg2 lepi</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>

<body>
  <div class="container">
    <div class=containerWrap>
      <div class=leftContainer>

        <h1 class=title>Fahlevi Ikhsanur Rizal</h1>
        <img src="children.png" class="imageWrapper" />
      </div>

      <div class=rightContainer>
        <h4 class=subTitle>Masukan produk yang ingin dipesan</h4>

        <form class=loginForm action="details.php" method="get">
          Nama Produk: <input type="text" class=inputField name="name"><br>
          Jenis Produk: <input type="text" class=inputField name="type"><br>
          Harga Produk: <input type="text" class=inputField name="price"><br>
          Jumlah Produk: <input type="text" class=inputField name="total"><br>
          <input class="sign" type="submit">
        </form>
      </div>
    </div>
  </div>
</body>

</html>