<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class SupplierProducts extends Component
{
  public $product1, $products, $name, $description, $keywords, $image, $supplier;

  public function render($supplier_id, $product_id)
  {
    $this->products = Product::where('user_id',$supplier_id)->get();
    //$this->products = Product::all();
    $this->product1 = Product::findOrFail($product_id);
    $this->supplier = User::findOrFail($supplier_id);
    return view('livewire.supplier-products',['products'=>$this->products,
    'supplier'=>$this->supplier, 'product1'=>$this->product1]);//->with();
  }

  public function userProfile($user_id)
  {
    $this->products = Product::where('user_id',$user_id)->get();
    $user = User::findOrFail($user_id);
    //dd($user);

    return view('supplier-info', ['products'=>$this->products,'user' => $user]);
  }
}
