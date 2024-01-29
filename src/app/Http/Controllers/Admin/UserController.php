<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $listUser = $this->user->select(['username', 'email'])->get();
        return response()->json(['listUser' => $listUser]);
    }
}
