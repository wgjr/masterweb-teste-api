<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{

    protected $fillable = [
        'id_users',
    ];

    /**
     * @todo melhorar retorno, detalhar motivos
     *
     * @return false|Builder|Model
     */
    public function newSale(int $userId)
    {
        try {
            return $this::query()
                ->create([
                    'id_users' => $userId,
                ]);
        } catch (Exception $exceptionNewSale) {
            return false;
        }
    }
}
