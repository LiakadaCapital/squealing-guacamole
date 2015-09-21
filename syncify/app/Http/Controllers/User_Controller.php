<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class User_Controller extends BaseController {
	public function index() {
		//return view('welcome');
		$result = User_Controller::get_all_user();
		//return Response::eloquent($result);
		return $result;
	}

	public function get_all_user() {
		return User_Model::get_all();
	}

	public function create_party($user_id, $party_name, $PIN) {
		$result = Party_Model::create($user_id, $party_name, $PIN);
		if ($result === false) {
			return "create party failed";
		}
		else {
			return true;
		}
	}

	public function join_party($user_id, $party_name) {
		$party_id = Party_Model::get_id_by_name($party_name);
		if ($party_id === false) {
			return "such party does not exist";
		}
		else {
			$result = Party_History_Model::insert($user_id, $party_id);
			if ($result === false) {
				return "insert into party_history failed";
			}
			else {
				return true;
			}
		}
	}

	public function leave_party($user_id) {
		$result = Party_History_Model::get_by_user_id($user_id);
		if ($result === false) {
			return "you do not belong to any party";
		}
		else {
			$result = Party_History_Model::delete_by_user_id($user_id);
			if ($result === false) {
				return "you do not belong to any party";
			}
			else {
				return true;
			}
		}
	}

	public function start_party($party_id) {
		//create party
		//choose song from playlist
	}

	public function end_party($party_id) {

	}

	public function get_party_size($party_id) {
		$result = Party_History_Model::get_user_by_id($party_id);
		if ($result === false) {
			return "party_history table got fucked up";
		}
		else {
			return sizeof($result);
		}
	}

	public function create_playlist($user_id, $playlist_name, $cover_url) {
		$result = Playlist_Model::create($user_id, $playlist_name, $cover_url);
		if ($result === false) {
			return "insert into playlist failed";
		}
		else {
			return $result;
		}
	}

	public function get_playlist_by_user($user_id) {
		$result = Playlist_Model::get_by_user_id($user_id);
		if ($result === false) {
			return "you do not have any playlist";
		}
		else {
			return $result;
		}
	}

	public function get_song_from_playlist($user_id) {
		$playlist = User_Controller::get_playlist_by_user($user_id);
		if ($playlist === "you do not have any playlist") {
			return;
		}
		else {
			$playlist_id = $playlist->id;
			$songs = Playlist_History_Model::get_song_by_id($playlist_id);
			//$songs[$i]->artist;
			//$songs[$i]->title;
			if ($songs === false) {
				return "you do not have any songs in your playlist";
			}
			else {
				return $songs;
			}
		}
	}

	public function add_song_to_playlist($user_id, $playlist_id, $song_id) {
		return;
	}

	public function delete_song_from_playlist($user_id, $playlist_id, $song_id) {
		return;
	}
}