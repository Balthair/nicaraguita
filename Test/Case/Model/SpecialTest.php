<?php
App::uses('Special', 'Model');

/**
 * Special Test Case
 *
 */
class SpecialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.special',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Special = ClassRegistry::init('Special');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Special);

		parent::tearDown();
	}

}
