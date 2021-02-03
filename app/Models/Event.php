<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'category'
    ];

    // public function index()
    // {
    //     //
    // }


    // // public function create()
    // // {
    // //     //
    // // }

    // public function show()
    // {
    //     //
    // }

    // public function edit()
    // {
    //     //
    // }

    // // public function update()
    // // {
    // //     //
    // // }

    // public function delete()
    // {
    //     //
    // }



    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
