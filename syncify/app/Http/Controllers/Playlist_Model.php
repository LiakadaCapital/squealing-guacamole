<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use DB;

class Playlist_Model extends Model {
          
    static public function get_all() {
        return DB::select('select * from playlist');
    }

    static public function get_by_user_id($user_id) {
        return DB::select('select * from playlist where user_id = ?', array($user_id));
    }
    
    static public function create($user_id, $playlist_name, $cover_url) {
        return DB::insert('insert into playlist (user_id, namen cover_url)
            values (?, ?, ?)', array($user_id, $playlist_name, $cover_url));
    }
}
?>