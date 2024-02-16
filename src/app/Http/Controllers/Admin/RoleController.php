<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    protected $roles;
    protected $permission;

    public function __construct(Role $roles, Permission $permission)
    {
        $this->middleware('permission:create-role|edit-role|delete-role', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-role', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-role', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-role', ['only' => ['destroy']]);
        $this->roles = $roles;
        $this->permission = $permission;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRoles = $this->roles->orderBy('id', 'DESC');
        return response()->json(['roles' => $listRoles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $role = $this->roles->create(['name' => $request->name]);

            $permissions = $this->permission->whereIn('id', $request->permissions)->get(['name'])->toArray();
            $role->syncPermissions($permissions);
            DB::commit();
            return response()->json([
                'message'=>'New role is added successfully.'
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'error'=>'An error occurred.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rolePermissions = Permission::join("role_has_permissions", "permission_id", "=", "id")
            ->where("role_id", $id)
            ->select('name')
            ->get();

        return response()->json([
            'rolePermissions' => $rolePermissions
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = $this->roles->find($id);
        if ($role->name == 'Super Admin') {
            abort(403, 'SUPER ADMIN ROLE CAN NOT BE EDITED');
        }

        $rolePermissions = DB::table("role_has_permissions")->where("role_id", $role->id)
            ->pluck('permission_id')
            ->all();

        return view('roles.edit', [
            'role' => $role,
            'permissions' => Permission::get(),
            'rolePermissions' => $rolePermissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $input = $request->only('name');

        $this->roles->update($input);

        $permissions = Permission::whereIn('id', $request->permissions)->get(['name'])->toArray();

        $this->roles->syncPermissions($permissions);

        return redirect()->back()
            ->withSuccess('Role is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        if ($this->roles->name == 'Super Admin') {
            abort(403, 'SUPER ADMIN ROLE CAN NOT BE DELETED');
        }
        if (auth()->user()->hasRole($this->roles->name)) {
            abort(403, 'CAN NOT DELETE SELF ASSIGNED ROLE');
        }
        $this->roles->delete();
        return redirect()->route('roles.index')
            ->withSuccess('Role is deleted successfully.');
    }
}
