<?php
class M_diagnosa extends CI_model
{
  // Mengosongkan tabel tmp_gejala sebelum digunakan
  public function kosongTmpGejala()
  {
    return $this->db->truncate('tmp_gejala');
  }

  // mengosongkan tabel tmp_final sebelum digunakan
  public function kosongTmpFinal()
  {
    return  $this->db->truncate('tmp_final');
  }

  // memasukkan gejala terpilih ke tabel tmp_gejala
  public function insertTmpGejala()
  {
    $gejala = $this->input->post('id_gejala');
    $membernya = $this->db->get_where('user', [
      'email' => $this->session->userdata('email')
    ])->row_array();
    $member = $membernya['id_user'];

    foreach ($gejala as $g) {
      $data = [
        'id_user' => $member,
        'id_gejala' => $g
      ];
      $this->db->insert('tmp_gejala', $data);
    }
  }

  // memasukkan ke tmp_final
  public function insertTmpFinal()
  {
    $query = "SELECT `tmp_gejala`.`id_gejala`,`tbl_pengetahuan`.`id_penyakit`,`tbl_pengetahuan`.`probabilitas`
    FROM `tbl_pengetahuan` JOIN `tmp_gejala` 
    ON `tmp_gejala`.`id_gejala` = `tbl_pengetahuan`.`id_gejala`";
    return $this->db->query($query)->result_array();
  }

  // Perhitungan tiap penyakit
  // Perhitungan penyakit  
  // Perhitungan Probabilitas setiap penyakit yang ada di tmp_final
  public function ProbP1()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 1);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    // Perhitungan hasil bayes penyakit 
    // (Prob kerusakan di tmp_final * prob di tabel penyakit)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 1);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  
  public function ProbP2()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 2);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 2);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }


 
  public function ProbP3()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 3);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
   
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 3);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  
  public function ProbP4()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 4);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
   
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 4);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }

  
  public function ProbP5()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 5);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }
    
    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 5);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }


  public function ProbP6()
  {
    $this->db->select('*');
    $this->db->from('tmp_final');
    $this->db->where('id_penyakit', 6);
    $prob = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($prob as $pr) {
      $jumlah = $jumlah * $pr->probabilitas;
    }

    // (Prob kerusakan di tmp_final * prob di tabel kerusakan)
    $this->db->select('*');
    $this->db->from('tbl_penyakit');
    $this->db->where('id_penyakit', 6);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      $hasilBayes = $jumlah * $rowku->probabilitas;
    }
    return $hasilBayes;
  }
  // akhir Perhitungan tiap penyakit


  // Update Hasil Probabilitas pada tmp_final
  public function hasilProbP1($P1)
  {
    $hasilP1 = ['hasil_probabilitas' => $P1];
    $this->db->where('id_penyakit', 1);
    $this->db->update('tmp_final', $hasilP1);
  }
  public function hasilProbP2($P2)
  {
    $hasilP2 = ['hasil_probabilitas' => $P2];
    $this->db->where('id_penyakit', 2);
    $this->db->update('tmp_final', $hasilP2);
  }
  public function hasilProbP3($P3)
  {
    $hasilP3 = ['hasil_probabilitas' => $P3];
    $this->db->where('id_penyakit', 3);
    $this->db->update('tmp_final', $hasilP3);
  }
  public function hasilProbP4($P4)
  {
    $hasilP4 = ['hasil_probabilitas' => $P4];
    $this->db->where('id_penyakit', 4);
    $this->db->update('tmp_final', $hasilP4);
  }
  public function hasilProbP5($P5)
  {
    $hasilP5 = ['hasil_probabilitas' => $P5];
    $this->db->where('id_penyakit', 5);
    $this->db->update('tmp_final', $hasilP5); 
  }
  public function hasilProbP6($P6)
  {
    $hasilP6 = ['hasil_probabilitas' => $P6];
    $this->db->where('id_penyakit', 6);
    $this->db->update('tmp_final', $hasilP6);
  }
  // Akhir Update Hasil Probabilitas pada tmp_final


  // Menampilkan Hasil diagnosa 

  // (Mendapatkan 3 penyakit dengan probabilitas yang terbesar)
  public function diagnosa()
  {
    $query = "SELECT DISTINCT `id_penyakit`,`hasil_probabilitas` 
    FROM `tmp_final`
    ORDER BY `tmp_final`.`hasil_probabilitas` DESC LIMIT 3";
    return $this->db->query($query)->result_array();
  }

  // Mendapatkan 1 kerusakan dengan probabilitas terbesar
  public function tertinggi()
  {
    $query = "SELECT `id_penyakit`, MAX(`hasil_probabilitas`) FROM `tmp_final` GROUP BY `id_penyakit` ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }

  // Menampilkan Detail Hasil Akhir Diagnosa
  public function detailDiagnosa()
  {
    $query = "SELECT `tmp_final`.`id_penyakit`, MAX(`hasil_probabilitas`) as `hasil_probabilitas`,`tbl_penyakit`.`nama_penyakit`, `tbl_penyakit`.`gambar`,`tbl_penyakit`.`solusi` FROM `tmp_final` JOIN `tbl_penyakit` ON `tmp_final`.`id_penyakit` = `tbl_penyakit`.`id_penyakit` GROUP BY `id_penyakit` ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }
  // End Menampilkan Hasil diagnosa 

  // Memasukkan hasil diagnosa ke tbl_hasil_diagnosa
  public function insertHasil()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email', $this->session->userdata('email'));
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $email = $row->email;
    }
    $penyakit = $this->detailDiagnosa();
    foreach ($penyakit as $p) {
      $penyakitnya = $p['nama_penyakit'];
      $nilai = floor($p['hasil_probabilitas'] * 100);
      $solusi = $p['solusi'];
    }
    $data = [
      'hasil_probabilitas' => $nilai,
      'nama_penyakit' => $penyakitnya,
      'email' => $email,
      'solusi' => $solusi,
      'waktu' => time()
    ];
    return $this->db->insert('tbl_hasil_diagnosa', $data);
  }
}