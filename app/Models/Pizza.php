<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'base', 'type', 'price', 'toppings', 'imgpath'];

    protected $casts = [
        'toppings' => 'array'
    ];

    public function scopeFilter($query, array $filters) {  
        if(!empty( request('search'))) { 
            if($filters['search'] ?? false) {
                $query->where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('type', 'like', '%' . request('search') . '%')
                    ->orWhere('base', 'like', '%' . request('search') . '%');
                    // dd($query->count());
            }
        }
    }
}
