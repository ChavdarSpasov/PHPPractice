<?php
class Book
{
    protected $bookTitle;
    protected $bookAuthor;
    protected $bookPrice;

    public function __construct($bookTitle,$bookAuthor,$bookPrice)
    {
        $this->setBookTitle($bookTitle);
        $this->setBookAuthor($bookAuthor);
        $this->setBookPrice($bookPrice);
    }

    public function setBookTitle($bookTitle)
    {
        if (strlen($bookTitle) < 3){
            throw new Exception('Title not valid!');
        }else{
            $this->bookTitle = $bookTitle;
        }
    }

    public function setBookAuthor($bookAuthor)
    {
       $AuthorData = explode(' ',$bookAuthor);
       $AuthorSecondName = str_split($AuthorData[1]);

       if (is_numeric($AuthorSecondName[0])){
           throw new Exception('Author not valid!');
       }else{
           $this->bookAuthor = $bookAuthor;
       }
    }

    public function setBookPrice($bookPrice)
    {
        if ($bookPrice < 0 or $bookPrice == 0){
            throw new Exception('Price not valid!');
        }else{
            $this->bookPrice = $bookPrice;
        }
    }

    public function getBookPrice()
    {
           return $this->bookPrice;
    }

    public function __toString()
    {
        return "OK\n" .$this->getBookPrice();
    }

}