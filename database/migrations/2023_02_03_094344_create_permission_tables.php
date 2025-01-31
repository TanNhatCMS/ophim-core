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
        Schema::table('permissions', function (Blueprint $table) {
            $table->string('title', 100)->nullable();
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->string('title', 100)->nullable();
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('title');
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
};
