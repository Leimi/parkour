<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */
namespace Parkour\Functor;



/**
 *
 */
class NotEqual {

	/**
	 *	Tells if two values aren't equal.
	 *
	 *	@param mixed $first First value.
	 *	@param mixed $second Second value.
	 *	@return mixed Result.
	 */
	public function __invoke($first, $second) {
		return $first != $second;
	}
}
