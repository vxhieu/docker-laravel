<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

/**
 * @package App\Http\Controllers\Admin
 * Author:HieuVx - Created Date: 29/01/2024
 */
class UserController extends Controller
{
    /**
     * @var User
     */
    protected $user;
    protected $roles;

    /**
     * @param User $user
     */
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->roles = $role;
        $this->middleware('permission:create-user|edit-user|delete-user', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-user', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy']]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $listUser = $this->user->with(['roles:id,name'])->get();
        return response()->json(['listUser'=>$listUser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->all();
            $input['password'] = Hash::make($request->password);
            $user = $this->user->create($input);
            $user->assignRole($request->roles);
            DB::commit();
            return response()->json(['message' => 'New user is added successfully.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'error' => 'An error occurred.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        $userRoles = $user->roles->pluck('name')->all();
        $roles = $this->roles->pluck('name')->all();

        return response()->json([
            "user" => $user,
            "userRoles" => $userRoles,
            "roles" => $roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->all();
            if (!empty($request->password)) {
                $input['password'] = Hash::make($request->password);
            } else {
                $input = $request->except('password');
            }
            $this->user->update($input);

            $this->user->syncRoles($request->roles);
            DB::commit();
            return response()->json(['message' => 'User is updated successfully.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'error' => 'An error occurred.'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
