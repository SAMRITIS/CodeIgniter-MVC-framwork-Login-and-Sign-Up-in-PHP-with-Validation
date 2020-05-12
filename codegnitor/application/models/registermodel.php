<?php

class registermodel extends CI_Model 
{
    public function mode($data)
    {
        
    
      $query = $this->db->insert('employee',$data);
       if($query)
       {
           return true;
       }
       else
       {
           return false;
       }
     
    }

}

?>