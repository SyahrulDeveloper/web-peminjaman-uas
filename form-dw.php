<?php
require 'function.php';
if (!isset($_SESSION['session_nim'])) {
    header("location:login.php");
    exit();
}
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
            <a href="#" class="sidebar-link" align="center">
                <span><?php echo $_SESSION['session_nim'] ?></span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="kelas-dw.php" class="sidebar-link">
                    <i class="lni lni-calendar"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="form-dw.php" class="sidebar-link">
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
                <h2 style="color: white; ">Form Peminjaman Dewi Sartika</h2>
            </nav> 
                <main class="content px-3 py-4">
                <div class="container-fluid">



                    <div class="container-fluid">
                        <h1 class="mt-4">Data Peminjaman Kelas</h1>
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
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Mahasiswa</th>
                                            <th scope="col">Ruang Kelas</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Waktu_Mulai</th>
                                            <th scope="col">Waktu_Selesai</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Syahrul</td>
                                        <td>DW-402</td>
                                        <td>29/11/2024</td>
                                        <td>10:20</td>
                                        <td>12:00</td>
                                        <td>Untuk kelas pengganti etika</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button class="btn btn-warning">
                                                    <i data-feather="edit" style="width: 20px; height: 20px">
                                                    </i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i data-feather="trash" style="width: 20px; height: 20px">
                                                </i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                        <!-- Modal -->
                        <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                        >
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
                                aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="mb-3">
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    placeholder="Ruang Kelas"
                                    />
                                </div>
                                <div class="mb-3">
                                    <input
                                    type="datetime-local"
                                    class="form-control"
                                    id="exampleInputPassword1"
                                    placeholder="waktu"
                                    />
                                </div>
                                <div class="mb-3 form-check">
                                    <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="exampleCheck1"
                                    />
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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