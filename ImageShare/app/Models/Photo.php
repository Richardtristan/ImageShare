<?php

namespace App\Models;

use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photo extends Model
{
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->integer('nameUser');
            $table->string('nameImg');
            $table->dateTime('date')->default(new DateTime('now'));
            $table->text('title');
            $table->text('desc');
        });
    }

    public function down()
    {
        Schema::drop('photos');
    }

}
