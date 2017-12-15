<?php

namespace LaSalle\DAO;

use LaSalle\Domain\Contact;

class ContactDAO extends DAO
{

    /**
         * Save name, subject and message of contact form 
         *
         * 
         */
    public function saveContact($nom, $email, $message){

        $sql = "INSERT INTO formulaire (nom, email, message, dateEnvoi) VALUES ('". $nom . "', '" . $email . "', '" . $message . "', NOW())";
        $this->getDb()->exec($sql);

        // Convert query result to an array of domain objects
        // $articles = array();
        // foreach ($result as $row) {
        //     $articleId = $row['art_id'];
        //     $articles[$articleId] = $this->buildDomainObject($row);
        // }
        // return $articles;
    }






  }