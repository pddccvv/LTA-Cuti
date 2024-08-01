<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing UNSIGNED BIGINT (primary key) column.
            $table->string('nama');
            $table->string('nip')->unique();
            $table->string('jabatan');
            $table->integer('total_cuti')->default(0);
            $table->integer('sisa_cuti')->default(0);
            $table->string('status')->default('aktif'); // Default value 'aktif'
            $table->timestamps(); // Creates `created_at` and `updated_at` columns.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}