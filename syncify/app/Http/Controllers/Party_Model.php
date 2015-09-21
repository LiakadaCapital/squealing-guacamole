<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use DB;

class Party_Model extends Model {
          
    static public function get_all() {
        return DB::select('select * from party');
    }

    static public function get_party_by_name($party_name) {
        return DB::select('select * from party where name = ?', array($party_name));
    }

    static public function get_id_by_name($party_name) {
        return DB::select('select id from party where name = ?', array($party_name));
    }

    static public function create($user_id, $party_name, $PIN) {
        $current = 1;
        return DB::insert('insert into party (host_id, name, PIN, current)
            values (?, ?, ?, ?)', array($user_id, $party_name, $PIN, $current));
    }
}
?>