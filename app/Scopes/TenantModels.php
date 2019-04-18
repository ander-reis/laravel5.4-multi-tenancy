<?php

namespace App\Scopes;


use App\Tenant\TenantManager;
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

            /** @var TenantManager $tenantManager */
            $tenantManager = app(TenantManager::class);
            if ($tenantManager->getTenant()) {
                $accountId = $tenantManager->getTenant()->id;
                $model->account_id = $accountId;
            }
        });
    }
}
