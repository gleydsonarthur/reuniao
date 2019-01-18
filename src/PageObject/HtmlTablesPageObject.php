<?php
/**
 * Created by PhpStorm.
 * User: gleydson-barbosa
 * Date: 18/01/19
 * Time: 12:01
 */

namespace CrawlerXpath\src\PageObject;

use CrawlerXpath\src\PageObject;
use CrawlerXpath\src\Parser\HtmlTablesParser;

class HtmlTablesPageObject extends AbstractPageObject
{
    public function getPageHtmlTables()
    {
        $response = $this->client->get('https://www.w3schools.com/html/html_tables.asp');

        return new HtmlTablesParser($response->getBody()->getContents());
    }
}