<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WcContact extends Model
{
    use HasFactory;
    protected $table = 'wc_contact';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "email","subject","message"];
}
