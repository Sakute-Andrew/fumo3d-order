<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;

    protected $table = 'materials';
    protected $primaryKey = 'material_id';
    public $timestamps = true;
    protected $fillable = [
        'material_name',
        'material_description',
        'material_strength',
        'hdt',
        'tensile_elongation',
        'material_photo'
    ];
}
