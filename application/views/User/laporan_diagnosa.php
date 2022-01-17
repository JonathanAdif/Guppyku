<div class="lap_diagnosa" style="height: 900px; max-width: 1170px; padding: 0 15px; margin: 0 auto;">


<section class="ftco-section ftco-no-pb goto-here" id="resume-section" style="padding-top:100px;">
    <div class="container">
      <div class="row">
        <div class="col-lg">

          <div class="page three">
            <h2 class="heading" style="color:white;">Hasil Diagnosa</h2>
            <div class="row progress-circle mb-5" style="color:white;">
              <?php foreach ($diagnosa as $diag) : ?>
                <?php
                if ($diag['id_penyakit'] == 1) {
                  $diag['id_penyakit'] = 'White Spot';
                } elseif ($diag['id_penyakit'] == 2) {
                  $diag['id_penyakit'] = 'Velvet';
                } elseif ($diag['id_penyakit'] == 3) {
                  $diag['id_penyakit'] = 'Fin Rot';
                } elseif ($diag['id_penyakit'] == 4) {
                  $diag['id_penyakit'] = 'Columnaris & Jamur Mulut';
                } elseif ($diag['id_penyakit'] == 5) {
                  $diag['id_penyakit'] = 'Dropsy';
                } elseif ($diag['id_penyakit'] == 6) {
                  $diag['id_penyakit'] = 'Insang Bengkak Terengah';
                }


                ?>
                <div class="col-lg-4 mb-4">
                  <div class="bg-white rounded-lg shadow p-2">
                    <h2 class="h5 text-center mb-4"><?= $diag['id_penyakit']; ?></h2>
                    <!-- Progress bar -->
                    <div class="progress mx-auto" data-value='<?= $diag['hasil_probabilitas'] * 100; ?>'>
                      <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold"><?= $diag['hasil_probabilitas'] * 100; ?><sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                  </div>
                </div>
              <?php endforeach; ?>
            </div>



            <div class="row" style="color:white;">
              <h4>Berdasarkan Gejala-Gejala yang telah dipilih,maka ikan Guppy anda mengalami:</h4>
              <br>
              <?php foreach ($tertinggi as $tinggi) : ?>
                <?php
                if ($tinggi['id_penyakit'] == 1) {
                  $tinggi['id_penyakit'] = 'White Spot';
                } elseif ($tinggi['id_penyakit'] == 2) {
                  $tinggi['id_penyakit'] = 'Velvet';
                } elseif ($tinggi['id_penyakit'] == 3) {
                  $tinggi['id_penyakit'] = 'Fin Rot';
                } elseif ($tinggi['id_penyakit'] == 4) {
                  $tinggi['id_penyakit'] = 'Columnaris & Jamur Mulut';
                } elseif ($tinggi['id_penyakit'] == 5) {
                  $tinggi['id_penyakit'] = 'Dropsy';
                } elseif ($tinggi['id_penyakit'] == 6) {
                    $tinggi['id_penyakit'] = 'Insang Bengkak Terengah';
                }

                ?>
                <div class="col-md-5 animate-box">
            
                    <h2><b><?= $tinggi['id_penyakit']; ?></b></h2>
                  
                </div>
              <?php endforeach; ?>
            </div>
            <br>

            <?php foreach ($detail as $det) : ?>
              <div class="row d-flex center">
                <div class="col-md-8 d-flex ftco-animate">
                  <div class="blog-entry justify-content-end">
                    
                    </a>
                    <div class="text mt-3 float-right d-block">
                      <h4 style="color:white;">Solusi</h4>
                      <p style="color:white;"><?= $det['solusi']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>







</div>