
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
//        $IMG = 'DbAffiches/Affiche1.jpg';
        $path = 'DbAffiches/';
        ?>
        <table class="resultList">
        <?php
        for($i=0;$i<$row;++$i)
        {?>
            <tr>
                <td>
                    <a href="filmContent.php?id=<?php echo $tableData[$i]['id'];?>" class="linkResultList">
                        <div class="resultListSizer">
                            <img src="<?php echo $path.$tableData[$i][$indexToUse[3]]?>" alt=""/>
                            <h3>
                                <?php echo $tableData[$i][$indexToUse[0]] ?> 
                            ( <?php echo $tableData[$i][$indexToUse[1]]?> )
                            </h3>
                            <?php echo $tableData[$i][$indexToUse[2]]; ?>

                        </div>
                    </a>
                </td>
            </tr>
        <?php }  ?>
        </table>
    <?php  } ?>

