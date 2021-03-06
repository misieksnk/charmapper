<?php

namespace MisiekSnk\CharMapper;

/**
 * Class CharMapper
 * @package MisiekSnk\CharMapper
 */
class CharMapper
{
    /**
     * @param string $string String to map
     * @return mixed
     */
    public function map($string)
    {
        $string = str_replace(
            array_keys($this->map),
            array_values($this->map),
            $string
        );

        return $string;
    }

    private $map = [
        'ъ' => '',
        'ь' => '',
        '္' => '',
        '့' => '',
        'း' => '',
        'Ь' => '',
        'Ъ' => '',
        '၏' => '-e',
        'ဤ' => '-i',
        'ဦ' => '-u',
        '၀' => '0',
        '°' => '0',
        '₀' => '0',
        '၁' => '1',
        '¹' => '1',
        '₁' => '1',
        '²' => '2',
        '₂' => '2',
        '၂' => '2',
        '³' => '3',
        '₃' => '3',
        '၃' => '3',
        '₄' => '4',
        '၄' => '4',
        '⁴' => '4',
        '၅' => '5',
        '⁵' => '5',
        '₅' => '5',
        '₆' => '6',
        '⁶' => '6',
        '၆' => '6',
        '₇' => '7',
        '၇' => '7',
        '⁷' => '7',
        '၈' => '8',
        '⁸' => '8',
        '₈' => '8',
        '၉' => '9',
        '₉' => '9',
        '⁹' => '9',
        'Ά' => 'A',
        'Ầ' => 'A',
        'А' => 'A',
        'Ą' => 'A',
        'Ā' => 'A',
        'Ǎ' => 'A',
        'Ă' => 'A',
        'Ǻ' => 'A',
        'Ạ' => 'A',
        'Ả' => 'A',
        'Ä' => 'A',
        'Ấ' => 'A',
        'Ẳ' => 'A',
        'À' => 'A',
        'Á' => 'A',
        'Â' => 'A',
        'Ã' => 'A',
        'Ẵ' => 'A',
        'Ặ' => 'A',
        'Ậ' => 'A',
        'Ắ' => 'A',
        'Ằ' => 'A',
        'Ẫ' => 'A',
        'Α' => 'A',
        'Ẩ' => 'A',
        'Ǽ' => 'AE',
        'Æ' => 'AE',
        'ΑΎ' => 'AU',
        'ΑΥ' => 'AU',
        'Αυ' => 'Au',
        'Αύ' => 'Au',
        'ब' => 'B',
        'Б' => 'B',
        'भ' => 'Bha',
        'Ć' => 'C',
        'Ц' => 'C',
        'Ç' => 'C',
        'Ċ' => 'C',
        'Č' => 'C',
        'Ĉ' => 'CX',
        'च' => 'Ca',
        'Ч' => 'Ch',
        'Χ' => 'Ch',
        'छ' => 'Chha',
        'Д' => 'D',
        'Δ' => 'D',
        'Ď' => 'D',
        'Đ' => 'D',
        'ड' => 'Da',
        'ढ' => 'Dha',
        'Ð' => 'Dj',
        'Ě' => 'E',
        'Ẹ' => 'E',
        'Ĕ' => 'E',
        'Ë' => 'E',
        'Ể' => 'E',
        'Ễ' => 'E',
        'Е' => 'E',
        'Ё' => 'E',
        'Э' => 'E',
        'Ę' => 'E',
        'Ệ' => 'E',
        'É' => 'E',
        'È' => 'E',
        'Ê' => 'E',
        'Ē' => 'E',
        'Ə' => 'E',
        'Ẻ' => 'E',
        'Ε' => 'E',
        'Ế' => 'E',
        'Ė' => 'E',
        'Ẽ' => 'E',
        'Έ' => 'E',
        'Ề' => 'E',
        'ΕΥ' => 'EU',
        'ΕΎ' => 'EU',
        'Ευ' => 'Eu',
        'Εύ' => 'Eu',
        'Ф' => 'F',
        'Φ' => 'F',
        'फ' => 'Fa',
        'फ़' => 'Fi',
        'Ğ' => 'G',
        'Ģ' => 'G',
        'Ґ' => 'G',
        'Г' => 'G',
        'Γ' => 'G',
        'Ġ' => 'G',
        'Ĝ' => 'GX',
        'ग' => 'Ga',
        'घ' => 'Gha',
        'ग़' => 'Ghi',
        'Х' => 'H',
        'Ħ' => 'H',
        'Ĥ' => 'HX',
        'ह' => 'Ha',
        'Į' => 'I',
        'Ι' => 'I',
        'Η' => 'I',
        'Ỉ' => 'I',
        'Ύ' => 'I',
        'Ị' => 'I',
        'İ' => 'I',
        'Ή' => 'I',
        'Ί' => 'I',
        'І' => 'I',
        'Υι' => 'I',
        'ΥΙ' => 'I',
        'Οι' => 'I',
        'ΟΙ' => 'I',
        'Í' => 'I',
        'Î' => 'I',
        'Ï' => 'I',
        'Ĩ' => 'I',
        'Ει' => 'I',
        'ΕΙ' => 'I',
        'Ĭ' => 'I',
        'Ǐ' => 'I',
        'Ì' => 'I',
        'ϒ' => 'I',
        'ΥΊ' => 'I',
        'Υί' => 'I',
        'И' => 'I',
        'ΕΊ' => 'I',
        'Ī' => 'I',
        'Εί' => 'I',
        'ΟΊ' => 'I',
        'Υ' => 'I',
        'Οί' => 'I',
        'Ϊ' => 'I',
        'Ϋ' => 'I',
        'ΎΙ' => 'I',
        'Ύι' => 'I',
        'Ĳ' => 'IJ',
        'Ĵ' => 'JX',
        'ज' => 'Ja',
        'झ' => 'Jha',
        'Ї' => 'Ji',
        'Κ' => 'K',
        'Ķ' => 'K',
        'К' => 'K',
        'क' => 'Ka',
        'ख' => 'Kha',
        'ख़' => 'Khi',
        'Ľ' => 'L',
        'ल' => 'L',
        'Ļ' => 'L',
        'Λ' => 'L',
        'Ŀ' => 'L',
        'Ĺ' => 'L',
        'Ł' => 'L',
        'Л' => 'L',
        'ळ' => 'Li',
        'ऌ' => 'Li',
        'ॡ' => 'Lii',
        'ऴ' => 'Lii',
        'Μ' => 'M',
        'М' => 'M',
        'म' => 'Ma',
        'Н' => 'N',
        'Ń' => 'N',
        'Ņ' => 'N',
        'Ň' => 'N',
        'Ñ' => 'N',
        'Ν' => 'N',
        'ङ' => 'Na',
        'न' => 'Na',
        'ण' => 'Nae',
        'ऩ' => 'Ni',
        'ञ' => 'Nia',
        'Ò' => 'O',
        'Ó' => 'O',
        'Ở' => 'O',
        'Ω' => 'O',
        'Õ' => 'O',
        'О' => 'O',
        'Ό' => 'O',
        'Ô' => 'O',
        'Ο' => 'O',
        'Ō' => 'O',
        'Ŏ' => 'O',
        'Ǒ' => 'O',
        'Ő' => 'O',
        'Ơ' => 'O',
        'Ö' => 'O',
        'Ọ' => 'O',
        'Ỏ' => 'O',
        'Ồ' => 'O',
        'Ố' => 'O',
        'Ộ' => 'O',
        'Ổ' => 'O',
        'Ỗ' => 'O',
        'Ờ' => 'O',
        'Ớ' => 'O',
        'Ǿ' => 'O',
        'Ỡ' => 'O',
        'Ợ' => 'O',
        'Œ' => 'OE',
        'Ø' => 'OE',
        'ΟΥ' => 'OU',
        'ΟΎ' => 'OU',
        'Ού' => 'Ou',
        'Ου' => 'Ou',
        'П' => 'P',
        'Π' => 'P',
        'प' => 'Pa',
        'Ψ' => 'Ps',
        'क़' => 'Qi',
        'Р' => 'R',
        'Ř' => 'R',
        'Ŗ' => 'R',
        'Ŕ' => 'R',
        'Ρ' => 'R',
        'र' => 'Ra',
        'ऋ' => 'Ri',
        'ॠ' => 'Ri',
        'ऱ' => 'Ri',
        'Ś' => 'S',
        'Ş' => 'S',
        'Š' => 'S',
        'Σ' => 'S',
        'Ș' => 'S',
        'С' => 'S',
        'Ŝ' => 'SX',
        'स' => 'Sa',
        'Ш' => 'Sh',
        'श' => 'Sha',
        'Щ' => 'Shch',
        'ष' => 'Shha',
        'Ț' => 'T',
        'Ŧ' => 'T',
        'Ţ' => 'T',
        'Ť' => 'T',
        'Τ' => 'T',
        'Т' => 'T',
        'Þ' => 'TH',
        'त' => 'Ta',
        'ट' => 'Ta',
        'Θ' => 'Th',
        'ठ' => 'Tha',
        'द' => 'Tha',
        'थ' => 'Tha',
        'ध' => 'Thha',
        'Ủ' => 'U',
        'У' => 'U',
        'Ú' => 'U',
        'Ü' => 'U',
        'Ử' => 'U',
        'Ù' => 'U',
        'Ụ' => 'U',
        'Ǘ' => 'U',
        'Û' => 'U',
        'Ũ' => 'U',
        'Ǔ' => 'U',
        'Ū' => 'U',
        'Ư' => 'U',
        'Ǚ' => 'U',
        'Ų' => 'U',
        'Ű' => 'U',
        'Ữ' => 'U',
        'Ǜ' => 'U',
        'Ů' => 'U',
        'Ǖ' => 'U',
        'Ứ' => 'U',
        'Ừ' => 'U',
        'Ự' => 'U',
        'Ŭ' => 'UX',
        'Β' => 'V',
        'В' => 'V',
        'व' => 'Va',
        'Ŵ' => 'W',
        'Ξ' => 'X',
        'Ÿ' => 'Y',
        'Ý' => 'Y',
        'Ỷ' => 'Y',
        'Ỵ' => 'Y',
        'Ŷ' => 'Y',
        'Ỳ' => 'Y',
        'Ỹ' => 'Y',
        'Ы' => 'Y',
        'Й' => 'Y',
        'य' => 'Ya',
        'Я' => 'Ya',
        'Є' => 'Ye',
        'य़' => 'Yi',
        'Ю' => 'Yu',
        'Ζ' => 'Z',
        'Ž' => 'Z',
        'Ź' => 'Z',
        'Ż' => 'Z',
        'З' => 'Z',
        'ज़' => 'Za',
        'Ж' => 'Zh',
        'ạ' => 'a',
        'अ' => 'a',
        'ẳ' => 'a',
        'ặ' => 'a',
        'ắ' => 'a',
        'ā' => 'a',
        'ằ' => 'a',
        'ẫ' => 'a',
        'α' => 'a',
        'ά' => 'a',
        'ả' => 'a',
        'ą' => 'a',
        'ẩ' => 'a',
        'ậ' => 'a',
        'ấ' => 'a',
        'ầ' => 'a',
        'ẵ' => 'a',
        'а' => 'a',
        'ა' => 'a',
        'أ' => 'a',
        'ä' => 'a',
        'အ' => 'a',
        'ာ' => 'a',
        'Å' => 'a',
        'à' => 'a',
        'á' => 'a',
        'ါ' => 'a',
        'â' => 'a',
        'ã' => 'a',
        'å' => 'a',
        'ǻ' => 'a',
        'ă' => 'a',
        'ǎ' => 'a',
        'ª' => 'a',
        'आ' => 'aa',
        'ع' => 'aa',
        'æ' => 'ae',
        'ǽ' => 'ae',
        'ऐ' => 'ai',
        'ိုက်' => 'aik',
        'ိုင်' => 'aing',
        'ုဒ်' => 'ait',
        'မ်' => 'an',
        'န်' => 'an',
        'ံ' => 'an',
        'ာန်' => 'an',
        'တ်' => 'at',
        '်' => 'at',
        '@' => 'at',
        'ပ်' => 'at',
        'αυ' => 'au',
        'αύ' => 'au',
        'ောက်' => 'auk',
        'ေါင်' => 'aung',
        'ောင်' => 'aung',
        'ေါ်' => 'aw',
        'ဪ' => 'aw',
        'သြော' => 'aw',
        'ဩ' => 'aw',
        'ော' => 'aw',
        'ော်' => 'aw',
        'ေါ' => 'aw',
        'ბ' => 'b',
        'ဗ' => 'b',
        'ب' => 'b',
        'б' => 'b',
        'ဘ' => 'ba',
        'ç' => 'c',
        'ц' => 'c',
        'ć' => 'c',
        'ċ' => 'c',
        '©' => 'c',
        'č' => 'c',
        'ч' => 'ch',
        'ჭ' => 'ch',
        'χ' => 'ch',
        'ჩ' => 'ch',
        'ĉ' => 'cx',
        'ض' => 'd',
        'დ' => 'd',
        'đ' => 'd',
        'δ' => 'd',
        'ဒ' => 'd',
        'д' => 'd',
        'ဒ်' => 'd',
        'ဍ' => 'd',
        'د' => 'd',
        'ď' => 'd',
        'ဓ' => 'da',
        'ဎ' => 'da',
        'ð' => 'dj',
        'ძ' => 'dz',
        'ê' => 'e',
        'ယ်' => 'e',
        'ễ' => 'e',
        'ə' => 'e',
        'э' => 'e',
        'ē' => 'e',
        'ė' => 'e',
        'ე' => 'e',
        'ĕ' => 'e',
        'ë' => 'e',
        'ё' => 'e',
        'ε' => 'e',
        'е' => 'e',
        'ě' => 'e',
        'è' => 'e',
        'ể' => 'e',
        'ệ' => 'e',
        'é' => 'e',
        'ẹ' => 'e',
        'ए' => 'e',
        'ေ' => 'e',
        'ဲ' => 'e',
        'ဧ' => 'e',
        'έ' => 'e',
        'ẻ' => 'e',
        'ę' => 'e',
        'ẽ' => 'e',
        'ề' => 'e',
        'ế' => 'e',
        'ऎ' => 'e',
        'ऍ' => 'ei',
        'ိတ်' => 'eik',
        'ိပ်' => 'eik',
        'ိန်' => 'ein',
        'ိမ်' => 'ein',
        'ိံ' => 'ein',
        'က်' => 'et',
        'εύ' => 'eu',
        'ευ' => 'eu',
        'ف' => 'f',
        'ф' => 'f',
        'ƒ' => 'f',
        'ფ' => 'f',
        'φ' => 'f',
        'ģ' => 'g',
        'ґ' => 'g',
        'ġ' => 'g',
        'ج' => 'g',
        'г' => 'g',
        'γ' => 'g',
        'ğ' => 'g',
        'გ' => 'g',
        'ဂ' => 'g',
        'ဃ' => 'ga',
        'غ' => 'gh',
        'ღ' => 'gh',
        'ĝ' => 'gx',
        'х' => 'h',
        'ှ' => 'h',
        'ح' => 'h',
        'ħ' => 'h',
        'ဟ' => 'h',
        'ჰ' => 'h',
        'ه' => 'h',
        '၌' => 'hnaik',
        'ĥ' => 'hx',
        'इ' => 'i',
        'і' => 'i',
        'ï' => 'i',
        'ǐ' => 'i',
        'ει' => 'i',
        'οί' => 'i',
        'ύι' => 'i',
        'υί' => 'i',
        'ိ' => 'i',
        'ီ' => 'i',
        'οι' => 'i',
        'į' => 'i',
        'ΰ' => 'i',
        'ĭ' => 'i',
        'ĩ' => 'i',
        'î' => 'i',
        'í' => 'i',
        'ì' => 'i',
        'η' => 'i',
        'ι' => 'i',
        'υι' => 'i',
        'ဣ' => 'i',
        'ϋ' => 'i',
        'ϊ' => 'i',
        'ύ' => 'i',
        'ı' => 'i',
        'ί' => 'i',
        'ή' => 'i',
        'ი' => 'i',
        'υ' => 'i',
        'ī' => 'i',
        'и' => 'i',
        'ည်' => 'i',
        'ỉ' => 'i',
        'ị' => 'i',
        'εί' => 'i',
        'ई' => 'ii',
        'ĳ' => 'ij',
        'ဉ်' => 'in',
        'င်' => 'in',
        'စ်' => 'it',
        'ေတ်' => 'it',
        'ჯ' => 'j',
        'ї' => 'ji',
        'ĵ' => 'jx',
        'κ' => 'k',
        'ق' => 'k',
        'ქ' => 'k',
        'ķ' => 'k',
        'კ' => 'k',
        'က' => 'k',
        'ك' => 'k',
        'к' => 'k',
        'ခ' => 'kh',
        'خ' => 'kh',
        'ხ' => 'kh',
        'ľ' => 'l',
        'ĺ' => 'l',
        'လ' => 'l',
        'ლ' => 'l',
        'λ' => 'l',
        'л' => 'l',
        'ļ' => 'l',
        'ŀ' => 'l',
        'ل' => 'l',
        'ł' => 'l',
        'ဠ' => 'la',
        'μ' => 'm',
        'м' => 'm',
        'မ' => 'm',
        'م' => 'm',
        'მ' => 'm',
        'ن' => 'n',
        'ņ' => 'n',
        'ŉ' => 'n',
        'ñ' => 'n',
        'န' => 'n',
        'ń' => 'n',
        'ნ' => 'n',
        'н' => 'n',
        'ň' => 'n',
        'ν' => 'n',
        'ဏ' => 'na',
        'င' => 'ng',
        'န်ုပ်' => 'nub',
        'ည' => 'ny',
        'ǒ' => 'o',
        'ို' => 'o',
        'º' => 'o',
        'ő' => 'o',
        'ơ' => 'o',
        'ǿ' => 'o',
        'ō' => 'o',
        'ო' => 'o',
        'ớ' => 'o',
        'ờ' => 'o',
        'ọ' => 'o',
        'و' => 'o',
        'ỏ' => 'o',
        'ö' => 'o',
        'ồ' => 'o',
        'ố' => 'o',
        'ộ' => 'o',
        'ŏ' => 'o',
        'ổ' => 'o',
        'õ' => 'o',
        'ό' => 'o',
        'ω' => 'o',
        'ỡ' => 'o',
        'ở' => 'o',
        'ओ' => 'o',
        'ợ' => 'o',
        'ô' => 'o',
        'о' => 'o',
        'ο' => 'o',
        'ỗ' => 'o',
        'ò' => 'o',
        'ó' => 'o',
        'ώ' => 'o',
        'œ' => 'oe',
        'ø' => 'oe',
        'ऑ' => 'oi',
        'ऒ' => 'oii',
        'ုတ်' => 'ok',
        'ုပ်' => 'ok',
        'ိုဒ်' => 'ok',
        'ိုလ်' => 'ol',
        'ॐ' => 'oms',
        'ုံ' => 'on',
        'ုန်' => 'on',
        'ုမ်' => 'on',
        'ου' => 'ou',
        'ού' => 'ou',
        'औ' => 'ou',
        'ပ' => 'p',
        'π' => 'p',
        'п' => 'p',
        'პ' => 'p',
        'ဖ' => 'pa',
        'ψ' => 'ps',
        'ყ' => 'q',
        'р' => 'r',
        'რ' => 'r',
        'ŗ' => 'r',
        'ŕ' => 'r',
        'ř' => 'r',
        'ر' => 'r',
        'ρ' => 'r',
        'с' => 's',
        'š' => 's',
        'ص' => 's',
        'ς' => 's',
        'σ' => 's',
        'ş' => 's',
        'ſ' => 's',
        'س' => 's',
        'ś' => 's',
        'ს' => 's',
        'ș' => 's',
        'စ' => 's',
        'ဆ' => 'sa',
        'შ' => 'sh',
        'ш' => 'sh',
        'ش' => 'sh',
        'щ' => 'shch',
        'ß' => 'ss',
        'ŝ' => 'sx',
        'т' => 't',
        'τ' => 't',
        'ဋ' => 't',
        'ط' => 't',
        'ť' => 't',
        'ț' => 't',
        'ţ' => 't',
        'ŧ' => 't',
        'ტ' => 't',
        'თ' => 't',
        'ت' => 't',
        'တ' => 't',
        'ဌ' => 'ta',
        'ထ' => 'ta',
        'ث' => 'th',
        'þ' => 'th',
        'ذ' => 'th',
        'ظ' => 'th',
        'သ' => 'th',
        'θ' => 'th',
        'ϑ' => 'th',
        'წ' => 'ts',
        'ც' => 'ts',
        'ữ' => 'u',
        'ử' => 'u',
        'ự' => 'u',
        'ứ' => 'u',
        'ừ' => 'u',
        'ụ' => 'u',
        'ü' => 'u',
        'ဉ' => 'u',
        'ု' => 'u',
        'უ' => 'u',
        'ủ' => 'u',
        'ǘ' => 'u',
        'ǜ' => 'u',
        'ǚ' => 'u',
        'ǖ' => 'u',
        'ǔ' => 'u',
        'ư' => 'u',
        'ų' => 'u',
        'ű' => 'u',
        'ũ' => 'u',
        'û' => 'u',
        'ú' => 'u',
        'ù' => 'u',
        'у' => 'u',
        'ူ' => 'u',
        'ū' => 'u',
        'उ' => 'u',
        'ů' => 'u',
        'ड़' => 'ugDha',
        'ढ़' => 'ugDhha',
        'ွန်' => 'un',
        'ွမ်' => 'un',
        'ွတ်' => 'ut',
        'ွပ်' => 'ut',
        'ऊ' => 'uu',
        'ŭ' => 'ux',
        'ვ' => 'v',
        'β' => 'v',
        'ϐ' => 'v',
        'в' => 'v',
        'ŵ' => 'w',
        'ွ' => 'w',
        'ဝ' => 'w',
        'ξ' => 'x',
        'ỷ' => 'y',
        '' => 'y',
        'ý' => 'y',
        'ỹ' => 'y',
        'ŷ' => 'y',
        'ي' => 'y',
        'ယ' => 'y',
        'ỵ' => 'y',
        'ỳ' => 'y',
        'й' => 'y',
        'ы' => 'y',
        'ြ' => 'y',
        'ရ' => 'ya',
        'ျ' => 'ya',
        'я' => 'ya',
        'є' => 'ye',
        'ю' => 'yu',
        'ြွ' => 'yw',
        'ျွ' => 'ywa',
        '၍' => 'ywae',
        'з' => 'z',
        'ز' => 'z',
        'ζ' => 'z',
        'ž' => 'z',
        'ż' => 'z',
        'ź' => 'z',
        'ဇ' => 'z',
        'ზ' => 'z',
        'စျ' => 'za',
        'ჟ' => 'zh',
        'ж' => 'zh',
    ];
}