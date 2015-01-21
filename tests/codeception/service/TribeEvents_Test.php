<?php

/**
 * An example test checking if the Tribe__Events__Events class exists after initialization.
 *
 * @group   core
 *
 * @package Tribe__Events__Events
 */
class TribeEvents_Test extends WP_UnitTestCase {

	/**
	 * Test if the Tribe__Events__Events class exists.
	 *
	 */
	function test_events_class_exists() {
		$class = 'Tribe__Events__Events';
		$this->assertTrue( class_exists( $class ), 'Class "' . $class . '" does not exist.' );
	}

}