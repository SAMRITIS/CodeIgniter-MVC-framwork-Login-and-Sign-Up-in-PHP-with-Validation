<?php

class logmodel extends CI_Model 
{
    public function valid($email, $mobile)
    {
       
        $sql = "SELECT * FROM employee WHERE  email = ? ";
       $query = $this->db->query($sql, array($email));
     
         foreach ($query->result_array() as $row)
        {
            if($row['mobile']!= $mobile)
          {
               return FALSE;
               
          }
          else
          {
           
              return TRUE;
          } 
       }
      
    }
    
}



?>