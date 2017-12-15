<?php

namespace LaSalle\Domain;

class Contact 
{
    /**
     * Contact id.
     *
     * @var integer
     */
    private $id;

    /**
     * Contact nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Contact email.
     *
     * @var string
     */
    private $email;

    /**
     * Contact content.
     *
     * @var string
     */
    private $message;

    /**
     * Contact datetime send.
     *
     * @var datetime
     */
    private $dateEnvoi;




    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }



    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }



    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }



    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }



    public function getDateEnvoi() {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi($dateEnvoi) {
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }

}