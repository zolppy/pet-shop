<?php
require_once "model/active_record.php";

class Category extends ActiveRecord
{
  public static function all()
  {
    return parent::all('categories', Category::class);
  }

  public static function count() { return parent::count('categories'); }

  public static function find($id)
  {
    return parent::find($id, 'categories', Category::class);
  }

  public static function destroy($id)
  {
    return parent::destroy($id, 'categories');
  }

  public function save() { return parent::save('categories'); }
}
?>