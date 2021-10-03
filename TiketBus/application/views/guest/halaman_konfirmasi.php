<div class="container-fluid">
<div class="row justify-content-center my-5">
    <div class="col-md-5">
        <?php if($this->session->flashdata('pesan') !== null):?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('pesan') ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <b>Konfirmasi Pembayaran</b>
            </div>
            <div class="card-body">
                <form action='<?= base_url('cekKonfirmasi') ?>' method="POST">
                    <div class="form-group">
                        <label><b>Kode Pembayaran</b></label>
                        <input name="kode" type="text" class="form-control" placeholder="Masukan Kode Pembayaran">
                    </div>
                    <button class="btn btn-primary float-right"><b>Cek Kode Pembayaran</b></button>    

                </form>
            </div>
            <br>
            <?php if(isset($_GET['kode'])): ?>
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <b>Detail Pembayaran Anda</b>
                </div>
                <div class="card-body">

                    <h1 class="text-center">
                        <?php if($no_tiket->status === '0' || $no_tiket->status === '1'): ?>
                            <i class="fa fa-times text-danger"></i> Belum di Bayar
                        <?php elseif($no_tiket->status === '2'): ?>
                            <i class="fa fa-check text-success"></i> Sudah di Bayar
                        <?php endif; ?>
                    </h1>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No. Identitas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($detail as $dt): ?>

                                <tr>
                                    <td><?= $dt->nama  ?></td>
                                    <td><?= $dt->no_identitas  ?></td>
                                </tr>

                                    
                                <?php endforeach ?>

                            </tbody>
                        </table>

                        <div class='form-group form-inline'>
                            <div class='col-md-6'>
                                <label><b>Total Pembayaran Anda :</b></label>
                            </div>
                            <div class='col-md-6'>
                                <input class='form-control' readonly disabled type="text" value='<?= 'Rp. '.number_format($no_tiket->total_pembayaran, 0, ',',  '.') ?>'>
                            </div>
                        </div>

                        <?php if($no_tiket->status === '0'): ?>
                        <p class="text-danger">Silahkan Kirim Bukti Pembayaran Anda pada Kolo di Bawah.</p>
                        <?= form_open_multipart("kirimKonfirmasi"); ?>
                        <input type="hidden" name="no_pembayaran" value="<?= $no_tiket->no_pembayaran ?>">

                        <p>Foto Bukti Pembayaran</p>
                        <input id="foto" type="file" name="userfile" class="form-control" required>
                        <br>
                        <p class="d-none" id="pesan"></p>
                        <button id="btn_konfirmasi" type="submit" class="btn btn-block btn-dark">Kirim Bukti Pembayaran</button>
                        <?= form_close(); ?>
                        <?php else: ?>
                        <?php endif; ?>

                        <?php if($no_tiket->status === '2'): ?>
                            <form action="<?= base_url('print') ?>" method="post">
                                <input type="hidden" name="no_tiket" value="<?= $no_tiket->no_tiket ?>" >
                                <button type="submit" class="btn btn-danger btn-block">Print</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>