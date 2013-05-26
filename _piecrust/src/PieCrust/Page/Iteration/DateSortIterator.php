<?php

namespace PieCrust\Page\Iteration;

use PieCrust\PieCrustException;


/**
 * An iterator that sorts an input iterator by a given
 * configuration setting.
 */
class DateSortIterator extends BaseIterator implements \OuterIterator
{
    protected $iterator;

    public function __construct($iterator)
    {
        parent::__construct();

        $this->iterator = $iterator;
    }

    public function getInnerIterator()
    {
        return $this->iterator;
    }

    protected function load()
    {
        $items = iterator_to_array($this->iterator);
        if (false === usort($items, array($this, "sortByReverseTimestamp")))
            throw new PieCrustException("Error while sorting posts by timestamp.");
        return $items;
    }

    protected function sortByReverseTimestamp($post1, $post2)
    {
        $timestamp1 = $post1->getDate();
        $timestamp2 = $post2->getDate();

        if ($timestamp1 == $timestamp2)
            return 0;
        if ($timestamp1 < $timestamp2)
            return 1;
        return -1;
    }
}

