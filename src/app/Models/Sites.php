<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Sites extends Model
{
    protected $table = "sites_object";
    protected $fillable = ['id', 'user_id', 'name', 'site_type', 'domain', 'admin_url', 'cms_type', 'clickup_list_id', 'accelo_contract_id'];
}
