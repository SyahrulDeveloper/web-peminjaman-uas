<?php
require 'function.php';
if (!isset($_SESSION['session_nim'])) {
    header("location:login.php");
    exit();
}
$form_peminjaman_fl = query1("SELECT * FROM form_peminjaman_kelas_fl");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Form Peminjaman</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menu</a>
                </div>
            </div>
            <div class="d-flex profile-img justify-content-center">
                <div class="toggle-btn" type="button">
                    <i data-feather="user" class="img-fluid rounded-circle" style="width: 80px; color: white"></i>
                </div>
            </div>
            <a href="#" class="sidebar-link" style="text-align: center;">
                <span><?php echo $_SESSION['session_nim']; ?></span>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="kelas-fiklab.php" class="sidebar-link">
                        <i class="lni lni-calendar"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="info-peminjaman-fl.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Info Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="form-fl.php" class="sidebar-link">
                        <i class="lni lni-add-files"></i>
                        <span>Form Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Kembali</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3" style="background: linear-gradient(to right, #ffc107 , #ff4500);">
                <h2 style="color: white; ">Form Peminjaman FIKLAB</h2>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <h3 class="mt-4">Kelas Yang Kamu Pinjam</h3>
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: #ff8104">
                                    Form Peminjaman Kelas
                                </button>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Ruang Kelas</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($form_peminjaman_fl as $row_fl) : ?>
                                            <?php if ($row_fl["nim"] == $_SESSION['session_nim']): ?>
                                                <tr>
                                                    <td><?= $row_fl["nama_mahasiswa"] ?></td>
                                                    <td><?= $row_fl["jurusan"] ?></td>
                                                    <td><?= $row_fl["ruang_kelas"] ?></td>
                                                    <td><?= $formatdate = date('d/m/Y', strtotime($row_fl["tanggal"])) ?></td>
                                                    <td><?= $row_fl["waktu"] ?></td>
                                                    <td><?= $row_fl["deskripsi"] ?></td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group">
                                                            <!-- Tombol Edit -->
                                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $row_fl['id_fl'] ?>">
                                                                <i data-feather="edit" style="width: 20px; height: 20px"></i>
                                                            </button>
                                                            <!-- Tombol Hapus -->
                                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $row_fl['id_fl'] ?>">
                                                                <i data-feather="trash" style="width: 20px; height: 20px"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal Edit untuk setiap baris -->
                            <?php foreach ($form_peminjaman_fl as $row_fl) : ?>
                                <?php if ($row_fl["nim"] == $_SESSION['session_nim']): ?>
                                    <div class="modal fade" id="editModal<?= $row_fl['id_fl'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Formulir Peminjaman</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST" action="">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id_edit_fl" value="<?= $row_fl['id_fl'] ?>">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control" name="nama_mhs_fl" value="<?= $row_fl['nama_mahasiswa'] ?>" placeholder="Nama Mahasiswa" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <select name="jurusan" value="<?= $row_fl['jurusan'] ?>" class="form-control w-100" required>
                                                                <option value="">Pilih Jurusan</option>
                                                                <?php
                                                                $query = mysqli_query($koneksi, "SELECT * FROM prodi");
                                                                while ($data = mysqli_fetch_assoc($query)) {
                                                                    $selected = ($data['jurusan'] == $row_fl['jurusan']) ? 'selected' : '';
                                                                    echo "<option value='{$data['jurusan']}' $selected>{$data['jurusan']}</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <select name="ruang_kelas_fl" value="<?= $row_fl['ruang_kelas'] ?>" class="form-control w-100" required>
                                                                <option value="">Pilih Kelas</option>
                                                                <?php
                                                                $query = mysqli_query($koneksi, "SELECT * FROM kelas_fl");
                                                                while ($data = mysqli_fetch_assoc($query)) {
                                                                    $selected = ($data['ruang_kelas'] == $row_fl['ruang_kelas']) ? 'selected' : '';
                                                                    echo "<option value='{$data['ruang_kelas']}' $selected>{$data['ruang_kelas']}</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="date" class="form-control" name="tanggal_fl" value="<?= $row_fl['tanggal'] ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" name="waktu_fl" value="<?= $row_fl['waktu'] ?>" placeholder="Waktu" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" name="deskripsi_fl" value="<?= $row_fl['deskripsi'] ?>" placeholder="Deskripsi" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary" name="update_form_fl">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <!-- Modal Hapus untuk setiap baris -->
                            <?php foreach ($form_peminjaman_fl as $row_fl) : ?>
                                <?php if ($row_fl["nim"] == $_SESSION['session_nim']): ?>
                                    <div class="modal fade" id="deleteModal<?= $row_fl['id_fl'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Konfirmasi Hapus</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus formulir peminjaman ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="POST" action="">
                                                        <input type="hidden" name="id_hapus_fl" value="<?= $row_fl['id_fl'] ?>">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger" name="hapus_form_fl">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Modal Insert -->
                    <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        Silahkan isi data di bawah
                                    </h1>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="POST">
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="nama_mhs_fl"
                                                id="exampleInputPassword1"
                                                placeholder="Nama Mahasiswa" />
                                        </div>
                                        <div class="mb-3">
                                            <select name="jurusan" value="<?= $row_fl['jurusan'] ?>" class="form-control w-100" required>
                                                <option value="">Pilih Jurusan</option>
                                                <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM prodi");
                                                while ($data = mysqli_fetch_assoc($query)) {
                                                    echo "<option value='{$data['jurusan']}'>{$data['jurusan']}</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <select type="text" name="ruang_kelas_fl" value="<?= $row_fl["ruang_kelas"] ?>" class="form-control w-100" required>
                                                <option value="">Pilih Kelas</option>
                                                <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM kelas_fl");
                                                while ($data = mysqli_fetch_assoc($query)) {
                                                    echo "<option value=$data[ruang_kelas]> $data[ruang_kelas] </option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <input
                                                type="date"
                                                class="form-control"
                                                name="tanggal_fl"
                                                id="exampleInputPassword1"
                                                placeholder="Tanggal" />
                                        </div>
                                        <div class="mb-3">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="waktu_fl"
                                                id="exampleInputPassword1"
                                                placeholder="Waktu" />
                                        </div>
                                        <div class="mb-3">
                                            <input
                                                type="text"
                                                name="deskripsi_fl"
                                                class="form-control"
                                                id="exampleInputPassword1"
                                                placeholder="Deskripsi" />
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="pinjam_kelas_fl">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>

</html>