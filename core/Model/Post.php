<?php

namespace BLOG\core\Model;

class Post extends \BLOG\core\Abstracts\AbstractModel {

    protected $id;

    protected $crdate;

    protected $state;

    protected $author;

    protected $files;

    protected $title;

    protected $teaser;

    protected $text;

    protected $shortname;

    protected $modified;

    protected $image;

    protected $category;

    protected function getId() {
        return $this->id;
    }

    protected function getCategory() {
        return $this->category;
    }

    protected function getCrdate() {
        return $this->crdate;
    }

    protected function getAuthor() {
        return $this->author;
    }
}
