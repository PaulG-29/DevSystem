<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Items extends Model
{
    use HasFactory;

    protected $table = "items";

    protected $fillable = [
        'item_name',
        'description',
        'item_no',
        'date_purchase',
        'date_validty',
        'status',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrows::class, 'item_id', 'id');
    }
}  
   
