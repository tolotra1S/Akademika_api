<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Postuleposte extends Model
{
    protected $table = 'postulepostes';
    protected $primaryKey = 'id';
    protected $fillable = ['entreprise','titre', 'description'];  
 
    use HasFactory;
}