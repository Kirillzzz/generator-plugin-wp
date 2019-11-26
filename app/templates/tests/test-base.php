<?php
/**
 * <%= mainclassname %>.
 *
 * @since   <%= version %>
 * @package <%= mainclassname %>
 */

/**
 * <%= mainclassname %>.
 *
 * @since   <%= version %>
 * @package <%= mainclassname %>
 */
class <%= mainclassname %>_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  <%= version %>
	 */
	public function test_class_exists() {
		$this->assertTrue( class_exists( '<%= classname %>' ) );
	}

	/**
	 * Test that our main helper function is an instance of our class.
	 *
	 * @since  <%= version %>
	 */
	public function test_get_instance() {
		$this->assertInstanceOf( '<%= classname %>', <%= prefix %>() );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  <%= version %>
	 */
	public function test_sample() {
		$this->assertTrue( true );
	}
}
