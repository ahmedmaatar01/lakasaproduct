<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class CommandeController extends Controller
{
    public function index()
    {
        $total_price = 0;
        $cart = session()->get('cart', []);

        // Fetch product names for each cart item
        foreach ($cart as $id => &$details) {
            $total_price += $details['price'] * $details['quantity'];
            $product = Product::with('featuredImage')->findOrFail($details["product_id"]);
            if ($product) {
                $details['name'] = $product->name;
                $details['img'] = $product->featuredImage->image_path;
            } else {
                $details['name'] = 'Product not found';
            }
        }

        return view('commande.index', compact('cart', 'total_price'));
    }

    public function store(Request $request)
    {

        DB::beginTransaction();

        try {
            // Step 1: Create the Order
            $order = Order::create([
                'user_id' => auth()->check() ? auth()->id() : null,
                'customer_email' => $request->input('email'),
                'customer_phone' => $request->input('phone'),
                'customer_name' => $request->input('first_name') . ' ' . $request->input('last_name'),
                'customer_address' => $request->input('address'),
                'customer_city' => $request->input('city'),
                'customer_postal_code' => $request->input('postal_code'),
                'total_price' => $request->input('total_price'),
            ]);
            // Step 2: Create Order Items
            $cart = session()->get('cart', []);
            foreach ($cart as $item) {
                $orderItem = OrderItem::create([
                    'order_id' => $order->id,
                    'produit_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'length' => $item['langeur'],
                    'width' => $item['largeur'],
                    'frame' => $item['cadre'],
                    'frame_color' => $item['couleur_cadre'],
                    'led_color' => $item['led'],
                    'mirror_color' => $item['mirroir'],
                    'switch_type' => $item['interrepteur'],
                ]);
                dump($orderItem);
            }

            // Step 3: Clear the Cart
            session()->forget('cart');

            DB::commit();
            return response()->json(['message' => 'commande added successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'There was an issue processing your order. Please try again!']);

            // return redirect()->route('checkout.index')->withErrors(['error' => 'There was an issue processing your order. Please try again.']);
        }
    }
    public function edit(string $id)
    {
        $order = Order::with('items')->where('id', $id)->first();
        foreach ($order->items as $item) {
            $product = Product::find($item->produit_id);
            $item->product_name = $product ? $product->name : 'Product not found';
        }
        return view('commande.admin.edit', compact('order'));
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|string|email|max:255',
            'customer_address' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_city' => 'required|string|max:100',
            'customer_postal_code' => 'required|string|max:20',
            'status' => 'required|string|in:en attente,en cours,livraison,terminer',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.length' => 'required|numeric|min:0',
            'items.*.width' => 'required|numeric|min:0',
            'items.*.frame' => 'required|string|max:255',
            'items.*.frame_color' => 'required|string|max:255',
            'items.*.led_color' => 'required|string|max:255',
            'items.*.mirror_color' => 'required|string|max:255',
            'items.*.switch_type' => 'required|string|max:255',
        ]);

        // Find the order by ID
        $order = Order::findOrFail($id);

        // Update the order details
       
            $order->customer_name = $validatedData['customer_name'];
            $order->customer_email = $validatedData['customer_email'];
            $order->customer_address = $validatedData['customer_address'];
            $order->customer_phone = $validatedData['customer_phone'];
            $order->customer_city = $validatedData['customer_city'];
            $order->customer_postal_code = $validatedData['customer_postal_code'];
            $order->status = $validatedData['status'];
            $order->save();

        

        // Update the order items
        foreach ($validatedData['items'] as $key => $itemData) {
            $item = OrderItem::findOrFail($key);
            $item->update([
                'quantity' => $itemData['quantity'],
                'length' => $itemData['length'],
                'width' => $itemData['width'],
                'frame' => $itemData['frame'],
                'frame_color' => $itemData['frame_color'],
                'led_color' => $itemData['led_color'],
                'mirror_color' => $itemData['mirror_color'],
                'switch_type' => $itemData['switch_type'],
            ]);
        }

        // Return a success response
        return response()->json(['status' => 'success']);
    }


    public function drop($orderId)
    {
        DB::beginTransaction();

        try {
            // Step 1: Retrieve the Order by ID
            $order = Order::findOrFail($orderId);

            // Step 2: Delete the Order (this will also delete the associated order items due to cascading)
            $order->delete();

            DB::commit();
            return response()->json(['success' => 'Order deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'There was an issue deleting the order. Please try again!'], 500);
        }
    }

    public function downloadPDF(string $id)
    {
        $order = Order::with('items')->where('id', $id)->first();
        foreach ($order->items as $item) {
            $product = Product::find($item->produit_id);
            $item->product_name = $product ? $product->name : 'Product not found';
        }

        // Generate the PDF with a Blade view
        $pdf = PDF::loadView('pdf.commande', compact('order'));

        // Download the PDF
        return $pdf->download('commande'.$order->id.'.pdf');
    }
    public function adminIndex()
    {
        $orders = Order::with('items')->get();
        return view('commande.admin.index', compact('orders'));
    }
}
