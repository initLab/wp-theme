<?php

p2p_register_connection_type( array(
    'name' => 'multiple_speakers',
    'from' => 'courses',
    'to' => 'user'
) );

p2p_register_connection_type( array(
    'name' => 'multiple_authors',
    'from' => 'tribe_events',
    'to' => 'user'
) );


?>
