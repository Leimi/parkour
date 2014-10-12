<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */
namespace Parkour\Functor;



/**
 *
 */
class LowerOrEqual {

	/**
	 *	Tells if the first value is lower than or equal to the second.
	 *
	 *	@param mixed $first First value.
	 *	@param mixed $second Second value.
	 *	@return boolean Result.
	 */
	public function __invoke($first, $second) {
		return $first <= $second;
	}
}
