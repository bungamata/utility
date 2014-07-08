<?php

namespace BungaMata\Test\Utility;

use BungaMata\Test\BaseTestCase;
use BungaMata\Utility\Math;
use InvalidArgumentException;

class MathTest extends BaseTestCase {


	public function testPercent() {
		// test normal data, must return 20
		$this->assertEquals(Math::percent(20, 100), 20);

		// test if value is zero and summary is zero there will be no exception
		$this->assertEquals(Math::percent(0, 0), 0);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testPercentException() {
		Math::percent(20, 0);
	}

	public function testDivide() {
		$this->assertEquals(Math::divide(10, 2), 5);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testDivideException() {
		Math::divide(20, 0);
	}

	public function testDiscountAmount() {
		$this->assertEquals(Math::discountAmount(100, 20), 20);
	}
}