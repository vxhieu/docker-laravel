<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

/**
 * @package App\Http\Requests
 * Author: HieuVX - Created Date: 24/1/2024
 */
class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'username' => [Rule::requiredIf(fn() => !isset($this->email)), 'string'],
            'email' => [Rule::requiredIf(fn() => !isset($this->username)), 'email'],
            'password' => 'required',
        ];
    }


    public function auth()
    {
        $isEmail = true;
        if ($this->has('email')) {
            $attemptPayload = $this->only('email', 'password');
        } else {
            $isEmail= false;
            $attemptPayload = $this->only('username', 'password');
        }

        if (!Auth::attempt($attemptPayload)) {
            return false;
        }
        if($isEmail){
            return User::where('email', $this->email)->first();
        }
         return User::where('username', $this->username)->first();
    }
}
