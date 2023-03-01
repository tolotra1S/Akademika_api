<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Tuteur extends Model
{
    protected $table = 'tuteur';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'firstname','mail','phone', 'birthday', 'addresse', 'cin', 'description', 'subject','tarif','free'];  
 
    use HasFactory;
}