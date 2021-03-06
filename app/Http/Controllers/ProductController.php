<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Events\SearchEvent;

class ProductController extends Controller
{
  public function search(Request $request)
  {
    $query = $request->query('query');
    $products = Product::where('name', 'like', '%' . $query . '%')
    ->orWhere('description', 'like', '%' . $query . '%')
    ->orWhere('keywords', 'like', '%' . $query . '%')
    ->get();

    if ($products->count() > 0) {
      //broadcast search results with Pusher channels
      event(new SearchEvent($products));
      return response()->json($products);
    } else {
      return response()->json(null);
    }
  }

  //fetch all products
  public function get(Request $request)
  {
    $products = Product::inRandomOrder()->get();//all();
    return response()->json($products);
  }
  //show image
  public function showImage($filename)
  {
    $path = storage_path('app/images/'. $filename);
    if (!File::exists($path)) {
      abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
  }

}
