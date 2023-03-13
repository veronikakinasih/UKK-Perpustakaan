<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Rak;
use App\Models\Buku;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // count
        $count_buku = Buku::count();
        $count_user = User::role('peminjam')->count();
        $count_rak = Rak::count();
        $count_kategori = Kategori::count();

        // terbaru
        $buku = Buku::limit(5)->latest()->get();
        $user = User::role('peminjam')->limit(5)->latest()->get();
        
        return view('petugas/dashboard/index',
            compact(
                'count_buku', 'count_user', 'count_rak' , 'count_kategori',
                'buku', 'user', 
            )
        );
    }
}
