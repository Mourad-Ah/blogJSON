
<?php
 
class Article
{
    public $id;

    public $title;

    public $content;

    public function getString()
    {

        return $this->id."--". $this->title."--". $this->content;

    }

}



