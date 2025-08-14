<?php
// توکن ربات شما
$token = '<token you robot rubika >';


$provinces_data = [
    [
        "province" => "آذربایجان شرقی",
        "cities" => ["تبریز", "مراغه", "مرند", "اهر", "میانه", "بناب", "اسکو", "آذرشهر", "سراب", "هشترود", "جلفا", "کلیبر", "هوراند", "عجب شیر", "چاراویماق", "شبستر", "هریس", "ورزقان", "خداآفرین", "ملکان", "ترکمانچای", "صوفیان", "ایلخچی", "باسمنج", "تسوج", "خمارلو", "زرنق", "کلوانق", "ممقان", "وایقان", "هادیشهر", "سیس", "سیه رود", "شرفخانه", "شندآباد", "صوفیان", "عاشقلو", "کوزه کنان", "گوگان", "لیلان"]
    ],
    [
        "province" => "آذربایجان غربی",
        "cities" => ["ارومیه", "خوی", "مهاباد", "میاندوآب", "سلماس", "پیرانشهر", "ماکو", "شاهین دژ", "بوکان", "چالدران", "نقده", "تکاب", "اشنویه", "پلدشت", "چایپاره", "سردشت", "ربط", "سرو", "شوط", "فیرورق", "قره ضیاءالدین", "قطور", "سیه چشمه", "شاهین دژ", "کشاورز", "گردکشانه", "مرگنلر", "میرآباد", "نالوس", "نقده", "باروق", "بازرگان", "تخت سلیمان", "تکاب", "چایپاره", "خلیفان", "دیزج دیز", "زرآباد", "سیمینه", "سیلوانه", "شپیران"]
    ],
    [
        "province" => "اردبیل",
        "cities" => ["اردبیل", "مشگین شهر", "پارس آباد", "خلخال", "گرمی", "نیر", "نمین", "بیله سوار", "کوثر", "سرعین", "گیوی", "اصلاندوز", "انگوت", "آبی بیگلو", "اردیموسی", "اسلام آباد", "انگوت", "باروق", "بخشایش", "برندق", "بیله سوار", "حور", "خورش رستم", "رضی", "زهرا", "سنجبد", "شاهرود", "صفرآباد", "فخرآباد", "قصابه", "کوراییم", "گرمی", "گیوی", "لاهرود", "مرادلو", "مشگین شهر", "مغان سر", "مهماندار", "نمین", "نیر", "هشتجین", "هیر"]
    ],
    [
        "province" => "اصفهان",
        "cities" => ["اصفهان", "کاشان", "خمینی شهر", "نجف آباد", "شهرضا", "مبارکه", "گلپایگان", "اردستان", "سمیرم", "شاهین شهر", "فریدن", "فریدونشهر", "فلاورجان", "نائین", "نطنز", "خوانسار", "دهاقان", "تیران و کرون", "چادگان", "باغ بهادران", "زرین شهر", "زواره", "شاهین شهر", "کوهپایه", "میمه", "ورزنه", "ابریشم", "ایمانشهر", "بهارستان", "جوزدان", "دهق", "علویجه", "گرگاب", "گزبرخوار", "لنجان", "مجلسی", "وزوان", "هرند"]
    ],
    [
        "province" => "البرز",
        "cities" => ["کرج", "هشتگرد", "طالقان", "نظرآباد", "اشتهارد", "آسارا", "کمال شهر", "گرمدره", "ماهدشت", "مشکین دشت", "محمدشهر", "تنکمان", "فردیس", "چهارباغ", "شهر جدید هشتگرد", "کوهسار", "گلسار", "مشکین آباد", "نصیرشهر", "پیشوا", "آبیک", "آوج", "بویین زهرا", "تاکستان", "قزوین", "الوند", "بیدستان", "خرمدشت", "رازمیان", "سگزآباد", "شال", "ضیاءآباد", "معلم کلایه", "نرجه", "اسفرورین", "اقبالیه", "آبگرم", "آبیک", "ارداق", "اسپهبدان", "البرز"]
    ],
    [
        "province" => "ایلام",
        "cities" => ["ایلام", "ایوان", "آبدانان", "دره شهر", "دهلران", "مهران", "چرداول", "بدره", "سرابله", "موسیان", "میمه", "ارکواز", "توحید", "زرنه", "صالح آباد", "لومار", "مهر", "مهران", "مهربان", "مورموری", "آسمان آباد", "بلاوه", "پهله", "چوار", "دلگشا", "زنجیره", "سراب باغ", "شیروان", "علی آباد", "کلان", "مجلسی", "مهرگان", "مورموری", "موسیان", "میمه", "نورآباد", "پهله", "چشمه شیرین", "چنارباشی", "دشت عباس"]
    ],
    [
        "province" => "بوشهر",
        "cities" => ["بوشهر", "تنگستان", "دشتستان", "دشتی", "دیر", "دیلم", "کنگان", "جم", "گناوه", "عسلویه", "خورموج", "اهرم", "برازجان", "خارک", "دالکی", "سعدآباد", "شبانکاره", "کاکی", "آبدان", "بادوله", "بندر ریگ", "بندر دیر", "بندر کنگان", "بندر گناوه", "بندر عسلویه", "بندر جم", "بندر ریگ", "بندر دیر", "بندر کنگان", "بندر گناوه", "بندر عسلویه", "بندر جم", "چغادک", "خارک", "دالکی", "دلوار", "ریز", "سیراف", "شبانکاره", "شنبه", "طاهری", "کلمه", "کوهستانی", "نخل تقی"]
    ],
    [
        "province" => "تهران",
        "cities" => ["تهران", "اسلامشهر", "پاکدشت", "پیشوا", "دماوند", "رباط کریم", "ری", "شمیرانات", "شهریار", "فیروزکوه", "ورامین", "قرچک", "ملارد", "قدس", "پردیس", "بومهن", "شهریار", "چهاردانگه", "جوادآباد", "آبسرد", "آبعلی", "ارجمند", "اندیشه", "باغستان", "باقرشهر", "بومهن", "پاکدشت", "تجریش", "تلو", "جاجرود", "چرمشهر", "حسن آباد", "دماوند", "رودهن", "شاهدشهر", "شریف آباد", "شهر قدس", "صفادشت", "فشم", "فیروزکوه", "کهریزک", "کیلان", "گلستان", "لواسان", "ماهدشت", "نسیم شهر", "نصیرآباد", "وحیدیه", "ورامین"]
    ],
    [
        "province" => "چهارمحال و بختیاری",
        "cities" => ["شهرکرد", "بروجن", "فارسان", "لردگان", "کوهرنگ", "اردل", "بن", "سامان", "کیار", "نافچ", "گندمان", "بلداجی", "صمصامی", "دستنا", "سودجان", "شلمزار", "گهرو", "نقنه", "هفشجان", "وردنجان", "باباحیدر", "پردنجان", "جونقان", "چلگرد", "دشتک", "سرخون", "سورشجان", "شهرک", "فارسان", "کاج", "کوهک", "کیار", "گهرو", "لردگان", "مرداویج", "ناغان", "هفشجان", "وردنجان", "چلیچه", "دیناران", "سامان", "شلمزار"]
    ],
    [
        "province" => "خراسان جنوبی",
        "cities" => ["بیرجند", "قائن", "فردوس", "سرایان", "نهبندان", "سربیشه", "درمیان", "طبس", "خوسف", "زیرکوه", "بشرویه", "اسدیه", "آیسک", "ارسک", "اسفدن", "اسلامیه", "آرین شهر", "باخرز", "بیرجند", "حاجی آباد", "خضری", "خوسف", "درح", "دیهوک", "زهان", "سرایان", "سربیشه", "سه قلعه", "شوسف", "طبس", "عشق آباد", "فردوس", "قائن", "قهستان", "گزیک", "مود", "نهبندان", "نیمبلوک", "اسلامیه", "ارسک", "اسفدن", "آرین شهر", "باخرز"]
    ],
    [
        "province" => "خراسان رضوی",
        "cities" => ["مشهد", "نیشابور", "سبزوار", "تربت حیدریه", "قوچان", "کاشمر", "تایباد", "خواف", "سرخس", "فریمان", "چناران", "درگز", "فیروزه", "گناباد", "بردسکن", "جغتای", "داورزن", "رشتخوار", "زاوه", "طرقبه شاندیز", "خلیل آباد", "بجستان", "باخرز", "باینگان", "بینالود", "تخت جلگه", "جنگل", "چناران", "خرو", "خواف", "درگز", "رشتخوار", "زاوه", "سبزوار", "سرخس", "سفیدسنگ", "سلامی", "شاندیز", "ششتمد", "طرقبه", "فرهادگرد", "فیروزه", "فیض آباد", "قاسم آباد", "قدمگاه", "قلندرآباد", "کاشمر", "کلات", "گناباد", "مشهد", "نیشابور", "همت آباد"]
    ],
    [
        "province" => "خراسان شمالی",
        "cities" => ["بجنورد", "اسفراین", "جاجرم", "شیروان", "فاروج", "مانه و سملقان", "راز و جرگلان", "پیش قلعه", "حصارگرمخان", "درق", "سنخواست", "شوقان", "لوجلی", "آشخانه", "آوا", "پیش قلعه", "تیتکانلو", "جاجرم", "حصارگرمخان", "درق", "راز", "سنخواست", "شوقان", "شیروان", "فاروج", "قاضی", "لوجلی", "مانه", "نقنه", "آوا", "بجنورد", "تیتکانلو", "جاجرم", "حصارگرمخان", "درق", "راز", "سنخواست", "شوقان", "شیروان", "فاروج", "قاضی", "لوجلی"]
    ],
    [
        "province" => "خوزستان",
        "cities" => ["اهواز", "آبادان", "خرمشهر", "دزفول", "شوش", "شوشتر", "اندیمشک", "مسجدسلیمان", "ایذه", "باغ ملک", "بهبهان", "رامهرمز", "امیدیه", "هویزه", "بندر ماهشهر", "هندیجان", "لالی", "اندیکا", "گتوند", "آغاجاری", "حمیدیه", "کارون", "بستان", "چمران", "چویبده", "حر", "سردشت", "شرافت", "صیدون", "قلعه تل", "مینوشهر", "ویس", "الوان", "بندرماهشهر", "جایزان", "چغامیش", "حسینیه", "خنافره", "دارخوین", "دهدز", "رامشیر", "سوسنگرد", "شادگان", "صالح مشطت", "قلعه خواجه", "گوریه", "مینوشهر", "هفتگل", "هندیجان"]
    ],
    [
        "province" => "زنجان",
        "cities" => ["زنجان", "ابهر", "خدابنده", "خرمدره", "ایجرود", "طارم", "ماهنشان", "سلطانیه", "آب بر", "چورزق", "دندی", "زرین آباد", "زنجان", "سجاس", "سلطانیه", "سهرورد", "صایین قلعه", "قیدار", "گرماب", "ماه نشان", "نیک پی", "هیدج", "چورزق", "دندی", "زرین آباد", "زنجان", "سجاس", "سلطانیه", "سهرورد", "صایین قلعه", "قیدار", "گرماب", "ماه نشان", "نیک پی", "هیدج", "آب بر", "ابهر", "ایجرود", "خدابنده", "خرمدره", "طارم"]
    ],
    [
        "province" => "سمنان",
        "cities" => ["سمنان", "دامغان", "شاهرود", "گرمسار", "مهدی شهر", "آرادان", "سرخه", "ایوانکی", "بسطام", "بیارجمند", "دیباج", "رودیان", "شهمیرزاد", "کلاته خیج", "مجن", "میامی", "امیریه", "درجزین", "شاهرود", "گرمسار", "مهدی شهر", "آرادان", "سرخه", "ایوانکی", "بسطام", "بیارجمند", "دیباج", "رودیان", "شهمیرزاد", "کلاته خیج", "مجن", "میامی", "امیریه", "درجزین", "سمنان", "دامغان", "شاهرود", "گرمسار", "مهدی شهر", "آرادان", "سرخه", "ایوانکی"]
    ],
    [
        "province" => "سیستان و بلوچستان",
        "cities" => ["زاهدان", "زابل", "ایرانشهر", "چابهار", "خاش", "سراوان", "نیکشهر", "کنارک", "میرجاوه", "سرباز", "زهک", "دلگان", "هامون", "هیرمند", "قصرقند", "نیک شهر", "بمپور", "اسپکه", "بزمان", "راسک", "سوران", "زرآباد", "گلمورتی", "محمدان", "نصرت آباد", "پیشین", "تفتان", "جالق", "چاه بهار", "خاش", "دوست محمد", "راسک", "زابلی", "زاهدان", "زهک", "سراوان", "سرباز", "سوران", "سیب و سوران", "شهرکی و ناروئی", "علی اکبر", "فنوج", "قصرقند", "کنارک", "گشت", "گلمورتی", "محمدان", "میرجاوه", "نصرت آباد", "نیک شهر", "هیدوچ", "پیشین"]
    ],
    [
        "province" => "فارس",
        "cities" => ["شیراز", "مرودشت", "کازرون", "فسا", "جهرم", "فیروزآباد", "استهبان", "لارستان", "لامرد", "داراب", "اقلید", "آباده", "بوانات", "ارسنجان", "سپیدان", "خرم بید", "پاسارگاد", "خرامه", "زرقان", "سروستان", "فراشبند", "قیر و کارزین", "کوار", "گراش", "ممسنی", "نیریز", "بختگان", "بیضا", "حاجی آباد", "خفر", "خنج", "رستم", "سعادت شهر", "شهرصدرا", "شیراز", "صغاد", "علامرودشت", "فدامی", "قادرآباد", "قطب آباد", "کازرون", "کوار", "گراش", "لار", "لامرد", "مبارک آباد", "مهر", "نودان", "وراوی", "هماشهر"]
    ],
    [
        "province" => "قزوین",
        "cities" => ["قزوین", "تاکستان", "آبیک", "البرز", "بوئین زهرا", "آوج", "رودبار الموت", "رودبار شهرستان", "طارم سفلی", "معلم کلایه", "بیدستان", "خرمدشت", "محمدیه", "شال", "اسفرورین", "ضیاءآباد", "خاکعلی", "سگزآباد", "سیردان", "آبگرم", "ارداق", "اقبالیه", "الوند", "بویین زهرا", "تاکستان", "رازمیان", "سگزآباد", "شال", "ضیاءآباد", "قزوین", "محمودآباد نمونه", "معلم کلایه", "نرجه", "آبیک", "آوج", "البرز", "بوئین زهرا", "رودبار الموت", "رودبار شهرستان", "طارم سفلی"]
    ],
    [
        "province" => "قم",
        "cities" => ["قم", "جعفریه", "دستجرد", "سلفچگان", "قنوات", "کهک", "نوفل لوشاتو", "خلجستان", "سلفچگان", "قنوات", "کهک", "نوفل لوشاتو", "جعفریه", "دستجرد", "سلفچگان", "قنوات", "کهک", "نوفل لوشاتو", "خلجستان", "قم", "جعفریه", "دستجرد", "سلفچگان", "قنوات", "کهک", "نوفل لوشاتو", "خلجستان", "قم", "جعفریه", "دستجرد", "سلفچگان", "قنوات", "کهک", "نوفل لوشاتو", "خلجستان"]
    ],
    [
        "province" => "کردستان",
        "cities" => ["سنندج", "سقز", "مریوان", "بانه", "بیجار", "کامیاران", "دیواندره", "دهگلان", "قروه", "سروآباد", "چناره", "کانی سور", "یاسوکند", "بلبان آباد", "بویین سفلی", "دزج", "دلبران", "سریش آباد", "شویشه", "صاحب", "عمیدیه", "کانی دینار", "موچش", "آرمرده", "بابارشانی", "بانه", "بلبان آباد", "بویین سفلی", "بیجار", "چناره", "دزج", "دلبران", "دهگلان", "دیواندره", "سروآباد", "سریش آباد", "سقز", "سنندج", "شویشه", "صاحب", "عمیدیه", "قروه", "کامیاران", "کانی دینار", "کانی سور", "مریوان", "موچش", "یاسوکند"]
    ],
    [
        "province" => "کرمان",
        "cities" => ["کرمان", "رفسنجان", "بم", "جیرفت", "زرند", "سیرجان", "شهربابک", "بافت", "کهنوج", "راور", "منوجان", "قلعه گنج", "کوهبنان", "انار", "رابر", "رودبار جنوب", "عنبرآباد", "فهرج", "نرماشیر", "ریگان", "فاریاب", "ارزوئیه", "بهرمان", "پاریز", "تخت", "جوزم", "خاتون آباد", "دشتکار", "دهج", "راین", "زنگی آباد", "ساردوئیه", "شهداد", "طغرالجرد", "گلباف", "ماهان", "محی آباد", "نجف شهر", "نودژ", "هجدک", "اختیارآباد", "اندوهجرد", "باغین", "بلورد", "بزنجان", "بم", "جبالبارز", "جوپار", "چترود", "خانوک", "درب بهشت", "دوساری", "راین", "زیدآباد", "شهربابک", "فهرج", "کاظم آباد", "کرمان", "کشکوئیه", "کهنوج", "گلباف", "ماهان", "محی آباد", "منوجان", "نجف شهر", "نرماشیر", "نودژ", "هجدک"]
    ],
    [
        "province" => "کرمانشاه",
        "cities" => ["کرمانشاه", "اسلام آباد غرب", "پاوه", "جوانرود", "سرپل ذهاب", "سنقر", "قصر شیرین", "گیلانغرب", "هرسین", "کنگاور", "روانسر", "ثلاث باباجانی", "دالاهو", "صحنه", "کرند", "میان راهان", "باینگان", "بیستون", "حمیل", "رباط", "سرمست", "شاهو", "نودشه", "نوسود", "ازگله", "پل ذهاب", "تازه آباد", "جوانرود", "روانسر", "سرپل ذهاب", "سنقر", "قصر شیرین", "گیلانغرب", "هرسین", "کنگاور", "کرمانشاه", "اسلام آباد غرب", "پاوه", "جوانرود", "سرپل ذهاب", "سنقر", "قصر شیرین", "گیلانغرب", "هرسین", "کنگاور", "روانسر", "ثلاث باباجانی", "دالاهو", "صحنه", "کرند", "میان راهان", "باینگان", "بیستون", "حمیل", "رباط", "سرمست", "شاهو", "نودشه", "نوسود", "ازگله"]
    ],
    [
        "province" => "کهگیلویه و بویراحمد",
        "cities" => ["یاسوج", "گچساران", "دنا", "بویراحمد", "کهگیلویه", "چرام", "لنده", "بهمئی", "مارگون", "سوق", "پاتاوه", "لیکک", "سی سخت", "قلعه رییسی", "دهدشت", "چیتاب", "سرفاریاب", "کاکان", "گراب سفلی", "مادوان", "باشت", "پاتاوه", "چرام", "دنا", "دهدشت", "دوگنبدان", "سوق", "سی سخت", "قلعه رییسی", "لنده", "لیکк", "مارگون", "یاسوج", "باشت", "بهمئی", "چرام", "دنا", "دهدشت", "دوگنبدان", "سوق", "سی سخت", "قلعه رییسی", "لنده", "لیкк", "مارگون", "یاسوج"]
    ],
    [
        "province" => "گلستان",
        "cities" => ["گرگان", "گنبد کاووس", "علی آباد", "مینودشت", "ترکمن", "کردکوی", "بندر گز", "آق قلا", "گمیشان", "رامیان", "آزادشهر", "نوده خاندوز", "مراوه تپه", "کلاله", "جلین", "دلند", "سیمین شهر", "فراغی", "نگین شهر", "نوکنده", "اینچه برون", "انبارآلوم", "بندرترکمن", "خان ببین", "دوزین", "رامیان", "سنگدوین", "علی آباد", "فاضل آباد", "مزرعه", "نوده خاندوز", "نوکنده", "آزادشهر", "آق قلا", "بندر گز", "ترکمن", "جلین", "خان ببین", "دلند", "رامیان", "سیمین شهر", "علی آباد", "فاضل آباد", "کلاله", "گرگان", "گمیشان", "گنبد کاووس", "مراوه تپه", "مینودشت", "نگین شهر", "نوده خاندوز", "نوکنده"]
    ],
    [
        "province" => "گیلان",
        "cities" => ["رشت", "انزلی", "لاهیجان", "آستارا", "تالش", "فومن", "صومعه سرا", "رودبار", "رودسر", "املش", "لنگرود", "ماسال", "بندرانزلی", "کلاچای", "هشتپر", "چابکسر", "خشکبیجار", "لشت نشا", "رحمت آباد", "ماسوله", "اسالم", "حویق", "لیسار", "شفت", "سنگر", "کوچصفهان", "لولمان", "پره سر", "رضوانشهر", "بره سر", "چوبر", "رشت", "رضوانشهر", "رودبار", "رودسر", "سنگر", "سیاهکل", "شفت", "صومعه سرا", "فومن", "کلاچای", "لاهیجان", "لنگرود", "ماسال", "ماسوله", "هشتپر", "آستارا", "املش", "بندرانزلی", "تالش", "خشکبیجار", "رحمت آباد", "لشت نشا", "لولمان", "پره سر", "چابکسر", "چوبر", "حویق", "خمام", "دیلمان", "رستم آباد", "رودبنه", "زیباکنار", "شلمان", "عمارلو", "کومله", "لوشان", "لیسار", "واجارگاه"]
    ],
    [
        "province" => "لرستان",
        "cities" => ["خرم آباد", "بروجرد", "دورود", "الیگودرز", "کوهدشت", "ازنا", "نورآباد", "پلدختر", "الشتر", "سلسله", "چغلوندی", "فیروزآباد", "مومن آباد", "کوهنانی", "هفت چشمه", "زاغه", "سراب دوره", "ویسیان", "چقابل", "اشترینان", "بیرانشهر", "درب گنبد", "رومشکان", "سپیددشت", "شول آباد", "معمولان", "نورآباد", "هفت چشمه", "چالانچولان", "چغلوندی", "خرم آباد", "دورود", "زاغه", "سپیددشت", "سراب دوره", "فیروزآباد", "کوهدشت", "مومن آباد", "نورآباد", "ویسیان", "پلدختر", "چقابل", "اشترینان", "الیگودرز", "بیرانشهر", "بروجرد", "درب گنبد", "رومشکان", "سلسله", "شول آباد", "معمولان", "هفت چشمه", "چالانچولان"]
    ],
    [
        "province" => "مازندران",
        "cities" => ["ساری", "بابل", "آمل", "قائم شهر", "بهشهر", "بابلسر", "تنکابن", "جویبار", "نور", "نوشهر", "رامسر", "چالوس", "محمودآباد", "فریدونکنار", "کلاردشت", "سوادکوه", "گلوگاه", "میاندورود", "عباس آباد", "سیمرغ", "پل سفید", "زیرآب", "شیرگاه", "کیاکلا", "آلاشت", "امیرکلا", "ایزدشهر", "بندپی", "بهنمیر", "پل سفید", "تالار", "جویبار", "چمستان", "خرم آباد", "رستمکلا", "رویان", "رینه", "زرگرمحله", "زیرآب", "ساری", "سرخرود", "سلمان شهر", "سورک", "شیرود", "شیرگاه", "عباس آباد", "فریدونکنار", "قائم شهر", "کجور", "کلاردشت", "کوهی خیل", "کیاکلا", "گزنک", "گلوگاه", "محمودآباد", "مرزن آباد", "نشتارود", "نکا", "نور", "نوشهر", "هادی شهر", "هچیرود", "پل سفید", "آمل", "بابل", "بابلسر", "بهشهر", "تنکابن", "جویبار", "چالوس", "رامسر", "ساری", "قائم شهر", "نور", "نوشهر"]
    ],
    [
        "province" => "مرکزی",
        "cities" => ["اراک", "ساوه", "خمین", "محلات", "تفرش", "شازند", "دلیجان", "زرندیه", "کمیجان", "آشتیان", "فراهان", "نراق", "آوه", "خنداب", "مامونیه", "مهاجران", "نوبران", "پرندک", "غرق آباد", "کارچان", "خشکرود", "داودآباد", "رازقان", "زاویه", "ساروق", "شهباز", "قورچی باشی", "کرهرود", "مأمونیه", "نیمور", "هندودر", "آستانه", "توره", "جاورسیان", "خنجین", "دودهک", "رازقان", "ساوه", "شازند", "غرق آباد", "فرمهین", "کمیجان", "میلاجرد", "نراق", "نوبران", "هندودر", "آشتیان", "اراک", "خمین", "خنداب", "دلیجان", "زرندیه", "ساوه", "شازند", "محلات", "کمیجان", "مهاجران", "نوبران", "پرندк", "غرق آباد", "کارچان", "خشکرود", "داودآباد", "رازقان", "زاویه", "ساروق", "شهباز", "قورچی باشی", "کرهرود", "مأمونیه", "نیمور", "هندودر"]
    ],
    [
        "province" => "هرمزگان",
        "cities" => ["بندرعباس", "میناب", "بندر لنگه", "قشم", "جاسک", "بستک", "حاجی آباد", "رودان", "ابوموسی", "پارسیان", "سیریک", "خمیر", "تنب بزرگ", "کیش", "بشاگرد", "فین", "تخت", "گوهران", "درگهان", "سوزا", "کنگ", "لمزان", "هشتبندی", "چارک", "چارک", "درگهان", "دهبارز", "رویدر", "سیریک", "فارغان", "کوشکنار", "کیش", "گوهران", "لمزان", "هشتبندی", "ابوموسی", "بستک", "بندر جاسک", "بندر خمیر", "بندر لنگه", "بندرعباس", "پارسیان", "تخت", "جاسک", "حاجی آباد", "خمیر", "دهبارز", "رودان", "قشم", "کوشکنار", "میناب", "هشتبندی", "چارک", "درگهان", "سوزا", "کنگ", "گوهران", "لمزان"]
    ],
    [
        "province" => "همدان",
        "cities" => ["همدان", "ملایر", "نهاوند", "تویسرکان", "کبودرآهنگ", "رزن", "اسدآباد", "بهار", "فامنین", "لالجین", "مریانج", "قهاوند", "دمق", "فرسفج", "شراء", "صالح آباد", "گل تپه", "گیان", "ازندریان", "برزول", "جوکار", "زنگنه", "سامن", "سرکان", "شیرین سو", "فیروزان", "قروه درجزین", "کوهین", "مهاجران", "نهاوند", "همدان", "اسدآباد", "بهار", "تویسرکان", "رزن", "فامنین", "کبودرآهنگ", "ملایر", "نهاوند", "همدان", "ازندریان", "برزول", "جوکار", "زنگنه", "سامن", "سرکان", "شیرین سو", "فیروزان", "قروه درجزین", "کوهین", "مهاجران", "نهاوند", "همدان"]
    ],
    [
        "province" => "یزد",
        "cities" => ["یزد", "میبد", "اردکان", "بافق", "تفت", "ابرکوه", "مهریز", "اشکذر", "بهاباد", "خاتم", "صدوق", "حمیدیا", "زارچ", "شاهدیه", "عقدا", "مروست", "ندوشن", "نیر", "احمدآباد", "بفروئیه", "تفت", "خضرآباد", "دیهوک", "زارچ", "شاهدیه", "عصرآباد", "محمودآباد", "مروست", "مهردشت", "نیر", "احمدآباد", "اردکان", "اشکذر", "بافق", "بهاباد", "تفت", "حمیدیا", "خاتم", "دیهوک", "زارچ", "شاهدیه", "عقدا", "مروست", "مهریز", "میبد", "ندوشن", "نیر", "یزد", "احمدآباد", "بفروئیه", "تفت", "خضرآباد", "دیهوک", "زارچ", "شاهدیه", "عصرآباد", "محمودآباد", "مروست", "مهردشت", "نیر"]
    ]
];


$input = json_decode(file_get_contents('php://input'), true);


file_put_contents('rubika_log.txt', date('Y-m-d H:i:s') . " - " . json_encode($input, JSON_UNESCAPED_UNICODE) . "\n", FILE_APPEND);

if (!$input) {
    die('ورودی نامعتبر');
}


$chat_id = null;
$text = '';
$button_id = null;
$message_id = null;
$reply_to_message_id = null;

if (isset($input['inline_message'])) {
    $chat_id = $input['inline_message']['chat_id'];
    $text = trim($input['inline_message']['text']);
    $button_id = $input['inline_message']['aux_data']['button_id'] ?? null;
    $message_id = $input['inline_message']['message_id'] ?? null;
    $reply_to_message_id = $input['inline_message']['reply_to_message_id'] ?? null;
} elseif (isset($input['update']['new_message'])) {
    $chat_id = $input['update']['chat_id'];
    $text = trim($input['update']['new_message']['text']);
    $button_id = $input['update']['new_message']['aux_data']['button_id'] ?? null;
    $message_id = $input['update']['new_message']['message_id'] ?? null;
    $reply_to_message_id = $input['update']['new_message']['reply_to_message_id'] ?? null;
}


if (!$chat_id) {
    die('شناسه چت وجود ندارد');
}

 
@mkdir('storage', 0777, true);
@mkdir('storage/users', 0777, true);
@mkdir('storage/waiting', 0777, true);
@mkdir('storage/active', 0777, true);
@mkdir('storage/searching', 0777, true);
@mkdir('storage/reports', 0777, true);
@mkdir('storage/chat_logs', 0777, true);
@mkdir('storage/user_profiles', 0777, true);
@mkdir('storage/messages', 0777, true);
@mkdir('storage/chat_requests', 0777, true);


$user_status = getUserStatus($chat_id);


$is_editing = isEditingName($chat_id) || isEditingProfile($chat_id) || isEditingBio($chat_id);


if ($text == "/start") {
    handleStartCommand($chat_id, $token, true);
} 
elseif ($text == "/search" || $button_id == "start_search") {
    handleSearchCommand($chat_id, $token);
} 
elseif ($text == "/end" || $button_id == "end_chat") {
    handleEndCommand($chat_id, $token);
} 
elseif ($text == "/profile" || $button_id == "show_profile") {
    handleProfileCommand($chat_id, $token);
}
elseif ($text == "/help" || $button_id == "show_help") {
    handleHelpCommand($chat_id, $token);
}
elseif ($text == "/rules" || $button_id == "show_rules") {
    handleRulesCommand($chat_id, $token);
}
elseif ($text == "/about" || $button_id == "show_about") {
    handleAboutCommand($chat_id, $token);
}
elseif ($button_id == "back_to_menu") {
    handleStartCommand($chat_id, $token, true);
}
elseif ($button_id == "invite_friends") {
    handleInviteFriends($chat_id, $token);
}
elseif ($button_id == "report_user") {
    handleReportUser($chat_id, $token);
}
elseif (($text == "حذف" || $text == "/del") && $reply_to_message_id) {
    handleDeleteMessage($chat_id, $reply_to_message_id, $token);
}
elseif ($button_id == "search_users") {
    handleSearchUsersMenu($chat_id, $token);
}
elseif (strpos($button_id, 'search_by_') === 0) {
    handleSearchByType($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'search_gender_') === 0) {
    handleSearchByGender($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'select_province_') === 0) {
    handleSelectProvinceForSearch($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'select_city_') === 0) {
    handleSelectCityForSearch($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'select_age_') === 0) {
    handleSelectAgeForSearch($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'show_users_') === 0) {
    handleShowUsersList($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'show_user_') === 0) {
    handleShowUserProfile($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'send_message_') === 0) {
    handleSendMessageRequest($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'request_chat_') === 0) {
    handleChatRequest($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'accept_request_') === 0) {
    handleAcceptChatRequest($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'reject_request_') === 0) {
    handleRejectChatRequest($chat_id, $button_id, $token);
}
elseif (strpos($button_id, 'reply_message_') === 0) {
    handleReplyMessageRequest($chat_id, $button_id, $token);
}
elseif ($button_id) {
    handleButtonAction($chat_id, $button_id, $text, $token);
} 
else {
    if ($user_status['in_chat']) {
        handleChatMessage($chat_id, $text, $message_id, $token);
    }
    elseif (isEditingName($chat_id)) {
        processNameInput($chat_id, $text, $token);
    }
    elseif (isEditingBio($chat_id)) {
        processBioInput($chat_id, $text, $token);
    }
    elseif ($user_status['waiting_message']) {
        handleSendMessageText($chat_id, $text, $user_status['target_user'], $token);
    }
    elseif ($user_status['searching']) {
        sendMessage($chat_id, "⚠️ شما در حال جستجو هستید. لطفاً صبر کنید یا جستجو را با /end لغو کنید.", $token);
    }
    else {
        sendMessage($chat_id, "دستور نامعتبر! برای راهنمایی /help را ارسال کنید.", $token);
    }
}



function handleStartCommand($chat_id, $token, $show_channel_suggestion = false) {
    deleteAllUserMenus($chat_id, $token);
    
    $user_status = getUserStatus($chat_id);
    $profile = getUserProfile($chat_id);
    
    if ($profile['banned'] ?? false) {
        sendMessage($chat_id, "⛔ حساب شما مسدود شده است و نمی‌توانید از ربات استفاده کنید.", $token);
        return;
    }
    
    $message = "👋 به ربات روبی چت خوش آمدید!\n\n";
    
    if ($show_channel_suggestion) {
        $message .= "📢 برای دریافت آخرین اخبار و به‌روزرسانی‌ها به کانال ما بپیوندید:\n";
        $message .= "@rubychat\n\n";
    }
    
    if ($user_status['in_chat']) {
        $message .= "شما در حال حاضر در چت هستید.\n";
        $message .= "برای پایان چت /end را ارسال کنید.";
        
        $keypad = [
            'rows' => [
                [
                    'buttons' => [
                        createButton('end_chat', '❌ پایان گفتگو', 'Large'),
                        createButton('report_user', '⚠️ گزارش کاربر', 'Large')
                    ]
                ]
            ]
        ];
    } elseif ($user_status['searching']) {
        $message .= "شما در حال جستجوی کاربر هستید.\n";
        $message .= "برای لغو جستجو /end را ارسال کنید.";
        
        $keypad = [
            'rows' => [
                [
                    'buttons' => [
                        createButton('end_chat', '❌ لغو جستجو', 'Large')
                    ]
                ]
            ]
        ];
    } else {
        $message .= "لطفاً یکی از گزینه‌ها را انتخاب کنید:";
        
        $keypad = [
            'rows' => [
                [
                    'buttons' => [
                        createButton('start_search', '🔍 جستجوی شانسی', 'Small'),
                        createButton('show_profile', '👤 پروفایل', 'Small'),
                        createButton('search_users', '🔎 جستجوی کاربران', 'Small')
                    ]
                ],
                [
                    'buttons' => [
                        createButton('show_help', 'ℹ️ راهنما', 'Small'),
                        createButton('show_rules', '📜 قوانین', 'Small')
                    ]
                ],
                [
                    'buttons' => [
                        createButton('show_about', '📌 درباره ما', 'Small'),
                        createButton('invite_friends', '📩 دعوت دوستان', 'Small')
                    ]
                ]
            ]
        ];
    }
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleSearchCommand($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $user_status = getUserStatus($chat_id);
    $profile = getUserProfile($chat_id);
    
    if ($profile['banned'] ?? false) {
        sendMessage($chat_id, "⛔ حساب شما مسدود شده است و نمی‌توانید از ربات استفاده کنید.", $token);
        return;
    }
    
    if ($user_status['in_chat']) {
        sendMessage($chat_id, "⚠️ شما در حال حاضر در چت هستید! ابتدا چت فعلی را با /end پایان دهید.", $token);
        return;
    }
    
    if ($user_status['searching']) {
        sendMessage($chat_id, "⚠️ شما در حال حاضر در حال جستجو هستید! لطفاً صبر کنید.", $token);
        return;
    }
    
    $profile = getUserProfile($chat_id);
    if (!isProfileComplete($profile)) {
        sendMessage($chat_id, "❌ لطفاً ابتدا پروفایل خود را کامل کنید.", $token);
        handleProfileCommand($chat_id, $token);
        return;
    }
    
    saveUserProfileForSearch($chat_id, $profile);
    setUserStatus($chat_id, ['searching' => true]);
    file_put_contents("storage/searching/$chat_id.json", json_encode(['time' => time()]));
    
    $waiting_users = glob('storage/waiting/*.json');
    
    if (count($waiting_users) > 0) {
        $partner_file = $waiting_users[0];
        $partner_id = basename($partner_file, '.json');
        @unlink($partner_file);
        @unlink("storage/searching/$chat_id.json");
        @unlink("storage/searching/$partner_id.json");
        
        $chat_id_new = uniqid();
        $chat_file = "storage/active/$chat_id_new.json";
        file_put_contents($chat_file, json_encode([
            'user1' => $chat_id,
            'user2' => $partner_id,
            'start_time' => time(),
            'file' => "$chat_id_new.json"
        ]));
        
        setUserStatus($chat_id, ['in_chat' => true, 'searching' => false]);
        setUserStatus($partner_id, ['in_chat' => true, 'searching' => false]);
        
        $user_profile = getUserProfile($chat_id);
        $partner_profile = getUserProfile($partner_id);
        
        $message1 = "✅ ارتباط برقرار شد!\n\n";
        $message1 .= "📌 اطلاعات طرف مقابل:\n";
        $message1 .= "👤 نام: {$partner_profile['name']}\n";
        $message1 .= "🎂 سن: {$partner_profile['age']}\n";
        $message1 .= "👫 جنسیت: {$partner_profile['gender']}\n";
        $message1 .= "📍 استان: {$partner_profile['province']}\n";
        $message1 .= "🏙️ شهر: {$partner_profile['city']}\n";
        $message1 .= "📝 بیوگرافی: " . (empty($partner_profile['bio']) ? "ثبت نشده" : $partner_profile['bio']) . "\n\n";
        $message1 .= "برای پایان گفتگو /end را ارسال کنید";
        
        $message2 = "✅ ارتباط برقرار شد!\n\n";
        $message2 .= "📌 اطلاعات طرف مقابل:\n";
        $message2 .= "👤 نام: {$user_profile['name']}\n";
        $message2 .= "🎂 سن: {$user_profile['age']}\n";
        $message2 .= "👫 جنسیت: {$user_profile['gender']}\n";
        $message2 .= "📍 استان: {$user_profile['province']}\n";
        $message2 .= "🏙️ شهر: {$user_profile['city']}\n";
        $message2 .= "📝 بیوگرافی: " . (empty($user_profile['bio']) ? "ثبت نشده" : $user_profile['bio']) . "\n\n";
        $message2 .= "برای پایان گفتگو /end را ارسال کنید";
        
        $keypad = [
            'rows' => [
                [
                    'buttons' => [
                        createButton('end_chat', '❌ پایان گفتگو', 'Large'),
                        createButton('report_user', '⚠️ گزارش کاربر', 'Large')
                    ]
                ]
            ]
        ];
        
        sendMessage($chat_id, $message1, $token);
        sendMessage($partner_id, $message2, $token);
        
        sendMenu($chat_id, "لطفاً از منوی زیر استفاده کنید:", $keypad, $token);
        sendMenu($partner_id, "لطفاً از منوی زیر استفاده کنید:", $keypad, $token);
    } else {
        file_put_contents("storage/waiting/$chat_id.json", json_encode(['time' => time()]));
        
        $message = "🔍 در حال جستجوی کاربر... لطفاً صبر کنید\n\n";
        $message .= "اگر تا 2 دقیقه کاربری پیدا نشد، جستجو به صورت خودکار لغو می‌شود.\n\n";
        $message .= "برای لغو جستجو /end را ارسال کنید";
        
        $keypad = [
            'rows' => [
                [
                    'buttons' => [
                        createButton('end_chat', '❌ لغو جستجو', 'Large')
                    ]
                ]
            ]
        ];
        
        sendMenu($chat_id, $message, $keypad, $token);
        
      
        $search_timeout = 120;
        register_shutdown_function(function() use ($chat_id, $token, $search_timeout) {
            sleep($search_timeout);
            
            if (file_exists("storage/waiting/$chat_id.json") || file_exists("storage/searching/$chat_id.json")) {
                @unlink("storage/waiting/$chat_id.json");
                @unlink("storage/searching/$chat_id.json");
                setUserStatus($chat_id, ['searching' => false]);
                
                sendMessage($chat_id, "⏳ زمان جستجو به پایان رسید. متأسفانه کاربری پیدا نشد.", $token);
                handleStartCommand($chat_id, $token);
            }
        });
    }
}

function handleEndCommand($chat_id, $token) {
    $user_status = getUserStatus($chat_id);
    
    if ($user_status['in_chat']) {
        $active_chat = getActiveChat($chat_id);
        $partner_id = ($active_chat['user1'] == $chat_id) ? $active_chat['user2'] : $active_chat['user1'];
        
        file_put_contents("storage/users/$chat_id.last_chat", json_encode($active_chat));
        file_put_contents("storage/users/$partner_id.last_chat", json_encode($active_chat));
        
        sendMessage($partner_id, "❌ طرف مقابل چت را پایان داد.", $token);
        
        @unlink("storage/active/{$active_chat['file']}");
        
        setUserStatus($chat_id, ['in_chat' => false]);
        setUserStatus($partner_id, ['in_chat' => false]);
        
        $report_keypad = [
            'rows' => [
                [
                    'buttons' => [
                        createButton('report_user', '⚠️ گزارش کاربر', 'Large')
                    ]
                ]
            ]
        ];
        sendMenu($chat_id, "اگر کاربر تخلفی انجام داده است می‌توانید گزارش دهید:", $report_keypad, $token);
        sendMenu($partner_id, "اگر کاربر تخلفی انجام داده است می‌توانید گزارش دهید:", $report_keypad, $token);
        
        sleep(1);
        sendMessage($chat_id, "چت با موفقیت پایان یافت.", $token);
        handleStartCommand($chat_id, $token);
        handleStartCommand($partner_id, $token);
    } 
    elseif ($user_status['searching']) {
        @unlink("storage/waiting/$chat_id.json");
        @unlink("storage/searching/$chat_id.json");
        setUserStatus($chat_id, ['searching' => false]);
        sendMessage($chat_id, "جستجو لغو شد.", $token);
        handleStartCommand($chat_id, $token);
    } else {
        sendMessage($chat_id, "شما در حال حاضر در چت یا جستجوی فعالی نیستید!", $token);
        handleStartCommand($chat_id, $token);
    }
}

function handleProfileCommand($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $profile = getUserProfile($chat_id);
    
    $message = "📝 پروفایل شما:\n";
    $message .= "👤 نام: {$profile['name']}\n";
    $message .= "🎂 سن: {$profile['age']}\n";
    $message .= "👫 جنسیت: {$profile['gender']}\n";
    $message .= "📍 استان: {$profile['province']}\n";
    $message .= "🏙️ شهر: {$profile['city']}\n";
    $message .= "📝 بیوگرافی: " . (empty($profile['bio']) ? "ثبت نشده" : $profile['bio']) . "\n\n";
    $message .= "برای ویرایش دکمه مورد نظر را انتخاب کنید:";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('edit_name', '✏️ ویرایش نام', 'Small'),
                    createButton('edit_age', '✏️ ویرایش سن', 'Small')
                ]
            ],
            [
                'buttons' => [
                    createButton('edit_gender', '✏️ ویرایش جنسیت', 'Small'),
                    createButton('edit_province', '✏️ ویرایش استان', 'Small')
                ]
            ],
            [
                'buttons' => [
                    createButton('edit_city', '✏️ ویرایش شهر', 'Small'),
                    createButton('edit_bio', '✏️ ویرایش بیوگرافی', 'Small')
                ]
            ],
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleShowUserProfile($chat_id, $button_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $user_id = str_replace('show_user_', '', $button_id);
    $profile = getUserProfile($user_id);
    $status = getUserStatus($user_id);
    
    $last_seen = getLastSeen($user_id);
    $online_status = "🔴 آفلاین";
    if ($status['in_chat']) {
        $online_status = "🟢 در حال چت";
    } elseif (time() - $last_seen < 300) {
        $online_status = "🟢 آنلاین";
    }
    
    $message = "👤 اطلاعات کاربر:\n";
    $message .= "نام: {$profile['name']}\n";
    $message .= "سن: {$profile['age']}\n";
    $message .= "جنسیت: {$profile['gender']}\n";
    $message .= "استان: {$profile['province']}\n";
    $message .= "شهر: {$profile['city']}\n";
    $message .= "بیوگرافی: " . (empty($profile['bio']) ? "ثبت نشده" : $profile['bio']) . "\n";
    $message .= "وضعیت: $online_status\n";
    if ($online_status === "🔴 آفلاین") {
        $message .= "آخرین بازدید: " . date('Y-m-d H:i', $last_seen) . "\n";
    }
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton("request_chat_$user_id", '📩 درخواست گفتگو', 'Small'),
                    createButton("send_message_$user_id", '✉️ ارسال پیام', 'Small')
                ]
            ],
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleSendMessageRequest($chat_id, $button_id, $token) {
    $target_user = str_replace('send_message_', '', $button_id);
    
    setUserStatus($chat_id, [
        'waiting_message' => true,
        'target_user' => $target_user
    ]);
    
    sendMessage($chat_id, "لطفاً پیام خود را برای کاربر ارسال کنید:", $token);
}

function handleSendMessageText($chat_id, $text, $target_user, $token) {
    $sender_profile = getUserProfile($chat_id);
    
    $message = "📩 پیام جدید از کاربر:\n";
    $message .= "👤 نام: {$sender_profile['name']}\n";
    $message .= "🎂 سن: {$sender_profile['age']}\n";
    $message .= "📍 استان: {$sender_profile['province']}\n";
    $message .= "🏙️ شهر: {$sender_profile['city']}\n\n";
    $message .= "📝 پیام:\n$text";
    
    $message_id = uniqid();
    file_put_contents("storage/messages/$message_id.json", json_encode([
        'sender' => $chat_id,
        'receiver' => $target_user,
        'text' => $text,
        'timestamp' => time()
    ]));
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton("reply_message_$message_id", '✉️ پاسخ به پیام', 'Glass')
                ]
            ]
        ]
    ];
    
    sendMessageWithPermanentButton($target_user, $message, $keypad, $token);
    sendMenu($chat_id, "✅ پیام شما با موفقیت ارسال شد.", [
        'rows' => [
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ], $token);
    
    setUserStatus($chat_id, [
        'waiting_message' => false,
        'target_user' => null
    ]);
}

function handleReplyMessageRequest($chat_id, $button_id, $token) {
    $message_id = str_replace('reply_message_', '', $button_id);
    $message_file = "storage/messages/$message_id.json";
    
    if (!file_exists($message_file)) {
        sendMessage($chat_id, "⚠️ پیام مورد نظر یافت نشد.", $token);
        return;
    }
    
    $message_data = json_decode(file_get_contents($message_file), true);
    $sender = $message_data['sender'];
    
    setUserStatus($chat_id, [
        'waiting_message' => true,
        'target_user' => $sender,
        'replying_to' => $message_id
    ]);
    
    sendMessage($chat_id, "لطفاً پاسخ خود را ارسال کنید:", $token);
}

function handleChatRequest($chat_id, $button_id, $token) {
    $target_user = str_replace('request_chat_', '', $button_id);
    $requester_profile = getUserProfile($chat_id);
    $target_status = getUserStatus($target_user);
    
    if ($target_status['in_chat']) {
        sendMessage($chat_id, "⚠️ این کاربر در حال حاضر در چت است و نمی‌تواند درخواست شما را بپذیرد.", $token);
        return;
    }
    
    $message = "📩 درخواست گفتگوی جدید:\n";
    $message .= "👤 نام: {$requester_profile['name']}\n";
    $message .= "🎂 سن: {$requester_profile['age']}\n";
    $message .= "👫 جنسیت: {$requester_profile['gender']}\n";
    $message .= "📍 استان: {$requester_profile['province']}\n";
    $message .= "🏙️ شهر: {$requester_profile['city']}\n";
    $message .= "📝 بیوگرافی: " . (empty($requester_profile['bio']) ? "ثبت نشده" : $requester_profile['bio']) . "\n\n";
    $message .= "آیا مایل به شروع گفتگو با این کاربر هستید؟";
    
    $request_id = uniqid();
    file_put_contents("storage/chat_requests/$request_id.json", json_encode([
        'requester' => $chat_id,
        'target' => $target_user,
        'timestamp' => time()
    ]));
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton("accept_request_$request_id", '✅ قبول درخواست', 'Glass'),
                    createButton("reject_request_$request_id", '❌ رد درخواست', 'Glass')
                ]
            ]
        ]
    ];
    
    sendMessageWithPermanentButton($target_user, $message, $keypad, $token);
    sendMenu($chat_id, "✅ درخواست گفتگو با موفقیت ارسال شد.", [
        'rows' => [
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ], $token);
}

function handleAcceptChatRequest($chat_id, $button_id, $token) {
    $request_id = str_replace('accept_request_', '', $button_id);
    $request_file = "storage/chat_requests/$request_id.json";
    
    if (!file_exists($request_file)) {
        sendMessage($chat_id, "⚠️ درخواست گفتگو یافت نشد.", $token);
        return;
    }
    
    $request_data = json_decode(file_get_contents($request_file), true);
    $requester = $request_data['requester'];
    $target = $request_data['target'];
    
    @unlink($request_file);
    
    $chat_id_new = uniqid();
    $chat_file = "storage/active/$chat_id_new.json";
    file_put_contents($chat_file, json_encode([
        'user1' => $requester,
        'user2' => $target,
        'start_time' => time(),
        'file' => "$chat_id_new.json"
    ]));
    
    setUserStatus($requester, ['in_chat' => true, 'searching' => false]);
    setUserStatus($target, ['in_chat' => true, 'searching' => false]);
    
    $requester_profile = getUserProfile($requester);
    $target_profile = getUserProfile($target);
    
    $message1 = "✅ ارتباط برقرار شد!\n\n";
    $message1 .= "📌 اطلاعات طرف مقابل:\n";
    $message1 .= "👤 نام: {$target_profile['name']}\n";
    $message1 .= "🎂 سن: {$target_profile['age']}\n";
    $message1 .= "👫 جنسیت: {$target_profile['gender']}\n";
    $message1 .= "📍 استان: {$target_profile['province']}\n";
    $message1 .= "🏙️ شهر: {$target_profile['city']}\n";
    $message1 .= "📝 بیوگرافی: " . (empty($target_profile['bio']) ? "ثبت نشده" : $target_profile['bio']) . "\n\n";
    $message1 .= "برای پایان گفتگو /end را ارسال کنید";
    
    $message2 = "✅ ارتباط برقرار شد!\n\n";
    $message2 .= "📌 اطلاعات طرف مقابل:\n";
    $message2 .= "👤 نام: {$requester_profile['name']}\n";
    $message2 .= "🎂 سن: {$requester_profile['age']}\n";
    $message2 .= "👫 جنسیت: {$requester_profile['gender']}\n";
    $message2 .= "📍 استان: {$requester_profile['province']}\n";
    $message2 .= "🏙️ شهر: {$requester_profile['city']}\n";
    $message2 .= "📝 بیوگرافی: " . (empty($requester_profile['bio']) ? "ثبت نشده" : $requester_profile['bio']) . "\n\n";
    $message2 .= "برای پایان گفتگو /end را ارسال کنید";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('end_chat', '❌ پایان گفتگو', 'Large'),
                    createButton('report_user', '⚠️ گزارش کاربر', 'Large')
                ]
            ]
        ]
    ];
    
    sendMessage($requester, $message1, $token);
    sendMessage($target, $message2, $token);
    
    sendMenu($requester, "لطفاً از منوی زیر استفاده کنید:", $keypad, $token);
    sendMenu($target, "لطفاً از منوی زیر استفاده کنید:", $keypad, $token);
}

function handleRejectChatRequest($chat_id, $button_id, $token) {
    $request_id = str_replace('reject_request_', '', $button_id);
    $request_file = "storage/chat_requests/$request_id.json";
    
    if (!file_exists($request_file)) {
        sendMessage($chat_id, "⚠️ درخواست گفتگو یافت نشد.", $token);
        return;
    }
    
    $request_data = json_decode(file_get_contents($request_file), true);
    $requester = $request_data['requester'];
    
    @unlink($request_file);
    
    sendMessage($requester, "⚠️ کاربر درخواست گفتگوی شما را رد کرد.", $token);
    sendMessage($chat_id, "✅ درخواست گفتگو رد شد.", $token);
    
    handleStartCommand($requester, $token);
    handleStartCommand($chat_id, $token);
}

function handleChatMessage($chat_id, $text, $message_id, $token) {
    if (containsBadWords($text)) {
        sendMessage($chat_id, "⚠️ ارسال پیام حاوی محتوای نامناسب ممنوع است!", $token);
        return;
    }
    
    if (strpos($text, '/') === 0 && !in_array($text, ['/del'])) {
        sendMessage($chat_id, "⚠️ این یک دستور است و به طرف مقابل ارسال نمی‌شود.", $token);
        return;
    }
    
    if (containsExternalLinks($text) || strpos($text, '@') !== false || containsPhoneNumbers($text)) {
        sendMessage($chat_id, "⚠️ ارسال لینک، آیدی، شماره تلفن و هرگونه اطلاعات تماس ممنوع است!", $token);
        return;
    }
    
    $active_chat = getActiveChat($chat_id);
    $chat_duration = time() - $active_chat['start_time'];
    if ($chat_duration < 120 && containsEnglishChars($text)) {
        sendMessage($chat_id, "⚠️ در ابتدای چت ارسال پیام با حروف انگلیسی مجاز نیست. لطفاً از فارسی استفاده کنید.", $token);
        return;
    }
    
    $partner_id = ($active_chat['user1'] == $chat_id) ? $active_chat['user2'] : $active_chat['user1'];
    
    if (containsRubikaLinks($text)) {
        $warning_msg = "⚠️ هشدار: این لینک ممکن است مخرب باشد:\n";
        sendMessage($partner_id, $warning_msg . $text, $token);
    } else {
        sendMessage($partner_id, $text, $token);
    }
    
    $chat_log_file = "storage/chat_logs/{$active_chat['file']}";
    $chat_log = file_exists($chat_log_file) ? json_decode(file_get_contents($chat_log_file), true) : [];
    $chat_log[] = [
        'sender' => $chat_id,
        'text' => $text,
        'timestamp' => time(),
        'message_id' => $message_id
    ];
    file_put_contents($chat_log_file, json_encode($chat_log, JSON_UNESCAPED_UNICODE));
}

function handleDeleteMessage($chat_id, $message_id, $token) {
    $active_chat = getActiveChat($chat_id);
    if (!$active_chat) {
        sendMessage($chat_id, "⚠️ شما در حال حاضر در چت فعالی نیستید.", $token);
        return;
    }
    
    $partner_id = ($active_chat['user1'] == $chat_id) ? $active_chat['user2'] : $active_chat['user1'];
    
    deleteMessage($partner_id, $message_id, $token);
    sendMessage($chat_id, "✅ پیام با موفقیت حذف شد.", $token);
}



function deleteMessage($chat_id, $message_id, $token) {
    $url = "https://botapi.rubika.ir/v3/$token/deleteMessage";
    $data = [
        "chat_id" => $chat_id,
        "message_id" => $message_id
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    file_put_contents('rubika_api.log', date('Y-m-d H:i:s') . " - DeleteMessage: " . json_encode($data, JSON_UNESCAPED_UNICODE) . "\nResponse: $response\n\n", FILE_APPEND);
    return $response;
}

function deleteAllUserMenus($chat_id, $token) {
    $menu_files = glob("storage/users/$chat_id.last_menu*");
    foreach ($menu_files as $file) {
        $message_id = file_get_contents($file);
        deleteMessage($chat_id, $message_id, $token);
        @unlink($file);
    }
}

function sendMessage($chat_id, $text, $token) {
    $url = "https://botapi.rubika.ir/v3/$token/sendMessage";
    $data = [
        "chat_id" => $chat_id,
        "text" => $text
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $response_data = json_decode($response, true);
    if (isset($response_data['data']['message_id'])) {
        file_put_contents("storage/users/$chat_id.last_message", $response_data['data']['message_id']);
    }
    
    file_put_contents('rubika_api.log', date('Y-m-d H:i:s') . " - SendMessage: " . json_encode($data, JSON_UNESCAPED_UNICODE) . "\nResponse: $response\n\n", FILE_APPEND);
    return $response;
}

function sendMessageWithPermanentButton($chat_id, $text, $keypad, $token) {
    $url = "https://botapi.rubika.ir/v3/$token/sendMessage";
    $data = [
        "chat_id" => $chat_id,
        "text" => $text,
        "inline_keypad" => $keypad,
        "permanent" => true
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $response_data = json_decode($response, true);
    if (isset($response_data['data']['message_id'])) {
        file_put_contents("storage/users/$chat_id.last_menu_permanent", $response_data['data']['message_id']);
    }
    
    file_put_contents('rubika_api.log', date('Y-m-d H:i:s') . " - SendMessageWithPermanentButton: " . json_encode($data, JSON_UNESCAPED_UNICODE) . "\nResponse: $response\n\n", FILE_APPEND);
    return $response;
}

function sendMenu($chat_id, $text, $keypad, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $url = "https://botapi.rubika.ir/v3/$token/sendMessage";
    $data = [
        "chat_id" => $chat_id,
        "text" => $text,
        "inline_keypad" => $keypad
    ];
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $response_data = json_decode($response, true);
    if (isset($response_data['data']['message_id'])) {
        file_put_contents("storage/users/$chat_id.last_menu", $response_data['data']['message_id']);
    }
    
    file_put_contents('rubika_api.log', date('Y-m-d H:i:s') . " - SendMenu: " . json_encode($data, JSON_UNESCAPED_UNICODE) . "\nResponse: $response\n\n", FILE_APPEND);
    return $response;
}

function createButton($id, $text, $size = 'Small', $type = 'Simple') {
    return [
        'id' => $id,
        'type' => $type,
        'button_text' => $text,
        'button_width' => $size
    ];
}

function getUserProfile($user_id) {
    $file = "storage/users/$user_id.json";
    if (file_exists($file)) {
        $profile = json_decode(file_get_contents($file), true);
        $profile['banned'] = $profile['banned'] ?? false;
        $profile['bio'] = $profile['bio'] ?? '';
        return $profile;
    }
    return [
        'name' => 'ناشناس', 
        'age' => 'نامشخص', 
        'gender' => 'نامشخص',
        'province' => 'نامشخص',
        'city' => 'نامشخص',
        'bio' => '',
        'banned' => false
    ];
}

function saveUserProfile($user_id, $profile) {
    $file = "storage/users/$user_id.json";
    file_put_contents($file, json_encode($profile, JSON_UNESCAPED_UNICODE));
}

function saveUserProfileForSearch($user_id, $profile) {
    $profile['id'] = $user_id;
    $file = "storage/user_profiles/$user_id.json";
    file_put_contents($file, json_encode($profile, JSON_UNESCAPED_UNICODE));
}

function getActiveChat($user_id) {
    $chats = glob('storage/active/*.json');
    foreach ($chats as $file) {
        $chat = json_decode(file_get_contents($file), true);
        if ($chat['user1'] == $user_id || $chat['user2'] == $user_id) {
            $chat['file'] = basename($file);
            return $chat;
        }
    }
    return null;
}

function getLastSeen($user_id) {
    $status_file = "storage/users/$user_id.status";
    if (file_exists($status_file)) {
        $status = json_decode(file_get_contents($status_file), true);
        return $status['last_seen'] ?? time();
    }
    return time();
}

function getUserStatus($user_id) {
    $status_file = "storage/users/$user_id.status";
    if (file_exists($status_file)) {
        return json_decode(file_get_contents($status_file), true);
    }
    return [
        'in_chat' => false,
        'searching' => false,
        'waiting_message' => false,
        'target_user' => null,
        'replying_to' => null,
        'last_seen' => time()
    ];
}

function setUserStatus($user_id, $status_updates) {
    $status_file = "storage/users/$user_id.status";
    $current_status = getUserStatus($user_id);
    
    $status_updates['last_seen'] = time();
    $new_status = array_merge($current_status, $status_updates);
    
    file_put_contents($status_file, json_encode($new_status, JSON_UNESCAPED_UNICODE));
}

function isProfileComplete($profile) {
    return $profile['name'] !== 'ناشناس' && 
           $profile['age'] !== 'نامشخص' && 
           $profile['gender'] !== 'نامشخص' &&
           $profile['province'] !== 'نامشخص' &&
           $profile['city'] !== 'نامشخص';
}

function isEditingName($user_id) {
    return file_exists("storage/users/$user_id.editing_name");
}

function isEditingProfile($user_id) {
    return file_exists("storage/users/$user_id.editing_profile");
}

function isEditingBio($user_id) {
    return file_exists("storage/users/$user_id.editing_bio");
}

function setEditingProfile($user_id, $status) {
    if ($status) {
        file_put_contents("storage/users/$user_id.editing_profile", '1');
    } else {
        @unlink("storage/users/$user_id.editing_profile");
    }
}

function clearEditingStatus($user_id) {
    @unlink("storage/users/$user_id.editing_name");
    @unlink("storage/users/$user_id.editing_profile");
    @unlink("storage/users/$user_id.editing_bio");
}

function containsBadWords($text) {
    $bad_words = ['کلمه ناسزا 1', 'کلمه ناسزا 2'];
    foreach ($bad_words as $word) {
        if (strpos($text, $word) !== false) {
            return true;
        }
    }
    return false;
}

function containsEnglishChars($text) {
    return preg_match('/[a-zA-Z]/', $text);
}

function containsPhoneNumbers($text) {
    return preg_match('/\d{10,}/', $text);
}

function containsRubikaLinks($text) {
    return strpos($text, 'rubika.ir') !== false;
}

function containsExternalLinks($text) {
    $domains = ['rubika.ir'];
    $pattern = '/https?:\/\/([^\/\s]+)/i';
    
    if (preg_match_all($pattern, $text, $matches)) {
        foreach ($matches[1] as $domain) {
            $is_allowed = false;
            foreach ($domains as $allowed) {
                if (strpos($domain, $allowed) !== false) {
                    $is_allowed = true;
                    break;
                }
            }
            if (!$is_allowed) {
                return true;
            }
        }
    }
    return false;
}

function processNameInput($chat_id, $text, $token) {
    if (validateName($text)) {
        $profile = getUserProfile($chat_id);
        $profile['name'] = $text;
        saveUserProfile($chat_id, $profile);
        saveUserProfileForSearch($chat_id, $profile);
        clearEditingStatus($chat_id);
        sendMessage($chat_id, "✅ نام شما با موفقیت تغییر یافت.", $token);
        handleProfileCommand($chat_id, $token);
    } else {
        sendMessage($chat_id, "❌ نام وارد شده معتبر نیست. لطفاً نام دیگری انتخاب کنید.", $token);
    }
}

function processBioInput($chat_id, $text, $token) {
    if (strlen($text) > 200) {
        sendMessage($chat_id, "❌ طول بیوگرافی نباید بیشتر از 200 کاراکتر باشد.", $token);
        return;
    }
    
    $profile = getUserProfile($chat_id);
    $profile['bio'] = $text;
    saveUserProfile($chat_id, $profile);
    saveUserProfileForSearch($chat_id, $profile);
    clearEditingStatus($chat_id);
    sendMessage($chat_id, "✅ بیوگرافی شما با موفقیت تغییر یافت.", $token);
    handleProfileCommand($chat_id, $token);
}

function validateName($name) {
    return !empty($name);
}

function showAgeSelection($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    setEditingProfile($chat_id, true);
    
    $message = "لطفاً سن خود را انتخاب کنید:";
    
    $keypad = [
        'rows' => []
    ];
    
    $ages = [];
    for ($i = 12; $i <= 99; $i++) {
        $ages[] = $i;
    }
    
    $chunks = array_chunk($ages, 5);
    foreach ($chunks as $chunk) {
        $row = ['buttons' => []];
        foreach ($chunk as $age) {
            $row['buttons'][] = createButton("age_$age", "$age", 'Small');
        }
        $keypad['rows'][] = $row;
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('cancel', '🔙 بازگشت', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function showGenderSelection($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    setEditingProfile($chat_id, true);
    
    $message = "لطفاً جنسیت خود را انتخاب کنید:";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('set_gender_male', 'مرد', 'Large'),
                    createButton('set_gender_female', 'زن', 'Large')
                ]
            ],
            [
                'buttons' => [
                    createButton('cancel', '🔙 بازگشت', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function showProvinceSelection($chat_id, $token) {
    global $provinces_data;
    
    deleteAllUserMenus($chat_id, $token);
    setEditingProfile($chat_id, true);
    
    $message = "لطفاً استان خود را انتخاب کنید:";
    
    $keypad = [
        'rows' => []
    ];
    
    $provinces = array_column($provinces_data, 'province');
    
    $chunks = array_chunk($provinces, 3);
    foreach ($chunks as $chunk) {
        $row = ['buttons' => []];
        foreach ($chunk as $province) {
            $row['buttons'][] = createButton("province_$province", $province, 'Small');
        }
        $keypad['rows'][] = $row;
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('cancel', '🔙 بازگشت', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function showCitySelection($chat_id, $province, $token) {
    global $provinces_data;
    
    deleteAllUserMenus($chat_id, $token);
    setEditingProfile($chat_id, true);
    
    $message = "لطفاً شهر خود را انتخاب کنید:";
    
    $keypad = [
        'rows' => []
    ];
    
    $cities = [];
    foreach ($provinces_data as $province_data) {
        if ($province_data['province'] == $province) {
            $cities = $province_data['cities'];
            break;
        }
    }
    
    $chunks = array_chunk($cities, 3);
    foreach ($chunks as $chunk) {
        $row = ['buttons' => []];
        foreach ($chunk as $city) {
            $row['buttons'][] = createButton("city_$city", $city, 'Small');
        }
        $keypad['rows'][] = $row;
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('cancel', '🔙 بازگشت', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function startNameEditing($chat_id, $token) {
    file_put_contents("storage/users/$chat_id.editing_name", '1');
    setEditingProfile($chat_id, true);
    sendMessage($chat_id, "لطفاً نام جدید خود را ارسال کنید:", $token);
}

function startBioEditing($chat_id, $token) {
    file_put_contents("storage/users/$chat_id.editing_bio", '1');
    setEditingProfile($chat_id, true);
    sendMessage($chat_id, "لطفاً بیوگرافی خود را ارسال کنید (حداکثر 200 کاراکتر):", $token);
}

function handleSearchUsersMenu($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $message = "🔎 جستجوی کاربران\n\n";
    $message .= "لطفاً نوع جستجو را انتخاب کنید:";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('search_by_province', '📍 جستجو با استان', 'Small'),
                    createButton('search_by_age', '🎂 جستجو با سن', 'Small')
                ]
            ],
            [
                'buttons' => [
                    createButton('search_by_city', '🏙️ جستجو با شهر', 'Small'),
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleSearchByType($chat_id, $button_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $search_type = str_replace('search_by_', '', $button_id);
    
    $message = "🔎 جستجوی کاربران بر اساس ";
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('search_gender_male_' . $search_type, '👨 جستجوی پسران', 'Small'),
                    createButton('search_gender_female_' . $search_type, '👩 جستجوی دختران', 'Small')
                ]
            ],
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    switch ($search_type) {
        case 'province':
            $message .= "استان";
            break;
        case 'age':
            $message .= "سن";
            break;
        case 'city':
            $message .= "شهر";
            break;
    }
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleSearchByGender($chat_id, $button_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $parts = explode('_', $button_id);
    $gender = $parts[2];
    $search_type = $parts[3];
    
    $profile = getUserProfile($chat_id);
    
    switch ($search_type) {
        case 'province':
            handleSelectProvinceForSearch($chat_id, "select_province_{$gender}", $token);
            break;
        case 'age':
            handleSelectAgeForSearch($chat_id, "select_age_{$gender}", $token);
            break;
        case 'city':
            handleSelectCityForSearch($chat_id, "select_city_{$gender}", $token);
            break;
    }
}

function handleSelectProvinceForSearch($chat_id, $button_id, $token) {
    global $provinces_data;
    
    deleteAllUserMenus($chat_id, $token);
    
    $parts = explode('_', $button_id);
    $gender = $parts[2];
    
    $message = "📍 انتخاب استان برای جستجوی " . ($gender == 'male' ? 'پسران' : 'دختران');
    
    $keypad = [
        'rows' => []
    ];
    
    $provinces = array_column($provinces_data, 'province');
    
    $chunks = array_chunk($provinces, 3);
    foreach ($chunks as $chunk) {
        $row = ['buttons' => []];
        foreach ($chunk as $province) {
            $row['buttons'][] = createButton("show_users_{$gender}_province_{$province}", $province, 'Small');
        }
        $keypad['rows'][] = $row;
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleSelectCityForSearch($chat_id, $button_id, $token) {
    global $provinces_data;
    
    deleteAllUserMenus($chat_id, $token);
    
    $parts = explode('_', $button_id);
    $gender = $parts[2];
    $profile = getUserProfile($chat_id);
    
    if (empty($profile['province']) || $profile['province'] == 'نامشخص') {
        sendMessage($chat_id, "❌ لطفاً ابتدا استان خود را در پروفایل تنظیم کنید.", $token);
        handleProfileCommand($chat_id, $token);
        return;
    }
    
    $message = "🏙️ انتخاب شهر برای جستجوی " . ($gender == 'male' ? 'پسران' : 'دختران') . " در استان {$profile['province']}";
    
    $keypad = [
        'rows' => []
    ];
    
    $cities = [];
    foreach ($provinces_data as $province_data) {
        if ($province_data['province'] == $profile['province']) {
            $cities = $province_data['cities'];
            break;
        }
    }
    
    $chunks = array_chunk($cities, 3);
    foreach ($chunks as $chunk) {
        $row = ['buttons' => []];
        foreach ($chunk as $city) {
            $row['buttons'][] = createButton("show_users_{$gender}_city_{$city}", $city, 'Small');
        }
        $keypad['rows'][] = $row;
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleSelectAgeForSearch($chat_id, $button_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $parts = explode('_', $button_id);
    $gender = $parts[2];
    
    $message = "🎂 انتخاب محدوده سنی برای جستجوی " . ($gender == 'male' ? 'پسران' : 'دختران');
    
    $keypad = [
        'rows' => []
    ];
    
    $age_ranges = [
        '12-18' => '12 تا 18 سال',
        '19-25' => '19 تا 25 سال',
        '26-35' => '26 تا 35 سال',
        '36-50' => '36 تا 50 سال',
        '51+' => 'بالای 50 سال'
    ];
    
    foreach ($age_ranges as $range => $label) {
        $keypad['rows'][] = [
            'buttons' => [
                createButton("show_users_{$gender}_age_{$range}", $label, 'Large')
            ]
        ];
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleShowUsersList($chat_id, $button_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $parts = explode('_', $button_id);
    $gender = $parts[2];
    $criteria_type = $parts[3];
    $criteria_value = $parts[4];
    
    $users = searchUsersByCriteria($gender, $criteria_type, $criteria_value);
    
    if (empty($users)) {
        sendMessage($chat_id, "⚠️ کاربری با مشخصات مورد نظر یافت نشد.", $token);
        handleSearchUsersMenu($chat_id, $token);
        return;
    }
    
    $message = "🔍 نتایج جستجو:\n\n";
    $message .= "تعداد کاربران یافت شده: " . count($users) . "\n\n";
    
    $keypad = [
        'rows' => []
    ];
    
    $users = array_slice($users, 0, 20);
    
    foreach ($users as $user) {
        $user_info = "👤 {$user['name']} - {$user['age']} سال - {$user['gender']}";
        if ($criteria_type != 'city') {
            $user_info .= " - {$user['city']}";
        }
        if ($criteria_type != 'province') {
            $user_info .= " - {$user['province']}";
        }
        
        $keypad['rows'][] = [
            'buttons' => [
                createButton("show_user_{$user['id']}", $user_info, 'Large')
            ]
        ];
    }
    
    $keypad['rows'][] = [
        'buttons' => [
            createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function searchUsersByCriteria($gender, $criteria_type, $criteria_value) {
    $all_profiles = glob('storage/user_profiles/*.json');
    $results = [];
    
    foreach ($all_profiles as $profile_file) {
        $profile = json_decode(file_get_contents($profile_file), true);
        
        if (($gender == 'male' && $profile['gender'] != 'مرد') || 
            ($gender == 'female' && $profile['gender'] != 'زن')) {
            continue;
        }
        
        switch ($criteria_type) {
            case 'province':
                if ($profile['province'] == $criteria_value) {
                    $results[] = $profile;
                }
                break;
            case 'city':
                if ($profile['city'] == $criteria_value) {
                    $results[] = $profile;
                }
                break;
            case 'age':
                if (strpos($criteria_value, '+') !== false) {
                    $min_age = str_replace('+', '', $criteria_value);
                    if ($profile['age'] >= $min_age) {
                        $results[] = $profile;
                    }
                } else {
                    list($min_age, $max_age) = explode('-', $criteria_value);
                    if ($profile['age'] >= $min_age && $profile['age'] <= $max_age) {
                        $results[] = $profile;
                    }
                }
                break;
        }
    }
    
    return $results;
}

function handleButtonAction($chat_id, $button_id, $text, $token) {
    global $provinces_data;
    
    $user_status = getUserStatus($chat_id);
    $profile = getUserProfile($chat_id);
    
    if ($profile['banned'] ?? false) {
        sendMessage($chat_id, "⛔ حساب شما مسدود شده است و نمی‌توانید از ربات استفاده کنید.", $token);
        return;
    }
    
    $is_editing = isEditingName($chat_id) || isEditingProfile($chat_id) || isEditingBio($chat_id);
    
    if ($is_editing && !in_array($button_id, ['cancel', 'set_gender_male', 'set_gender_female']) && 
        strpos($button_id, 'age_') !== 0 && strpos($button_id, 'province_') !== 0 && strpos($button_id, 'city_') !== 0) {
        sendMessage($chat_id, "⚠️ لطفاً ابتدا ویرایش پروفایل را تکمیل کنید.", $token);
        return;
    }
    
    if (($user_status['in_chat'] || $user_status['searching']) && !in_array($button_id, ['end_chat', 'report_user', 'delete_message'])) {
        sendMessage($chat_id, "⚠️ لطفاً ابتدا چت یا جستجوی خود را پایان دهید.", $token);
        return;
    }
    
    switch ($button_id) {
        case 'start_search':
            handleSearchCommand($chat_id, $token);
            break;
            
        case 'show_profile':
            handleProfileCommand($chat_id, $token);
            break;
            
        case 'show_help':
            handleHelpCommand($chat_id, $token);
            break;
            
        case 'show_rules':
            handleRulesCommand($chat_id, $token);
            break;
            
        case 'show_about':
            handleAboutCommand($chat_id, $token);
            break;
            
        case 'back_to_menu':
            handleStartCommand($chat_id, $token, true);
            break;
            
        case 'end_chat':
            handleEndCommand($chat_id, $token);
            break;
            
        case 'edit_name':
            startNameEditing($chat_id, $token);
            break;
            
        case 'edit_age':
            showAgeSelection($chat_id, $token);
            break;
            
        case 'edit_gender':
            showGenderSelection($chat_id, $token);
            break;
            
        case 'edit_province':
            showProvinceSelection($chat_id, $token);
            break;
            
        case 'edit_city':
            if (empty($profile['province']) || $profile['province'] == 'نامشخص') {
                sendMessage($chat_id, "❌ لطفاً ابتدا استان خود را انتخاب کنید.", $token);
                showProvinceSelection($chat_id, $token);
            } else {
                showCitySelection($chat_id, $profile['province'], $token);
            }
            break;
            
        case 'edit_bio':
            startBioEditing($chat_id, $token);
            break;
            
        case 'set_gender_male':
            $profile['gender'] = 'مرد';
            saveUserProfile($chat_id, $profile);
            saveUserProfileForSearch($chat_id, $profile);
            clearEditingStatus($chat_id);
            sendMessage($chat_id, "✅ جنسیت شما به 'مرد' تغییر یافت.", $token);
            handleProfileCommand($chat_id, $token);
            break;
            
        case 'set_gender_female':
            $profile['gender'] = 'زن';
            saveUserProfile($chat_id, $profile);
            saveUserProfileForSearch($chat_id, $profile);
            clearEditingStatus($chat_id);
            sendMessage($chat_id, "✅ جنسیت شما به 'زن' تغییر یافت.", $token);
            handleProfileCommand($chat_id, $token);
            break;
            
        case 'cancel':
            clearEditingStatus($chat_id);
            handleProfileCommand($chat_id, $token);
            break;
            
        case 'invite_friends':
            handleInviteFriends($chat_id, $token);
            break;
            
        case 'report_user':
            handleReportUser($chat_id, $token);
            break;
            
        default:
            if (strpos($button_id, 'age_') === 0) {
                $age = str_replace('age_', '', $button_id);
                if (is_numeric($age) && $age >= 12 && $age <= 99) {
                    $profile['age'] = (int)$age;
                    saveUserProfile($chat_id, $profile);
                    saveUserProfileForSearch($chat_id, $profile);
                    clearEditingStatus($chat_id);
                    sendMessage($chat_id, "✅ سن شما به $age سال تغییر یافت.", $token);
                    handleProfileCommand($chat_id, $token);
                }
            }
            elseif (strpos($button_id, 'province_') === 0) {
                $province = str_replace('province_', '', $button_id);
                $profile['province'] = $province;
                $profile['city'] = 'نامشخص';
                saveUserProfile($chat_id, $profile);
                saveUserProfileForSearch($chat_id, $profile);
                setEditingProfile($chat_id, true);
                sendMessage($chat_id, "✅ استان شما به '$province' تغییر یافت.", $token);
                showCitySelection($chat_id, $province, $token);
            }
            elseif (strpos($button_id, 'city_') === 0) {
                $city = str_replace('city_', '', $button_id);
                $profile['city'] = $city;
                saveUserProfile($chat_id, $profile);
                saveUserProfileForSearch($chat_id, $profile);
                clearEditingStatus($chat_id);
                sendMessage($chat_id, "✅ شهر شما به '$city' تغییر یافت.", $token);
                handleProfileCommand($chat_id, $token);
            }
    }
}

function handleHelpCommand($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $message = "📚 راهنمای جامع ربات روبی چت:\n\n";
    $message .= "🔹 بخش‌های اصلی ربات:\n";
    $message .= "1. /start - نمایش منوی اصلی و صفحه اول ربات\n";
    $message .= "2. /search - شروع جستجوی کاربر جدید به صورت تصادفی\n";
    $message .= "3. /end - پایان دادن به چت فعلی یا لغو جستجو\n";
    $message .= "4. /profile - مشاهده و ویرایش اطلاعات پروفایل\n";
    $message .= "5. /help - نمایش این صفحه راهنما\n";
    $message .= "6. /rules - نمایش قوانین و مقررات استفاده از ربات\n";
    $message .= "7. /about - اطلاعات درباره ربات و توسعه دهنده\n\n";
    
    $message .= "🔹 نحوه استفاده از ربات:\n";
    $message .= "1. ابتدا با استفاده از بخش پروفایل، اطلاعات خود را تکمیل کنید\n";
    $message .= "2. برای یافتن کاربر جدید روی گزینه 'جستجوی شانسی' کلیک کنید\n";
    $message .= "3. پس از اتصال به کاربر دیگر، می‌توانید شروع به چت کنید\n";
    $message .= "4. برای پایان دادن به چت از گزینه 'پایان گفتگو' استفاده کنید\n";
    $message .= "5. در صورت مشاهده تخلف می‌توانید کاربر را گزارش دهید\n\n";
    
    $message .= "🔹 نحوه حذف پیام:\n";
    $message .= "- روی پیام خود ریپلای کنید و یکی از کلمات زیر را بنویسید:\n";
    $message .= "  del یا حذف\n";
    $message .= "- پیام شما از چت طرف مقابل حذف خواهد شد\n\n";
    
    $message .= "🔹 جستجوی کاربران:\n";
    $message .= "- می‌توانید کاربران را بر اساس استان، شهر یا سن جستجو کنید\n";
    $message .= "- نتایج جستجو بر اساس جنسیت فیلتر می‌شوند\n\n";
    
    $message .= "⚠️ نکات مهم و هشدارها:\n";
    $message .= "- هر کاربر فقط می‌تواند در یک چت همزمان شرکت کند\n";
    $message .= "- حداقل سن مجاز برای استفاده از ربات 12 سال است\n";
    $message .= "- حداکثر سن مجاز برای استفاده از ربات 99 سال است\n";
    $message .= "- ارسال هرگونه محتوای نامناسب ممنوع است و منجر به مسدودیت می‌شود\n";
    $message .= "- رعایت قوانین و مقررات ربات الزامی است\n";
    $message .= "- در صورت مشاهده تخلف، کاربر خاطی را گزارش دهید\n\n";
    
    $message .= "📌 برای اطلاعات بیشتر می‌توانید از بخش 'قوانین' و 'درباره ما' بازدید کنید.";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleRulesCommand($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $message = "📜 قوانین و مقررات استفاده از روبی چت:\n\n";
    $message .= "🔸 بخش اول - قوانین عمومی:\n";
    $message .= "1. استفاده از ربات برای تمامی کاربران آزاد است به شرط رعایت قوانین\n";
    $message .= "2. حداقل سن مجاز برای استفاده از ربات 12 سال می‌باشد\n";
    $message .= "3. هرگونه استفاده تجاری و تبلیغاتی از ربات ممنوع است\n";
    $message .= "4. کاربر موظف است اطلاعات صحیح و واقعی در پروفایل خود ثبت کند\n\n";
    
    $message .= "🔸 بخش دوم - محتوای ممنوعه:\n";
    $message .= "1. ارسال هرگونه محتوای مستهجن، غیراخلاقی و توهین‌آمیز ممنوع است\n";
    $message .= "2. هرگونه تبلیغات، اسپم و ارسال لینک‌های خارجی ممنوع است\n";
    $message .= "3. انتشار اطلاعات شخصی دیگران بدون رضایت آنها ممنوع است\n";
    $message .= "4. ارسال محتوای سیاسی، مذهبی و تفرقه‌انگیز ممنوع است\n";
    $message .= "5. هرگونه محتوای نقض کننده حقوق مالکیت معنوی ممنوع است\n\n";
    
    $message .= "🔸 بخش سوم - جرایم و مجازات‌ها:\n";
    $message .= "1. در صورت تخلف، حساب کاربری متخلف مسدود خواهد شد\n";
    $message .= "2. مسدودیت می‌تواند موقت یا دائم باشد بسته به شدت تخلف\n";
    $message .= "3. در صورت نقض قوانین کشوری، اطلاعات کاربر به مراجع قانونی ارائه می‌شود\n";
    $message .= "4. تصمیم‌گیری نهایی درباره جرایم با مدیریت ربات است\n\n";
    
    $message .= "⚠️ توجه: با استفاده از ربات، شما تمامی قوانین فوق را پذیرفته‌اید.";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleAboutCommand($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $message = "📌 درباره روبی چت:\n\n";
    $message .= "🔹 معرفی ربات:\n";
    $message .= "روبی چت یک ربات چت ناشناس و تصادفی است که به کاربران امکان می‌دهد با افراد جدید آشنا شوند و به صورت ناشناس چت کنند. این ربات با هدف ایجاد ارتباطات سالم و صمیمانه توسعه داده شده است.\n\n";
    
    $message .= "🔹 ویژگی‌های ربات:\n";
    $message .= "- چت ناشناس و تصادفی\n";
    $message .= "- سیستم گزارش تخلف کاربران\n";
    $message .= "- فیلتر محتوای نامناسب\n";
    $message .= "- امکان مدیریت پروفایل کاربری\n";
    $message .= "- رابط کاربری ساده و روان\n";
    $message .= "- سیستم جستجوی پیشرفته کاربران\n\n";
    
    $message .= "🔹 اطلاعات فنی:\n";
    $message .= "- نسخه فعلی: 2.1\n";
    $message .= "- تاریخ آخرین بروزرسانی: 1403/04/20\n";
    $message .= "- پلتفرم: روبیکا\n";
    $message .= "- زبان برنامه‌نویسی: PHP\n\n";
    
    $message .= "🔹 راه‌های ارتباطی:\n";
    $message .= "- توسعه دهنده: آرشام\n";
    $message .= "- کانال رسمی: @rubychat\n";
    $message .= "- پشتیبانی: @rubychat_support\n\n";
    
    $message .= "🛡️ این ربات تحت نظارت کامل بوده و تمامی چت‌ها از نظر محتوای نامناسب بررسی می‌شوند.";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleInviteFriends($chat_id, $token) {
    deleteAllUserMenus($chat_id, $token);
    
    $message = "📩 دعوت از دوستان:\n\n";
    $message .= "سلام دوست عزیزم! 😊\n\n";
    $message .= "یه ربات خفن پیدا کردم به اسم روبی چت که می‌تونی باهاش با افراد جدید آشنا شی و چت کنی، کاملاً ناشناس و امن!\n\n";
    $message .= "✨ ویژگی‌های جذاب:\n";
    $message .= "- چت ناشناس و تصادفی\n";
    $message .= "- بدون نیاز به شماره تلفن\n";
    $message .= "- فیلتر هوشمند محتوای نامناسب\n";
    $message .= "- رابط کاربری خفن و ساده\n";
    $message .= "- سیستم جستجوی پیشرفته کاربران\n\n";
    $message .= "🔥 لینک ربات:\n";
    $message .= "https://rubika.ir/rubychat_bot\n\n";
    $message .= "حالا دیگه وقتشه کلی آدم جدید باحال رو توی روبیکا بشناسی! یه عالمه دوست جدید منتظرن تا باهاشون چت کنی! 😉\n\n";
    $message .= "پس همین الان ربات رو اضافه کن و شروع کن به چت کردن! 🚀";
    
    $keypad = [
        'rows' => [
            [
                'buttons' => [
                    createButton('back_to_menu', '🔙 بازگشت به منو', 'Small')
                ]
            ]
        ]
    ];
    
    sendMenu($chat_id, $message, $keypad, $token);
}

function handleReportUser($chat_id, $token) {
    $user_status = getUserStatus($chat_id);
    
    if ($user_status['in_chat']) {
        sendMessage($chat_id, "⚠️ لطفاً ابتدا چت را پایان دهید و سپس کاربر را گزارش کنید.", $token);
        return;
    }
    
    $last_chat_file = "storage/users/$chat_id.last_chat";
    if (!file_exists($last_chat_file)) {
        sendMessage($chat_id, "⚠️ کاربری برای گزارش پیدا نشد. فقط می‌توانید کاربرانی که اخیراً با آنها چت داشته‌اید را گزارش دهید.", $token);
        return;
    }
    
    $active_chat = json_decode(file_get_contents($last_chat_file), true);
    $partner_id = ($active_chat['user1'] == $chat_id) ? $active_chat['user2'] : $active_chat['user1'];
    
    $chat_log_file = "storage/chat_logs/{$active_chat['file']}";
    $chat_log = file_exists($chat_log_file) ? json_decode(file_get_contents($chat_log_file), true) : [];
    
    $report_data = [
        'reporter_id' => $chat_id,
        'reported_id' => $partner_id,
        'timestamp' => time(),
        'status' => 'pending',
        'chat_log' => $chat_log
    ];
    
    $report_file = "storage/reports/" . uniqid() . ".json";
    file_put_contents($report_file, json_encode($report_data, JSON_UNESCAPED_UNICODE));
    
    sendMessage($chat_id, "✅ گزارش شما با موفقیت ثبت شد. تیم پشتیبانی آن را بررسی خواهد کرد. در صورت تأیید تخلف، کاربر مورد نظر مسدود خواهد شد.", $token);
    handleStartCommand($chat_id, $token);
}