<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sites;

/**
 * @package App\Http\Controllers\Admin
 * Author:HaHoang - Created Date: 06/02/2024
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

    public function index()
    {
        //$user = auth()->user();
        $user_id = 1;
        //var_dump($user); die;
        $sites = $this->sites->where('user_id', $user_id)->get();
        return response()->json(['sites' => $sites]);
    }

    public function store(Request $request)
    {
        $site = new Sites([
            'user_id' => 1,
            'name' => $request->input('name'),
            'site_type' => $request->input('site_type'),
            'domain' => $request->input('domain'),
            'admin_url' => $request->input('admin_url'),
            'cms_type' => $request->input('cms_type')
        ]);
        $site->save();
        return response()->json('Sites created!');
    }
    public function show($id)
    {
        $site = Sites::find($id);
        return response()->json($site);
    }
    public function update($id, Request $request)
    {
        $site = Sites::find($id);
        $site->update($request->all());
        return response()->json('Sites updated!');
    }
    public function destroy($id)
    {
        $site = Sites::find($id);
        $site->delete();
        return response()->json('Sites deleted!');
    }
}
