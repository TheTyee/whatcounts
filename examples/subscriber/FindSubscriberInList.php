<?php
/**
 * Created by PhpStorm.
 * User: marksimonds
 * Date: 1/25/16
 * Time: 4:13 PM
 */

require_once('../config.php');

try
{
    /* initialize whatcounts */
    $whatcounts = new ZayconWhatCounts\WhatCounts( WC_REALM, WC_PASSWORD );

    $subscriber = new ZayconWhatCounts\Subscriber;
    $subscriber->setFirstName("Mark");
    $subscriber->setLastName("Simonds");
    $subscriber->setEmail("mark@zayconfoods.com");

    $subscribers = $whatcounts->findSubscriberInList($subscriber, 12, TRUE);
    var_dump($subscribers);
}
catch ( ZayconWhatCounts\Exception $e )
{
    var_dump( $e );
}