<?php

namespace App\Imports;

use App\Models\Soal;
use Maatwebsite\Excel\Concerns\ToModel;

class SoalImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function  __construct($kategoriId)
    {
        $this->kategoriId = $kategoriId;
    }

    public function model(array $row)
    {
        return new Soal([
            'kategoriId' => $this->kategoriId,
            'soal' => $row[1],
            'jawaban' => $row[2],
            'pilihan1' => $row[3],
            'pilihan2' => $row[4],
            'pilihan3' => $row[5],
        ]);
    }
}
