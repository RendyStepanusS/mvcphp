<?php

class About extends Controller
{
  public function index($nama = ' Rendy Stepanus ', $pekerjaan = ' Programmer ', $umur = ' 24 Tahun ')
  {
    $data['judul'] = 'About';
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;

    $this->view('tamplates/header', $data);
    $this->view('about/index', $data);
    $this->view('tamplates/footer');
  }

  public function page()
  {
    $data['judul'] = 'Page';
    $this->view('tamplates/header', $data);
    $this->view('about/page');
    $this->view('tamplates/footer');
  }
}
