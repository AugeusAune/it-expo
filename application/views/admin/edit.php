<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
            text-decoration: none;
        }

        p {
            text-align: justify;
            text-indent: 50px;
        }


        :root {

            font-size: 16px;
            --text-primary: #b6b6b6;
            --text-secondary: #ececec;
            --bg-primary: #23232e;
            --bg-secondary: #141418;

        }

        body {
            color: black;
            background-color: #fff;
        }

        body::-webkit-scrollbar {
            width: 0.25rem;
        }

        body::-webkit-scrollbar-track {
            background: #1e1e24;
        }

        body::-webkit-scrollbar-thumb {
            background: #6649b8;
        }

        main {
            margin-left: 15rem;
            padding: 1rem;
        }

        .navbar1 {
            display: block;
            width: 16rem;
            height: 100vh;
            position: fixed;
            background-color: var(--bg-primary);
            transition: ease .3s;
        }

        .navbar1 .logo {
            font-family: poppins;
        }

        .navbar-nav1 i {
            font-size: 30px;
        }

        .navbar-nav1 {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            text-align: center;
        }

        .nav-item1 {
            width: 100%;
        }

        .nav-link1 {
            display: flex;
            align-items: center;
            height: 5rem;
            color: var(--text-primary);
        }

        .link-text {
            display: block;
            margin-left: 1rem;
        }

        .nav-link1 i {
            margin: 0 1.2rem;
            color: whitesmoke;
        }

        .nav-item .nav-link1 .active {
            background-color: #6649b8;
        }

        .nav-link1:hover {
            background-color: #6649b8;
            text-decoration: none;
            color: whitesmoke;
        }

        .nav-link1 i:hover {
            color: whitesmoke;
        }



        .logo {
            font-weight: bold;
            width: 100%;
            color: var(--text-secondary);
            background: var(--bg-secondary);
            font-size: 1.5rem;
            letter-spacing: .3ch;
        }

        @media screen and (max-width:600px) {
            .navbar {
                bottom: 0;
                width: 100%;
                height: 4rem;
            }

            .logo {
                display: none;
            }

            .navbar:hover .link-text {
                display: none;
            }

            .navbar:hover {
                width: 100%;
            }

            .navbar-nav1 {
                flex-direction: row;
            }

            .nav-link1 {
                margin-left: auto;
                margin-top: 0;
            }

            .nav-item1 {
                display: flex;
            }

            main {
                margin-left: 5rem;
            }

        }
    </style>
</head>

<body>

    <nav class="navbar1">
        <ul class="navbar-nav1">
            <li class="logo">
                <a href="#" class="nav-link1">
                    <i class="fas fa-angle-double-right"> Admin </i>
                </a>
            </li>
            <li class="nav-item1">
                <a href="<?= base_url('admin') ?>" class="nav-link1 .active">
                    <i class="fas fa-home"></i>
                    <span class="link-text">Home</span>
                </a>
                <a href="<?= base_url('admin/komen') ?>" class="nav-link1">
                    <i class="fas fa-comment"></i>
                    <span class="link-text">Feed Back</span>
                </a>
                <a href="<?= base_url('admin/data') ?>" class="nav-link1">
                    <i class="fas fa-database"></i>
                    <span class="link-text">Data</span>
                </a>
                <a href="<?= base_url('admin/adddata'); ?>" class="nav-link1">
                    <i class="fas fa-plus"></i>
                    <span class="link-text">adddata</span>
                </a>
                <a href="<?= base_url('auth/logout'); ?>" class="nav-link1">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="link-text">logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="container mt-4">
            <h1 class="mb-3">Edit Data</h1>
            <div class="row">
                <div class="col-xl-7">
                    <form class="user" method="post" enctype="multipart/form-data">
                        <?= $this->session->flashdata('message'); ?>
                        <input type="hidden" name="id" value="<?= $editi['id']; ?>">
                        <div class="form-group row">
                            <label for="nama_cagar" class="col-sm-2 col-form-label">Nama Cagar</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_cagar" name="nama_cagar" value="<?= $editi['nama_cagar'] ?>">
                            <?= form_error('nama_cagar', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $editi['lokasi'] ?>">
                            <?= form_error('lokasi', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                            <select name="kategori" id="kategori" class="form-control">
                                <?php foreach($kategori as $kate ) : ?>
                                    <?php if( $kate === $editi['kategori']) : ?>
                                        <option value="<?= $kate; ?>" selected><?= $kate; ?></option>
                                        <?php else : ?>
                                          <option value="<?= $kate; ?>"><?= $kate; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $editi['provinsi'] ?>">
                            <?= form_error('provinsi', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">Gambar</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('./assets/img/' . $editi['gambar']) ?>" class="img-thumbnail" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" value="upload">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" id="deskripsi" style="min-height: 260px; max-height:1000rem; width:1000px"><?= $editi['deskripsi'] ?></textarea>
                            <?= form_error('deskripsi', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        
    <script>
        $('.custom-file-input').on('change' , function(){
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>

</body>

</html>