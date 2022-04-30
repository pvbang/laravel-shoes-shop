<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'Ten_nha_hang' => ['required', 'string', 'max:255'], 
            'Dia_chi' => ['required', 'string', 'max:255'], 
            'SDT' => ['required', 'string', 'max:12'],
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Ten_dang_nhap' => ['required', 'string',  'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'Ten_nha_hang' => $input['Ten_nha_hang'], 
            'Dia_chi' => $input['Dia_chi'], 
            'SDT' => $input['SDT'], 
            // 'name' => $input['name'], 
            'email' => $input['email'],
            'Ten_dang_nhap' => $input['Ten_dang_nhap'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
