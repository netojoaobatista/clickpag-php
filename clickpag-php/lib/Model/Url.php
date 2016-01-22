<?php
/**
 * Url
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
 * Url Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Clickpag\
 * @author      http://github.com/clickpag-api/clickpag-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/clickpag-api/clickpag-codegen
 */
class Url implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $clickpagTypes = array(
        'kind' => 'string',
        'url' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'kind' => 'kind',
        'url' => 'url'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'kind' => 'setKind',
        'url' => 'setUrl'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'kind' => 'getKind',
        'url' => 'getUrl'
    );
  
    
    /**
      * $kind cancel, redirect, notification
      * @var string
      */
    protected $kind;
    
    /**
      * $url Url de callback
      * @var string
      */
    protected $url;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->kind = $data["kind"];
            $this->url = $data["url"];
        }
    }
    
    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
  
    /**
     * Sets kind
     * @param string $kind cancel, redirect, notification
     * @return $this
     */
    public function setKind($kind)
    {
        
        $this->kind = $kind;
        return $this;
    }
    
    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url Url de callback
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
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