<?php
/**
 * Response
 *
 * PHP version 5
 *
 * @category Class
 * @package  Clickpag\
 * @author   http://github.com/clickpag-api/clickpag-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/clickpag-api/clickpag-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the clickpag code generator program.
 * https://github.com/clickpag-api/clickpag-codegen
 * Do not edit the class manually.
 */

namespace Clickpag\Model;

use \ArrayAccess;
/**
 * Response Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Clickpag\
 * @author      http://github.com/clickpag-api/clickpag-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/clickpag-api/clickpag-codegen
 */
class Response implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $clickpagTypes = array(
        'id' => 'string',
        'created_at' => '\DateTime',
        'reference' => 'string',
        'links' => '\Clickpag\Model\Link[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'created_at' => 'createdAt',
        'reference' => 'reference',
        'links' => 'links'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'reference' => 'setReference',
        'links' => 'setLinks'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'reference' => 'getReference',
        'links' => 'getLinks'
    );
  
    
    /**
      * $id identificador do recurso
      * @var string
      */
    protected $id;
    
    /**
      * $created_at Data de criação
      * @var \DateTime
      */
    protected $created_at;
    
    /**
      * $reference identificador do cliente
      * @var string
      */
    protected $reference;
    
    /**
      * $links links
      * @var \Clickpag\Model\Link[]
      */
    protected $links;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->created_at = $data["created_at"];
            $this->reference = $data["reference"];
            $this->links = $data["links"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id identificador do recurso
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param \DateTime $created_at Data de criação
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        
        $this->created_at = $created_at;
        return $this;
    }
    
    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
  
    /**
     * Sets reference
     * @param string $reference identificador do cliente
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets links
     * @return \Clickpag\Model\Link[]
     */
    public function getLinks()
    {
        return $this->links;
    }
  
    /**
     * Sets links
     * @param \Clickpag\Model\Link[] $links links
     * @return $this
     */
    public function setLinks($links)
    {
        
        $this->links = $links;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
