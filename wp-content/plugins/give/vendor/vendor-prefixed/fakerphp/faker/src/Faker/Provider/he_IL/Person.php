<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 26-June-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Give\Vendors\Faker\Provider\he_IL;

class Person extends \Give\Vendors\Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    /**
     * {@link} http://www.mamy.co.il/%D7%A9%D7%9E%D7%95%D7%AA-%D7%9C%D7%AA%D7%99%D7%A0%D7%95%D7%A7%D7%95%D7%AA
     */
    protected static $firstNameMale = [
        'אבטו', 'אבי', 'אביאור', 'אביאל', 'אביאסף', 'אביב', 'אביגדור', 'אבידור', 'אבידן', 'אביה', 'אביהו', 'אביהוד', 'אביחי', 'אבי-חן', 'אבינועם', 'אביעד', 'אביעם', 'אביר', 'אבירז', 'אבירן', 'אבישי', 'אביתר',
        'אבנר', 'אבקן', 'אברהם', 'אברון', 'אבשלום', 'אגם', 'אדיב', 'אדיר', 'אדם', 'אדר', 'אדריאן', 'אהוד', 'אהרון', 'אוהב', 'אוליאל', 'און', 'אוניל', 'אופז', 'אופיר', 'אופק', 'אור', 'אור אל', 'אוראל', 'אורון',
        'אורטל', 'אורי', 'אוריאל', 'אוריאן', 'אוריה', 'אוריון', 'אורין', 'אורם', 'אורן', 'אושר', 'אושרי', 'אחי', 'אחיאסף', 'אחינועם', 'אייל', 'אייר', 'איל', 'אילאי', 'אילון', 'אילור', 'אילי', 'איליה', 'איליי',
        'אילן', 'אילעי', 'אימרי', 'אירון', 'איתי', 'איתיאל', 'איתם', 'איתמר', 'איתן', 'אלאור', 'אלדד', 'אלדר', 'אלון', 'אלחי', 'אלחנן', 'אליאב', 'אליאור', 'אליאל', 'אליאסף', 'אליה', 'אליהו', 'אלי-יה', 'אל-ים',
        'אליעזר', 'אליפז', 'אליקים', 'אלירז', 'אלירם', 'אלירן', 'אלישי', 'אלישע', 'אלכס', 'אלמוג', 'אלנתן', 'אלעד', 'אלקנה', 'אלרואי', 'אלרום', 'אמוץ', 'אמיר', 'אמיתי', 'אמנון', 'אמרי', 'אנדרי', 'אנוש', 'אסא',
        'אסיף', 'אסף', 'אפיק', 'אפק', 'אראל', 'ארבל', 'ארגמן', 'ארד', 'ארז', 'אריאב', 'אריאל', 'אריה', 'אריק', 'ארנולד', 'ארנון', 'אשד', 'אשחר', 'אשר', 'בארי', 'בוסתן', 'בועז', 'בוריס', 'בושם', 'בזק', 'בירן',
        'ביתן', 'בכור', 'בן', 'בן אור', 'בן חור', 'בן עמי', 'בן ציון', 'בן-אל', 'בני', 'בניה', 'בנימין', 'בצלאל', 'בר', 'בר חן', 'בראל', 'בר-אל', 'ברוך', 'ברוש', 'בריאל', 'ברעם', 'ברק', 'ברקן', 'בשור', 'גביש',
        'גבע', 'גבעול', 'גברי', 'גבריאל', 'גברעם', 'גד', 'גדי', 'גדעון', 'גואל', 'גוב', 'גולן', 'גוני', 'גונן', 'גור', 'גוראל', 'גורי', 'גורן', 'גושן', 'גיא', 'גיבור', 'גידי', 'גיורא', 'גיל', 'גילאור', 'גילאי',
        'גיל-אל', 'גילעד', 'גילעם', 'גילרון', 'גינוסר', 'גיתאי', 'גל', 'גל אור', 'גלבוע', 'גליל', 'גלעד', 'גמליאל', 'גן', 'גפן', 'גרשון', 'דב', 'דביר', 'דגול', 'דגן', 'דובב', 'דוד', 'דויד', 'דולב', 'דור',
        'דוראל', 'דורון', 'דוריאן', 'דורם', 'דותן', 'דיה', 'דימה', 'דין', 'דינור', 'דיקר', 'דן', 'דן-אור', 'דנאל', 'דניאל', 'דקל', 'דקר', 'דר', 'דרור', 'דרורי', 'הדור', 'הדס', 'הדר', 'הוד', 'הודיה', 'הושע',
        'הידד', 'הילל', 'הלל', 'הראל', 'הרדוף', 'הרטוב', 'הרן', 'הרצל', 'והב', 'וולטר', 'וולף', 'וולפסון', 'ויטלי', 'וילי', 'ויני', 'ויקטור', 'ולדימיר', 'ולרי', 'ורד', 'ורדי', 'ורדינון', 'ורנר', 'זאב', 'זבולון',
        'זהב', 'זהר', 'זוהר', 'זיו', 'זיון', 'זך', 'זכאי', 'זכריה', 'זמיר', 'זמר', 'זמרי', 'זר', 'חביב', 'חבר', 'חברון', 'חגי', 'חובב', 'חוף', 'חורש', 'חושן', 'חזקיה', 'חי', 'חידקל', 'חייל', 'חיים', 'חמד',
        'חמי', 'חן', 'חנוך', 'חנן', 'חננאל', 'חסד', 'חסון', 'חפץ', 'חץ', 'חצב', 'חרמון', 'טאי', 'טבע', 'טבעון', 'טוב', 'טוביה', 'טוהר', 'טום', 'טיראן', 'טירן', 'טל', 'טלאור', 'טלמור', 'טמיר', 'טנא', 'טרי',
        'יאיר', 'יאן', 'יבין', 'יגאל', 'יגיל', 'יגל', 'ידיד', 'ידידיה', 'יהב', 'יהואש', 'יהודה', 'יהוידע', 'יהונדב', 'יהונתן', 'יהורם', 'יהושוע', 'יהושע', 'יהושפט', 'יהל', 'יהלום', 'יהלי', 'י-הלי', 'יואב',
        'יואל', 'יואן', 'יואש', 'יובב', 'יובל', 'יוגב', 'יוהד', 'יוחאי', 'יוחנן', 'יוכפז', 'יולי', 'יום טוב', 'יון', 'יונדב', 'יונה', 'יונתן', 'יוסי', 'יועד', 'יורם', 'יורן', 'יותם', 'יזהר', 'יזרח', 'יחזקאל',
        'יחיאל', 'יחיעם', 'ייטב', 'יכין', 'ילי', 'ים', 'ימין', 'ינאי', 'ינון', 'יניב', 'יניר', 'ינעם', 'יסעור', 'יעד', 'יעקב', 'יער', 'יפה', 'יפרח', 'יפת', 'יפתח', 'יצהל', 'יצחק', 'יקום', 'יקותיאל', 'יקיר',
        'יראון', 'ירדן', 'ירוחם', 'ירום', 'ירון', 'יריב', 'ירין', 'ישאל', 'ישוב', 'ישורון', 'ישי', 'ישראל', 'יששכר', 'יתיר', 'כבוד', 'כהנא', 'כוכב', 'כורם', 'כינור', 'כליל', 'כנען', 'כפיר', 'כרם', 'כרמי',
        'כרמל', 'כתר', 'לאור', 'לב', 'לבב', 'לביא', 'לבנה', 'לבנון', 'להב', 'להט', 'לו', 'לוז', 'לוטוס', 'לוטם', 'לוטן', 'לוי', 'לחן', 'לי', 'לי און', 'ליאב', 'ליאון', 'ליאור', 'ליאל', 'ליאם', 'ליאן', 'ליגיא',
        'לידור', 'לי-דור', 'לידן', 'ליהוא', 'לי-חי', 'ליטל', 'ליטם', 'לי-ים', 'לי-נוי', 'ליעד', 'ליעוז', 'ליעז', 'ליעם', 'ליפז', 'ליצח', 'ליר', 'לירוי', 'לירון', 'לירועי', 'לירז', 'לירן', 'לי-שי', 'לי-תום',
        'לנואל', 'לניר', 'לפיד', 'לשם', 'מאור', 'מאי', 'מאיר', 'מארק', 'מבורך', 'מגדיאל', 'מגל', 'מגן', 'מואב', 'מופת', 'מוקיר', 'מור', 'מורי', 'מוריאל', 'מורן', 'מושיע', 'מזר', 'מטע', 'מטר', 'מידד', 'מידן',
        'מיכאל', 'מיכה', 'מירום', 'מירון', 'מירן', 'מישאל', 'מישב', 'מיתר', 'מכבי', 'מלאך', 'מלאכי', 'מלכיאל', 'מנור', 'מנחם', 'מנשה', 'מעגן', 'מעוז', 'מעיין', 'מעין', 'מפל', 'מצוק', 'מצליח', 'מקס', 'מקסים',
        'מרגנית', 'מרדכי', 'מרום', 'מרון', 'מריאל', 'מרידור', 'מרסל', 'משאל', 'משגב', 'משה', 'משלט', 'מתיאו', 'מתן', 'מתנאל', 'מתניה', 'נאה', 'נאהב', 'נאור', 'נאות', 'נאל', 'נאמן', 'נבו', 'נבון', 'נבות', 'נבט',
        'נגב', 'נדב', 'נדיב', 'נדיר', 'נדר', 'נהדר', 'נהור', 'נהוראי', 'נהורי', 'נהוריי', 'נוב', 'נובל', 'נוה', 'נוח', 'נוי', 'נועם', 'נוף', 'נופר', 'נור', 'נוראל', 'נוריאל', 'נחום', 'נחל', 'נחמיה', 'נחמן',
        'נחשול', 'נחשון', 'נטע', 'ניב', 'ניל', 'ניסים', 'ניסן', 'ניצן', 'ניק', 'ניקול', 'ניקי', 'ניר', 'ניראל', 'נירן', 'נירעם', 'ניתאי', 'נמרוד', 'נס', 'נסים', 'נעים', 'נעם', 'נעמן', 'נפש', 'נפתלי', 'נצח',
        'נצר', 'נר', 'נריה', 'נריעד', 'נרקיס', 'נתיב', 'נתן', 'נתנאל', 'נתניהו', 'סאני', 'סביון', 'סביר', 'סגל', 'סהר', 'סולאל', 'סומך', 'סוף', 'סופר', 'סיון', 'סילבן', 'סימנטוב', 'סיני', 'סיפן', 'סנפיר',
        'סע-אל', 'סעדיה', 'סער', 'ספי', 'ספיר', 'סתו', 'סתיו', 'עברון', 'עברי', 'עגור', 'עגנון', 'עד', 'עדי', 'עדיאל', 'עדין', 'עדן', 'עובדיה', 'עודד', 'עוז', 'עוזי', 'עולם', 'עומר', 'עומרי', 'עופר', 'עופרי',
        'עז', 'עזאי', 'עזי', 'עזיאל', 'עזר', 'עזרא', 'עזריה', 'עזריקם', 'עטור', 'עטיר', 'עטר', 'עיברי', 'עידו', 'עידן', 'עיטם', 'עילאי', 'עילי', 'עילם', 'עינב', 'עינן', 'עירון', 'עלז', 'עלי', 'עלם', 'עמוס',
        'עמי', 'עמיאד', 'עמיאור', 'עמיאל', 'עמידור', 'עמידן', 'עמיחי', 'עמיעז', 'עמיקם', 'עמיר', 'עמית', 'עמנואל', 'עמק', 'עמרי', 'עמרם', 'ענב', 'ענבר', 'ענוג', 'ענן', 'ענר', 'עפרון', 'עפרי', 'עציון', 'עצמון',
        'עקיבא', 'ערד', 'ערן', 'עשהאל', 'עתי', 'עתיד', 'פאר', 'פולג', 'פורת', 'פז', 'פזיאל', 'פלג', 'פלד', 'פלטיאל', 'פנואל', 'פנחס', 'פסח', 'פרח', 'פרי', 'פריאל', 'פרס', 'פרץ', 'צבי', 'צביאל', 'צביון', 'צביקה',
        'צבעון', 'צבר', 'צדוק', 'צדף', 'צדק', 'צדקיהו', 'צהל', 'צוף', 'צוק', 'צור', 'צוראל', 'צוריאל', 'צוריה', 'צח', 'צחי', 'צחר', 'צחר', 'ציון', 'צל', 'צלאל', 'צליל', 'צמח', 'צפניה', 'צפריר', 'קדוש', 'קדם',
        'קובי', 'קורן', 'קטן', 'קטרן', 'קידר', 'קים', 'קינן', 'קיסר', 'קניאל', 'קסם', 'קריב', 'קרן', 'קרני', 'קרניאל', 'קשת', 'ראובן', 'ראודור', 'ראם', 'רביב', 'רביד', 'רגב', 'רהב', 'רהט', 'רואי', 'רובי',
        'רוה', 'רוזן', 'רוי', 'רום', 'רון', 'רונאל', 'רוני', 'רונן', 'רועי', 'רותם', 'רז', 'רזי', 'רזיאל', 'רחביה', 'רחמיאל', 'רחמים', 'ריחן', 'רימון', 'רלי', 'רם', 'רמון', 'רמז', 'רמי', 'רמיאל', 'רן', 'רנאל',
        'רנלי', 'רנן', 'רע', 'רעם', 'רענן', 'רפאל', 'רצון', 'רשף', 'רתם', 'שאול', 'שאלתיאל', 'שאר ישוב', 'שבח', 'שביב', 'שביט', 'שבת', 'שבתאי', 'שגב', 'שגיא', 'שגיב', 'שדמון', 'שהם', 'שובל', 'שוהם', 'שון',
        'שוני', 'שוע', 'שוקי', 'שור', 'שושן', 'שחם', 'שחף', 'שחק', 'שחר', 'שי', 'שי-אל', 'שילה', 'שילו', 'שי-לי', 'שיר', 'שירון', 'שירן', 'שלו', 'שלום', 'שלומי', 'שלומי', 'שליו', 'שלמה', 'שלמון', 'שלמי', 'שם',
        'שמגר', 'שמואל', 'שמחה', 'שמחון', 'שם-טוב', 'שמיר', 'שמעון', 'שמר', 'שמרון', 'שמריהו', 'שמרעם', 'שמש', 'שמשון', 'שנהב', 'שנהר', 'שני', 'שניאור', 'שניר', 'שפי', 'שפיר', 'שפע', 'שפריר', 'שקד', 'שר',
        'שר- אל', 'שראל', 'שרון', 'שריג', 'שריד', 'ששון', 'תאי', 'תאיר', 'תבור', 'תבל', 'תדהר', 'תדמור', 'תו', 'תובל', 'תום', 'תומר', 'תור', 'תורן', 'תימור', 'תירוש', 'תכלת', 'תלם', 'תמוז', 'תמיר',
    ];

    protected static $firstNameFemale = [
        'אבוקה', 'אביאלה', 'אביב', 'אביבה', 'אביבית', 'אביגיל', 'אביגל', 'אביה', 'אביחיל', 'אביטל', 'אבישג', 'אגם', 'אדוה', 'אדל', 'אדלה', 'אדמונית', 'אדמית', 'אדר', 'אדרת', 'אהבה', 'אהובה', 'אהרונה', 'אודיה',
        'אודית', 'אודליה', 'אוולין', 'אולגה', 'אופיר', 'אופירה', 'אופל', 'אופק', 'אור', 'אוראל', 'אור-אל', 'אורה', 'אור-חן', 'אורטל', 'אורי', 'אוריאלה', 'אוריאן', 'אוריאנה', 'אוריה', 'אוריין', 'אור-ים', 'אורין',
        'אורית', 'אור-לב', 'אורלי', 'אורליה', 'אורליז', 'אורנה', 'אורנית', 'אורפז', 'אושר', 'אושרי', 'אושרית', 'אושרת', 'אחינועם', 'איב', 'איבון', 'איה', 'איזבל', 'אייר', 'אילה', 'אילונה', 'איליי', 'אילנה',
        'אילנית', 'אילת', 'אילת', 'השחר', 'אילת', 'חן', 'אינה', 'אינסה', 'אירה', 'איריס', 'אירית', 'איתי', 'אלדר', 'אלה', 'אלונה', 'אליאור', 'אליאל', 'אליאן', 'אליאנה', 'אליה', 'אלילה', 'אל-ים', 'אלין', 'אלינוי',
        'אליס', 'אליענה', 'אלירז', 'אלישבע', 'אלמה', 'אלמוג', 'אלנה', 'אלני', 'אמה', 'אמונה', 'אמור', 'אמי', 'אמילי', 'אמירה', 'אמנדה', 'אמת', 'אן', 'אנאל', 'אנה', 'אנט', 'אניס', 'אנני', 'אנסטסיה', 'אנפה',
        'אסנת', 'אסתר', 'אפק', 'אפקה', 'אפריל', 'אפרת', 'אצילה', 'אראל', 'אראלה', 'ארבל', 'ארזה', 'ארזית', 'אריאל', 'אריאלה', 'אריאן', 'אריאנה', 'ארין', 'אריקה', 'ארנה', 'אשדה', 'אשחר', 'אשכר', 'אשמרת', 'אשרה',
        'אשרית', 'אשרת', 'אתל', 'בארית', 'בדולח', 'בהירה', 'בונה', 'בינה', 'בינת', 'בירנית', 'בכורה', 'בל', 'בלה', 'בלהה', 'בקי', 'בר', 'ברוכה', 'ברוריה', 'ברית', 'ברכה', 'ברקאית', 'ברקנית', 'ברקת', 'בשורה',
        'בשמת', 'בת', 'בת-אור', 'בת-אל', 'בת-גל', 'בת-גלים', 'בת-חיל', 'בת-חן', 'בתיה', 'בת-לי', 'בת-לי', 'בת-ציון', 'בת-שבע', 'בת-שחר', 'בת-שיר', 'גאולה', 'גאולית', 'גאות', 'גאיה', 'גאליה', 'גבית', 'גבריאלה',
        'גדעונה', 'גוני', 'גורה', 'גורית', 'גזית', 'גיא', 'גיה', 'גיטל', 'גיל', 'גילה', 'גילי', 'גילית', 'גילת', 'גינה', 'גינת', 'גיתית', 'גל', 'גל', 'אור', 'גלאור', 'גל-אור', 'גלי', 'גליה', 'גלילה', 'גליליה',
        'גלית', 'גן', 'גניה', 'גנית', 'גפן', 'גפנה', 'גפנית', 'גרנית', 'דבורה', 'דבורית', 'דבי', 'דביר', 'דברת', 'דבש', 'דגניה', 'דגנית', 'דוגית', 'דודאית', 'דולי', 'דומי', 'דונה', 'דור', 'דורה', 'דורונה',
        'דוריאל', 'דוריה', 'דורין', 'דורינה', 'דורית', 'דורלי', 'דיאה', 'דיאנה', 'דיה', 'דין', 'דין', 'דין', 'דינה', 'דינור', 'דיצה', 'דיתה', 'דלית', 'דנה', 'דנה', 'דניאל', 'דניאלה', 'דניה', 'דנית', 'דעת',
        'דפנה', 'דפנית', 'דקל', 'דקלה', 'דר', 'דרורה', 'דרורית', 'דרורלי', 'דריה', 'דרלי', 'דתיה', 'הגר', 'הגרה', 'הדי', 'הדיה', 'הדס', 'הדסה', 'הדר', 'הדרה', 'הדרית', 'הודי', 'הודיה', 'הולי', 'הונית', 'היא-לי',
        'היילי', 'הילה', 'הילי', 'הינומה', 'הלה', 'הלי', 'הלית', 'הלל', 'הללה', 'הללי', 'הלן', 'הלנה', 'המיה', 'הני', 'הניה', 'הראל', 'הראלה', 'הרדוף', 'הררית', 'ויטה', 'ויק', 'ויקטוריה', 'ורד', 'ורדב', 'ורדה',
        'ורדיאלה', 'ורדינה', 'ורדית', 'ורוניקה', 'זאבה', 'זהבה', 'זהבית', 'זהובה', 'זהורית', 'זהר', 'זהרה', 'זהרירה', 'זו', 'לי', 'זואי', 'זוהר', 'זוהרית', 'זוהרת', 'זויה', 'זיו', 'זיוה', 'זיוונית', 'זיוית',
        'זילפה', 'זיקה', 'זכה', 'זכות', 'זמירה', 'זמר', 'זמרה', 'זמרית', 'זמרת', 'זעירה', 'זרעית', 'חביבה', 'חבצלת', 'חגית', 'חדוה', 'חוה', 'חופית', 'חושן', 'חיבה', 'חידה', 'חיה', 'חיותה', 'חיננית', 'חלום',
        'חלומית', 'חלי', 'חמדה', 'חמדת', 'חמוטל', 'חן', 'חנה', 'חני', 'חנית', 'חניתה', 'חן-לי', 'חסיה', 'חפצי-בה', 'חצבה', 'חרות', 'טאי', 'טארה', 'טהורה', 'טהר', 'טובה', 'טובית', 'טוהר', 'טופז', 'טימור', 'טינה',
        'טירה', 'טירנה', 'טל', 'טל', 'חן', 'טלאור', 'טל-אור', 'טל-חן', 'טלי', 'טליה', 'טלילה', 'טליתה', 'טללית', 'טל-שחר', 'טמירה', 'טנא', 'טניה', 'יאה', 'יאירה', 'יגאלה', 'ידידה', 'יהב', 'יהבה', 'יהודית',
        'יהל', 'יהלה', 'יהלום', 'יהלי', 'יואלה', 'יובל', 'יודפת', 'יוטבתה', 'יוכבד', 'יולי', 'יוליה', 'יונה', 'יונינה', 'יונית', 'יונת', 'יוספה', 'יופית', 'יחידה', 'יטבת', 'ילי', 'יליאל', 'ים', 'ימימה', 'ימית',
        'ינאית', 'יסכה', 'יסמין', 'יעל', 'יעלה', 'יעלית', 'יעלת-חן', 'יער', 'יערה', 'יערית', 'יפה', 'יפית', 'יפעת', 'יקירה', 'ירדן', 'ירדנה', 'ירונה', 'ירין', 'כדיה', 'כדית', 'כוכב', 'כוכבה', 'כוכבית', 'כוכי',
        'כינרת', 'כליל', 'כלילה', 'כלנית', 'כמהה', 'כנרת', 'כספית', 'כפיר', 'כרם', 'כרמה', 'כרמי', 'כרמיאל', 'כרמיה', 'כרמית', 'כרמל', 'כרמלה', 'כתר', 'לאה', 'לב', 'לבי', 'לביאה', 'לבנה', 'לבנת', 'לוטם', 'לוטן',
        'לולה', 'לולית', 'לוריאן', 'לורין', 'לורן', 'לחן', 'לטיפה', 'לי', 'לי', 'חן', 'ליאב', 'ליאה', 'ליאונור', 'ליאור', 'ליאורה', 'ליאל', 'לי-אל', 'ליאם', 'ליאן', 'ליאת', 'ליבה', 'ליבי', 'לי-בר', 'ליגל',
        'לידור', 'ליה', 'ליהי', 'ליהי', 'ליהיא', 'ליז', 'לי-זר', 'לי-חן', 'ליטל', 'לי-ים', 'לילי', 'לילך', 'לין', 'לינדה', 'לינה', 'לינוי', 'לינור', 'ליפז', 'ליר', 'לירון', 'לירז', 'לירי', 'לי-שי', 'לנה',
        'לשם', 'מאור', 'מאורי', 'מאי', 'מאיה', 'מאיה', 'מאירה', 'מארי', 'מבורכת', 'מדינה', 'מהות', 'מולדת', 'מוניק', 'מור', 'מוראל', 'מורג', 'מוריאל', 'מוריה', 'מורין', 'מורל', 'מורן', 'מושית', 'מזל', 'מטר',
        'מיא', 'מיאל', 'מיה', 'מיטב', 'מיטל', 'מי-טל', 'מיכאל', 'מיכאלה', 'מיכל', 'מילי', 'מילכה', 'מילנה', 'מימי', 'מיקה', 'מירב', 'מירה', 'מירי', 'מירית', 'מירן', 'מישל', 'מיתר', 'מלאני', 'מלורי', 'מלכה',
        'מלכי', 'מנוחה', 'מנור', 'מנורה', 'מנרה', 'מסדה', 'מעיין', 'מעין', 'מענית', 'מצדה', 'מקסימה', 'מרב', 'מרגלית', 'מרגנית', 'מרוה', 'מרי', 'מריאור', 'מריאן', 'מריאנה', 'משאלה', 'משי', 'משכית', 'מתוקה',
        'מתנה', 'נאדיה', 'נאה', 'נאהב', 'נאוה', 'נאוית', 'נאוית', 'נאור', 'נאורה', 'נאות', 'נאיה', 'נאמנה', 'נב', 'נבונה', 'נגבה', 'נגה', 'נגוהה', 'נגינה', 'נדיבה', 'נדין', 'נדירה', 'נהדרת', 'נהורה', 'נהירה',
        'נוב', 'נוגה', 'נוגת', 'נוה', 'נוהא', 'נוהר', 'נוי', 'נויה', 'נוית', 'נועה', 'נועם', 'נופיה', 'נופית', 'נופר', 'נור', 'נורה', 'נוריה', 'נורית', 'נחל', 'נחמה', 'נחת', 'נטיעה', 'נטלי', 'נטליה', 'נטע',
        'נטע-לי', 'ניבה', 'ניבי', 'ניה', 'נילי', 'נילית', 'ניסן', 'ניצה', 'ניצן', 'ניצנה', 'ניצנית', 'ניקול', 'ניקול', 'ניראל', 'נירה', 'נירי', 'נירית', 'נסיה', 'נסיכה', 'נעה', 'נעימה', 'נעם', 'נעמה', 'נעמי',
        'נעמית', 'נערה', 'נפאל', 'נצחונה', 'נצחיה', 'נקטר', 'נרדה', 'נרדית', 'נרה', 'נריה', 'נרקיס', 'נתיב', 'נתיבה', 'נתנאלה', 'נתניה', 'סאלי', 'סביון', 'סביונה', 'סברינה', 'סגולה', 'סגליה', 'סגלית', 'סהר',
        'סוזי', 'סוזן', 'סול', 'סופה', 'סופי', 'סופיה', 'סחלב', 'סי', 'סיאל', 'סיגל', 'סיגלית', 'סיוון', 'סיון', 'סילבי', 'סימה', 'סימונה', 'סיני', 'סינתיה', 'סיתוונית', 'סלין', 'סלעית', 'סמדר', 'סנאית', 'סנדי',
        'סנדרה', 'סנונית', 'ספיר', 'ספירית', 'סתו', 'סתוונית', 'סתיו', 'עבדת', 'עברונה', 'עבריה', 'עדה', 'עדי', 'עדיאלה', 'עדיה', 'עדילי', 'עדין', 'עדינה', 'עדית', 'עדן', 'עדנה', 'עובדה', 'עודדה', 'עוזיאלה',
        'עוזית', 'עומר', 'עונג', 'עופרי', 'עורית', 'עטרה', 'עטרת', 'עיבל', 'עידית', 'עידן', 'עידנית', 'עילי', 'עילית', 'עינב', 'עינה', 'עינת', 'עירית', 'עלוה', 'עלומה', 'עליה', 'עליזה', 'עלית', 'עלמה', 'עמיה',
        'עמירה', 'עמית', 'עמיתה', 'עמל', 'עמלה', 'עמליה', 'עמנואלה', 'עמר', 'עמרית', 'ענאל', 'ענב', 'ענבה', 'ענבל', 'ענבר', 'ענג', 'ענגה', 'ענוה', 'ענולה', 'ענפה', 'ענת', 'עפרה', 'עפרת', 'עציונה', 'עצמאות',
        'עצמה', 'ערבה', 'ערגה', 'ערה', 'עשירה', 'עתידה', 'עתליה', 'עתלית', 'עתרה', 'עתרת', 'פאולה', 'פאני', 'פאר', 'פארה', 'פאר-לי', 'פדויה', 'פדות', 'פולה', 'פולי', 'פועה', 'פורז', 'פורחת', 'פוריה', 'פורת',
        'פז', 'פזית', 'פיוט', 'פלא', 'פלאית', 'פלג', 'פלד', 'פליאה', 'פניה', 'פנינה', 'פנינית', 'פסיה', 'פרח', 'פרחיה', 'פרחית', 'פרי', 'מור', 'פריאור', 'פריאל', 'פריאלה', 'פרילי', 'פרימור', 'פשוש', 'צאלה',
        'צביאלה', 'צביה', 'צדף', 'צדפית', 'צדק', 'צדקה', 'צהלה', 'צוף', 'צופיה', 'צופית', 'צוקית', 'צוריה', 'צוריה', 'צורית', 'צחה', 'צחורה', 'צחית', 'ציונה', 'צילה', 'צילה', 'צילי', 'צינה', 'ציפורן', 'צלחה',
        'צליל', 'צלילה', 'צלילית', 'צמרת', 'צעירה', 'צפורה', 'צפי', 'צפיה', 'צפירה', 'צפנת', 'צפרה', 'צפרירה', 'צפרירית', 'צרויה', 'קארין', 'קארינה', 'קארן', 'קדיה', 'קדם', 'קדמה', 'קולט', 'קולית', 'קוראל',
        'קורין', 'קורל', 'קורלי', 'קורנת', 'קטורה', 'קטי', 'קטיאנה', 'קטיה', 'קטיפה', 'קטרינה', 'קידה', 'קים', 'קיסריה', 'קלודיה', 'קלי', 'קליה', 'קלילה', 'קלרה', 'קמה', 'קמי', 'קנרית', 'קסם', 'קרול', 'קרולין',
        'קרין', 'קרינה', 'קרן', 'קרן-אור', 'קרני', 'קרניאלה', 'קרנינה', 'קרנית', 'קרת', 'קשת', 'ראובנה', 'ראובת', 'ראומה', 'ראות', 'ראשונה', 'רבבה', 'רביבה', 'רביד', 'רביה', 'רבקה', 'רגבה', 'רדיד', 'רוז',
        'רוחמה', 'רויה', 'רויטל', 'רוית', 'רומי', 'רומיה', 'רומית', 'רוממה', 'רון', 'רונה', 'רונה', 'לי', 'רוני', 'רוניה', 'רונית', 'רונלי', 'רוננה', 'רות', 'רותם', 'רז', 'רזיאלה', 'רזיה', 'רזלי', 'רחל', 'רחלה',
        'ריבה', 'ריבי', 'ריטה', 'רים', 'רימון', 'רינה', 'רינת', 'רינתיה', 'ריף', 'רמה', 'רמונה', 'רמות', 'רמיה', 'רמית', 'רני', 'רנית', 'רנן', 'רננה', 'רננית', 'רעות', 'רעות', 'רעיה', 'רעננה', 'רעננית', 'רפאלה',
        'רקמה', 'רקפת', 'רתם', 'שאולה', 'שאנל', 'שאנלי', 'שבי-אל', 'שביט', 'שבלת', 'שגית', 'שדמה', 'שדמית', 'שהם', 'שובל', 'שוהם', 'שולה', 'שולמית', 'שומרה', 'שונטל', 'שונית', 'שוש', 'שושנה', 'שחף', 'שחר',
        'שחרית', 'שי', 'שיאונה', 'שיאן', 'שיבולת', 'שיטה', 'שיטל', 'שילה', 'שילי', 'שי-לי', 'שילת', 'שיר', 'שיראור', 'שיראל', 'שירה', 'שירז', 'שירטל', 'שירי', 'שירין', 'שירית', 'שירלי', 'שירן', 'שירפז', 'של-אל',
        'שלהבת', 'שלוה', 'שלווה', 'שלומית', 'שלי', 'שליו', 'שמחה', 'שמיים', 'שמרית', 'שמרת', 'שנהב', 'שני', 'שניר', 'שנית', 'שפי', 'שפירה', 'שפרה', 'שפרירה', 'שקד', 'שקמה', 'שקמונה', 'שרה', 'שרון', 'שרון',
        'שרונה', 'שרי', 'שרית', 'תאיר', 'תאנה', 'תבונה', 'תבל', 'תגיל', 'תגית', 'תדהר', 'תהילה', 'תהל', 'תו', 'תואם', 'תואר', 'תובל', 'תום', 'תומר', 'תור', 'תורה', 'תושיה', 'תות', 'תחיה', 'תימור', 'תימורה',
        'תימנע', 'תיקי', 'תירוש', 'תכלת', 'תלמלה', 'תמוז', 'תמי', 'תמימה', 'תמירה', 'תמנה', 'תמנע', 'תמר', 'תמרה', 'תנאל', 'תניה', 'תפארה', 'תפילה', 'תפרח', 'תקוה', 'תקומה', 'תרז', 'תרזה', 'תרצה', 'תרשישה',
        'תשובה', 'תשורה',
    ];

    /**
     * {@link} http://toladot.blogspot.co.il/p/blog-page_28.html
     */
    protected static $lastName = [
        'אויערבך', 'אולמן', 'אונגרישר', 'אונטרמן', 'אופנהיים', 'אזולאי', 'אטינגר', 'איגר', 'איגרא', 'אידלשטיין', 'אייבשיץ', 'אייגש', 'איידלש', 'אייזנשטאט', 'אייכנשטיין', 'איסרליש', 'אלטשולר', 'אלישיב', 'אפשטיין',
        'אשכנזי', 'בידרמן', 'בינדיגר', 'ברדוגו', 'ברודא', 'ברוידא', 'ברזובסקי', 'ברלין', 'ברנדיס', 'ברנדסדורפר', 'גוראריה', 'גורדון', 'גינצבורג', 'גרודזנסקי', 'גרוזובסקי', 'גרוסברד', 'גריינמן', 'גשטטנר', 'דון',
        'יחיא', 'דושינסקי', 'דיסקין', 'דרמברדיגר', 'הוטנר', 'הורוביץ', 'הילדסהיים', 'הינדס', 'הלברשטם', 'הלפרין', 'הלר', 'העשל', 'וינברג', 'ויסבלום', 'זוננפלד', 'זק', 'טברסקי', 'טייטלבוים', 'טייכטל', 'טרויב',
        'טרופ', 'ידלר', 'יונגרייז', 'יפה', 'כץ', 'כהן', 'לוברבוים', 'לוריא', 'ליפקין', 'ליפשיץ', 'לנדא', 'מייזליש', 'מירלש', 'מירקש', 'מישקובסקי', 'מלצר', 'מרגליות', 'משאש', 'סולובייציק', 'סורוצקין', 'סירקיש',
        'סלנט', 'ספרין', 'סרנא', 'פאדווא', 'פינס', 'קאליפארי', 'קוליץ', 'קוק', 'קנייבסקי', 'קצנלבוגן', 'קרליבך', 'רבינוביץ', 'רבקש', 'רובין', 'רוטשילד', 'רוקח', 'רפופורט', 'שטראשון', 'שך', 'שמלקיש', 'שפירא',
        'תאומים',
    ];

    protected static $titleMale = ['מר.', 'ד"ר', 'פרופ'];

    protected static $titleFemale = ['גב.', 'ד"ר', 'פרופ'];
}
