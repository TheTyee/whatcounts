<?php
	/**
	 * Created by PhpStorm.
	 * User: marksimonds
	 * Date: 2/3/16
	 * Time: 2:30 PM
	 */

	require_once('../config.php');

	try
	{
		/* initialize whatcounts */
		$whatcounts = new ZayconWhatCounts\WhatCounts( WC_REALM, WC_PASSWORD );

		$article = new ZayconWhatCounts\Article();
		$article->setId(5);

		$whatcounts->getArticleById($article);

		if (class_exists('Kint')) {
			Kint::dump($article);
		} else {
			var_dump($article);
		}
	}
	catch ( ZayconWhatCounts\Exception $e )
	{
		if (class_exists('Kint')) {
			Kint::dump($e);
		} else {
			var_dump($e);
		}
	}