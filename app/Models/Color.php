<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public $timestamp = false;
    protected $fillable = ['color_name'];
    protected $primaryKey = 'color_id';
    protected $table = 'tbl_color';
}
