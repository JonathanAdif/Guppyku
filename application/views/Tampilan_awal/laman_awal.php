<div class="konten1">
    <div class="isi1">
      <h1>Ikan <span id="guppy">Guppy</span> Kamu Sakit <span id="tanda">?</span></h1>
      <h2>Yuk kenali penyakitnya bersama kami!</h2>
    </div>
   </div>

   <div class="konten2">
       <h1>Tentang Guppy</h1>
       <div class="isi2"> 
           <img src="assets/gambar/gb1.png" alt="gambar1">
           <p id="g1">Ikan hias guppy yang memiliki nama latin poecilia reticulata merupakan Ikan hias air tawar yang <br>
                      sangat terkenal di dunia karena keindahan corak dan warnanya yang cemerlang  serta bervariasi. <br>
                      ikan guppy adalah ikan yang berukuran kecil , mudah beradaptasi dan mudah berkembangbiak. Awalnya, <br>
                      ikan guppy ini merupakan ikan liar yang banyak ditemukan hidup di parit dan selokan. Namun, seiring <br>
                      waktu berlalu ikan guppy kini banyak di ternakan dan menjadi ladang bisnis bagi penikmat ikan hias.</p>
           <br>
       </div>
       <div class="isi3">
           <img src="assets/gambar/gb2.png" alt="gambar2">
           <p id="g2">Pemeliharaan ikan guppy tergolong gampang gampang sulit nih sob! mulai dari  pemeliharaan air, <br>
                      Pemilihan pakan sampai pemilihan wadah pemeliharaan perlu diperhatikan loh dan yang tidak kalah <br>
                      Penting untuk kita pahami sebelum memelihara ikan ini adalah jenis jenis penyakitnya dan langkah <br>
                      pengobatan serta pencegahan nya sob! agar ikan guppy kita sehat sehat selalu nih sob ! Nah bagi kalian <br>
                      yang masih pemula atau kalian yang belum paham mengenai penanganan dan pencegahan  penyakit <br>
                      ikan guppy,  Yuk ! cek sistem kami berikut ini :</p>
       </div>
       <br>

      <div class="isi4">
       <a href="#basic-modal2" class="utb utb-OLR">Sistem Pakar Penyakit Guppy</a>
      </div>

   </div>
    

   <div class="about" id="pf">
       <h1>Developers</h1>
       <div class="developer animated bounceIn" >
           <div class="profil1">
               <div class="tile m-0 level">
                   <div class="tile__icon">
                       <figure class="avatar avatar--xlarge"><img src="assets/gambar/adif.jpg"></figure>
                   </div>
                   <div class="tile__container">
                       <p class="tile__title m-0">Jonathan Adif</p>
                       <p class="tile__subtitle m-0"><a href="https://www.instagram.com/jonathanadif/" target="_blank">@jonathanadif</a></p>
                   </div>
               </div>
           </div>
   
           <div class="profil2">
               <div class="tile m-0 level">
                   <div class="tile__icon">
                       <figure class="avatar avatar--xlarge"><img src="assets/gambar/cici2.jpg"></figure>
                   </div>
                   <div class="tile__container">
                       <p class="tile__title m-0">Gracia Angelica</p>
                       <p class="tile__subtitle m-0"><a href="https://www.instagram.com/grrrracia/" target="_blank">@grrrracia</a></p>
                   </div>
               </div>
           </div>
   
           <div class="profil3">
               <div class="tile m-0 level">
                   <div class="tile__icon">
                       <figure class="avatar avatar--xlarge"><img src="assets/gambar/beni.jpg"></figure>
                   </div>
                   <div class="tile__container">
                       <p class="tile__title m-0">Benny Salim</p>
                       <p class="tile__subtitle m-0"><a href="!#">@nate_dumlao</a></p>
                   </div>
               </div>
           </div>
       </div>
      

   </div>

    <!-- modal form admin login -->
    <!-- sementara ditiadakan -->
   <?php echo form_open('admin_conn/admlogin',''); ?>
   <div class="modal modal-animated--zoom-in" id="basic-modal">
        <a href="#searchModalDialog" class="modal-overlay close-btn" aria-label="Close"></a>
        <div class="modal-content" role="document">
            <div class="modal-header"><a href="#components" class="u-pull-right" aria-label="Close"><span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 fa-wrapper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span></a>
                <div class="modal-title">Knowledge Base - Login Admin</div>
            </div>
            <div class="modal-body">
                <div class="r">
                    <h3 class="font-alt font-light u-text-center" style=" font-family: 'Mochiy Pop P One', sans-serif;">Selamat Datang , Admin!</h3></div>
                <div class="space"></div>
               
                <!-- email -->
                <div class="row level">
                    <div class="col-xs-3 level-item">
                        <p class="m-0">Email:</p>
                    </div>
                    <div class="col-xs-9 level-item"><input type="email" name="email" placeholder="Masukkan Email Anda"></div>
                    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
                </div>

                <!-- Password -->
            <div class="row level">
                <div class="col-xs-3 level-item">
                 <p class="m-0">Password:</p>
            </div>
                 <div class="col-xs-9 level-item"><input type="password"  name="password"  placeholder="Masukkan Password"></div>
                 <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
                    </div>

            </div>
            <div class="modal-footer">
                <div class="form-section u-text-right">
                    <!-- <a href="#components">
                        <button class="btn btn-small u-inline-block">Cancel</button>
                    </a> -->
                    <a href="#components">
                        <button  type="submit" class="btn-info btn-small u-inline-block">Confirm</button>
                    </a>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>

    <!-- modal form user login -->

    <?php echo form_open('user_conn/usrlogin',''); ?>
   <div class="modal modal-animated--zoom-in" id="basic-modal2">
        <a href="#searchModalDialog" class="modal-overlay close-btn" aria-label="Close"></a>
        <div class="modal-content" role="document">
            <div class="modal-header"><a href="#components" class="u-pull-right" aria-label="Close"><span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 fa-wrapper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span></a>
                <div class="modal-title">Sistem Pakar - Login User</div>
            </div>
            <div class="modal-body">
                <div class="r">
                    <h3 class="font-alt font-light u-text-center" style=" font-family: 'Mochiy Pop P One', sans-serif;">Selamat Datang , Guppiers!</h3></div>
                    <h5 style="font-size:15px; padding-left:15px;">Belum memiliki akun? yuk <a href="#regis-modal">Register!</a></h5>
                <div class="space"></div>
               
                <!-- email -->
                <div class="row level">
                    <div class="col-xs-3 level-item">
                        <p class="m-0">Email:</p>
                    </div>
                    <div class="col-xs-9 level-item"><input type="email" name="email" placeholder="Masukkan Email Anda"></div>
                    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
                </div>

                <!-- Password -->
            <div class="row level">
                <div class="col-xs-3 level-item">
                 <p class="m-0">Password:</p>
            </div>
                 <div class="col-xs-9 level-item"><input type="password"  name="password"  placeholder="Masukkan Password"></div>
                 <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
                    </div>

            </div>
            <div class="modal-footer">
                <div class="form-section u-text-right">
                    <!-- <a href="#components">
                        <button class="btn btn-small u-inline-block">Cancel</button>
                    </a> -->
                    <a href="#components">
                        <button  type="submit" class="btn-info btn-small u-inline-block">Confirm</button>
                    </a>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>

     <!-- modal form user register -->

    <?php echo form_open('user_conn/usrregis',''); ?>
   <div class="modal modal-animated--zoom-in" id="regis-modal">
        <a href="#searchModalDialog" class="modal-overlay close-btn" aria-label="Close"></a>
        <div class="modal-content" role="document">
            <div class="modal-header"><a href="#components" class="u-pull-right" aria-label="Close"><span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 fa-wrapper" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg></span></a>
                <div class="modal-title">Register</div>
            </div>
            <div class="modal-body">
                <div class="r">
                    <h3 class="font-alt font-light u-text-center" style=" font-family: 'Mochiy Pop P One', sans-serif;">Selamat Datang , mari mendaftar!</h3></div>
                <div class="space"></div>
               

                <!-- nama-->
                <div class="row level">
                    <div class="col-xs-3 level-item">
                        <p class="m-0">Nama:</p>
                    </div>
                    <div class="col-xs-9 level-item"><input type="text" name="nama" placeholder="Masukkan Nama Anda"></div>
                    <?php echo form_error('nama', '<div class="text-danger"><small>', '</small></div>');?>
                </div>



                <!-- email -->
                <div class="row level">
                    <div class="col-xs-3 level-item">
                        <p class="m-0">Email:</p>
                    </div>
                    <div class="col-xs-9 level-item"><input type="email" name="email" placeholder="Masukkan Email Anda"></div>
                    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
                </div>



                <!-- Password -->
            <div class="row level">
                <div class="col-xs-3 level-item">
                 <p class="m-0">Password:</p>
            </div>
                 <div class="col-xs-9 level-item"><input type="password"  name="password"  placeholder="Masukkan Password"></div>
                 <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
                    </div>


                    <!-- Nomor telp-->
                <div class="row level">
                    <div class="col-xs-3 level-item">
                        <p class="m-0">No.Telpon:</p>
                    </div>
                    <div class="col-xs-9 level-item"><input type="no_telp" name="no_telp" placeholder="Masukkan Nomor Telephone Anda"></div>
                    <?php echo form_error('no_telp', '<div class="text-danger"><small>', '</small></div>');?>
                </div>




            </div>
            <div class="modal-footer">
                <div class="form-section u-text-right">
                    <!-- <a href="#components">
                        <button class="btn btn-small u-inline-block">Cancel</button>
                    </a> -->
                    <a href="#components">
                        <button  type="submit" class="btn-info btn-small u-inline-block">Confirm</button>
                    </a>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
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
