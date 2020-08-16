<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Customer extends Model {
    protected $guarded = [];
    public function orders() {
        return $this->hasMany(Order::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
