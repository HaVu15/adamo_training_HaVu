<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public $timestamp = false;
    protected $fillable = ['size_name'];
    protected $primaryKey = 'size_id';
    protected $table = 'tbl_size';
}
