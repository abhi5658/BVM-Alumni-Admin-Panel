<?php

   include('conn.php');
$query="select * from notification";
$result=$con->query($query);;

//here you check to see if any data has been found and you define the width of the table

If($result){

echo "<table>
      <tr>";
$i=0;

    If(mysqli_num_rows($result)>0)
    {
         //here you fetch the data from the database and print it in the respective columns   
        while($i<mysqli_num_fields($result))
        {    
             echo "<th>".mysqli_fetch_field($result)->name."</th>";
             $i++;
        }
        echo "</tr>";

        $color=1;

        while($rows=mysqli_fetch_array($result, MYSQL_ASSOC))
        {    
            If ($color==1){
                echo "<tr>";

                foreach ($rows as $data){
                    echo "<td >".$data. "</td>";
                }
                    echo "<td >"."<a href = \"call5.php?headline=".$rows['message']."\">"."<button> Delete Notification </button>". "</td>";
                $color=2;
            }
            $color=1;
        }
     } else {
        echo"no results found";
        echo "</table>";
    }
    }    else {
        echo "error running query:".MYSQL_error();
}
?>
