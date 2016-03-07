<div id="contents">
    <div class="section">
        <p><h1>Movie Information</h1></p>
        <p>Official Name of the film: <?php echo $dataArray['title'];?></p>
        <p>Id: <?php echo $dataArray['id'];?></p>
        <p>Tagline: <?php echo $dataArray['tagline'];?></p>
        <p>Vote Average: <?php echo $dataArray['voteAverage'];?></p>
        <p>Vote Count: <?php echo $dataArray['voteCount'];?></p>
    </div>
    <div class="section contact">
        <p><span><?php echo $dataArray['title'];?></span></p>
        <p><img src="<?php echo $dataArray['img'] ?>"/></p>
        <p>-Official poster of the film-</p>
    </div>
</div>
