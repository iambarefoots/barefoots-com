<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class MahasiswaTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($mahasiswa)
    {
        return [
            'NIM' => $mahasiswa->NIM,
            'Nama' => $mahasiswa->nama,
            'Matkul' => $mahasiswa->nama_matkul
        ];
    }
}
