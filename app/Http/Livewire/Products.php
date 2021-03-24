<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Products extends Component
{
  use WithFileUploads;
  public $products, $name, $description,$keywords,$product_id, $image;
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
    $this->openModal();
    //dd("thisOpen: "+$this->isOpen);
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
    $this->image='';
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
    try {
      if (!is_string($this->image)) {
        //dd("Has file");
        $imageName = $this->image->store('images', 'public');
        Product::updateOrCreate(['id' => $this->product_id], [
          'name' => $this->name,
          'description' => $this->description,
          'image'=>Storage::url($imageName),//$this->image
          'keywords'=>$this->keywords,
          'user_id'=>Auth::id()
        ]);
      }else{
        //dd("El mismo");
        Product::updateOrCreate(['id' => $this->product_id], [
          'name' => $this->name,
          'description' => $this->description,
          'keywords'=>$this->keywords,
          'user_id'=>Auth::id()
        ]);
      }
    } catch (\Exception $e) {
      dd("error: ",$e);
    }

    session()->flash('message',
    $this->product_id ? 'Producto actualizado satisfactoriamente.' : 'Producto creado satisfactoriamente.');

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
    $this->image = $Product->image;
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
