<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_representatives extends Model
{
    use HasFactory;
    protected $table = 'sales_representatives';
    protected $guarded = [];
    public $timestamps = false;


}
