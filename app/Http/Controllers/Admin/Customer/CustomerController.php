<?php

namespace App\Http\Controllers\Admin\Customer;

use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(Request $request) {
        $data = DB::table('customer')->get();
        return view('admin.customer.data', ['data_customer' => $data]);
    }
}