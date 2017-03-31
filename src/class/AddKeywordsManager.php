<?php

namespace wcs;

class AddKeywordsManager
{
    const TABLE = "keywords_table";

    /**
     * @var string $keywords
     */
    private $bdd;

    /**
     * @var string
     */
    private $keyword_field;

    /**
     * UserManager constructor.
     * @param BddManager $bdd
     */
    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    /**
     * @param string $firstName
     */
    public function setKeyword_Field($keyword_field_form)
    {
        $this->keyword_field = $this->escapeField($keyword_field_form);
    }

    public function addKeyword_field()
    {
        $sql = "INSERT INTO " . self::TABLE . " (keyword_field) 
                VALUES ('$this->keyword_field');";
        $this->bdd->execSql($sql);
    }

    /**
     * @param string $field
     * @return string
     */
    private function escapeField($field)
    {
        return mysqli_real_escape_string($this->bdd->getConnection(), $field);
    }

}