<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logins(Request $requests)
    {
        $fullName = $requests->get('fullName');
        $email = $requests->get('email');
        $phone = $requests->get('phone');
        $address = $requests->get('address');
        $identityCard = $requests->get('identityCard');
        return sprintf('welcome %s, email %s, phone %s, Address %s. Identity Card %s', $fullName, $email, $phone, $address, $identityCard);
    }
    public function login(){
        return view('user.Login');
    }
}
