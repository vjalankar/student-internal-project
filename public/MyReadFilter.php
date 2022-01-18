<?php

class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter
{
    public function readCell($columnAddress, $row, $worksheetName = '') {
        //  Read rows 1 to 7 and columns A to E only
        if ($row >= 1 && $row <= 7) {
            if (in_array($columnAddress,range('A1','F1'))) {
                return true;
            }
        }
    
    }
}


?>