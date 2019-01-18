<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 18/01/19
 * Time: 11:43
 */

namespace CrawlerXpath\src\Iterator;


use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractItaretor implements ForsetiIterator
{
    protected $iterator;

    /**
     * AbstractItaretor constructor.
     */
    public function __construct($html, $xpath)
    {
        $crawler = new Crawler();
        $crawler->AddHtmlContent($html);
        $this->iterator = $crawler->filterXPath($xpath)->getIterator();
    }


    public function next()
    {
        $this->iterator->next();
    }


    public function key()
    {
        return $this->iterator->key();
    }


    public function valid()
    {
        return $this->iterator->valid();
    }


    public function rewind()
    {
        $this->iterator->rewind();
    }


    public function count()
    {
        return $this->iterator->count();
    }
}