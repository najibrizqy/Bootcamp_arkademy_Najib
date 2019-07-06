<!DOCTYPE html>
<html>
<head>
    <title>Hobby</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        .btn{
            color: #fff
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 5px 5px -4px gray;">
            <div class="container">
                <img src="img/logo.png" alt="Gambar tidak tersedia" width="90px" height="35px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <h5><a class="nav-item nav-link active mt-3 ml-3" href="javascript:void(0)">ARKADEMY BOOTCAMP</a></h5>
                    </div>
                </div>
            </div>
        </nav>
    </section>
        
    <section class="mt-5">
        <div class="container">
            <button type="button" class="btn btn-warning float-right mb-3 pl-4 pr-4" data-toggle="modal" data-target="#modal-tambah">ADD</button>

            <!-- Modal Tambah Data -->
            <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered flex">
                <thead>
                    <th>Name</th>
                    <th>Hobby</th>
                    <th>Category</th>
                    <th width="150px;">Action</th>
                </thead>
                <tbody>
                <?php 
                    include "db/koneksi.php";
                    $data = NEW Bootcamp();
                    $data->connect();
                    $data->sql("SELECT nama.id, nama.name as nama, hobi.name as hobi_name, kategori.name as kategory_name FROM nama INNER JOIN hobi ON nama.id_hobby = hobi.id INNER JOIN kategori ON nama.id_category = kategori.id");

                    $no=1;
                    while($result = $data->collectData()){
                        echo"
                            <tr>
                                <td>".$result['nama']."</td>
                                <td>".$result['hobi_name']."</td>
                                <td>".$result['kategory_name']."</td>
                                <td>
                                    <button type='button' class='btn btn-danger' title='Hapus'><span class='fa fa-close'></span></button>
                                    <button type='button' class='btn btn-info' title='Ubah'><span class='fa fa-pencil'></span></button>
                                </td>
                            </tr>
                          ";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
</html>