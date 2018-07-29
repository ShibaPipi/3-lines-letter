<?php

	/**
	 * php 三行情书，源码
	 *
	 * 一开始第 19 行没有被注释掉，由于被人技术不精，以为不先声明 $myHeart 的话 php 会报错
	 *
	 * 后面发现可以强行打印 $myHeart（结果为 NULL），不止如此，只要你定义的变量是合法的
	 *
	 * 此时做到了源码和输出均有三行的统一结果 （第一行不算源码，别问我为什么）
	 *
	 * 遗憾：第 21 行，第 23 行打印结果是 bool(true)，不是 true
	 *
	 * 我还很菜，请大佬们轻喷
	 */

	// $myHeart = NUll;

	var_dump($myHeart);					// 

	var_dump((bool) ++$myHeart);		// 要么不爱，要么爱你

	var_dump((bool) --$myHeart);		// 你入我心，挥之不去
