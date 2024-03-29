<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Clickpag\
 * @author      http://github.com/clickpag-api/clickpag-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/clickpag-api/clickpag-codegen
 */
class Order implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $clickpagTypes = array(
        'reference' => 'string',
        'settings' => '\Clickpag\Model\Settings',
        'customer' => '\Clickpag\Model\Customer',
        'shipping' => '\Clickpag\Model\Shipping',
        'items' => '\Clickpag\Model\Item[]',
        'urls' => '\Clickpag\Model\Url[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'reference' => 'reference',
        'settings' => 'settings',
        'customer' => 'customer',
        'shipping' => 'shipping',
        'items' => 'items',
        'urls' => 'urls'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'reference' => 'setReference',
        'settings' => 'setSettings',
        'customer' => 'setCustomer',
        'shipping' => 'setShipping',
        'items' => 'setItems',
        'urls' => 'setUrls'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'reference' => 'getReference',
        'settings' => 'getSettings',
        'customer' => 'getCustomer',
        'shipping' => 'getShipping',
        'items' => 'getItems',
        'urls' => 'getUrls'
    );
  
    
    /**
      * $reference ID do pedido na Loja
      * @var string
      */
    protected $reference;
    
    /**
      * $settings Configurações
      * @var \Clickpag\Model\Settings
      */
    protected $settings;
    
    /**
      * $customer cliente detentor do pedido
      * @var \Clickpag\Model\Customer
      */
    protected $customer;
    
    /**
      * $shipping dados de entrega
      * @var \Clickpag\Model\Shipping
      */
    protected $shipping;
    
    /**
      * $items carrinho de compras
      * @var \Clickpag\Model\Item[]
      */
    protected $items;
    
    /**
      * $urls Informa a url para um determinado fim
      * @var \Clickpag\Model\Url[]
      */
    protected $urls;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->reference = $data["reference"];
            $this->settings = $data["settings"];
            $this->customer = $data["customer"];
            $this->shipping = $data["shipping"];
            $this->items = $data["items"];
            $this->urls = $data["urls"];
        }
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
     * @param string $reference ID do pedido na Loja
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets settings
     * @return \Clickpag\Model\Settings
     */
    public function getSettings()
    {
        return $this->settings;
    }
  
    /**
     * Sets settings
     * @param \Clickpag\Model\Settings $settings Configurações
     * @return $this
     */
    public function setSettings($settings)
    {
        
        $this->settings = $settings;
        return $this;
    }
    
    /**
     * Gets customer
     * @return \Clickpag\Model\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
  
    /**
     * Sets customer
     * @param \Clickpag\Model\Customer $customer cliente detentor do pedido
     * @return $this
     */
    public function setCustomer($customer)
    {
        
        $this->customer = $customer;
        return $this;
    }
    
    /**
     * Gets shipping
     * @return \Clickpag\Model\Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
  
    /**
     * Sets shipping
     * @param \Clickpag\Model\Shipping $shipping dados de entrega
     * @return $this
     */
    public function setShipping($shipping)
    {
        
        $this->shipping = $shipping;
        return $this;
    }
    
    /**
     * Gets items
     * @return \Clickpag\Model\Item[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \Clickpag\Model\Item[] $items carrinho de compras
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
        return $this;
    }
    
    /**
     * Gets urls
     * @return \Clickpag\Model\Url[]
     */
    public function getUrls()
    {
        return $this->urls;
    }
  
    /**
     * Sets urls
     * @param \Clickpag\Model\Url[] $urls Informa a url para um determinado fim
     * @return $this
     */
    public function setUrls($urls)
    {
        
        $this->urls = $urls;
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
