<?php
// Add Custom Excerpt Length from global options page
if( ! function_exists( 'custom_excerpt_length' ) ) {

  if ( get_field( 'post_excerpt_length', 'options' ) ) {
      $excerpt_length = get_field( 'post_excerpt_length', 'options' );
  }

  function custom_excerpt_length( $length ) {
		return $excerpt_length;
	}
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999);

// Custom Excerpt 'More'
if ( ! function_exists( 'new_excerpt_more' ) ) {
  function new_excerpt_more($more) {
    return ' ...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
}

// Pagination
if( ! function_exists( 'shepherdmoon_pagination') ) {

	function shepherdmoon_pagination($pages = '', $range = 2)
	{
		$showitems = ($range * 2)+1;

		global $paged;
		if(empty($paged)) $paged = 1;

		if($pages == '')
		{
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages)
			{
				$pages = 1;
			}
		}

		if(1 != $pages)
		{
			echo "<div class='pagination'>";
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
			if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

			for ($i=1; $i <= $pages; $i++)
			{
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				{
					echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
				}
			}

			if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
			echo "</div>\n";
		}
	}
};
