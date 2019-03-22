<?php

namespace App\Scopes;


use Illuminate\Database\Eloquent\Model;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        // consulta conta do usuário na hora de logar globalmente
        static::addGlobalScope(new TenantScope());

        // evento para incluir account_id na hora de criar categoria
        static::creating(function(Model $model){
            $accountId = \Auth::user()->account_id;
            $model->account_id = $accountId;
        });
    }
}
