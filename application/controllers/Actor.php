<?php
/* ---------------------
 *    Actor Controller
 * ---------------------
 * 
 * Author: Diana Mendoza
 * 
 * @getActor() returns an array of arrays which includes basic information about the selected actor,
 * roles that he/she played, and tv shows in which he/she appeared.
 * Params: $actorId -> Id of the selected actor.
 * 
 * @show() calls the appropriate view to show the infomation returned by the @getActor() function.
 * Params: $actorId -> Id of the selected actor.
 * 
 */

class Actor extends CI_Controller{

    function getActor($actorId){
        include(FCPATH."/application/libraries/tmdb-api.php");
        $tmdb = new TMDB();
        $person = $tmdb->getPerson($actorId);
        $movieRoles = $person->getMovieRoles();
        $tvShowRoles = $person->getTVShowRoles();
        $dataArray = array('img'=>$tmdb->getImageURL('w185').$person->getProfile(),'name'=>$person->getName(),'id'=>$person->getID(),'birthday'=>$person->getBirthday(),'popularity'=>$person->getPopularity(),'roles'=>$movieRoles,'tvRoles'=>$tvShowRoles);
        return $dataArray;
    }
    
    public function show($actorId){
        $dataArray = $this->getActor($actorId);
        $data = array('dataArray'=>$dataArray);
        $this->load->view('templates/header');
        $this->load->view('pages/actorView',$data);
        $this->load->view('templates/footer');

    }
    
   
    
}
