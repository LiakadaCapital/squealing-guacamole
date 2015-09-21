<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use DB;

class Party_History_Model extends Model {
          
    static public function insert($user_id, $party_id) {
        return DB::insert('insert into party_history (user_id, party_id)
            values (?, ?)', array($user_id, $party_id));
    }

    static public function get_by_user_id($user_id) {
        return DB::select('select * from party_history where user_id = ?', array($user_id));
    }

    static public function delete_by_user_id($user_id) {
        return DB::select('delete from party_history where user_id = ?', array($user_id));
    }

    static public function get_user_by_id($party_id) {
        return DB::select('select user_id from party_history where party_id = ?', array($party_id));
    }
}
?>