<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact_name',
        'contact_number',
        'contact_email'
    ];

    public function imports(): HasMany
    {
        return $this->hasMany(Import::class, 'vendor_id', 'id');
    }
}
