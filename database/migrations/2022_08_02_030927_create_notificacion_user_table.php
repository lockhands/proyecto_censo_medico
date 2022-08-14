<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notifications_id');
            $table->unsignedBigInteger('users_id');
            
             $table->foreign('users_id')->references('id')->on('users')
                        ->onUpdate('cascade')->onDelete('cascade');
						
			$table->foreign('notifications_id')->references('id')->on('notifications')
                        ->onUpdate('cascade')->onDelete('cascade');
                        
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_notificacion');
    }
};
