<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$array = explode(' ',$nilai);


function avg($a){
    $val = array_sum($a);
    $count = count($a);
    $average = $val/$count;

    return "1.Nilai rata-rata = $average\n";
}
function maximum($a){
    rsort($a);
    for($i=0;$i<7;$i++){
        echo $a[$i]." ";
    }
}
function minimum($a){
    sort($a);
    for($i=0;$i<7;$i++){
        echo $a[$i]." ";
    }
}
function letter($a){
    $lower = strtolower($a);
    $cek_text = similar_text($a, $lower);
    return "$a Mengandung $cek_text huruf kecil";
}
function unigram($a){
    $uni = explode(' ',$a);
    $unigram = '';
    foreach($uni as $u)
    {
        $unigram.=$u.", ";
    }
    $unigram = substr($unigram,0,-2);
    return $unigram;
}
function bigram($a){
    $big = explode(' ',$a);
    $bigram = '';
    $x = 0;
    foreach($big as $b){
        if($x<1){
            $bigram .=$b." ";
            $x++;
        }
        else{
            $bigram.=$b.", ";
            $x=0;
        }
    }
    $bigram = substr($bigram,0,-2);
    return $bigram;
}
function trigram($a){
    $tri = explode(' ',$a);
    $trigram = '';
    $x = 0;
    foreach($tri as $t){
        if($x<2){
            $trigram.=$t." ";
            $x++;
        }
        else{
            $trigram.=$t.", ";
            $x=0;
        }
    }
    $trigram = substr($trigram,0,-2);
    return $trigram;
}
function pattern($a){
    for($i=0;$i<$a;$i++)
    {
        // DFHKNQ akan memberikan output EDKGSK
    }
}
function encryption($a){
    $cipher = "aes-128-gcm";
    if (in_array($cipher, openssl_get_cipher_methods()))
    {
        $key = null;
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext = openssl_encrypt($a, $cipher, $key, $options=0, $iv, $tag);
        $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
        return $original_plaintext."\n";
    }
}

echo "<h3>PHP Dasar (1)</h3>";
echo "<br>";
echo avg($array);
echo "<br>";
echo "2.7 Nilai tertinggi = ";
echo maximum($array);
echo "<br>";
echo "3.7 Nilai terendah = ";
echo minimum($array);
echo "<br>";
echo letter("TranSISI");
echo "<br>";
echo unigram("Jakarta adalah ibukota negara Republik Indonesia");
echo "<br>";
echo bigram("Jakarta adalah ibukota negara Republik Indonesia");
echo "<br>";
echo trigram("Jakarta adalah ibukota negara Republik Indonesia");
echo "<br>";
echo "<h3>PHP Dasar (2)</h3>";
echo "<br>";
echo encryption("DFHKNQ");
echo "<br>";

$arr = array(
    array('f','g','h','i'),
    array('j','k','p','q'),
    array('r','s','t','u')
);
function cari($arr,$search){
    $new_array = str_split($search);
    if($arr[0] == $new_array){
        return true;
    }
    elseif($new_array[3] == $arr[1][2]){
        $x = 0;
        for($i=0;$i<3;$i++)
        {
            if($arr[0][$i] == $new_array[$i])
            {
                $x++;
            }
        }
        if($x == 3){
            return true;
        }
    }
    return null;
}
echo cari($arr,'fghp');
// fghi
// fghp
// fjrstp

// fghq
// fst
// pqr
// fghh

?>