<?php

namespace HappyPHP\Domain;


class Site
{
    /**
     * Site id.
     *
     * @var integer
     */
    protected $id;

    /**
     * Site url.
     *
     * @var string
     */
    protected $url;

    /**
     * Site api key.
     *
     * @var string
     */
    protected $key;

    /**
     * Site compte lié.
     *
     * @var integer
     */
    protected $compte;




    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = (int)$id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getkey() {
        return $this->key;
    }

    public function setKey($key) {
        $this->key = $key;
    }

    public function getCompte() {
        return $this->compte;
    }

    public function setKey($compte) {
        $this->compte = (int)$compte;
    }
}
