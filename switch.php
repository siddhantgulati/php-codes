<?php
    echo "siddhant"."\n";      
    $ch = readline('Enter Course:');  
    switch ($ch)  
    {     
        case "BCA":   
            echo "BCA is 3 years course";  
            break;  
        case "Bsc":   
            echo "Bsc is 3 years course";  
            break;  
        case "B.Tech":   
            echo "B.Tech is 4 years course";  
            break;  
        case "B.Arch":   
            echo "B.Arch is 5 years course";  
            break;  
        default:   
          echo "Wrong Choice";    
    }  
?>    