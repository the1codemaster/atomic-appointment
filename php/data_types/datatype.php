<?php
class DataType {
    // The data stored for this data type, all
    protected $_data = array();

    // Tells wether the data is stored in the database.
    public $saved;

    /**
     * Default constructor that will be used with only one argument.
     *
     * Is typically used by extensions of the Database class.
     *
     * @param array $data
     *
     * @return DataType
     */
    public function __construct( $data, $saved = false ) {
        $this->_data = $data;

        $this->saved = $saved;
    }

    /**
     * Sets a specific variable for this object.
     *
     * @param string $name
     * @param mixed $val
     */
    public function setDataVar( $name,  $val ) {
        $this->_data[$name] = $val;

        // Update the status of saved...
        $this->saved = false;
    }

    /**
     * Returns a specific variable for the object.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getDataVar( $name ) {
        return isset( $this->_data[$name] ) ? $this->_data[$name] : null;
    }

    /**
     * Return all the data related to this DataType.
     *
     * @return array
     */
    public function getData() {
        return $this->_data;
    }

    /**
     * Saves the current
     */
    public function save() {
        Database::save( $this );
    }

}

require_once 'user.php';
require_once 'client.php';
require_once 'appointment.php';
require_once 'appointmentgroup.php';
