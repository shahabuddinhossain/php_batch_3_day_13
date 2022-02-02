<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $series;
    protected $i;

    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

    }

    public function index()
    {
        header("Location: pages/index.php");
    }

    public function makeSeries() {
        if ( $this->startingNumber < $this->endingNumber ) {
            for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
            {
                $this->series .= $this->i. " ";
            }
        } elseif ( $this->startingNumber > $this->endingNumber )
        {
            for($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
            {
                $this->series .= $this->i. " ";
            }
        } else
        {
            echo $this->startingNumber;
        }
        /*echo $this->series;*/
        return $this->series;

    }

}