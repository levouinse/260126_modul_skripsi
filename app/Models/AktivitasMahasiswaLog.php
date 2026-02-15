<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktivitasMahasiswaLog extends Model
{
    protected $table = 'aktivitas_mahasiswa_log';
    
    protected $fillable = [
        'aktivitas_mahasiswa_id',
        'jenis_log',
        'judul',
        'deskripsi',
        'tanggal',
        'file_path',
        'status_validasi',
        'divalidasi_oleh',
        'tanggal_validasi',
        'nilai',
        'catatan_nilai',
        'is_selesai'
    ];

    protected $casts = [
        'is_selesai' => 'boolean',
        'tanggal' => 'date',
        'tanggal_validasi' => 'date'
    ];

    public function aktivitas()
    {
        return $this->belongsTo(AktivitasMahasiswa::class, 'aktivitas_mahasiswa_id');
    }
}
