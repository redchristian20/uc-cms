<h1>Events</h1>
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <div class='d-inline-block' style="margin:10px">
                    <img class="img" src="<?=base_url()?>/uploads/<?= $val['workshop_poster_link']?>" alt="<?= $val['workshop_name']?>" width="360px">
                    <p class='text-center font-weight-bold'><a href="Pages/show/<?=$val['id']?>" class="badge badge-secondary p-2 m-2 d-block"><?=$val['workshop_name']?></a></p>
                </div>
<?php       }
        }
?>    
