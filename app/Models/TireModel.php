<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TireModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $table = 'tires';
    protected $fillable = [
        'name', 'width', 'diameter', 'pressure', 'manufacturer', 'stock'
    ];
}
