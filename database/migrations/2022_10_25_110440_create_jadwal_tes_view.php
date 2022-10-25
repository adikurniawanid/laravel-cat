<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW jadwal_tes_view AS
SELECT t.id,
t.nama as 'nama',
       DATE_FORMAT(t.waktuMulai,'%d %M %Y') as 'tanggal',
       CONCAT(TIME_FORMAT(t.waktuMulai,'%H:%i'),' - ',TIME_FORMAT(t.waktuSelesai,'%H:%i')) as 'pukul',
       k.nama as soal, CONCAT(k2.nama, ' - ' , k2.kelompok) as kelas
FROM tes t
INNER JOIN kategori k on k.id = t.kategoriId
INNER JOIN kelas k2 on k2.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW jadwal_tes_view");
    }
}
