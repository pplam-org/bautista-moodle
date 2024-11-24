<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'اډمېن ډایرکټوري';
$string['availablelangs'] = 'د ژبې موجود بستې';
$string['chooselanguagehead'] = 'ژبه غوره کړئ';
$string['chooselanguagesub'] = 'مهرباني وکړئ د انسټال کولو لپاره ژبه وټاکئ  دا ژبه به د سایټ لپاره د ډیفالټ ژبې په توګه وکارول شي، که څه هم وروسته به بدله شي.';
$string['clialreadyconfigured'] = 'د کانفیګیورېشن فایل config.php  له مخکې شته دی. مهرباني وکړئ د دې سایټ لپاره د موډل د انسټال کولو لپاره اډمېن / کلیک / انسټال_ database.php وکاروئ .';
$string['clialreadyinstalled'] = 'د کانفیګیورېشن فایل config.php  له مخکې شته دی. مهرباني وکړئ د دې سایټ لپاره د موډل د اپګرېد کولو لپاره اډمېن/ کلیک / انسټال_ database.php وکاروئ .';
$string['cliinstallheader'] = 'موډل {$ a} د قوماندې لاین انسټالولو برنامه';
$string['clitablesexist'] = 'د ډیټابیس جدولونه له مخکې شتون لري؛ د CLI لګول دوام نلري.';
$string['databasehost'] = 'د ډیټابیس کوربه';
$string['databasename'] = 'د ډیټابیس نوم';
$string['databasetypehead'] = 'د ډیټابیس ډرایور غوره کړئ';
$string['dataroot'] = 'ډېټا ډایرکټوري';
$string['datarootpermission'] = 'د ډیټا ډایرکټوري ونو اجازه';
$string['dbprefix'] = 'د جدولونو مختاړی';
$string['dirroot'] = 'موډل ډایرکټوري';
$string['environmenthead'] = 'ستاسو د چاپیریال چک کول ...';
$string['environmentsub2'] = 'د هر ماډل خپرول د PHP  نسخه اړتیا لري او یو شمیر لازمي PHP اکسټنشنونه لري. له هر انسټال او اپګرېډ څخه مخکې د بشپړ چاپیریال چیک کول ترسره کیږي. که تاسو نه پوهیږئ نوی نسخه څنګه انسټال کړئ مهرباني وکړئ د سرور مدیر سره اړیکه ونیسئ یا د PHP اکسټنشنونه فعال کړئ.';
$string['errorsinenvironment'] = 'د چاپیریال چیک ناکام شو!';
$string['installation'] = 'لګول';
$string['langdownloaderror'] = 'بدبختانه ژبه "{$ a}" ډاونلوډ کولی نشو. د انسټالولو پروسه به په انګلیسي کې دوام ومومي.';
$string['memorylimithelp'] = '<p> ستاسو د سرور لپاره د PHP حافظې حد اوس مهال {$ a } ته ټاکل شوی . < / p> <p> دا ممکن وروسته موډل د حافظې ستونزې رامنځته کړي ، په ځانګړي توګه که ستاسو ډیری موډلونه او / یا ډیری کاروونکي  فعال وي. </ p> <p>  وړاندیز مو دا دی چې تاسو  PHP  له لوړ حد سره تنظیم کړئ که امکان ولري 40M. د دې تر سره کولو لپاره ډیرې لارې شته دي چې تاسو یې هڅه  کولای شئ: </ p> < ol > <li> که تاسو وړ یاست، نو له <i>--enable-memory-limit</i> سره PHP  بیا تنظیم کړئ. دا به موډل ته اجازه ورکړي چې خپل ځان د حافظې له حد سره تنظیم کړي. < / li> <li> که تاسو خپل php.ini فایل ته لاسرسی لرئ ، نو تاسو کولی شئ د<b>memory_limit</b>  تنظیمات 40M ته بدل کړئ. که تاسو لاسرسی نلرئ تاسو وکولی شئ له خپل مدیر څخه وغواړئ چې دا ستاسو لپاره ترسره کړي. </ li> <li> د PHP  په ځینو سرورونو کې تاسو کولی شئ په موډل ډایرکټوري کې د htaccess فایل رامنخته کولی شی چې دا کرښه لري<blockquote><div>php_value memory_limit 40M</div></blockquote> <p>';
$string['paths'] = 'لارې';
$string['pathserrcreatedataroot'] = 'د ډېټا  ډایرکټوري  ({$ a-> dataroot }) د انسټالر لخوا نشي رامنځته کیدلی.';
$string['pathshead'] = 'د لارو تصدیق کول';
$string['pathsrodataroot'] = 'د ډېټا رټ ډایرکټوري  د لیکلو وړ ندی.';
$string['pathsroparentdataroot'] = 'مورنۍ ډایرکټوري  ({$ a-> والدین}) د لیکلو وړ ندی. د ډېټا  ډایرکټوري  ({$ a-> dataroot })  د انسټالر لخوا نشي رامنځته کیدلی.';
$string['pathssubadmindir'] = 'لږ ویب هاسټونه تاسو ته کنټرول پینل یا یو څه ته د لاسرسي لپاره د ځانګړي URL په توګه / اداره کاروي. بدبختانه دا د موډل اډمین پاڼو لپاره له معیاري موقعیت سره ټکر لري. تاسو کولی شئ دا په خپل انسټالېشن کې د اډمېن ډایرکټوري نوم له بدلولو او په دې ځای کې د نوی نوم ځای په ځای کولو سره حل کړئ. د بېلګې په توګه:  <em>moodleadmin</em> دا به په موډل کې د اډمېن لینکونه تنظیم کړي.';
$string['pathssubdataroot'] = '<p> یو ډایرکټوري چې موډل به د کارنانو لخوا د فایل ټول اپلوډ شوي موضوعات ثبت کړي.</ p> <p>  دا ډایرکټوري  باید د ویب سرور کاروونکي  لخوا د لوستلو او لیکلو وړ وي (معمولا \'www-data\' ، \'nobody\' ، یا \' apache\') </ p> <p>  دا باید په مستقیم ډول په ویب کې د لاسرسۍ وړنه وي. </ p> <p> که چیرې ډایرکټوري  اوس مهال شتون ونه لري ، نو د انسټال کولو پروسه به یې د رامنځته کولو هڅه وکړي. </ p>';
$string['pathssubdirroot'] = '<p> د موډل کوډ لرونکي ډایرکټوري  ته بشپړه لار. </ p>';
$string['pathssubwwwroot'] = '<p> بشپړ پته چې موډل به پکې د لاسرسی وړوي د بیلګې په توګه پته چې کاروونکي به د براوزر پټې ته انټر کوي ترڅو موډل ته لاسرسی ومومي . < / p> <p> د ډیری پتونو په کارولو سره موډل ته لاسرسی ممکن ندی. که ستاسو سایټ د ډیری پتونو له لارې د لاسرسي وړ وي نو بیا ترټولو اسانه غوره کړئ او د هر بل پتې لپاره دایمي ریډریکټر تنظیم کړئ. </ p> <p> که ستاسو سایټ دواړه له انټرنیټ او داخلي شبکې څخه د لاسرسي وړ وي (ځینې وختونه انټرانیټ نومیږي) ، نو دلته عامه پته وکاروئ. </ p> <p> که اوسنی پته سمه نه وي ، نو مهرباني وکړئ د خپل براوزر پته بار کې URL بدل کړئ او انسټال یې بیا پیل کړئ. </ p>';
$string['pathsunsecuredataroot'] = 'د ډېټا روپ ځای امن ندی';
$string['pathswrongadmindir'] = 'اډمین ډایرکټوري شتون نلري';
$string['phpextension'] = '} $ a} د PHP اکسټنشن';
$string['phpversion'] = 'د PHP  نسخه';
$string['phpversionhelp'] = '<p> موډل د PHP لږترلږه 5.6.5 یا 7.1 نسخې ته اړتیا لري( 7.0.x ځینې انجن محدودیتونه لري)</p> <p>  تاسو دا مهال {$a} نسخه پرمخ وړئ </p> <p> تاسو باید PHP  اپګرېډ کړئ یا  د PHP له نوې نسخې سره هاسټ ته لاړشئ. </ p>';
$string['welcomep20'] = 'تاسو دا پاڼه ځکه  ګورئ  چې تاسو په خپل کمپیوټر کې د <strong> {$ a-> Packname } pack $ a-> Packversion } < /strong>  بسته په بریالیتوب سره انسټال او پیل کړې . مبارک!';
$string['welcomep30'] = 'د<strong>{$a->installername}</strong>  دا خپرولو کې غوښتنلیکونه شامل دي ترڅو داسې یو چاپیریال رامنځته کړي چې پکې<strong>Moodle</strong>  به کار کوي.';
$string['welcomep40'] = 'په کڅوړه کې <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> هم شامل دي.';
$string['welcomep50'] = 'پدې بسته کې د ټولو غوښتنلیکونو کارول د دوی اړوند جوازونو لخوا اداره کیږي. بشپړ <strong>{$a->installername}</strong>  کڅوړه <a href="http://www.opensource.org/docs/definition_plain.html">open source</a>  ده او له<a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>  جواز سره توزیع شوی دی';
$string['welcomep60'] = 'پدې بسته کې د ټولو غوښتنلیکونو کارول د دوی اړوند جوازونو لخوا اداره کیږي. بشپړ <strong>{$a->installername}</strong>  کڅوړه <a href="http://www.opensource.org/docs/definition_plain.html">open source</a>  ده او له<a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>  جواز سره توزیع شوی دی';
$string['welcomep70'] = 'د " موډل </ strong>  د تنظیم سره د ادامه ورکولو لپاره لاندې" Next " تڼۍ باندې کلیک کړئ.';
$string['wwwroot'] = 'ویب پته';