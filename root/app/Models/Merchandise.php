<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $table = 'merchandises';

    protected $fillable = [
        'merchandise_number',
        'merchandise_name',
        'merchandise_classification',
        'merchandise_price',
        'merchandise_plastic',
        'merchandise_plastic_notes',
        'merchandise_paper',
        'merchandise_paper_notes',
        'merchandise_color',
        'merchandise_size',
    ];



}
