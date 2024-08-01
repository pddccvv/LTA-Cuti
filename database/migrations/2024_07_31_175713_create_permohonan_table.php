<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing UNSIGNED BIGINT (primary key) column.
            $table->string('nama');
            $table->string('nip');
            $table->string('jabatan');
            $table->integer('lama_cuti');
            $table->text('alasan');
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
        Schema::dropIfExists('permohonan');
    }
}
