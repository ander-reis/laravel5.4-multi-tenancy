<?php

namespace App\Scopes;


use App\Tenant\TenantManager;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        /** @var TenantManager $tenantManager */
        $tenantManager = app(TenantManager::class);
        if ($tenantManager->getTenant()) {
            $account_id = \Auth::user()->account_id;
            $builder->where('account_id', $account_id);
        }
    }
}
