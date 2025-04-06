<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class OrderController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Tambahkan fungsi untuk CRUD atau lainnya
    public function index()
    {
        return response()->json(['message' => 'Order Controller is working!'], 200);
    }
}
