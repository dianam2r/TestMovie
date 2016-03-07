
<?php
/*
 * -----------------
 * Search Controller
 * -----------------
 * 
 * Author: Diana Mendoza
 * 
 * This class controls the view that interacts with the user. 
 * Each function will be explained before its definition. 
 *  
 */
class Search extends CI_Controller{
    
/*
 * -------------
 * Show function
 * -------------
 * 
 * Shows a message whenever a result isn't found.
 * Params: no parameters are required.
 *
 */    
   
    public function show(){
        //include(FCPATH."/application/libraries/tmdb-api.php");
        $this->load->helper('form');
        $this->load->view('pages/searchView',array('message'=>''));       
    }
    
    /*
     *---------------------
     *Search Actor function 
     *---------------------
     *
     * Looks for matches in the db with the criteria that the user typed in the form
     * Params: no parameters are required . 
     * 
     * Makes a call to the @showMessage($message) function in order to pass a message to the user whenever the search don't find a match.
     * 
     * Makes a call to the @showResult($data) function in order to pass the data to the respective view.
     * 
     */
    
    function searchActor(){
        
        $criteria = $this->input->post('criteria');
        include(FCPATH."/application/libraries/tmdb-api.php");
        $tmdb = new TMDB();
         
        $searchActor = $tmdb->searchPerson($criteria);
        $searchMovie = $tmdb->searchMovie($criteria);
        
        if($searchActor==NULL){
            $this->showMessage("No results were found.");
        }
        else{
            $data = array('searchActor'=>$searchActor,'searchMovie'=>$searchMovie);
            $this->showResult($data);
        }       
    }
    
    /*
     * --------------------
     * Show Result function
     * --------------------
     * 
     * Loads the resulting data in the respective view.
     * Params: $data -> array that contains the information of the resulting match in the search
     * 
     */
    
    function showResult($data){
        $this->load->view('templates/header');
        $this->load->view('pages/searchResult',$data);
        $this->load->view('templates/footer');        
    }
    
    /*
     * ---------------------
     * Show Message function
     * ---------------------
     * 
     * Pass the data of the resulting search to the respective view.
     * Params: $message -> string that tells the user that the search couldn't find a match.
     * 
     */
    
    function showMessage($message){
        $data = array('message'=>$message);
        $this->load->helper('form');
        $this->load->view('pages/searchView',$data);
    }
    
}

