<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuburanModel extends Model
{
     use HasFactory;

    protected $table = 'kuburan';
        protected $primaryKey = 'id'; // Primary key tabel
        public $incrementing = true; // Karena primary key menggunakan AUTO_INCREMENT
        protected $keyType = 'int'; // Jenis data primary key
        protected $fillable = [
        'nama_kuburan',
        'lokasi',
        'status',
        'lokasi_dikubur',
    ];

    public function jenazah()
    {
        return $this->hasMany(jenazahModel::class, 'lokasi_dikubur', 'id');
    }
}
