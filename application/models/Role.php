<?php
/*
 * ----------------
 * Role Model Class
 * ----------------
 * 
 * 	This class handles all the data you can get from a Role
 *
 */

class Role{

    //------------------------------------------------------------------------------
    // Class Variables
    //------------------------------------------------------------------------------

    private $_data;

    /*--------------------
     * 	Construct Function
     * -------------------
     *
     * 	@param array $data An array with the data of a Role
     * 
     */
    
    protected function __construct($data, $ipPerson) {
        $this->_data = $data;
        $this->_data['person_id'] = $ipPerson;
    }

    //------------------------------------------------------------------------------
    // Get Variables
    //------------------------------------------------------------------------------

    /*
     * ------------------------
     * Get Character
     * ------------------------
     *  
     *  Get the Role's character
     *
     *  No parameters required
     * 
     *  @return string
     */
    
    public function getCharacter() {
        return $this->_data['character'];
    }

    /*
     * ----------
     * Get Poster
     * ----------
     *  
     *  Get the Movie's poster
     *
     *  No parameters required
     * 
     *  @return string
     */
    public function getPoster() {
        return $this->_data['poster_path'];
    }

    /*
     * -------------
     * Get Generic
     * -------------
     *
     *  Get an item of the array. Although it is not the common way to do so.
     *
     *  @param string $item The item of the $data array you want
     * 
     *  @return array
     */
    
    public function get($item = ''){
        return (empty($item)) ? $this->_data : $this->_data[$item];
    }
}
?>
