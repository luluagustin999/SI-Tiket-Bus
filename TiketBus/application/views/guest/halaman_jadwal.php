<div class="container-fluid my-3">
    <div class="row"> 
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-white text-center"><b>Jadwal Bus</b></div>
          <div class="card-body">
            <table class="table table-condensed table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Bus</th>
                  <th>Asal</th>
                  <th>Tujuan</th>
                  <th>Tanggal Berangkat</th>
                  <th>Tanggal Sampai</th>
                  <th>Kelas</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($jadwal as $jd): ?>
                <tr>
                  <td><?= $no++  ?></td>
                  <td><?= $jd->nama_bus  ?></td>
                  <td><?= $jd->ASAL  ?></td>
                  <td><?= $jd->TUJUAN  ?></td>
                  <td><?= $jd->tgl_berangkat  ?></td>
                  <td><?= $jd->tgl_sampai  ?></td>
                  <td><?= $jd->kelas  ?></td>

                <?php endforeach ?>
                
              </tbody>
            </table>
          </div>
          
        </div>
      </div>