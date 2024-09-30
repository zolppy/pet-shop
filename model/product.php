<?php
require_once "model/active_record.php";

class Product extends ActiveRecord
{
  public static function all()
  {
    return parent::all('products', Product::class);
  }

  public static function count() { return parent::count('products'); }

  public static function find($id)
  {
    return parent::find($id, 'products', Product::class);
  }

  public static function destroy($id)
  {
    return parent::destroy($id, 'products');
  }

  public function save() { return parent::save('products'); }
}
?>