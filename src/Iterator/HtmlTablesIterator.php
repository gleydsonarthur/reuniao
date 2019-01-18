<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 18/01/19
 * Time: 12:25
 */

namespace CrawlerXpath\src\Iterator;


class HtmlTablesIterator extends AbstractItaretor
{
    public function current()
    {
        $tds = $this->iterator->current()->getElementsByTagName('td');

        $tags = new \stdClass();

        $tags->tag = $tds->item(0)->textContent;
        $tags->description = $tds->item(1)->textContent;

        return $tags;
    }
}