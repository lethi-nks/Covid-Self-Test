 <?php
    
    
    if(isset($_POST["decline"]))
      {
         
     $counts=1; 
     
             while($counts<=20) 
             {
            $sql = /**"DELETE FROM `tbl_appointment` WHERE `tbl_appointment`.'name' = $emp_id" ;**/
           "DELETE FROM `tbl_appointment` WHERE `tbl_appointment`.`app_id` = $counts";
            if (mysqli_query($conn, $sql)) 
            {
                echo "Record deleted successfully";
              } 
              else 
              {
                echo "Error deleting record: " . mysqli_error($conn);
              }
          
          $counts++;}
            
           /** $results = $conn -> query($sql);
            if($conn -> affected_rows >0)
            {
               print $conn -> affected_rows."Deleted";
            }**/
      }
