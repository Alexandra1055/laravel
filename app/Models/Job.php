<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //si quieres un nombre unico podemos poner:
    protected $table = "job_listings";
    protected $fillable = ['title','salary'];

}
