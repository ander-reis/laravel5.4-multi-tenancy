<?php

namespace App\Models;

use App\Scopes\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TenantModels;

    protected $fillable = ['name'];

    /**
     * cria query scope para consultar conta do usuário no login globalmente
     */
//    public function scopeByAccount(Builder $query, $accountId)
//    {
//        return $query->where('account_id', $accountId);
//    }

    /**
     * evento para incluir account_id
     */
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::creating(function(Model $model){
//            $accountId = \Auth::user()->account_id;
//            $model->account_id = $accountId;
//        });
//    }
}
