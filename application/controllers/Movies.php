<?php
/*
 * -----------------
 * Movies Controller
 * -----------------
 * 
 * Author: Diana Mendoza
 * 
 * @getDataMovie() returns an array which includes basic information of the selected movie
 * Params: $movieId -> Id of the selected movie.
 * 
 * @show() calls the appropriate view to show the infomation returned by the @getActor() function.
 * Params: $movieId -> Id of the selected movie.
 *  
 */
class Movies extends CI_Controller {
    
    function getDataMovie($movieId){
        include(FCPATH."/application/libraries/tmdb-api.php");
        $tmdb = new TMDB();
        $movie = $tmdb->getMovie($movieId);
        $dataArray = array('title'=>$movie->getTitle(),'id'=>$movie->getID(),'tagline'=>$movie->getTagline(),'voteAverage'=>$movie->getVoteAverage(),'img'=>$tmdb->getImageURL('w185') . $movie->getPoster(),'voteCount'=>$movie->getVoteCount());
        return $dataArray;
    }
    
    public function show($movieId){
        $dataArray = $this->getDataMovie($movieId);
        $data = array('dataArray'=>$dataArray);
        $this->load->view('templates/header');
        $this->load->view('pages/movieView',$data);
        $this->load->view('templates/footer');
    }
    
}
?>