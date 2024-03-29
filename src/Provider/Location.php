<?php

namespace GlassCode\PersianFaker\Provider;

class Location extends FakerProvider
{
    protected static array $country = [
        'آبخاز', 'آرژانتین', 'آفریقای جنوبی', 'آلبانی', 'آلمان', 'آنتیگوا و باربودا', 'آندورا', 'آنگولا',
        'اتریش', 'اتیوپی', 'اردن', 'ارمنستان', 'اروگوئه', 'اریتره', 'ازبکستان', 'استرالیا', 'استونی', 'اسرائیل', 'اسلواکی', 'اسلوونی', 'اسواتینی', 'اسپانیا', 'افغانستان', 'الجزایر', 'السالوادور', 'امارات متحده عربی', 'اندونزی', 'اوستیای جنوبی', 'اوکراین', 'اوگاندا', 'اکوادور', 'ایالات فدرال میکرونزی', 'ایالات متحده آمریکا', 'ایتالیا', 'ایران', 'ایسلند',
        'باربادوس', 'باهاما', 'بحرین', 'برزیل', 'برونئی', 'بریتانیا', 'بلاروس', 'بلغارستان', 'بلژیک', 'بلیز', 'بنگلادش', 'بنین', 'بوتسوانا', 'بوروندی', 'بورکینافاسو', 'بوسنی و هرزگوین', 'بولیوی',
        'تاجیکستان', 'تانزانیا', 'تایلند', 'ترانسنیستریا', 'ترکمنستان', 'ترکیه', 'ترینیداد و توباگو', 'تونس', 'تونگا', 'تووالو', 'توگو', 'تیمور شرقی',
        'جامائیکا', 'جزایر سلیمان', 'جزایر مارشال', 'جزایر کوک', 'جمهوری آذربایجان', 'جمهوری آرتساخ', 'جمهوری آفریقای مرکزی', 'جمهوری اکوادور', 'جمهوری ایرلند', 'جمهوری دموکراتیک صحرای غربی', 'جمهوری دموکراتیک کنگو', 'جمهوری دومینیکن', 'جمهوری چک', 'جمهوری چین', 'جمهوری کنگو', 'جیبوتی',
        'دانمارک', 'دماغه سبز', 'دومینیکا',
        'رواندا', 'روسیه', 'رومانی', 'زامبیا',
        'زیمبابوه', 'سائوتومه و پرنسیپ',
        'ساحل عاج', 'ساموآ', 'سان مارینو', 'سری‌لانکا', 'سنت لوسیا', 'سنت وینسنت و گرنادین‌ها', 'سنت کیتس و نویس', 'سنگال', 'سنگاپور', 'سوئد', 'سوئیس', 'سودان', 'سودان جنوبی', 'سورینام', 'سوریه', 'سومالی', 'سومالی‌لند', 'سیرالئون', 'سیشل',
        'شیلی',
        'صربستان',
        'عراق', 'عربستان سعودی', 'عمان',
        'غنا',
        'فرانسه', 'فلسطین', 'فنلاند', 'فیجی', 'فیلیپین',
        'قبرس', 'قبرس شمالی', 'قرقیزستان', 'قزاقستان', 'قطر',
        'لائوس', 'لبنان', 'لتونی', 'لسوتو', 'لهستان', 'لوکزامبورگ', 'لیبریا', 'لیبی', 'لیتوانی', 'لیختن‌اشتاین',
        'ماداگاسکار', 'مالاوی', 'مالت', 'مالدیو', 'مالزی', 'مالی', 'مجارستان', 'مراکش', 'مصر', 'مغولستان', 'مقدونیه شمالی', 'موریتانی', 'موریس', 'موزامبیک', 'مولداوی', 'موناکو', 'مونته‌نگرو', 'مکزیک', 'میانمار',
        'نائورو', 'نامیبیا', 'نروژ', 'نپال', 'نیجر', 'نیجریه', 'نیوزیلند', 'نیووی', 'نیکاراگوئه',
        'هائیتی', 'هلند', 'هند', 'هندوراس',
        'واتیکان', 'وانواتو', 'ونزوئلا', 'ویتنام',
        'پادشاهی بوتان', 'پاراگوئه', 'پالائو', 'پاناما', 'پاپوآ گینه نو', 'پاکستان', 'پرتغال', 'پرو',
        'چاد', 'چین',
        'ژاپن',
        'کاستاریکا', 'کامبوج', 'کامرون', 'کانادا', 'کره جنوبی', 'کره شمالی', 'کرواسی', 'کلمبیا', 'کنیا', 'کوبا', 'کوزوو', 'کومور', 'کویت', 'کیریباتی',
        'گابن', 'گامبیا', 'گرجستان', 'گرنادا', 'گواتمالا', 'گویان', 'گینه', 'گینه استوایی', 'گینه بیسائو',
        'یمن', 'یونان',
    ];

    protected static array $state = [
        'آذربایجان شرقی',
        'آذربایجان غربی',
        'اردبیل',
        'اصفهان',
        'البرز',
        'ایلام',
        'بوشهر',
        'تهران',
        'چهارمحال و بختیاری',
        'خراسان جنوبی',
        'خراسان رضوی',
        'خراسان شمالی',
        'خوزستان',
        'زنجان',
        'سمنان',
        'سیستان و بلوچستان',
        'فارس',
        'قزوین',
        'قم',
        'کردستان',
        'کرمان',
        'کرمانشاه',
        'کهگیلویه وبویراحمد',
        'گلستان',
        'گیلان',
        'لرستان',
        'مازندران',
        'مرکزی',
        'هرمزگان',
        'همدان',
        'یزد',
    ];

    protected static array $address = [
        'خراسان رضوى مشهد قاسم آباد بلوار ميثاق  ميثاق 20 خسروي يك',
        'بزرگراه شهید بابایی (غرب به شرق)، روبروی دانشگاه امام حسین (ع)، خروجی حکیمیه، خیابان شهید صدوقی، روبروی ضلع جنوبی شهرک شهید بهشتی خیابان چمن آرا، پردیس واحد دانشگاهی واحد تهران شمال',
        'خیابان آزادی ،نبش خیابان رودکی',
        'بزرگراه همت ،شرق به غرب ،ابتدای جنت آبادشمالی ،کوچه دانش',
        'میدان بسیج ،ابتدای خیابان ابوذر ،جنب شهرداری منطقه 15',
        'شهرکرد ،میدان دفاع مقدس ،جاده رحمتیه ،روبروی ساختمانهای مسکن مهر',
        'تهران خیابان آفریقا،بالاتر از چهار راه جهان کودک ، کوچه شهید صانعی پلاک 15',
        'اردبیل ـ خیابان دانشگاه ـ خیابان 13 آبان ـ پلاک 48',
        'كرج ـ جهانشهر ـ بلوار مولانا ـ بين خيابان كسري شمالي و فرمانداري شمالي ـ قطعه 1397ـ ساختمان نيلوفر',
        'قزوین ـ خيابان فلسطين شرقي ـ نبش خيابان توحيد',
        'تهران سعادت اباد میدان کاج خیابان سرو شرقی نبش خیابان علامه طباطبایی شمالی پلاک ۵',
    ];

    public function state(): string
    {
        return self::randomElement(self::$state);
    }

    public function country(): string
    {
        return self::randomElement(self::$country);
    }

    public function address(): string
    {
        return self::randomElement(self::$address);
    }
}
