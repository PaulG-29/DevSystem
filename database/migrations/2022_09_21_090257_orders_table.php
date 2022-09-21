<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) 
        {
            $table -> id();
            $table -> string('request_name');
            $table -> string('purpose');
            $table -> string('item');
            $table -> integer('qty');
            $table -> float('amount');
            $table -> tinyinteger('status')->default('0')->comment('1=approved,0=pending');
            $table -> timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
