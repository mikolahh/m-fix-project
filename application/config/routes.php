<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['remont-telefonov'] = 'phones';
$route['remont-planshetov'] = 'tablets';
$route['remont-apple'] = 'apples';

$route['remont-telefonov/(:any)'] = 'devices/repair/$1';
//для телефонов

$route['remont-planshetov/(:any)'] = 'devices/repair/planshetov-$1';
// для планшетов

 $route['/remont/'] = '/devices/repair/';
  //$route['remont-telefonov/meizu/(:any)'] = '/devices/repair/meizu/$1';


$route['remont-planshetov/lenovo/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/samsung/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/prestigio/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/asus/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/sony/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/huawei/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/explay/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/ipad/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/acer/(:any)'] = 'devices/view/$1';
$route['remont-planshetov/xiaomi/(:any)'] = 'devices/view/$1';

$route['remont-telefonov/xiaomi/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/huawei/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/meizu/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/zte/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/samsung/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/nokia/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/sony/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/lenovo/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/lg/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/htc/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/prestigio/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/asus/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/iphone/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/honor/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/fly/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/texet/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/flycat/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/ginzzu/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/alcatel/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/philips/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/explay/(:any)'] = 'devices/view/$1';
$route['remont-telefonov/oneplus/(:any)'] = 'devices/view/$1';


$route['kontakty'] = 'contacts';
$route['principy-obsluzhivaniya'] = 'principle';
$route['yuridicheskaya-informaciya'] = 'legal';

$route['garantiya'] = 'guaranty';
$route['articles/popadanie-vody-v-telefon'] = 'water';
$route['articles/osobennosti-remonta-iphone'] = 'partiphone';
$route['poryadok-obsluzhivaniya-1'] = 'rule';
$route['poryadok-obsluzhivaniya-2'] = 'rule/b';
$route['poryadok-obsluzhivaniya-3'] = 'rule/c';
$route['poryadok-obsluzhivaniya-4'] = 'rule/d';
$route['poryadok-obsluzhivaniya-5'] = 'rule/e';
$route['poryadok-obsluzhivaniya-6'] = 'rule/f';
$route['poryadok-obsluzhivaniya-7'] = 'rule/g';
$route['poryadok-obsluzhivaniya-8'] = 'rule/h';
$route['poryadok-obsluzhivaniya-9'] = 'rule/i';

$route['kontakty'] = 'contacts';
$route['tekhnicheskaya-informaciya'] = 'tekhinfo';
$route['tekhnicheskaya-informaciya/(:any)'] = 'tekhinfo/view/$1';
$route['razemy-zaryadki'] = 'connectors';
$route['razemy-zaryadki/(:any)'] = 'connectors/devcon/$1';
$route['net-zaryadki'] = 'repchar';
/*$route['net-zaryadki/(:any)'] = 'repchar/view/$1';*/

$route['remont-telefonov/xiaomi/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/huawei/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/meizu/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/zte/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/samsung/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/nokia/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/sony/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/lenovo/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/lg/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/htc/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/prestigio/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/asus/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/iphone/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/honor/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/fly/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/texet/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/flycat/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/ginzzu/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/alcatel/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/philips/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/explay/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-telefonov/oneplus/(:any)/net-zaryadki'] = 'repchar/view/$1';


$route['remont-planshetov/lenovo/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/samsung/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/prestigio/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/asus/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/sony/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/huawei/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/explay/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/ipad/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/acer/(:any)/net-zaryadki'] = 'repchar/view/$1';
$route['remont-planshetov/xiaomi/(:any)/net-zaryadki'] = 'repchar/view/$1';


$route['parts/(:any)/(:any)'] = 'products/part/$1/$2';
$route['products/(:any)/(:any)'] = 'products/product/$1/$2';
$route['products/parts'] = 'products/parts';
$route['products/(:any)'] = 'products/category/$1';


























$route['search'] = 'search';