<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Borrows extends Model
{
    use HasFactory;
    protected $table = "borrows";

    protected $fillable = [
        'borrower_name',
        'item_no',
        'purpose',
        'date_borrow',
        'date_returned',
        'status',
        'item_id'
    ];
    

    public function item(){
        return $this->belongsTo(items::class);

    }
}
