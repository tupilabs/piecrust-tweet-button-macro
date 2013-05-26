<?php

namespace PieCrust\Page\Iteration;

use PieCrust\PieCrustException;


/**
 * An iterator that sorts an input iterator by timestamp.
 */
class ConfigSortIterator extends BaseIterator implements \OuterIterator
{
    protected $iterator;
    protected $sortByName;
    protected $sortByReverse;

    public function __construct($iterator, $sortByName, $sortByReverse = false)
    {
        parent::__construct();

        $this->iterator = $iterator;
        $this->sortByName = $sortByName;
        $this->sortByReverse = $sortByReverse;
    }

    public function getInnerIterator()
    {
        return $this->iterator;
    }

    protected function load()
    {
        $items = iterator_to_array($this->iterator);
        if (false === usort($items, array($this, "sortByCustom")))
            throw new PieCrustException("Error while sorting posts by '{$this->sortByName}'.");
        return $items;
    }

    protected function sortByCustom($post1, $post2)
    {
        $value1 = $post1->getConfig()->getValue($this->sortByName);
        $value2 = $post2->getConfig()->getValue($this->sortByName);
        
        if ($value1 == null && $value2 == null)
            return 0;
        if ($value1 == null && $value2 != null)
            return $this->sortByReverse ? 1 : -1;
        if ($value1 != null && $value2 == null)
            return $this->sortByReverse ? -1 : 1;
        if ($value1 == $value2)
            return 0;
        if ($this->sortByReverse)
            return ($value1 < $value2) ? 1 : -1;
        else
            return ($value1 < $value2) ? -1 : 1;
    }
}

