<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AktivitasMahasiswa extends Model
{
    protected $table = 'aktivitas_mahasiswa';
    
    protected $fillable = [
        'user_id',
        'nama',
        'nim',
        'jenis',
        'keterangan',
        'status',
        'judul',
        'dosen_pembimbing',
        'dosen_pembimbing_id',
        'tanggal_pengajuan',
        'tanggal_persetujuan',
        'status_proposal',
        'disetujui_oleh',
        'is_selesai'
    ];

    protected $casts = [
        'is_selesai' => 'boolean',
        'tanggal_pengajuan' => 'date',
        'tanggal_persetujuan' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function logs()
    {
        return $this->hasMany(AktivitasMahasiswaLog::class, 'aktivitas_mahasiswa_id');
    }
}
