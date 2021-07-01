<?php

namespace App\Http\Controllers\Admin\Inquiries;

use DateTime;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InquiriesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->exists('email_admin')) {
            $data = DB::table('tbl_inquiries')
                ->join('tbl_kategori', 'tbl_kategori.id_kategori', 'tbl_barang.id_kategori')
                ->get();
            $kategori = DB::table('tbl_kategori')->get();

            return view('admin.inquiries.inquiries', [
                'data_inquiries' => $data,
                'data_kategori' => $kategori
            ]);
        } else {
            return redirect()->route('login_admin')->with('fail', 'Harap Login Terlebih Dahulu');
        }
    }
}
