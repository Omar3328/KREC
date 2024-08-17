<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManualInsertController extends Controller
{
    public function insert()
    {
        User::create([
            'first_name' => 'Ana',
            'last_name_p' => 'García',
            'last_name_m' => 'Mendoza',
            'email' => 'ana.garcia@example.com',
            'password' => ('1234') // Encriptada
        ]);

        return 'User inserted successfully!';
    }
}
