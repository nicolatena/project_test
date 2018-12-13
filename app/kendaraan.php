<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Kendaraan extends Model
{
    protected $table = 'kendaraan'; // jika kita ingin nama tablenya kendaraan
    public $incrementing = false; // defaultnya true
}