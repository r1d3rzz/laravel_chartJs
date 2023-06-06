<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inout extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, $filter)
    {
        $query->when($filter['date'] ?? false, function ($query, $date) {
            $query->where(function ($query) use ($date) {
                $query->where("date", $date);
            });
        });
    }
}
