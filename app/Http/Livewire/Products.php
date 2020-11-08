<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
  public $products, $name, $description,$keywords,$product_id;//$image
  public $isOpen = 0;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function render()
  {
    $this->products = Product::where('user_id',Auth::id())->get();//all();
    return view('livewire.products');
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function create()
  {
    $this->resetInputFields();
    $this->openModal();
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function openModal()
  {
    $this->isOpen = true;
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function closeModal()
  {
    $this->isOpen = false;
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  private function resetInputFields(){
    $this->name = '';
    $this->description = '';
    $this->product_id = '';
    $this->keywords='';
    //$this->image='';
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function store()
  {
    $this->validate([
      'name' => 'required',
      'description' => 'required',
      'keywords' => 'required',
    ]);

    Product::updateOrCreate(['id' => $this->product_id], [
      'name' => $this->name,
      'description' => $this->description,
      //'image'=>$this->image,
      'keywords'=>$this->keywords,
      'user_id'=>Auth::id()
    ]);

    session()->flash('message',
    $this->product_id ? 'Producto actualizado satisfactoriamente.' : 'Productp creado satisfactoriamente.');

    $this->closeModal();
    $this->resetInputFields();
  }
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function edit($id)
  {
    $Product = Product::findOrFail($id);
    $this->product_id = $id;
    $this->name = $Product->name;
    $this->description = $Product->description;
    $this->keywords = $Product->keywords;
    //$this->image = $Product->image;
    $this->openModal();
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function delete($id)
  {
    Product::find($id)->delete();
    session()->flash('message', 'Producto eliminado satisfactoriamente.');
  }

}
