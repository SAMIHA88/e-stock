<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;
    protected $table='entrees';
    protected $fillable=[
        'qteSortie',
        'prixSortie',
        'dateSortie',
        'nomFournisseur',
        'nomproduit'
    ];
}
