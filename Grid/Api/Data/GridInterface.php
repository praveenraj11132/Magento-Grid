<?php

namespace Praveen\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const Name = 'name';
    const Email = 'email';
    const Mobile = 'mobile';

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId();

    public function setId($id);
    

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName();

    /**
     * Set Title.
     */
    public function setName($Name);

    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getEmail();

    /**
     * Set Content.
     */
    public function setEmail($Email);

    /**
     * Get Publish Date.
     *
     * @return varchar
     */
    public function getMobile();

    /**
     * Set PublishDate.
     */
    public function setMobile($Mobile);

   
}