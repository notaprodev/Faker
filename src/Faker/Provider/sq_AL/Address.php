<?php

namespace Faker\Provider\sq_AL;

class Address extends \Faker\Provider\Address
{
    /**
     * @see https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Albania
     */
    protected static $city = [
        'Belsh','Berat','Bulqizë','Cërrik','Delvinë','Devoll','Dibër','Dimal','Divjakë','Dropull','Durrës','Elbasan','Fier','Finiq','Fushë-Arrëz',
        'Gjirokastër','Gramsh','Has','Himarë','Kamëz','Kavajë','Këlcyrë','Klos','Kolonjë','Konispol','Korçë','Krujë','Kuçovë','Kukës','Kurbin',
        'Lezhë','Libohovë','Librazhd','Lushnjë','Malësi e Madhe','Maliq','Mallakastër','Mat','Memaliaj','Mirditë','Patos','Peqin','Përmet',
        'Pogradec','Poliçan','Prrenjas','Pukë','Pustec','Roskovec','Rrogozhinë','Sarandë','Selenicë','Shijak','Shkodër','Skrapa','Tepelenë',
        'Tiranë','Tropojë','Vau i Dejës','Vlorë','Vorë'
    ];
    /**
     * @see https://en.wikipedia.org/wiki/Category:Streets_in_Tirana
     */

    protected static $street = [
        'Tish Daija', 'Avni Rustemi', 'Jordan Misja', 'Agim Nasufi','Naim Frashri', 'Migjeni', 'Pjeter Pograni',
        'Agim Jashari', 'Isa Boletini','Pjeter Budi', 'Fran Vasa', 'Bajram Curri', 'Azem Galica', 'Albanopoli',
        'Egnaita', 'Lek Dukagjini', 'Lefter Talo', 'Liri Gero', 'Lidhja e Prizrenit', 'Skernderbej', 'Kupa',
        'Haki Taha', 'Faik Konica', 'Isuf Xhelili', 'Ali Asllani', 'Fato Berberi', 'Dardania', 'Princ Vidi',
    ];
    /**
     * @see https://en.wikipedia.org/wiki/Foreign_relations_of_Albania
     */
    protected static $country = [
        'Afganistan', 'Algjeria', 'American Samoa', 'Andorra', 'Angola','Antartide (territori a sud del 60° parallelo)', 'Argjentina', 'Armenia',
        'Australia', 'Austria', 'Azerbaigjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Bjellorusia', 'Belgjike', 'Bermuda', 'Bhutan', 
        'Bolivia', 'Bosnia dhe Herzegovina', 'Brazil', 'Bullgaria','Kambogjia', 'Kamerun', 'Kanada', 'Afrika e jugut', 'Çad', 'Çili', 'Kina',
         'Kolombia', 'Kongo', 'Kosta Rika', 'Kroacia', 'Kuba', 'Çipro', 'Republika Çeke','Danimarka', 'Republika Dominikane','Ekuador',
          'El Salvador', 'Estonia', 'Etiopia', 'Figji', 'Finland', 'Franc', 'Gabon', 'Gambia', 'Georgia', 'Germania', 'Gana', 'Gjibilteri', 
          'Greqia', 'Guatemala', 'Guinea','Haiti', 'Vatikani', 'Honduras', 'Hong Kong', 'Ungheria','Islanda', 'India', 'Indonesia', 'Iran', 
          'Irak', 'Irlanda', 'Izrael', 'Itali','Gjamaika', 'Japonia','Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Kuvait', 'Letonia', 'Lebanon', 
          'Liberia', 'Litenshtain', 'Lituania', 'Luksemburg','Marok', 'Macedonia', 'Madagaskar', 'Malesia', 'Maldive', 'Mali', 'Malta', 'Meksika',
           'Mikronezia', 'Moldova', 'Mongolia', 'Mali i zi', 'Namibia', 'Nepal', 'Olanda', 'Nuova Caledonia', 'Zelenada e re','Shtete e bashkuara te Amerikes'
         'Nikaragua', 'Nigeria', 'Norvegia', 'Oman','Pakistan', 'Palestina', 'Panama', 'Paraguai', 'Peru', 'Filipine', 'Polonia', 'Portugalia',
          'Porto Rico','Katar', 'Rumani', 'Rusi', 'Samoa', 'San Marino', 'Arabia Saudite', 'Senegal', 'Serbia', 'Sierra Leone', 'Singapore', 
          'Slovenia', 'Somalia', 'Spanja', 'Sri Lanka', 'Sudan', 'Zvicra', 'Siria','Taivan', 'Tagjikistan', 'Tanzania', 'Tailanda', 
        'Tunisia', 'Turçia', 'Turkmenistan','Uganda', 'Ukraina', 'Emiratet e bashkuara Arabe', , 'Uzbekistan',, 'Venezuela', 'Vietnam',
        'Jemen','Zambia', 'Zimbabwe',
    ];
    protected static $buildingNumber = ['%##', '%#', '%'];
    protected static $streetSuffix = [
        'Sheshi', 'Bulevardi', 'Rreth-rrotullimi', 'Kryqezimi', 'Rruga'
    ];
    /**
     * @see https://en.wikipedia.org/wiki/Postal_codes_in_Albania
     */
    protected static $postcode = ['####'];
    
    protected static $cityFormats = [
        '{{cityName}}',
    ];
    protected static $streetNameFormats = [
        'Rruga {{street}} {{buildingNumber}}',
    ];
    protected static $addressFormats = [
        "{{streetSuffix}}{{street}}\n{{city}}, {{postcode}}",
    ];
    public static function cityName()
    {
        return static::randomElement(static::$city);
    }

}