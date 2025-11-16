<?php

namespace App\Controllers;
use App\Models\{
    BiodataModel,
    PendidikanModel,
    PengalamanModel,
    KeahlianModel,
    PortofolioModel
};

class Cv extends BaseController
{
    private $biodataModel;
    private $pendidikanModel;
    private $pengalamanModel;
    private $keahlianModel;
    private $portofolioModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->pengalamanModel = new PengalamanModel();
        $this->keahlianModel = new KeahlianModel();
        $this->portofolioModel = new PortofolioModel();
    }

    // HOME (ABOUT)
    public function index()
    {
        $biodata = $this->biodataModel->first();
        return view('home', compact('biodata'));
    }

    // EDUCATION
    public function education()
    {
        $biodata = $this->biodataModel->first();
        $pendidikan = $this->pendidikanModel
            ->where('biodata_id', $biodata['id'])
            ->findAll();

        return view('education', compact('biodata', 'pendidikan'));
    }

    // EXPERIENCE
    public function experience()
    {
        $biodata = $this->biodataModel->first();
        $pengalaman = $this->pengalamanModel
            ->where('biodata_id', $biodata['id'])
            ->findAll();

        return view('experience', compact('biodata', 'pengalaman'));
    }

    // SKILLS
    public function skills()
    {
        $biodata = $this->biodataModel->first();
        $keahlian = $this->keahlianModel
            ->where('biodata_id', $biodata['id'])
            ->findAll();

        return view('skills', compact('biodata', 'keahlian'));
    }

    // PORTOFOLIO
    public function portofolio()
    {
        $biodata = $this->biodataModel->first();
        $portofolio = $this->portofolioModel->findAll();

        return view('portofolio', compact('biodata', 'portofolio'));
    }
}
