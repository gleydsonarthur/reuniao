<?php

    namespace CrawlerXpath\src\Iterator;


    use Symfony\Component\DomCrawler\Crawler;

    class Iterator implements \Countable, \Iterator
    {
        private $iterator;

        public function __construct($html, $xpath)
        {
            $crawler = new Crawler();
            $crawler->addHtmlContent($html);
            $this->iterator = $crawler->filterXPath($xpath)->getIterator();
        }

        public function current()
        {
            //$item->getElementsByTagName('td')->item(2)->textContent;
            $tds = $this->iterator->current()->getElementsByTagName('td');
            $empresa = new \stdClass();
            $empresa->company = $tds->item(0)->textContent;
            $empresa->contact = $tds->item(1)->textContent;
            $empresa->country = $tds->item(2)->textContent;
            return $empresa;

            return [
                'Company' => $tds->item(0)->textContent,
                'Contact' => $tds->item(1)->textContent,
                'Country' => $tds->item(2)->textContent
            ];
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