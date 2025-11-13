<?php

namespace App\Models;
use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $allowedFields = ['nama_proyek', 'deskripsi', 'link_porto'];
}
