<?php
class GoldenEditionBook extends Book
{
    public function __construct($bookTitle,$bookAuthor,$bookPrice)
    {
        parent::__construct($bookTitle,$bookAuthor,$bookPrice);
    }

    public function getBookPrice()
    {
        return parent::getBookPrice() * 1.3;
    }
}