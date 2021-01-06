<?php 
/**
 * CUSTOM FUNCTIONS FOR ASM PROJECT
 */

/**
 * SETTING UP THE JS SCRIPTS & LOCALIZE GLOBAL VARIABLE FOR AJAX
 */
function load_asm_globals() {

  wp_enqueue_script( 
    'ASM-GLOBAL-1', 
    get_template_directory_uri() . '/assets/dist/js/loadLocationToLocalStorage.js', 
    array('jquery'), 
    '2015121X', 
    false 
  );
  
  wp_localize_script('ASM-GLOBAL-1', 'asmGlobals1', array(
    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
  ));  

  wp_enqueue_script( 
    'ASM-GLOBAL-2', 
    get_template_directory_uri() . '/assets/dist/js/loadSportsToLocalStorage.js', 
    array('jquery'), 
    '2015121X', 
    false 
  );
  
  wp_localize_script('ASM-GLOBAL-2', 'asmGlobals2', array(
    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
  ));  
}
add_action('after_setup_theme', 'load_asm_globals');

// ASM DYNAMIC FILTER LOADER
function load_asm_dynamic_filter_scripts() {
  // LOCATION FILTER SCRIPT
	wp_enqueue_script( 
		'asm-locations-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMLocationFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121X', 
		false 
  );
  
  // SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'asm-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMSportsFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		false
  );

  // UNIVERSITY WOMEN'S SPORTS FILTER SCRIPT
  wp_enqueue_script( 
    'unv-womens-sports-filter-script', 
    get_template_directory_uri() . '/assets/dist/js/loadUnivWomenSportsFromLocalStorage.js', 
    array('jquery'), 
    '2020121X', 
    false
  );
  
  // UNIVERSITY MEN'S SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'unv-mens-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadUnivMenSportsFromLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		false
  );
  

}
// add_action('wp_enqueue_scripts', 'load_asm_dynamic_filter_scripts');

/**
 * LOG OUT REDIRECTION TO HOME
 */
function asm_redirect_after_logout(){
  wp_redirect( '/' );
  exit();
}
add_action('wp_logout','asm_redirect_after_logout');

/**
  * LOGIN PAGE REGISTER URL CHANGE  
  */
 add_filter( 'register_url', 'asm_register_url' );
  function asm_register_url( $url ) {
      if( is_admin() ) {
          return $url;
      }
      return "/signup/";
  }

/**
 * ASM ATH INDX SVG FLAG ICON BUILDER FUNCTION
 */

 function get_country_flag_icon($country) {
   // Icon Variable
   $country_flag_icon = '';
   // Country Switcher
   switch ($country) {
    
    case 'Afghanistan': 
    $country_flag_icon = 'flag-icon-af';
    break;
    case 'Akrotiri': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Albania': 
    $country_flag_icon = 'flag-icon-al';
    break;
    case 'Algeria': 
    $country_flag_icon = 'flag-icon-dz';
    break;
    case 'American-Samoa': 
    $country_flag_icon = 'flag-icon-as';
    break;
    case 'Andorra': 
    $country_flag_icon = 'flag-icon-ad';
    break;
    case 'Angola': 
    $country_flag_icon = 'flag-icon-ao';
    break;
    case 'Anguilla': 
    $country_flag_icon = 'flag-icon-ai';
    break;
    case 'Antarctica': 
    $country_flag_icon = 'flag-icon-aq';
    break;
    case 'Antigua-and-Barbuda': 
    $country_flag_icon = 'flag-icon-ag';
    break;
    case 'Argentina': 
    $country_flag_icon = 'flag-icon-ar';
    break;
    case 'Armenia': 
    $country_flag_icon = 'flag-icon-am';
    break;
    case 'Aruba': 
    $country_flag_icon = 'flag-icon-aw';
    break;
    case 'Ashmore-and-Cartier-Islands': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Australia': 
    $country_flag_icon = 'flag-icon-au';
    break;
    case 'Austria': 
    $country_flag_icon = 'flag-icon-at';
    break;
    case 'Azerbaijan': 
    $country_flag_icon = 'flag-icon-az';
    break;
    case 'The-Bahamas': 
    $country_flag_icon = 'flag-icon-bs';
    break;
    case 'Bahrain': 
    $country_flag_icon = 'flag-icon-bh';
    break;
    case 'Bangladesh': 
    $country_flag_icon = 'flag-icon-bd';
    break;
    case 'Barbados': 
    $country_flag_icon = 'flag-icon-bb';
    break;
    case 'Bassas-da-India': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Belarus': 
    $country_flag_icon = 'flag-icon-by';
    break;
    case 'Belgium': 
    $country_flag_icon = 'flag-icon-be';
    break;
    case 'Belize': 
    $country_flag_icon = 'flag-icon-bz';
    break;
    case 'Benin': 
    $country_flag_icon = 'flag-icon-bj';
    break;
    case 'Bermuda': 
    $country_flag_icon = 'flag-icon-bm';
    break;
    case 'Bhutan': 
    $country_flag_icon = 'flag-icon-bt';
    break;
    case 'Bolivia': 
    $country_flag_icon = 'flag-icon-bo';
    break;
    case 'Bosnia-and-Herzegovina': 
    $country_flag_icon = 'flag-icon-ba';
    break;
    case 'Botswana': 
    $country_flag_icon = 'flag-icon-bw';
    break;
    case 'Bouvet-Island': 
    $country_flag_icon = 'flag-icon-bv';
    break;
    case 'Brazil': 
    $country_flag_icon = 'flag-icon-br';
    break;
    case 'British-Indian-Ocean-Territory': 
    $country_flag_icon = 'flag-icon-io';
    break;
    case 'British-Virgin-Islands': 
    $country_flag_icon = 'flag-icon-vg';
    break;
    case 'Brunei': 
    $country_flag_icon = 'flag-icon-bn';
    break;
    case 'Bulgaria': 
    $country_flag_icon = 'flag-icon-bg';
    break;
    case 'Burkina-Faso': 
    $country_flag_icon = 'flag-icon-bf';
    break;
    case 'Burundi': 
    $country_flag_icon = 'flag-icon-bi';
    break;
    case 'Cambodia': 
    $country_flag_icon = 'flag-icon-kh';
    break;
    case 'Cameron': 
    $country_flag_icon = 'flag-icon-cm';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Cape-Verde': 
    $country_flag_icon = 'flag-icon-cv';
    break;
    case 'Cayman-Islands': 
    $country_flag_icon = 'flag-icon-ky';
    break;
    case 'Central-Africa-Republic': 
    $country_flag_icon = 'flag-icon-cf';
    break;
    case 'Chad': 
    $country_flag_icon = 'flag-icon-td';
    break;
    case 'Chile': 
    $country_flag_icon = 'flag-icon-cl';
    break;
    case 'China': 
    $country_flag_icon = 'flag-icon-cn';
    break;
    case 'Christmas-Island': 
    $country_flag_icon = 'flag-icon-cx';
    break;
    case 'Clipperton-Island': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Cocos-(Keeling)-Islands': 
    $country_flag_icon = 'flag-icon-cc';
    break;
    case 'Colombia': 
    $country_flag_icon = 'flag-icon-co';
    break;
    case 'Comoros': 
    $country_flag_icon = 'flag-icon-km';
    break;
    case 'Democratic-Republic-of-the-Congo': 
    $country_flag_icon = 'flag-icon-cd';
    break;
    case 'Republic-of-the-Congo': 
    $country_flag_icon = 'flag-icon-cg';
    break;
    case 'Cook-Islands': 
    $country_flag_icon = 'flag-icon-ck';
    break;
    case 'Costa-Rica': 
    $country_flag_icon = 'flag-icon-cr';
    break;
    case 'Cote-d\'Ivoire': 
    $country_flag_icon = 'flag-icon-ci';
    break;
    case 'Croatia': 
    $country_flag_icon = 'flag-icon-hr';
    break;
    case 'Cuba': 
    $country_flag_icon = 'flag-icon-cu';
    break;
    case 'Cyprus': 
    $country_flag_icon = 'flag-icon-cy';
    break;
    case 'Czech-Republic': 
    $country_flag_icon = 'flag-icon-cz';
    break;
    case 'Denmark': 
    $country_flag_icon = 'flag-icon-dk';
    break;
    case 'Djibouti': 
    $country_flag_icon = 'flag-icon-dj';
    break;
    case 'Dominica': 
    $country_flag_icon = 'flag-icon-dm';
    break;
    case 'Dominican-Republic': 
    $country_flag_icon = 'flag-icon-do';
    break;
    case 'Ecuador': 
    $country_flag_icon = 'flag-icon-ec';
    break;
    case 'Egypt': 
    $country_flag_icon = 'flag-icon-eg';
    break;
    case 'El-Salvador': 
    $country_flag_icon = 'flag-icon-sv';
    break;
    case 'Equatorial-Guinea': 
    $country_flag_icon = 'flag-icon-gq';
    break;
    case 'Eritrea': 
    $country_flag_icon = 'flag-icon-er';
    break;
    case 'Estonia': 
    $country_flag_icon = 'flag-icon-ee';
    break;
    case 'Ethiopia': 
    $country_flag_icon = 'flag-icon-et';
    break;
    case 'Falkland-Islands': 
    $country_flag_icon = 'flag-icon-fk';
    break;
    case 'Faroe-Islands': 
    $country_flag_icon = 'flag-icon-fo';
    break;
    case 'Fiji': 
    $country_flag_icon = 'flag-icon-fj';
    break;
    case 'Finland': 
    $country_flag_icon = 'flag-icon-fi';
    break;
    case 'France': 
    $country_flag_icon = 'flag-icon-fr';
    break;
    case 'French-Guiana': 
    $country_flag_icon = 'flag-icon-gf';
    break;
    case 'French-Polynesia': 
    $country_flag_icon = 'flag-icon-pf';
    break;
    case 'French-Southern-and-Antarctic-Lands': 
    $country_flag_icon = 'flag-icon-tf';
    break;
    case 'Gabon': 
    $country_flag_icon = 'flag-icon-ga';
    break;
    case 'The-Gambia': 
    $country_flag_icon = 'flag-icon-gm';
    break;
    case 'Georgia': 
    $country_flag_icon = 'flag-icon-ge';
    break;
    case 'Germany': 
    $country_flag_icon = 'flag-icon-de';
    break;
    case 'Ghana': 
    $country_flag_icon = 'flag-icon-gh';
    break;
    case 'Gibraltar': 
    $country_flag_icon = 'flag-icon-gi';
    break;
    case 'Glorioso-Islands': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Greece': 
    $country_flag_icon = 'flag-icon-gr';
    break;
    case 'Greenland': 
    $country_flag_icon = 'flag-icon-gl';
    break;
    case 'Grenada': 
    $country_flag_icon = 'flag-icon-gd';
    break;
    case 'Guadeloupe': 
    $country_flag_icon = 'flag-icon-gp';
    break;
    case 'Guam': 
    $country_flag_icon = 'flag-icon-gu';
    break;
    case 'Guatemala': 
    $country_flag_icon = 'flag-icon-gt';
    break;
    case 'Guernsey': 
    $country_flag_icon = 'flag-icon-gg';
    break;
    case 'Guinea': 
    $country_flag_icon = 'flag-icon-gn';
    break;
    case 'Guinea-Bissau': 
    $country_flag_icon = 'flag-icon-gw';
    break;
    case 'Guyana': 
    $country_flag_icon = 'flag-icon-gy';
    break;
    case 'Haiti': 
    $country_flag_icon = 'flag-icon-ht';
    break;
    case 'Heard-Island-and-McDonald-Islands': 
    $country_flag_icon = 'flag-icon-hm';
    break;
    case 'Holy-See': 
    $country_flag_icon = 'flag-icon-va';
    break;
    case 'Honduras': 
    $country_flag_icon = 'flag-icon-hn';
    break;
    case 'Hong-Kong': 
    $country_flag_icon = 'flag-icon-hk';
    break;
    case 'Hungary': 
    $country_flag_icon = 'flag-icon-hu';
    break;
    case 'Iceland': 
    $country_flag_icon = 'flag-icon-is';
    break;
    case 'India': 
    $country_flag_icon = 'flag-icon-in';
    break;
    case 'Indonesia': 
    $country_flag_icon = 'flag-icon-id';
    break;
    case 'Iran': 
    $country_flag_icon = 'flag-icon-ir';
    break;
    case 'Iraq': 
    $country_flag_icon = 'flag-icon-iq';
    break;
    case 'Ireland': 
    $country_flag_icon = 'flag-icon-ie';
    break;
    case 'Isle-of-Man': 
    $country_flag_icon = 'flag-icon-im';
    break;
    case 'Israel': 
    $country_flag_icon = 'flag-icon-il';
    break;
    case 'Italy': 
    $country_flag_icon = 'flag-icon-it';
    break;
    case 'Jamaica': 
    $country_flag_icon = 'flag-icon-jm';
    break;
    case 'Japan': 
    $country_flag_icon = 'flag-icon-jp';
    break;
    case 'Jersey': 
    $country_flag_icon = 'flag-icon-je';
    break;
    case 'Jordan': 
    $country_flag_icon = 'flag-icon-jo';
    break;
    case 'Kazakhstan': 
    $country_flag_icon = 'flag-icon-kz';
    break;
    case 'Kenya': 
    $country_flag_icon = 'flag-icon-ke';
    break;
    case 'Kiribati': 
    $country_flag_icon = 'flag-icon-ki';
    break;
    case 'North-Korea': 
    $country_flag_icon = 'flag-icon-kr';
    break;
    case 'South-Korea': 
    $country_flag_icon = 'flag-icon-kp';
    break;
    case 'Kuwait': 
    $country_flag_icon = 'flag-icon-kw';
    break;
    case 'Kyrgyzstan': 
    $country_flag_icon = 'flag-icon-kg';
    break;
    case 'Laos': 
    $country_flag_icon = 'flag-icon-ls';
    break;
    case 'Latvia': 
    $country_flag_icon = 'flag-icon-lv';
    break;
    case 'Lebanon': 
    $country_flag_icon = 'flag-icon-lb';
    break;
    case 'Lesotho': 
    $country_flag_icon = 'flag-icon-ls';
    break;
    case 'Liberia': 
    $country_flag_icon = 'flag-icon-lr';
    break;
    case 'Libya': 
    $country_flag_icon = 'flag-icon-ly';
    break;
    case 'Liechtenstein': 
    $country_flag_icon = 'flag-icon-li';
    break;
    case 'Lithuania': 
    $country_flag_icon = 'flag-icon-lt';
    break;
    case 'Luxembourg': 
    $country_flag_icon = 'flag-icon-lu';
    break;
    case 'Macau': 
    $country_flag_icon = 'flag-icon-mo';
    break;
    case 'Macedonia': 
    $country_flag_icon = 'flag-icon-mk';
    break;
    case 'Madagascar': 
    $country_flag_icon = 'flag-icon-mg';
    break;
    case 'Malawi': 
    $country_flag_icon = 'flag-icon-mw';
    break;
    case 'Malaysia': 
    $country_flag_icon = 'flag-icon-my';
    break;
    case 'Maldives': 
    $country_flag_icon = 'flag-icon-mv';
    break;
    case 'Mali': 
    $country_flag_icon = 'flag-icon-ml';
    break;
    case 'Malta': 
    $country_flag_icon = 'flag-icon-mt';
    break;
    case 'Marshall-Islands': 
    $country_flag_icon = 'flag-icon-mh';
    break;
    case 'Martinique': 
    $country_flag_icon = 'flag-icon-mq';
    break;
    case 'Mauritania': 
    $country_flag_icon = 'flag-icon-mr';
    break;
    case 'Mauritius': 
    $country_flag_icon = 'flag-icon-mu';
    break;
    case 'Mayotte': 
    $country_flag_icon = 'flag-icon-yt';
    break;
    case 'Mexico': 
    $country_flag_icon = 'flag-icon-mx';
    break;
    case 'Federated-States-of-Micronesia': 
    $country_flag_icon = 'flag-icon-fm';
    break;
    case 'Moldova': 
    $country_flag_icon = 'flag-icon-md';
    break;
    case 'Monaco': 
    $country_flag_icon = 'flag-icon-mc';
    break;
    case 'Mongolia': 
    $country_flag_icon = 'flag-icon-mn';
    break;
    case 'Montserrat': 
    $country_flag_icon = 'flag-icon-ms';
    break;
    case 'Morocco': 
    $country_flag_icon = 'flag-icon-ma';
    break;
    case 'Mozambique': 
    $country_flag_icon = 'flag-icon-mz';
    break;
    case 'Namibia': 
    $country_flag_icon = 'flag-icon-na';
    break;
    case 'Nauru': 
    $country_flag_icon = 'flag-icon-nr';
    break;
    case 'Nepal': 
    $country_flag_icon = 'flag-icon-np';
    break;
    case 'Netherlands': 
    $country_flag_icon = 'flag-icon-nl';
    break;
    case 'New-Caledonia': 
    $country_flag_icon = 'flag-icon-nc';
    break;
    case 'Nicaragua': 
    $country_flag_icon = 'flag-icon-ni';
    break;
    case 'Niger': 
    $country_flag_icon = 'flag-icon-ne';
    break;
    case 'Nigeria': 
    $country_flag_icon = 'flag-icon-ng';
    break;
    case 'Niue': 
    $country_flag_icon = 'flag-icon-nu';
    break;
    case 'Norfolk-Island': 
    $country_flag_icon = 'flag-icon-nf';
    break;
    case 'Northern-Mariana-Islands': 
    $country_flag_icon = 'flag-icon-mp';
    break;
    case 'Norway': 
    $country_flag_icon = 'flag-icon-no';
    break;
    case 'Oman': 
    $country_flag_icon = 'flag-icon-om';
    break;
    case 'Pakistan': 
    $country_flag_icon = 'flag-icon-pk';
    break;
    case 'Palau': 
    $country_flag_icon = 'flag-icon-pw';
    break;
    case 'Panama': 
    $country_flag_icon = 'flag-icon-pa';
    break;
    case 'Papua-New-Guinea': 
    $country_flag_icon = 'flag-icon-pg';
    break;
    case 'Paraguay': 
    $country_flag_icon = 'flag-icon-py';
    break;
    case 'Peru': 
    $country_flag_icon = 'flag-icon-pe';
    break;
    case 'Philippines': 
    $country_flag_icon = 'flag-icon-ph';
    break;
    case 'Pitcairn-Islands': 
    $country_flag_icon = 'flag-icon-pn';
    break;
    case 'Poland': 
    $country_flag_icon = 'flag-icon-pl';
    break;
    case 'Portugal': 
    $country_flag_icon = 'flag-icon-pt';
    break;
    case 'Puerto-Rico': 
    $country_flag_icon = 'flag-icon-pr';
    break;
    case 'Qatar': 
    $country_flag_icon = 'flag-icon-qa';
    break;
    case 'Reunion': 
    $country_flag_icon = 'flag-icon-re';
    break;
    case 'Romania': 
    $country_flag_icon = 'flag-icon-ro';
    break;
    case 'Russia': 
    $country_flag_icon = 'flag-icon-ru';
    break;
    case 'Rwanda': 
    $country_flag_icon = 'flag-icon-rw';
    break;
    case 'Saint-Helena': 
    $country_flag_icon = 'flag-icon-sh';
    break;
    case 'Saint-Kitts-and-Nevis': 
    $country_flag_icon = 'flag-icon-kn';
    break;
    case 'Saint-Lucia': 
    $country_flag_icon = 'flag-icon-lc';
    break;
    case 'Saint-Pierre-and-Miquelon': 
    $country_flag_icon = 'flag-icon-pm';
    break;
    case 'Saint-Vincent-and-the-Grenadines': 
    $country_flag_icon = 'flag-icon-vc';
    break;
    case 'Samoa': 
    $country_flag_icon = 'flag-icon-ws';
    break;
    case 'San-Marino': 
    $country_flag_icon = 'flag-icon-sm';
    break;
    case 'Sao-Tome-and-Principe': 
    $country_flag_icon = 'flag-icon-st';
    break;
    case 'Saudi-Arabia': 
    $country_flag_icon = 'flag-icon-sa';
    break;
    case 'Senegal': 
    $country_flag_icon = 'flag-icon-sn';
    break;
    case 'Serbia-and-Montenegro': 
    $country_flag_icon = 'flag-icon-rs';
    break;
    case 'Seychelles': 
    $country_flag_icon = 'flag-icon-sc';
    break;
    case 'Sierra-Leone': 
    $country_flag_icon = 'flag-icon-sl';
    break;
    case 'Singapore': 
    $country_flag_icon = 'flag-icon-sg';
    break;
    case 'Slovakia': 
    $country_flag_icon = 'flag-icon-sk';
    break;
    case 'Slovenia': 
    $country_flag_icon = 'flag-icon-si';
    break;
    case 'Solomon-Islands': 
    $country_flag_icon = 'flag-icon-sb';
    break;
    case 'Somalia': 
    $country_flag_icon = 'flag-icon-so';
    break;
    case 'South-Africa': 
    $country_flag_icon = 'flag-icon-za';
    break;
    case 'South-Georgia-and-the-South-Sandwich-Islands': 
    $country_flag_icon = 'flag-icon-gs';
    break;
    case 'Spain': 
    $country_flag_icon = 'flag-icon-es';
    break;
    case 'Sri-Lanka': 
    $country_flag_icon = 'flag-icon-lk';
    break;
    case 'Sudan': 
    $country_flag_icon = 'flag-icon-sd';
    break;
    case 'Suriname': 
    $country_flag_icon = 'flag-icon-sr';
    break;
    case 'Svalbard': 
    $country_flag_icon = 'flag-icon-sj';
    break;
    case 'Sweden': 
    $country_flag_icon = 'flag-icon-se';
    break;
    case 'Switzerland': 
    $country_flag_icon = 'flag-icon-ch';
    break;
    case 'Syria': 
    $country_flag_icon = 'flag-icon-sy';
    break;
    case 'Taiwan': 
    $country_flag_icon = 'flag-icon-tw';
    break;
    case 'Tajikistan': 
    $country_flag_icon = 'flag-icon-tj';
    break;
    case 'Tanzania': 
    $country_flag_icon = 'flag-icon-tz';
    break;
    case 'Thailand': 
    $country_flag_icon = 'flag-icon-th';
    break;
    case 'Timor-Leste': 
    $country_flag_icon = 'flag-icon-tl';
    break;
    case 'Togo': 
    $country_flag_icon = 'flag-icon-tg';
    break;
    case 'Tokelau': 
    $country_flag_icon = 'flag-icon-tk';
    break;
    case 'Tonga': 
    $country_flag_icon = 'flag-icon-to';
    break;
    case 'Trinidad-and-Tobago': 
    $country_flag_icon = 'flag-icon-tt';
    break;
    case 'Tunisia': 
    $country_flag_icon = 'flag-icon-tn';
    break;
    case 'Turkey': 
    $country_flag_icon = 'flag-icon-tr';
    break;
    case 'Turkmenistan': 
    $country_flag_icon = 'flag-icon-tm';
    break;
    case 'Turks-and-Caicos-Islands': 
    $country_flag_icon = 'flag-icon-tc';
    break;
    case 'Tuvalu': 
    $country_flag_icon = 'flag-icon-tv';
    break;
    case 'Uganda': 
    $country_flag_icon = 'flag-icon-ug';
    break;
    case 'Ukraine': 
    $country_flag_icon = 'flag-icon-ua';
    break;
    case 'United-Arab-Emirates': 
    $country_flag_icon = 'flag-icon-ae';
    break;
    case 'Uruguay': 
    $country_flag_icon = 'flag-icon-uy';
    break;
    case 'Uzbekistan': 
    $country_flag_icon = 'flag-icon-uz';
    break;
    case 'United-States': 
    $country_flag_icon = 'flag-icon-us';
    break; 
    case 'United-Kingdom': 
    $country_flag_icon = 'flag-icon-gb';
    break;
    case 'Vanuatu': 
    $country_flag_icon = 'flag-icon-vu';
    break;
    case 'Venezuela': 
    $country_flag_icon = 'flag-icon-ve';
    break;
    case 'Vietnam': 
    $country_flag_icon = 'flag-icon-vn';
    break;
    case 'Virgin-Islands': 
    $country_flag_icon = 'flag-icon-vg';
    break;
    case 'Wallis-and-Futuna': 
    $country_flag_icon = 'flag-icon-wf';
    break;
    case 'Western-Sahara': 
    $country_flag_icon = 'flag-icon-eh';
    break;
    case 'Yemen': 
    $country_flag_icon = 'flag-icon-ye';
    break;
    case 'Zambia': 
    $country_flag_icon = 'flag-icon-zm';
    break;
    case 'Zimbabwe': 
    $country_flag_icon = 'flag-icon-zw';
    break;
    
    default: 
    $country_flag_icon = 'flag-icon-us';
   }

   return $country_flag_icon;
 }