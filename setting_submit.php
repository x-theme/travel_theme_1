<?php
for ( $i=1; $i <=5; $i++ ) {
	if ( $in['forum_no_'.$i.'_bo_table'] ){
		x::meta('forum_no_'.$i.'_name', $in['forum_no_'.$i.'_bo_table']);
	}
	x::meta('forum_no_'.$i, $in['forum_no_'.$i] );
	
	
	x::meta("banner{$i}_text", $in["banner{$i}_text"]);
	x::meta("banner{$i}_url", $in["banner{$i}_url"]);
}	

for ( $i=1; $i<=3; $i++ ) {
	x::meta("travel_floating_banner{$i}_url", $in["travel_floating_banner{$i}_url"]);
}
	
	x::meta("travel_left_banner_url", $in["travel_left_banner_url"]);
	x::meta("travel_right_banner_url", $in["travel_right_banner_url"]);
	x::meta("travel_bottom_banner_url", $in["travel_bottom_banner_url"]);
	x::meta("travel_footer_tagline", $in["travel_footer_tagline"]);