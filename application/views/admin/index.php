<a class="nav-link" href="admin/create">Add event</a>
<h1>Events</h1>
<?php
        if(isset($workshops)){
            foreach($workshops as $key => $val)
            {?>
                <div class='d-inline-block' style="margin:10px">
                    <img class="img" src="<?=base_url()?>/uploads/<?= $val['workshop_poster_link']?>" alt="<?= $val['workshop_name']?>" width="360px">
                    <p class='text-center font-weight-bold'><a href="admin/view/<?=$val['id']?>" class="badge badge-secondary p-2 m-2 d-block"><?=$val['workshop_name']?></a></p>
                    <form action="<?=base_url()?>admin/add_participants/<?=$val['id']?>" method="post" class="text-center m-3">
                        <input type="submit" name="add_participants" value="Add Participants" class="btn btn-success">
                    </form>
                    <form action="<?=base_url()?>admin/edit/<?=$val['id']?>" method="post" class="text-center m-3">
                        <input type="submit" name="edit_event" value="Edit event" class="btn btn-success">
                    </form>
                </div>
<?php       }
        }
?>    
