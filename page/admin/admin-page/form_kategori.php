<?php
$koneksi = new mysqli("localhost", "root", "", "lautan_lembar");

// --- PROSES SIMPAN DATA ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id_genre   = trim($_POST['ID_genre']);
    $nama_genre = trim($_POST['nama_genre']);

    if (!empty($id_genre) && !empty($nama_genre)) {
        $koneksi->query("INSERT INTO genre (ID_genre, nama_genre) VALUES ('$id_genre', '$nama_genre')");
    }
}

// --- AMBIL DATA DARI DATABASE ---
$data_genre = $koneksi->query("SELECT * FROM genre ORDER BY ID_genre");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manajemen Genre</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg p-4 rounded-4 mb-4">
      <h3 class="mb-4 text-center">Tambah Genre</h3>

      <form action="" method="POST">
        <div class="mb-3">
          <label class="form-label">ID Genre</label>
          <input type="text" name="ID_genre" class="form-control" placeholder="Masukkan ID genre" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Nama Genre</label>
          <textarea name="nama_genre" class="form-control" rows="3" placeholder="Tuliskan nama genre"></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Simpan</button>
      </form>
    </div>

    <!-- tabel data genre -->
    <div class="card shadow-lg p-4 rounded-4">
      <h4 class="mb-3 text-center">Daftar Genre</h4>
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark text-center">
          <tr>
            <th>#</th>
            <th>ID Genre</th>
            <th>Nama Genre</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          if ($data_genre->num_rows > 0) {
              while ($row = $data_genre->fetch_assoc()) {
                  echo "<tr>
                          <td class='text-center'>$no</td>
                          <td class='text-center'>{$row['ID_genre']}</td>
                          <td class='text-center'>{$row['nama_genre']}</td>
                        </tr>";
                  $no++;
              }
          } else {
              echo "<tr><td colspan='3' class='text-center text-muted'>Belum ada data genre.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
