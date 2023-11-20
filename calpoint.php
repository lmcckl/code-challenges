<?php
    $ops = ["5", "2", "C", "D", "+"];

    function calPoints($ops) 
    {
        $record = [];
        
        foreach($ops as $op)
        {
            if(sizeof($record) == 0)
            {
                array_push($record, (int)$op);
            }
            else 
            {
                switch($op)
                {
                    case "D":
                        $a = sizeof($record) - 1;
                        $prev = $record[$a];
                        $score = $prev * 2;
                        array_push($record, $score);
                        break;
                    case "+":
                        $a = sizeof($record) - 1;
                        $b = sizeof($record) - 2;

                        $score = $record[$a] + $record[$b];
                        array_push($record, $score);
                        break;
                    case "C":
                        array_splice($record, -1);
                        break;
                    default:
                        array_push($record, $op);
                    
                }
            }
        }

        $result = 0;

        foreach($record as $r)
        {
            $result += $r;
        }

        return $result;
    }

    echo calPoints($ops);
?>

