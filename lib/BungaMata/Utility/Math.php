<?php

namespace BungaMata\Utility;

use InvalidArgumentException;

/**
 * Class Math for simple purpose of math functions
 * @package BungaMata\Utility
 */
class Math {
	/**
	 * Calculate Percentage
	 *
	 * @param int|float $value Value of one summary
	 * @param int|float $summary Summary of total value
	 *
	 * @throws InvalidArgumentException
	 * @return float
	 */
	static function percent($value, $summary) {
		if($summary == 0 && $value != 0) {
			throw new InvalidArgumentException('You can\'t get percentage with summary 0');
		}

		if($summary == 0 && $value == 0) {
			$return = 0;
		} else {
			$return = $value / $summary * 100;
		}

		return (float)$return;
	}

	/**
	 * Safe divide function with thrown error
	 *
	 * @param int|float $arg1
	 * @param int|float $arg2
	 *
	 * @throws InvalidArgumentException
	 * @return float
	 */
	static function divide($arg1, $arg2) {
		if($arg2 == 0) {
			throw new InvalidArgumentException('You can\'t divide by zero');
		}

		return (float) $arg1 / $arg2;
	}

	/**
	 * Calculate Discount Amount
	 *
	 * @param int|float $value
	 * @param int|float $discount
	 *
	 * @return float
	 */
	static function discountAmount($value, $discount) {
		if($value == 0) return 0;
		if($discount == 0) return 0;
		$discountAmount = $value * $discount / 100;

		return (float)$discountAmount;
	}
} 