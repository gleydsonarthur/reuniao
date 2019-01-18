<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 18/01/19
 * Time: 12:21
 */

namespace CrawlerXpath\src\Parser;

use CrawlerXpath\src\Iterator\HtmlTablesIterator;

class HtmlTablesParser extends AbstractParser
{
    public function getTablesTagsIterator()
    {
        return new HtmlTablesIterator($this->getHtml(),'//table[@class="w3-table-all notranslate"]/tr[position()>1]');
    }
}