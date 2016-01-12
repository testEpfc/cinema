

    <?php function responsiveTableFiller($tableData, $tableTitle){ 
        $row = count($tableData);
        $column = count($tableTitle);
        ?>
        <table class="responsiveTable">
            <tr>
                <?php for($j=0; $j<$column;++$j){ ?>
                    <th> <?php echo $tableTitle[$j][0] ?> </th>
                <?php } ?>
            </tr>
            <?php for($i=0; $i<$row;++$i){ ?>
            <tr>
                <?php for($j=0; $j<$column;++$j){ ?>
                    <td> <?php echo $tableData[$i][$j] ?> </th>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
    <?php include 'responsiveTableJS.php'; ?>
    <?php } ?>