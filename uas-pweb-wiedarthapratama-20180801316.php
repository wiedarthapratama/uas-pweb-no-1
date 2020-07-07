<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <title>UAS - PWEB - Wied Artha Pratama - 20180801316</title>
</head>

<body>
    <div class="container"> <br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">UAS - Pemrograman Web - Wied Artha Pratama - 20180801316 - No 1 - Perhitungan THR</h5>
                <p class="card-text">source: </p>
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Golongan</th>
                            <th>Masa Kerja</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php                             
                            $no=1;                             
                            $golongan=array("A","B","C","D");                             
                            $kerja=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);                             
                            for ($i=0; $i < 100; $i++) {  
                        ?>
                        <?php                                 
                            $newgolongan = $golongan[rand(0, count($golongan) - 1)];                                 
                            $newkerja = $kerja[rand(0, count($kerja) - 1)] ;                                 
                            $gapok = $newkerja*2000;                                 
                            $thr = 0.20*$gapok;                                 
                            $gaber = $gapok+$thr;                             
                        ?>
                        <tr>
                            <td><?=$no?></td>
                            <td>Nama <?=$no?></td>
                            <td><?=$newgolongan?></td>
                            <td><?=$newkerja?></td>
                            <td>
                                <!-- Button trigger modal --> <button type="button" class="btn btn-primary btn-sm"
                                    data-toggle="modal" data-target="#exampleModal<?=$no?>"> Hitung THR </button> </td>
                        </tr> <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?=$no?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModal<?=$no?>Label" ariahidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modaltitle" id="exampleModal<?=$no?>Label">Hasil Perhitungan THR</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span ariahidden="true">&times;</span> </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group"> <label for="">Nama</label> <input type="text" readonly
                                                value="Nama <?=$no?>" class="form-control"> </div>
                                        <div class="form-group"> <label for="">Golongan</label> <input type="text"
                                                readonly value="<?=$newgolongan?>" class="form-control">
                                        </div>
                                        <div class="form-group"> <label for="">Masa Kerja</label> <input type="text"
                                                readonly value="<?=$newkerja?> Tahun" class="form-control"> </div>
                                        <div class="form-group"> <label for="">Gapok</label> <input type="text" readonly
                                                value="<?=number_format($gapok)?>" class="form-control"> </div>
                                        <div class="form-group"> <label for="">THR</label> <input type="text" readonly
                                                value="<?=number_format($thr)?>" class="form-control"> </div>
                                        <div class="form-group"> <label for="">Gaji Besih</label> <input type="text"
                                                readonly value="<?=number_format($gaber)?>" class="form-control"> </div>
                                    </div>
                                    <div class="modal-footer"> <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button> </div>
                                </div>
                            </div>
                        </div>
                        <?php                             
                            $no++;                             
                        }                          
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>         
        $('#datatable').DataTable();     
    </script>
</body>

</html>