<?php
require_once "controller/application_controller.php";
require_once "model/category.php";

class CategoriesController extends ApplicationController
{
  public function index()
  {
    $categories = Category::all();
    return $this->view('index', ['categories' => $categories]);
  }

  public function create() { return $this->view('form'); }

  public function edit($data)
  {
    $category = Category::find((int) $data['id']);

    return $this->view('form', ['category' => $category]);
  }

  public function save() 
  {
    $category = new Category();
    $category->name = $this->request->name;

    if($category->save()) { return $this->index(); }
  }
  
  public function update($data)
  {
    $category = Category::find((int) $data['id']);
    $category->name = $this->request->name;
    $category->save();

    return $this->index();
  }

  public function destroy($data)
  {
    Category::destroy((int) $data['id']);

    return $this->index();
  }
}
?>