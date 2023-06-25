<?php

namespace App\Models;

use App\Models\UploadGambar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UploadGambar extends Model
{
    protected $table = "uploadgambar";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nama',
        'gambar'
    ];
}
