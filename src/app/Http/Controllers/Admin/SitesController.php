<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sites;

/**
 * @package App\Http\Controllers\Admin
 * Author:HieuVx - Created Date: 29/01/2024
 */
class SitesController extends Controller
{
    /**
     * @var Sites
     */
    protected $sites;

    /**
     * @param Sites $sites
     */
    public function __construct(Sites $sites)
    {
        $this->sites = $sites;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $user_id = 1;
        $listSites = $this->sites->where('user_id', $user_id)->get();
        return response()->json(['listSites' => $listSites]);
    }
}
