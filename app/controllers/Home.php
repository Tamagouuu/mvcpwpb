<?php
class Home extends Controller
{
    public function index($nama = 'Gautama', $pekerjaan = 'koruptor')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('home/index', $data);
    }
}
