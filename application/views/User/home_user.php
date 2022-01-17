<div class="konten_user1" id="ku1">

     <div class="users1">
      <h1>Gejala penyakit seperti apa yang terlihat pada ikan Guppy mu?</h1>
      <h2>Yuk pilih gejala dibawah ini !</h2>
    </div>

    <div class="section section-features" style="padding-top:30px;">
  <div class="container">
    <div class="row">
      <form action="<?= base_url('Diagnosa_penyakit/hasil'); ?>" method="POST">
        <div class="boxes">
          <table>
            <?php foreach ($gejala as $g) : ?>
              <tr>
                <td>
                  <input type="checkbox" id="<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>">
                </td>
                <td colspan="2" style ="color:white;">
                  <?= $g['kode_gejala']; ?> | Apakah <?= $g['nama_gejala']; ?> ? 
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
          <br>
            <button type="submit">Simpan</button>
     
        </div>
      </form>
    </div>
  </div>
  </div>



</div>

<div class="modal modal-animated--zoom-in" id="pakar">
    <a href="#searchModalDialog" class="modal-overlay close-btn" aria-label="Close"></a>
    <div class="modal-content" role="document">
        <div class="modal-header"><a href="#components" class="u-pull-right" aria-label="Close"><span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 fa-wrapper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span></a>
            <div class="modal-title">Expert Information</div>
        </div>
        <div class="modal-body">
            <div class="r">
                <h3 class="font-alt font-light u-text-center">Perkenalkan Pakar Kami !</h3></div>
            <div class="space"></div>
            <div class="pakarinfo">
             <h4> Nama	: <br> <span style="font-size:20px;">Ecko jaya iwak</span> </h4>
             <h4>Institusi tempat bekerja	: <br> <span style="font-size:20px;" >Ecko jaya farm</span> </h4>
             <h4>Bidang pekerjaan/ keahlian	: <br> <span style="font-size:20px;"> Peternak ikan hias guppy </span> </h4>
             <h4>Pengalaman bekerja (tahun)	: <br> <span style="font-size:20px;">3 Tahun</span> </h4>
             <h4>Penghargaan yang pernah diraih	: <br>
                <ol style="font-size:20px;">
                    <li>juara 2 kontes kemerdekaan sleman.</li>
                    <li>juara 1 & 2 kontes nasional bogor.</li>
                    <li>juara 1 kontes guppy batam.</li>
                </ol></h4>
             <h4>Sertifikasi yang dimiliki	: <br> <span style="font-size:20px;">Sertifikat farm support</span></h4>
             <a href="https://wa.link/bw7nps">
                    <button class="btn-info btn-small u-inline-block">KONTAK PAKAR</button></a>
            </div>
             
            </div>
        </div>
        <div class="modal-footer">
          
        </div>
</div>

<div class="modal modal-animated--zoom-in" id="tim">
    <a href="#searchModalDialog" class="modal-overlay close-btn" aria-label="Close"></a>
    <div class="modal-content" role="document">
        <div class="modal-header"><a href="#components" class="u-pull-right" aria-label="Close"><span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 fa-wrapper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span></a>
            <div class="modal-title">Team Information</div>
        </div>
        <div class="modal-body">
            <div class="r">
                <h3 class="font-alt font-light u-text-center">Perkenalkan Tim Kami!</h3></div>
            <div class="space"></div>
            <div class="pakarinfo">
             <h4> Halo Teman Teman ! </h4>
             <h5>Perkenalkan kami tim proyek sistem pakar Guppyku , 
                 kami adalah mahasiswa aktif teknik informatika <br>
                 universitas multimedia nusantara. Sistem pakar ini kami buat dan kami rancang <br>
                 untuk keperluan memenuhi tugas akhir mata kuliah sistem pakar kami.</h5>
                 <br>
             <h4>Informasi Anggota Tim 	: <br>
                <ol style="font-size:20px;">
                    <li>Benny Septiawan Salim – 00000034748</li>
                    <li>Gracia Angelica N – 00000028059</li>
                    <li>Jonathan Christian Adif Sugiarto – 00000034563</li>
                </ol></h4>
             <br>
                <h4>Terimakasih telah menggunakan sistem pakar kami !</h4>
         
            </div>
             
            </div>
        </div>
        <div class="modal-footer">
          
        </div>
</div>

