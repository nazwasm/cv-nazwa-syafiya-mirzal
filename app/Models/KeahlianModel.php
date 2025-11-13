<?php

namespace App\Models;
use CodeIgniter\Model;

class KeahlianModel extends Model
{
    protected $table = 'keahlian';
    protected $allowedFields = ['biodata_id', 'nama_keahlian', 'level'];
}
