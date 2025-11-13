<?php

namespace App\Controllers;
use App\Models\{BiodataModel, PendidikanModel, PengalamanModel, KeahlianModel, PortofolioModel};

class Cv extends BaseController
{
    public function index()
    {
        $biodataModel = new BiodataModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $keahlianModel = new KeahlianModel();
        $portofolioModel = new PortofolioModel();

        $biodata = $biodataModel->first();
        $pendidikan = $pendidikanModel->where('biodata_id', $biodata['id'])->findAll();
        $pengalaman = $pengalamanModel->where('biodata_id', $biodata['id'])->findAll();
        $keahlian = $keahlianModel->where('biodata_id', $biodata['id'])->findAll();
        $portofolio = $portofolioModel->findAll();

        return view('cv_view', compact('biodata', 'pendidikan', 'pengalaman', 'keahlian', 'portofolio'));
    }
}
