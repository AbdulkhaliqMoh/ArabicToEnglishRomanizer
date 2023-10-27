<?php
function arabicToEnglishSpelling($text) {
    $arabicToEnglishDict = array(
        'ا'=> 'a', 'ب'=> 'b', 'ت'=> 't', 'ث'=> 'th', 'ج'=> 'j',
        'ح'=> 'h', 'خ'=> 'kh', 'د'=> 'd', 'ذ'=> 'dh', 'ر'=> 'r',
        'ز'=> 'z', 'س'=> 's', 'ش'=> 'sh', 'ص'=> 's', 'ض'=> 'd',
        'ط'=> 't', 'ظ'=> 'dh', 'ع'=> 'a', 'غ'=> 'gh', 'ف'=> 'f',
        'ق'=> 'q', 'ك'=> 'k', 'ل'=> 'l', 'م'=> 'm', 'ن'=> 'n',
        'ه'=> 'h', 'و'=> 'w', 'ي'=> 'y', 'أ'=> 'a', 'إ'=> 'e',
        'آ'=> 'a', 'ى'=> 'a', 'ة'=> 'h', 'ئ'=> 'y', 'ء'=> 'e',
        '٠'=> '0', '١'=> '1', '٢'=> '2', '٣'=> '3', '٤'=> '4',
        '٥'=> '5', '٦'=> '6', '٧'=> '7', '٨'=> '8', '٩'=> '9',
    );

    $transliteratedText = '';
    $length = mb_strlen($text);
    for ($i = 0; $i < $length; $i++) {
        $char = mb_substr($text, $i, 1);
        $transliteratedText .= isset($arabicToEnglishDict[$char]) ? $arabicToEnglishDict[$char] : $char;
    }
    return $transliteratedText;
}

$text = "هذا النص هو لتجربة هذه الوظيفة والتأكد من عملها ١٢٣٤٥";
$englishSpelling = arabicToEnglishSpelling($text);
echo $englishSpelling;
?>
