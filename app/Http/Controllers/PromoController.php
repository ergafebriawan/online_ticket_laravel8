<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use App\Order_tiket;
use Barryvdh\DomPDF\Facade as PDF;

class PromoController extends Controller
{
    //
    public function detailPromo($id)
    {
        $pro = Promo::where('id_promo', $id)->get();

        return view('detail_promo', ['promo' => $pro]);
    }

    public function booking($id)
    {
        $promo = Promo::where('id_promo', $id)->get();
        return view('booking', ['promo' => $promo, 'id' => $id]);
    }

    public function detailOrder(Request $request)
    {
        $id = $request->input('id');
        $tiket = $request->input('tiket');
        $harga = $request->input('harga');
        $jml_tiket = $request->input('jml_tiket');
        $kode = $request->input('kode_promo');
        $pt = $request->input('potongan');

        $intHarga = intval($harga);
        $intJml = intval($jml_tiket);
        // $potongan = 5000;
        // $potongan = $potongan*$intJml;
        // $intHarga = $intHarga-$potongan;

        $total = $intHarga * $intJml;

        $data = [
            'id' => $id,
            'tiket' => $tiket,
            'harga' => $harga,
            'jml_tiket' => $jml_tiket,
            'kode' => $kode,
            'potongan' => $pt,
            'total' => $total,
        ];
        // dd($data['tiket']);
        return view('detail_order', ['data' => $data]);
    }

    public function addOrder(Request $request)
    {
        $id = Order_tiket::select('id_order')->max('id_order');
        $idjadi = intval($id);
        $idjadi = $idjadi + 1;
        $idsiap = 'OD0'.strval($idjadi);
        $data = [
            'id_order' => $idsiap,
            'nama_tiket' => $request->input('tiket'),
            'nama_user' => $request->input('user'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'no_wa' => $request->input('no_wa'),
            'jml_tiket' => $request->input('jml_tiket'),
            'harga' => $request->input('harga'),
            'kode' => $request->input('kode'),
            'potongan' => $request->input('potongan'),
            'total' => $request->input('total'),
        ];

        Order_tiket::create($data);

        return redirect('cetak_order/'.$idsiap);
    }

    public function cetakOrder($id){
        $order = Order_tiket::where('id_order', $id)->get();
        $pdf = PDF::loadview('order_pdf',['order'=>$order]);
        // $size = array(0,0,950,950);
        $pdf->setPaper('A5', 'potrait');
    	return $pdf->stream('order-pdf');
    }
}
