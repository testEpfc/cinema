
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
<?php 
    function resultListFiller($tableData) 
    {
        $row = count($tableData);
        $indexToUse = Array(1,2,3,4);
//        $indexToUse = Array(0,1,2,3);
//        $IMG = $$tableData[$i][$indexToUse[4]]; 
        $IMG = 'DbAffiches/Affiche1.jpg';
        $path = 'DbAffiches/';
        echo '<table class="resultList">';
        for($i=0;$i<$row;++$i)
        {
            echo '<tr>';
            echo '<td>';
//            echo '<img src="DbAffiches/Affiche1.jpg" alt=""/>';
//
//            echo "<h3>".$all[$i]['titre'].""; 
//            echo " (".$all[$i]['annee'].") </h3>"; 
//            echo $all[$i]['description']; 
            
//            echo '<img src="'.$IMG.'" alt=""/>';
//            echo "<h3>".$all[$i]['titre'].""; 
//            echo " (".$all[$i]['annee'].") </h3>"; 
//            echo $all[$i]['description']; 
            
//            echo '<img src="'.$IMG.'" alt=""/>';
//            echo "<h3>".$tableData[$i][0].""; 
//            echo " (".$tableData[$i][1].") </h3>"; 
//            echo $tableData[$i][2]; 
//            
            echo '<img src="'.$path.$tableData[$i][$indexToUse[3]].'" alt=""/>';
            echo "<h3>".$tableData[$i][$indexToUse[0]].""; 
            echo " (".$tableData[$i][$indexToUse[1]].") </h3>"; 
            echo $tableData[$i][$indexToUse[2]]; 
            
            echo '</td>';
            echo '</tr>';
        }  
        echo '</table>';
    }
?>
