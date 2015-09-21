<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use DB;

class Playlist_History_Model extends Model {
          
    static public function get_song_by_id($playlist_id) {
        return DB::select('select song_id from playlist_history where playlist_id = ?', array($playlist_id));
    }
   
    static public function add_to_playlist($song_id, $playlist_id) {
		return DB::insert('insert into playlist_history (song_id, playlist_id) values (?, ?)', array($song_id, $playlist_id));
	}

	static public function delete_from_playlist($song_id) {
		return DB::delete('delete from playlist_history where song_id = ?', array($song_id));
	}
}
?>