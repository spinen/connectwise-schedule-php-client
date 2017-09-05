<?php
/**
 * ScheduleType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Schedule
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Schedule API
 *
 * ConnectWise Schedule API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Schedule\Model;

use \ArrayAccess;

/**
 * ScheduleType Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Schedule
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ScheduleType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ScheduleType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'identifier' => 'string',
        'charge_code' => '\Spinen\ConnectWise\Clients\Schedule\Model\ChargeCodeReference',
        'where' => '\Spinen\ConnectWise\Clients\Schedule\Model\ServiceLocationReference',
        'system_flag' => 'bool',
        '_info' => '\Spinen\ConnectWise\Clients\Schedule\Model\Metadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'identifier' => 'identifier',
        'charge_code' => 'chargeCode',
        'where' => 'where',
        'system_flag' => 'systemFlag',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'identifier' => 'setIdentifier',
        'charge_code' => 'setChargeCode',
        'where' => 'setWhere',
        'system_flag' => 'setSystemFlag',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'identifier' => 'getIdentifier',
        'charge_code' => 'getChargeCode',
        'where' => 'getWhere',
        'system_flag' => 'getSystemFlag',
        '_info' => 'getInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['charge_code'] = isset($data['charge_code']) ? $data['charge_code'] : null;
        $this->container['where'] = isset($data['where']) ? $data['where'] : null;
        $this->container['system_flag'] = isset($data['system_flag']) ? $data['system_flag'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 50)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['identifier'] === null) {
            $invalid_properties[] = "'identifier' can't be null";
        }
        if ((strlen($this->container['identifier']) > 1)) {
            $invalid_properties[] = "invalid value for 'identifier', the character length must be smaller than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        if ($this->container['identifier'] === null) {
            return false;
        }
        if (strlen($this->container['identifier']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ScheduleType., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        if ((strlen($identifier) > 1)) {
            throw new \InvalidArgumentException('invalid length for $identifier when calling ScheduleType., must be smaller than or equal to 1.');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets charge_code
     * @return \Spinen\ConnectWise\Clients\Schedule\Model\ChargeCodeReference
     */
    public function getChargeCode()
    {
        return $this->container['charge_code'];
    }

    /**
     * Sets charge_code
     * @param \Spinen\ConnectWise\Clients\Schedule\Model\ChargeCodeReference $charge_code
     * @return $this
     */
    public function setChargeCode($charge_code)
    {
        $this->container['charge_code'] = $charge_code;

        return $this;
    }

    /**
     * Gets where
     * @return \Spinen\ConnectWise\Clients\Schedule\Model\ServiceLocationReference
     */
    public function getWhere()
    {
        return $this->container['where'];
    }

    /**
     * Sets where
     * @param \Spinen\ConnectWise\Clients\Schedule\Model\ServiceLocationReference $where
     * @return $this
     */
    public function setWhere($where)
    {
        $this->container['where'] = $where;

        return $this;
    }

    /**
     * Gets system_flag
     * @return bool
     */
    public function getSystemFlag()
    {
        return $this->container['system_flag'];
    }

    /**
     * Sets system_flag
     * @param bool $system_flag
     * @return $this
     */
    public function setSystemFlag($system_flag)
    {
        $this->container['system_flag'] = $system_flag;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Schedule\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Schedule\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Schedule\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Schedule\ObjectSerializer::sanitizeForSerialization($this));
    }
}


