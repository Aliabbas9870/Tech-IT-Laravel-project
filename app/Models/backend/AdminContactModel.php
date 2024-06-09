<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminContactModel extends Model
{
    use HasFactory;
    protected $table = 'contactadmin';
    protected $id = 'id';
}
