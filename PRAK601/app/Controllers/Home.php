<?php

namespace App\Controllers;

use App\models\biodataModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswa = new biodataModel();
        return view('index', [
            "dataNama" => $mahasiswa->getNama(),
            "dataNim" => $mahasiswa->getNim()
        ]);
    }
    public function biodata()
    {
        $mahasiswa = new biodataModel();
        return view('Biodata', [
            "dataNama" => $mahasiswa->getNama(),
            "dataNim" => $mahasiswa->getNim(),
            "dataProdi" => $mahasiswa->getProdi(),
            "dataCitaCita" => $mahasiswa->getCitaCita(),
            "dataHobi" => $mahasiswa->getHobi(),
            "dataSkill" => $mahasiswa->getSkill(),
            "dataAlamat" => $mahasiswa->getAlamat(),
            "dataMotto" => $mahasiswa->getMotto(),
        ]);
    }
}
