<?php

    require_once __DIR__ . "/vendor/autoload.php";


    use CrawlerXpath\src\PageObject\HtmlTablesPageObject;
    use GuzzleHttp\Client;

    $client = new Client();

    $po = new HtmlTablesPageObject($client);

    $parser = $po->getPageHtmlTables();

    foreach ($parser->getTablesTagsIterator() as $item){

    var_dump("<br>");
    var_dump($item);

    }