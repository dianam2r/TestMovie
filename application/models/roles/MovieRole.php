<?php
/*
 * ----------------
 * Movie Role Model
 * ----------------
 * 
 * This class handles all the data you can get from a MovieRole
 *
 */

class MovieRole extends Role{

    //------------------------------------------------------------------------------
    // Class Variables
    //------------------------------------------------------------------------------

    private $_data;

    /*-------------------
     * 	Construct Function
     *-------------------
     * 
     * 	@param array $data An array with the data of a MovieRole
     * 
     */
    
    public function __construct($data, $idPerson) {
        $this->_data = $data;

        parent::__construct($data, $idPerson);
    }

    //------------------------------------------------------------------------------
    // Get Functions
    //------------------------------------------------------------------------------

    /*-----------------
     * Get Movie Title
     *-----------------  
     *  Get the Movie's title of the role
     *
     *  No parameters required.
     * 
     *  @return string
     */
    
    public function getMovieTitle() {
        return $this->_data['title'];
    }

    /*-------------
     * Get Movie ID
     *-------------
     * 
     *  Get the Movie's id
     *
     *  No parameters required.
     * 
     *  @return int
     * 
     */
    
    public function getMovieID() {
        return $this->_data['id'];
    }

    /*
     * ------------------------
     * Get Movie Original Title
     * ------------------------
     * 
     *  Get the Movie's original title of the role
     *  
     *  No parameters required
     *  
     *  @return string
     */
    public function getMovieOriginalTitle() {
        return $this->_data['original_title'];
    }

    /*
     * ------------------------
     * Get Movie Release Date()
     * ------------------------
     *  
     *  Get the Movie's release date of the role
     *
     *  No parameters required
     * 
     *  @return string
     */
    public function getMovieReleaseDate() {
        return $this->_data['release_date'];
    }

    //------------------------------------------------------------------------------
    // Export
    //------------------------------------------------------------------------------

    /*
     *----------
     * Get JSON 
     *----------
     * 
     *  Get the JSON representation of the consult.
     *
     *  @return string
     */
    public function getJSON() {
        return json_encode($this->_data, JSON_PRETTY_PRINT);
    }
}
?>