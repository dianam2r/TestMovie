<div id="contents">
    <div class="section">
        <h1>Actor Roles in Movies</h1>
        <ul>
        <?php 
        foreach($dataArray['roles']as$movieRole){
            echo '<li>(' .$movieRole->getMovieReleaseDate( ).') '. $movieRole->getCharacter() . ' in <a href="/TestMovies/index.php/movies/show/' . $movieRole->getMovieID() . '">' . $movieRole->getMovieTitle() . '</a></li>';
        }
        ?>
        </ul>    
        <br><br>
        <h1>Actor Roles in TV Shows</h1>
        <ul>
        <?php 
        foreach($dataArray['tvRoles']as$tvShowRole){
            echo '<li>('.$tvShowRole->getTVShowFirstAirDate( ).')' .$tvShowRole->getCharacter() . ' in ' . $tvShowRole->getTVShowName() . '</a></li>';
        }
        ?>
        </ul>    
    </div>
    <div class="section contact">
        <p><span>Actor Information</span></p>
        <p><img src="<?php echo $dataArray['img'] ?>"/></p>
        <p>Name: <?php echo $dataArray['name'];?></p>
        <p>Id: <?php echo $dataArray['id'];?></p>
        <p>Birthday: <?php echo $dataArray['birthday'];?></p>
        <p>Popularity: <?php echo $dataArray['popularity'];?></p>
    </div>
</div>