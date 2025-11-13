<?php

namespace App\Models;
use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table = 'pengalaman';
    protected $allowedFields = ['biodata_id', 'judul', 'jenis', 'institusi', 'lokasi', 'tahun_mulai', 'tahun_selesai', 'deskripsi'];
}
