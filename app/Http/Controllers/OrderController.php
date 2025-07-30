<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Book $book)
    {
        return view('orders.create', compact('book'));
    }

    public function store(Request $request, Book $book)
    {
        $request->validate([
            'type' => 'required|in:pdf,hardcopy',
            'address' => 'nullable|string|max:255'
        ]);

        if ($request->type === 'hardcopy' && !$request->address) {
            return back()->withErrors(['address' => 'Address is required for hard copy orders.']);
        }

        $order = new Order();
        $order->user_id = Auth::id();
        $order->book_id = $book->id;
        $order->type = $request->type;
        $order->address = $request->type === 'hardcopy' ? $request->address : null;
        $order->status = 'pending'; 
        $order->save();

        return redirect()->route('books.index')->with('success', 'Order placed! Please wait for confirmation.');
    }
}

