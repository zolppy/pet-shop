<?php
require_once "controller/application_controller.php";
require_once "model/product.php";

class ProductsController extends ApplicationController
{
  public function index()
  {
    $products = Product::all();
    return $this->view('index', ['products' => $products]);
  }

  public function create() { return $this->view('form'); }

  public function edit($data)
  {
    $product = Product::find((int) $data['id']);

    return $this->view('form', ['product' => $product]);
  }

  public function save() 
  {
    $product = new Product();
    $product->SKU = $this->request->SKU;
    $product->name = $this->request->name;
    $product->price = $this->request->price;
    $product->brand = $this->request->brand;
    $product->description = $this->request->description;
    $product->image_url = $this->request->image_url;
    $product->category_id = $this->request->category_id;

    if($product->save()) { return $this->index(); }
  }
  
  public function update($data)
  {
    $product = Product::find((int) $data['id']);
    $product->SKU = $this->request->SKU;
    $product->name = $this->request->name;
    $product->price = $this->request->price;
    $product->brand = $this->request->brand;
    $product->description = $this->request->description;
    $product->image_url = $this->request->image_url;
    $product->category_id = $this->request->category_id;
    $product->save();

    return $this->index();
  }

  public function destroy($data)
  {
    Product::destroy((int) $data['id']);

    return $this->index();
  }
}
?>