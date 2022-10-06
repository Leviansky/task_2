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
        <h4 class=subTitle>Detail produk yang dipesan</h4>

        <div class="tableWrapper">
          <table class="styled-table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mangga</td>
                <td>Buah</td>
                <td>Rp.10.000/kg</td>
                <td>2</td>
              </tr>
              <tr class="active-row">
                <td><?php echo $_GET["name"]; ?></td>
                <td><?php echo $_GET["type"]; ?></td>
                <td><?php echo $_GET["price"]; ?></td>
                <td><?php echo $_GET["total"]; ?></td>
              </tr>
              <!-- and so on... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>