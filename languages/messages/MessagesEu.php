<?php
/** Basque (Euskara)
 *
 * @ingroup Language
 * @file
 *
 * @author An13sa
 * @author Bengoa
 * @author Helix84
 * @author Kaustubh
 * @author Kobazulo
 * @author Malafaya
 * @author Theklan
 * @author Unai Fdz. de Betoño
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$skinNames = array(
	'standard'     => 'Lehenetsia',
	'nostalgia'    => 'Nostalgia',
	'cologneblue'  => 'Cologne Blue',
);
$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Aparteko',
	NS_MAIN           => '',
	NS_TALK           => 'Eztabaida',
	NS_USER           => 'Lankide',
	NS_USER_TALK      => 'Lankide_eztabaida',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK   => '$1_eztabaida',
	NS_IMAGE          => 'Irudi',
	NS_IMAGE_TALK     => 'Irudi_eztabaida',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'MediaWiki_eztabaida',
	NS_TEMPLATE       => 'Txantiloi',
	NS_TEMPLATE_TALK  => 'Txantiloi_eztabaida',
	NS_HELP           => 'Laguntza',
	NS_HELP_TALK      => 'Laguntza_eztabaida',
	NS_CATEGORY       => 'Kategoria',
	NS_CATEGORY_TALK  => 'Kategoria_eztabaida',
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Loturak azpimarratu:',
'tog-highlightbroken'         => 'Lotura hautsiak <a href="" class="new">horrela</a> erakutsi (bestela, honela<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Paragrafoak justifikatu',
'tog-hideminor'               => 'Azken aldaketetan aldaketa txikiak ezkutatu',
'tog-extendwatchlist'         => 'Jarraipen-zerrenda zabaldu aldaketa guztiak ikusteko, ez bakarrik azken aldaketak',
'tog-usenewrc'                => 'Hobetutako azken aldaketak (JavaScript)',
'tog-numberheadings'          => 'Goiburukoak automatikoki zenbakitu',
'tog-showtoolbar'             => 'Aldaketen tresna-barra erakutsi (JavaScript)',
'tog-editondblclick'          => 'Klik bikoitzaren bitartez orrialdeak aldatu (JavaScript)',
'tog-editsection'             => 'Atalak [aldatu] loturen bitartez aldatzeko aukera gaitu',
'tog-editsectiononrightclick' => 'Atalen izenburuetan klik eginez atala<br />aldatzea gaitu (JavaScript)',
'tog-showtoc'                 => 'Edukien taula erakutsi (3 goiburukotik gorako orrialdeentzako)',
'tog-rememberpassword'        => 'Nire saioa ordenagailu honetan gogoratu (gomendatua)',
'tog-editwidth'               => 'Zabalera osoko aldaketa koadroa',
'tog-watchcreations'          => 'Sortzen ditudan orrialdeak nire segimendu zerrendara gehitu',
'tog-watchdefault'            => 'Aldatzen ditudan orrialdeak nire segimendu zerrendara gehitu',
'tog-watchmoves'              => 'Izena aldatutako orrialdeak segimendu zerrendan erakutsi',
'tog-watchdeletion'           => 'Ezabatzen ditudan orrialdeak nire segimendu zerrendara gehitu',
'tog-minordefault'            => 'Lehenetsi bezala aldaketa txiki bezala markatu guztiak',
'tog-previewontop'            => 'Aurrebista aldaketa koadroaren aurretik erakutsi',
'tog-previewonfirst'          => 'Lehen aldaketan aurrebista erakutsi',
'tog-nocache'                 => 'Orrialdeen katxea ezgaitu',
'tog-enotifwatchlistpages'    => 'Jarraitzen ari naizen orrialde baten aldaketak daudenean e-posta jaso',
'tog-enotifusertalkpages'     => 'Nire eztabaida orrialdea aldatzen denean e-posta jaso',
'tog-enotifminoredits'        => 'Aldaketa txikiak direnean ere e-posta jaso',
'tog-enotifrevealaddr'        => 'Jakinarazpen mezuetan nire e-posta helbidea erakutsi',
'tog-shownumberswatching'     => 'Jarraitzen duen erabiltzaile kopurua erakutsi',
'tog-fancysig'                => 'Lotura automatikorik gabeko sinadura',
'tog-externaleditor'          => 'Lehenetsi bezala kanpoko editore bat erabili',
'tog-externaldiff'            => 'Lehenetsi bezala kanpoko diff erreminta erabili (adituentzako bakarrik, zure ordenagailuak konfigurazio berezia izan behar du)',
'tog-showjumplinks'           => '"Hona jo" irisgarritasun loturak gaitu',
'tog-uselivepreview'          => 'Zuzeneko aurrebista erakutsi (JavaScript) (Proba fasean)',
'tog-forceeditsummary'        => 'Aldaketaren laburpena zuri uzterakoan ohartarazi',
'tog-watchlisthideown'        => 'Segimendu zerrendan nire aldaketak ezkutatu',
'tog-watchlisthidebots'       => 'Segimendu zerrendan bot-en aldaketak ezkutatu',
'tog-watchlisthideminor'      => 'Segimendu zerrendan, aldaketa txikiak ezkutatu',
'tog-nolangconversion'        => 'Aldaeren arteko konbertsioa ezgaitu',
'tog-ccmeonemails'            => 'Beste erabiltzaileei bidaltzen dizkiedan mezuen kopiak niri ere bidali',
'tog-diffonly'                => "''Diff''-ak agertzen direnean, orrialdearen edukiera ezkutatu",

'underline-always'  => 'Beti',
'underline-never'   => 'Inoiz ez',
'underline-default' => 'Nabigatzailearen lehenetsitako balioa',

'skinpreview' => '(Aurrebista)',

# Dates
'sunday'        => 'Igandea',
'monday'        => 'Astelehena',
'tuesday'       => 'Asteartea',
'wednesday'     => 'Asteazkena',
'thursday'      => 'Osteguna',
'friday'        => 'Ostirala',
'saturday'      => 'Larunbata',
'sun'           => 'Iga',
'mon'           => 'Asl',
'tue'           => 'Asr',
'wed'           => 'Asz',
'thu'           => 'Osg',
'fri'           => 'Osr',
'sat'           => 'Lar',
'january'       => 'Urtarrila',
'february'      => 'Otsaila',
'march'         => 'Martxoa',
'april'         => 'Apirila',
'may_long'      => 'Maiatza',
'june'          => 'Ekaina',
'july'          => 'Uztaila',
'august'        => 'Abuztua',
'september'     => 'Iraila',
'october'       => 'Urria',
'november'      => 'Azaroa',
'december'      => 'Abendua',
'january-gen'   => 'Urtarril',
'february-gen'  => 'Otsail',
'march-gen'     => 'Martxo',
'april-gen'     => 'Apiril',
'may-gen'       => 'Maiatz',
'june-gen'      => 'Ekain',
'july-gen'      => 'Uztail',
'august-gen'    => 'Abuztu',
'september-gen' => 'Irail',
'october-gen'   => 'Urri',
'november-gen'  => 'Azaro',
'december-gen'  => 'Abendu',
'jan'           => 'Urt',
'feb'           => 'Ots',
'mar'           => 'Mar',
'apr'           => 'Api',
'may'           => 'Mai',
'jun'           => 'Eka',
'jul'           => 'Uzt',
'aug'           => 'Abu',
'sep'           => 'Ira',
'oct'           => 'Urr',
'nov'           => 'Aza',
'dec'           => 'Abe',

# Bits of text used by many pages
'categories'            => 'Kategoriak',
'pagecategories'        => '{{PLURAL:$1|Kategoria|Kategoriak}}',
'category_header'       => '"$1" kategoriako artikuluak',
'subcategories'         => 'Azpikategoriak',
'category-media-header' => 'Media "$1" kategorian',
'category-empty'        => "''Kategoria honek ez dauka artikulurik uneotan.''",

'mainpagetext'      => "<big>'''MediaWiki arrakastaz instalatu da.'''</big>",
'mainpagedocfooter' => 'Ikus [http://meta.wikimedia.org/wiki/Help:Contents Erabiltzaile Gida] wiki softwarea erabiltzen hasteko informazio gehiagorako.

== Nola hasi ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Konfigurazio balioen zerrenda]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki FAQ (Maiz egindako galderak)]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce MediaWikiren argitalpenen posta zerrenda]',

'about'          => 'Honi Buruz',
'article'        => 'Artikulua',
'newwindow'      => '(leiho berrian irekitzen da)',
'cancel'         => 'Bertan behera utzi',
'qbfind'         => 'Aurkitu',
'qbbrowse'       => 'Arakatu',
'qbedit'         => 'Aldatu',
'qbpageoptions'  => 'Orrialde hau',
'qbpageinfo'     => 'Testuingurua',
'qbmyoptions'    => 'Nire orrialdeak',
'qbspecialpages' => 'Aparteko orrialdeak',
'moredotdotdot'  => 'Gehiago...',
'mypage'         => 'Nire orrialdea',
'mytalk'         => 'Nire eztabaida',
'anontalk'       => 'IP honen eztabaida',
'navigation'     => 'Nabigazioa',
'and'            => 'eta',

# Metadata in edit box
'metadata_help' => 'Metadatuak:',

'errorpagetitle'    => 'Errorea',
'returnto'          => '$1(e)ra itzuli.',
'tagline'           => '{{SITENAME}}(e)tik',
'help'              => 'Laguntza',
'search'            => 'Bilatu',
'searchbutton'      => 'Bilatu',
'go'                => 'Joan',
'searcharticle'     => 'Joan',
'history'           => 'Orrialdearen historia',
'history_short'     => 'Historia',
'updatedmarker'     => 'nire azkeneko bisitaz geroztik eguneratuta',
'info_short'        => 'Informazioa',
'printableversion'  => 'Inprimatzeko bertsioa',
'permalink'         => 'Lotura finkoa',
'print'             => 'Inprimatu',
'edit'              => 'Aldatu',
'editthispage'      => 'Orrialde hau aldatu',
'delete'            => 'Ezabatu',
'deletethispage'    => 'Orrialde hau ezabatu',
'undelete_short'    => 'Berreskuratu {{PLURAL:$1|aldaketa bat|$1 aldaketa}}',
'protect'           => 'Babestu',
'protect_change'    => 'aldatu',
'protectthispage'   => 'Orrialde hau babestu',
'unprotect'         => 'Babesa kendu',
'unprotectthispage' => 'Orrialde honi babesa kendu',
'newpage'           => 'Orrialde berria',
'talkpage'          => 'Orrialde honi buruz eztabaidatu',
'talkpagelinktext'  => 'Eztabaida',
'specialpage'       => 'Aparteko orrialdea',
'personaltools'     => 'Tresna pertsonalak',
'postcomment'       => 'Atal berria',
'articlepage'       => 'Artikulua ikusi',
'talk'              => 'Eztabaida',
'views'             => 'Bistaratzeak',
'toolbox'           => 'Tresnak',
'userpage'          => 'Lankide orrialdea ikusi',
'projectpage'       => 'Proiektuaren orrialdea ikusi',
'imagepage'         => 'Ikusi fitxategiaren orria',
'mediawikipage'     => 'Mezu orrialdea ikusi',
'templatepage'      => 'Txantiloi orrialdea ikusi',
'viewhelppage'      => 'Laguntza orrialdea ikusi',
'categorypage'      => 'Kategoria orrialdea ikusi',
'viewtalkpage'      => 'Eztabaida ikusi',
'otherlanguages'    => 'Beste hizkuntzetan',
'redirectedfrom'    => '($1(e)tik birzuzenduta)',
'redirectpagesub'   => 'Birzuzenketa orria',
'lastmodifiedat'    => 'Orrialdearen azken aldaketa: $2, $1.', # $1 date, $2 time
'viewcount'         => 'Orrialde hau {{PLURAL:$1|behin|$1 aldiz}} bisitatu da.',
'protectedpage'     => 'Babestutako orrialdea',
'jumpto'            => 'Hona jo:',
'jumptonavigation'  => 'nabigazioa',
'jumptosearch'      => 'bilatu',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => '{{SITENAME}}(e)ri buruz',
'aboutpage'         => 'Project:Honi_buruz',
'bugreports'        => 'Programazio-erroreen jakinarazpenak',
'bugreportspage'    => 'Project:Programazio-erroreen jakinarazpenak',
'copyright'         => 'Eduki guztia $1(r)en babespean dago.',
'copyrightpagename' => '{{SITENAME}}ren egile eskubideak',
'copyrightpage'     => '{{ns:project}}:Eskubideak',
'currentevents'     => 'Albisteak',
'currentevents-url' => 'Project:Albisteak',
'disclaimers'       => 'Mugaketak',
'disclaimerpage'    => 'Project:Erantzukizunen mugaketa orokorra',
'edithelp'          => 'Aldaketak egiteko laguntza',
'edithelppage'      => 'Help:Aldaketak egiteko laguntza',
'faq'               => 'Maiz egindako galderak',
'faqpage'           => 'Project:Maiz egindako galderak',
'helppage'          => 'Help:Laguntza',
'mainpage'          => 'Azala',
'policy-url'        => 'Project:Politikak',
'portal'            => 'Txokoa',
'portal-url'        => 'Project:Txokoa',
'privacy'           => 'Pribatutasun politika',
'privacypage'       => 'Project:Pribatutsan politika',
'sitesupport'       => 'Dohaintzak',
'sitesupport-url'   => 'Project:Gune laguntza',

'badaccess'        => 'Baimen errorea',
'badaccess-group0' => 'Ez daukazu ekintza hori burutzeko baimenik.',
'badaccess-group1' => 'Ekintza hori $1 taldeko erabiltzaileei mugatuta dago.',
'badaccess-group2' => 'Ekintza hori $1 taldeetako bateko erabiltzaileei mugatuta dago.',
'badaccess-groups' => 'Eskatu duzun ekintza $1 taldeko lankideei mugatuta dago.',

'versionrequired'     => 'MediaWikiren $1 bertsioa beharrezkoa da',
'versionrequiredtext' => 'MediaWikiren $1 bertsioa beharrezkoa da orrialde hau erabiltzeko. Ikus [[Special:Version]]',

'ok'                      => 'Ados',
'retrievedfrom'           => '"$1"(e)tik jasota',
'youhavenewmessages'      => '$1 dauzkazu ($2).',
'newmessageslink'         => 'Mezu berriak',
'newmessagesdifflink'     => 'azken aldaketa ikusi',
'youhavenewmessagesmulti' => 'Mezu berriak dituzu $1(e)n',
'editsection'             => 'aldatu',
'editold'                 => 'aldatu',
'editsectionhint'         => 'Atala aldatu: $1',
'toc'                     => 'Edukiak',
'showtoc'                 => 'erakutsi',
'hidetoc'                 => 'ezkutatu',
'thisisdeleted'           => '$1 ikusi edo leheneratu?',
'viewdeleted'             => '$1 ikusi?',
'restorelink'             => '{{PLURAL:$1|ezabatutako aldaketa bat|ezabatutako $1 aldaketa}}',
'feedlinks'               => 'Jarioa:',
'feed-invalid'            => 'Baliogabeko harpidetza jario mota.',
'feed-unavailable'        => 'Jarioak ez daude eskuragarri.',
'site-rss-feed'           => '$1 RSS Jarioa',
'site-atom-feed'          => '$1 Atom Jarioa',
'page-rss-feed'           => '"$1" RSS Jarioa',
'page-atom-feed'          => '"$1" Atom Jarioa',
'red-link-title'          => '$1 (orria ez da existitzen)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Artikulua',
'nstab-user'      => 'Erabiltzaile orrialdea',
'nstab-media'     => 'Media orrialdea',
'nstab-special'   => 'Orri berezia',
'nstab-project'   => 'Proiektu orrialdea',
'nstab-image'     => 'Fitxategia',
'nstab-mediawiki' => 'Mezua',
'nstab-template'  => 'Txantiloi',
'nstab-help'      => 'Laguntza orrialdea',
'nstab-category'  => 'Kategoria',

# Main script and global functions
'nosuchaction'      => 'Ekintza hori ez da existitizen',
'nosuchactiontext'  => 'URL bidez zehaztutako ekintza okerra da.
URLa gaizki idatzi duzu, edo hautsitako lotura jarraitu duzu.
Honek akatsa indikatzen du {{SITENAME}}-(e)n.',
'nosuchspecialpage' => 'Ez da aparteko orrialde hori existitzen',
'nospecialpagetext' => "<big>'''Baliogabeko aparteko orrialde bat eskatu duzu.'''</big>

Existitzen direnen zerrenda ikus dezakezu  [[Special:SpecialPages|{{int:specialpages}}]] orrialdean.",

# General errors
'error'                => 'Errorea',
'databaseerror'        => 'Datu-base errorea',
'dberrortext'          => 'Datu-basean kontsulta egiterakoan sintaxi errore bat gertatu da. Baliteke softwareak bug bat izatea. Datu-basean egindako azken kontsulta:
<blockquote><tt>$1</tt></blockquote>
Funtzio honekin: "<tt>$2</tt>".
MySQLk emandako errore informazioa: "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Datu-basean kontsulta egiterakoan sintaxi errore bat gertatu da. Datu-basean egindako azken kontsulta:
"$1"
Funtzio honekin: "$2".
MySQLk emandako errore informazioa: "$3: $4"',
'noconnect'            => 'Sentitzen dugu! Wikian arazo teknikoak direla-eta, ezin izan da datu-basera konektatu.<br />
$1',
'nodb'                 => 'Ezin izan da $1 datu-basea hautatu',
'cachederror'          => 'Honako hau eskatutako orrialdearen katxeko kopia da, litekeena da eguneratuta ez azaltzea.',
'laggedslavemode'      => 'Oharra: Baliteke orrialde honetan azken aldaketak ez erakustea.',
'readonly'             => 'Datu-basea blokeatuta dago',
'enterlockreason'      => 'Zehaztu blokeatzeko arrazoia, noiz kenduko den jakinaraziz',
'readonlytext'         => 'Datu-basea artikulu berriak sortu edo aldaketak ez egiteko blokeatuta dago, seguruenik mantenu lanak direla-eta. Blokeo hori kentzerakoan beti bezala egongo da berriz.

Blokeatu duen administratzaileak azalpen hau eman du: $1',
'missingarticle'       => 'Datu-baseak ez du aurkitu beharko lukeen orrialde baten testua aurkitu, "$1" izena duena.

Arrazoia iraungitako diff bat edo ezabatutako orrialde baten historia lotura jarraitzea izan liteke.

Hau ez bada zure egoera, baliteke softwarean bug bat aurkitu izana.
Mesedez, administratzaileari jakinarazi, URLa bidaliz.',
'readonly_lag'         => 'Datu-basea automatikoki blokeatu da menpeko zerbitzariak nagusiarekin sinkronizatu bitartean',
'internalerror'        => 'Barne errorea',
'internalerror_info'   => 'Barne errorea: $1',
'filecopyerror'        => 'Ezin izan da "$1" fitxategia "$2"(e)ra kopiatu.',
'filerenameerror'      => 'Ezin izan zaio "$1" fitxategiari "$2" izen berria eman.',
'filedeleteerror'      => 'Ezin izan da "$1" fitxategia ezabatu.',
'directorycreateerror' => 'Ezin izan da "$1" karpeta sortu.',
'filenotfound'         => 'Ezin izan da "$1" fitxategia aurkitu.',
'fileexistserror'      => 'Ezin da "$1" fitxategian idatzi: lehendik existitzen da',
'unexpected'           => 'Espero ez zen balioa: "$1"="$2".',
'formerror'            => 'Errorea: ezin izan da formularioa bidali',
'badarticleerror'      => 'Ezin da ekintza hau orrialde honetan burutu.',
'cannotdelete'         => 'Ezin izan da zehaztutako orrialde edo fitxategia ezabatu. (Baliteke beste norbaitek ezabatu izana.)',
'badtitle'             => 'Izenburu ezegokia',
'badtitletext'         => 'Eskatutako orrialde izenburua ez da baliozkoa, hutsik dago, edo gaizki lotutako hizkuntzen arteko lotura da. Baliteke izenburuetan erabili ezin den karaktereren bat izatea.',
'perfdisabled'         => 'Sentitzen dugu! Ezaugarri hau denbora batez ezgaituta dago, wikian arazoak sortzen baititu, datu-basea motelduz.',
'perfcached'           => 'Hurrengo datuak katxean gordeta daude eta litekeena da guztiz eguneratuta ez egotea:',
'perfcachedts'         => 'Hurrengo datuak katxean daude, $1 eguneratu zen azkenekoz.',
'querypage-no-updates' => 'Orrialde honen berritzeak ez dira baimentzen. Hemen dagoen data ez da zuzenean berrituko.',
'wrong_wfQuery_params' => 'Baliogabeko parametroak eman zaizkio wfQuery() funtzioari<br />
Funtzioa: $1<br />
Kontsulta: $2',
'viewsource'           => 'Kodea ikusi',
'viewsourcefor'        => '$1(r)entzako',
'actionthrottled'      => 'Ekintzaren gainetik pasa da',
'actionthrottledtext'  => 'Spamaren aurkako neurri gisa ekintza hau denbora tarte laburrean aldi askotan egiteko mugapena duzu, eta muga hori zeharkatu duzu.
Saia zaitez berriro minutu batzuen buruan, mesedez.',
'protectedpagetext'    => 'Orrialde hau aldaketak saihesteko blokeatu egin da.',
'viewsourcetext'       => 'Orrialde honen testua ikusi eta kopiatu dezakezu:',
'protectedinterface'   => 'Orrialde honek softwarearentzako interfaze testua gordetzen du eta blokeatuta dago bandalismoak saihesteko.',
'editinginterface'     => "'''Oharra:''' Softwarearentzako interfaze testua duen orrialde bat aldatzen ari zara.
Orrialde honetako aldaketek erabiltzaile guztiei eragingo die.
Itzulpenetarako, [http://translatewiki.net/wiki/Main_Page?setlang=en translatewiki.net] erabili ezazu, MediaWiki proiektuan.",
'sqlhidden'            => '(ezkutuko SQL kontsulta)',
'cascadeprotected'     => "Orrialde hau aldaketen aurka babestua dago, ''kaskada'' aukerarekin babestu {{PLURAL:$1|duten orrialde honetan|dituzten orrialde hauetan}} txertaturik dagoelako:
$2",
'namespaceprotected'   => "Ez daukazu '''$1''' izen-tarteko orrialdeak aldatzeko baimenik.",
'customcssjsprotected' => 'Ez daukazu orrialde hau aldatzeko baimenik, beste erabiltzaile baten hobespenak definitzen dituelako.',
'ns-specialprotected'  => 'Ezin dira {{ns:special}} izen-tarteko orrialdeak editatu.',
'titleprotected'       => "[[User:$1|$1]]ek izenburu hau sortzea ekidin zuen.
Emandako arrazoia ''$2'' izan zen.",

# Login and logout pages
'logouttitle'                => 'Saioa ixtea',
'logouttext'                 => "'''Saioa itxi egin duzu.'''<br />
Erabiltzaile anonimo bezala jarraitu dezakezu {{SITENAME}} erabiltzen, edo saioa has dezakezu berriz erabiltzaile berdinarekin edo ezberdin batekin. Kontuan izan orrialde batzuk saioa hasita bazenu bezala ikus ditzakezula nabigatzailearen katxea garbitu arte.",
'welcomecreation'            => '== Ongi etorri, $1! ==

Zure kontua sortu egin da. Ez ahaztu [[Special:Preferences|{{SITENAME}}(e)ko hobespenak]] aldatzea.',
'loginpagetitle'             => 'Saio hasiera',
'yourname'                   => 'Erabiltzaile izena',
'yourpassword'               => 'Pasahitza',
'yourpasswordagain'          => 'Pasahitza berriz',
'remembermypassword'         => 'Nire saioa ordenagailu honetan gogoratu (gomendaturikoa)',
'yourdomainname'             => 'Zure domeinua',
'externaldberror'            => 'Kanpoko datu-base autentifikazio errorea gertatu da edo ez duzu zure kanpo kontua eguneratzeko baimenik.',
'loginproblem'               => '<b>Arazoa gertatu da saioa hasterakoan.</b><br />Saiatu berriz!',
'login'                      => 'Saioa hasi',
'loginprompt'                => 'Cookieak gaituta izatea beharrezkoa da {{SITENAME}}(e)n saioa hasteko.',
'userlogin'                  => 'Saioa hasi / kontua sortu',
'logout'                     => 'Saioa itxi',
'userlogout'                 => 'Saioa itxi',
'notloggedin'                => 'Saioa hasi gabe',
'nologin'                    => 'Ez duzu erabiltzaile konturik? $1.',
'nologinlink'                => 'Kontua sortu',
'createaccount'              => 'Kontua sortu',
'gotaccount'                 => 'Baduzu erabiltzaile kontua? $1.',
'gotaccountlink'             => 'Saioa hasi',
'createaccountmail'          => 'e-postaz',
'badretype'                  => 'Idatzitako pasahitzak ez dira berdinak.',
'userexists'                 => 'Aukeratutako erabiltzaile izena hartuta dago.
Mesedez, beste bat aukeratu.',
'youremail'                  => 'E-posta:',
'username'                   => 'Erabiltzaile izena:',
'uid'                        => 'Erabiltzaile zenbakia:',
'yourrealname'               => 'Benetako izena:',
'yourlanguage'               => 'Hizkuntza:',
'yourvariant'                => 'Aldaera',
'yournick'                   => 'Erabiltzaile izena:',
'badsig'                     => 'Baliogabeko sinadura; egiaztatu HTML etiketak.',
'badsiglength'               => 'Ezizen luzeegia hautatu duzu; $1 karakteretik behera izan behar du.',
'email'                      => 'E-posta',
'prefs-help-realname'        => '* Benetako izena (aukerakoa): zehaztea erabakiz gero, zure lanarentzako atribuzio bezala balioko du.',
'loginerror'                 => 'Errorea saioa hastean',
'prefs-help-email'           => 'E-posta helbidea aukerakoa da, baina zure pasahitza ahaztekotan berriro zure e-postara bidaltzeko aukera ematen dizu.
Gainera beste lankideek zurekin kontakta dezakete zure lankide edo lankide_eztabaid orrialdeak erabilita zure identitatea ezagutzera eman gabe.',
'prefs-help-email-required'  => 'E-mail helbidea derrigorrezkoa da.',
'nocookiesnew'               => 'Erabiltzaile kontua sortu da, baina ez da saioa hasi. {{SITENAME}}(e)k cookieak erabiltzen ditu saioekin eta ezgaituta dauzkazu. Gaitu itzazu mesedez, eta ondoren saiatu saioa hasten zure erabiltzaile izen eta pasahitz berriak erabiliz.',
'nocookieslogin'             => '{{SITENAME}}(e)k cookieak erabiltzen ditu saioekin eta ezgaituta dauzkazu. Gaitu itzazu mesedez, eta saiatu berriz.',
'noname'                     => 'Ez duzu baliozko erabiltzaile izen bat zehaztu.',
'loginsuccesstitle'          => 'Saio hasiera egina',
'loginsuccess'               => "'''Saioa hasi duzu {{SITENAME}}(e)n \"\$1\" izenarekin.'''",
'nosuchuser'                 => 'Ez dago "$1" izena duen lankiderik.
Lankide izenak zehatza izan behar du.
Egiaztatu ondo idatzi duzun, edo [[Special:UserLogin/signup|kontu berria sor ezazu]].',
'nosuchusershort'            => 'Ez dago "<nowiki>$1</nowiki>" izena duen erabiltzailerik. Egiaztatu ongi idatzi duzula.',
'nouserspecified'            => 'Erabiltzaile izena zehaztu beharra daukazu.',
'wrongpassword'              => 'Pasahitza ez da zuzena. Saiatu berriz.',
'wrongpasswordempty'         => 'Pasahitza hutsik dago. Saiatu berriz.',
'passwordtooshort'           => 'Zure pasahitza laburregia da. $1 karaktere izan behar ditu gutxienez.',
'mailmypassword'             => 'Pasahitza berria e-postaz bidali',
'passwordremindertitle'      => 'Pasahitzaren gogorarazpena {{SITENAME}}(e)tik',
'passwordremindertext'       => 'Norbaitek (zuk, ziurrenik, $1 IP helbidetik) pasahitz berri bat
eskatu du {{SITENAME}}(r)ako ($4). Momentu honetan erabiltzeko "$2" lankidearentzat 
pasahitza sortu da eta "$3"(r)a aldatu da. Hau zuk eginiko saiakuntza bazen, 
orain sartu beharko zara zure pasahitza berria aukeratzeko.

Beste norbaitek eskari hau egin bazuen, edo zure pasahitza gogoratu baduzu,
eta ez baduzu aldatu nahi, mezu honetan irakurritakoari jaramonik ez egin
eta aurretik zenuen pasahitza erabiltzen jarrai ezazu.',
'noemail'                    => 'Ez dago "$1" erabiltzailearen e-posta helbiderik gordeta.',
'passwordsent'               => 'Pasahitz berria bidali da "$1" erabiltzailearen e-posta helbidera.
Mesedez, saioa hasi jasotakoan.',
'blocked-mailpassword'       => 'Zure IP helbidea aldaketak egiteko blokeatuta dago, eta beraz ezin da pasahitza berreskuratzeko aukera erabili.',
'eauthentsent'               => 'Egiaztapen mezu bat bidali da zehaztutako e-posta helbidera.
Helbide horretara beste edozein mezu bidali aurretik, bertan azaltzen diren argibideak jarraitu behar dituzu, e-posta hori zurea dela egiaztatzeko.',
'throttled-mailpassword'     => 'Pasahitz gogorarazle bat bidali da jada azken $1 orduetan. Bandalismoa saihesteko pasahitz eskaera bat baino ezin da egin $1 orduz behin.',
'mailerror'                  => 'Errorea mezua bidaltzerakoan: $1',
'acct_creation_throttle_hit' => 'Sentitzen dugu, {{PLURAL:$1|erabiltzaile kontu bat sortu duzu|$1 erabiltzaile kontu sortu dituzu}} dagoeneko.
Ezin duzu gehiago sortu.',
'emailauthenticated'         => 'Zure e-posta helbidea $1-en baieztatu da.',
'emailnotauthenticated'      => 'Zure posta helbidea egiaztatu gabe dago. Ez da mezurik bidaliko hurrengo ezaugarrientzako.',
'noemailprefs'               => 'Zehaztu e-posta helbide bat ezaugarri hauek erabili ahal izateko.',
'emailconfirmlink'           => 'Egiaztatu zure e-posta helbidea',
'invalidemailaddress'        => 'Ezin da e-posta helbide hori ontzat eman baliogabeko formatua duela dirudielako. 

Mesedez, formatu egokia duen helbide bat zehaztu, edo hutsik utzi.',
'accountcreated'             => 'Kontua sortuta',
'accountcreatedtext'         => '$1 erabiltzaile kontua sortu egin da.',
'createaccount-title'        => '{{SITENAME}}-rako kontua sortu',
'createaccount-text'         => 'Norbaitek zure e-postarekin kontu bat sortu du {{SITENAME}}(e)n ($4) "$2" izenarekin eta "$3" pasahitzarekin.
Orain bertan sar zaitezke eta zure pasahitza aldatu.

Kontu honen sorrera akats bat dela uste baduzu mezu honi ez diozu zertan jaramonik egin.',
'loginlanguagelabel'         => 'Hizkuntza: $1',

# Password reset dialog
'resetpass'               => 'Kontuaren pasahitza hasieratu',
'resetpass_announce'      => 'E-postaz jasotako kode tenporal baten bidez saioa hasi duzu. Saioa hasierarekin jarraitzeko, pasahitz berri bat definitu beharra daukazu:',
'resetpass_text'          => '<!-- Testua hemen idatzi -->',
'resetpass_header'        => 'Pasahitza aldatu',
'resetpass_submit'        => 'Pasahitza definitu eta saioa hasi',
'resetpass_success'       => 'Zure pasahitza aldatu egin da! Saioa hasten...',
'resetpass_bad_temporary' => 'Baliogabeko pasahitz tenporala. Baliteke pasahitza jada aldatu edo pasahitz tenporal berri bat eskatu izana.',
'resetpass_forbidden'     => 'Ezin dira pasahitzak aldatu',
'resetpass_missing'       => 'Formularioko daturik ez.',

# Edit page toolbar
'bold_sample'     => 'Testu beltza',
'bold_tip'        => 'Testu beltza',
'italic_sample'   => 'Testu etzana',
'italic_tip'      => 'Testu etzana',
'link_sample'     => 'Loturaren izenburua',
'link_tip'        => 'Barne lotura',
'extlink_sample'  => 'http://www.example.com loturaren izenburua',
'extlink_tip'     => 'Kanpo lotura (gogoratu http:// aurrizkia)',
'headline_sample' => 'Goiburuko testua',
'headline_tip'    => '2. mailako goiburukoa',
'math_sample'     => 'Formula hemen idatzi',
'math_tip'        => 'Formula matematikoa (LaTeX)',
'nowiki_sample'   => 'Formatu gabeko testua hemen idatzi',
'nowiki_tip'      => 'Ez egin jaramonik wiki formatuari',
'image_sample'    => 'Adibidea.jpg',
'image_tip'       => 'Txertatutako irudia',
'media_sample'    => 'Adibidea.ogg',
'media_tip'       => 'Media fitxategi lotura',
'sig_tip'         => 'Zure sinadura data eta orduarekin',
'hr_tip'          => 'Lerro horizontala (gutxitan erabili)',

# Edit pages
'summary'                   => 'Laburpena',
'subject'                   => 'Izenburua',
'minoredit'                 => 'Hau aldaketa txikia da',
'watchthis'                 => 'Orrialde hau jarraitu',
'savearticle'               => 'Orrialdea gorde',
'preview'                   => 'Aurrebista erakutsi',
'showpreview'               => 'Aurrebista erakutsi',
'showlivepreview'           => 'Zuzeneko aurrebista',
'showdiff'                  => 'Aldaketak erakutsi',
'anoneditwarning'           => "'''Oharra:''' Ez duzu saioa hasi. Zure IP helbidea orrialde honetako historian gordeko da.",
'missingsummary'            => "'''Gogorarazpena:''' Ez duzu aldaketa laburpen bat zehaztu. Berriz ere gordetzeko aukeratzen baduzu, laburpen mezurik gordeko da.",
'missingcommenttext'        => 'Mesedez, iruzkin bat idatzi jarraian.',
'missingcommentheader'      => "'''Oharra:''' Ez duzu iruzkin honentzako gai/goiburuko bat ezarri. Berriz gordetzeko aukeratzen baduzu, hutsune horrekin gorde egingo da.",
'summary-preview'           => 'Laburpenaren aurreikuspena',
'subject-preview'           => 'Gaia/Izenburuaren aurreikuspena',
'blockedtitle'              => 'Erabiltzailea blokeatuta dago',
'blockedtext'               => "<big>'''Zure lankide izena edo IP helbidea blokeaturik dago'''</big>
Blokeoa $1(e)k egin zuen.
Emandako arrazoia ''$2'' da.

* Blokeoaren hasiera: $8
* Blokeoaren bukaera: $6
* Blokeoaren intentzioa: $7

$1 edo beste [[{{MediaWiki:Grouppage-sysop}}|administratzaile]] batekin kontakta dezakezu blokeaoren inguruan eztabaidatzeko. 
Ezin duzu 'lanki honi e-posta bidali' tresna bidali ez baduzu zuren [[Special:Preferences|hobespenetan]] baliozko e-mail helbide bat jarri edo tresna erabiltzea ere ukatu badizute.

Orain duzun IP helbidea $3 da eta zure blokeo zenbakia #$5 da.
Mesedez, datu guzti hauek idatzi egiten duzun edozein galderarako.",
'autoblockedtext'           => 'Zure IP helbidea automatikoki blokeaturik dago, $1(e)k blokeatu zuen beste erabiltzaile batek erabili zuelako. Emandako arrazoia honakoa da:

:\'\'$2\'\'

* Blokeoaren hasiera: $8
* Blokeoaren bukaera: $6
* Blokeo saiakera: $7

$1 edo beste [[{{MediaWiki:Grouppage-sysop}}|administratzaile]] bat kontakta dezakezu blokeoaren inguruan hitz egiteko.

Ohar zaitez ezin duzula "lankide honi e-mail bat bidali" tresna erabili ez baduzu zuren [[Special:Preferences|hobespenetan]] baliagarria den e-mail helbide bat eman eta gainera tresna hau erabiltzeko aukera ez badizute murriztu.

Orain duzun IP helbidea $3 da, eta blokeoaren zenbakia #$5 da.
Mesedez, detaile hauek eman itzazu egin nahi duzun edozein kontsulta egiteko garaian.',
'blockednoreason'           => 'ez da arrazoirik zehaztu',
'blockedoriginalsource'     => "Jarraian ikus daiteke '''$1'''(r)en kodea:",
'blockededitsource'         => "Jarraian ikus daitezke '''$1'''(e)n egin dituzun aldaketak:",
'whitelistedittitle'        => 'Saioa hastea beharrezkoa da aldaketak egiteko',
'whitelistedittext'         => '$1 behar duzu orrialdeak aldatu ahal izateko..',
'whitelistreadtitle'        => 'Saioa hastea beharrezkoa da irakurtzeko',
'whitelistreadtext'         => '[[Special:Userlogin|Saioa hasi]] behar duzu orrialdeak irakurtzeko.',
'whitelistacctitle'         => 'Ez daukazu kontu berri bat sortzeko baimenik',
'whitelistacctext'          => 'Wiki honetan kontu berriak sortu ahal izateko [[Special:Userlogin|saioa hasi]] eta baimena izatea beharrezko da.',
'confirmedittitle'          => 'E-posta egiaztatzea beharrezkoa da aldaketak egiteko',
'confirmedittext'           => 'Orrialdeetan aldaketak egin aurretik zure e-posta helbidea egiaztatu beharra daukazu. Mesedez, zehaztu eta egiaztatu zure e-posta helbidea [[Special:Preferences|hobespenetan]].',
'nosuchsectiontitle'        => 'Ez da atala existitzen',
'nosuchsectiontext'         => 'Existitzen ez den atala editatzen saiatu zara. $1 atala existitzen ez denez, ezin dira zure aldaketak inon gorde.',
'loginreqtitle'             => 'Saioa hastea beharrezkoa',
'loginreqlink'              => 'saioa hasi',
'loginreqpagetext'          => 'Beste orrialde batzuk ikusteko $1 beharra daukazu..',
'accmailtitle'              => 'Pasahitza bidali da.',
'accmailtext'               => '"$1"(r)en pasahitza $2(e)ra bidali da.',
'newarticle'                => '(Berria)',
'newarticletext'            => "Orrialde hau ez da existitzen oraindik. Orrialde sortu nahi baduzu, beheko koadroan idazten hasi zaitezke (ikus [[{{MediaWiki:Helppage}}|laguntza orrialdea]] informazio gehiagorako). Hona nahi gabe etorri bazara, nabigatzaileko '''atzera''' botoian klik egin.",
'anontalkpagetext'          => "----''Honako hau konturik sortu ez edo erabiltzen ez duen erabiltzaile anonimo baten eztabaida orria da. Bere IP helbidea erabili beharko da beraz identifikatzeko. Erabiltzaile batek baino gehiagok IP bera erabil dezakete ordea. Erabiltzaile anonimoa bazara eta zurekin zerikusirik ez duten mezuak jasotzen badituzu, mesedez [[Special:UserLogin|Izena eman edo saioa hasi]] etorkizunean horrelakoak gerta ez daitezen.''",
'noarticletext'             => 'Oraindik ez dago testurik orrialde honetan.
Beste orrialde batzuetan [[Special:Search/{{PAGENAME}}|bilatu dezakezu izenburu hau]],
<span class="plainlinks">[{{fullurl:Special:Log|page={{urlencode:{{FULLPAGENAME}}}}}} bilatu lotutako logak],
edo [{{fullurl:{{FULLPAGENAME}}|action=edit}} berau aldatu ere egin dezakezu]</span>.',
'userpage-userdoesnotexist' => '"$1" lankidea ez dago erregistatuta. Mesedez, konprobatu orri hau editatu/sortu nahi duzun.',
'clearyourcache'            => "'''Oharra - Gorde ondoren zure nabigatzailearen katxea ekidin beharko duzu aldaketak ikusteko.''' '''Mozilla / Firefox / Safari:''' ''Shift'' tekla sakatu birkargatzeko momentuan, edo ''Ctrl-Shift-R'' sakatu (''Cmd-Shift-R'' Apple Mac baten); '''Internet Explorer:''' ''Ctrl'' tekla sakatu birkargatzeko momentuan, edo ''Ctrl-F5'' sakatu; '''Konqueror:''': Birkargatzeko klik egin, edo F5 sakatu, besterik ez; '''Opera''' erabiltzaileek ''Tresnak-Hobespenak'' atalera jo eta katxea garbitzeko aukera hautatu.",
'usercssjsyoucanpreview'    => "'''Laguntza:''' Zure CSS/JS berria gorde aurretik probatzeko 'Aurrebista erakutsi' botoia erabili.",
'usercsspreview'            => "'''Ez ahaztu zure CSS kodea aurreikusten zabiltzala.'''
'''Oraindik gorde gabe dago!'''",
'userjspreview'             => "'''Gogoratu zure JavaScript kodea probatu/aurreikusten zabiltzala, oraindik ez da gorde!'''",
'userinvalidcssjstitle'     => "'''Oharra:''' Ez da \"\$1\" itxura existitzen. Kontuan izan .css eta .js fitxategi pertsonalizatuen izenak letra xehez idatzi behar direla; adibidez, {{ns:user}}:Adibide/monobook.css, eta ez {{ns:user}}:Adibide/Monobook.css.",
'updated'                   => '(Eguneratua)',
'note'                      => "'''Oharra:'''",
'previewnote'               => "'''Gogoratu hau aurreikusketa bat dela, beraz gorde egin beharko duzu!'''",
'previewconflict'           => 'Aurreikuspenak aldaketen koadroan idatzitako testua erakusten du, gorde ondoren agertuko den bezala.',
'session_fail_preview'      => "'''Sentitzen dugu! Ezin izan da zure aldaketa prozesatu, saioko datu batzuen galera dela-eta. Mesedez, saiatu berriz. Arazoak jarraitzen badu, saiatu saioa amaitu eta berriz hasten.'''",
'session_fail_preview_html' => "'''Sentitzen dugu! Ezin izan dugu zure aldaketa burutu, saio datu galera bat medio.'''

''Wiki honek HTML kodea onartzen duenez, aurreikuspena ezgaituta dago JavaScript erasoak saihestu asmoz.''

'''Aldaketa saiakera hau zuzena baldin bada, saiatu berriro mesedez. Arazoak jarraitzen badu, saiatu saioa itxi eta berriz hasten.'''",
'token_suffix_mismatch'     => "'''Zure aldaketa ezeztatua izan da zure bezeroak puntuazio-karaktereak itxuragabetu dituelako.
Aldaketa ezeztatua izan da testuaren galtzea galarazteko.
Hau batzuetan gertatzen da buggyan oinarritutako web proxy zerbitzua erabiltzean.'''",
'editing'                   => '$1 aldatzen',
'editinguser'               => "'''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]]) erabiltzailea aldatzen",
'editingsection'            => '$1 aldatzen (atala)',
'editingcomment'            => '$1 aldatzen (atal berria)',
'editconflict'              => 'Aldaketa gatazka: $1',
'explainconflict'           => 'Zu orrialdea aldatzen hasi ondoren beste norbaitek ere aldaketak egin ditu. Goiko testu koadroan ikus daiteke orrialdeak uneotan duen edukia. Zure aldaketak beheko testu koadroan ikus daitezke. Zure testua dagoenarekin elkartu beharko duzu. Orrialdea gordetzeko erabakitzen duzun unean goiko koadroko edukia <b>bakarrik</b> gordeko da.<br />',
'yourtext'                  => 'Zure testua',
'storedversion'             => 'Gordetako bertsioa',
'nonunicodebrowser'         => "'''OHARRA: Zure nabigatzailea ez dator Unicode arauarekin bat. Artikuluak modu seguruan aldatu ahal izateko beste sistema bat gaitu da: ASCII ez diren karaktereak kode hamaseitar bezala agertuko dira aldaketa koadroan.'''",
'editingold'                => "'''KONTUZ: Artikulu honen bertsio zahar bat aldatzen ari zara. Gorde egiten baduzu, azkenengo aldaketa baino lehenagoko aldakuntzak, ezabatuak izango dira.'''",
'yourdiff'                  => 'Ezberdintasunak',
'copyrightwarning'          => "Kontuan izan {{SITENAME}}(e)n egindako ekarpen guztiak $2 baldintzapean argitaratzen direla (ikus $1 informazio gehiagorako). Zure testua banatzeko baldintza hauekin ados ez bazaude, ez ezazu bidali.<br />
Era berean, bidaltzen ari zaren edukia zuk zeuk idatzitakoa dela edo jabetza publikoko edo baliabide aske batetik kopiatu duzula zin egin ari zara.
'''EZ BIDALI BAIMENIK GABEKO COPYRIGHTDUN EDUKIRIK!'''",
'copyrightwarning2'         => "Mesedez, kontuan izan {{SITENAME}}(e)n egindako ekarpen guztiak besteek aldatu edo ezabatu ditzaketela. Ez baduzu besteek aldaketak egitea nahi, ez ezazu bidali.<br />
Era berean, bidaltzen ari zaren edukia zuk zeuk idatzitakoa dela edo jabetza publikoko edo baliabide aske batetik kopiatu duzula zin egin ari zara (ikus $1 informazio gehiagorako).
'''EZ BIDALI BAIMENIK GABEKO COPYRIGHTDUN EDUKIRIK!'''",
'longpagewarning'           => "'''OHARRA: Orrialde honek $1 kilobyteko tamaina du; nabigatzaile batzuek arazoak izan litzakete 32 kb-tik gorako testuekin. Mesedez, saiatu orrialdea atal txikiagoetan banatzen.'''",
'longpageerror'             => "'''ERROREA: Bidali duzun testuak $1 kilobyteko luzera du, eta $2 kilobyteko maximoa baino luzeagoa da. Ezin da gorde.'''",
'readonlywarning'           => '<strong>OHARRA: Datu-basea blokeatu egin da mantenu lanak burutzeko, beraz ezingo dituzu orain zure aldaketak gorde. Testua fitxategi baten kopiatu dezakezu, eta beranduago erabiltzeko gorde.</strong>',
'protectedpagewarning'      => "'''OHARRA:  Orri hau blokeaturik dago, administratzaileek soilik eraldatu dezakete.'''",
'semiprotectedpagewarning'  => '<big><strong>Oharra: Orrialde hau erregistratutako erabiltzaileek bakarrik aldatzeko babestuta dago.</strong></big>',
'cascadeprotectedwarning'   => "'''Oharra:''' Orrialde hau blokeatua izan da eta administratzaileek baino ez dute berau aldatzeko ahalmena, honako {{PLURAL:$1|orrialdeko|orrialdeetako}} kaskada-babesean txertatuta dagoelako:",
'titleprotectedwarning'     => "'''OHARRA:  Orrialde hau blokeatuta dago eta bakarrik erabiltzaile batzuek sortu dezakete.'''",
'templatesused'             => 'Orrialde honetan erabiltzen diren txantiloiak:',
'templatesusedpreview'      => 'Aurreikuspen honetan erabiltzen diren txantiloiak:',
'templatesusedsection'      => 'Atal honetan erabiltzen diren txantiloiak:',
'template-protected'        => '(babestua)',
'template-semiprotected'    => '(erdi-babestua)',
'edittools'                 => '<!-- Hemen jarritako testua aldaketa eta igoera formularioen azpian agertuko da. -->',
'nocreatetitle'             => 'Orrialdeak sortzea mugatuta',
'nocreatetext'              => 'Gune honek orrialde berriak sortzeko gaitasuna mugatu du. Atzera egin dezakezu existitzen den orrialde bat aldatzeko, edo [[Special:UserLogin|saio hasi edo kontua sortu]].',
'nocreate-loggedin'         => 'Ez daukazu orrialde berriak sortzeko baimenik.',
'permissionserrors'         => 'Baimen erroreak',
'permissionserrorstext'     => 'Ez duzu hori egiteko baimenik, hurrengo {{PLURAL:$1|arrazoia dela eta|arrazoiak direla eta}}:',
'recreate-deleted-warn'     => "'''Oharra: Lehenago ezabatutako orrialdea birsortzen ari zara.'''

Pentsatu ea orrialde hau editatzen jarraitzeak zentzurik baduen.
Hemen duzu orrialde honen ezabaketa erregistroa badaezpada ere:",

# "Undo" feature
'undo-success' => 'Aldaketa desegin daiteke.
Mesedez beheko alderaketa egiaztatu, egin nahi duzuna hori dela frogatzeko, eta ondoren azpiko aldaketak gorde, aldaketa desegiten amaitzeko.',
'undo-failure' => 'Ezin izan da aldaketa desegin tarteko aldaketekin gatazkak direla-eta.',
'undo-summary' => '[[Special:Contributions/$2|$2(r)en]] $1 berrikuspena desegin da ([[User talk:$2|Eztabaida]])',

# Account creation failure
'cantcreateaccounttitle' => 'Ezin izan da kontua sortu',
'cantcreateaccount-text' => "IP helbide honetatik ('''$1''') kontu berria sortzeko aukera blokeatu du [[User:$3|$3]](e)k.

$3(e)k emandako arrazoia: ''$2''",

# History pages
'viewpagelogs'        => 'Orrialde honen erregistroak ikusi',
'nohistory'           => 'Orrialde honek ez dauka aldaketa historiarik.',
'revnotfound'         => 'Ezin izan da berrikuspena aurkitu',
'revnotfoundtext'     => 'Ezin izan da eskatzen ari zaren orrialdearen berrikuspen zaharra aurkitu. Mesedez, egiaztatu orrialde honetara iristeko erabili duzun URLa.',
'loadhist'            => 'Orrialdearen historia kargatzen',
'currentrev'          => 'Oraingo berrikuspena',
'revisionasof'        => '$1(e)ko berrikuspena',
'revision-info'       => '$2(r)en berrikusketa, ordua: $1',
'previousrevision'    => '←Berrikuspen zaharragoa',
'nextrevision'        => 'Berrikuspen berriagoa→',
'currentrevisionlink' => 'Oraingo berrikuspena ikusi',
'cur'                 => 'orain',
'next'                => 'hurrengoa',
'last'                => 'azkena',
'orig'                => 'orij',
'page_first'          => 'lehena',
'page_last'           => 'azkena',
'histlegend'          => 'Diff hautapena: hautatu alderatu nahi dituzun bi bertsioak eta beheko botoian klik egin.<br />
Legenda: (orain) = oraingo bertsioarekiko ezberdintasuna,
(azkena) = aurreko bertsioarekiko ezberdintasuna, t = aldaketa txikia.',
'deletedrev'          => '[ezabatuta]',
'histfirst'           => 'Lehena',
'histlast'            => 'Azkena',
'historysize'         => '({{PLURAL:$1|byte 1|$1 byte}})',
'historyempty'        => '(hutsik)',

# Revision feed
'history-feed-title'          => 'Berrikuspenen historia',
'history-feed-description'    => 'Wikiko orrialde honen berrikuspenen historia',
'history-feed-item-nocomment' => 'nork: $1 noiz: $2', # user at time
'history-feed-empty'          => 'Eskatutako orrialdea ez da existitzen. Baliteke wikitik ezabatu edo izenez aldatu izana. Saiatu [[Special:Search|wikian zerikusia duten orrialdeak bilatzen]].',

# Revision deletion
'rev-deleted-comment'         => '(iruzkina ezabatu da)',
'rev-deleted-user'            => '(erabiltzailea ezabatu da)',
'rev-deleted-event'           => '(log ekintza ezabatu da)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Orrialdearen berrikuspen hau artxibo publikoetatik kendu da. Xehetasunak [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} ezabaketa erregistroan] ikus daitezke.
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
Orrialdearen berrikuspen hau artxibo publikoetatik kendu da. Guneko administratzaile bezala ikusteko aukera daukazu ordea; xehetasunak [{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} ezabaketa erregistroan] ikus ditzakezu.
</div>',
'rev-delundel'                => 'erakutsi/ezkutatu',
'revisiondelete'              => 'Berrikuspenak ezabatu/leheneratu',
'revdelete-nooldid-title'     => 'Helburu berrikuspenik ez',
'revdelete-nooldid-text'      => 'Ez d(it)uzu eragiketa hau burutzeko helburu berrikuspena(k) zehaztu.',
'revdelete-selected'          => "'''{{PLURAL:$2|[[:$1]](r)en hautatutako berrikuspena:|[[:$1]](r)en hautatutako berrikuspenak}}'''",
'logdelete-selected'          => "'''$1'''(r)entzat aukeratutako erregistro {{PLURAL:$2|gertaera|gertaerak}}:",
'revdelete-text'              => "'''Ezabatutako berrikuspenek orrialdearen historian agertzen jarraituko dute, baina bere edukiak ez dira publikoki eskuratu ahal izango.'''

{{SITENAME}}ko administratzaileek ezkutuko eduki hau ikusteko aukera izango dute, eta baita leheneratzeko ere, gunearen arduradunek beste mugapenen bat ezartzen ez badute behintzat.
Mesedez berretsi ezazu hau egin nahi zenuela, ondorioak ulertzen dituzula eta [[{{MediaWiki:Policy-url}}|politiken arabera]] egiten ari zarela.",
'revdelete-legend'            => 'Berrikuspen mugapenak ezarri:',
'revdelete-hide-text'         => 'Berrikuspenaren testua ezkutatu',
'revdelete-hide-name'         => 'Helburua eta ekintza izkutatu',
'revdelete-hide-comment'      => 'Aldaketaren iruzkina ezkutatu',
'revdelete-hide-user'         => 'Egilearen erabiltzaile izena/IPa ezkutatu',
'revdelete-hide-restricted'   => 'Mugapen hauek administratzaileei zein besteei aplikatu',
'revdelete-suppress'          => 'Administratzaileen eta bestelakoen datuak kendu',
'revdelete-hide-image'        => 'Fitxategiaren edukia ezkutatu',
'revdelete-unsuppress'        => 'Berrezarritako aldaketen mugak kendu',
'revdelete-log'               => 'Erregistroaren iruzkina:',
'revdelete-submit'            => 'Hautatutako berrikuspenari aplikatu',
'revdelete-logentry'          => '[[$1]](r)entzako berriskupen ikusgaitasuna aldatu da',
'logdelete-logentry'          => '[[$1]]en gertakarien ikusgarritasuna aldatu da',
'revdelete-logaction'         => '{{PLURAL:$1|Aldaketa $1i $2 modua jarri zaio|$1 aldaketei $ modua jarri zaie}}',
'revdelete-success'           => "'''Berrikuspenen ikusgarritasuna ondo ezarri da.'''",
'logdelete-success'           => "'''Log ikusgarritasuna ondo ezarri da.'''",

# Oversight log
'oversightlog' => 'Gainbegiratze erregistroa',

# History merging
'mergehistory'                     => 'Orrialdeen historiak bateratu',
'mergehistory-box'                 => 'Bi orrialderen berrikuspenak bateratu:',
'mergehistory-from'                => 'Jatorrizko orrialdea:',
'mergehistory-into'                => 'Helburu orrialdea:',
'mergehistory-list'                => 'Batu daitekeen aldaketen historia',
'mergehistory-merge'               => '[[:$1]]-(e)n ondorengo berrikuspena [[:$2]]-(r)ekin bateratu daiteke.
Zutabe botoia erabili zehaztutako orduan sortutako berrikuspenak bakarrik bateratzeko.
Kontura zaitez nabigazio loturek, zutabea ezabatu dezakela.',
'mergehistory-go'                  => 'Aldaketa bateragarriak erakutsi',
'mergehistory-submit'              => 'Berrikuspenak bateratu',
'mergehistory-empty'               => 'Ezin da berrikuspenik bateratu',
'mergehistory-success'             => '[[:$1]](e)ko {{PLURAL:$3|berrikuspen|berrikuspen}} bateratu egin dira [[:$2]](e)n.',
'mergehistory-fail'                => 'Ezin izan da historia bateratu; egiaztatu orrialde eta denbora parametroak.',
'mergehistory-no-source'           => 'Ez da $1 jatorrizko orrialdea existitzen.',
'mergehistory-no-destination'      => 'Ez da $1 helburu orrialdea existitzen.',
'mergehistory-invalid-source'      => 'Jatorrizko orrialdea baliozko izenburua izan behar da.',
'mergehistory-invalid-destination' => 'Helburu orrialdea baliozko izenburua izan behar da.',

# Merge log
'mergelog'           => 'Bateratze erregistroa',
'pagemerge-logentry' => '[[$1]] [[$2]](r)ekin batu da ($3(e)raino berrikuspenak)',
'revertmerge'        => 'Bereiztu',
'mergelogpagetext'   => 'Jarraian dagoen zerrendak orrialde baten historiatik beste batera egindako azken bateratzeak erakusten ditu.',

# Diffs
'history-title'           => '"$1" orrialdearen historia laburpena',
'difference'              => '(Bertsioen arteko ezberdintasunak)',
'lineno'                  => '$1. lerroa:',
'compareselectedversions' => 'Hautatutako bertsioak alderatu',
'editundo'                => 'desegin',
'diff-multi'              => '({{PLURAL:$1|Ez da tarteko berrikuspen 1|Ez dira tarteko $1 berrikuspen}} erakusten.)',

# Search results
'searchresults'         => 'Bilaketaren emaitzak',
'searchresulttext'      => '{{SITENAME}}(e)n bilaketak egiteko informazio gehiagorako, ikus [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'        => "'''[[:$1]]''' bilatu duzu",
'searchsubtitleinvalid' => "'''$1''' bilatu duzu",
'noexactmatch'          => "'''Ez dago \"\$1\" izenburua duen orrialderik.''' [[:\$1|Orrialde hau]] sortu dezakezu.",
'noexactmatch-nocreate' => "'''Ez dago \"\$1\" izenburua duen orrialderik.'''",
'toomanymatches'        => 'Aukera gehiegi aurkitu dira, saia zaitez beste eskaera ezberdin batekin',
'titlematches'          => 'Emaitzak artikuluen izenburuetan',
'notitlematches'        => 'Ez dago bat datorren orrialde izenbururik',
'textmatches'           => 'Emaitza orrialde testuetan',
'notextmatches'         => 'Ez dago bat datorren orrialde testurik',
'prevn'                 => 'aurreko $1ak',
'nextn'                 => 'hurrengo $1ak',
'viewprevnext'          => 'Ikusi ($1) ($2) ($3).',
'showingresults'        => "Jarraian {{PLURAL:$1|emaitza '''1''' ikus daiteke|'''$1''' emaitza ikus daitezke}}, #'''$2'''.etik hasita.",
'showingresultsnum'     => "Hasieran #'''$2''' duten {{PLURAL:$3|emaitza '''1'''|'''$3''' emaitza}} erakusten dira jarraian.",
'nonefound'             => "'''Oharra''': Bakarrik izen-tarte batzuetan egiten da berez bilaketa.
Saia zaitez zure eskeraren aurretik ''all:'' jartzen eduki guztien artean bilatzeko (eztabaida orrialdea, txantiloiak, etab. sartuz) edo bestela erabil ezazu nahi duzun izen-tartea aurrizki gisa.",
'powersearch'           => 'Bilatu',
'powersearchtext'       => 'Izen-tarte hauetan bilatu:<br />$1<br />$2 Birzuzenketen zerrenda<br />$3 $9 bilatu',
'searchdisabled'        => '{{SITENAME}}(e)n ezgaituta dago bilaketa. Dena dela, Google erabiliz ere egin dezakezu bilaketa. Kontuan izan bertan dituzten {{SITENAME}}(e)ko emaitzak zaharkituta egon daitezkeela.',

# Preferences page
'preferences'              => 'Hobespenak',
'mypreferences'            => 'Nire hobespenak',
'prefs-edits'              => 'Aldaketa kopurua:',
'prefsnologin'             => 'Saioa hasi gabe',
'prefsnologintext'         => '<span class="plainlinks">[{{fullurl:Special:UserLogin|returnto=$1}} Izena eman] behar duzu zure hobespenak ezartzeko.',
'prefsreset'               => 'Hobespenak hasieratu egin dira.',
'qbsettings'               => 'Laster-barra',
'qbsettings-none'          => 'Ezein ere',
'qbsettings-fixedleft'     => 'Eskuinean',
'qbsettings-fixedright'    => 'Ezkerrean',
'qbsettings-floatingleft'  => 'Ezkerrean mugikor',
'qbsettings-floatingright' => 'Eskubian flotatzen',
'changepassword'           => 'Pasahitza aldatu',
'skin'                     => 'Itxura',
'math'                     => 'Formulak',
'dateformat'               => 'Data formatua',
'datedefault'              => 'Hobespenik ez',
'datetime'                 => 'Data eta ordua',
'math_failure'             => 'Interpretazio errorea',
'math_unknown_error'       => 'errore ezezaguna',
'math_unknown_function'    => 'funtzio ezezaguna',
'math_lexing_error'        => 'errore lexikoa',
'math_syntax_error'        => 'sintaxi errorea',
'math_image_error'         => 'PNG bilakatze errorea; egiaztatu latex, dvips, gs eta convert ongi instalatuta daudela',
'math_bad_tmpdir'          => 'Ezin da math direktorio tenporala sortu edo bertan idatzi',
'math_bad_output'          => 'Ezin da math direktorioa sortu edo bertan idatzi',
'math_notexvc'             => 'texvc exekutagarria falta da; mesedez, ikus math/README konfiguratzeko.',
'prefs-personal'           => 'Erabiltzaile profila',
'prefs-rc'                 => 'Azken aldaketak',
'prefs-watchlist'          => 'Jarraipen zerrenda',
'prefs-watchlist-days'     => 'Jarraipen zerrendan erakutsi beharreko egun kopurua:',
'prefs-watchlist-edits'    => 'Jarraipen zerrendan erakutsi beharreko aldaketa kopurua:',
'prefs-misc'               => 'Denetarik',
'saveprefs'                => 'Gorde',
'resetprefs'               => 'Hasieratu',
'oldpassword'              => 'Pasahitz zaharra:',
'newpassword'              => 'Pasahitz berria:',
'retypenew'                => 'Pasahitz berria berriz idatzi:',
'textboxsize'              => 'Aldatzen',
'rows'                     => 'Lerroak:',
'columns'                  => 'Zutabeak:',
'searchresultshead'        => 'Bilaketa',
'resultsperpage'           => 'Emaitza orrialdeko:',
'contextlines'             => 'Lerro emaitzako:',
'contextchars'             => 'Lerro bakoitzeko karaktere kopurua:',
'stub-threshold'           => '<a href="#" class="stub">stub link</a> formaturako atalasea (byteak):',
'recentchangesdays'        => 'Aldaketa berrietan erakutsi beharreko egun kopurua:',
'recentchangescount'       => 'Aldaketa berrietan, historian eta erregistroetan erakusteko aldaketa kopurua, lehenetsita:',
'savedprefs'               => 'Zure hobespenak gorde egin dira.',
'timezonelegend'           => 'Ordu zona',
'timezonetext'             => 'Zure ordu lokala eta zerbitzariaren orduaren (UTC) arteko ezberdintasuna.',
'localtime'                => 'Ordu lokala',
'timezoneoffset'           => 'Ezberdintasuna¹',
'servertime'               => 'Zerbitzariko ordua',
'guesstimezone'            => 'Nabigatzailetik jaso',
'allowemail'               => 'Beste erabiltzaileengandik e-posta mezuak jasotzea gaitu',
'defaultns'                => 'Izen-tarte hauetan bilatu lehenetsitzat:',
'default'                  => 'lehenetsia',
'files'                    => 'Fitxategiak',

# User rights
'userrights-lookup-user'        => 'Erabiltzaile taldeak kudeatu',
'userrights-user-editname'      => 'Erabiltzaile izena idatzi:',
'editusergroup'                 => 'Erabiltzaile taldeak editatu',
'userrights-editusergroup'      => 'Erabiltzaile taldeak editatu',
'saveusergroups'                => 'Erabiltzaile taldeak gorde',
'userrights-groupsmember'       => 'Partaide da hemen:',
'userrights-groupsremovable'    => 'Ezabatu daitezkeen taldeak:',
'userrights-groupsavailable'    => 'Existitzen diren taldeak:',
'userrights-groupshelp'         => 'Hautatu erabiltzaileari gehitu edo kendu nahi dizkiozun taldeak. Deshautatutako taldeak ez dira aldatuko. Talde bat deshautatu dezakezu CTRL + Ezker Klika eginez',
'userrights-reason'             => 'Aldatzeko arrazoia:',
'userrights-available-none'     => 'Ez zenuke talde kidetza aldatu beharko.',
'userrights-available-add-self' => 'Zure burua honako {{PLURAL:$2|talde honetara|talde hauetara}} gehitu dezakezu: $1',
'userrights-no-interwiki'       => 'Ez duzu beste wikietan erabiltzaile eskumenak aldatzeko baimenik.',
'userrights-nodatabase'         => '$1 datubasea ez da existitzen edo ez dago lokalki.',
'userrights-nologin'            => 'Administratzaile kontu batekin [[Special:UserLogin|hasi behar duzu saioa]] erabiltzaile eskubideak esleitzeko.',
'userrights-notallowed'         => 'Zure kontuak ez du baimenik erabiltzaile eskumenak emateko.',

# Groups
'group'               => 'Taldea:',
'group-autoconfirmed' => 'Lankide autokonfirmatuak',
'group-bot'           => 'Bot-ak',
'group-sysop'         => 'Administratzaileak',
'group-bureaucrat'    => 'Burokratak',
'group-all'           => '(guztiak)',

'group-autoconfirmed-member' => 'Erabiltzaile autokonfirmatua',
'group-bot-member'           => 'Bot-a',
'group-sysop-member'         => 'Administratzaile',
'group-bureaucrat-member'    => 'Burokrata',

'grouppage-autoconfirmed' => '{{ns:project}}:Erabiltzaile autokonfirmatuak',
'grouppage-bot'           => '{{ns:project}}:Bot-ak',
'grouppage-sysop'         => '{{ns:project}}:Administratzaileak',
'grouppage-bureaucrat'    => '{{ns:project}}:Burokratak',

# User rights log
'rightslog'      => 'Erabiltzaile eskubideen erregistroa',
'rightslogtext'  => 'Erabiltzaile eskubideetan izandako aldaketen erregistroa da hau.',
'rightslogentry' => '$1(r)en partaidetza aldatu da $2(e)tik $3(e)ra',
'rightsnone'     => '(bat ere ez)',

# Recent changes
'nchanges'                          => '{{PLURAL:$1|aldaketa 1|$1 aldaketa}}',
'recentchanges'                     => 'Aldaketa berriak',
'recentchangestext'                 => 'Orrialde honetan wiki honetan egindako azken aldaketak erakusten dira.',
'recentchanges-feed-description'    => 'Sindikazio honetan wikian eginiko azkeneko aldaketak jarrai daitezke.',
'rcnote'                            => "Jarraian azken {{PLURAL:$2|eguneko|'''$2'''egunetako}} azken {{PLURAL:$1|aldaketa erakusten da|'''$1''' aldaketak erakusten dira}}, $3 eguneratuta.",
'rcnotefrom'                        => 'Jarraian azaltzen diren aldaketak data honetatik aurrerakoak dira: <b>$2</b> (gehienez <b>$1</b> erakusten dira).',
'rclistfrom'                        => 'Erakutsi $1 ondorengo aldaketa berriak',
'rcshowhideminor'                   => '$1 aldaketa txikiak',
'rcshowhidebots'                    => '$1 bot-ak',
'rcshowhideliu'                     => '$1 erabiltzaile erregistratuak',
'rcshowhideanons'                   => '$1 erabiltzaile anonimoak',
'rcshowhidepatr'                    => '$1 patruilatutako aldaketak',
'rcshowhidemine'                    => '$1 nire ekarpenak',
'rclinks'                           => 'Erakutsi azken $2 egunetako $1 aldaketak<br />$3',
'diff'                              => 'ezb',
'hist'                              => 'hist',
'hide'                              => 'Ezkutatu',
'show'                              => 'Erakutsi',
'minoreditletter'                   => 't',
'newpageletter'                     => 'B',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|lankide|lankide}} jarraitzen]',
'rc_categories'                     => 'Kategorietara mugatu ("|" karaktereaz banandu)',
'rc_categories_any'                 => 'Edozein',
'newsectionsummary'                 => '/* $1 */ atal berria',

# Recent changes linked
'recentchangeslinked'          => 'Lotutako orrialdeen aldaketak',
'recentchangeslinked-title'    => '"$1"(e)kin harremanetan dauden aldaketak',
'recentchangeslinked-noresult' => 'Emandako epean ez da egon aldaketarik loturiko orrialdetan.',

# Upload
'upload'                      => 'Fitxategia igo',
'uploadbtn'                   => 'Fitxategia igo',
'reupload'                    => 'Berriz igo',
'reuploaddesc'                => 'Igotzeko formulariora itzuli.',
'uploadnologin'               => 'Saioa hasi gabe',
'uploadnologintext'           => 'Fitxategiak igotzeko [[Special:UserLogin|saioa hasi]] behar duzu.',
'upload_directory_read_only'  => 'Web zerbitzariak ez dauka igoera direktorioan ($1) idazteko baimenik.',
'uploaderror'                 => 'Errorea igotzerakoan',
'uploadtext'                  => "Fitxategiak igotzeko beheko formularioa erabil dezakezu. Aurretik igotako irudiak ikusi edo bilatzeko [[Special:Imagelist|igotako fitxategien zerrendara]] jo. Igoerak eta ezabatutakoak [[Special:Log/upload|igoera erregistroan]] zerrendatzen dira.

Orrialde baten irudi bat txertatzeko, erabili kode hauetako bat:
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:Fitxategia.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:Fitxategia.png|testu alternatiboa]]</nowiki>''' edo
'''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:Fitxategia.ogg]]</nowiki>''' irudia zuzenean erabiltzeko.",
'upload-permitted'            => 'Baimendutako fitxategi motak: $1.',
'upload-preferred'            => 'Fitxategi mota hobetsiak: $1.',
'upload-prohibited'           => 'Debekatutako fitxategi motak: $1.',
'uploadlog'                   => 'igoera erregistroa',
'uploadlogpage'               => 'Igoera erregistroa',
'uploadlogpagetext'           => 'Jarraian azken igoeren zerrenda ikus daiteke.',
'filename'                    => 'Fitxategi izena',
'filedesc'                    => 'Laburpena',
'fileuploadsummary'           => 'Laburpena:',
'filestatus'                  => 'Copyright egoera:',
'filesource'                  => 'Iturria:',
'uploadedfiles'               => 'Igotako fitxategiak',
'ignorewarning'               => 'Oharra ezikusi eta fitxategia gorde.',
'ignorewarnings'              => 'Edozein ohar ezikusi.',
'minlength1'                  => 'Fitxategi izenek letra bat izan behar dute gutxienez.',
'illegalfilename'             => '"$1" fitxategiaren izenak orrialdeen izenburuetan erabili ezin diren karaktereak ditu. Mesedez, fitxategiari izena aldatu eta saiatu berriz igotzen.',
'badfilename'                 => 'Irudiaren izena aldatu da: "$1".',
'filetype-badmime'            => 'Ezin dira "$1" MIME motako fitxategiak igo.',
'filetype-bad-ie-mime'        => 'Ezin da fitxategia igo, Internet Explorerek "$1" bezala detektatuko lukeelako, zein fitxategi mota ez onartua eta arriskutsua den.',
'filetype-unwanted-type'      => "'''\".\$1\"''' ez da fitxategi mota hobetsia.  Hobetsi diren fitxategi motak \$2 dira.",
'filetype-missing'            => 'Fitxategi honek ez du luzapenik (adibidez, ".jpg").',
'large-file'                  => 'Ez da gomendagarria fitxategiak $1 baino handiagoak izatea; fitxategi honen tamaina: $2.',
'largefileserver'             => 'Fitxategi hau zerbitzariak baimentzen duena baino handiagoa da.',
'emptyfile'                   => 'Badirudi igotzen ari zaren fitxategia hutsik dagoela. Mesedez, egiaztatu fitxategi hori dela igo nahi duzuna.',
'fileexists'                  => "Badago izen hori daukan fitxategi bat; mesedez, ikusi existitzen den '''<tt>$1</tt>''' fitxategia aldatu nahi duzun egiaztatzeko.",
'fileexists-extension'        => "Badago antzeko izena duen fitxategi bat:<br />
Igotako fitxategiaren izena: '''<tt>$1</tt>'''<br />
Aurretik dagoen fitxategiaren izena: '''<tt>$2</tt>'''<br />
Hautatu beste izen bat.",
'fileexists-thumb'            => "<center>'''Irudia badago'''</center>",
'fileexists-thumbnail-yes'    => "Badirudi neurri txikiko irudia dela ''(irudi txikia)''. Egiaztatu '''<tt>$1</tt>''' fitxategia.<br /> Egiaztatutako fitxategia eta jatorrizkoa berdinak badira ez dago irudi txikia igo beharrik.",
'file-thumbnail-no'           => "Fitxategiaren izena '''<tt>$1</tt>'''-(r)ekin hasten da.
Badirudi tamaina txikiko irudia ''(thumbnail)'' dela.
Irudi hau bereizmen handiagoan izango bazenu igo ezazu, bestela, fitxategiaren izena aldatu mesedez.",
'fileexists-forbidden'        => 'Badago izen hori daukan fitxategi bat; mesedez, atzera itzuli eta igo fitxategia izen ezberdin batekin. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Badago izen hori daukan fitxategi bat elkarbanatutako fitxategi-biltegian; mesedez, atzera itzuli eta igo fitxategia izen ezberdin batekin. [[Image:$1|thumb|center|$1]]',
'successfulupload'            => 'Igoera arrakastatsua',
'uploadwarning'               => 'Igotzeko oharra',
'savefile'                    => 'Fitxategia gorde',
'uploadedimage'               => '"[[$1]]" igo da',
'overwroteimage'              => '"[[$1]]"ren bertsio berri bat igo',
'uploaddisabled'              => 'Igoerak ezgaituta daude',
'uploaddisabledtext'          => 'Fitxategiak igotzea ezgaituta dago.',
'uploadscripted'              => 'Fitxategi honek web zerbitzariak modu ezegokian interpretatu lezakeen HTML edo script kodea dauka.',
'uploadcorrupt'               => 'Fitxategiak akatsak ditu edo luzapena ezegokia da. Mesedez, egiaztatu fitxategia ondo dagoela eta berriz igo.',
'uploadvirus'                 => 'Fitxategiak birusa dauka! Xehetasunak: $1',
'sourcefilename'              => 'Iturri-fitxategiaren izena:',
'destfilename'                => 'Helburu fitxategi izena:',
'watchthisupload'             => 'Orrialde hau jarraitu',
'filewasdeleted'              => 'Izen hau duen fitxategi bat igo eta ezabatu da jada. $1 aztertu beharko zenuke berriz igo aurretik.',
'upload-wasdeleted'           => "'''Oharra: Lehenago ezabatutako fitxategia igotzen ari zara.'''

Kontuan izan fitxategia igotzea egokia ote den.
Fitxategi honen ezabaketa erregistroa jarraian ikus dezakezu:",
'filename-bad-prefix'         => "Igotzen ari zaren fitxategiaren izena '''\"\$1\"'''ekin hasten da, normalki kamera digitalek automatikoki ezartzen duten izen ez deskriptibo bat.
Aukera ezazu, mesedez, fitxategi izen deskriptiboago bat.",

'upload-proto-error'      => 'Protokolo ezegokia',
'upload-proto-error-text' => 'Kanpo igoerak <code>http://</code> edo <code>ftp://</code> hasiera duen URLa izan behar du.',
'upload-file-error'       => 'Barne errorea',
'upload-file-error-text'  => 'Barne errore bat gertatu da zerbitzarian fitxategi tenporal bat sortzen saiatzean. Mesedez, jar zaitez [[Special:ListUsers/sysop|administratzaile]] batekin harremanetan.',
'upload-misc-error'       => 'Errore ezezaguna igotzerakoan',
'upload-misc-error-text'  => 'Errore ezezagun bat gertatu da fitxategia igotzen ari zenean. Mesedez, egiaztatu URLa baliozkoa eta eskuragarria dela eta berriz saiatu. Arazoak jarraitzen badu, jar zaitez [[Special:ListUsers/sysop|administratzailearekin]] harremanetan.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Ezin izan da URLa eskuratu',
'upload-curl-error6-text'  => 'Ezin da emandako URLa eskuratu. Mesedez, ziurtatu URLa zuzena dela eta gunea eskuragarri dagoela.',
'upload-curl-error28'      => 'Denbora gehiegi igotzerakoan',
'upload-curl-error28-text' => 'Guneak denbora gehiegi behar du erantzuteko. Egiaztatu gunea martxan dagoela, itxaron pixka bat eta saiatu berriz. Karga txikiagoa denean probatu zenezake.',

'license'            => 'Lizentzia:',
'nolicense'          => 'Hautatu gabe',
'license-nopreview'  => '(Aurreikuspenik ez)',
'upload_source_url'  => ' (baliozko URL publikoa)',
'upload_source_file' => ' (zure ordenagailuko fitxategi bat)',

# Image list
'imagelist'                 => 'Fitxategien zerrenda',
'imagelist-summary'         => 'Orrialde berezi honek igotako fitxategi guztiak erakusten ditu.
Berez igotako azken fitxategiak zerrendaren goialdean agertzen dira.
Zutabe bakoitzaren goialdean klik eginez ordena aldatzen da.',
'imagelisttext'             => "Jarraian duzu $2(e)z ordenatutako {{PLURAL:$1|fitxategi baten|'''$1''' fitxategiren}} zerrenda.",
'getimagelist'              => 'fitxategi zerrenda jasotzen',
'ilsubmit'                  => 'Bilatu',
'showlast'                  => 'Erakutsi azken $1 fitxategiak $2 ordenatuta.',
'byname'                    => 'izenaren arabera',
'bydate'                    => 'dataren arabera',
'bysize'                    => 'tamainaren arabera',
'imgdelete'                 => 'ezb',
'imgdesc'                   => 'desk',
'imgfile'                   => 'fitxategia',
'filehist'                  => 'Fitxategiaren historia',
'filehist-help'             => 'Data/orduan klik egin fitxategiak orduan zuen itxura ikusteko.',
'filehist-deleteall'        => 'guztiak ezabatu',
'filehist-deleteone'        => 'hau ezabatu',
'filehist-revert'           => 'desegin',
'filehist-current'          => 'oraingoa',
'filehist-datetime'         => 'Data/Ordua',
'filehist-user'             => 'Erabiltzailea',
'filehist-dimensions'       => 'Neurriak',
'filehist-filesize'         => 'Tamaina',
'filehist-comment'          => 'Iruzkina',
'imagelinks'                => 'Fitxategi loturak',
'linkstoimage'              => 'Hurrengo orrialdeek dute fitxategi honetarako lotura:',
'nolinkstoimage'            => 'Ez dago fitxategi honetara lotura egiten duen orrialderik.',
'sharedupload'              => 'Fitxategi hau elkarbanatutako igoera bat da eta beste proiektuek ere erabil dezakete.',
'shareduploadwiki'          => 'Informazio gehiagorako $1 ikusi mesedez.',
'shareduploadwiki-desc'     => 'Deskribapena $1-(e)an erakusten da azpian.',
'shareduploadwiki-linktext' => 'fitxategiaren deskribapen orrialdea',
'noimage'                   => 'Ez dago fitxategirik izen honekin, $1 dezakezu.',
'noimage-linktext'          => 'bat igo',
'uploadnewversion-linktext' => 'Fitxategi honen bertsio berri bat igo',
'imagelist_date'            => 'Data',
'imagelist_name'            => 'Izena',
'imagelist_user'            => 'Erabiltzailea',
'imagelist_size'            => 'Tamaina (byte)',
'imagelist_description'     => 'Deskribapena',
'imagelist_search_for'      => 'Irudiaren izenagatik bilatu:',

# File reversion
'filerevert'                => '$1 leheneratu',
'filerevert-legend'         => 'Fitxategia leheneratu',
'filerevert-intro'          => "'''[[Media:$1|$1]]''' berrezartzen ari zara [$4 $3(e)ko, $2(e)tako bertsiora].",
'filerevert-comment'        => 'Iruzkina:',
'filerevert-defaultcomment' => '$2, $1 bertsiora leheneratu da',
'filerevert-submit'         => 'Leheneratu',
'filerevert-success'        => "'''[[Media:$1|$1]]''' [$4 $3(e)ko, $2(e)tako bertsiora] lehenratua izan da.",
'filerevert-badversion'     => 'Ez dago aurreragoko fitxategi honen bertsio lokalik emandako denbora tartean.',

# File deletion
'filedelete'                  => '$1 ezabatu',
'filedelete-legend'           => 'Fitxategia ezabatu',
'filedelete-intro'            => "'''[[Media:$1|$1]]''' fitxategiaezabatzen ari zara eta honen historiarekin batera.",
'filedelete-intro-old'        => "'''[[Media:$1|$1]]'''ren bertsioa ezabatzen ari zara, [$4 $3, $2].",
'filedelete-comment'          => 'Iruzkina:',
'filedelete-submit'           => 'Ezabatu',
'filedelete-success'          => "'''$1''' ezabatu da.",
'filedelete-success-old'      => "'''[[Media:$1|$1]]'''en $3, $2 bertsioa ezabatu da.",
'filedelete-nofile'           => "Ez dago '''$1''' izeneko fitxategirik.",
'filedelete-nofile-old'       => "Ez dago '''$1'''en bertsio artxibaturik zuk jarritako izaera horrekin.",
'filedelete-iscurrent'        => 'Fitxategi honen bertsiorik berriena ezabatzen saiatzen ari zara. Bertsio zaharrago batera itzularazi lehenago, mesedez.',
'filedelete-otherreason'      => 'Beste arrazoiak/gehigarriak:',
'filedelete-reason-otherlist' => 'Bestelako arrazoiak',
'filedelete-reason-dropdown'  => '*Ezabatzeko arrazoi ohikoa
** Copyright bortxaketa
** Bikoiztutako fitxategia',

# MIME search
'mimesearch'         => 'MIME bilaketa',
'mimesearch-summary' => 'Orrialde honek fitxategiak bere MIME motaren arabera iragaztea ahalbidetzen du. Iragazkia: eduki-mota/azpi-mota, adib. <tt>image/jpeg</tt>.',
'mimetype'           => 'MIME mota:',
'download'           => 'deskargatu',

# Unwatched pages
'unwatchedpages' => 'Jarraitu gabeko orrialdeak',

# List redirects
'listredirects' => 'Birzuzenketen zerrenda',

# Unused templates
'unusedtemplates'     => 'Erabili gabeko txantiloiak',
'unusedtemplatestext' => 'Orrialde honetan beste edozein orrialdetan erabiltzen ez diren {{ns:template}} izen-tarteko orrialdeak zerrendatzen dira. Ez ahaztu txantiloietara egon daitezkeen loturak egiaztatzeaz ezabatu aurretik.',
'unusedtemplateswlh'  => 'beste loturak',

# Random page
'randompage'         => 'Ausazko orria',
'randompage-nopages' => 'Ez dago orrialderik izen-tarte honetan.',

# Random redirect
'randomredirect'         => 'Ausazko birzuzenketa',
'randomredirect-nopages' => 'Ez dago birzuzenketarik izen-tarte honetan.',

# Statistics
'statistics'             => 'Estatistikak',
'sitestats'              => '{{SITENAME}}(e)ko estatistikak',
'userstats'              => 'Erabiltzaile estatistikak',
'sitestatstext'          => "Datu-basean guztira {{PLURAL:$1|orri '''1''' dago| '''$1''' orri daude}}.
Honek eztabaidatzeko, {{SITENAME}} buruzko orriak, birzuzenketak eta artikulu laburrak barne hartzen direlarik.
Horiek baztertzen, {{PLURAL:$2|orri '''1''' dago|'''$2''' orri daude}} eduki legitimoa {{PLURAL:$2|duena|dituztenak}}.

'''$8''' irudi igo {{PLURAL:$8|da|dira}}.

Guztira bisitaturiko '''$3''' orri {{PLURAL:$3|dago|daude}}, eta '''$4''' artikulu aldaketa {{PLURAL:$4|egon da|egon dira}} {{SITENAME}} berritu zenetik.
Emaitza hauekin hurrengo arrazoiak atera daitezke: '''$5''' aldaketa egon dira orrialde bakoitzeko, eta '''$6''' bisita aldaketa bakoitzeko.

Gure [http://www.mediawiki.org/wiki/Manual:Job_queue Job queue] '''$7'''-koa da.",
'userstatstext'          => "'''$1''' erabiltzaile daude izen emanda, horietatik '''$2''' (edo '''$4%''') $5ek eskumenak {{PLURAL:$2|dituelarik|dituztelarik}}.",
'statistics-mostpopular' => 'Orrialde bisitatuenak',

'disambiguations'      => 'Argipen orrialdeak',
'disambiguationspage'  => 'Template:argipen',
'disambiguations-text' => "Jarraian azaltzen diren orrialdeek '''argipen orrialde''' baterako lotura dute. Kasu bakoitzean dagokion artikulu zuzenarekin izan beharko lukete lotura.<br />Orrialde bat argipen motakoa dela antzeman ohi da [[MediaWiki:Disambiguationspage]] orrialdean agertzen den txantiloietako bat duenean.",

'doubleredirects'     => 'Birzuzenketa bikoitzak',
'doubleredirectstext' => 'Lerro bakoitzean lehen eta bigarren birzuzenketetarako loturak ikus daitezke, eta baita edukia daukan edo eduki beharko lukeen orrialderako lotura ere. Lehen birzuzenketak azken honetara zuzendu beharko luke.',

'brokenredirects'        => 'Hautsitako birzuzenketak',
'brokenredirectstext'    => 'Jarraian zerrendatutako birzuzenketa loturak existitzen ez diren orrietara zuzenduta daude:',
'brokenredirects-edit'   => '(aldatu)',
'brokenredirects-delete' => '(ezabatu)',

'withoutinterwiki'         => 'Hizkuntza loturarik gabeko orrialdeak',
'withoutinterwiki-header'  => 'Orrialde hauek ez daukate beste hizkuntzetarako loturarik:',
'withoutinterwiki-summary' => 'Orrialde hauek ez daukate beste hizkuntzetarako loturarik:',
'withoutinterwiki-submit'  => 'Erakutsi',

'fewestrevisions' => 'Berrikusketa gutxien dituzten artikuluak',

# Miscellaneous special pages
'nbytes'                  => '{{PLURAL:$1|byte 1|$1 byte}}',
'ncategories'             => '{{PLURAL:$1|kategoria 1|$1 kategoria}}',
'nlinks'                  => '{{PLURAL:$1|lotura 1|$1 lotura}}',
'nmembers'                => '{{PLURAL:$1|partaide 1|$1 partaide}}',
'nrevisions'              => '{{PLURAL:$1|berrikuspen 1|$1 berrikuspen}}',
'nviews'                  => '{{PLURAL:$1|ikusketa 1|$1 ikusketa}}',
'specialpage-empty'       => 'Ez dago emaitzarik bilaketa honetarako.',
'lonelypages'             => 'Orrialde umezurtzak',
'lonelypagestext'         => 'Jarraian zerrendatutako orrialdeek ez daukate {{SITENAME}}(e)n beste orrialdeetatik loturarik.',
'uncategorizedpages'      => 'Kategorizatu gabeko orrialdeak',
'uncategorizedcategories' => 'Kategorizatu gabeko kategoriak',
'uncategorizedimages'     => 'Kategorizatu gabeko irudiak',
'uncategorizedtemplates'  => 'Sailkatu gabeko txantiloiak',
'unusedcategories'        => 'Erabili gabeko kategoriak',
'unusedimages'            => 'Erabili gabeko fitxategiak',
'popularpages'            => 'Orrialde bisitatuenak',
'wantedcategories'        => 'Eskatutako kategoriak',
'wantedpages'             => 'Eskatutako orrialdeak',
'mostlinked'              => 'Gehien lotutako orrialdeak',
'mostlinkedcategories'    => 'Gehien lotutako kategoriak',
'mostlinkedtemplates'     => 'Txantiloi erabilienak',
'mostcategories'          => 'Sailkapenean kategoria gehien dituzten orrialdeak',
'mostimages'              => 'Gehien lotutako irudiak',
'mostrevisions'           => 'Berrikuspen gehien dituzten orrialdeak',
'allpages'                => 'Orrialde guztiak',
'prefixindex'             => 'Orri guztiak aurrizkiekin',
'shortpages'              => 'Orrialde laburrak',
'longpages'               => 'Orrialde luzeak',
'deadendpages'            => 'Orrialde itsuak',
'deadendpagestext'        => 'Jarraian zerrendatutako orrialdeek ez daukate wikiko beste edozein orrialdetarako loturarik.',
'protectedpages'          => 'Babestutako orrialdeak',
'protectedpagestext'      => 'Jarraian azaltzen diren orrialdeak mugitu edo aldatzeko babestuta daude',
'protectedpagesempty'     => 'Ez dago parametro hauetarako babesturiko orrialderik momentu honetan.',
'protectedtitles'         => 'Babestutako tituluak',
'protectedtitlestext'     => 'Hurrengo tituluen sorrera babestua dago',
'protectedtitlesempty'    => 'Ez dago parametro horiekin babesturiko izenbururik momentu honetan.',
'listusers'               => 'Erabiltzaileen zerrenda',
'specialpages'            => 'Aparteko orrialdeak',
'spheading'               => 'Erabiltzaile guztientzako aparteko orrialdeak',
'restrictedpheading'      => 'Mugatutako aparteko orrialdeak',
'newpages'                => 'Orrialde berriak',
'newpages-username'       => 'Erabiltzaile-izena:',
'ancientpages'            => 'Orrialde zaharrenak',
'intl'                    => 'Hizkuntzen arteko loturak',
'move'                    => 'Mugitu',
'movethispage'            => 'Orrialde hau mugitu',
'unusedimagestext'        => '<p>Mesedez, kontuan izan beste webgune batzutatik URL zuzena erabiliz lotura izan dezaketela irudira, eta kasu horretan ez lirateke hemengo zerrendetan azalduko.</p>',
'unusedcategoriestext'    => 'Hurrengo kategoria orrialde guztiak datu-basean existitzen dira, baina ez du inongo orrialde edo kategoriak erabiltzen.',
'notargettitle'           => 'Helburu orrialderik ez',
'notargettext'            => 'Ez duzu eragiketa hau burutzeko helburu orrialde edo erabiltzaile bat zehaztu.',
'pager-newer-n'           => '{{PLURAL:$1|berriago den 1|berriagoak diren $1}}',
'pager-older-n'           => '{{PLURAL:$1|zaharragoa den 1|zaharragoak diren $1}}',

# Book sources
'booksources'               => 'Iturri liburuak',
'booksources-search-legend' => 'Liburuen bilaketa',
'booksources-go'            => 'Joan',
'booksources-text'          => 'Jarraian liburu berri eta erabiliak saltzen dituzten guneetarako loturen zerrenda bat ikus dezakezu, bilatzen ari zaren liburu horientzako informazio gehigarria aurkitzeko lagungarria izan daitekeena:',

'categoriespagetext' => 'Hurrengo kategoriek orrialdeak edo fitxategiak dituzte.
[[Special:UnusedCategories|Erabili gabeko kategoriak]] ez dira hemen erakusten.
Ikus, gainera [[Special:WantedCategories|kategoriarik eskatuenak]].',
'data'               => 'Datuak',
'userrights'         => 'Erabiltzaile baimenen kudeaketa',
'groups'             => 'Erabiltzaile taldeak',
'alphaindexline'     => '$1(e)tik $2(e)raino',
'version'            => 'Bertsioa',

# Special:Log
'specialloguserlabel'  => 'Lankidea:',
'speciallogtitlelabel' => 'Izenburua:',
'log'                  => 'Erregistroak',
'all-logs-page'        => 'Erregistro guztiak',
'log-search-legend'    => 'Logak bilatu',
'log-search-submit'    => 'Joan',
'alllogstext'          => '{{SITENAME}} orrialdearen erregistro guztien erakusketa konbinatua.
Erregistro mota, erabiltzailearen izena edota orrialdearen izena iragaziz bistaratu daiteke. Letra larriak eta xeheak bereizten dira.',
'logempty'             => 'Ez dago emaitzarik erregistroan.',
'log-title-wildcard'   => 'Testu honekin hasten diren izenburuak bilatu',

# Special:Allpages
'nextpage'          => 'Hurrengo orrialdea ($1)',
'prevpage'          => 'Aurreko orrialdea ($1)',
'allpagesfrom'      => 'Honela hasten diren orrialdeak erakutsi:',
'allarticles'       => 'Artikulu guztiak',
'allinnamespace'    => 'Orrialde guztiak ($1 izen-tartea)',
'allnotinnamespace' => 'Orrialde guztiak ($1 izen-tartean ez daudenak)',
'allpagesprev'      => 'Aurrekoa',
'allpagesnext'      => 'Hurrengoa',
'allpagessubmit'    => 'Joan',
'allpagesprefix'    => 'Aurrizki hau duten orrialdeak bistaratu:',
'allpagesbadtitle'  => 'Orrialdearen izena baliogabekoa da edo interwiki edo hizkuntzen arteko aurrizkia dauka. Izenburuetan erabili ezin daitezkeen karaktere bat edo gehiago izan ditzake.',
'allpages-bad-ns'   => '{{SITENAME}}(e)k ez dauka "$1" izeneko izen-tarterik.',

# Special:Listusers
'listusersfrom'      => 'Hemendik aurrerako erabiltzaileak bistaratu:',
'listusers-submit'   => 'Erakutsi',
'listusers-noresult' => 'Ez da erabiltzailerik aurkitu.',

# E-mail user
'mailnologin'     => 'Bidalketa helbiderik ez',
'mailnologintext' => 'Beste erabiltzaileei e-posta mezuak bidaltzeko [[Special:UserLogin|saioa hasi]] eta baliozko e-posta helbidea behar duzu izan zure [[Special:Preferences|hobespenetan]].',
'emailuser'       => 'Erabiltzaile honi e-posta bidali',
'emailpage'       => 'Erabiltzaileari e-posta bidali',
'emailpagetext'   => 'Erabiltzaile honek baliozko e-posta helbide bat ezarri badu bere hobespenetan, beheko formularioa erabiliz mezu bat bidal dakioke. 
[[Special:Preferences|Hobespenetan]] daukazun e-posta helbidea azalduko da mezuaren bidaltzaile bezala eta beraz erantzun ahal izango dizu.',
'usermailererror' => 'Mail objektuak errore hau itzuli du:',
'defemailsubject' => 'E-posta {{SITENAME}}(e)tik',
'noemailtitle'    => 'Posta helbiderik ez',
'noemailtext'     => 'Erabiltzaile honek ez du baliozko e-posta helbiderik zehaztu.',
'emailfrom'       => 'Nork:',
'emailto'         => 'Nori:',
'emailsubject'    => 'Gaia:',
'emailmessage'    => 'Mezua:',
'emailsend'       => 'Mezua',
'emailccme'       => 'Mezu honen kopia bat niri bidali.',
'emailccsubject'  => 'Zure mezuaren kopia $1(r)i: $2',
'emailsent'       => 'Mezua bidali egin da',
'emailsenttext'   => 'Zure e-posta mezua bidali egin da.',

# Watchlist
'watchlist'            => 'Nire jarraipen zerrenda',
'mywatchlist'          => 'Nire jarraipen zerrenda',
'watchlistfor'         => "('''$1''')",
'nowatchlist'          => 'Zure jarraipen zerrenda hutsik dago.',
'watchlistanontext'    => 'Mesedez $1 zure jarraipen zerrendako orrialdeak ikusi eta aldatu ahal izateko.',
'watchnologin'         => 'Saioa hasi gabe',
'watchnologintext'     => '[[Special:UserLogin|Saioa hasi]] behar duzu zure jarraipen zerrenda aldatzeko.',
'addedwatch'           => 'Jarraipen zerrendan gehitu da',
'addedwatchtext'       => "\"<nowiki>\$1</nowiki>\" orrialdea zure [[Special:Watchlist|jarraipen edo zelatatuen zerrendara]] erantsi da. Orrialde honen hurrengo aldaketak zerrenda horretan ageriko dira aurrerantzean, eta gainera [[Special:RecentChanges|aldaketa berrien zerrendan]] beltzez ageriko da, erraztasunez antzeman ahal izateko.

Jarraipen zerrendatik artikulua kentzeko, artikuluan ''ez jarraitu''ri eman.",
'removedwatch'         => 'Jarraipen zerrendatik ezabatuta',
'removedwatchtext'     => '"[[:$1]]" orrialdea zure jarraipen zerrendatik kendu da.',
'watch'                => 'Jarraitu',
'watchthispage'        => 'Orrialde hau jarraitu',
'unwatch'              => 'Ez jarraitu',
'unwatchthispage'      => 'Jarraitzeari utzi',
'notanarticle'         => 'Ez da eduki orrialdea',
'watchnochange'        => 'Hautatutako denbora tartean ez da aldaketarik izan zure jarraipen zerrendako orrialdeetan.',
'watchlist-details'    => '{{PLURAL:$1|Orrialde $1|$1 orrialde}} jarraitzen, eztabaida orrialdeak kontuan hartu gabe.',
'wlheader-enotif'      => '* Posta bidezko ohartarazpena gaituta dago.',
'wlheader-showupdated' => "* Bisitatu zenituen azken alditik aldaketak izan dituzten orrialdeak '''beltzez''' nabarmenduta daude",
'watchmethod-recent'   => 'Aldaketa berriak aztertzen jarraipen zerrendako orrialdeen bila',
'watchmethod-list'     => 'jarraipen zerrendako orrialdeak aldaketa berrien bila aztertzen',
'watchlistcontains'    => 'Zure jarraipen zerrendak {{PLURAL:$1|orrialde $1 du|$1 orrialde ditu}}.',
'iteminvalidname'      => "Arazoa '$1' elementuarekin, baliogabeko izena...",
'wlnote'               => "Jarraian {{PLURAL:$2|ikus daiteke azken orduko|ikus daitezke azken '''$2''' orduetako}} azken {{PLURAL:$1|aldaketa|'''$1''' aldaketak}}.",
'wlshowlast'           => 'Erakutsi azken $1 orduak $2 egunak $3',
'watchlist-show-bots'  => 'Bot-en aldaketak erakutsi',
'watchlist-hide-bots'  => 'Bot-en aldaketak ezkutatu',
'watchlist-show-own'   => 'Nire aldaketak erakutsi',
'watchlist-hide-own'   => 'Nire aldaketak ezkutatu',
'watchlist-show-minor' => 'Aldaketa txikiak erakutsi',
'watchlist-hide-minor' => 'Aldaketa txikiak ezkutatu',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Zerrendan gehitzen...',
'unwatching' => 'Zerrendatik kentzen...',

'enotif_mailer'                => '{{SITENAME}}(e)ko Oharpen Postaria',
'enotif_reset'                 => 'Orrialde guztiak bisitatu bezala markatu',
'enotif_newpagetext'           => 'Honako hau orrialde berria da.',
'enotif_impersonal_salutation' => '{{SITENAME}} erabiltzailea',
'changed'                      => 'aldatu',
'created'                      => 'sortu',
'enotif_subject'               => '{{SITENAME}}(e)ko $PAGETITLE orrialdea $PAGEEDITOR(e)k $CHANGEDORCREATED du',
'enotif_lastvisited'           => 'Jo $1 orrialdera zure azken bisitaz geroztik izandako aldaketa guztiak ikusteko.',
'enotif_lastdiff'              => 'Jo $1(e)ra aldaketa hau ikusteko.',
'enotif_anon_editor'           => '$1 erabiltzaile anonimoa',
'enotif_body'                  => 'Kaixo $WATCHINGUSERNAME,

{{SITENAME}}(e)ko $PAGETITLE orrialdea $CHANGEDORCREATED egin du $PAGEEDITOR(e)k une honetan: $PAGEEDITDATE, ikus $PAGETITLE_URL azken bertsiorako.

$NEWPAGE

Egilearen laburpena: $PAGESUMMARY $PAGEMINOREDIT

Egilearekin harremanetan jarri:
e-posta: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Ez dira oharpen gehiago bidaliko orrialde hau berriz bisitatzen ez baduzu. Horrez gain, orrialdeen oharpen konfigurazioa leheneratu dezakezu jarraipen zerrendatik.

             {{SITENAME}}(e)ko oharpen sistema

--
Zure jarraipen zerrendako konfigurazioa aldatzeko, ikus
{{fullurl:{{ns:special}}:Watchlist/edit}}

Laguntza:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Orrialdea ezabatu',
'confirm'                     => 'Baieztatu',
'excontent'                   => "edukia honakoa zen: '$1'",
'excontentauthor'             => "edukia honakoa zen: '$1' (parte hartu duen lankide bakarra: '$2')",
'exbeforeblank'               => "hustu aurreko edukiera: '$1'",
'exblank'                     => 'orrialdea hutsik zegoen',
'delete-confirm'              => '"$1" ezabatu',
'delete-legend'               => 'Ezabatu',
'historywarning'              => 'Kontuz! Ezabatuko duzun orrialdeak honako historia du:',
'confirmdeletetext'           => 'Orrialde edo irudi bat eta beste historia guztia datu-basetik ezabatzear zaude. Mesedez, egiaztatu hori egin nahi duzula, ondorioak zeintzuk diren badakizula, eta [[{{MediaWiki:Policy-url}}|politikak]] errespetatuz egingo duzula.',
'actioncomplete'              => 'Ekintza burutu da',
'deletedtext'                 => '"<nowiki>$1</nowiki>" ezabatu egin da. Ikus $2 azken ezabaketen erregistroa ikusteko.',
'deletedarticle'              => '"[[$1]]" ezabatu da',
'dellogpage'                  => 'Ezabaketa erregistroa',
'dellogpagetext'              => 'Behean ikus daiteke azken ezabaketen zerrenda.',
'deletionlog'                 => 'ezabaketa erregistroa',
'reverted'                    => 'Lehenagoko berrikuspen batera itzuli da',
'deletecomment'               => 'Ezabatzeko arrazoia',
'deleteotherreason'           => 'Arrazoi gehigarria:',
'deletereasonotherlist'       => 'Beste arrazoi bat',
'deletereason-dropdown'       => '*Ezabatzeko ohiko arrazoiak
** Egileak eskatuta
** Egile eskubideak urratzea
** Bandalismoa',
'delete-toobig'               => 'Orrialde honek aldaketa historia luzea du, $1 berrikuspenetik gorakoa. Orrialde horien ezabaketa mugatua dago {{SITENAME}}n ezbeharrak saihesteko.',
'delete-warning-toobig'       => 'Orrialde honek aldaketa historia luzea du, $1 berrikuspenetik gorakoa. Ezabatzeak ezbeharrak eragin ditzake {{SITENAME}}ren datu-basean; kontu izan.',
'rollback'                    => 'Aldaketak desegin',
'rollback_short'              => 'Desegin',
'rollbacklink'                => 'desegin',
'rollbackfailed'              => 'Desegiteak huts egin dud',
'cantrollback'                => 'Ezin da aldaketa desegin; erabiltzaile bakarrak hartu du parte.',
'alreadyrolled'               => 'Ezin da [[User:$2|$2]](e)k ([[User talk:$2|Eztabaida]]) [[$1]](e)n egindako azken aldaketa desegin; beste norbaitek editatu du edo jada desegin du. Azken aldaketa [[User:$3|$3]](e)k ([[User talk:$3|Eztabaida]]) egin du.',
'editcomment'                 => "Aldaketaren laburpena: \"''\$1''\".", # only shown if there is an edit comment
'revertpage'                  => '$2ren aldaketak ezabatu dira, $1ren azken bertsiora itzuliz.', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success'            => '$1(r)en aldaketak desegin dira, $2(r)en azken bertsiora itzuliz.',
'sessionfailure'              => 'Badirudi saioarekin arazoren bat dagoela; bandalismoak saihesteko ekintza hau ezeztatu egin da. Mesedez, nabigatzaileko "atzera" botoian klik egin, hona ekarri zaituen orrialde hori berriz kargatu, eta saiatu berriz.',
'protectlogpage'              => 'Babes erregistroa',
'protectlogtext'              => 'Orrialdeen blokeo eta desblokeo zerrenda azaltzen da jarraian.',
'protectedarticle'            => '"[[$1]]" babestu da"',
'modifiedarticleprotection'   => '"[[$1]]"(r)en babes maila aldatu da',
'unprotectedarticle'          => '"[[$1]]"(r)i babesa kendu zaio',
'protectsub'                  => '("$1" babesten)',
'confirmprotect'              => 'Babesa baieztatu',
'protectcomment'              => 'Babesteko arrazoia',
'protectexpiry'               => 'Iraungipena:',
'protect_expiry_invalid'      => 'Baliogabeko iraungipen-data.',
'protect_expiry_old'          => 'Iraungipen-data iragan da.',
'unprotectsub'                => '(babesa kentzen: "$1")',
'protect-unchain'             => 'Mugitzeko blokeoa kendu',
'protect-text'                => "'''<nowiki>$1</nowiki>''' orrialdearen babes maila ikusi eta aldatu egin beharko zenuke.",
'protect-locked-blocked'      => "Babes-mailak ezin dira aldatu blokeatuta dagoen bitartean.
Hemen daude '''$1''' orrialdearen egungo ezarpenak:",
'protect-locked-dblock'       => "Babes-mailak ezin dira aldatu, datu-basea blokeatuta baitago.
Hemen daude '''$1''' orriaren oraingo ezarpenak:",
'protect-locked-access'       => "Zure kontuak ez du baimenik babes mailak aldatzeko.
Hemen daude '''$1''' orrialderako oraingo ezarpenak:",
'protect-cascadeon'           => 'Orrialde hau momentu honetan babespean dago honako orrialde {{PLURAL:$1|honek kaskada bidezko babesa duelako|hauek kaskada bidezko babesa dutelako}}.
Orrialde honen babes maila alda dezakezu, baina ez du eraginik izango kaskada bidezko babesean.',
'protect-default'             => 'Lankide guztiak baimendu',
'protect-fallback'            => '"$1" baimena eskatu',
'protect-level-autoconfirmed' => 'Lankide berri eta erregistratu gabekoak blokeatu',
'protect-level-sysop'         => 'Administratzaileak bakarrik',
'protect-summary-cascade'     => 'jauzian',
'protect-expiring'            => 'iraungipen-data: $1 (UTC)',
'protect-cascade'             => 'Babes masiboa - orrialde honen barneko orrialde guztiak blokeatu.',
'protect-cantedit'            => 'Ezin duzu orrialde honetako babes-maila aldatu, ez duzulako berau aldatzeko eskumenik.',
'restriction-type'            => 'Baimena:',
'restriction-level'           => 'Murrizketa maila:',
'minimum-size'                => 'Tamaina minimoa',
'maximum-size'                => 'Tamaina handiena, maximoa:',
'pagesize'                    => '(byte)',

# Restrictions (nouns)
'restriction-edit'   => 'Aldatu',
'restriction-move'   => 'Mugitu',
'restriction-create' => 'Sortu',

# Restriction levels
'restriction-level-sysop'         => 'babestua',
'restriction-level-autoconfirmed' => 'erdi-babestua',
'restriction-level-all'           => 'edozein maila',

# Undelete
'undelete'                     => 'Ezabatutako orrialdeak ikusi',
'undeletepage'                 => 'Ezabatutako orrialdeak ikusi eta leheneratu',
'viewdeletedpage'              => 'Ezabatutako orrialdeak ikusi',
'undeletepagetext'             => 'Jarraian zerrendatzen diren orrialdeak ezabatu egin dira baina oraindik artxiboa gordeta daude eta leheneratu egin daitezke. Artxiboa noizean behin hustu egin liteke.',
'undeleteextrahelp'            => "Orrialde osoa leheneratzeko, koadrotxo guztiak hautatu gabe utzi eta '''''Leheneratu'''''n klik egin. 
Aukeratutako leheneratze bat burutzeko, leheneratu nahi dituzun berrikuspenen koadrotxoak markatu eta '''''Leheneratu''''' klik egin. 
'''''Hasiera'''''n klik eginez gero koadrotxo guztiak eta iruzkin koadroa hustu egingo dira.",
'undeleterevisions'            => '$1 {{PLURAL:$1|berrikuspen|berrikuspen}} artxibatuta',
'undeletehistory'              => 'Orrialdea leheneratzen baduzu, berrikuspena guztiak leheneratuko dira historian. 
Ezabatu ondoren izen berdina duen orrialde berri bat sortzen bada leheneratutako berrikuspenak azalduko dira historian.',
'undeletehistorynoadmin'       => 'Artikulua ezabatu egin da. Ezabatzeko azalpena beheko laburpenean erakusten da, ezabatu aurretik parte hartu zuten erabiltzaileen xehetasunekin batera. Ezabatutako berrikuspenen oraingo testua administratzaileek bakarrik ikus dezakete.',
'undelete-revision'            => '$3(e)k $1(e)n aldaketa ezabatu du ($2(e)ra)',
'undeleterevision-missing'     => 'Baliogabeko berrikuspena. Baliteke lotura ezegokia izatea, edo berriskupena leheneratu edo kendu izana.',
'undelete-nodiff'              => 'Ez da aurkitu aurreko berrikuspenik.',
'undeletebtn'                  => 'Leheneratu',
'undeletelink'                 => 'ikusi/leheneratu',
'undeletereset'                => 'Hasieratu',
'undeletecomment'              => 'Iruzkina:',
'undeletedarticle'             => '"[[$1]]" leheneratu da',
'undeletedrevisions'           => '{{PLURAL:$1|Berrikuspen 1 leheneratu da|$1 berrikuspen leheneratu dira}}',
'undeletedrevisions-files'     => '{{PLURAL:$1|berrikuspen|berrikuspen}} eta {{PLURAL:$2|fitxategi|fitxategi}} leheneratu dira',
'undeletedfiles'               => '{{PLURAL:$1|fitxategi|fitxategi}} leheneratu dira',
'cannotundelete'               => 'Errorea birsortzerakoan; baliteke beste norbaitek lehenago birsortu izana.',
'undeletedpage'                => "<big>'''$1 leheneratu egin da'''</big>

[[Special:Log/delete|Ezabaketa erregistrora]] jo azken ezabaketa eta leheneraketak ikusteko.",
'undelete-header'              => 'Berriki ezabatutako orrialdeak ikusteko [[Special:Log/delete|ezabaketa erregistrora]] jo.',
'undelete-search-box'          => 'Ezabatutako orrialdeak bilatu',
'undelete-search-prefix'       => 'Honela hasten diren orrialdeak erakutsi:',
'undelete-search-submit'       => 'Bilatu',
'undelete-no-results'          => 'Ez da bat datorren orrialderik aurkitu ezabaketen artxiboan.',
'undelete-filename-mismatch'   => 'Ezin da $1 denbora-marka duten fitxategi aldaketa ezabatua berrezarri: fitxategi-izena ez dator bat',
'undelete-bad-store-key'       => 'Ezin da $1 denbora-marka duten fitxategi aldaketa ezabatua berrezarri: fitxategi ezabatu aurretik ez zegoen.',
'undelete-cleanup-error'       => 'Erabiltzen ez den "$1" fitxategia ezabatzen arazoa egon da.',
'undelete-missing-filearchive' => 'Fitxategiaren $1 IDa ezin da leheneratu, ez baitago datu-basean.
Aurretik ez luke ezabatua izan behar.',
'undelete-error-short'         => 'Errorea fitxategia berreskuratzerakoan: $1',
'undelete-error-long'          => 'Errorea gertatu da hurrengo orrialdea berreskuratzerakoan:

$1',
'undelete-show-file-confirm'   => 'Ziur zaude $3, $2-ko "<nowiki>$1</nowiki>" fitxategiaren ezabatutako berrikuspena ikusi nahi duzula?',
'undelete-show-file-submit'    => 'Bai',

# Namespace form on various pages
'namespace'      => 'Izen-tartea:',
'invert'         => 'Hautapena alderanztu',
'blanknamespace' => '(Nagusia)',

# Contributions
'contributions' => 'Lankidearen ekarpenak',
'mycontris'     => 'Nire ekarpenak',
'contribsub2'   => '$1 ($2)',
'nocontribs'    => 'Ez da ezaugarri horiekin bat datorren aldaketarik aurkitu.',
'ucnote'        => 'Behean agertzen dira erabiltzaile honen azken <b>$1</b> aldaketak azken <b>$2</b> egunetan.',
'uclinks'       => 'Azken $1 aldaketak ikusi; azken $2 egunak ikusi.',
'uctop'         => ' (Azken aldaketa)',
'month'         => 'Hilabetea (eta lehenagokoak):',
'year'          => 'Urtea (eta lehenagokoak):',

'sp-contributions-newbies'     => 'Soilik kontu berrien ekarpenak erakutsi',
'sp-contributions-newbies-sub' => 'Hasiberrientzako',
'sp-contributions-blocklog'    => 'Blokeaketa erregistroa',
'sp-contributions-search'      => 'Ekarpenentzako bilaketa',
'sp-contributions-username'    => 'IP helbidea edo erabiltzaile izena:',
'sp-contributions-submit'      => 'Bilatu',

'sp-newimages-showfrom' => 'Irudi berriak erakutsi $1(e)ko $2tik hasita',

# What links here
'whatlinkshere'       => 'Honekin lotzen diren orriak',
'whatlinkshere-title' => '$1(e)kin lotzen diren orrialdeak',
'whatlinkshere-page'  => 'Orrialdea:',
'linklistsub'         => '(Loturen zerrenda)',
'linkshere'           => "Hurrengoek dute '''[[:$1]]''' orrialderako lotura:",
'nolinkshere'         => "Ez dago '''[[:$1]]''' lotura duen orrialderik.",
'nolinkshere-ns'      => "Hautatutako izen-tartean ez dago '''[[:$1]]''' orrialderako lotura duenik.",
'isredirect'          => 'berbideraketa orrialdea',
'istemplate'          => 'erabilpena',
'whatlinkshere-prev'  => '{{PLURAL:$1|aurrekoa|aurreko $1ak}}',
'whatlinkshere-next'  => '{{PLURAL:$1|hurrengoa|hurrengo $1ak}}',
'whatlinkshere-links' => '← loturak',

# Block/unblock
'blockip'                     => 'Erabiltzailea blokeatu',
'blockiptext'                 => 'IP helbide edo erabiltzaile izen bati idazketa baimenak kentzeko beheko formularioa erabil dezakezu. Ekintza hau bandalismoa saihesteko baino ez da burutu behar, eta beti ere [[{{MediaWiki:Policy-url}}|politikak]] errespetatuz. Blokeoaren arrazoi bat ere zehaztu ezazu (adibidez, orrialde batzuk zehaztuz).',
'ipaddress'                   => 'IP Helbidea',
'ipadressorusername'          => 'IP Helbidea edo erabiltzaile izena',
'ipbexpiry'                   => 'Iraungipena',
'ipbreason'                   => 'Arrazoia',
'ipbreasonotherlist'          => 'Beste arrazoiak',
'ipbreason-dropdown'          => '*Blokeaketa arrazoi arruntak
** Benetakoa ez den informazioa ezartzea
** Orrialdetatik edukia ezabatzea
** Spam-a edota kanpoko loturak ezarri
** Bandalismoa egitea
** Beste erabiltzaileei mehatxatzea
** Kontu ugari erabiltzea
** Erabiltzaile izen desegokia',
'ipbanononly'                 => 'Erabiltzaile anonimoak bakarrik blokeatu',
'ipbcreateaccount'            => 'Kontua sortzea debekatu',
'ipbemailban'                 => 'Erabiltzaileak e-mailak bidal ditzan ekidin',
'ipbenableautoblock'          => 'Erabiltzaile honek erabilitako azken IP helbidea automatikoki blokeatu, eta baita erabili dezakeen beste edozein IP ere',
'ipbsubmit'                   => 'Erabiltzaile hau blokeatu',
'ipbother'                    => 'Beste denbora-tarte bat',
'ipboptions'                  => '2 ordu:2 hours,egun 1:1 day,3 egun:3 days,aste 1:1 week,2 aste:2 weeks,hilabete 1:1 month,3 hilabete:3 months,6 hilabete:6 months,urte 1:1 year,betirako:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'beste bat',
'ipbotherreason'              => 'Arrazoi gehigarria:',
'ipbhidename'                 => 'Lankide izena blokeo logetik, oraingo blokeo zerrendatik eta lankide zerrendatik izkutatu.',
'badipaddress'                => 'Baliogabeko IP helbidea',
'blockipsuccesssub'           => 'Blokeoa burutu da',
'blockipsuccesstext'          => '[[Special:Contributions/$1|$1]] erabiltzaileari blokeoa ezarri zaio.<br />
Ikus [[Special:IPBlockList|IP blokeoen zerrenda]] blokeoak aztertzeko.',
'ipb-edit-dropdown'           => 'Blokeatzeko arrazoiak aldatu',
'ipb-unblock-addr'            => '$1 lankide edo IP helbideari blokeoa baliogabetu',
'ipb-unblock'                 => 'Erabiltzaile izen edo IP helbide bati blokeoa kendu',
'ipb-blocklist-addr'          => '$1(r)en blokeoak ikusi',
'ipb-blocklist'               => 'Blokeaketak ikusi',
'unblockip'                   => 'Erabiltzailea desblokeatu',
'unblockiptext'               => 'Erabili beheko formularioa lehenago blokeatutako IP helbide edo erabiltzaile baten idazketa baimenak leheneratzeko.',
'ipusubmit'                   => 'Blokeoa ezabatu',
'unblocked'                   => '[[User:$1|$1]] desblokeatu egin da',
'unblocked-id'                => '$1 blokeaketa ezabatu da',
'ipblocklist'                 => 'Blokeatutako IP helbide eta erabiltzaileak',
'ipblocklist-legend'          => 'Blokeatutako erabiltzaile bat bilatu',
'ipblocklist-username'        => 'Erabiltzaile izena edo IP helbidea:',
'ipblocklist-submit'          => 'Bilatu',
'blocklistline'               => '$1, $2(e)k $3 blokeatu du (iraungipena: $4)',
'infiniteblock'               => 'infinitu',
'expiringblock'               => 'iraungipen data: $1',
'anononlyblock'               => 'anon. soilik',
'noautoblockblock'            => 'autoblokeoa ezgaituta',
'createaccountblock'          => 'kontua sortzea blokeatuta',
'emailblock'                  => 'e-posta blokeatuta',
'ipblocklist-empty'           => 'Blokeaketa zerrenda hutsik dago.',
'ipblocklist-no-results'      => 'Zehaztutako IP helbide edo erabiltzaile izena ez dago blokeatuta.',
'blocklink'                   => 'blokeatu',
'unblocklink'                 => 'blokeoa kendu',
'contribslink'                => 'ekarpenak',
'autoblocker'                 => '"[[User:$1|$1]]"(e)k berriki erabili duen IP helbidea duzulako autoblokeatu zaizu. $1(e)k emandako arrazoia zera da: "\'\'\'$2\'\'\'"',
'blocklogpage'                => 'Blokeo erregistroa',
'blocklogentry'               => '"[[$1]]" $2(e)ko iraungipenarekin blokeatu da. $3',
'blocklogtext'                => 'Erabiltzaileen blokeoen ezarpen eta ezabaketen erregistroa da hau. Ez dira automatikoki blokeatutako IP helbideak zerrendatzen. Ikus [[Special:IPBlockList|IP blokeoen zerrenda]] aktibo dauden blokeoak aztertzeko.',
'unblocklogentry'             => '$1 desblokeatu da',
'block-log-flags-anononly'    => 'erabiltzaile anonimoak bakarrik',
'block-log-flags-nocreate'    => 'kontuak sortzea ezgaituta',
'block-log-flags-noautoblock' => 'auto-blokeaketa ezgaitu da',
'block-log-flags-noemail'     => 'e-posta blokeatuta',
'range_block_disabled'        => 'Administratzaileak IP eremuak blokeatzeko gaitasuna ezgaituta dago.',
'ipb_expiry_invalid'          => 'Baliogabeko iraungipen denbora',
'ipb_already_blocked'         => '"$1" badago blokeatuta',
'ipb_cant_unblock'            => 'Errorea: Ez da $1 IDa duen blokeoa aurkitu. Baliteke blokeoa jada kenduta egotea.',
'ipb_blocked_as_range'        => 'Akatsa: $1 IPa ez dago zuzenean blokeatuta eta ezin da blokeoa kendu.
Hala ere, $2-(r)en parte denez, blokeoa kendu daiteke.',
'ip_range_invalid'            => 'Baliogabeko IP eremua.',
'blockme'                     => 'Blokea nazazu',
'proxyblocker'                => 'Proxy blokeatzailea',
'proxyblocker-disabled'       => 'Funtzio hau ez-gaitua dago.',
'proxyblockreason'            => 'Zure IP helbidea blokeatu egin da proxy ireki baten zaudelako. Mesedez, zure Interneteko Zerbitzu Hornitzailearekin harremanetan jar zaitez segurtasun arazo honetaz ohartarazteko.',
'proxyblocksuccess'           => 'Egina.',
'sorbsreason'                 => 'Zure IP helbidea proxy ireki bezala zerrendatuta dago DNSBLan.',
'sorbs_create_account_reason' => 'Zure IP helbidea proxy ireki bezala zerrendatuta dago DNSBLan. Ezin duzu kontua sortu.',

# Developer tools
'lockdb'              => 'Datu-basea blokeatu',
'unlockdb'            => 'Datu-basea desblokeatu',
'lockdbtext'          => 'Datu-basea blokeatzeak edozein erabiltzailek orrialdeak aldatzea, hobespenak aldatzea, jarraipen zerrendan aldaketak egitea, eta datu-basean edozein aldaketa behar duen edozein ekintza galaraziko du. Mesedez, baieztatu zure asmoa hori dela, eta blokeoa kenduko duzula mantenua burutu ondoren.',
'unlockdbtext'        => 'Datu-basea desblokeatzerakoan erabiltzaile guztiek orrialdeak aldatu, beraien hobespenak ezarri, jarraipen zerrendan aldaketak egin eta beste eragiketa batzuk burutzeko gaitasuna leheneratuko du. Mesedez, baieztatu egin nahi duzuna hori dela.',
'lockconfirm'         => 'Bai, datu-basea blokeatu nahi dut',
'unlockconfirm'       => 'Bai, datu-basea desblokeatu nahi dut',
'lockbtn'             => 'Datu-basea blokeatu',
'unlockbtn'           => 'Datu-basea desblokeatu',
'locknoconfirm'       => 'Ez duzu baieztapen kutxa hautatu.',
'lockdbsuccesssub'    => 'Datu-basea blokeatu egin da',
'unlockdbsuccesssub'  => 'Datu-basearen blokeoa kendu da',
'lockdbsuccesstext'   => 'Datu-basea blokeatu egin da. <br />Ez ahaztu mantenu lanak burutu ondoren [[Special:UnlockDB|blokeoa kentzeaz]].',
'unlockdbsuccesstext' => 'Datu-basea desblokeatu egin da.',
'lockfilenotwritable' => 'Ezin da datu-baseko blokeo fitxategian idatzi. Datu-basea blokeatu edo desblokeatzeko, zerbitzariak idazteko aukera izan beharra dauka.',
'databasenotlocked'   => 'Datu-basea ez dago blokeatuta.',

# Move page
'movepage'                => 'Orrialdea mugitu',
'movepagetext'            => 'Hurrengo pausoak jarraituz, artikulu edo orrialde baten izena aldatu daiteke. Izenburu zaharra, automatikoki izenburu berriari birzuzenduko zaio.
Gogora ezazu, orrialdearen izena ez dela aldatuko, nahi duzun izena dagoeneko sortuta badago Wikipedian; birzuzenketa bat edo historiarik gabeko orrialde bat ez bada.

<b>KONTUZ!</b>
Artikulu oso erabilia edo asko aldatzen denaren izenburua aldatzera bazoaz, mesedez, lehenbizi artikuluaren eztabaidan adierazi ezazu beste lankideen iritziak jasotzeko.',
'movepagetalktext'        => "Dagokion eztabaida orrialdea berarekin batera mugitu da, honako kasu hauetan '''ezik:'''
* Hutsik ez dagoen eztabaida orrialde bat existitzen bada izen berrian.
* Beheko koadroa hautatzen ez baduzu.

Kasu horietan orrialdea eskuz mugitu edo bestearekin bateratu beharko duzu.",
'movearticle'             => 'Orrialdea mugitu',
'movenologin'             => 'Saioa hasi gabe',
'movenologintext'         => 'Orrialde bat mugitzeko erregistratutako lankidea izan behar duzu eta [[Special:UserLogin|saioa hasi]].',
'movenotallowed'          => 'Ez daukazu orrialdeak mugitzeko baimenik.',
'newtitle'                => 'Izenburu berria',
'move-watch'              => 'Orrialde hau jarraitu',
'movepagebtn'             => 'Orrialde mugitu',
'pagemovedsub'            => 'Mugimendua eginda',
'movepage-moved'          => '<big>\'\'\'"$1" "$2"(e)ra mugitu da\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Izen hori duen artikulu bat badago edo hautatutako izena ez da baliozkoa. Mesedez, beste izen bat aukeratu.',
'cantmove-titleprotected' => 'Ezin duzu orrialde bat leku honetara mugitu izenburu berri hori sor ez dadin babesa duelako',
'talkexists'              => "'''Orrialde hau arazorik gabe mugitu da, baina eztabaida orrialde ezin izan da mugitu izenburu berriarekin jada bat existitzen delako. Mesedez, eskuz batu itzazu biak.'''",
'movedto'                 => 'hona mugitu da:',
'movetalk'                => 'Eztabaida orrialdea ere mugitu, ahal bada.',
'talkpagemoved'           => 'Artikulu honen eztabaida ere mugitu egin da.',
'talkpagenotmoved'        => 'Artikulu honen eztabaida <strong>ez</strong> da mugitu.',
'1movedto2'               => '$1 izenburua $2(r)engatik aldatu da',
'1movedto2_redir'         => '$1 izenburua $2(r)engatik aldatu da birzuzenketaren gainetik',
'movelogpage'             => 'Mugimendu erregistroa',
'movelogpagetext'         => 'Mugitutako orrialdeen zerrenda bat azaltzen da jarraian.',
'movereason'              => 'Arrazoia',
'revertmove'              => 'desegin',
'delete_and_move'         => 'Ezabatu eta mugitu',
'delete_and_move_text'    => '== Ezabatzeko beharra ==

"[[:$1]]" helburua existitzen da. Lekua egiteko ezabatu nahi al duzu?',
'delete_and_move_confirm' => 'Bai, orrialdea ezabatu',
'delete_and_move_reason'  => 'Lekua egiteko ezabatu da',
'selfmove'                => 'Helburu izenburua berdina da; ezin da orrialde bat bere gainera mugitu.',
'immobile_namespace'      => 'Hasierako edo amaierako izenburua Aparteko motakoa da; ezin da izen-tarte horretatik eta horretara ezer mugitu.',

# Export
'export'            => 'Orrialdeak esportatu',
'exporttext'        => 'Orrialde bat edo batzuen testua eta historia esportatu dezakezu XML fitxategi batzuetan. Ondoren, MediaWiki erabiltzen duen beste wiki baten jarri dezakezu [[Special:Import|import page]] orrialdea erabiliz.

Orrialdeak esportatzeko zehaztu hauen izenburuak beheko koadroan, izenburu bat lerroko, eta aukeratu zein bertsio esportatu nahi dituzun.

Horrez gain, lotura zuzena ere erabil dezakezu; adibidez, [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] "[[{{MediaWiki:Mainpage}}]]" orrialdearentzako.',
'exportcuronly'     => 'Oraingo berrikuspena bakarrik hartu, ez historia guztia',
'exportnohistory'   => "----
'''Oharra:''' Formulario honen bitartez orrialdeen historia osoak esportatzeko aukera ezgaitu egin da, errendimendua dela-eta.",
'export-submit'     => 'Esportatu',
'export-addcattext' => 'Orrialdeak gehitu kategoria honetatik:',
'export-addcat'     => 'Gehitu',
'export-download'   => 'Fitxategi moduan gordetzeko eskaini',
'export-templates'  => 'Txantiloiak barneratu',

# Namespace 8 related
'allmessages'               => 'Sistemako mezu guztiak',
'allmessagesname'           => 'Izena',
'allmessagesdefault'        => 'Testu lehenetsia',
'allmessagescurrent'        => 'Oraingo testua',
'allmessagestext'           => 'MediaWikin erabiltzen diren mezu guztien zerrenda.
Mesedez bisitatu [http://www.mediawiki.org/wiki/Localisation MediaWiki] eta [http://translatewiki.net translatewiki.net] orrialdeak MediaWikira ekarpenak egin badituzu.',
'allmessagesnotsupportedDB' => "Ezin da '''{{ns:special}}:Allmessages''' erabili '''\$wgUseDatabaseMessages''' ezgaituta dagoelako.",
'allmessagesfilter'         => 'Mezu izenaren iragazkia:',
'allmessagesmodified'       => 'Aldatutakoak bakarrik erakutsi',

# Thumbnails
'thumbnail-more'           => 'Handitu',
'filemissing'              => 'Fitxategia falta da',
'thumbnail_error'          => 'Errorea irudi txikia sortzerakoan: $1',
'djvu_page_error'          => 'DjVu orrialdea eremuz kanpo',
'djvu_no_xml'              => 'Ezinezkoa izan da DjVu fitxategiaren XML lortzea',
'thumbnail_invalid_params' => 'Irudi txikiaren ezarpenak ez dira baliagarriak',
'thumbnail_dest_directory' => 'Ezinezkoa izan da helburu direktorioa sortu',

# Special:Import
'import'                     => 'Orrialdeak inportatu',
'importinterwiki'            => 'Wikien arteko inportazioa',
'import-interwiki-text'      => 'Aukeratu inportatzeko wiki eta orrialde izenburu bat. Berrikuspenen datak eta egileak gorde egingo dira. Inportazio ekintza guzti hauek [[Special:Log/import|inportazio erregistroan]] gordetzen dira.',
'import-interwiki-history'   => 'Orrialde honen historiako bertsio guztiak kopiatu',
'import-interwiki-submit'    => 'Inportatu',
'import-interwiki-namespace' => 'Helburuko izen-tartea:',
'importtext'                 => 'Mesedez, jatorrizko wikitik orrialdea esportatzeko Special:Export tresna erabil ezazu, zure diskoan gorde eta jarraian hona igo.',
'importstart'                => 'Orrialdeak inportatzen...',
'import-revision-count'      => '{{PLURAL:$1|berrikuspen 1|$1 berrikuspen}}',
'importnopages'              => 'Ez dago orrialderik inportatzeko.',
'importfailed'               => 'Inportazioak huts egin du: $1',
'importunknownsource'        => 'Inportazio iturri mota ezezaguna',
'importcantopen'             => 'Ezin izan da inportazio fitxategia ireki',
'importbadinterwiki'         => 'Interwiki lotura ezegokia',
'importnotext'               => 'Hutsik dago edo testurik gabe',
'importsuccess'              => 'Inportazioa burutu da!',
'importhistoryconflict'      => 'Gatazka sortzen ari den berrikuspen historia dago (baliteke orrialdea lehenago inportatu izana)',
'importnosources'            => 'Ez dago wikien arteko inportazio iturririk eta historialak zuzenean igotzea ezgaituta dago.',
'importnofile'               => 'Ez da inportazio fitxategirik igo.',
'importuploaderrorsize'      => 'Inportatutako artxiboaren igoera-porrota.
Artxiboa onartutako igoera-tamaina baino handiagoa da.',
'importuploaderrorpartial'   => 'Fitxategiaren igoera eta inportazioak huts egin du.
Fitxategiaren atal bat baino ez zen igo.',
'importuploaderrortemp'      => 'Inportatze fitxategiaren igoeran akatsa egon da. Karpeta tenporal bat falta da.',
'import-parse-failure'       => 'XML inportatze parseak akatsa izan du',
'import-noarticle'           => 'Ez dago inportatzeko orrialderik!',
'import-nonewrevisions'      => 'Berrikuspen guztiak aurrez inportatu ziren.',
'xml-error-string'           => '$1 $2 lerroan, $3 zutabean ($4 byte): $5',
'import-token-mismatch'      => 'Sesio data galdu da. Saia saitez berriro ere, mesedez.',
'import-invalid-interwiki'   => 'Ezin da esandako wikitik inportatu.',

# Import log
'importlogpage'                    => 'Inportazio erregistroa',
'importlogpagetext'                => 'Beste wiki batzutatik historial eta guzti egindako orrialdeen inportazio administratiboak.',
'import-logentry-upload'           => '[[$1]] igoera bitartez inportatu da',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|berrikuspen|berrikuspen}}',
'import-logentry-interwiki'        => '$1 wiki artean mugitu da',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|berrikuspen|berrikuspen}} $2-(e)tik',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Nire lankide orria',
'tooltip-pt-anonuserpage'         => 'Zure IParen lankide orrialdea',
'tooltip-pt-mytalk'               => 'Nire eztabaida orria',
'tooltip-pt-anontalk'             => 'Zure IParen eztabaida',
'tooltip-pt-preferences'          => 'Nire hobespenak',
'tooltip-pt-watchlist'            => 'Jarraitzen dituzun orrialdeen zerrenda.',
'tooltip-pt-mycontris'            => 'Nire ekarpenen zerrenda',
'tooltip-pt-login'                => 'Izen ematera gonbidatzen zaitugu.',
'tooltip-pt-anonlogin'            => 'Izen ematera gonbidatzen zaitugu.',
'tooltip-pt-logout'               => 'Saioa itxi',
'tooltip-ca-talk'                 => 'Artikuluari buruzko eztabaida',
'tooltip-ca-edit'                 => 'Artikulu hau aldatu dezakezu. Mesedez, aurrebista botoia erabil ezazu gorde baino lehen.',
'tooltip-ca-addsection'           => 'Iruzkin berria erantsi',
'tooltip-ca-viewsource'           => 'Artikulu hau babesturik dago. Bere kodea soilik ikus dezakezu.',
'tooltip-ca-history'              => 'Artikulu honen aurreko bertsioak.',
'tooltip-ca-protect'              => 'Artikulu hau babestu',
'tooltip-ca-delete'               => 'Artikulu hau ezabatu',
'tooltip-ca-undelete'             => 'Ezabatu baino lehenago egindako aldaketak berrezarri.',
'tooltip-ca-move'                 => 'Orrialde hau mugitu',
'tooltip-ca-watch'                => 'Orrialde hau jarraipen zerrendan gehitu',
'tooltip-ca-unwatch'              => 'Orrialde hau jarraipen zerrendatik kendu',
'tooltip-search'                  => 'Wiki honetan bilatu',
'tooltip-search-go'               => 'Baldin balego zehazki izen honetako orrialdera joan',
'tooltip-search-fulltext'         => 'Textu honetarako orriak bilatu',
'tooltip-p-logo'                  => 'Azala',
'tooltip-n-mainpage'              => 'Azala bisitatu',
'tooltip-n-portal'                => 'Proiektuaren inguruan, zer egin dezakezu, non aurkitu nahi duzuna',
'tooltip-n-currentevents'         => 'Oraingo gertaeren inguruko informazio gehigarria',
'tooltip-n-recentchanges'         => 'Wikiko azken aldaketen zerrenda.',
'tooltip-n-randompage'            => 'Ausazko orrialde bat kargatu',
'tooltip-n-help'                  => 'Aurkitzeko lekua.',
'tooltip-n-sitesupport'           => 'Lagundu gaitzazu',
'tooltip-t-whatlinkshere'         => 'Hona lotzen duten wiki orrialde guztien zerrenda',
'tooltip-t-recentchangeslinked'   => 'Orrialde honetatik lotutako orrialdeen azken aldaketak',
'tooltip-feed-rss'                => 'Orrialde honen RSS jarioa',
'tooltip-feed-atom'               => 'Orrialde honen atom jarioa',
'tooltip-t-contributions'         => 'Lankide honen ekarpen zerrenda ikusi',
'tooltip-t-emailuser'             => 'Lankide honi e-posta mezua bidali',
'tooltip-t-upload'                => 'Irudiak edo media fitxategiak igo',
'tooltip-t-specialpages'          => 'Aparteko orrialde guztien zerrenda',
'tooltip-t-print'                 => 'Orrialde honen bertsio inprimagarria',
'tooltip-t-permalink'             => 'Orrialde honen bertsio honetara lotura egonkorra',
'tooltip-ca-nstab-main'           => 'Eduki orrialdea ikusi',
'tooltip-ca-nstab-user'           => 'Lankide orrialdea ikusi',
'tooltip-ca-nstab-media'          => 'Media orrialdea ikusi',
'tooltip-ca-nstab-special'        => 'Hau aparteko orrialde bat da, ezin duzu orrialdea aldatu.',
'tooltip-ca-nstab-project'        => 'Proiektuaren orrialdea ikusi',
'tooltip-ca-nstab-image'          => 'Irudiaren orrialdea ikusi',
'tooltip-ca-nstab-mediawiki'      => 'Sistemaren mezua ikusi',
'tooltip-ca-nstab-template'       => 'Txantiloia ikusi',
'tooltip-ca-nstab-help'           => 'Laguntza orrialdea ikusi',
'tooltip-ca-nstab-category'       => 'Kategoria orrialdea ikusi',
'tooltip-minoredit'               => 'Aldaketa txiki bezala markatu hau',
'tooltip-save'                    => 'Zure aldaketak gorde',
'tooltip-preview'                 => 'Zure aldaketak aurreikusi, mesedez gorde aurretik erabili!',
'tooltip-diff'                    => 'Testuari egindako aldaketak erakutsi.',
'tooltip-compareselectedversions' => 'Orrialde honen bi hautatutako bertsioen arteko ezberdintasunak ikusi.',
'tooltip-watch'                   => 'Orrialde hau zure segimendu zerrendan gehitu',
'tooltip-recreate'                => 'Orrialdea birsortu ezabatu egin den arren',
'tooltip-upload'                  => 'Igoera hasi',

# Stylesheets
'common.css'   => '/** Hemen idatzitako CSS kodeak itxura guztietan izango du eragina */',
'monobook.css' => '/* Hemen idatzitako CSS kodeak Monobook itxuran bakarrik izango du eragina */',

# Scripts
'common.js' => '/* Hemen idatzitako JavaScript kode oro erabiltzaile guztiek edozein orrialde irekitzerakoan kargatuko da. */',

# Metadata
'nodublincore'      => 'Dublin Core RDF metadatuak ezgaitu egin dira zerbitzari honetarako.',
'nocreativecommons' => 'Creative Commons RDF metadatuak ezgaitu egin dira zerbitzari honetarako.',
'notacceptable'     => 'Wiki zerbitzariak ezin ditu datuak zure bezeroak irakur ditzakeen formatu batean eskaini.',

# Attribution
'anonymous'        => '{{SITENAME}}(e)ko lankide anonimoa(k)',
'siteuser'         => '{{SITENAME}}(e)ko $1 erabiltzailea',
'lastmodifiedatby' => 'Orrialdearen azken aldaketa: $2, $1. Nork: $3.', # $1 date, $2 time, $3 user
'othercontribs'    => '$1(r)en lanean oinarrituta.',
'others'           => 'besteak',
'siteusers'        => '{{SITENAME}}(e)ko $1 lankidea(k)',
'creditspage'      => 'Orrialdearen kredituak',
'nocredits'        => 'Ez dago krediturik eskuragarri orrialde honentzako.',

# Spam protection
'spamprotectiontitle'    => 'Spam-arengandik babesteko iragazkia',
'spamprotectiontext'     => 'Gorde nahi duzun orrialdea spam iragazkiak blokeatu zuen.
Baliteke zerrenda beltzean dagoen kanpo lotura batek sortzea arazo hori.',
'spamprotectionmatch'    => 'Gure spam iragazkiak testu hau antzeman du: $1',
'subcategorycount'       => '{{PLURAL:$1|Azpikategoria bat dago|$1 azpikategoria daude}} kategoria honetan.',
'categoryarticlecount'   => 'Kategoria honetan {{PLURAL:$1|artikulu bakarra dago|$1 artikulu daude}}.',
'category-media-count'   => 'Kategoria honetan {{PLURAL:$1|fitxategi bat dago|$1 fitxategi daude}}.',
'listingcontinuesabbrev' => 'jarr.',
'spambot_username'       => 'MediaWikiren spam garbiketa',
'spam_reverting'         => '$1(e)rako loturarik ez daukan azken bertsiora itzultzen',
'spam_blanking'          => 'Berrikuspen guztiek $1(e)rako lotura zeukaten, husten',

# Info page
'infosubtitle'   => 'Orrialdearen informazioa',
'numedits'       => 'Aldaketa kopurua (artikulua): $1',
'numtalkedits'   => 'Aldaketa kopurua (eztabaida orrialdea): $1',
'numwatchers'    => 'Jarraitzaile kopurua: $1',
'numauthors'     => 'Egile ezberdinen kopurua (artikulua): $1',
'numtalkauthors' => 'Egile ezberdinen kopurua (eztabaida orrialdea): $1',

# Math options
'mw_math_png'    => 'Beti PNG irudiak sortu',
'mw_math_simple' => 'Oso sinplea bada HTML, eta bestela PNG',
'mw_math_html'   => 'Posible bada HTML, eta bestela PNG',
'mw_math_source' => 'TeX bezala utzi (testu bidezko nabigatzaileentzako)',
'mw_math_modern' => 'Nabigatzaile berrientzako gomendatuta',
'mw_math_mathml' => 'MathML posible bada (proba fasean)',

# Patrolling
'markaspatrolleddiff'                 => 'Patruilatu bezala markatu',
'markaspatrolledtext'                 => 'Artikulu hau patruilatu bezala markatu',
'markedaspatrolled'                   => 'Patruilatu bezala markatu da',
'markedaspatrolledtext'               => 'Hautatutako berrikuspena patruilatu bezala markatu da.',
'rcpatroldisabled'                    => 'Aldaketa berrien patruilaketa ezgaituta dago',
'rcpatroldisabledtext'                => 'Aldaketa berrien patruilaketa ezaugarria ezgaituta dago orain.',
'markedaspatrollederror'              => 'Ezin da patruilatu bezala markatu',
'markedaspatrollederrortext'          => 'Patruilatu bezala markatzeko berrikuspen bat hautatu beharra daukazu.',
'markedaspatrollederror-noautopatrol' => 'Ez daukazu zure aldaketak patruilatu bezala markatzeko baimenik.',

# Patrol log
'patrol-log-page' => 'Patrullatze loga',
'patrol-log-line' => '$1etik $2 markatu da patruilatu moduan $3',
'patrol-log-auto' => '(automatikoa)',
'patrol-log-diff' => '$1 berrikuspena',

# Image deletion
'deletedrevision'                 => '$1 berrikuspen zaharra ezabatu da',
'filedeleteerror-short'           => 'Errorea fitxategia ezabatzerakoan: $1',
'filedeleteerror-long'            => 'Erroreak gertatu dira fitxategia ezabatzerakoan:

$1',
'filedelete-missing'              => 'Ezin da "$1" fitxategia ezabatu, ez baita existitzen.',
'filedelete-old-unregistered'     => 'Hautatutako "$1" berrikuspena ez dago datu-basean.',
'filedelete-current-unregistered' => 'Hautatutako "$1" fitxategia ez dago datu-basean.',
'filedelete-archive-read-only'    => 'Web zerbitzariak ezin du "$1" karpetan idatzi.',

# Browsing diffs
'previousdiff' => '← Aldaketa zaharragoa',
'nextdiff'     => 'Aldaketa berriagoa →',

# Media information
'mediawarning'         => "'''Oharra''': Fitxategi honek kode mingarria izan lezake; zure sisteman exekutatzea arriskutsua izan liteke.<hr />",
'imagemaxsize'         => 'Irudiak deskribapen-orrialdetan hurrengo tamainara txikitu:',
'thumbsize'            => 'Irudi txikiaren tamaina:',
'widthheightpage'      => '$1×$2, $3 orrialde',
'file-info'            => '(fitxategiaren tamaina: $1, MIME mota: $2)',
'file-info-size'       => '($1 × $2 pixel, fitxategiaren tamaina: $3, MIME mota: $4)',
'file-nohires'         => '<small>Ez dago bereizmen handiagorik.</small>',
'svg-long-desc'        => '(SVG fitxategia, nominaldi $1 × $2 pixel, fitxategiaren tamaina: $3)',
'show-big-image'       => 'Bereizmen handikoa',
'show-big-image-thumb' => '<small>Aurreikuspen honen neurria: $1 × $2 pixel</small>',

# Special:Newimages
'newimages'    => 'Fitxategi berrien galeria',
'showhidebots' => '($1 bot-ak)',
'noimages'     => 'Ez dago ezer ikusteko.',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims'     => '$1, $2×$3',
'seconds-abbrev' => 's',
'minutes-abbrev' => 'm',
'hours-abbrev'   => 'o',

# Bad image list
'bad_image_list' => 'Formatua hurrengoa da:

Zerrenda elementuak (hasieran * duten lerroak) baino ez dira kontuan hartzen. Lerro bateko lehen lotura irudi ezegoki batera zuzendutakoa izan behar da. Lerro bereko gainontzeko loturak salbuespentzat hartzen dira, adib. irudia izan dezaketen artikuluak.',

# Metadata
'metadata'          => 'Metadatuak',
'metadata-help'     => 'Fitxategi honek informazio gehigarri dauka, ziurrenik kamera digital edo eskanerrak egiterako momentuan gehitutakoa. Hori dela-eta, jatorrizko fitxategi hori aldatu egin bada, baliteke xehetasun batzuek errealitatearekin bat ez egitea.',
'metadata-expand'   => 'Xehetasunak erakutsi',
'metadata-collapse' => 'Xehetasunak ezkutatu',
'metadata-fields'   => 'Mezu honetan zerrendatutako EXIF metadatu eremuak irudiaren orrialdean erakutsiko dira. Gainontzekoak ezkutatu egindako dira lehenetsi bezala.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Zabalera',
'exif-imagelength'                 => 'Altuera',
'exif-bitspersample'               => 'Bit osagaiko',
'exif-compression'                 => 'Konpresio eskema',
'exif-photometricinterpretation'   => 'Pixelen konposaketa',
'exif-orientation'                 => 'Orientazioa',
'exif-samplesperpixel'             => 'Atal kopurua',
'exif-planarconfiguration'         => 'Datuen banaketa',
'exif-ycbcrsubsampling'            => 'Ytik Crako azpisanpleatu erlazioa',
'exif-ycbcrpositioning'            => 'Y eta Cren kokatzea',
'exif-xresolution'                 => 'Bereizmen horizontala',
'exif-yresolution'                 => 'Bereizmen bertikala',
'exif-resolutionunit'              => 'X eta Yren erresoluzioen batura',
'exif-stripoffsets'                => 'Irudiaren datuen kokapena',
'exif-rowsperstrip'                => 'Zutabe bakoitzean dauden lerro kopurua',
'exif-stripbytecounts'             => 'Konprimatutako zerrenda bakoitzeko byte kopurua',
'exif-jpeginterchangeformat'       => 'JPEG SOIren offseta',
'exif-jpeginterchangeformatlength' => 'JPEG datuen byteak',
'exif-transferfunction'            => 'Transferentzia funtzioa',
'exif-whitepoint'                  => 'Puntu txuriaren kromatizitatea',
'exif-primarychromaticities'       => 'Primarioen kromatizitateak',
'exif-ycbcrcoefficients'           => 'Kolore espzioaren aldatze koefiziente matrizeak',
'exif-referenceblackwhite'         => 'Txuri eta beltzaren erreferentzia balioen parea',
'exif-datetime'                    => 'Fitxategi aldaketaren data eta ordua',
'exif-imagedescription'            => 'Irudiaren izenburua',
'exif-make'                        => 'Kameraren fabrikatzailea',
'exif-model'                       => 'Kamara mota',
'exif-software'                    => 'Erabilitako softwarea',
'exif-artist'                      => 'Egilea',
'exif-copyright'                   => 'Copyright-aren jabea',
'exif-exifversion'                 => 'Exif bertsioa',
'exif-flashpixversion'             => 'Gaitutako Flashpix bertsioa',
'exif-colorspace'                  => 'Kolore tartea',
'exif-componentsconfiguration'     => 'Osagai bakoitzaren esanahia',
'exif-compressedbitsperpixel'      => 'Irudi konpresio mota',
'exif-pixelydimension'             => 'Baliozko irudi zabalera',
'exif-pixelxdimension'             => 'Baliozko irudi altuera',
'exif-makernote'                   => 'Egilearen oharrak',
'exif-usercomment'                 => 'Erabiltzailearen iruzkinak',
'exif-relatedsoundfile'            => 'Harremanetan dagoen audio fitxategia',
'exif-datetimeoriginal'            => 'Datuen sorreraren data eta ordua',
'exif-datetimedigitized'           => 'Digitalizazioaren data eta ordua',
'exif-subsectime'                  => 'DataDenbora azpisegunduak',
'exif-subsectimeoriginal'          => 'DataDenboraOrijinala azpisegunduak',
'exif-subsectimedigitized'         => 'DataDenboraDigitalizatu azpisekunduak',
'exif-exposuretime'                => 'Esposizio denbora',
'exif-exposuretime-format'         => '$1 seg ($2)',
'exif-fnumber'                     => 'F Zenbakia',
'exif-fnumber-format'              => 'f/$1',
'exif-exposureprogram'             => 'Esposizio Programa',
'exif-spectralsensitivity'         => 'Sentiberatasun espektrala',
'exif-isospeedratings'             => 'ISO abiadura',
'exif-oecf'                        => 'Aldatze faktore optoelektronikoa',
'exif-shutterspeedvalue'           => 'Argazkiaren abiadura',
'exif-aperturevalue'               => 'Irekiera',
'exif-brightnessvalue'             => 'Distira',
'exif-exposurebiasvalue'           => 'Esposizio biasa',
'exif-maxaperturevalue'            => 'Gehienezko landa irekiera',
'exif-subjectdistance'             => 'Subjetuarekiko distantzia',
'exif-meteringmode'                => 'Distantzia-neurtze modua',
'exif-lightsource'                 => 'Argiaren jatorria',
'exif-flash'                       => 'Flash',
'exif-focallength'                 => 'Lentearen fokatze luzera',
'exif-focallength-format'          => '$1 mm',
'exif-subjectarea'                 => 'Subjektuaren zonaldea',
'exif-flashenergy'                 => 'Flasharen indarra',
'exif-spatialfrequencyresponse'    => 'Frekuentzia espazialarekiko erantzuna',
'exif-focalplanexresolution'       => 'Plano fokalaren X erresoluzioa',
'exif-focalplaneyresolution'       => 'Plano fokalaren Y erresoluzioa',
'exif-focalplaneresolutionunit'    => 'Plano fokalaren erresoluzio unitatea',
'exif-subjectlocation'             => 'Subjektuaren kokapena',
'exif-exposureindex'               => 'Esposaketa indizea',
'exif-sensingmethod'               => 'Sensorearen metodoa',
'exif-filesource'                  => 'Fitxategiaren jatorria',
'exif-scenetype'                   => 'Eskena mota',
'exif-cfapattern'                  => 'CFA patroia',
'exif-customrendered'              => 'Irudien prozesamendu pertsonalizatua',
'exif-exposuremode'                => 'Esposaketa mota',
'exif-whitebalance'                => 'Txurien oreka',
'exif-digitalzoomratio'            => 'Zoom digitalaren eskala',
'exif-focallengthin35mmfilm'       => '35 mm.ko filmean luzera fokala',
'exif-scenecapturetype'            => 'Eskena hartze mota',
'exif-gaincontrol'                 => 'Eskena kontrola',
'exif-contrast'                    => 'Kontrastea',
'exif-saturation'                  => 'Asetasuna',
'exif-sharpness'                   => 'Fokatzea',
'exif-devicesettingdescription'    => 'Gailuaren konfigurazio deskribapena',
'exif-subjectdistancerange'        => 'Subjektuaren distantzia balio-eremua',
'exif-imageuniqueid'               => 'Irudiaren ID bakarra',
'exif-gpsversionid'                => 'GPS etiketa bertsioa',
'exif-gpslatituderef'              => 'Iparraldeko edo hegoaldeko latitudea',
'exif-gpslatitude'                 => 'Latitudea',
'exif-gpslongituderef'             => 'Ekialdeko edo mendebaldeko longitudea',
'exif-gpslongitude'                => 'Longitudea',
'exif-gpsaltituderef'              => 'Garaiera erreferentzia',
'exif-gpsaltitude'                 => 'Garaiera',
'exif-gpstimestamp'                => 'GPS ordua (erloju atomikoa)',
'exif-gpssatellites'               => 'Neurketarako erabilitako sateliteak',
'exif-gpsstatus'                   => 'Hartzailearen egoera',
'exif-gpsmeasuremode'              => 'Neurketarako modua',
'exif-gpsdop'                      => 'Neurketaren zehaztasuna',
'exif-gpsspeedref'                 => 'Abiadura unitatea',
'exif-gpsspeed'                    => 'GPS hartzailearen abiadura',
'exif-gpstrackref'                 => 'Mugimenduaren norabidearentzako erreferentzia',
'exif-gpstrack'                    => 'Mugimenduaren norabidea',
'exif-gpsimgdirectionref'          => 'Irudiaren norabidearentzako erreferentzia',
'exif-gpsimgdirection'             => 'Irudiaren norabidea',
'exif-gpsmapdatum'                 => 'Ikerketa geodetikorako erabilitako datuak',
'exif-gpsdestlatituderef'          => 'Helburu eta latituderako erreferentzia',
'exif-gpsdestlatitude'             => 'Latitude helburua',
'exif-gpsdestlongituderef'         => 'Luzera eta helbururako erreferentzia',
'exif-gpsdestlongitude'            => 'Helburuaren luzera',
'exif-gpsdestbearingref'           => 'Helburuaren norabiderako erreferentzia',
'exif-gpsdestbearing'              => 'Helburuaren norabidea',
'exif-gpsdestdistanceref'          => 'Helbururako dagoen distantziarako erreferentzia',
'exif-gpsdestdistance'             => 'Helburuarekiko distantzia',
'exif-gpsprocessingmethod'         => 'GPS prozesamendu metodoaren izena',
'exif-gpsareainformation'          => 'GPS eskualdearen izena',
'exif-gpsdatestamp'                => 'GPS data',
'exif-gpsdifferential'             => 'GPSaren zuzenketa diferentziala',

# EXIF attributes
'exif-compression-1' => 'Konprimatu gabe',
'exif-compression-6' => 'JPEG',

'exif-photometricinterpretation-2' => 'GBU (RGB)',
'exif-photometricinterpretation-6' => 'YCbCr',

'exif-unknowndate' => 'Data ezezaguna',

'exif-orientation-1' => 'Arrunta', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Horizontalki buelta emana', # 0th row: top; 0th column: right
'exif-orientation-3' => '180° biratuta', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Bertikalki buelta emana', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Erlojuaren aurka 90º biratuta eta bertikalki buelta emana', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Erlojuaren norantzan 90º biratua', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Erlojuaren norantzan 90º biratuta eta bertikalki buelta emana', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Erlojuaren aurka 90º biratua', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'formatu potoloa',
'exif-planarconfiguration-2' => 'formatu planarra',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1'      => 'sRGB',
'exif-colorspace-ffff.h' => 'FFFF.H',

'exif-componentsconfiguration-0' => 'ez da existitzen',
'exif-componentsconfiguration-1' => 'Y',
'exif-componentsconfiguration-2' => 'Cb',
'exif-componentsconfiguration-3' => 'Cr',
'exif-componentsconfiguration-4' => 'G',
'exif-componentsconfiguration-5' => 'B',
'exif-componentsconfiguration-6' => 'U',

'exif-exposureprogram-0' => 'Definitu gabe',
'exif-exposureprogram-1' => 'Eskuz',
'exif-exposureprogram-2' => 'Programa arrunta',
'exif-exposureprogram-3' => 'Irekiera prioritatea',
'exif-exposureprogram-4' => 'Abiaduraren prioritatea',
'exif-exposureprogram-5' => 'Programa kreatiboa (eremu sakonera lortze bidean)',
'exif-exposureprogram-6' => 'Akzioa (argazki abiadura azkarra lortze bidean)',
'exif-exposureprogram-7' => 'Erretratu modua (atzealde ez fokatua duten gertuko argazkientzat)',
'exif-exposureprogram-8' => 'Paisaia modua (atzealde fokatua duten paisaia argazkientzat)',

'exif-subjectdistance-value' => '$1 metro',

'exif-meteringmode-0'   => 'Ezezaguna',
'exif-meteringmode-1'   => 'Bataz-bestekoa',
'exif-meteringmode-2'   => 'ZentruanNeurketaBataz-bestekoa',
'exif-meteringmode-3'   => 'Puntua',
'exif-meteringmode-4'   => 'MultiPuntua',
'exif-meteringmode-5'   => 'Eredua',
'exif-meteringmode-6'   => 'Partziala',
'exif-meteringmode-255' => 'Beste bat',

'exif-lightsource-0'   => 'Ezezaguna',
'exif-lightsource-1'   => 'Egun argia',
'exif-lightsource-2'   => 'Fluoreszentea',
'exif-lightsource-3'   => 'Wolframioa (argi inkandeszentea)',
'exif-lightsource-4'   => 'Flash',
'exif-lightsource-9'   => 'Eguraldi ona',
'exif-lightsource-10'  => 'Eguraldi lainotsua',
'exif-lightsource-11'  => 'Itzala',
'exif-lightsource-12'  => 'Egun argiko fluoreszentea (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Eguneko fluoreszente txuria (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluoreszente txuri hotza (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Fluoreszente txuria (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'A argi estandarra',
'exif-lightsource-18'  => 'B argi estandarra',
'exif-lightsource-19'  => 'C argi estandarra',
'exif-lightsource-20'  => 'D55',
'exif-lightsource-21'  => 'D65',
'exif-lightsource-22'  => 'D75',
'exif-lightsource-23'  => 'D50',
'exif-lightsource-24'  => 'ISO estudio wolframioa',
'exif-lightsource-255' => 'Beste argi iturburu bat',

'exif-focalplaneresolutionunit-2' => 'hazbete',

'exif-sensingmethod-1' => 'Definitu gabea',
'exif-sensingmethod-2' => 'Txip bakarreko kolorezko eremu sentsorea',
'exif-sensingmethod-3' => 'Bi txipeko kolorezko eremu sentsorea',
'exif-sensingmethod-4' => 'Hiru txipeko kolorezko eremu sentsorea',
'exif-sensingmethod-5' => 'Kolore sekuentzialeko eremu sentsorea',
'exif-sensingmethod-7' => 'Hiru lerroko sentsorea',
'exif-sensingmethod-8' => 'Kolore sekuentzialeko sentsore linearra',

'exif-filesource-3' => 'DSC',

'exif-scenetype-1' => 'Zuzenean argazkia atera zaion irudi bat',

'exif-customrendered-0' => 'Prozesu arrunta',
'exif-customrendered-1' => 'Prozesu pertsonalizatua',

'exif-exposuremode-0' => 'Esposizio automatikoa',
'exif-exposuremode-1' => 'Eskuzko esposizioa',
'exif-exposuremode-2' => 'Bracket automatikoa',

'exif-whitebalance-0' => 'Zurien balantze automatikoa',
'exif-whitebalance-1' => 'Zurien eskuzko balantzea',

'exif-scenecapturetype-0' => 'Arrunta',
'exif-scenecapturetype-1' => 'Paisaia',
'exif-scenecapturetype-2' => 'Erretratua',
'exif-scenecapturetype-3' => 'Gau eskena',

'exif-gaincontrol-0' => 'Ezer',
'exif-gaincontrol-1' => 'Gain igotze baxua',
'exif-gaincontrol-2' => 'Gain igotze altua',
'exif-gaincontrol-3' => 'Gain beheragotze baxua',
'exif-gaincontrol-4' => 'Gain beheratze altua',

'exif-contrast-0' => 'Arrunta',
'exif-contrast-1' => 'Leuna',
'exif-contrast-2' => 'Zakarra',

'exif-saturation-0' => 'Arrunta',
'exif-saturation-1' => 'Asetasun baxua',
'exif-saturation-2' => 'Asetasun altua',

'exif-sharpness-0' => 'Arrunta',
'exif-sharpness-1' => 'Leuna',
'exif-sharpness-2' => 'Zakarra',

'exif-subjectdistancerange-0' => 'Ezezaguna',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Ikuspegi itxia',
'exif-subjectdistancerange-3' => 'Urruneko ikuspegia',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Iparraldeko latitudea',
'exif-gpslatitude-s' => 'Hegoaldeko latitudea',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Ekialdeko longitudea',
'exif-gpslongitude-w' => 'Mendebaldeko longitudea',

'exif-gpsstatus-a' => 'Neurketa burutzen',
'exif-gpsstatus-v' => 'Neurketen interoperabilitatea',

'exif-gpsmeasuremode-2' => '2 dimentsioko neurketa',
'exif-gpsmeasuremode-3' => '3 dimentsioko neurketa',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilometro orduko',
'exif-gpsspeed-m' => 'Milia orduko',
'exif-gpsspeed-n' => 'Lotailuak',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Benetako norabidea',
'exif-gpsdirection-m' => 'Norabide magnetikoa',

# External editor support
'edit-externally'      => 'Fitxategi hau editatu kanpo-aplikazio bat erabiliz',
'edit-externally-help' => '(Ikus [http://www.mediawiki.org/wiki/Manual:External_editors konfiguraziorako argibideak] informazio gehiagorako)',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'guztiak',
'imagelistall'     => 'guztiak',
'watchlistall2'    => 'guztiak',
'namespacesall'    => 'guztiak',
'monthsall'        => 'guztiak',

# E-mail address confirmation
'confirmemail'            => 'E-posta helbidea egiaztatu',
'confirmemail_noemail'    => 'Ez daukazu e-posta helbiderik zehaztuta zure [[Special:Preferences|hobespenetan]].',
'confirmemail_text'       => 'Wiki honetan zure e-posta helbidea egiaztatzea beharrezkoa da e-postarekin zerikusia duten ezaugarriak erabili aurretik. Beheko botoia jo zure helbidera egiaztapen mezu bat bidaltzeko. Mezuan kode bat duen lotura bat joango da atxikita; lotura hori zure nabigatzailean ireki ezazu e-posta helbidea egiaztatzeko.',
'confirmemail_pending'    => '<div class="error">Egiaztapen kode bat bidali zaizu jada; erabiltzaile kontua duela gutxi sortu baduzu, mezua iritsi bitartean minutu batzuk itxaron beharko zenituzke kode berri bat eskatu aurretik.</div>',
'confirmemail_send'       => 'Egiaztapen kodea e-postaz bidali',
'confirmemail_sent'       => 'Egiaztapen mezua bidali da.',
'confirmemail_oncreate'   => 'Egiaztapen kodea bidali zaizu zure e-posta helbidera. Kode hau ez da beharrezkoa saioa hasteko, baina bai wikiak eskaintzen dituen e-posta zerbitzuez profitatzeko.',
'confirmemail_sendfailed' => '{{SITENAME}}(e)k ezin izan du egiaztapen mezua bidali. 
Ziurtatu e-posta helbidean baliogabeko karaktererik ez dagoela. 

Zerbitzariaren mezua: $1',
'confirmemail_invalid'    => 'Baliogabeko egiaztapen kodea. Baliteke kodea iraungi izana.',
'confirmemail_needlogin'  => '$1 behar duzu zure e-posta helbidea egiaztatzeko.',
'confirmemail_success'    => 'Zure e-posta helbidea egiaztatu da. Saioa hasi eta ekarpenak egin ditzakezu orain.',
'confirmemail_loggedin'   => 'Zure e-posta helbidea egiaztatu da.',
'confirmemail_error'      => 'Akatsen bat gertatu da egiaztapena burutzerakoan.',
'confirmemail_subject'    => 'E-posta helbide egiaztapena {{SITENAME}}(e)n',
'confirmemail_body'       => 'Norbaitek, ziurrenik zuk ($1 IP helbidetik), "$2" kontua erregistratu du {{SITENAME}}(e)n e-posta helbide honekin.

Izen hori zuri dagokizula eta {{SITENAME}}(e)n zure e-posta egiaztatzeko, hurrengo lotura hau zure nabigatzailean ireki behar duzu:

$3

Zu *ez* bazara, ez jo lotura horretara. Egiaztapen kode hau $4 iraungiko da.',

# Scary transclusion
'scarytranscludedisabled' => '[Interwikien transklusioa ezgaituta dago]',
'scarytranscludefailed'   => '[Arazoa $1 txantiloia eskuratzerakoan]',
'scarytranscludetoolong'  => '[URLa luzeegia da]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks"> Artikulu honen aipuak:<br /> $1 </div>',
'trackbackremove'   => ' ([$1 Ezabatu])',
'trackbacklink'     => 'Aipua',
'trackbackdeleteok' => 'Aipua ezabatu egin da.',

# Delete conflict
'deletedwhileediting' => "'''Oharra''': Zu aldaketak egiten hasi ondoren orrialdea ezabatua izan da!",
'confirmrecreate'     => "[[User:$1|$1]] erabiltzaileak ([[User talk:$1|eztabaida]]) orrialde hau ezabatu zu aldatzen hasi eta gero. Hona arrazoia: : ''$2'' Mesedez, baieztatu orrialde hau berriz sortu nahi duzula.",
'recreate'            => 'Birsortu',

# HTML dump
'redirectingto' => '[[:$1]] orrialdera berbideratzen...',

# action=purge
'confirm_purge'        => 'Orrialde honen katxea ezabatu?

$1',
'confirm_purge_button' => 'Ados',

# AJAX search
'searchcontaining' => "''$1'' barne duten orrialdeen bilaketa.",
'searchnamed'      => "''$1'' izenburua duten artikuluen bilaketa.",
'articletitles'    => "''$1''(r)ekin hasten diren artikuluak",
'hideresults'      => 'Emaitzak ezkutatu',
'useajaxsearch'    => 'AJAX bilaketa erabili',

# Multipage image navigation
'imgmultipageprev' => '&larr; aurreko orrialdea',
'imgmultipagenext' => 'hurrengo orrialdea &rarr;',
'imgmultigo'       => 'Joan!',
'imgmultigotopre'  => 'Orrialdera jo',

# Table pager
'ascending_abbrev'         => 'gor',
'descending_abbrev'        => 'behe',
'table_pager_next'         => 'Hurrengo orrialdea',
'table_pager_prev'         => 'Aurreko orrialdea',
'table_pager_first'        => 'Lehen orrialdea',
'table_pager_last'         => 'Azken orrialdea',
'table_pager_limit'        => 'Orrialdeko $1 elementu erakutsi',
'table_pager_limit_submit' => 'Joan',
'table_pager_empty'        => 'Emaitzik ez',

# Auto-summaries
'autosumm-blank'   => 'Orritik eduki guztia ezabatuta',
'autosumm-replace' => "Orrialdea '$1'(r)engatik ordezten",
'autoredircomment' => '[[$1]] orrialdera birzuzentzentzen',
'autosumm-new'     => 'Orrialde berria $1-(e)kin sortua',

# Live preview
'livepreview-loading' => 'Kargatzen…',
'livepreview-ready'   => 'Kargatzen… Prest!',
'livepreview-failed'  => 'Huts egin du berehalako aurreikuspenak! Saiatu aurreikuspen normala erabiltzen.',
'livepreview-error'   => 'Ezin izan da konektatu: $1 "$2". Saiatu aurreikuspen normala erabiltzen.',

# Watchlist editor
'watchlistedit-numitems'       => 'Zure jarraipen zerrendak {{PLURAL:$1|titulu bat du|$1 titulu ditu}}, eztabaida orrialdeak kenduta.',
'watchlistedit-noitems'        => 'Zure jarraitze-zerrendak ez du izenbururik.',
'watchlistedit-normal-title'   => 'Jarraitze zerrenda aldatu',
'watchlistedit-normal-legend'  => 'Jarraipen-zerrendatik izenburuak kendu',
'watchlistedit-normal-explain' => 'Zure jarraipen-zerrendako izenburuak azpian daude.
Titulu bat kentzeko ondoan dagoen kutxa marka ezazu eta Kendu Izenburua gainean klik egin.
Gainera [[Special:Watchlist/raw|raw zerrenda aldatu]] dezakezu.',
'watchlistedit-normal-submit'  => 'Izenburuak kendu',
'watchlistedit-normal-done'    => 'Zure jarraipen-zerrendatik {{PLURAL:$1|izenburu bat kendu da|$1 izenburu kendu dira}}.',
'watchlistedit-raw-title'      => 'Jarraitze zerrenda gordina aldatu',
'watchlistedit-raw-legend'     => 'Jarraitze zerrenda gordina aldatu',
'watchlistedit-raw-explain'    => 'Azpian zure jarraipen zerrendako izenburuak daude, eta aldatuak izan daitezke zerrendatik gehitu edo ezabatzean;
lerroko izenburu bat.
Bukatzean, klikatu Jarraitze-zerrenda Eguneratu botoian.
Halaber [[Special:Watchlist/edit|aldatzaile estandarra]] erabil dezakezu.',
'watchlistedit-raw-titles'     => 'Izenburuak:',
'watchlistedit-raw-submit'     => 'Jarraitze-zerrenda eguneratu',
'watchlistedit-raw-done'       => 'Zure jarraipen zerrenda berritu da.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|Titulu 1 gehitu da|$1 gehitu dira}}:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|Izenburu 1|$1 izenburu}} ezabatu dira:',

# Watchlist editing tools
'watchlisttools-view' => 'Aldaketa garrantzitsuak ikusi',
'watchlisttools-edit' => 'Zerrenda ikusi eta aldatu',
'watchlisttools-raw'  => 'Zerrenda idatziz aldatu',

# Core parser functions
'unknown_extension_tag' => '"$1" luzapen etiketa ezezaguna',

# Special:Version
'version-extensions'               => 'Instalatutako luzapenak',
'version-specialpages'             => 'Aparteko orrialdeak',
'version-parserhooks'              => 'Parser estentsioak',
'version-variables'                => 'Aldagaiak',
'version-other'                    => 'Bestelakoak',
'version-mediahandlers'            => 'Media gordailuak',
'version-hooks'                    => 'Estentsioak',
'version-extension-functions'      => 'Luzapen funtzioak',
'version-parser-extensiontags'     => 'Parser luzapen etiketak',
'version-parser-function-hooks'    => 'Parser funtzio estentsioak',
'version-skin-extension-functions' => 'Itxura luzapen funtzioak',
'version-hook-name'                => 'Estentsioaren izena',
'version-hook-subscribedby'        => 'Hauen harpidetzarekin',
'version-version'                  => 'Bertsioa',
'version-license'                  => 'Lizentzia',
'version-software'                 => 'Instalatutako softwarea',
'version-software-product'         => 'Produktua',
'version-software-version'         => 'Bertsioa',

# Special:Filepath
'filepath'        => 'Fitxategi bidea',
'filepath-page'   => 'Fitxategia:',
'filepath-submit' => 'Ibilbidea',

);
