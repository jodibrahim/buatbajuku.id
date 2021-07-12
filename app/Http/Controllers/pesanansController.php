<?php

namespace App\Http\Controllers;

use App\katalogs;
use App\pesanans;
use App\user;
use App\pesananDetail;
use Alert;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class pesanansController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
		$katalogs = katalogs::where('id', $id)->first();

    	return view('pesanans.index', compact('katalogs'));
    }

    public function pesanans(Request $request, $id)
    {	
    	$katalogs = katalogs::where('id', $id)->first();
    	$tanggal = Carbon::now();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesanan > $katalogs->stok)
    	{
    		return redirect('pesanan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = pesanans::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanans = new pesanans;
	    	$pesanans->user_id = Auth::user()->id;
	    	$pesanans->tanggal = $tanggal;
	    	$pesanans->status = 0;
            $pesanans->kode = mt_rand(100, 999);
	    	$pesanans->save();
    	}
    	

    	//simpan ke database pesanan detail
    	$pesanan_baru = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = pesananDetail::where('katalogs_id', $katalogs->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$pesanan_detail = new pesananDetail;
	    	$pesanan_detail->katalogs_id = $katalogs->id;
	    	$pesanan_detail->pesanan_id = $pesanan_baru->id;
	    	$pesanan_detail->jumlah = $request->jumlah_pesanan;
	    	$pesanan_detail->save();
    	}else 
    	{
    		$pesanan_detail = pesananDetail::where('katalogs_id', $katalogs->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesanan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $katalogs->harga*$request->jumlah_pesanan;
	    	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
    	}

    	//jumlah total
    	$pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$katalogs->harga*$request->jumlah_pesanan;
    	$pesanan->update();
    	
        Alert::success('pesanan Berhasil Masuk Keranjang', 'Sukses');
    	return redirect('check-out');
}

    public function check_out()
    {
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
 	$pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = pesananDetail::where('pesanan_id', $pesanan->id)->get();

        }
        
        return view('pesanan.check_out', compact('pesanan', 'pesanan_details'));
    }

    public function delete($id)
    {
        $pesanan_detail = pesananDetail::where('id', $id)->first();

        $pesanans = pesanans::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanans->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanans->update();


        $pesanan_detail->delete();

        Alert::error('pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        $pesanans = pesanans::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanans->status = 1;
        $pesanans->update();

        $pesanan_details = pesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $katalogs = katalogs::where('id', $pesanan_detail->katalogs_id)->first();
            $katalogs->stok = $katalogs->stok-$pesanan_detail->jumlah;
            $katalogs->update();
        }



        Alert::success('pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    }

}

