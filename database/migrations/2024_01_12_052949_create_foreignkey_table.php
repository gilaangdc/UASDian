<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('relasis', function (Blueprint $table) {
            $table->foreign('no_NIK')->references('NIK')->on('karyawans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('divisi_bagian')->references('bagian')->on('unitkerjas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('golongan_karyawan')->references('golongan')->on('pangkatgolongans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pangkat')->references('nama_pangkat')->on('gajis')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('relasis', function (Blueprint $table) {   
                $table->dropForeign('relasis_no_NIK_foreign');
                $table->dropForeign('relasis_divisi_bagian_foreign');
                $table->dropForeign('relasis_golongan_karyawan_foreign');
                $table->dropForeign('relasis_pangkat_foreign');
          });
    }
};
