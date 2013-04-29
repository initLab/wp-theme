<?php

	function breadcrumbs() {

		global $wp_query;
		global $post;
		$ancestors = array_reverse(get_post_ancestors( $post->ID ));

		if(count($ancestors) > 0)
		{
			foreach ($ancestors as $a)
			{
				$link[] = array( get_the_title($a), get_permalink($a) );
			}
		}

		$type = $wp_query->query_vars[post_type];

		if($type)
		{
			$link[] = array( ucfirst($type), '/'.$type );
		}
		else
		{
			$link[] = array( get_the_title(), get_permalink() );
		}

		foreach($link as $l)
		{
			if (is_front_page())		{ echo '<h2>&nbsp;/ Hackerspace in Sofia</h2>';	}
			elseif ($l[0]=='Any')		{ echo '<h2>&nbsp;/ <a href="'.$l[1].'">Search</a></h2>';		}
			elseif ($l[0]=='Faq')		{ echo '<h2>&nbsp;/ <a href="'.$l[1].'">ЧЗВ</a></h2>';			}
			elseif ($l[0]=='Events')	{ echo '<h2>&nbsp;/ <a href="'.$l[1].'">Събития</a></h2>';		}
			elseif ($l[0]=='Courses')	{ echo '<h2>&nbsp;/ <a href="'.$l[1].'">Курсове</a></h2>';		}
			elseif ($l[0]=='News')		{ echo '<h2>&nbsp;/ <a href="'.$l[1].'">Новини</a></h2>';		}
			else
			{
				echo '<h2>&nbsp;/ <a href="'.$l[1].'">'.$l[0].'</a></h2>';
			}
		}

	}

?>
