<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'alamat' => ['required'],
        ]);

        $carts = collect(session('cart'));
        $order =    Order::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'alamat' => $data['alamat'],
        ]);

        $carts->each(function ($i, $x) use ($order) {
            DB::table('order_details')->insert([
                'order_id' =>  $order->id,
                'produk_sku' => $x,
                'jumlah' => $i['quantity'],
                'total' => $i['quantity'] * $i['price']
            ]);
        });


        session()->put('cart', []);
        return to_route('order.show', $order->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {

        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $order->status = 1;
        $order->save();
        return   back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function sendwhatsapp()
    {


        https: //api.whatsapp.com/send/?phone=6289694273720&text=HALLO%20BOSSE...%0A%0AAku%20mau%20konfirmasi%20Pesanan%3A%0A%0AID%20%20%20%3A%20TOKEN%0ANAMA%20%3A%20NAMA%0A%0Atanggal%20Order%20%3A%20TGLPRDER&type=phone_number&app_absent=0
        return;
    }
}
