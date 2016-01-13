
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
<?php 
    function gridTableFiller($tableData) 
    {
//        $tableData[0][1]= "sqdfqsd";
        $row = count($tableData);
//        $row = 1;
        $indexToUse = Array(1,2,3);
//        $indexToUse = Array(0,1,2,3);
//        $IMG = $$tableData[$i][$indexToUse[4]]; 
        $IMG = 'DbAffiches/Affiche1.jpg';
        ?>




        <!--<ul class="gridTable">-->
            <!--<li>-->
        <div class="gridTable">
        <?php for($i=0;$i<$row;++$i){ ?>
            
            <div class="gridTableContainerExt">
                <h3>
                <?php echo $tableData[$i][$indexToUse[0]]?>
                ( 
                <?php echo $tableData[$i][$indexToUse[1]] ?> 
                )
                </h3>

                <div class="gridTableContainer">
                        <img src="<?php echo $IMG ?>" alt=""/>

                        <div class="compacteur">
                                <?php echo $tableData[$i][$indexToUse[2]]?>
                        </div>       
                </div>
            </div>
        <?php } ?>        
        </div>
        
    <?php  }?>