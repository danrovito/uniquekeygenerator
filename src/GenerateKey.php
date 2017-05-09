<?php

namespace GenerateKey

class CreateKey()
{
    public function makeKey($value = null)
    {
        if(isset($value)){
        // Fewer segments if appending value
            $num_segments = 4;
            $segment_chars = 6;
        } else{
            $num_segments = 5;
            $segment_chars = 6;
        }
        // Token contains no confusing characters : 1,i,0,o
        $tokens = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        $key = '';
        // Build Default License String
        for ($i = 0; $i < $num_segments; $i++) {
            $segment = '';
            for ($j = 0; $j < $segment_chars; $j++) {
                $segment .= $tokens[rand(0, strlen($tokens)-1)];
            }
            $key .= $segment;
            if ($i < ($num_segments - 1)) {
                $key .= '-';
            }
        }
        // Convert numeric or IP value submitted
        if(isset($value)){
            if(is_numeric($value)) {
                $key .= '-'.strtoupper(base_convert($value,10,36));
            }else{
                $long = sprintf("%u\n", ip2long($value),true);
                dd($long);
                $key .= '-'.strtoupper(base_convert($long,10,36));
            }
        }

        return $key;
    }

}
