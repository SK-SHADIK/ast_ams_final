<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = "asset";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';

    public function assetType()
    {
        return $this->hasOne(AssetType::class, 'id', 'asset_type_id');
    }

    public function assetModel()
    {
        return $this->hasOne(AssetModel::class, 'id', 'asset_model_id');
    }

    public function asmodel()
    {
        return $this->belongsTo(AssetModel::class, 'asset_model_id');
    }
    public function transaction()
    {
        return $this->belongsTo(AssetTransactions::class, 'id','asset_id');
    }
    public function astype()
    {
        return $this->belongsTo(AssetType::class, 'asset_type_id');
    }

}
