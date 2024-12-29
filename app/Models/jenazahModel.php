<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenazahModel extends Model
{
    use HasFactory;

    protected $table = 'jenazah';
    protected $primaryKey = 'id'; // Primary key tabel
    public $incrementing = true; // Karena primary key menggunakan AUTO_INCREMENT
    protected $keyType = 'int'; // Jenis data primary key
    protected $fillable = [
        'nama_jenazah',
        'alamat',
        'agama',
        'lokasi_dikubur',
    ];

    public function kuburan()
    {
        return $this->belongsTo(kuburanModel::class, 'lokasi_dikubur', 'id');
    }
}
