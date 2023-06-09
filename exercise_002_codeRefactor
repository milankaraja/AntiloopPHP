<?php

namespace Some\Folder\Strucutre;

class BadCode
{
    public function processText($text, int $Multiplier) {

        $tmp_str_splitted = str_split($text);
        $farben = ["red","blau","green"];
        $assignment = array();
        $tmpText = "";
        foreach ($tmp_str_splitted as $char) {
            $i = 0;
            while ($i < $Multiplier) {
                $tmpText = $tmpText . $char;
                $i += 1;
            }
        
        }

        foreach ($farben as $color) {
            $assignment[$color]= $tmpText .'-'.$color.'-> '.$color;
        }

        
        $response = $assignment;
        
        
        return $response;
    }
    }

    $badCode = new BadCode();
    
    $badCode->processText('test', 3);
    

