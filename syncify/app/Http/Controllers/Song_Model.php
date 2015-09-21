<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use DB;

class Song_Model extends Model {
	static public function get_all() {
		return DB::select('select * from song');
	}

	static public function add($title, $artist) {
		return DB::insert('insert into song (title, artist) values (?, ?)', array($title, $artist));
	}   

	static public function delete($song_id) {
		return DB::delete('delete from song where song_id = ?', array($song_id));
	} 
}
?>