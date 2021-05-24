<?php

class SearchCest
{
    /*
    * проверить поиск по тексту и количеству найденных элементов
    */
    public function checkSearchByText(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'blouse');
        $I->pressKey('#search_query_top', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->seeElement('.product_list');
        $I->seeNumberOfElements('.content_sortPagiBar', 2);
    }
}
