<?php

namespace Miladabdi\PersianFaker\Provider;

class Company extends Base
{
    protected static array $job = [
        'برنامه نوسی', 'مسئول پشتیبانی', 'فروشنده', 'بازاریاب', 'طراح',
        'گرافیست', 'کارگردان', 'هنرپیشه', 'آرایشگر', 'خیاط', 'عکاس', 'ورزشکار', 'پلیس', 'استاد دانشگاه', 'معلم', 'پزشک', 'پرستار', 'مدیر', 'آشپز'
    ];

    public function job(): string
    {
        return self::randomElement(self::$job);
    }

}
