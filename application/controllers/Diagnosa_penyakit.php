<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa_penyakit extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_diagnosa');
  }

  public function hasil()
  {
    $this->m_diagnosa->kosongTmpGejala();
    $this->m_diagnosa->kosongTmpFinal();
    $this->m_diagnosa->insertTmpGejala();

    $tmpGejala = $this->m_diagnosa->insertTmpFinal();
    $this->db->insert_batch('tmp_final', $tmpGejala);

    // Proses Perhitungan
    $probP1 = $this->m_diagnosa->ProbP1();
    echo 'Nilai Prob P1 =' . $probP1 . '<br>';
    $probP2 = $this->m_diagnosa->ProbP2();
    echo 'Nilai Prob P2 =' . $probP2 . '<br>';
    $probP3 = $this->m_diagnosa->ProbP3();
    echo 'Nilai Prob P3 =' . $probP3 . '<br>';
    $probP4 = $this->m_diagnosa->ProbP4();
    echo 'Nilai Prob P4 =' . $probP4 . '<br>';
    $probP5 = $this->m_diagnosa->ProbP5();
    echo 'Nilai Prob P5 =' . $probP5 . '<br><br>';
    $probP6 = $this->m_diagnosa->ProbP6();
    echo 'Nilai Prob P6 =' . $probP6 . '<br><br>';

    // Testing Hasil Perhitungan Bayes Tiap Kerusakan
    $data = [
      'P1' => $probP1,
      'P2' => $probP2,
      'P3' => $probP3,
      'P4' => $probP4,
      'P5' => $probP5,
      'P6' => $probP6
    ];
    $jmlProb = array_sum($data);

    if( $jmlProb== 0){
        redirect('User_conn/laman_user');
    }else{

    echo 'Jumlah Probabilitas =' . $jmlProb . '<br><br>';
    
    $P1 = ($probP1 / $jmlProb) . '<br>';
    echo 'Nilai Perhitungan Bayes P1 =' .  $P1 . '<br>';
    $P2 = ($probP2 / $jmlProb) . '<br>';
    echo 'Nilai Perhitungan Bayes P2 =' . $P2 . '<br>';
    $P3 = ($probP3 / $jmlProb) . '<br>';
    echo 'Nilai Perhitungan Bayes P3 =' . $P3 . '<br>';
    $P4 = ($probP4 / $jmlProb) . '<br>';
    echo 'Nilai Perhitungan Bayes P4 =' . $P4 . '<br>';
    $P5 = ($probP5 / $jmlProb) . '<br>';
    echo 'Nilai Perhitungan Bayes P5 =' . $P5 . '<br>';
    $P6 = ($probP6 / $jmlProb) . '<br>';
    echo 'Nilai Perhitungan Bayes P6 =' . $P6 . '<br>';

    }

    $this->m_diagnosa->hasilProbP1($P1);
    $this->m_diagnosa->hasilProbP2($P2);
    $this->m_diagnosa->hasilProbP3($P3);
    $this->m_diagnosa->hasilProbP4($P4);
    $this->m_diagnosa->hasilProbP5($P5);
    $this->m_diagnosa->hasilProbP6($P6);

    //insert hasil dari diagnosa
    $this->m_diagnosa->insertHasil();
    redirect('User_conn/hasil_diagnosa');
  }
}
