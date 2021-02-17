<?php

use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [

            [
                'en'=> 'Afghan',
                'ar'=> 'أفغانستاني'
            ],
            [

                'en'=> 'Albanian',
                'ar'=> 'ألباني'
            ],
            [

                'en'=> 'Aland Islander',
                'ar'=> 'آلاندي'
            ],
            [

                'en'=> 'Algerian',
                'ar'=> 'جزائري'
            ],
            [

                'en'=> 'American Samoan',
                'ar'=> 'أمريكي سامواني'
            ],
            [

                'en'=> 'Andorran',
                'ar'=> 'أندوري'
            ],
            [

                'en'=> 'Angolan',
                'ar'=> 'أنقولي'
            ],
            [

                'en'=> 'Anguillan',
                'ar'=> 'أنغويلي'
            ],
            [

                'en'=> 'Antarctican',
                'ar'=> 'أنتاركتيكي'
            ],
            [

                'en'=> 'Antiguan',
                'ar'=> 'بربودي'
            ],
            [

                'en'=> 'Argentinian',
                'ar'=> 'أرجنتيني'
            ],
            [

                'en'=> 'Armenian',
                'ar'=> 'أرميني'
            ],
            [

                'en'=> 'Aruban',
                'ar'=> 'أوروبهيني'
            ],
            [

                'en'=> 'Australian',
                'ar'=> 'أسترالي'
            ],
            [

                'en'=> 'Austrian',
                'ar'=> 'نمساوي'
            ],
            [

                'en'=> 'Azerbaijani',
                'ar'=> 'أذربيجاني'
            ],
            [

                'en'=> 'Bahamian',
                'ar'=> 'باهاميسي'
            ],
            [

                'en'=> 'Bahraini',
                'ar'=> 'بحريني'
            ],
            [

                'en'=> 'Bangladeshi',
                'ar'=> 'بنغلاديشي'
            ],
            [

                'en'=> 'Barbadian',
                'ar'=> 'بربادوسي'
            ],
            [

                'en'=> 'Belarusian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Belgian',
                'ar'=> 'بلجيكي'
            ],
            [

                'en'=> 'Belizean',
                'ar'=> 'بيليزي'
            ],
            [

                'en'=> 'Beninese',
                'ar'=> 'بنيني'
            ],
            [

                'en'=> 'Saint Barthelmian',
                'ar'=> 'سان بارتيلمي'
            ],
            [

                'en'=> 'Bermudan',
                'ar'=> 'برمودي'
            ],
            [

                'en'=> 'Bhutanese',
                'ar'=> 'بوتاني'
            ],
            [

                'en'=> 'Bolivian',
                'ar'=> 'بوليفي'
            ],
            [

                'en'=> 'Bosnian / Herzegovinian',
                'ar'=> 'بوسني/هرسكي'
            ],
            [

                'en'=> 'Botswanan',
                'ar'=> 'بوتسواني'
            ],
            [

                'en'=> 'Bouvetian',
                'ar'=> 'بوفيهي'
            ],
            [

                'en'=> 'Brazilian',
                'ar'=> 'برازيلي'
            ],
            [

                'en'=> 'British Indian Ocean Territory',
                'ar'=> 'إقليم المحيط الهندي البريطاني'
            ],
            [

                'en'=> 'Bruneian',
                'ar'=> 'بروني'
            ],
            [

                'en'=> 'Bulgarian',
                'ar'=> 'بلغاري'
            ],
            [

                'en'=> 'Burkinabe',
                'ar'=> 'بوركيني'
            ],
            [

                'en'=> 'Burundian',
                'ar'=> 'بورونيدي'
            ],
            [

                'en'=> 'Cambodian',
                'ar'=> 'كمبودي'
            ],
            [

                'en'=> 'Cameroonian',
                'ar'=> 'كاميروني'
            ],
            [

                'en'=> 'Canadian',
                'ar'=> 'كندي'
            ],
            [

                'en'=> 'Cape Verdean',
                'ar'=> 'الرأس الأخضر'
            ],
            [

                'en'=> 'Caymanian',
                'ar'=> 'كايماني'
            ],
            [

                'en'=> 'Central African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'Chadian',
                'ar'=> 'تشادي'
            ],
            [

                'en'=> 'Chilean',
                'ar'=> 'شيلي'
            ],
            [

                'en'=> 'Chinese',
                'ar'=> 'صيني'
            ],
            [

                'en'=> 'Christmas Islander',
                'ar'=> 'جزيرة عيد الميلاد'
            ],
            [

                'en'=> 'Cocos Islander',
                'ar'=> 'جزر كوكوس'
            ],
            [

                'en'=> 'Colombian',
                'ar'=> 'كولومبي'
            ],
            [

                'en'=> 'Comorian',
                'ar'=> 'جزر القمر'
            ],
            [

                'en'=> 'Congolese',
                'ar'=> 'كونغي'
            ],
            [

                'en'=> 'Cook Islander',
                'ar'=> 'جزر كوك'
            ],
            [

                'en'=> 'Costa Rican',
                'ar'=> 'كوستاريكي'
            ],
            [

                'en'=> 'Croatian',
                'ar'=> 'كوراتي'
            ],
            [

                'en'=> 'Cuban',
                'ar'=> 'كوبي'
            ],
            [

                'en'=> 'Cypriot',
                'ar'=> 'قبرصي'
            ],
            [

                'en'=> 'Curacian',
                'ar'=> 'كوراساوي'
            ],
            [

                'en'=> 'Czech',
                'ar'=> 'تشيكي'
            ],
            [

                'en'=> 'Danish',
                'ar'=> 'دنماركي'
            ],
            [

                'en'=> 'Djiboutian',
                'ar'=> 'جيبوتي'
            ],
            [

                'en'=> 'Dominican',
                'ar'=> 'دومينيكي'
            ],
            [

                'en'=> 'Dominican',
                'ar'=> 'دومينيكي'
            ],
            [

                'en'=> 'Ecuadorian',
                'ar'=> 'إكوادوري'
            ],
            [

                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],
            [

                'en'=> 'Salvadoran',
                'ar'=> 'سلفادوري'
            ],
            [

                'en'=> 'Equatorial Guinean',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Eritrean',
                'ar'=> 'إريتيري'
            ],
            [

                'en'=> 'Estonian',
                'ar'=> 'استوني'
            ],
            [

                'en'=> 'Ethiopian',
                'ar'=> 'أثيوبي'
            ],
            [

                'en'=> 'Falkland Islander',
                'ar'=> 'فوكلاندي'
            ],
            [

                'en'=> 'Faroese',
                'ar'=> 'جزر فارو'
            ],
            [

                'en'=> 'Fijian',
                'ar'=> 'فيجي'
            ],
            [

                'en'=> 'Finnish',
                'ar'=> 'فنلندي'
            ],
            [

                'en'=> 'French',
                'ar'=> 'فرنسي'
            ],
            [

                'en'=> 'French Guianese',
                'ar'=> 'غويانا الفرنسية'
            ],
            [

                'en'=> 'French Polynesian',
                'ar'=> 'بولينيزيي'
            ],
            [

                'en'=> 'French',
                'ar'=> 'أراض فرنسية جنوبية وأنتارتيكية'
            ],
            [

                'en'=> 'Gabonese',
                'ar'=> 'غابوني'
            ],
            [

                'en'=> 'Gambian',
                'ar'=> 'غامبي'
            ],
            [

                'en'=> 'Georgian',
                'ar'=> 'جيورجي'
            ],
            [

                'en'=> 'German',
                'ar'=> 'ألماني'
            ],
            [

                'en'=> 'Ghanaian',
                'ar'=> 'غاني'
            ],
            [

                'en'=> 'Gibraltar',
                'ar'=> 'جبل طارق'
            ],
            [

                'en'=> 'Guernsian',
                'ar'=> 'غيرنزي'
            ],
            [

                'en'=> 'Greek',
                'ar'=> 'يوناني'
            ],
            [

                'en'=> 'Greenlandic',
                'ar'=> 'جرينلاندي'
            ],
            [

                'en'=> 'Grenadian',
                'ar'=> 'غرينادي'
            ],
            [

                'en'=> 'Guadeloupe',
                'ar'=> 'جزر جوادلوب'
            ],
            [

                'en'=> 'Guamanian',
                'ar'=> 'جوامي'
            ],
            [

                'en'=> 'Guatemalan',
                'ar'=> 'غواتيمالي'
            ],
            [

                'en'=> 'Guinean',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Guinea-Bissauan',
                'ar'=> 'غيني'
            ],
            [

                'en'=> 'Guyanese',
                'ar'=> 'غياني'
            ],
            [

                'en'=> 'Haitian',
                'ar'=> 'هايتي'
            ],
            [

                'en'=> 'Heard and Mc Donald Islanders',
                'ar'=> 'جزيرة هيرد وجزر ماكدونالد'
            ],
            [

                'en'=> 'Honduran',
                'ar'=> 'هندوراسي'
            ],
            [

                'en'=> 'Hongkongese',
                'ar'=> 'هونغ كونغي'
            ],
            [

                'en'=> 'Hungarian',
                'ar'=> 'مجري'
            ],
            [

                'en'=> 'Icelandic',
                'ar'=> 'آيسلندي'
            ],
            [

                'en'=> 'Indian',
                'ar'=> 'هندي'
            ],
            [

                'en'=> 'Manx',
                'ar'=> 'ماني'
            ],
            [

                'en'=> 'Indonesian',
                'ar'=> 'أندونيسيي'
            ],
            [

                'en'=> 'Iranian',
                'ar'=> 'إيراني'
            ],
            [

                'en'=> 'Iraqi',
                'ar'=> 'عراقي'
            ],
            [

                'en'=> 'Irish',
                'ar'=> 'إيرلندي'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Ivory Coastian',
                'ar'=> 'ساحل العاج'
            ],
            [

                'en'=> 'Jersian',
                'ar'=> 'جيرزي'
            ],
            [

                'en'=> 'Jamaican',
                'ar'=> 'جمايكي'
            ],
            [

                'en'=> 'Japanese',
                'ar'=> 'ياباني'
            ],
            [

                'en'=> 'Jordanian',
                'ar'=> 'أردني'
            ],
            [

                'en'=> 'Kazakh',
                'ar'=> 'كازاخستاني'
            ],
            [

                'en'=> 'Kenyan',
                'ar'=> 'كيني'
            ],
            [

                'en'=> 'I-Kiribati',
                'ar'=> 'كيريباتي'
            ],
            [

                'en'=> 'North Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'South Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'Kosovar',
                'ar'=> 'كوسيفي'
            ],
            [

                'en'=> 'Kuwaiti',
                'ar'=> 'كويتي'
            ],
            [

                'en'=> 'Kyrgyzstani',
                'ar'=> 'قيرغيزستاني'
            ],
            [

                'en'=> 'Laotian',
                'ar'=> 'لاوسي'
            ],
            [

                'en'=> 'Latvian',
                'ar'=> 'لاتيفي'
            ],
            [

                'en'=> 'Lebanese',
                'ar'=> 'لبناني'
            ],
            [

                'en'=> 'Basotho',
                'ar'=> 'ليوسيتي'
            ],
            [

                'en'=> 'Liberian',
                'ar'=> 'ليبيري'
            ],
            [

                'en'=> 'Libyan',
                'ar'=> 'ليبي'
            ],
            [

                'en'=> 'Liechtenstein',
                'ar'=> 'ليختنشتيني'
            ],
            [

                'en'=> 'Lithuanian',
                'ar'=> 'لتوانيي'
            ],
            [

                'en'=> 'Luxembourger',
                'ar'=> 'لوكسمبورغي'
            ],
            [

                'en'=> 'Sri Lankian',
                'ar'=> 'سريلانكي'
            ],
            [

                'en'=> 'Macanese',
                'ar'=> 'ماكاوي'
            ],
            [

                'en'=> 'Macedonian',
                'ar'=> 'مقدوني'
            ],
            [

                'en'=> 'Malagasy',
                'ar'=> 'مدغشقري'
            ],
            [

                'en'=> 'Malawian',
                'ar'=> 'مالاوي'
            ],
            [

                'en'=> 'Malaysian',
                'ar'=> 'ماليزي'
            ],
            [

                'en'=> 'Maldivian',
                'ar'=> 'مالديفي'
            ],
            [

                'en'=> 'Malian',
                'ar'=> 'مالي'
            ],
            [

                'en'=> 'Maltese',
                'ar'=> 'مالطي'
            ],
            [

                'en'=> 'Marshallese',
                'ar'=> 'مارشالي'
            ],
            [

                'en'=> 'Martiniquais',
                'ar'=> 'مارتينيكي'
            ],
            [

                'en'=> 'Mauritanian',
                'ar'=> 'موريتانيي'
            ],
            [

                'en'=> 'Mauritian',
                'ar'=> 'موريشيوسي'
            ],
            [

                'en'=> 'Mahoran',
                'ar'=> 'مايوتي'
            ],
            [

                'en'=> 'Mexican',
                'ar'=> 'مكسيكي'
            ],
            [

                'en'=> 'Micronesian',
                'ar'=> 'مايكرونيزيي'
            ],
            [

                'en'=> 'Moldovan',
                'ar'=> 'مولديفي'
            ],
            [

                'en'=> 'Monacan',
                'ar'=> 'مونيكي'
            ],
            [

                'en'=> 'Mongolian',
                'ar'=> 'منغولي'
            ],
            [

                'en'=> 'Montenegrin',
                'ar'=> 'الجبل الأسود'
            ],
            [

                'en'=> 'Montserratian',
                'ar'=> 'مونتسيراتي'
            ],
            [

                'en'=> 'Moroccan',
                'ar'=> 'مغربي'
            ],
            [

                'en'=> 'Mozambican',
                'ar'=> 'موزمبيقي'
            ],
            [

                'en'=> 'Myanmarian',
                'ar'=> 'ميانماري'
            ],
            [

                'en'=> 'Namibian',
                'ar'=> 'ناميبي'
            ],
            [

                'en'=> 'Nauruan',
                'ar'=> 'نوري'
            ],
            [

                'en'=> 'Nepalese',
                'ar'=> 'نيبالي'
            ],
            [

                'en'=> 'Dutch',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'Dutch Antilier',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'New Caledonian',
                'ar'=> 'كاليدوني'
            ],
            [

                'en'=> 'New Zealander',
                'ar'=> 'نيوزيلندي'
            ],
            [

                'en'=> 'Nicaraguan',
                'ar'=> 'نيكاراجوي'
            ],
            [

                'en'=> 'Nigerien',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Nigerian',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Niuean',
                'ar'=> 'ني'
            ],
            [

                'en'=> 'Norfolk Islander',
                'ar'=> 'نورفوليكي'
            ],
            [

                'en'=> 'Northern Marianan',
                'ar'=> 'ماريني'
            ],
            [

                'en'=> 'Norwegian',
                'ar'=> 'نرويجي'
            ],
            [

                'en'=> 'Omani',
                'ar'=> 'عماني'
            ],
            [

                'en'=> 'Pakistani',
                'ar'=> 'باكستاني'
            ],
            [

                'en'=> 'Palauan',
                'ar'=> 'بالاوي'
            ],
            [

                'en'=> 'Palestinian',
                'ar'=> 'فلسطيني'
            ],
            [

                'en'=> 'Panamanian',
                'ar'=> 'بنمي'
            ],
            [

                'en'=> 'Papua New Guinean',
                'ar'=> 'بابوي'
            ],
            [

                'en'=> 'Paraguayan',
                'ar'=> 'بارغاوي'
            ],
            [

                'en'=> 'Peruvian',
                'ar'=> 'بيري'
            ],
            [

                'en'=> 'Filipino',
                'ar'=> 'فلبيني'
            ],
            [

                'en'=> 'Pitcairn Islander',
                'ar'=> 'بيتكيرني'
            ],
            [

                'en'=> 'Polish',
                'ar'=> 'بوليني'
            ],
            [

                'en'=> 'Portuguese',
                'ar'=> 'برتغالي'
            ],
            [

                'en'=> 'Puerto Rican',
                'ar'=> 'بورتي'
            ],
            [

                'en'=> 'Qatari',
                'ar'=> 'قطري'
            ],
            [

                'en'=> 'Reunionese',
                'ar'=> 'ريونيوني'
            ],
            [

                'en'=> 'Romanian',
                'ar'=> 'روماني'
            ],
            [

                'en'=> 'Russian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Rwandan',
                'ar'=> 'رواندا'
            ],
            [

                'en'=> '',
                'ar'=> 'Kittitian/Nevisian'
            ],
            [

                'en'=> 'St. Martian(French)',
                'ar'=> 'ساينت مارتني فرنسي'
            ],
            [

                'en'=> 'St. Martian(Dutch)',
                'ar'=> 'ساينت مارتني هولندي'
            ],
            [

                'en'=> 'St. Pierre and Miquelon',
                'ar'=> 'سان بيير وميكلوني'
            ],
            [

                'en'=> 'Saint Vincent and the Grenadines',
                'ar'=> 'سانت فنسنت وجزر غرينادين'
            ],
            [

                'en'=> 'Samoan',
                'ar'=> 'ساموي'
            ],
            [

                'en'=> 'Sammarinese',
                'ar'=> 'ماريني'
            ],
            [

                'en'=> 'Sao Tomean',
                'ar'=> 'ساو تومي وبرينسيبي'
            ],
            [

                'en'=> 'Saudi Arabian',
                'ar'=> 'سعودي'
            ],
            [

                'en'=> 'Senegalese',
                'ar'=> 'سنغالي'
            ],
            [

                'en'=> 'Serbian',
                'ar'=> 'صربي'
            ],
            [

                'en'=> 'Seychellois',
                'ar'=> 'سيشيلي'
            ],
            [

                'en'=> 'Sierra Leonean',
                'ar'=> 'سيراليوني'
            ],
            [

                'en'=> 'Singaporean',
                'ar'=> 'سنغافوري'
            ],
            [

                'en'=> 'Slovak',
                'ar'=> 'سولفاكي'
            ],
            [

                'en'=> 'Slovenian',
                'ar'=> 'سولفيني'
            ],
            [

                'en'=> 'Solomon Island',
                'ar'=> 'جزر سليمان'
            ],
            [

                'en'=> 'Somali',
                'ar'=> 'صومالي'
            ],
            [

                'en'=> 'South African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'South Georgia and the South Sandwich',
                'ar'=> 'لمنطقة القطبية الجنوبية'
            ],
            [

                'en'=> 'South Sudanese',
                'ar'=> 'سوادني جنوبي'
            ],
            [

                'en'=> 'Spanish',
                'ar'=> 'إسباني'
            ],
            [

                'en'=> 'St. Helenian',
                'ar'=> 'هيلاني'
            ],
            [

                'en'=> 'Sudanese',
                'ar'=> 'سوداني'
            ],
            [

                'en'=> 'Surinamese',
                'ar'=> 'سورينامي'
            ],
            [

                'en'=> 'Svalbardian/Jan Mayenian',
                'ar'=> 'سفالبارد ويان ماين'
            ],
            [

                'en'=> 'Swazi',
                'ar'=> 'سوازيلندي'
            ],
            [

                'en'=> 'Swedish',
                'ar'=> 'سويدي'
            ],
            [

                'en'=> 'Swiss',
                'ar'=> 'سويسري'
            ],
            [

                'en'=> 'Syrian',
                'ar'=> 'سوري'
            ],
            [

                'en'=> 'Taiwanese',
                'ar'=> 'تايواني'
            ],
            [

                'en'=> 'Tajikistani',
                'ar'=> 'طاجيكستاني'
            ],
            [

                'en'=> 'Tanzanian',
                'ar'=> 'تنزانيي'
            ],
            [

                'en'=> 'Thai',
                'ar'=> 'تايلندي'
            ],
            [

                'en'=> 'Timor-Lestian',
                'ar'=> 'تيموري'
            ],
            [

                'en'=> 'Togolese',
                'ar'=> 'توغي'
            ],
            [

                'en'=> 'Tokelaian',
                'ar'=> 'توكيلاوي'
            ],
            [

                'en'=> 'Tongan',
                'ar'=> 'تونغي'
            ],
            [

                'en'=> 'Trinidadian/Tobagonian',
                'ar'=> 'ترينيداد وتوباغو'
            ],
            [

                'en'=> 'Tunisian',
                'ar'=> 'تونسي'
            ],
            [

                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],
            [

                'en'=> 'Turkmen',
                'ar'=> 'تركمانستاني'
            ],
            [

                'en'=> 'Turks and Caicos Islands',
                'ar'=> 'جزر توركس وكايكوس'
            ],
            [

                'en'=> 'Tuvaluan',
                'ar'=> 'توفالي'
            ],
            [

                'en'=> 'Ugandan',
                'ar'=> 'أوغندي'
            ],
            [

                'en'=> 'Ukrainian',
                'ar'=> 'أوكراني'
            ],
            [

                'en'=> 'Emirati',
                'ar'=> 'إماراتي'
            ],
            [

                'en'=> 'British',
                'ar'=> 'بريطاني'
            ],
            [

                'en'=> 'American',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'US Minor Outlying Islander',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Uruguayan',
                'ar'=> 'أورغواي'
            ],
            [

                'en'=> 'Uzbek',
                'ar'=> 'أوزباكستاني'
            ],
            [

                'en'=> 'Vanuatuan',
                'ar'=> 'فانواتي'
            ],
            [

                'en'=> 'Venezuelan',
                'ar'=> 'فنزويلي'
            ],
            [

                'en'=> 'Vietnamese',
                'ar'=> 'فيتنامي'
            ],
            [

                'en'=> 'American Virgin Islander',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Vatican',
                'ar'=> 'فاتيكاني'
            ],
            [

                'en'=> 'Wallisian/Futunan',
                'ar'=> 'فوتوني'
            ],
            [

                'en'=> 'Sahrawian',
                'ar'=> 'صحراوي'
            ],
            [

                'en'=> 'Yemeni',
                'ar'=> 'يمني'
            ],
            [

                'en'=> 'Zambian',
                'ar'=> 'زامبياني'
            ],
            [

                'en'=> 'Zimbabwean',
                'ar'=> 'زمبابوي'
            ]
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
