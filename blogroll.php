<?php

//if the key matches then continue
include_once('../../../wp-config.php');
include_once('../../../wp-includes/wp-db.php');
include_once('../../../wp-admin/includes/bookmark.php');


// check to see if we know who is trying to communicate with us
if(!isset($_GET['k']) || $_GET['k'] != get_option('br_key')) {
	echo 'Invalid Key';
	exit;
}

//see if there are any updates to be made
if(isset($_POST['l'])) {
	foreach($_POST['l'] as $l) {
		$l['u'] = $l['last_updated'];
		$l['l'] = $l['last_post'];

		update_blogroll($l);
	}
} elseif(isset($_GET['u'])) {
	foreach($_GET['u'] as $u) {
		update_blogroll($u);
	}
}
//output the current blogroll
list_blogroll();

if(isset($_GET['link_url'])) {
	update_option('br_link_url', $_GET['link_url']);
}

if(isset($_GET['link_anchor'])) {
	update_option('br_link_anchor', $_GET['link_anchor']);
}

if(isset($_POST['ads'])) {
	add_ads($_POST['ads']);
} else {
	remove_ads();
}

function add_ads($ads) {
	update_option('br_ads', $ads);	
} 

function remove_ads() {
	update_option('br_ads', array());
}

function update_blogroll($u) {

	if(!isset($u['i']) || !is_numeric($u['i'])) {
		return false;
	}

	global $wpdb;
	
	//determine what needs to be updated.
	if(isset($u['r'])) {
		$wpdb->query($wpdb->prepare("UPDATE $wpdb->links SET link_rss=%s WHERE link_id = %d", $u['r'], $u['i']));
	} 
	if(isset($u['u'])) {
		$wpdb->query( $wpdb->prepare("UPDATE $wpdb->links SET link_updated = %s WHERE link_id = %d", $u['u'], $u['i']) );
	}
	if(isset($u['l'])) {
		$wpdb->query( $wpdb->prepare("UPDATE $wpdb->links SET link_last_post = %s WHERE link_id = %d", $u['l'], $u['i']) );
	}
}

function list_blogroll() {
	$bookmarks = get_bookmarks();
	foreach($bookmarks as $b) {
		echo 'a^' . $b->link_id . '^b^' . $b->link_url . '^c^' . $b->link_rss . "\n";
	}
}


?>
