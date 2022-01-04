<?php

namespace Faker\Provider\sq_AL;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    protected static $firstNameMale = [
        'Adriatik','Afrim','Agim','Agron','Alban','Altin','And','Aranit','Arben','Arbenor','Arber','Arberor','Arbi','Arbian',
        'Arbor','Ardian','Argjend','Arianit','Arion','Arlind','Armir','Artan','Artian','Artin','Arzen','Askan','Astrit','Atintan','Bamir','Bardh',
        'Bardhok','Bardhor','Bardhosh','Bardhush','Bardhyl','Bardibal','Baren','Barid','Bashkim','Bato','Bedar','Begatim','Begator',
        'Ben','Besart','Besian','Besim','Besmir','Besnik','Betim','Bilbil','Bled','Bledar','Bledian','Bledin','Bledion','Bledor','Blend','Blendar',
        'Blerim','Blert','Bletak','Bletar','Bujar','Bukuran','Bukurosh','Burim','Dajt','Dardan','Dasant','Dasar','Dashamir','Dasho','Dashurim',
        'Dëboran','Dedan','Dedë','Dëfrim','Dëshir','Detar','Devoll','Dijemir','Ditmir','Drin','Dritan','Dritjon','Dukagjin','Durim','Dhurim',
        'Edlir','Edrin','Egzon','Emirjon','Eno','Endrit','Enkel','Enkelan','Enkelejd','Erin','Erind','Eris','Ermal','Ermir','Erzen','Ëngjëll',
        'Fatbardh','Fatlum','Fatmir','Fatos','Festim','Fisnik','Fitor','Flamur','Florjon','Fluturak','Fluturim','Frang','Gac','Gash','Gaspër',
        'Gaz','Gazmend','Gazmir','Geldon','Genc','Gencian','Gent','Gentian','Gëzim','Guxim','Gjetan','Gjetë','Gjelbërim','Gjelosh','Gjergj','Gjin',
        'Gjokë','Gjon','Hekuran','Idlir','Ilir','Ilirian','Indrit','Jasemin','Jetmir','Jeton','Jetor','Jon','Kajan','Kastriot','Kelmend','Klajd',
        'Klest','Klevis','Kodran','Krenar','Kreshnik','Krojan','Kujtim','Kushtim','Kushtrim','Labian','Laid','Laidan',
        'Laidin','Lavdërim','Lavdim','Lavdimir','Lazrim','Lazror','Led','Ledian','Ledion','Lek','Lind','Lir','Liridon','Lirim','Lirjon','Luan',
        'Luftar','Luftim','Lul','Lulash','Lulëzim','Llesh','Mal','Margjel','Marin','Mat','Mentar','Mentor','Migjen','Mir','Mirash','Mirjet',
        'Mirjon','Mirush','Ndue','Neritan','Nertil','Nertilian','Ohri','Olt','Oltian','Oltion','Orges','Darli','Bruno','Pajtim','Pëllumb',
        'Përparim','Petrit','Pirro','Pirust','Prend','Preng','Redon','Rron','Saimir','Skënder','Skerd','Sokol','Shkëlqim','Shkëlzen','Shkëmb',
        'Shkumbin','Kristi','Kristjan','Shpend','Shpëtim','Tanush','Taulant','Teut','Tomë','Tomor','Tonin','Trëndafil','Trim','Tritan','Ukë','Ulqin',
        'Urim','Val','Emilian','Emiliano','Valdet','Gerjan','Gentian','Gert','Valmir','Ylber','Ylli','Zaimin','Zamir','Zef','Zymbyl',
        
    ];

    protected static $firstNameFemale = [
        'Afeida','Aferdita','Afrime','Aida','Adela','Alma','Albana','Albanona','Albanora','Albulena','Alketa','Ana','Andina','Anduena','Anila','Aranita',
        'Arba','Arbana','Arbena','Arbenore','Arberasha','Arbiana','Ardiana','Argjela','Arjeta','Arlinda','Armira','Arnisa','Artiana','Artina',
        'Aulona','Bajame','Bardha','Bashkime','Buena','Besa','Besara','Besarta','Besiana','Besmira','Betime','Bukurie','Dafina','Dajtina','Dalina',
        'Danja','Danjana','Dardana','Dardanesha','Dasantila','Dasara','Dashamira','Dava','Dëshira','Dija','Dila','Diljana','Durime','Dhurata',
        'Dhurime','Edlira','Edrina','Egzona','Elira','Elona','Emira','Emiranda','Emiriana','Emirjona','Enkela','Enkelana','Entela','Era',
        'Eranda','Erdita','Erëzake','Erina','Erinda','Erisa','Erza','Etleva','Ëngjëllushe','Fatbardha','Fatlume','Fatmira','Fitime','Fitore',
        'Frangë','Garentina','Gazmira','Genca','Genciana','Genta','Gentiana','Gëzime','Gonxhe','Iliresha','Jasemina','Jehona','Jehora','Jela',
        'Jerina','Jeta','Kastriote','Luliana','Luljeta','Olta','Oltiana','Ostrala','Pajtime','Panenta','Panjëz','Paqësime','Paqësore','Valbona',
        'Vera','Verake','Veriana','Verime','Verina','Verjona','Verore','Veroshe','Verusha','Vesa','Vilma','Vitore','Vjollca','Vjosa','Xixa',
        'Yllëza','Zamira','Zana',

    ];

    protected static $lastName = [
        'Çajupi','Çekani','Hoxha','Shehu','Prifti','Çela','Leka','Dervishi','Hysi','Rama','Dibra','Abazi','Sinani','Gjika','Kola','Kraja','Luka',
        'Duka','Gjoka','Murati','Kristi','Mulo','Muço','Andoni','Hasani','Koçi','Frashëri','Ruçi','Zeneli','Papa','Spahiu','Balla','Bushati',
        'Gjoni','Brahimi','Kanani','Alikaj','Arapi','Çaushi','Halili','Thanasi','Xhafa','Aliaj','Basha','Mezini','Sula','Agolli','Gjata','Haxhiu',
        'Jaho','Kodra','Lako','Mehmeti','Niko','Osmani','Pano','Bardhi','Cani','Deda','Demiri','Hasa','Kasa','Mema','Myftiu','Peçi','Shtylla',
        'Toska','Treska','Ymeri','Zaimi','Bezhani','Dedja','Duro','Kamberi','Kote','Laçi','Laze','Malaj','Marku','Hana','Shyti','Skënderi','Berberi',
        'Dede','Elezi','Gjergji','Jakupi','Koka','Kondi','Luarasi','Vata','Meçe','Nikolla','Rexha','Saraçi','Xhani','Dangëllia','Shalsi','Madhi',
        'Begu','Myslimi','Kaleshi',
    ];

    protected static $titleMale = ['Z.', 'Dr.', 'Ing.'];

    protected static $titleFemale = ['Znj', 'Dr.', 'Ing.'];

    private static $suffix = [];

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * TaxCode (CodiceFiscale)
     *
     * @see https://it.wikipedia.org/wiki/Codice_fiscale
     *
     * @return string
     */
    public static function taxId()
    {
        return strtoupper(static::bothify('??????##?##?###?'));
    }
}