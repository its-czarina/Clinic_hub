<html>

<?php
	foreach ($doctors->result() as $row)
	{
        echo $row->name;
        echo $row->specialization;
        echo $row->consultation_start.' '.$row->consultation_end;
	}
?>


</html>