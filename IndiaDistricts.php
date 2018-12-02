<?php

/**
 * Return a list of all the counties
 */

function indiadisttricts_listdistricts() {
  $indiadistricts =
array(

  1228 => array( // Andaman Nicobar
      'Nicobar',
      'North Middle Andaman',
      'South Andaman'
        ),

  1202 => array( // Andhra Pradesh
      'Anantapur',
      'Chittoor',
      'East Godavari',
      'Guntur',
      'Kadapa',
      'Krishna',
      'Kurnool',
      'Nellore',
      'Prakasam',
      'Srikakulam',
      'Visakhapatnam',
      'Vizianagaram',
      'West Godavari',
        ),

  1203 => array( // Arunachal Pradesh
      'Anjaw',
      'Central Siang',
      'Changlang',
      'Dibang Valley',
      'East Kameng',
      'East Siang',
      'Kra Daadi',
      'Kurung Kumey',
      'Lohit',
      'Longding',
      'Lower Dibang Valley',
      'Lower Siang',
      'Lower Subansiri',
      'Namsai',
      'Papum Pare',
      'Tawang',
      'Tirap',
      'Upper Siang',
      'Upper Subansiri',
      'West Kameng',
      'West Siang',
        ),

  1204 => array( // Assam
      'Baksa',
      'Barpeta',
      'Biswanath',
      'Bongaigaon',
      'Cachar',
      'Charaideo',
      'Chirang',
      'Darrang',
      'Dhemaji',
      'Dhubri',
      'Dibrugarh',
      'Dima Hasao',
      'Goalpara',
      'Golaghat',
      'Hailakandi',
      'Hojai',
      'Jorhat',
      'Kamrup',
      'Kamrup Metropolitan',
      'Karbi Anglong',
      'Karimganj',
      'Kokrajhar',
      'Lakhimpur',
      'Majuli',
      'Morigaon',
      'Nagaon',
      'Nalbari',
      'Sivasagar',
      'Sonitpur',
      'South Salmara-Mankachar',
      'Tinsukia',
      'Udalguri',
      'West Karbi Anglong',
        ),

    1205 => array( // Bihar
      'Araria',
      'Arwal',
      'Aurangabad',
      'Banka',
      'Begusarai',
      'Bhagalpur',
      'Bhojpur',
      'Buxar',
      'Darbhanga',
      'East Champaran',
      'Gaya',
      'Gopalganj',
      'Jamui',
      'Jehanabad',
      'Kaimur',
      'Katihar',
      'Khagaria',
      'Kishanganj',
      'Lakhisarai',
      'Madhepura',
      'Madhubani',
      'Munger',
      'Muzaffarpur',
      'Nalanda',
      'Nawada',
      'Patna',
      'Purnia',
      'Rohtas',
      'Saharsa',
      'Samastipur',
      'Saran',
      'Sheikhpura',
      'Sheohar',
      'Sitamarhi',
      'Siwan',
      'Supaul',
      'Vaishali',
      'West Champaran',
        ),

    10321 => array( // Chandigarh
      'Chandigarh',
    ),

    1206 => array( // Chhattisgarh
      'Balod',
      'Baloda Bazar',
      'Balrampur',
      'Bastar',
      'Bemetara',
      'Bijapur',
      'Bilaspur',
      'Dantewada',
      'Dhamtari',
      'Durg',
      'Gariaband',
      'Janjgir Champa',
      'Jashpur',
      'Kabirdham',
      'Kanker',
      'Kondagaon',
      'Korba',
      'Koriya',
      'Mahasamund',
      'Mungeli',
      'Narayanpur',
      'Raigarh',
      'Raipur',
      'Rajnandgaon',
      'Sukma',
      'Surajpur',
      'Surguja'
    ),

    1229 => array( // Dadra Nagar Haveli
      'Dadra Nagar Haveli'
    ),

    1230 => array( // Daman Diu
      'Daman',
      'Diu'
    ),

    1231 => array( // Delhi
      'Central Delhi',
      'East Delhi',
      'New Delhi',
      'North Delhi',
      'North East Delhi',
      'North West Delhi',
      'Shahdara',
      'South Delhi',
      'South East Delhi',
      'South West Delhi',
      'West Delhi'
    ),

    1207 => array( // Goa
      'North Goa',
      'South Goa'
    ),

    1208 => array( // Gujarat
      'Ahmedabad',
      'Amreli',
      'Anand',
      'Aravalli',
      'Banaskantha',
      'Bharuch',
      'Bhavnagar',
      'Botad',
      'Chhota Udaipur',
      'Dahod',
      'Dang',
      'Devbhoomi Dwarka',
      'Gandhinagar',
      'Gir Somnath',
      'Jamnagar',
      'Junagadh',
      'Kheda',
      'Kutch',
      'Mahisagar',
      'Mehsana',
      'Morbi',
      'Narmada',
      'Navsari',
      'Panchmahal',
      'Patan',
      'Porbandar',
      'Rajkot',
      'Sabarkantha',
      'Surat',
      'Surendranagar',
      'Tapi',
      'Vadodara',
      'Valsad'
    ),

    1209 => array( // Haryana
      'Ambala',
      'Bhiwani',
      'Charkhi Dadri',
      'Faridabad',
      'Fatehabad',
      'Gurugram *',
      'Hisar',
      'Jhajjar',
      'Jind',
      'Kaithal',
      'Karnal',
      'Kurukshetra',
      'Mahendragarh',
      'Mewat',
      'Palwal',
      'Panchkula',
      'Panipat',
      'Rewari',
      'Rohtak',
      'Sirsa',
      'Sonipat',
      'Yamunanagar'
    ),

    1210 => array( // Himachal Pradesh
      'Bilaspur',
      'Chamba',
      'Hamirpur',
      'Kangra',
      'Kinnaur',
      'Kullu',
      'Lahaul Spiti',
      'Mandi',
      'Shimla',
      'Sirmaur',
      'Solan',
      'Una'
    ),

    1211 => array( // Jammu and Kashmir
      'Anantnag',
      'Bandipora',
      'Baramulla',
      'Budgam',
      'Doda',
      'Ganderbal',
      'Jammu',
      'Kargil',
      'Kathua',
      'Kishtwar',
      'Kulgam',
      'Kupwara',
      'Leh',
      'Poonch',
      'Pulwama',
      'Rajouri',
      'Ramban',
      'Reasi',
      'Samba',
      'Shopian',
      'Srinagar',
      'Udhampur',
    ),

    1212 => array( // Jharkhand
      'Bokaro',
      'Chatra',
      'Deoghar',
      'Dhanbad',
      'Dumka',
      'East Singhbhum',
      'Garhwa',
      'Giridih',
      'Godda',
      'Gumla',
      'Hazaribagh',
      'Jamtara',
      'Khunti',
      'Koderma',
      'Latehar',
      'Lohardaga',
      'Pakur',
      'Palamu',
      'Ramgarh',
      'Ranchi',
      'Sahebganj',
      'Seraikela Kharsawan',
      'Simdega',
      'West Singhbhum'
    ),

    1201=> array( // Karnataka
      'Bagalkot',
      'Bangalore Rural',
      'Bangalore Urban',
      'Belgaum',
      'Bellary',
      'Bidar',
      'Chamarajanagar',
      'Chikkaballapur',
      'Chikkamagaluru',
      'Chitradurga',
      'Dakshina Kannada',
      'Davanagere',
      'Dharwad',
      'Gadag',
      'Gulbarga',
      'Hassan',
      'Haveri',
      'Kodagu',
      'Kolar',
      'Koppal',
      'Mandya',
      'Mysore',
      'Raichur',
      'Ramanagara',
      'Shimoga',
      'Tumkur',
      'Udupi',
      'Uttara Kannada',
      'Vijayapura *',
      'Yadgir'
    ),

    1213 => array( // Kerala
      'Alappuzha',
      'Ernakulam',
      'Idukki',
      'Kannur',
      'Kasaragod',
      'Kollam',
      'Kottayam',
      'Kozhikode',
      'Malappuram',
      'Palakkad',
      'Pathanamthitta',
      'Thiruvananthapuram',
      'Thrissur',
      'Wayanad'
    ),

    1232 => array( // Lakshadweep
      'Lakshadweep',

    ),

    1214 => array( // Madhya Pradesh
      'Agar Malwa',
      'Alirajpur',
      'Anuppur',
      'Ashoknagar',
      'Balaghat',
      'Barwani',
      'Betul',
      'Bhind',
      'Bhopal',
      'Burhanpur',
      'Chhatarpur',
      'Chhindwara',
      'Damoh',
      'Datia',
      'Dewas',
      'Dhar',
      'Dindori',
      'Guna',
      'Gwalior',
      'Harda',
      'Hoshangabad',
      'Indore',
      'Jabalpur',
      'Jhabua',
      'Katni',
      'Khandwa',
      'Khargone',
      'Mandla',
      'Mandsaur',
      'Morena',
      'Narsinghpur',
      'Neemuch',
      'Panna',
      'Raisen',
      'Rajgarh',
      'Ratlam',
      'Rewa',
      'Sagar',
      'Satna',
      'Sehore',
      'Seoni',
      'Shahdol',
      'Shajapur',
      'Sheopur',
      'Shivpuri',
      'Sidhi',
      'Singrauli',
      'Tikamgarh',
      'Ujjain',
      'Umaria',
      'Vidisha'
    ),

    1200 => array( // Maharashtra
      'Ahmednagar',
      'Akola',
      'Amravati',
      'Aurangabad',
      'Beed',
      'Bhandara',
      'Buldhana',
      'Chandrapur',
      'Dhule',
      'Gadchiroli',
      'Gondia',
      'Hingoli',
      'Jalgaon',
      'Jalna',
      'Kolhapur',
      'Latur',
      'Mumbai City',
      'Mumbai Suburban',
      'Nagpur',
      'Nanded',
      'Nandurbar',
      'Nashik',
      'Osmanabad',
      'Palghar',
      'Parbhani',
      'Pune',
      'Raigad',
      'Ratnagiri',
      'Sangli',
      'Satara',
      'Sindhudurg',
      'Solapur',
      'Thane',
      'Wardha',
      'Washim',
      'Yavatmal'

    ),

    1215 => array( // Manipur
      'Bishnupur',
      'Chandel',
      'Churachandpur',
      'Imphal East',
      'Imphal West',
      'Jiribam',
      'Kakching',
      'Kamjong',
      'Kangpokpi',
      'Noney',
      'Pherzawl',
      'Senapati',
      'Tamenglong',
      'Tengnoupal',
      'Thoubal',
      'Ukhrul'

    ),

    1216 => array( // Meghalaya
      'East Garo Hills',
      'East Jaintia Hills',
      'East Khasi Hills',
      'North Garo Hills',
      'Ri Bhoi',
      'South Garo Hills',
      'South West Garo Hills',
      'South West Khasi Hills',
      'West Garo Hills',
      'West Jaintia Hills',
      'West Khasi Hills'

    ),

    1217 => array( // Mizoram
      'Aizawl',
      'Champhai',
      'Kolasib',
      'Lawngtlai',
      'Lunglei',
      'Mamit',
      'Saiha',
      'Serchhip',

    ),

    1218 => array( // Nagaland
      'Dimapur',
      'Kiphire',
      'Kohima',
      'Longleng',
      'Mokokchung',
      'Mon',
      'Peren',
      'Phek',
      'Tuensang',
      'Wokha',
      'Zunheboto'
    ),

    1219 => array( // Odisha
      'Angul',
      'Balangir',
      'Balasore',
      'Bargarh',
      'Bhadrak',
      'Boudh',
      'Cuttack',
      'Debagarh',
      'Dhenkanal',
      'Gajapati',
      'Ganjam',
      'Jagatsinghpur',
      'Jajpur',
      'Jharsuguda',
      'Kalahandi',
      'Kandhamal',
      'Kendrapara',
      'Kendujhar',
      'Khordha *',
      'Koraput',
      'Malkangiri',
      'Mayurbhanj',
      'Nabarangpur',
      'Nayagarh',
      'Nuapada',
      'Puri',
      'Rayagada',
      'Sambalpur',
      'Subarnapur',
      'Sundergarh'

    ),

    1233 => array( // Puducherry
      'Karaikal',
      'Mahe',
      'Puducherry',
      'Yanam'
    ),

    1220 => array( // Punjab
      'Amritsar',
      'Barnala',
      'Bathinda',
      'Faridkot',
      'Fatehgarh Sahib',
      'Fazilka',
      'Firozpur',
      'Gurdaspur',
      'Hoshiarpur',
      'Jalandhar',
      'Kapurthala',
      'Ludhiana',
      'Mansa',
      'Moga',
      'Mohali',
      'Muktsar',
      'Pathankot',
      'Patiala',
      'Rupnagar',
      'Sangrur',
      'Shaheed Bhagat Singh Nagar',
      'Tarn Taran'

    ),

    1221 => array( // Rajasthan
      'Ajmer',
      'Alwar',
      'Banswara',
      'Baran',
      'Barmer',
      'Bharatpur',
      'Bhilwara',
      'Bikaner',
      'Bundi',
      'Chittorgarh',
      'Churu',
      'Dausa',
      'Dholpur',
      'Dungarpur',
      'Ganganagar',
      'Hanumangarh',
      'Jaipur',
      'Jaisalmer',
      'Jalore',
      'Jhalawar',
      'Jhunjhunu',
      'Jodhpur',
      'Karauli',
      'Kota',
      'Nagaur',
      'Pali',
      'Pratapgarh',
      'Rajsamand',
      'Sawai Madhopur',
      'Sikar',
      'Sirohi',
      'Tonk',
      'Udaipur'

    ),

    1222 => array( // Sikkim
      'East Sikkim',
      'North Sikkim',
      'South Sikkim',
      'West Sikkim'

    ),

    1223 => array( // Tamil Nadu
      'Ariyalur',
      'Chennai',
      'Coimbatore',
      'Cuddalore',
      'Dharmapuri',
      'Dindigul',
      'Erode',
      'Kanchipuram',
      'Kanyakumari',
      'Karur',
      'Krishnagiri',
      'Madurai',
      'Nagapattinam',
      'Namakkal',
      'Nilgiris',
      'Perambalur',
      'Pudukkottai',
      'Ramanathapuram',
      'Salem',
      'Sivaganga',
      'Thanjavur',
      'Theni',
      'Thoothukudi',
      'Tiruchirappalli',
      'Tirunelveli',
      'Tiruppur',
      'Tiruvallur',
      'Tiruvannamalai',
      'Tiruvarur',
      'Vellore',
      'Viluppuram',
      'Virudhunagar'

    ),

    10267 => array( // Telangana
      'Adilabad',
      'Bhadradri Kothagudem',
      'Hyderabad',
      'Jagtial',
      'Jangaon',
      'Jayashankar Bhupalpally',
      'Jogulamba Gadwal',
      'Kamareddy',
      'Karimnagar',
      'Khammam',
      'Komaram Bheem',
      'Mahabubabad',
      'Mahbubnagar',
      'Mancherial',
      'Medak',
      'Medchal',
      'Nagarkurnool',
      'Nalgonda',
      'Nirmal',
      'Nizamabad',
      'Peddapalli',
      'Rajanna Sircilla',
      'Ranga Reddy',
      'Sangareddy',
      'Siddipet',
      'Suryapet',
      'Vikarabad',
      'Wanaparthy',
      'Warangal Rural',
      'Warangal Urban',
      'Yadadri Bhuvanagiri'
    ),


    1224 => array( // Tripura
      'Dhalai',
      'Gomati',
      'Khowai',
      'North Tripura',
      'Sepahijala',
      'South Tripura',
      'Unakoti',
      'West Tripura'

    ),

    1226 => array( // Uttar Pradesh
      'Agra',
      'Aligarh',
      'Ambedkar Nagar',
      'Amethi *',
      'Amroha *',
      'Auraiya',
      'Ayodhya *',
      'Azamgarh',
      'Baghpat',
      'Bahraich',
      'Ballia',
      'Balrampur Ramanujganj *',
      'Banda',
      'Barabanki',
      'Bareilly',
      'Basti',
      'Bhadohi',
      'Bijnor',
      'Budaun',
      'Bulandshahr',
      'Chandauli',
      'Chitrakoot',
      'Deoria',
      'Etah',
      'Etawah',
      'Farrukhabad',
      'Fatehpur',
      'Firozabad',
      'Gautam Buddha Nagar',
      'Ghaziabad',
      'Ghazipur',
      'Gonda',
      'Gorakhpur',
      'Hamirpur',
      'Hapur *',
      'Hardoi',
      'Hathras *',
      'Jalaun',
      'Jaunpur',
      'Jhansi',
      'Kannauj',
      'Kanpur Dehat *',
      'Kanpur Nagar',
      'Kasganj *',
      'Kaushambi',
      'Kheri',
      'Kushinagar',
      'Lalitpur',
      'Lucknow',
      'Maharajganj',
      'Mahoba',
      'Mainpuri',
      'Mathura',
      'Mau',
      'Meerut',
      'Mirzapur',
      'Moradabad',
      'Muzaffarnagar',
      'Pilibhit',
      'Pratapgarh',
      'Prayag Raj*',
      'Raebareli',
      'Rampur',
      'Saharanpur',
      'Sambhal *',
      'Sant Kabir Nagar',
      'Shahjahanpur',
      'Shamli *',
      'Shravasti',
      'Siddharthnagar',
      'Sitapur',
      'Sonbhadra',
      'Sultanpur',
      'Unnao',
      'Varanasi'

    ),

    1225 => array( // Uttarakhand
      'Almora',
      'Bageshwar',
      'Chamoli',
      'Champawat',
      'Dehradun',
      'Haridwar',
      'Nainital',
      'Pauri',
      'Pithoragarh',
      'Rudraprayag',
      'Tehri',
      'Udham Singh Nagar',
      'Uttarkashi'

    ),


    1227 => array( // West Bengal
      'Alipurduar',
      'Bankura',
      'Birbhum',
      'Cooch Behar',
      'Dakshin Dinajpur',
      'Darjeeling',
      'Hooghly',
      'Howrah',
      'Jalpaiguri',
      'Jhargram',
      'Kalimpong',
      'Kolkata',
      'Malda',
      'Murshidabad',
      'Nadia',
      'North 24 Parganas',
      'Paschim Bardhaman',
      'Paschim Medinipur',
      'Purba Bardhaman',
      'Purba Medinipur',
      'Purulia',
      'South 24 Parganas',
      'Uttar Dinajpur'
    ),


  );

  return $indiadistricts;
}



/**
 * Check and load counties
 */



function indiadistricts_loaddistricts()
{


$districts = indiadisttricts_listdistricts();

static $dao = NULL;

if (!$dao) {
    $dao = new CRM_Core_DAO();
  }



// go state-by-state to check existing counties

  foreach ($districts as $id => $state) {
    $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
    $results = CRM_Core_DAO::executeQuery($check);
    $existing = array();
    while ($results->fetch()) {
      $existing[] = $results->name;
    }

    // identify counties needing to be loaded
    $add = array_diff($state, $existing);

    $insert = array();
    foreach ($add as $districts) {
      $countye = $dao->escape($districts);
      $insert[] = "('$countye', $id)";
    }

    // put it into queries of 50 counties each
    for($i = 0; $i < count($insert); $i = $i+50) {
      $inserts = array_slice($insert, $i, 50);
      $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
      $query .= implode(', ', $inserts);
      CRM_Core_DAO::executeQuery($query);
    }
  }
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function indiadistricts_civicrm_install() // uscounties_civicrm_install()
{
  //uscounties_loadcounties();
  indiadistricts_loaddistricts();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function uscounties_civicrm_enable() {
  //uscounties_loadcounties();
  indiadistricts_loaddistricts();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
// function uscounties_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
//   uscounties_loadcounties();
// }


function indiadistricts_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  indiadistricts_loaddistricts();
}
