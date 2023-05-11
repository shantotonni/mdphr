<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'Personal';

    protected $primaryKey = 'EmpCode';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];
}
