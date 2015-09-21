<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use DB;

class User_Model extends Model {
          
    static public function get_all() {
        return DB::select('select * from user');
    }

    static public function get_user_by_id($id) {
    	return DB::select('select * from user where id = ?', array($id));
    }
    
    static public function insert_user($username, $password, $email, $name) {
    	return DB::insert('insert into user (username, password, email, name)
    		values (?, ?, ?, ?)', array($username, $password, $email, $name));
    }
}
?>