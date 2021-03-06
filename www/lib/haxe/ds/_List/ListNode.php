<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/ds/List.hx
 */

namespace haxe\ds\_List;

use \php\Boot;

class ListNode {
	/**
	 * @var mixed
	 */
	public $item;
	/**
	 * @var ListNode
	 */
	public $next;

	/**
	 * @param mixed $item
	 * @param ListNode $next
	 * 
	 * @return void
	 */
	public function __construct ($item, $next) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/ds/List.hx:264: characters 3-19
		$this->item = $item;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/ds/List.hx:265: characters 3-19
		$this->next = $next;
	}
}

Boot::registerClass(ListNode::class, 'haxe.ds._List.ListNode');
