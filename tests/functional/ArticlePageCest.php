<?php

class ArticlePageCest
{
    // tests
    public function checkArticlePageThroughTheList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'printed dress');
        $I->pressKey('#search_query_top', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->seeElement('..product_img_link');
        $I->seeNumberOfElements('.product_img_link', 5);
    }
}
