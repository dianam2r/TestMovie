<div id="contents">
    <div id="about">
        <table align="center">
            <tr>
                <th colspan="2"><h1>Results of the search for Actors criteria</h1></th>
            </tr>
                <?php
                    foreach ($searchActor as $person) {
                        echo '<tr><td>' . $person->getName() . '</td><td><a href="/TestMovies/index.php/actor/show/'. $person->getID().'">'.$person->getID(). '</a></td></tr>';
                    }
                ?>  
        </table>
        <br>
        <table align="center">
            <tr>
                <th colspan="2"><h1>Results of the search for Movies criteria </h1></th>
            </tr>
                <?php
                    foreach($searchMovie as $movie){
                        echo '<tr><td>'. $movie->getTitle() .'</td><td><a href="/TestMovies/index.php/movies/show/'. $movie->getID() .'">'. $movie->getID() .'</a></td></tr>';
                    }
                ?>  
        </table>
    </div>
</div>
