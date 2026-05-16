<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spice extends Model {
    protected $fillable = ['category_id', 'name', 'expired_at', 'stock'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
