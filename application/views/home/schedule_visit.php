
<form action="home/schedule_visit" method="post">
Contact no:<br>
<input type="text" name="contact" class="form-control">
<br>
Date:
<input type="date" name="date" class="form-control">
<br>
Time:
<input type="time" name="time" class="form-control"></input>
<br>
<input type="hidden" name="pg_id" value="<?= $id;?>"/>
<input type="submit">

</form>


