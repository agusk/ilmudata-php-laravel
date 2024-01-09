<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Exception;

class TransactionController extends Controller
{
    public function handleTransaction()
    {
        DB::beginTransaction();

        try {
            // Skenario: perbarui harga produk dengan id 1, lalu tambahkan produk baru
            // Update product
            $product1 = Product::find(1);
            $product1->price = $product1->price + 10;
            $product1->save();

            // buat produk baru
            $product2 = new Product();
            $product2->name = "Produk Baru";
            $product2->description = "Deskripsi Produk Baru";
            $product2->price = 100;
            $product2->stock = 10;
            $product2->save();

            // Commit Transaction
            DB::commit();
            return "Transaksi berhasil!";
        } catch (Exception $e) {
            DB::rollback();

            return "Transaksi gagal. <br/> Error: " . $e->getMessage();
        }
    }
}
