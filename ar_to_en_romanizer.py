def arabic_to_english_spelling(text):
    arabic_to_english_dict = {
        'ا': 'a', 'ب': 'b', 'ت': 't', 'ث': 'th', 'ج': 'j',
        'ح': 'h', 'خ': 'kh', 'د': 'd', 'ذ': 'dh', 'ر': 'r',
        'ز': 'z', 'س': 's', 'ش': 'sh', 'ص': 's', 'ض': 'd',
        'ط': 't', 'ظ': 'dh', 'ع': 'a', 'غ': 'gh', 'ف': 'f',
        'ق': 'q', 'ك': 'k', 'ل': 'l', 'م': 'm', 'ن': 'n',
        'ه': 'h', 'و': 'w', 'ي': 'y', 'أ': 'a', 'إ': 'e',
        'آ': 'a', 'ى': 'a', 'ة': 'h', 'ئ': 'y', 'ء': 'e',
        '٠': '0', '١': '1', '٢': '2', '٣': '3', '٤': '4',
        '٥': '5', '٦': '6', '٧': '7', '٨': '8', '٩': '9',
    }

    transliterated_text = ""
    for char in text:
        transliterated_text += arabic_to_english_dict.get(char, char)
    return transliterated_text

text = "هذا النص هو لتجربة هذه الوظيفة والتأكد من عملها ١٢٣٤٥"
english_spelling = arabic_to_english_spelling(text)
print(english_spelling)
