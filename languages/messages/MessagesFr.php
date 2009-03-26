<?php
/** French (Français)
 *
 * @ingroup Language
 * @file
 *
 * @author Agzennay
 * @author Cedric31
 * @author ChrisPtDe
 * @author Crochet.david
 * @author Delhovlyn
 * @author Dereckson
 * @author Diti
 * @author Elfix
 * @author Grondin
 * @author Guillom
 * @author Hégésippe Cormier
 * @author IAlex
 * @author JeanVoisin
 * @author Korg
 * @author Louperivois
 * @author McDutchie
 * @author Meithal
 * @author Meno25
 * @author Moyg
 * @author Omnipaedista
 * @author PieRRoMaN
 * @author Remember the dot
 * @author Seb35
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 * @author Zetud
 * @author Горан Анђелковић
 * @author לערי ריינהארט
 */

$skinNames = array(
	'standard'    => 'Standard',
	'nostalgia'   => 'Nostalgie',
	'cologneblue' => 'Bleu de Cologne',
	'monobook'    => 'Monobook',
	'myskin'      => 'Mon Interface',
	'chick'       => 'Poussin',
	'simple'      => 'Simple',
	'modern'      => 'Moderne',
);

$bookstoreList = array(
	'Amazon.fr'    => 'http://www.amazon.fr/exec/obidos/ISBN=$1',
	'alapage.fr'   => 'http://www.alapage.com/mx/?tp=F&type=101&l_isbn=$1&donnee_appel=ALASQ&devise=&',
	'fnac.com'     => 'http://www3.fnac.com/advanced/book.do?isbn=$1',
	'chapitre.com' => 'http://www.chapitre.com/frame_rec.asp?isbn=$1',
);

$namespaceNames = array(
	NS_MEDIA          => 'Media',
	NS_SPECIAL        => 'Special',
	NS_MAIN           => '',
	NS_TALK           => 'Discuter',
	NS_USER           => 'Utilisateur',
	NS_USER_TALK      => 'Discussion_Utilisateur',
	NS_PROJECT        => '$1',
	NS_PROJECT_TALK   => 'Discussion_$1',
	NS_IMAGE          => 'Image',
	NS_IMAGE_TALK     => 'Discussion_Image',
	NS_MEDIAWIKI      => 'MediaWiki',
	NS_MEDIAWIKI_TALK => 'Discussion_MediaWiki',
	NS_TEMPLATE       => 'Modèle',
	NS_TEMPLATE_TALK  => 'Discussion_Modèle',
	NS_HELP           => 'Aide',
	NS_HELP_TALK      => 'Discussion_Aide',
	NS_CATEGORY       => 'Catégorie',
	NS_CATEGORY_TALK  => 'Discussion_Catégorie'
);
$linkTrail = '/^([a-zàâçéèêîôûäëïöüùÇÉÂÊÎÔÛÄËÏÖÜÀÈÙ]+)(.*)$/sDu';

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'F j, Y',
	'mdy both' => 'F j, Y à H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y à H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'Y F j à H:i',
);

$magicWords = array(
	'redirect'            => array( '0', '#REDIRECT', '#REDIRECTION' ),
	'notoc'               => array( '0', '__NOTOC__', '__AUCUNETABLE__' ),
	'nogallery'           => array( '0', '__NOGALLERY__', '__AUCUNEGALERIE__' ),
	'forcetoc'            => array( '0', '__FORCETOC__', '__FORCERTABLE__' ),
	'toc'                 => array( '0', '__TOC__', '__TABLE__' ),
	'noeditsection'       => array( '0', '__NOEDITSECTION__', '__SECTIONNONEDITABLE__' ),
	'currentmonth'        => array( '1', 'CURRENTMONTH', 'MOISCOURANT' ),
	'currentmonthname'    => array( '1', 'CURRENTMONTHNAME', 'NOMMOISCOURANT' ),
	'currentday'          => array( '1', 'CURRENTDAY', 'JOURCOURANT' ),
	'currentday2'         => array( '1', 'CURRENTDAY2', 'JOURCOURANT2' ),
	'currentdayname'      => array( '1', 'CURRENTDAYNAME', 'NOMJOURCOURANT' ),
	'currentyear'         => array( '1', 'CURRENTYEAR', 'ANNEECOURANTE' ),
	'currenttime'         => array( '1', 'CURRENTTIME', 'DATECOURANTE' ),
	'currenthour'         => array( '1', 'CURRENTHOUR', 'HEURECOURANTE' ),
	'numberofpages'       => array( '1', 'NUMBEROFPAGES', 'NOMBREPAGES' ),
	'numberofarticles'    => array( '1', 'NUMBEROFARTICLES', 'NOMBREARTICLES' ),
	'numberoffiles'       => array( '1', 'NUMBEROFFILES', 'NOMBREFICHIERS' ),
	'numberofusers'       => array( '1', 'NUMBEROFUSERS', 'NOMBREUTILISATEURS' ),
	'numberofedits'       => array( '1', 'NUMBEROFEDITS', 'NOMBREEDITIONS' ),
	'pagename'            => array( '1', 'PAGENAME', 'NOMPAGE' ),
	'namespace'           => array( '1', 'NAMESPACE', 'ESPACENOMMAGE' ),
	'talkspace'           => array( '1', 'TALKSPACE', 'ESPACEDISCUSSION' ),
	'img_right'           => array( '1', 'right', 'droite' ),
	'img_left'            => array( '1', 'left', 'gauche' ),
	'img_none'            => array( '1', 'none', 'neant' ),
	'img_framed'          => array( '1', 'framed', 'enframed', 'frame', 'cadre' ),
	'img_frameless'       => array( '1', 'frameless', 'sans_cadre' ),
	'img_border'          => array( '1', 'border', 'bordure' ),
	'server'              => array( '0', 'SERVER', 'SERVEUR' ),
	'servername'          => array( '0', 'SERVERNAME', 'NOMSERVEUR' ),
	'scriptpath'          => array( '0', 'SCRIPTPATH', 'CHEMINSCRIPT' ),
	'grammar'             => array( '0', 'GRAMMAR:', 'GRAMMAIRE:' ),
	'currentweek'         => array( '1', 'CURRENTWEEK', 'SEMAINECOURANTE' ),
	'revisionid'          => array( '1', 'REVISIONID', 'NUMEROVERSION' ),
	'revisionday'         => array( '1', 'REVISIONDAY', 'DATEVERSION' ),
	'revisionday2'        => array( '1', 'REVISIONDAY2', 'DATEVERSION2' ),
	'revisionmonth'       => array( '1', 'REVISIONMONTH', 'MOISREVISION' ),
	'revisionyear'        => array( '1', 'REVISIONYEAR', 'ANNEEREVISION' ),
	'revisiontimestamp'   => array( '1', 'REVISIONTIMESTAMP', 'HEUREREVISION' ),
	'plural'              => array( '0', 'PLURAL:', 'PLURIEL:' ),
	'raw'                 => array( '0', 'RAW:', 'LIGNE:' ),
	'displaytitle'        => array( '1', 'DISPLAYTITLE', 'AFFICHERTITRE' ),
	'newsectionlink'      => array( '1', '__NEWSECTIONLINK__', '__LIENNOUVELLESECTION__' ),
	'currentversion'      => array( '1', 'CURRENTVERSION', 'VERSIONACTUELLE' ),
	'currenttimestamp'    => array( '1', 'CURRENTTIMESTAMP', 'HEUREACTUELLE' ),
	'localtimestamp'      => array( '1', 'LOCALTIMESTAMP', 'HEURELOCALE' ),
	'language'            => array( '0', '#LANGUAGE:', '#LANGUE:' ),
	'numberofadmins'      => array( '1', 'NUMBEROFADMINS', 'NOMBREADMINS' ),
	'formatnum'           => array( '0', 'FORMATNUM', 'FORMATNOMBRE' ),
	'defaultsort'         => array( '1', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:', 'CLEFDETRI:', 'CLEDETRI:' ),
	'filepath'            => array( '0', 'FILEPATH:', 'CHEMIN:' ),
	'tag'                 => array( '0', 'tag', 'balise' ),
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Doubles_redirections', 'Doublesredirections', 'Doubles_redirects', 'Doublesredirects', 'Redirections_doubles', 'Redirectionsdoubles' ),
	'BrokenRedirects'           => array( 'Redirections_cassées', 'Redirections_cassees' ),
	'Disambiguations'           => array( 'Homonymie', 'Homonymies', 'Pages_d\'homonymie' ),
	'Userlogin'                 => array( 'Connexion', 'Identification', 'Login' ),
	'Userlogout'                => array( 'Déconnexion', 'Deconnexion' ),
	'Preferences'               => array( 'Préférences' ),
	'Watchlist'                 => array( 'Liste_de_suivi', 'Listedesuivi', 'Suivi' ),
	'Recentchanges'             => array( 'Modifications_récentes', 'Modifications_recentes' ),
	'Upload'                    => array( 'Téléchargement', 'Telechargement' ),
	'Imagelist'                 => array( 'Liste_des_images', 'Listedesimages', 'Liste_images', 'Listeimages' ),
	'Newimages'                 => array( 'Nouvelles_images', 'Nouveaux_fichiers' ),
	'Listusers'                 => array( 'Liste_des_utilisateurs', 'Liste_des_participants', 'Utilisateurs', 'Participants' ),
	'Statistics'                => array( 'Statistiques', 'Stats' ),
	'Randompage'                => array( 'Page_au_hasard', 'Au_hasard', 'Aléatoire', 'Aleatoire' ),
	'Lonelypages'               => array( 'Pages_orphelines', 'Pagesorphelines' ),
	'Uncategorizedpages'        => array( 'Pages_sans_catégorie', 'Pages_sans_categorie' ),
	'Uncategorizedcategories'   => array( 'Catégories_sans_catégorie', 'Categories_sans_categorie' ),
	'Uncategorizedimages'       => array( 'Images_sans_catégorie', 'Images_sans_categorie' ),
	'Uncategorizedtemplates'    => array( 'Modèles_sans_catégorie', 'Modeles_sans_catégorie' ),
	'Unusedcategories'          => array( 'Catégories_inutilisées', 'Categories_inutilisees', 'Catégories_non_utilisées', 'Categories_non_utilisees' ),
	'Unusedimages'              => array( 'Images_inutilisées', 'Images_inutilisees', 'Images_non_utilisées', 'Images_non_utilisees', 'Images_orphelines' ),
	'Wantedpages'               => array( 'Pages_demandées', 'Pages_demandees' ),
	'Wantedcategories'          => array( 'Catégories_demandées', 'Categories_demandees' ),
	'Mostlinked'                => array( 'Pages_les_plus_liées', 'Pages_les_plus_liees', 'Pages_plus_liées', 'Pages_plus_liees', 'Plus_liées', 'Plus_liees' ),
	'Mostlinkedcategories'      => array( 'Catégories_les_plus_utilisées', 'Categories_les_plus_utilisees' ),
	'Mostlinkedtemplates'       => array( 'Modèles_les_plus_utilisés', 'Modeles_les_plus_utilises' ),
	'Mostcategories'            => array( 'Plus_categorisées', 'Plus_categorisees' ),
	'Mostimages'                => array( 'Images_les_plus_utilisées', 'Images_les_plus_utilisees' ),
	'Mostrevisions'             => array( 'Articles_les_plus_modifiés', 'Articles_les_plus_modifies', 'Plus_modifiés', 'Plus_modifies', 'Plus_modifiées', 'Plus_modifiees' ),
	'Fewestrevisions'           => array( 'Articles_les_moins_modifiés', 'Articles_les_moins_modifies', 'Moins_modifiés', 'Moins_modifies', 'Moins_modifiées', 'Moins_modifiees' ),
	'Shortpages'                => array( 'Pages_courtes', 'Pagescourtes' ),
	'Longpages'                 => array( 'Pages_longues', 'Pageslongues' ),
	'Newpages'                  => array( 'Nouvelles_pages', 'Nouvellespages' ),
	'Ancientpages'              => array( 'Anciennes_pages', 'Anciennespages' ),
	'Deadendpages'              => array( 'Pages_en_impasse', 'Pagesenimpasse' ),
	'Protectedpages'            => array( 'Pages_protégées', 'Pages_protegees', 'Pagesprotégées', 'Pagesprotegees' ),
	'Protectedtitles'           => array( 'Titres_protégés', 'Titres_proteges', 'Titresprotégés', 'Titresproteges' ),
	'Allpages'                  => array( 'Toutes_les_pages', 'Touteslespages' ),
	'Prefixindex'               => array( 'Index' ),
	'Ipblocklist'               => array( 'Utilisateurs_bloqués', 'Utilisateurs_bloques', 'Utilisateursbloqués', 'Utilisateursbloques', 'IP_bloquées', 'IP_bloquees', 'IPbloquées', 'IPbloquees', 'Ip_bloquées', 'Ip_bloquees', 'Ipbloquées', 'Ipbloquees' ),
	'Specialpages'              => array( 'Pages_spéciales', 'Pages_speciales', 'Pagesspéciales', 'Pagesspeciales' ),
	'Contributions'             => array( 'Contributions' ),
	'Emailuser'                 => array( 'Courriel', 'Email', 'E-mail' ),
	'Confirmemail'              => array( 'Confirmer_le_courriel', 'Confirmerlecourriel' ),
	'Whatlinkshere'             => array( 'Pages_liées', 'Pages_liees', 'Pagesliées', 'Pagesliees' ),
	'Recentchangeslinked'       => array( 'Suivi_des_liens', 'Suividesliens' ),
	'Movepage'                  => array( 'Renommer', 'Renommage' ),
	'Blockme'                   => array( 'Bloquez_moi', 'Bloquezmoi' ),
	'Booksources'               => array( 'Ouvrages_de_référence', 'Ouvrages_de_reference', 'Ouvragesderéférence', 'Ouvragesdereference', 'Recherche_ISBN', 'Recherche_isbn', 'RechercheISBN', 'Rechercheisbn' ),
	'Categories'                => array( 'Catégories' ),
	'Export'                    => array( 'Exporter', 'Exportation' ),
	'Version'                   => array( 'Version' ),
	'Allmessages'               => array( 'Messages_système', 'Messages_systeme', 'Messagessystème', 'Messagessysteme' ),
	'Log'                       => array( 'Journal', 'Journaux' ),
	'Blockip'                   => array( 'Bloquer', 'Blocage' ),
	'Undelete'                  => array( 'Restaurer', 'Restauration' ),
	'Import'                    => array( 'Import', 'Importation' ),
	'Lockdb'                    => array( 'Verrouiller_la_base', 'Verrouillerlabase', 'Verrouiller_base', 'Verrouillerbase', 'Verrouiller_BD', 'VerrouillerBD', 'Verrouiller_bd', 'Verrouillerbd' ),
	'Unlockdb'                  => array( 'Déverrouiller_la_base', 'Déverrouillerlabase', 'Deverrouiller_la_base', 'Deverrouillerlabase', 'Déverrouiller_base', 'Déverrouillerbase', 'Deverrouiller_base', 'Deverrouillerbase', 'Déverrouiller_BD', 'DéverrouillerBD', 'Deverrouiller_BD', 'DeverrouillerBD', 'Déverrouiller_bd', 'Déverrouillerbd', 'Deverrouiller_bd', 'Deverrouillerbd' ),
	'Userrights'                => array( 'Permissions', 'Droits' ),
	'MIMEsearch'                => array( 'Recherche_MIME', 'RechercheMIME', 'Recherche_mime', 'Recherchemime' ),
	'Unwatchedpages'            => array( 'Pages_non_suivies', 'Pagesnonsuivies' ),
	'Listredirects'             => array( 'Liste_des_redirections', 'Listedesredirections', 'Liste_des_redirects', 'Listedesredirects', 'Liste_redirections', 'Listeredirections', 'Liste_redirects', 'Listeredirects' ),
	'Revisiondelete'            => array( 'Versions_supprimées', 'Versions_supprimees', 'Versionsupprimées', 'Versionsupprimees' ),
	'Unusedtemplates'           => array( 'Modèles_inutilisés', 'Modèlesinutilisés', 'Modeles_inutilises', 'Modelesinutilises', 'Modèles_non_utilisés', 'Modèlesnonutilisés', 'Modeles_non_utilises', 'Modelesnonutilises' ),
	'Randomredirect'            => array( 'Redirection_au_hasard', 'Redirect_au_hasard', 'Redirectionauhasard', 'Redirectauhasard', 'Redirection_aléatoire', 'Redirect_aléatoire', 'Redirectionaléatoire', 'Redirectaléatoire', 'Redirection_aleatoire', 'Redirect_aleatoire', 'Redirectionaleatoire', 'Redirectaleatoire' ),
	'Mypage'                    => array( 'Ma_page', 'Mapage' ),
	'Mytalk'                    => array( 'Mes_discussions', 'Mesdiscussions' ),
	'Mycontributions'           => array( 'Mes_contributions', 'Mescontributions' ),
	'Listadmins'                => array( 'Liste_des_administrateurs', 'Listedesadministrateurs', 'Liste_des_admins', 'Listedesadmins', 'Liste_admins', 'Listeadmins' ),
	'Listbots'                  => array( 'Liste_des_Bots', 'ListedesBots' ),
	'Popularpages'              => array( 'Pages_les_plus_visitées', 'Pages_les_plus_visitees', 'Pageslesplusvisitées', 'Pageslesplusvisitees' ),
	'Search'                    => array( 'Recherche', 'Rechercher', 'Chercher' ),
	'Resetpass'                 => array( 'Réinitialisation_du_mot_de_passe', 'Reinitialisation_du_mot_de_passe', 'Réinitialisationdumotdepasse', 'Reinitialisationdumotdepasse' ),
	'Withoutinterwiki'          => array( 'Sans_interwiki', 'Sansinterwiki', 'Sans_interwikis', 'Sansinterwikis' ),
	'MergeHistory'              => array( 'Fusionner_l\'historique', 'Fusionnerlhistorique' ),
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$messages = array(
# User preference toggles
'tog-underline'               => 'Souligner les liens :',
'tog-highlightbroken'         => 'Afficher <a href="" class="new">en rouge</a> les liens vers les pages inexistantes (sinon :  comme ceci<a href="" class="internal">?</a>)',
'tog-justify'                 => 'Justifier les paragraphes',
'tog-hideminor'               => 'Cacher les modifications récentes mineures',
'tog-extendwatchlist'         => 'Étendre la liste de suivi pour afficher toutes les modification et non seulement les plus récentes',
'tog-usenewrc'                => 'Utiliser les modifications récentes améliorées (JavaScript)',
'tog-numberheadings'          => 'Numéroter automatiquement les titres de section',
'tog-showtoolbar'             => 'Montrer la barre de menu de modification (JavaScript doit être activé)',
'tog-editondblclick'          => 'Double-cliquer permet de modifier une page (JavaScript doit être activé)',
'tog-editsection'             => 'Activer les liens « [modifier] » pour modifier une section',
'tog-editsectiononrightclick' => 'Un clic droit sur un titre de section permet de modifier celle-ci (JavaScript doit être activé)',
'tog-showtoc'                 => 'Afficher la table des matières (pour les pages ayant plus de 3 sections)',
'tog-rememberpassword'        => 'Se souvenir de mon mot de passe sur cet ordinateur',
'tog-editwidth'               => 'Afficher la fenêtre de modification en pleine largeur',
'tog-watchcreations'          => 'Ajouter les pages que je crée à ma liste de suivi',
'tog-watchdefault'            => 'Ajouter les pages que je modifie à ma liste de suivi',
'tog-watchmoves'              => 'Ajouter les pages que je renomme à ma liste de suivi',
'tog-watchdeletion'           => 'Ajouter les pages que je supprime à ma liste de suivi',
'tog-minordefault'            => 'Marquer mes modifications comme mineures par défaut',
'tog-previewontop'            => 'Montrer la prévisualisation au-dessus de la zone de modification',
'tog-previewonfirst'          => 'Montrer la prévisualisation lors de la première modification',
'tog-nocache'                 => 'Désactiver le cache des pages',
'tog-enotifwatchlistpages'    => 'M’avertir par courriel lorsqu’une page de ma liste de suivi est modifiée',
'tog-enotifusertalkpages'     => 'M’avertir par courriel si ma page de discussion est modifiée',
'tog-enotifminoredits'        => 'M’avertir par courriel même en cas de modification mineure',
'tog-enotifrevealaddr'        => 'Afficher mon adresse électronique dans les courriels d’avertissement',
'tog-shownumberswatching'     => 'Afficher le nombre d’utilisateurs qui suivent cette page',
'tog-fancysig'                => 'Signature brute (sans lien automatique)',
'tog-externaleditor'          => 'Utiliser un éditeur de texte externe par défaut (pour les utilisateurs avancés, nécessite des réglages sur votre ordinateur)',
'tog-externaldiff'            => 'Utiliser un comparateur externe par défaut (pour les utilisateurs avancés, nécessite des réglages sur votre ordinateur)',
'tog-showjumplinks'           => 'Activer les liens « navigation » et « recherche » en haut de page',
'tog-uselivepreview'          => 'Utiliser l’aperçu rapide (JavaScript doit être activé) (expérimental)',
'tog-forceeditsummary'        => 'M’avertir lorsque je n’ai pas spécifié de résumé de modification',
'tog-watchlisthideown'        => 'Masquer mes propres modifications dans la liste de suivi',
'tog-watchlisthidebots'       => 'Masquer les modifications faites par des bots dans la liste de suivi',
'tog-watchlisthideminor'      => 'Masquer les modifications mineures dans la liste de suivi',
'tog-nolangconversion'        => 'Désactiver la conversion des variantes de langue',
'tog-ccmeonemails'            => 'M’envoyer une copie des courriels que j’envoie aux autres utilisateurs',
'tog-diffonly'                => 'Ne pas montrer le contenu des pages sous les diffs',

'underline-always'  => 'Toujours',
'underline-never'   => 'Jamais',
'underline-default' => 'Selon le navigateur',

'skinpreview' => '(Prévisualiser)',

# Dates
'sunday'        => 'dimanche',
'monday'        => 'lundi',
'tuesday'       => 'mardi',
'wednesday'     => 'mercredi',
'thursday'      => 'jeudi',
'friday'        => 'vendredi',
'saturday'      => 'samedi',
'sun'           => 'dim',
'mon'           => 'lun',
'tue'           => 'mar',
'wed'           => 'mer',
'thu'           => 'jeu',
'fri'           => 'ven',
'sat'           => 'sam',
'january'       => 'janvier',
'february'      => 'février',
'march'         => 'mars',
'april'         => 'avril',
'may_long'      => 'mai',
'june'          => 'juin',
'july'          => 'juillet',
'august'        => 'août',
'september'     => 'septembre',
'october'       => 'octobre',
'november'      => 'novembre',
'december'      => 'décembre',
'january-gen'   => 'janvier',
'february-gen'  => 'février',
'march-gen'     => 'mars',
'april-gen'     => 'avril',
'may-gen'       => 'mai',
'june-gen'      => 'juin',
'july-gen'      => 'juillet',
'august-gen'    => 'août',
'september-gen' => 'septembre',
'october-gen'   => 'octobre',
'november-gen'  => 'novembre',
'december-gen'  => 'décembre',
'jan'           => 'jan',
'feb'           => 'fév',
'mar'           => 'mar',
'apr'           => 'avr',
'may'           => 'mai',
'jun'           => 'jun',
'jul'           => 'jul',
'aug'           => 'aoû',
'sep'           => 'sep',
'oct'           => 'oct',
'nov'           => 'nov',
'dec'           => 'déc',

# Bits of text used by many pages
'categories'            => 'Catégories',
'pagecategories'        => 'Catégorie{{PLURAL:$1||s}}',
'category_header'       => 'Pages dans la catégorie « $1 »',
'subcategories'         => 'Sous-catégories',
'category-media-header' => 'Fichiers multimédias dans la catégorie « $1 »',
'category-empty'        => "''Cette catégorie ne contient aucune page, sous-catégorie ou fichier multimédia.''",

'mainpagetext'      => "<big>'''MediaWiki a été installé avec succès.'''</big>",
'mainpagedocfooter' => 'Consultez le [http://meta.wikimedia.org/wiki/Aide:Contenu Guide de l’utilisateur] pour plus d’informations sur l’utilisation de ce logiciel.

== Démarrer avec MediaWiki ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Liste des paramètres de configuration]
* [http://www.mediawiki.org/wiki/Manual:FAQ/fr FAQ sur MediaWiki]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Liste de discussion sur les distributions de MediaWiki]',

'about'          => 'À propos',
'article'        => 'Page de contenu',
'newwindow'      => '(ouvre une nouvelle fenêtre)',
'cancel'         => 'Annuler',
'qbfind'         => 'Rechercher',
'qbbrowse'       => 'Défiler',
'qbedit'         => 'Modifier',
'qbpageoptions'  => 'Page d’option',
'qbpageinfo'     => 'Page d’information',
'qbmyoptions'    => 'Mes options',
'qbspecialpages' => 'Pages spéciales',
'moredotdotdot'  => 'Et plus …',
'mypage'         => 'Ma page',
'mytalk'         => 'Page de discussion',
'anontalk'       => 'Discussion avec cette adresse IP',
'navigation'     => 'Navigation',
'and'            => 'et',

# Metadata in edit box
'metadata_help' => 'Métadonnées :',

'errorpagetitle'    => 'Erreur',
'returnto'          => 'Revenir à la page $1.',
'tagline'           => 'De {{SITENAME}}.',
'help'              => 'Aide',
'search'            => 'Rechercher',
'searchbutton'      => 'Rechercher',
'go'                => 'Consulter',
'searcharticle'     => 'Lire',
'history'           => 'Historique de la page',
'history_short'     => 'Historique',
'updatedmarker'     => 'modifié depuis ma dernière visite',
'info_short'        => 'Informations',
'printableversion'  => 'Version imprimable',
'permalink'         => 'Lien historique',
'print'             => 'Imprimer',
'edit'              => 'Modifier',
'editthispage'      => 'Modifier cette page',
'delete'            => 'Supprimer',
'deletethispage'    => 'Supprimer cette page',
'undelete_short'    => 'Restaurer {{PLURAL:$1|1 modification| $1 modifications}}',
'protect'           => 'Protéger',
'protect_change'    => 'modifier',
'protectthispage'   => 'Protéger cette page',
'unprotect'         => 'Déprotéger',
'unprotectthispage' => 'Déprotéger cette page',
'newpage'           => 'Nouvelle page',
'talkpage'          => 'Discussion sur cette page',
'talkpagelinktext'  => 'discuter',
'specialpage'       => 'Page spéciale',
'personaltools'     => 'Outils personnels',
'postcomment'       => 'Nouvelle section',
'articlepage'       => 'Voir la page de contenu',
'talk'              => 'Discussion',
'views'             => 'Affichages',
'toolbox'           => 'Boîte à outils',
'userpage'          => 'Page utilisateur',
'projectpage'       => 'Page méta',
'imagepage'         => 'Voir la page du fichier',
'mediawikipage'     => 'Voir la page du message',
'templatepage'      => 'Voir la page du modèle',
'viewhelppage'      => 'Voir la page d’aide',
'categorypage'      => 'Voir la page de catégorie',
'viewtalkpage'      => 'Page de discussion',
'otherlanguages'    => 'Autres langues',
'redirectedfrom'    => '(Redirigé depuis $1)',
'redirectpagesub'   => 'Page de redirection',
'lastmodifiedat'    => 'Dernière modification de cette page le $1 à $2.<br />', # $1 date, $2 time
'viewcount'         => 'Cette page a été consultée {{PLURAL:$1|$1 fois|$1 fois}}.',
'protectedpage'     => 'Page protégée',
'jumpto'            => 'Aller à :',
'jumptonavigation'  => 'Navigation',
'jumptosearch'      => 'rechercher',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'À propos de {{SITENAME}}',
'aboutpage'         => 'Project:À propos',
'bugreports'        => 'Rapport d’erreurs',
'bugreportspage'    => 'Project:Rapport d’erreurs',
'copyright'         => 'Contenu disponible sous $1.',
'copyrightpagename' => 'licence {{SITENAME}}',
'copyrightpage'     => '{{ns:project}}:Copyrights',
'currentevents'     => 'Actualités',
'currentevents-url' => 'Project:Actualités',
'disclaimers'       => 'Avertissements',
'disclaimerpage'    => 'Project:Avertissements généraux',
'edithelp'          => 'Aide',
'edithelppage'      => 'Help:Comment modifier une page',
'faq'               => 'FAQ',
'faqpage'           => 'Project:FAQ',
'helppage'          => 'Help:Accueil',
'mainpage'          => 'Accueil',
'policy-url'        => 'Project:Règles',
'portal'            => 'Communauté',
'portal-url'        => 'Project:Accueil',
'privacy'           => 'Politique de confidentialité',
'privacypage'       => 'Project:Confidentialité',
'sitesupport'       => 'Faire un don',
'sitesupport-url'   => 'Project:Faire un don',

'badaccess'        => 'Erreur de permission',
'badaccess-group0' => 'Vous n’avez pas les droits suffisants pour réaliser l’action que vous demandez.',
'badaccess-group1' => 'L’action que vous essayez de réaliser n’est accessible qu’aux utilisateurs du groupe $1.',
'badaccess-group2' => 'L’action que vous essayez de réaliser n’est accessible qu’aux utilisateurs des groupes $1.',
'badaccess-groups' => 'L’action que vous essayez de réaliser n’est accessible qu’aux utilisateurs {{PLURAL:$2|du groupe|des groupes}} : $1.',

'versionrequired'     => 'Version $1 de MediaWiki nécessaire',
'versionrequiredtext' => 'La version $1 de MediaWiki est nécessaire pour utiliser cette page. Consultez [[Special:Version|la page des versions]]',

'ok'                      => 'OK',
'retrievedfrom'           => 'Récupérée de « $1 »',
'youhavenewmessages'      => 'Vous avez $1 ($2).',
'newmessageslink'         => 'de nouveaux messages',
'newmessagesdifflink'     => 'dernière modification',
'youhavenewmessagesmulti' => 'Vous avez de nouveaux messages sur $1.',
'editsection'             => 'modifier',
'editold'                 => 'modifier',
'editsectionhint'         => 'Modifier la section : $1',
'toc'                     => 'Sommaire',
'showtoc'                 => 'afficher',
'hidetoc'                 => 'masquer',
'thisisdeleted'           => 'Désirez-vous afficher ou restaurer $1 ?',
'viewdeleted'             => 'Voir $1 ?',
'restorelink'             => '{{PLURAL:$1|la modification effacée|les $1 modifications effacées}}',
'feedlinks'               => 'Flux',
'feed-invalid'            => 'Type de flux invalide.',
'feed-unavailable'        => 'Les flux de syndication ne sont pas disponibles',
'site-rss-feed'           => 'Flux RSS de $1',
'site-atom-feed'          => 'Flux Atom de $1',
'page-rss-feed'           => 'Flux RSS de « $1 »',
'page-atom-feed'          => 'Flux Atom de « $1 »',
'red-link-title'          => '$1 (page inexistante)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Page',
'nstab-user'      => 'Page utilisateur',
'nstab-media'     => 'Média',
'nstab-special'   => 'Page spéciale',
'nstab-project'   => 'À propos',
'nstab-image'     => 'Fichier',
'nstab-mediawiki' => 'Message',
'nstab-template'  => 'Modèle',
'nstab-help'      => 'Aide',
'nstab-category'  => 'Catégorie',

# Main script and global functions
'nosuchaction'      => 'Action inconnue',
'nosuchactiontext'  => "L’action spécifiée dans l’URL est invalide.
Vous avez peut-être mal entré l’URL ou suivi un lien erroné.
Il peut également s'agir d’un bogue dans le logiciel utilisé par {{SITENAME}}.",
'nosuchspecialpage' => 'Page spéciale inexistante',
'nospecialpagetext' => "<big>'''Vous avez demandé une page spéciale qui n'existe pas.'''</big>

Une liste des pages spéciales valides se trouve sur [[Special:SpecialPages|{{int:specialpages}}]].",

# General errors
'error'                => 'Erreur',
'databaseerror'        => 'Erreur de la base de données',
'dberrortext'          => 'Une erreur de syntaxe de la requête dans la base de données est survenue.
Ceci peut indiquer un bogue dans le logiciel.
La dernière requête traitée par la base de données était :
<blockquote><tt>$1</tt></blockquote>
depuis la fonction « <tt>$2</tt> ».
MySQL a renvoyé l’erreur « <tt>$3 : $4</tt> ».',
'dberrortextcl'        => 'Une requête dans la base de données comporte une erreur de syntaxe.
La dernière requête émise était :
« $1 »
dans la fonction « $2 ».
MySQL a renvoyé l’erreur « $3 : $4 ».',
'noconnect'            => 'Le wiki rencontre actuellement quelques difficultés techniques, et ne peut se connecter au serveur de la base de données. <br />
$1',
'nodb'                 => 'Impossible de sélectionner la base de données $1',
'cachederror'          => "Ceci est une version en cache de la page demandée, elle n'est pas forcément à jour.",
'laggedslavemode'      => 'Attention, cette page peut ne pas contenir les toutes dernières modifications effectuées',
'readonly'             => 'Base de données verrouillée',
'enterlockreason'      => 'Indiquez la raison du verrouillage ainsi qu’une estimation de sa durée',
'readonlytext'         => 'Les ajouts et mises à jour de la base de données sont actuellement bloqués, probablement pour permettre la maintenance de la base, après quoi, tout rentrera dans l’ordre.

L’administrateur ayant verrouillé la base de données a donné l’explication suivante : $1',
'missingarticle'       => 'La base de données n’a pas pu trouver le texte d’une page qui existe pourtant, et dont le nom est « $1 ».

Cela est généralement dû à un diff désuet ou un lien vers l’historique d’une page effacée.

Si ce n’est pas le cas, vous avez peut-être trouvé un bogue du logiciel.

Veuillez rapporter cette erreur à un administrateur, en lui indiquant l’adresse de la page fautive.',
'readonly_lag'         => 'La base de données a été automatiquement verrouillée pendant que les serveurs secondaires rattrapent leur retard sur le serveur principal.',
'internalerror'        => 'Erreur interne',
'internalerror_info'   => 'Erreur interne : $1',
'filecopyerror'        => 'Impossible de copier le fichier « $1 » vers « $2 ».',
'filerenameerror'      => 'Impossible de renommer le fichier « $1 » en « $2 ».',
'filedeleteerror'      => 'Impossible de supprimer le fichier « $1 ».',
'directorycreateerror' => 'Impossible de créer le dossier « $1 ».',
'filenotfound'         => 'Impossible de trouver le fichier « $1 ».',
'fileexistserror'      => 'Impossible d’écrire dans le dossier « $1 » : le fichier existe',
'unexpected'           => 'Valeur inattendue : « $1 » = « $2 ».',
'formerror'            => 'Erreur : Impossible de soumettre le formulaire',
'badarticleerror'      => 'Cette action ne peut pas être effectuée sur cette page.',
'cannotdelete'         => 'Impossible de supprimer la page ou le fichier indiqué.
La suppression a peut-être déjà été effectuée par quelqu’un d’autre.',
'badtitle'             => 'Mauvais titre',
'badtitletext'         => 'Le titre de la page demandée est invalide, vide, ou il s’agit d’un titre inter-langue ou inter-projet mal lié. Il contient peut-être un ou plusieurs caractères qui ne peuvent pas être utilisés dans les titres.',
'perfdisabled'         => 'Désolé ! Cette fonctionnalité est temporairement désactivée car elle ralentit la base de données à tel point que plus personne ne peut utiliser le wiki.',
'perfcached'           => 'Les données suivantes sont en cache et peuvent ne pas être à jour.',
'perfcachedts'         => 'Les données suivantes sont en cache, elles ne sont donc pas obligatoirement à jour. La dernière actualisation date du $1.',
'querypage-no-updates' => 'Les mises à jour pour cette page sont actuellement désactivées. Les données ci-dessous ne sont pas mises à jour.',
'wrong_wfQuery_params' => 'Paramètres incorrects sur wfQuery()<br />
Fonction : $1<br />
Requête : $2',
'viewsource'           => 'Voir le texte source',
'viewsourcefor'        => 'pour $1',
'actionthrottled'      => 'Action limitée',
'actionthrottledtext'  => 'Pour lutter contre les pourriels, la fréquence d’exécution de cette action est limitée dans un laps de temps assez court, et vous avez dépassé cette limite.
Veuillez essayer de nouveau dans quelques minutes.',
'protectedpagetext'    => 'Cette page a été protégée pour empêcher sa modification.',
'viewsourcetext'       => 'Vous pouvez voir et copier le contenu de la page :',
'protectedinterface'   => 'Cette page fournit du texte d’interface pour le logiciel et est protégée pour éviter les abus.',
'editinginterface'     => "'''Attention :''' vous êtes en train d’éditer une page utilisée pour créer le texte de l’interface du logiciel. Les changements se répercuteront, selon le contexte, sur toutes ou certaines pages visibles par les autres utilisateurs. Pour les traductions, nous vous invitons à utiliser le projet MediaWiki d’internationalisation des messages [http://translatewiki.net/wiki/Main_Page?setlang=fr translatewiki.net].",
'sqlhidden'            => '(Requête SQL cachée)',
'cascadeprotected'     => 'Cette page est actuellement protégée car elle est incluse dans {{PLURAL:$1|la page suivante|les pages suivantes}}, ayant été protégée{{PLURAL:$1||s}} avec l’option « protection en cascade » activée :
$2',
'namespaceprotected'   => "Vous n’avez pas la permission de modifier les pages de l’espace de noms « '''$1''' ».",
'customcssjsprotected' => 'Vous n’avez pas la permission de modifier cette page, car elle contient les préférences d’un autre utilisateur.',
'ns-specialprotected'  => 'Les pages dans l’espace de noms « {{ns:special}} » ne peuvent pas être modifiées.',
'titleprotected'       => "Ce titre a été protégé à la création par [[User:$1|$1]].
Le motif avancé est « ''$2'' ».",

# Login and logout pages
'logouttitle'                => 'Déconnexion',
'logouttext'                 => "'''Vous êtes à présent déconnecté(e).'''<br />
Vous pouvez continuer à utiliser {{SITENAME}} de façon anonyme, [[Special:UserLogin|vous reconnecter]] sous le même nom ou un autre.
Notez que certaines pages peuvent être encore affichées comme si vous étiez toujours connecté, jusqu'à ce que vous effaciez le cache de votre navigateur.",
'welcomecreation'            => '== Bienvenue, $1 ! ==

Votre compte a été créé.
N’oubliez pas de personnaliser vos [[Special:Preferences|préférences sur {{SITENAME}}]].',
'loginpagetitle'             => 'Connexion',
'yourname'                   => 'Nom d’utilisateur :',
'yourpassword'               => 'Mot de passe :',
'yourpasswordagain'          => 'Entrez de nouveau votre mot de passe :',
'remembermypassword'         => 'Me reconnecter automatiquement à la prochaine visite (cookie)',
'yourdomainname'             => 'Votre domaine',
'externaldberror'            => 'Soit une erreur s’est produite avec la base de données d’authentification externe, soit vous n’êtes pas autorisé à mettre à jour votre compte externe.',
'loginproblem'               => '<b>Problème d’identification.</b><br />Essayez à nouveau !',
'login'                      => 'Connexion',
'loginprompt'                => "Vous devez activer les témoins (''cookies'') pour vous connecter à {{SITENAME}}.",
'userlogin'                  => 'Créer un compte ou se connecter',
'logout'                     => 'Se déconnecter',
'userlogout'                 => 'Déconnexion',
'notloggedin'                => 'Non connecté',
'nologin'                    => "Vous n'êtes pas encore inscrit ? $1.",
'nologinlink'                => 'Créer un compte',
'createaccount'              => 'Créer un compte',
'gotaccount'                 => 'Vous avez déjà un compte ? $1.',
'gotaccountlink'             => 'Connectez-vous',
'createaccountmail'          => 'par courriel',
'badretype'                  => 'Les mots de passe que vous avez saisis ne correspondent pas.',
'userexists'                 => 'Le nom d’utilisateur que vous avez saisi est déjà utilisé.
Veuillez en choisir un autre.',
'youremail'                  => 'Adresse de courriel :',
'username'                   => "Nom d'utilisateur :",
'uid'                        => "Numéro d'utilisateur :",
'yourrealname'               => 'Nom réel',
'yourlanguage'               => 'Langue de l’interface :',
'yourvariant'                => 'Variante :',
'yournick'                   => 'Signature pour les discussions :',
'badsig'                     => 'Signature brute incorrecte.
Vérifiez vos balises HTML.',
'badsiglength'               => 'Votre signature est trop longue : la taille maximale est de $1 caractères.',
'email'                      => 'Courriel',
'prefs-help-realname'        => 'Facultatif : si vous le spécifiez, il sera utilisé pour vous attribuer vos contributions.',
'loginerror'                 => 'Erreur de connexion',
'prefs-help-email'           => 'Facultatif : indiquer votre adresse de courriel permet de vous envoyer un nouveau mot de passe si vous oubliez le vôtre.
Vous pouvez également décider de laisser les autres vous contacter via votre page de discussion, sans avoir besoin de révéler votre identité.',
'prefs-help-email-required'  => 'Une adresse de courriel est requise.',
'nocookiesnew'               => "Le compte utilisateur a été créé, mais vous n’êtes pas connecté. {{SITENAME}} utilise des témoins (''cookies'') pour la connexion mais vous les avez désactivés. Veuillez les activer et vous reconnecter avec le même nom et le même mot de passe.",
'nocookieslogin'             => "{{SITENAME}} utilise des témoins (''cookies'') pour la connexion mais vous les avez désactivés. Veuillez les activer et vous reconnecter.",
'noname'                     => 'Vous n’avez pas saisi un nom d’utilisateur valide.',
'loginsuccesstitle'          => 'Connexion réussie',
'loginsuccess'               => 'Vous êtes maintenant connecté(e) à {{SITENAME}} en tant que « $1 ».',
'nosuchuser'                 => "L’utilisateur « $1 » n’existe pas.
Les noms d'utilisateurs sont sensibles à la casse.
Vérifiez l'orthographe, ou [[Special:UserLogin/signup|créez un nouveau compte]].",
'nosuchusershort'            => 'Il n’y a pas de contributeur avec le nom « <nowiki>$1</nowiki> ». Veuillez vérifier l’orthographe.',
'nouserspecified'            => 'Vous devez saisir un nom d’utilisateur.',
'wrongpassword'              => 'Le mot de passe est incorrect. Veuillez essayer à nouveau.',
'wrongpasswordempty'         => 'Vous n’avez pas entré de mot de passe. Veuillez essayer à nouveau.',
'passwordtooshort'           => 'Votre mot de passe est trop court. Il doit contenir au moins $1 caractères et être différent de votre nom d’utilisateur.',
'mailmypassword'             => 'Recevoir un nouveau mot de passe par courriel',
'passwordremindertitle'      => 'Nouveau mot de passe temporaire sur {{SITENAME}}',
'passwordremindertext'       => 'Quelqu’un (probablement vous, ayant l’adresse IP $1) a demandé un nouveau mot de
passe pour {{SITENAME}} ($4). Un mot de passe temporaire a été créé pour
l’utilisateur « $2 » et est « $3 ». Si cela était votre intention, vous devrez
vous connecter et choisir un nouveau mot de passe.

Si vous n’êtes pas l’auteur de cette demande, ou si vous vous souvenez à présent
de votre ancien mot de passe et que vous ne souhaitez plus en changer, vous
pouvez ignorer ce message et continuer à utiliser votre ancien mot de passe.',
'noemail'                    => 'Aucune adresse de courriel n’a été enregistrée pour l’utilisateur « $1 ».',
'passwordsent'               => 'Un nouveau mot de passe a été envoyé à l’adresse de courriel de l’utilisateur « $1 ». Veuillez vous reconnecter après l’avoir reçu.',
'blocked-mailpassword'       => 'Votre adresse IP est bloquée en écriture, la fonction de rappel du mot de passe est donc désactivée pour éviter les abus.',
'eauthentsent'               => 'Un courriel de confirmation a été envoyé à l’adresse indiquée.
Avant qu’un autre courriel ne soit envoyé à ce compte, vous devrez suivre les instructions du courriel et confirmer que le compte est bien le vôtre.',
'throttled-mailpassword'     => 'Un courriel de rappel de votre mot de passe a déjà été envoyé durant les $1 dernières heures. Afin d’éviter les abus, un seul courriel de rappel sera envoyé en $1 heures.',
'mailerror'                  => "Erreur lors de l'envoi du courriel : $1",
'acct_creation_throttle_hit' => 'Vous avez déjà créé {{PLURAL:$1|$1 compte|$1 comptes}}.
Vous ne pouvez plus en créer de nouveaux.',
'emailauthenticated'         => 'Votre adresse de courriel a été authentifiée le $2 à $3.',
'emailnotauthenticated'      => 'Votre adresse de courriel n’est <strong>pas encore authentifiée</strong>. Aucun courriel ne sera envoyé pour chacune des fonctions suivantes.',
'noemailprefs'               => 'Indiquez une adresse de courriel dans vos préférences pour utiliser ces fonctions.',
'emailconfirmlink'           => 'Confirmez votre adresse de courriel',
'invalidemailaddress'        => 'Cette adresse courriel ne peut pas être acceptée car elle semble avoir un format incorrect.
Entrez une adresse bien formatée ou laissez ce champ vide.',
'accountcreated'             => 'Compte créé',
'accountcreatedtext'         => 'Le compte utilisateur pour $1 a été créé.',
'createaccount-title'        => 'Création d’un compte pour {{SITENAME}}',
'createaccount-text'         => "Quelqu'un a créé un compte pour votre adresse de courriel sur {{SITENAME}} ($4) intitulé « $2 », avec le mot de passe « $3 ».
Vous devriez ouvrir une session et modifier dès à présent votre mot de passe.

Ignorez ce message si ce compte a été créé par erreur.",
'loginlanguagelabel'         => 'Langue : $1',

# Password reset dialog
'resetpass'               => 'Remise à zéro du mot de passe',
'resetpass_announce'      => 'Vous vous êtes enregistré avec un mot de passe temporaire envoyé par courriel. Pour terminer l’enregistrement, vous devez entrer un nouveau mot de passe ici :',
'resetpass_text'          => '<!-- Ajoutez le texte ici -->',
'resetpass_header'        => 'Changer le mot de passe du compte',
'resetpass_submit'        => 'Changer le mot de passe et se connecter',
'resetpass_success'       => 'Votre mot de passe a été changé avec succès ! Connexion en cours...',
'resetpass_bad_temporary' => 'Mot de passe temporaire invalide. Vous avez peut-être déjà changé votre mot de passe, ou demandé un nouveau mot de passe temporaire.',
'resetpass_forbidden'     => 'Les mots de passe ne peuvent pas être changés',
'resetpass_missing'       => 'Aucune donnée entrée',

# Edit page toolbar
'bold_sample'     => 'Texte gras',
'bold_tip'        => 'Texte gras',
'italic_sample'   => 'Texte italique',
'italic_tip'      => 'Texte italique',
'link_sample'     => 'Titre du lien',
'link_tip'        => 'Lien interne',
'extlink_sample'  => 'http://www.example.com titre du lien',
'extlink_tip'     => 'Lien externe (n’oubliez pas le préfixe http://)',
'headline_sample' => 'Texte de sous-titre',
'headline_tip'    => 'Sous-titre niveau 2',
'math_sample'     => 'Entrez votre formule ici',
'math_tip'        => 'Formule mathématique (LaTeX)',
'nowiki_sample'   => 'Entrez le texte non formaté ici',
'nowiki_tip'      => 'Ignorer la syntaxe wiki',
'image_sample'    => 'Exemple.jpg',
'image_tip'       => 'Fichier inséré',
'media_sample'    => 'Exemple.ogg',
'media_tip'       => 'Lien vers un fichier média',
'sig_tip'         => 'Votre signature avec la date',
'hr_tip'          => 'Ligne horizontale (ne pas en abuser)',

# Edit pages
'summary'                   => 'Résumé',
'subject'                   => 'Sujet/titre',
'minoredit'                 => 'Modification mineure',
'watchthis'                 => 'Suivre cette page',
'savearticle'               => 'Publier',
'preview'                   => 'Prévisualisation',
'showpreview'               => 'Prévisualiser',
'showlivepreview'           => 'Aperçu rapide',
'showdiff'                  => 'Modifications en cours',
'anoneditwarning'           => "'''Attention :''' vous n’êtes pas identifié. Votre adresse IP sera enregistrée dans l’historique de cette page.",
'missingsummary'            => "'''Rappel :''' vous n’avez pas encore fourni le résumé de votre modification.
Si vous cliquez de nouveau sur le bouton « Publier », la publication sera faite sans nouvel avertissement.",
'missingcommenttext'        => 'Veuillez entrer un commentaire ci-dessous.',
'missingcommentheader'      => "'''Rappel :''' vous n’avez pas fourni de sujet ou de titre à ce commentaire.
Si vous cliquez de nouveau sur « Publier », votre modification sera enregistrée sans titre.",
'summary-preview'           => 'Prévisualiser le résumé',
'subject-preview'           => 'Prévisualisation du sujet/titre',
'blockedtitle'              => 'L’utilisateur est bloqué.',
'blockedtext'               => "<big>'''Votre compte utilisateur ou votre adresse IP a été bloqué.'''</big>

Le blocage a été effectué par $1.
La raison invoquée est la suivante : ''$2''.

* Début du blocage : $8
* Expiration du blocage : $6
* Compte bloqué : $7.

Vous pouvez contacter $1 ou un autre [[{{MediaWiki:Grouppage-sysop}}|administrateur]] pour en discuter.
Vous ne pouvez utiliser la fonction « Envoyer un courriel à cet utilisateur » que si une adresse de courriel valide est spécifiée dans vos [[Special:Preferences|préférences]] et que cette fonctionnalité n'a pas été bloquée.
Votre adresse IP actuelle est $3 et votre identifiant de blocage est $5.
Veuillez préciser ces indications dans toutes les requêtes que vous ferez.",
'autoblockedtext'           => "Votre adresse IP a été bloquée automatiquement car elle a été utilisée par un autre utilisateur, lui-même bloqué par $1.
La raison invoquée est :

:''$2''

* Début du blocage : $8
* Expiration du blocage : $6
* Compte bloqué : $7

Vous pouvez contacter $1 ou l’un des autres [[{{MediaWiki:Grouppage-sysop}}|administrateurs]] pour discuter de ce blocage.

Notez que vous ne pourrez utiliser la fonctionnalité d'envoi de courriel que si vous avez une adresse de courriel validée dans vos [[Special:Preferences|préférences utilisateur]] et que la fonctionnalité n'a pas été désactivée.

Votre adresse IP actuelle est $3, et le numéro de blocage est $5.
Veuillez préciser ces indications dans toutes les requêtes que vous ferez.",
'blockednoreason'           => 'aucune raison donnée',
'blockedoriginalsource'     => "Le code source de  '''$1''' est indiqué ci-dessous :",
'blockededitsource'         => "Le contenu de '''vos modifications''' apportées à '''$1''' est indiqué ci-dessous :",
'whitelistedittitle'        => 'Connexion nécessaire pour modifier le contenu',
'whitelistedittext'         => 'Vous devez être $1 pour avoir la permission de modifier le contenu.',
'whitelistreadtitle'        => 'Connexion nécessaire pour lire le contenu',
'whitelistreadtext'         => 'Vous devez être [[Special:Userlogin|connecté]] pour lire le contenu.',
'whitelistacctitle'         => 'Vous n’êtes pas autorisé à créer un compte.',
'whitelistacctext'          => 'Pour pouvoir créer un compte sur ce Wiki, vous devez être [[Special:Userlogin|connecté]] et avoir les permissions appropriées.',
'confirmedittitle'          => 'Validation de l’adresse de courriel nécessaire pour modifier le contenu',
'confirmedittext'           => 'Vous devez confirmer votre adresse de courriel avant de modifier les pages.
Veuillez entrer et valider votre adresse de courriel dans vos [[Special:Preferences|préférences utilisateur]].',
'nosuchsectiontitle'        => 'Section manquante',
'nosuchsectiontext'         => 'Vous avez essayé de modifier une section qui n’existe pas.
Puisqu’il n’y a pas de section $1, il n’y a pas d’endroit où publier vos modifications.',
'loginreqtitle'             => 'Connexion nécessaire',
'loginreqlink'              => 'connecter',
'loginreqpagetext'          => 'Vous devez vous $1 pour voir les autres pages.',
'accmailtitle'              => 'Mot de passe envoyé.',
'accmailtext'               => 'Le mot de passe de « $1 » a été envoyé à l’adresse $2.',
'newarticle'                => '(Nouveau)',
'newarticletext'            => "Vous avez suivi un lien vers une page qui n’existe pas encore ou qui a été [{{fullurl:Special:Log|type=delete&page={{FULLPAGENAMEE}}}} effacée].
Pour créer cette page, entrez votre texte dans la boîte ci-dessous (vous pouvez consulter [[{{MediaWiki:Helppage}}|la page d’aide]] pour plus d’informations).
Si vous êtes arrivé ici par erreur, cliquez sur le bouton '''retour''' de votre navigateur.",
'anontalkpagetext'          => "---- ''Vous êtes sur la page de discussion d’un utilisateur anonyme qui n’a pas encore créé de compte ou qui n’en utilise pas. Pour cette raison, nous devons utiliser son adresse IP pour l’identifier. Une adresse IP peut être partagée par plusieurs utilisateurs. Si vous êtes un utilisateur anonyme et si vous constatez que des commentaires qui ne vous concernent pas vous ont été adressés, vous pouvez [[Special:UserLogin/signup|créer un compte]] ou [[Special:UserLogin|vous connecter]] afin d’éviter toute confusion future avec d’autres contributeurs anonymes.''",
'noarticletext'             => 'Il n’y a pour l’instant aucun texte sur cette page ; vous pouvez [[Special:Search/{{PAGENAME}}|lancer une recherche de ce titre de page]] dans les autres pages, <span class="plainlinks">[{{fullurl:Special:Log|page={{urlencode:{{FULLPAGENAME}}}}}} rechercher dans les opérations liées] ou [{{fullurl:{{urlencode:{{FULLPAGENAME}}}}|action=edit}} créer cette page]</span>.',
'userpage-userdoesnotexist' => 'Le compte utilisateur « $1 » n’est pas enregistré. Veuillez vérifier que vous voulez créer cette page.',
'clearyourcache'            => "'''Note :''' après avoir enregistré vos préférences, vous devrez forcer le rechargement complet du cache de votre navigateur pour voir les changements.
'''Mozilla / Firefox / Konqueror / Safari :''' maintenez la touche ''Majuscule'' (''Shift'') en cliquant sur le bouton ''Actualiser'' (''Reload'') ou pressez ''Maj-Ctrl-R'' (''Maj-Cmd-R'' sur Apple Mac) ;
'''Internet Explorer / Opera :''' maintenez la touche ''Ctrl'' en cliquant sur le bouton ''Actualiser'' ou pressez ''Ctrl-F5''.",
'usercssjsyoucanpreview'    => "'''Astuce :''' utilisez le bouton « Prévisualisation » pour tester votre nouvelle feuille CSS/JS avant de l’enregistrer.",
'usercsspreview'            => "'''Rappelez-vous que vous n’êtes qu’en train de prévisualiser votre propre feuille CSS.'''
'''Elle n’a pas encore été enregistrée !'''",
'userjspreview'             => "'''Rappelez-vous que vous êtes en train de visualiser ou de tester votre code JavaScript et qu’il n’a pas encore été enregistré !'''",
'userinvalidcssjstitle'     => "'''Attention :''' il n’existe pas d'habillage « $1 ». Rappelez-vous que les pages personnelles avec extensions .css et .js utilisent des titres en minuscules, par exemple {{ns:user}}:Foo/monobook.css et non {{ns:user}}:Foo/Monobook.css.",
'updated'                   => '(Mis à jour)',
'note'                      => "'''Note :'''",
'previewnote'               => "'''Attention, ce texte n’est qu’une prévisualisation et n’a pas encore été publié !'''",
'previewconflict'           => 'Cette prévisualisation montre le texte de la boîte supérieure de modification tel qu’il apparaîtra si vous choisissez de le publier.',
'session_fail_preview'      => "'''Nous ne pouvons enregistrer votre modification à cause d’une perte d’informations concernant votre session.'''
Veuillez réessayer.
Si cela échoue de nouveau, essayez en vous [[Special:UserLogout|déconnectant]], puis en vous reconnectant.",
'session_fail_preview_html' => "'''Nous ne pouvons enregistrer votre modification à cause d’une perte d’informations concernant votre session.'''

''Parce que {{SITENAME}} a activé le HTML brut, la prévisualisation a été masquée afin de prévenir les attaques par JavaScript.''

'''Si la tentative de modification était légitime, veuillez réessayer.'''
Si cela échoue de nouveau, [[Special:UserLogout|déconnectez-vous]], puis reconnectez-vous.",
'token_suffix_mismatch'     => "'''Votre modification n’a pas été acceptée car votre navigateur web a mélangé les caractères de ponctuation dans l’identifiant de modification.'''
La modification a été rejetée afin d’empêcher la corruption du texte de la page.
Ce problème se produit lorsque vous utilisez un serveur mandataire anonyme problématique.",
'editing'                   => 'Modification de $1',
'editinguser'               => "Modification des droits de l’utilisateur '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]] |
[[Special:Contributions/$1|{{int:contribslink}}]])",
'editingsection'            => 'Modification de $1 (section)',
'editingcomment'            => 'Modification de $1 (nouvelle section)',
'editconflict'              => 'Conflit de modification : $1',
'explainconflict'           => "Cette page a été sauvegardée après que vous avez commencé à la modifier.
La zone de modification supérieure contient le texte tel qu’il est enregistré actuellement dans la base de données.
Vos modifications apparaissent dans la zone de modification inférieure.
Vous allez devoir fusionner vos modifications dans le texte existant.
'''Seul''' le texte de la zone supérieure sera sauvegardé quand vous cliquerez sur « Publier ».",
'yourtext'                  => 'Votre texte',
'storedversion'             => 'La version enregistrée',
'nonunicodebrowser'         => "'''Attention : Votre navigateur ne supporte pas l’Unicode.'''
Une solution de rechange a été trouvée pour vous permettre de modifier en toute sûreté une page : les caractères non-ASCII apparaîtront dans votre boîte de modification en tant que codes hexadécimaux. Vous devriez utiliser un navigateur plus récent.",
'editingold'                => "'''Attention : vous êtes en train de modifier une ancienne version de cette page.
Si vous la publiez, toutes les modifications effectuées depuis cette version seront perdues.'''",
'yourdiff'                  => 'Différences',
'copyrightwarning'          => "Toutes les contributions à {{SITENAME}} sont considérées comme publiées sous les termes de la $2 (voir $1 pour plus de détails). Si vous ne désirez pas que vos écrits soient modifiés et distribués à volonté, merci de ne pas les soumettre ici.<br />
Vous nous promettez aussi que vous avez écrit ceci vous-même, ou que vous l’avez copié d’une source provenant du domaine public, ou d’une ressource libre. '''N’UTILISEZ PAS DE TRAVAUX SOUS DROIT D’AUTEUR SANS AUTORISATION EXPRESSE !'''",
'copyrightwarning2'         => "Toutes les contributions à {{SITENAME}} peuvent être modifiées ou supprimées par d’autres utilisateurs. Si vous ne désirez pas que vos écrits soient modifiés et distribués à volonté, merci de ne pas les soumettre ici.<br />
Vous nous promettez aussi que vous avez écrit ceci vous-même, ou que vous l’avez copié d’une source provenant du domaine public, ou d’une ressource libre. (voir $1 pour plus de détails).
'''N’UTILISEZ PAS DE TRAVAUX SOUS DROIT D’AUTEUR SANS AUTORISATION EXPRESSE !'''",
'longpagewarning'           => "'''AVERTISSEMENT : cette page a une longueur de $1 Kio ;
certains navigateurs Web gèrent mal la modification des pages approchant ou dépassant 32 Kio. Peut-être devriez-vous diviser la page en sections plus petites.'''",
'longpageerror'             => "'''ERREUR : Le texte que vous avez soumis fait $1 Kio, ce qui dépasse la limite fixée à $2 Kio. Le texte ne peut pas être sauvegardé.'''",
'readonlywarning'           => "'''AVERTISSEMENT : La base de données a été verrouillée pour maintenance, vous ne pourrez donc pas publier vos modifications maintenant.
Vous pouvez copier le texte dans un fichier texte et le publier pour plus tard.'''

L’administrateur ayant verrouillé la base de données a donné l’explication suivante : $1",
'protectedpagewarning'      => "'''AVERTISSEMENT : cette page est protégée.
Seuls les utilisateurs ayant le statut d’administrateur peuvent la modifier.'''",
'semiprotectedpagewarning'  => "'''Note :''' Cette page a été protégée de telle façon que seuls les contributeurs enregistrés puissent la modifier.",
'cascadeprotectedwarning'   => "'''ATTENTION :''' Cette page a été protégée de manière à ce que seuls les administrateurs puissent l’éditer. Cette protection a été faite car cette page est incluse dans {{PLURAL:$1|une page protégée|des pages protégées}} avec la « protection en cascade » activée.",
'titleprotectedwarning'     => "'''ATTENTION : Cette page a été protégée de telle manière que seuls certains utilisateurs puissent la créer.'''",
'templatesused'             => 'Modèles utilisés sur cette page :',
'templatesusedpreview'      => 'Modèles utilisés dans cette prévisualisation :',
'templatesusedsection'      => 'Modèles utilisés dans cette section :',
'template-protected'        => '(protégé)',
'template-semiprotected'    => '(semi-protégé)',
'edittools'                 => '<!-- Tout texte entré ici sera affiché sous les boîtes de modification ou les formulaires de téléversement de fichier. -->',
'nocreatetitle'             => 'Création de page limitée',
'nocreatetext'              => '{{SITENAME}} a restreint la possibilité de créer de nouvelles pages.
Vous pouvez revenir en arrière et modifier une page existante, ou bien [[Special:UserLogin|vous connecter ou créer un compte]].',
'nocreate-loggedin'         => 'Vous n’avez pas la permission de créer de nouvelles pages.',
'permissionserrors'         => 'Erreur de permissions',
'permissionserrorstext'     => 'Vous n’avez pas la permission d’effectuer l’opération demandée pour {{PLURAL:$1|la raison suivante|les raisons suivantes}} :',
'recreate-deleted-warn'     => "'''Attention : vous êtes en train de recréer une page qui a été précédemment supprimée.'''

Demandez-vous s’il est réellement approprié de la recréer en vous référant à l’historique des suppressions affiché ci-dessous :",

# "Undo" feature
'undo-success' => "Cette modification va être défaite. Veuillez vérifier les modifications ci-dessous, puis publier si c'est bien ce que vous voulez faire.",
'undo-failure' => 'Cette modification ne peut pas être défaite : cela entrerait en conflit avec les modifications intermédiaires.',
'undo-summary' => 'Annulation des modifications $1 par [[Special:Contributions/$2|$2]] ([[User talk:$2|Discuter]])',

# Account creation failure
'cantcreateaccounttitle' => 'Vous ne pouvez pas créer de compte.',
'cantcreateaccount-text' => "La création de compte depuis cette adresse IP (<b>$1</b>) a été bloquée par [[User:$3|$3]].

La raison donnée par $3 était ''$2''.",

# History pages
'viewpagelogs'        => 'Voir les opérations sur cette page',
'nohistory'           => 'Il n’existe pas d’historique pour cette page.',
'revnotfound'         => 'Version introuvable',
'revnotfoundtext'     => 'La version précédente de cette page n’a pas pu être retrouvée. Veuillez vérifier l’URL que vous avez utilisée pour accéder à cette page.',
'loadhist'            => 'Chargement de l’historique de la page',
'currentrev'          => 'Version actuelle',
'revisionasof'        => 'Version du $1',
'revision-info'       => 'Version du $1 par $2',
'previousrevision'    => '← Version précédente',
'nextrevision'        => 'Version suivante →',
'currentrevisionlink' => 'Voir la version courante',
'cur'                 => 'actu',
'next'                => 'suivant',
'last'                => 'diff',
'orig'                => 'orig',
'page_first'          => 'première',
'page_last'           => 'dernier',
'histlegend'          => 'Légende : ({{MediaWiki:Cur}}) = différence avec la version actuelle, ({{MediaWiki:Last}}) = différence avec la version précédente, <b>m</b> = modification mineure',
'deletedrev'          => '[supprimé]',
'histfirst'           => 'toute première',
'histlast'            => 'toute dernière',
'historysize'         => '({{PLURAL:$1|$1 octet|$1 octets}})',
'historyempty'        => '(vide)',

# Revision feed
'history-feed-title'          => 'Historique des versions',
'history-feed-description'    => 'Historique pour cette page sur le wiki',
'history-feed-item-nocomment' => '$1 le $2', # user at time
'history-feed-empty'          => 'La page demandée n’existe pas.
Elle a peut-être été effacée ou renommée.
Essayez de [[Special:Search|rechercher sur le wiki]] pour trouver des pages en rapport.',

# Revision deletion
'rev-deleted-comment'         => '(commentaire supprimé)',
'rev-deleted-user'            => '(nom d’utilisateur supprimé)',
'rev-deleted-event'           => '(entrée supprimée)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks"> Cette version de la page a été retirée des archives publiques. Il peut y avoir des détails dans l’[{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} historique des suppressions].</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks"> Cette version de la page a été retirée des archives publiques. En tant qu’administrateur de ce site, vous pouvez la visualiser ; il peut y avoir des détails dans l’[{{fullurl:Special:Log/delete|page={{PAGENAMEE}}}} historique des suppressions].</div>',
'rev-delundel'                => 'afficher/masquer',
'revisiondelete'              => 'Supprimer ou restaurer des événements',
'revdelete-nooldid-title'     => 'Version cible non valide',
'revdelete-nooldid-text'      => 'Vous n’avez pas précisé la ou les révision(s) cible(s) pour utiliser cette fonction.',
'revdelete-selected'          => "'''{{PLURAL:$2|Version sélectionnée|Versions sélectionnées}} de '''[[:$1]]''' :'''",
'logdelete-selected'          => "{{PLURAL:$2|Événement d’historique sélectionné|Événements d’historiques sélectionnés}} pour '''$1''' :",
'revdelete-text'              => "'''Les versions et événements supprimés seront encore présents dans l’historique de la page et dans les journaux, mais leur contenu textuel sera inaccessible au public.'''

Les autres administrateurs de {{SITENAME}} pourront toujours accéder au contenu caché et le restaurer à travers cette même interface, à moins que des restrictions supplémentaires ne soit mises en place.
Confirmez que ceci est bien ce que vous avez l'intention de faire, que vous en comprenez les conséquences, et que vous faîtes ceci en respect des [[{{MediaWiki:Policy-url}}|règles établies]].",
'revdelete-legend'            => 'Mettre en place des restrictions de visibilité :',
'revdelete-hide-text'         => 'Masquer le texte de la version',
'revdelete-hide-name'         => 'Masquer l’action et la cible',
'revdelete-hide-comment'      => 'Masquer le commentaire de modification',
'revdelete-hide-user'         => 'Masquer le pseudo ou l’adresse IP du contributeur.',
'revdelete-hide-restricted'   => 'Appliquer ces restrictions aux administrateurs ainsi qu’aux autres utilisateurs',
'revdelete-suppress'          => 'Cacher les données également pour les administrateurs',
'revdelete-hide-image'        => 'Masquer le contenu du fichier',
'revdelete-unsuppress'        => 'Enlever les restrictions sur les versions restaurées',
'revdelete-log'               => 'Commentaire pour le journal :',
'revdelete-submit'            => 'Appliquer à la version sélectionnée',
'revdelete-logentry'          => 'a modifié la visibilité de la version de [[$1]]',
'logdelete-logentry'          => 'a modifié la visibilité de l’événement de [[$1]]',
'revdelete-logaction'         => '$1 {{plural:$1|version changée|versions changées}} en mode $2',
'logdelete-logaction'         => '$1 {{plural:$1|événement de [[$3]] changé|événements de [[$3]] changés}} en mode $2',
'revdelete-success'           => "'''Visibilité des versions changée avec succès.'''",
'logdelete-success'           => "'''Visibilité du journal paramétrée avec succès.'''",

# Oversight log
'oversightlog'    => 'Historique de supervision',
'overlogpagetext' => 'la liste ci-dessous montre les suppressions et blocages récents dont le contenu est masqué même pour les administrateurs.
Consulter la [[Special:Ipblocklist|liste des comptes bloqués]] pour la liste des blocages en cours.',

# History merging
'mergehistory'                     => 'Fusionner les historiques des pages',
'mergehistory-header'              => "Cette page vous permet de fusionner les révisions de l'historique d'une page d'origine vers une nouvelle.
Assurez vous que ce changement puisse conserver la continuité de l'historique.

'''Enfin, la version en cours doit être conservée.'''",
'mergehistory-box'                 => 'Fusionner les versions de deux pages :',
'mergehistory-from'                => 'Page d’origine :',
'mergehistory-into'                => 'Page de destination :',
'mergehistory-list'                => 'Historique des modifications fusionnable',
'mergehistory-merge'               => 'Les versions suivantes de [[:$1]] peuvent être fusionnées avec [[:$2]]. Utilisez la colonne de boutons radio pour fusionner uniquement les versions créées du début jusqu’à la date indiquée. Notez bien que l’utilisation des liens de navigation réinitialisera cette colonne.',
'mergehistory-go'                  => 'Voir les modifications qui peuvent être fusionnées',
'mergehistory-submit'              => 'Fusionner les versions',
'mergehistory-empty'               => 'Aucune version ne peut être fusionnée.',
'mergehistory-success'             => '$3 {{PLURAL:$3|version|versions}} de [[:$1]] {{PLURAL:$3|fusionnée|fusionnées}} dans [[:$2]].',
'mergehistory-fail'                => 'Impossible de procéder à la fusion des historiques. Resélectionner la page ainsi que les paramètres de date.',
'mergehistory-no-source'           => 'La page d’origine $1 n’existe pas.',
'mergehistory-no-destination'      => 'La page de destination $1 n’existe pas.',
'mergehistory-invalid-source'      => 'La page d’origine doit avoir un titre valide.',
'mergehistory-invalid-destination' => 'La page de destination doit avoir un titre valide.',

# Merge log
'mergelog'           => 'Journal des fusions',
'pagemerge-logentry' => "[[$1]] fusionnée avec [[$2]] (versions jusqu'au $3)",
'revertmerge'        => 'Séparer',
'mergelogpagetext'   => 'Voici la liste des fusions de l’historique d’une page dans celui d’une autre les plus récentes.',

# Diffs
'history-title'           => 'Historique des versions de « $1 »',
'difference'              => '(Différences entre les versions)',
'lineno'                  => 'Ligne $1 :',
'compareselectedversions' => 'Comparer les versions sélectionnées',
'editundo'                => 'défaire',
'diff-multi'              => '({{PLURAL:$1|Une version intermédiaire masquée|$1 versions intermédiaires masquées}})',

# Search results
'searchresults'         => 'Résultats de la recherche',
'searchresulttext'      => 'Pour plus d’informations sur la recherche dans {{SITENAME}}, voir [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'        => "Vous avez recherché « '''[[:$1]]''' » ([[Special:Prefixindex/$1|toutes les pages commençant par « $1 »]] | [[Special:WhatLinksHere/$1|toutes les pages qui ont un lien vers « $1 »]])",
'searchsubtitleinvalid' => "Vous avez recherché « '''$1''' »",
'noexactmatch'          => "'''Aucune page intitulée « $1 » n’existe.''' Vous pouvez [[:$1|créer cette page]].",
'noexactmatch-nocreate' => "'''Il n’existe aucune page intitulée « $1 ».'''",
'toomanymatches'        => 'Un trop grand nombre d’occurrences a été renvoyé, veuillez soumettre une requête différente.',
'titlematches'          => 'Correspondances dans les titres des pages',
'notitlematches'        => 'Aucun titre de page ne correspond à la recherche.',
'textmatches'           => 'Correspondances dans le texte des pages',
'notextmatches'         => 'Aucun texte de page ne correspond à la recherche.',
'prevn'                 => '$1 précédentes',
'nextn'                 => '$1 suivantes',
'viewprevnext'          => 'Voir ($1) ($2) ($3).',
'showingresults'        => 'Affichage de <b>$1</b> {{PLURAL:$1|résultat|résultats}} à partir du #<b>$2</b>.',
'showingresultsnum'     => 'Affichage de <b>$3</b> {{PLURAL:$3|résultat|résultats}} à partir du #<b>$2</b>.',
'nonefound'             => "'''Note''' : seuls certains espaces de noms sont recherchés par défaut.
Essayez en utilisant le préfixe ''all:'' pour rechercher dans tout le contenu (y compris les pages de discussion, les modèles, etc.) ou bien utilisez l’espace de noms souhaité comme préfixe.",
'powersearch'           => 'Rechercher',
'powersearchtext'       => 'Rechercher dans les espaces de noms :<br />
$1<br />
$2 Inclure les pages de redirection<br /> Rechercher $3 $9',
'searchdisabled'        => 'La recherche sur {{SITENAME}} est désactivée. En attendant la réactivation, vous pouvez effectuer une recherche via Google. Attention, leur indexation du contenu de {{SITENAME}} peut ne pas être à jour.',

# Preferences page
'preferences'              => 'Préférences',
'mypreferences'            => 'Préférences',
'prefs-edits'              => 'Nombre de modifications :',
'prefsnologin'             => 'Non connecté',
'prefsnologintext'         => 'Vous devez être <span class="plainlinks">[{{fullurl:Special:UserLogin|returnto=$1}} connecté]</span> pour modifier vos préférences d’utilisateur.',
'prefsreset'               => 'Les préférences ont été rétablies à partir de la version enregistrée.',
'qbsettings'               => 'Barre d’outils',
'qbsettings-none'          => 'Aucune',
'qbsettings-fixedleft'     => 'Gauche',
'qbsettings-fixedright'    => 'Droite',
'qbsettings-floatingleft'  => 'Flottante à gauche',
'qbsettings-floatingright' => 'Flottante à droite',
'changepassword'           => 'Modification du mot de passe',
'skin'                     => 'Habillage',
'math'                     => 'Rendu des maths',
'dateformat'               => 'Format de date',
'datedefault'              => 'Aucune préférence',
'datetime'                 => 'Date et heure',
'math_failure'             => 'Erreur math',
'math_unknown_error'       => 'erreur indéterminée',
'math_unknown_function'    => 'fonction inconnue',
'math_lexing_error'        => 'erreur lexicale',
'math_syntax_error'        => 'erreur de syntaxe',
'math_image_error'         => 'La conversion en PNG a échoué ; vérifiez l’installation de LaTeX, dvips, gs et convert',
'math_bad_tmpdir'          => 'Impossible de créer ou d’écrire dans le répertoire math temporaire',
'math_bad_output'          => 'Impossible de créer ou d’écrire dans le répertoire math de sortie',
'math_notexvc'             => 'L’exécutable « texvc » est introuvable. Lisez math/README pour le configurer.',
'prefs-personal'           => 'Informations personnelles',
'prefs-rc'                 => 'Modifications récentes',
'prefs-watchlist'          => 'Liste de suivi',
'prefs-watchlist-days'     => 'Nombre de jours à afficher dans la liste de suivi :',
'prefs-watchlist-edits'    => 'Nombre de modifications à afficher dans la liste de suivi étendue :',
'prefs-misc'               => 'Préférences diverses',
'saveprefs'                => 'Enregistrer les préférences',
'resetprefs'               => 'Rétablir les préférences',
'oldpassword'              => 'Ancien mot de passe :',
'newpassword'              => 'Nouveau mot de passe :',
'retypenew'                => 'Confirmer le nouveau mot de passe :',
'textboxsize'              => 'Fenêtre de modification',
'rows'                     => 'Rangées :',
'columns'                  => 'Colonnes :',
'searchresultshead'        => 'Recherches',
'resultsperpage'           => 'Nombre de réponses par page :',
'contextlines'             => 'Nombre de lignes par réponse :',
'contextchars'             => 'Nombre de caractères de contexte par ligne :',
'stub-threshold'           => 'Limite supérieure pour les <a href="#" class="stub">liens vers les ébauches</a> (octets) :',
'recentchangesdays'        => 'Nombre de jours à afficher dans les modifications récentes :',
'recentchangescount'       => "Nombre de modifications à afficher dans les modifications récentes, pages d'historiques et d'opérations, par défaut :",
'savedprefs'               => 'Les préférences ont été sauvegardées.',
'timezonelegend'           => 'Fuseau horaire',
'timezonetext'             => 'Nombre d’heures de décalage entre votre heure locale et l’heure du serveur (UTC).',
'localtime'                => 'Heure locale :',
'timezoneoffset'           => 'Décalage horaire¹ :',
'servertime'               => 'Heure du serveur :',
'guesstimezone'            => 'Utiliser la valeur du navigateur',
'allowemail'               => 'Autoriser l’envoi de courriel venant d’autres utilisateurs',
'defaultns'                => 'Rechercher par défaut dans ces espaces de noms',
'default'                  => 'défaut',
'files'                    => 'Fichiers',

# User rights
'userrights-lookup-user'           => 'Gestion des droits utilisateur',
'userrights-user-editname'         => 'Entrez un nom d’utilisateur :',
'editusergroup'                    => 'Modification des groupes utilisateurs',
'userrights-editusergroup'         => 'Modifier les groupes de l’utilisateur',
'saveusergroups'                   => 'Sauvegarder les groupes utilisateur',
'userrights-groupsmember'          => 'Membre de :',
'userrights-groupsremovable'       => 'Groupes supprimables :',
'userrights-groupsavailable'       => 'Groupes disponibles :',
'userrights-groupshelp'            => 'Choisissez les groupes desquels vous voulez retirer ou rajouter l’utilisateur. Les groupes non sélectionnés ne seront pas modifiés. Vous pouvez désélectionner un groupe avec CTRL + clic gauche.',
'userrights-reason'                => 'Motif du changement :',
'userrights-available-none'        => 'Vous ne pouvez pas changer l’appartenance aux différents groupes.',
'userrights-available-add'         => 'Vous pouvez ajouter des utilisateurs à {{PLURAL:$2|ce groupe|ces groupes}} : $1.',
'userrights-available-remove'      => 'Vous pouvez enlever des utilisateurs de {{PLURAL:$2|ce groupe|ces groupes}}: $1.',
'userrights-available-add-self'    => 'Vous pouvez vous ajouter vous-même à {{PLURAL:$2|ce groupe|ces groupes}} : $1.',
'userrights-available-remove-self' => 'Vous pouvez vous enlever vous-même de {{PLURAL:$2|ce groupe|ces groupes}} : $1.',
'userrights-no-interwiki'          => 'Vous n’avez pas la permission de modifier des droits d’utilisateurs sur d’autres wikis.',
'userrights-nodatabase'            => 'La base de donnée « $1 » n’existe pas ou n’est pas locale.',
'userrights-nologin'               => 'Vous devez vous [[Special:UserLogin|connecter]] avec un compte d’administrateur pour modifier des droits d’utilisateur.',
'userrights-notallowed'            => 'Votre compte n’a pas la permission de modifier des droits d’utilisateur.',

# Groups
'group'               => 'Groupe :',
'group-autoconfirmed' => 'Utilisateurs enregistrés',
'group-bot'           => 'Bots',
'group-sysop'         => 'Administrateurs',
'group-bureaucrat'    => 'Bureaucrates',
'group-all'           => 'Tous',

'group-autoconfirmed-member' => 'Utilisateur enregistré',
'group-bot-member'           => 'Bot',
'group-sysop-member'         => 'Administrateur',
'group-bureaucrat-member'    => 'Bureaucrate',

'grouppage-autoconfirmed' => '{{ns:project}}:Utilisateurs enregistrés',
'grouppage-bot'           => '{{ns:project}}:Bots',
'grouppage-sysop'         => '{{ns:project}}:Administrateurs',
'grouppage-bureaucrat'    => '{{ns:project}}:Bureaucrates',

# User rights log
'rightslog'      => 'Journal des modifications de statut utilisateur',
'rightslogtext'  => 'Voici l’historique des modifications de statut des utilisateurs.',
'rightslogentry' => 'a modifié les droits de l’utilisateur « $1 » de $2 à $3',
'rightsnone'     => '(aucun)',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|modification|modifications}}',
'recentchanges'                     => 'Modifications récentes',
'recentchangestext'                 => 'Piste les changements les plus récents du wiki sur cette page.',
'recentchanges-feed-description'    => 'Suivre les dernières modifications de ce wiki dans un flux.',
'rcnote'                            => 'Voici {{PLURAL:$1|la dernière modification|les $1 dernières modifications}} depuis {{PLURAL:$2|le dernier jour|les <b>$2</b> derniers jours}}, déterminée{{PLURAL:$1||s}} ce $3.',
'rcnotefrom'                        => "Voici les modifications effectuées depuis le '''$2''' ('''$1''' au maximum).",
'rclistfrom'                        => 'Afficher les nouvelles modifications depuis le $1.',
'rcshowhideminor'                   => '$1 les modifications mineures',
'rcshowhidebots'                    => '$1 les bots',
'rcshowhideliu'                     => '$1 les utilisateurs connectés',
'rcshowhideanons'                   => '$1 les utilisateurs anonymes',
'rcshowhidepatr'                    => '$1 les modifications surveillées',
'rcshowhidemine'                    => '$1 mes modifications',
'rclinks'                           => 'Afficher les $1 dernières modifications effectuées au cours des $2 derniers jours<br />$3.',
'diff'                              => 'diff',
'hist'                              => 'hist',
'hide'                              => 'masquer',
'show'                              => 'afficher',
'minoreditletter'                   => 'm',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|utilisateur|utilisateurs}} en train de suivre]',
'rc_categories'                     => 'Limite des catégories (séparation avec « | »)',
'rc_categories_any'                 => 'Toutes',
'newsectionsummary'                 => '/* $1 */ nouvelle section',

# Recent changes linked
'recentchangeslinked'          => 'Suivi des pages liées',
'recentchangeslinked-title'    => 'Suivi des pages associées à « $1 »',
'recentchangeslinked-noresult' => "Il n'y a pas de modification sur les pages liées pendant la période choisie.",
'recentchangeslinked-summary'  => "Cette page spéciale montre les modifications récentes sur les pages qui sont liées. Les pages de votre liste de suivi sont '''en gras'''.",

# Upload
'upload'                      => 'Téléverser un fichier',
'uploadbtn'                   => 'Téléverser le fichier',
'reupload'                    => 'Téléverser à nouveau',
'reuploaddesc'                => 'Annuler et retourner au formulaire de téléversement',
'uploadnologin'               => 'Non connecté(e)',
'uploadnologintext'           => 'Vous devez être [[Special:UserLogin|connecté(e)]] pour téléverser des fichiers sur le serveur.',
'upload_directory_read_only'  => "Le répertoire de téléversement ($1) n'est pas accessible en écriture depuis le serveur web.",
'uploaderror'                 => 'Erreur de téléversement',
'uploadtext'                  => "Utilisez ce formulaire pour importer des fichiers sur le serveur.
Pour voir ou rechercher des images précédemment envoyées, consultez la [[Special:ImageList|liste des images]]. Les imports sont aussi enregistrés dans l’[[Special:Log/upload|historique des imports]], les suppressions dans l’[[Special:Log/delete|historique des suppressions]].

Pour inclure une image dans une page, utilisez un lien de la forme :
* '''<code><nowiki>[[</nowiki>{{ns:image}}<nowiki>:fichier.jpg]]</nowiki></code>''' pour afficher le fichier en pleine résolution ;
* '''<code><nowiki>[[</nowiki>{{ns:image}}<nowiki>:fichier.png|200px|thumb|left|texte descriptif]]</nowiki></code>''' pour utiliser une miniature de 200 pixels de large dans une boîte à gauche avec « texte descriptif » comme description ;
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:fichier.ogg]]</nowiki></code>''' pour lier directement vers le fichier sans l'afficher.",
'upload-permitted'            => 'Formats de fichiers autorisés : $1.',
'upload-preferred'            => 'Formats de fichiers préférés : $1.',
'upload-prohibited'           => 'Formats de fichiers interdits : $1.',
'uploadlog'                   => 'Historique des téléversements',
'uploadlogpage'               => 'Journal des téléversements de fichiers',
'uploadlogpagetext'           => 'Voici la liste des derniers fichiers importés sur le serveur.
Voyez la [[Special:NewImages|gallerie des nouvelles images]] pour une présentation plus visuelle.',
'filename'                    => 'Nom du fichier',
'filedesc'                    => 'Description',
'fileuploadsummary'           => 'Description :',
'filestatus'                  => 'Statut des droits d’auteur :',
'filesource'                  => 'Source :',
'uploadedfiles'               => 'Fichiers téléversés',
'ignorewarning'               => 'Ignorer l’avertissement et sauvegarder le fichier.',
'ignorewarnings'              => 'Ignorer les avertissements',
'minlength1'                  => 'Le noms de fichiers doivent comprendre au moins une lettre.',
'illegalfilename'             => 'Le nom de fichier « $1 » contient des caractères interdits dans les titres de pages. Merci de le renommer et de le téléverser à nouveau.',
'badfilename'                 => 'Le fichier a été renommé en « $1 ».',
'filetype-badmime'            => 'Les fichiers du type MIME « $1 » ne peuvent pas être téléversés.',
'filetype-bad-ie-mime'        => "Le fichier ne peut pas être téléversé parce qu'il serait détecté comme « $1 » par Internet Explorer, ce qui correspond à un type de fichier interdit car potentiellement dangereux.",
'filetype-unwanted-type'      => "'''« .$1 »''' est un format de fichier non désiré. Les extensions privilégiées sont $2.",
'filetype-banned-type'        => "'''\".\$1\"''' est dans un format non admis.  Ceux qui sont acceptés sont \$2.",
'filetype-missing'            => 'Le fichier n’a aucune extension (comme « .jpg » par exemple).',
'large-file'                  => 'Les fichiers téléversés ne devraient pas être plus gros que $1 ; ce fichier fait $2.',
'largefileserver'             => 'La taille de ce fichier est supérieure au maximum autorisé.',
'emptyfile'                   => 'Le fichier que vous voulez téléverser semble vide.
Ceci peut être dû à une erreur dans le nom du fichier.
Veuillez vérifier que vous désirez vraiment téléverser ce fichier.',
'fileexists'                  => "Un fichier avec ce nom existe déjà. Merci de vérifier '''<tt>$1</tt>'''. Êtes-vous certain de vouloir modifier ce fichier ?",
'filepageexists'              => 'Une page (pas un fichier) portant ce nom existe déjà. Veuillez vérifier <strong><tt>$1</tt></strong> si vous n’êtes pas sûr de vouloir la modifier.',
'fileexists-extension'        => "Un fichier avec un nom similaire existe déjà :<br />
Nom du fichier à importer : '''<tt>$1</tt>'''<br />
Nom du fichier existant : '''<tt>$2</tt>'''<br />
La seule différence est la casse (majuscules / minuscules) de l’extension. Veuillez vérifier que le fichier est différent et changer son nom.",
'fileexists-thumb'            => "<center>'''Fichier existant'''</center>",
'fileexists-thumbnail-yes'    => "Le fichier semble être une image en taille réduite ''(vignette)''. Veuillez vérifier le fichier '''<tt>$1</tt>'''.<br />
Si le fichier vérifié est la même image (dans une meilleure résolution), il n’y a pas besoin d’importer une version réduite.",
'file-thumbnail-no'           => "Le nom du fichier commence par '''<tt>$1</tt>'''.
Il est possible qu’il s’agisse d’une version réduite ''(vignette)''.
Si vous disposez du fichier en haute résolution, importez-le, sinon veuillez modifier son nom.",
'fileexists-forbidden'        => 'Un fichier avec ce nom existe déjà ; merci de retourner en arrière et de copier le fichier sous un nouveau nom. [[Image:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Un fichier portant le même nom existe déjà dans la base de données commune.
Si vous voulez encore l’importer, veuillez revenir en arrière et l’importer sous un autre nom. [[Image:$1|thumb|center|$1]]',
'successfulupload'            => 'Téléversement effectué avec succès',
'uploadwarning'               => 'Attention !',
'savefile'                    => 'Sauvegarder le fichier',
'uploadedimage'               => 'a téléversé « [[$1]] »',
'overwroteimage'              => 'a téléversé une nouvelle version de « [[$1]] »',
'uploaddisabled'              => 'Téléversements désactivés',
'uploaddisabledtext'          => 'Le téléversement de fichiers est désactivé.',
'uploadscripted'              => 'Ce fichier contient du code HTML ou un script qui pourrait être interprété de façon incorrecte par un navigateur web.',
'uploadcorrupt'               => 'Ce fichier est corrompu, a une taille nulle ou possède une extension invalide.
Veuillez vérifier le fichier avant de le téléverser à nouveau.',
'uploadvirus'                 => 'Ce fichier contient un virus ! Pour plus de détails, consultez : $1',
'sourcefilename'              => 'Nom du fichier source :',
'destfilename'                => 'Nom sous lequel le fichier sera enregistré :',
'watchthisupload'             => 'Suivre la page de ce fichier',
'filewasdeleted'              => 'Un fichier avec ce nom a déjà été téléversé, puis supprimé.
Vous devriez vérifier le $1 avant de procéder à un nouveau téléversement.',
'upload-wasdeleted'           => "'''Attention : vous êtes en train de téléverser un fichier qui a été supprimé précédemment.'''

Le journal des suppressions de ce fichier vous aidera à déterminer s’il est opportun de continuer son téléversement :",
'filename-bad-prefix'         => "Le nom du fichier que vous téléversez commence par '''« $1 »''' qui est typiquement un nom attribué automatiquement par les appareils photo numériques.
Veuillez choisir un nom de fichier descriptif.",
'filename-prefix-blacklist'   => ' #<!-- laisser cette ligne telle quelle --><pre>
# La syntaxe est la suivante :
#  * Tout ce qui figure entre un caractère "#" jusqu’à la fin de la ligne est un commentaire ;
#  * Toute ligne non vide est un préfixe typique de nom de fichier assigné automatiquement par les appareils numériques :
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # certains téléphones mobiles
IMG # générique
JD # Jenoptik
MGP # Pentax
PICT # divers
 #</pre><!-- laisser cette ligne telle quelle -->',

'upload-proto-error'      => 'Protocole incorrect',
'upload-proto-error-text' => 'Le téléversement à distance requiert des URL commençant par <code>http://</code> ou <code>ftp://</code>.',
'upload-file-error'       => 'Erreur interne',
'upload-file-error-text'  => 'Une erreur interne est survenue en voulant créer un fichier temporaire sur le serveur. Veuillez contacter un [[Special:ListUsers/sysop|administrateur]].',
'upload-misc-error'       => 'Erreur inconnue lors du téléversement',
'upload-misc-error-text'  => 'Une erreur inconnue est survenue pendant le téléversement.
Veuillez vérifier que l’URL est valide et accessible, puis essayer à nouveau.
Si le problème persiste, contactez un [[Special:ListUsers/sysop|administrateur]].',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL injoignable',
'upload-curl-error6-text'  => 'L’URL fournie ne peut pas être atteinte. Veuillez vérifier que l’URL est correcte et que le site est en ligne.',
'upload-curl-error28'      => 'Dépassement du délai lors du téléversement',
'upload-curl-error28-text' => 'Le site a mis trop longtemps à répondre. Vérifiez que le site est en ligne, attendez un peu et réessayez. Vous pouvez aussi réessayer à une heure de moindre affluence.',

'license'            => 'Licence&nbsp;:',
'nolicense'          => 'Aucune licence sélectionnée',
'license-nopreview'  => '(Prévisualisation non disponible)',
'upload_source_url'  => ' (une URL valide et accessible publiquement)',
'upload_source_file' => ' (un fichier sur votre ordinateur)',

# Image list
'imagelist'                 => 'Liste de fichiers',
'imagelist-summary'         => 'Cette page spéciale montre tous les fichiers importés.
Par défaut, les derniers fichiers importés sont affichés en haut de la liste.
Un clic en tête de colonne change l’ordre d’affichage.',
'imagelisttext'             => "Voici une liste de '''$1''' {{PLURAL:$1|fichier|fichiers}} classée $2.",
'getimagelist'              => 'Récupération de la liste des images',
'ilsubmit'                  => 'Rechercher',
'showlast'                  => 'Afficher les $1 dernières images classées $2.',
'byname'                    => 'par nom',
'bydate'                    => 'par date',
'bysize'                    => 'par taille',
'imgdelete'                 => 'suppr',
'imgdesc'                   => 'page de l’image',
'imgfile'                   => 'fichier',
'filehist'                  => 'Historique du fichier',
'filehist-help'             => 'Cliquer sur une date et heure pour voir le fichier tel qu’il était à ce moment-là.',
'filehist-deleteall'        => 'supprimer tout',
'filehist-deleteone'        => 'supprimer',
'filehist-revert'           => 'rétablir',
'filehist-current'          => 'actuel',
'filehist-datetime'         => 'Date et heure',
'filehist-user'             => 'Utilisateur',
'filehist-dimensions'       => 'Dimensions',
'filehist-filesize'         => 'Taille du fichier',
'filehist-comment'          => 'Commentaire',
'imagelinks'                => 'Utilisations du fichier',
'linkstoimage'              => 'Les pages ci-dessous contiennent cette image :',
'nolinkstoimage'            => 'Aucune page n’utilise ce fichier.',
'sharedupload'              => 'Ce fichier est partagé et peut-être utilisé par d’autres projets.',
'shareduploadwiki'          => 'Reportez-vous à la $1 pour plus d’informations.',
'shareduploadwiki-desc'     => 'La description affichée ci-dessous est issue de sa $1 dans le dépôt partagé.',
'shareduploadwiki-linktext' => 'page de description du fichier',
'noimage'                   => 'Aucun fichier n’existe sous ce nom, mais vous pouvez $1.',
'noimage-linktext'          => 'en téléverser un',
'uploadnewversion-linktext' => 'Téléverser une nouvelle version de ce fichier',
'imagelist_date'            => 'Date',
'imagelist_name'            => 'Nom',
'imagelist_user'            => 'Utilisateur',
'imagelist_size'            => 'Octets',
'imagelist_description'     => 'Description',
'imagelist_search_for'      => 'Recherche pour l’image nommée :',

# File reversion
'filerevert'                => 'Rétablir $1',
'filerevert-legend'         => 'Rétablir le fichier',
'filerevert-intro'          => "Vous êtes sur le point de rétablir le fichier '''[[Media:$1|$1]]''' à la [$4 version du $2 à $3].",
'filerevert-comment'        => 'Commentaire :',
'filerevert-defaultcomment' => 'Version du $1 à $2 rétablie',
'filerevert-submit'         => 'Rétablir',
'filerevert-success'        => "'''[[Media:$1|$1]]''' a été rétabli à [$4 la version du $2 à $3].",
'filerevert-badversion'     => 'Il n’y a pas localement de version antérieure du fichier qui porte la date indiquée.',

# File deletion
'filedelete'                  => 'Supprimer $1',
'filedelete-legend'           => 'Supprimer le fichier',
'filedelete-intro'            => "Vous êtes sur le point de supprimer '''[[Media:$1|$1]]''' ainsi que tout son historique.",
'filedelete-intro-old'        => "Vous êtes en train d’effacer la version de '''[[Media:$1|$1]]''' du [$4 $2 à $3].",
'filedelete-comment'          => 'Motif de suppression :',
'filedelete-submit'           => 'Supprimer',
'filedelete-success'          => "'''$1''' a été supprimé.",
'filedelete-success-old'      => "La version de '''[[Media:$1|$1]]''' du $2 à $3 a été supprimée.",
'filedelete-nofile'           => "'''$1''' n’existe pas.",
'filedelete-nofile-old'       => "Il n’existe aucune version archivée de '''$1''' avec les attributs indiqués.",
'filedelete-iscurrent'        => 'Vous êtes en train d’essayer de supprimer la version la plus récente de ce fichier. Vous devez, au préalable, rétablir une ancienne version de celui-ci.',
'filedelete-otherreason'      => 'Motif autre / supplémentaire :',
'filedelete-reason-otherlist' => 'Autre motif',
'filedelete-reason-dropdown'  => '* Motifs fréquents de suppression de fichiers
** Violation du droit d’auteur
** Fichier dupliqué',

# MIME search
'mimesearch'         => 'Recherche par type de contenu MIME',
'mimesearch-summary' => "Cette page vous permet de lister les fichiers accessibles par ce wiki en fonction de leur type de contenu MIME.
Entrée : ''typedecontenu''/''sous-type'', par exemple <tt>image/jpeg</tt>.",
'mimetype'           => 'Type MIME :',
'download'           => 'Télécharger',

# Unwatched pages
'unwatchedpages' => 'Pages non suivies',

# List redirects
'listredirects' => 'Liste des redirections',

# Unused templates
'unusedtemplates'     => 'Modèles inutilisés',
'unusedtemplatestext' => 'Cette page liste toutes les pages de l’espace de noms « {{ns:template}} » qui ne sont incluses dans aucune autre page.
N’oubliez pas de vérifier s’il n’y a pas d’autres liens vers les modèles avant de les supprimer.',
'unusedtemplateswlh'  => 'autres liens',

# Random page
'randompage'         => 'Page au hasard',
'randompage-nopages' => 'Il n’y a aucune page dans cet espace de nom.',

# Random redirect
'randomredirect'         => 'Page de redirection au hasard',
'randomredirect-nopages' => 'Il n’y a aucune page de redirection dans cet espace de nom.',

# Statistics
'statistics'             => 'Statistiques',
'sitestats'              => 'Statistiques de {{SITENAME}}',
'userstats'              => 'Statistiques utilisateur',
'sitestatstext'          => "La base de données contient actuellement '''$1''' page{{PLURAL:$1||s}}.

Ce chiffre inclut les pages « discussion », les pages relatives à {{SITENAME}}, les pages minimales (« ébauches »), les pages de redirection, ainsi que d’autres pages qui ne sont pas considérées comme des articles. Si l’on exclut ces pages, il reste '''$2''' {{PLURAL:$2|page qui est probablement un véritable article|pages qui sont probablement de véritables articles}}.

'''$8''' {{PLURAL:$8|fichier a été importé|fichiers ont été importés}}.

'''$3''' {{PLURAL:$3|page a été consultée|pages ont été consultées}} et '''$4''' {{PLURAL:$4|page modifiée|pages modifiées}}.

Cela représente une moyenne de '''$5''' modification{{PLURAL:$5||s}} par page et de '''$6''' consultation{{PLURAL:$6||s}} pour une modification.

Il y a '''$7''' article{{PLURAL:$7||s}} dans [http://www.mediawiki.org/wiki/Manual:Job_queue/fr la file des tâches].",
'userstatstext'          => "Il y a {{PLURAL:$1|'''$1''' [[Special:ListUsers|utilisateur enregistré]]|'''$1''' [[Special:ListUsers|utilisateurs enregistrés]]}} dont '''$2''' (ou '''$4%''') {{PLURAL:$2|dispose|disposent}} des droits $5.
Il y a actuellement environ $6 {{PLURAL:$6|compte utilisateur enregistré|comptes utilisateur enregistrés}}.",
'statistics-mostpopular' => 'Pages les plus consultées',

'disambiguations'      => 'Pages d’homonymie',
'disambiguationspage'  => 'Template:Homonymie',
'disambiguations-text' => "Les pages suivantes comportent un lien vers une '''page d’homonymie'''.
Ces liens ambigus devraient plutôt pointer vers le bon article.<br />
Une page est considérée comme une page d’homonymie si elle inclut (directement ou récursivement) un des modèles listés sur [[MediaWiki:Disambiguationspage]].",

'doubleredirects'     => 'Doubles redirections',
'doubleredirectstext' => 'Voici une liste des pages qui redirigent vers des pages qui sont elles-mêmes des pages de redirection.
Chaque entrée contient des liens vers la première et la seconde redirections, ainsi que la première ligne de texte de la seconde page, ce qui fournit habituellement la « vraie » page cible, vers laquelle la première redirection devrait rediriger.',

'brokenredirects'        => 'Redirections cassées',
'brokenredirectstext'    => 'Ces redirections mènent vers des pages inexistantes :',
'brokenredirects-edit'   => '(modifier)',
'brokenredirects-delete' => '(supprimer)',

'withoutinterwiki'         => 'Pages sans liens inter-langues',
'withoutinterwiki-header'  => 'Les pages suivantes ne possèdent pas de liens vers d’autres langues :',
'withoutinterwiki-summary' => 'Les pages suivantes ne possèdent pas de liens vers d’autres langues :',
'withoutinterwiki-submit'  => 'Afficher',

'fewestrevisions' => 'Pages les moins modifiées',

# Miscellaneous special pages
'nbytes'                  => '$1 octet{{PLURAL:$1||s}}',
'ncategories'             => '$1 catégorie{{PLURAL:$1||s}}',
'nlinks'                  => '$1 lien{{PLURAL:$1||s}}',
'nmembers'                => '$1 membre{{PLURAL:$1||s}}',
'nrevisions'              => '$1 version{{PLURAL:$1||s}}',
'nviews'                  => '$1 consultation{{PLURAL:$1||s}}',
'specialpage-empty'       => "Il n'y a aucun résultat à afficher.",
'lonelypages'             => 'Pages orphelines',
'lonelypagestext'         => 'Les pages suivantes ne sont pas liées ou incluses à partir d’autres pages du wiki.',
'uncategorizedpages'      => 'Pages non catégorisées',
'uncategorizedcategories' => 'Catégories non catégorisées',
'uncategorizedimages'     => 'Fichiers non catégorisés',
'uncategorizedtemplates'  => 'Modèles sans catégorie',
'unusedcategories'        => 'Catégories inutilisées',
'unusedimages'            => 'Fichiers orphelins',
'popularpages'            => 'Pages les plus consultées',
'wantedcategories'        => 'Catégories les plus demandées',
'wantedpages'             => 'Pages les plus demandées',
'mostlinked'              => 'Pages les plus liées',
'mostlinkedcategories'    => 'Catégories les plus utilisées',
'mostlinkedtemplates'     => 'Modèles les plus utilisés',
'mostcategories'          => 'Pages utilisant le plus de catégories',
'mostimages'              => 'Fichiers les plus utilisés',
'mostrevisions'           => 'Pages les plus modifiées',
'allpages'                => 'Toutes les pages',
'prefixindex'             => 'Toutes les pages débutant par...',
'shortpages'              => 'Pages courtes',
'longpages'               => 'Pages longues',
'deadendpages'            => 'Pages en impasse',
'deadendpagestext'        => 'Les pages suivantes ne contiennent aucun lien vers d’autres pages du wiki.',
'protectedpages'          => 'Pages protégées',
'protectedpagestext'      => 'Les pages suivantes sont protégées contre les modifications et/ou le renommage.',
'protectedpagesempty'     => 'Aucune page n’est protégée actuellement.',
'protectedtitles'         => 'Titres protégés',
'protectedtitlestext'     => 'Les titres suivants sont protégés à la création',
'protectedtitlesempty'    => 'Aucun titre n’est actuellement protégé avec ces paramètres.',
'listusers'               => 'Liste des utilisateurs',
'specialpages'            => 'Pages spéciales',
'spheading'               => 'Pages spéciales',
'restrictedpheading'      => 'Pages spéciales réservées',
'newpages'                => 'Nouvelles pages',
'newpages-username'       => 'Utilisateur :',
'ancientpages'            => 'Pages les plus anciennement modifiées',
'intl'                    => 'Liens interlangues',
'move'                    => 'Renommer',
'movethispage'            => 'Renommer cette page',
'unusedimagestext'        => 'Veuillez noter que d’autres sites peuvent avoir un lien direct vers un fichier, et donc qu’un fichier peut être listé comme inutilisé ici alors qu’il est en réalité utilisé sur ces sites.',
'unusedcategoriestext'    => 'Les catégories suivantes existent mais aucune page ou catégorie ne les utilise.',
'notargettitle'           => 'Pas de cible',
'notargettext'            => 'Vous n’avez pas indiqué une page ou un utilisateur sur lequel vous souhaitez effectuer cette action.',
'pager-newer-n'           => '{{PLURAL:$1|plus récente|$1 plus récentes}}',
'pager-older-n'           => '{{PLURAL:$1|plus ancienne|$1 plus anciennes}}',

# Book sources
'booksources'               => 'Ouvrages de référence',
'booksources-search-legend' => 'Rechercher parmi des ouvrages de référence',
'booksources-isbn'          => 'ISBN :',
'booksources-go'            => 'Lister',
'booksources-text'          => 'Voici une liste indicative et non exclusive de liens vers d’autres sites vendant des livres neufs et d’occasion et sur lesquels vous trouverez peut-être des informations sur les ouvrages que vous cherchez :',

'categoriespagetext' => 'Les catégories suivantes sont utilisées par des pages ou fichiers.
[[Special:UnusedCategories|Les catégories inutilisées]] ne sont pas affichées ici.
Voyez aussi [[Special:WantedCategories|les catégories demandées]].',
'data'               => 'Données',
'userrights'         => 'Gestion des droits utilisateur',
'groups'             => 'Groupes utilisateurs',
'alphaindexline'     => 'de $1 à $2',
'version'            => 'Version',

# Special:Log
'specialloguserlabel'  => 'Utilisateur :',
'speciallogtitlelabel' => 'Titre :',
'log'                  => 'Journaux d’opérations',
'all-logs-page'        => 'Toutes les opérations',
'log-search-legend'    => 'Chercher dans les historiques',
'log-search-submit'    => 'OK',
'alllogstext'          => 'Affichage combiné de tous les journaux disponibles des opérations sur {{SITENAME}}.
Vous pouvez restreindre la vue en sélectionnant un type de journal, un nom d’utilisateur (sensible à la casse) ou une page affectée (même remarque).',
'logempty'             => 'Aucune opération correspondante dans les journaux.',
'log-title-wildcard'   => 'Chercher parmi les titres commençant par ce texte',

# Special:Allpages
'nextpage'          => 'Page suivante ($1)',
'prevpage'          => 'Page précédente ($1)',
'allpagesfrom'      => 'Afficher les pages à partir de :',
'allarticles'       => 'Toutes les pages',
'allinnamespace'    => 'Toutes les pages (dans l’espace de noms $1)',
'allnotinnamespace' => 'Toutes les pages (hors de l’espace de noms $1)',
'allpagesprev'      => 'Précédent',
'allpagesnext'      => 'Suivant',
'allpagessubmit'    => 'Lister',
'allpagesprefix'    => 'Afficher les pages commençant par le préfixe :',
'allpagesbadtitle'  => 'Le titre de page indiqué est incorrect ou contient un préfixe inter-langue ou inter-wiki réservé.
Il peut aussi contenir un ou plusieurs caractères inutilisables dans les titres.',
'allpages-bad-ns'   => '{{SITENAME}} n’a pas d’espace de noms « $1 ».',

# Special:Listusers
'listusersfrom'      => 'Afficher les utilisateurs à partir de :',
'listusers-submit'   => 'Lister',
'listusers-noresult' => 'Aucun utilisateur trouvé. Vérifiez aussi les variantes de casse.',

# E-mail user
'mailnologin'     => 'Pas d’adresse d’expéditeur',
'mailnologintext' => 'Vous devez être [[Special:UserLogin|identifié]] et avoir indiqué une adresse électronique valide dans vos [[Special:Preferences|préférences]] pour pouvoir envoyer des courriels à d’autres utilisateurs.',
'emailuser'       => 'Lui envoyer un courriel',
'emailpage'       => 'Envoyer un courriel à l’utilisateur',
'emailpagetext'   => 'Vous pouvez utiliser le formulaire ci-dessous pour envoyer un courriel à cet utilisateur.
L’adresse électronique que vous avez indiquée dans [[Special:Preferences|vos préférences]] apparaîtra dans le champ « Expéditeur » de votre message ; ainsi, le destinataire pourra vous répondre directement.',
'usermailererror' => 'Erreur dans l’objet du courriel :',
'defemailsubject' => 'Courriel de {{SITENAME}}',
'noemailtitle'    => 'Destinataire sans adresse de courriel',
'noemailtext'     => 'Cet utilisateur n’a pas spécifié une adresse de courriel valide.',
'emailfrom'       => 'Expéditeur :',
'emailto'         => 'Destinataire :',
'emailsubject'    => 'Objet :',
'emailmessage'    => 'Message :',
'emailsend'       => 'Envoyer',
'emailccme'       => 'M’envoyer par courriel une copie de mon message.',
'emailccsubject'  => 'Copie de votre message à $1 : $2',
'emailsent'       => 'Courriel envoyé',
'emailsenttext'   => 'Votre message a été envoyé par courriel.',

# Watchlist
'watchlist'            => 'Liste de suivi',
'mywatchlist'          => 'Liste de suivi',
'watchlistfor'         => "(pour '''$1''')",
'nowatchlist'          => 'Votre liste de suivi ne référence aucune page.',
'watchlistanontext'    => 'Veuillez vous $1 pour visualiser ou modifier les éléments de votre liste de suivi.',
'watchnologin'         => 'Non connecté',
'watchnologintext'     => 'Vous devez être [[Special:UserLogin|identifié]] pour modifier votre liste de suivi.',
'addedwatch'           => 'Ajouté à la liste de suivi',
'addedwatchtext'       => "La page « [[:$1]] » a été ajoutée à votre [[Special:Watchlist|liste de suivi]].
Les futures modifications de cette page et de sa page de discussion y seront listées et la page apparaîtra '''en gras''' dans la [[Special:RecentChanges|liste des modifications récentes]] pour en faciliter le repérage.",
'removedwatch'         => 'Retirée de la liste de suivi',
'removedwatchtext'     => 'La page « [[:$1]] » a été retirée de votre [[Special:Watchlist|liste de suivi]].',
'watch'                => 'Suivre',
'watchthispage'        => 'Suivre cette page',
'unwatch'              => 'Ne plus suivre',
'unwatchthispage'      => 'Ne plus suivre',
'notanarticle'         => 'Ce n’est pas une page de contenu',
'watchnochange'        => 'Aucun des éléments que vous suivez n’a été modifié durant la période affichée.',
'watchlist-details'    => 'Votre liste de suivi référence $1 page{{PLURAL:$1||s}}, sans compter les pages de discussion.',
'wlheader-enotif'      => '* La notification par courriel est activée.',
'wlheader-showupdated' => "* Les pages qui ont été modifiées depuis votre dernière visite sont affichées en '''gras'''.",
'watchmethod-recent'   => 'vérification des modifications récentes pour y trouver des pages suivies',
'watchmethod-list'     => 'vérification des pages suivies pour y trouver des modifications récentes',
'watchlistcontains'    => 'Votre liste de suivi référence $1 page{{PLURAL:$1||s}}.',
'iteminvalidname'      => 'Problème avec l’élément « $1 » : le nom est invalide.',
'wlnote'               => "Ci-dessous {{PLURAL:$1|figure la dernière modification effectuée|figurent les '''$1''' dernières modifications effectuées}} durant {{PLURAL:$2|la dernière heure|les '''$2''' dernières heures}}.",
'wlshowlast'           => 'Montrer les dernières $1 heures, les derniers $2 jours ou bien $3',
'watchlist-show-bots'  => 'Afficher les contributions de bots',
'watchlist-hide-bots'  => 'Masquer les contributions de bots',
'watchlist-show-own'   => 'Afficher mes modifications',
'watchlist-hide-own'   => 'Masquer mes modifications',
'watchlist-show-minor' => 'Afficher les modifications mineures',
'watchlist-hide-minor' => 'Masquer les modifications mineures',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Suivi...',
'unwatching' => 'Fin du suivi...',

'enotif_mailer'                => 'Système de notification par courriel de {{SITENAME}}',
'enotif_reset'                 => 'Marquer toutes les pages comme visitées',
'enotif_newpagetext'           => 'Ceci est une nouvelle page.',
'enotif_impersonal_salutation' => 'Utilisateur de {{SITENAME}}',
'changed'                      => 'modifiée',
'created'                      => 'créée',
'enotif_subject'               => 'La page $PAGETITLE de {{SITENAME}} a été $CHANGEDORCREATED par $PAGEEDITOR',
'enotif_lastvisited'           => 'Voyez $1 pour tous les changements depuis votre dernière visite.',
'enotif_lastdiff'              => 'Voyez $1 pour visualiser ces changements.',
'enotif_anon_editor'           => 'utilisateur non-enregistré $1',
'enotif_body'                  => 'Cher $WATCHINGUSERNAME,

La page « $PAGETITLE » de {{SITENAME}} a été $CHANGEDORCREATED le $PAGEEDITDATE par « $PAGEEDITOR », visitez $PAGETITLE_URL pour visualiser la version actuelle.

$NEWPAGE

Résumé du contributeur : $PAGESUMMARY $PAGEMINOREDIT

Contactez ce contributeur :
courriel : $PAGEEDITOR_EMAIL
wiki : $PAGEEDITOR_WIKI

Il n’y aura pas d’autres notifications en cas de changements ultérieurs, à moins que vous ne visitiez cette page.
Vous pouvez aussi réinitialiser les drapeaux de notification pour toutes les pages de votre liste de suivi.

             Votre système de notification de {{SITENAME}}

--
Pour modifier les paramètres de votre liste de suivi, visitez
{{fullurl:Special:Watchlist/edit}}

Retour et assistance :
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Supprimer la page',
'confirm'                     => 'Confirmer',
'excontent'                   => 'contenait « $1 »',
'excontentauthor'             => 'contenait « $1 » (et son seul contributeur était [[Special:Contributions/$2|$2]])',
'exbeforeblank'               => 'contenait avant blanchiment « $1 »',
'exblank'                     => 'la page était vide',
'delete-confirm'              => 'Supprimer « $1 »',
'delete-legend'               => 'Supprimer',
'historywarning'              => 'Attention, la page que vous êtes sur le point de supprimer a un historique :',
'confirmdeletetext'           => 'Vous êtes sur le point de supprimer une page ou un fichier, ainsi que toutes ses versions antérieures historisées.
Veuillez confirmer que c’est bien là ce que vous voulez faire, que vous en comprenez les conséquences et que vous faîtes ceci en accord avec les [[{{MediaWiki:Policy-url}}|règles internes]].',
'actioncomplete'              => 'Action effectuée',
'deletedtext'                 => '« <nowiki>$1</nowiki> » a été supprimé.
Voir $2 pour une liste des suppressions récentes.',
'deletedarticle'              => 'a supprimé « [[$1]] »',
'dellogpage'                  => 'Journal des suppressions de page',
'dellogpagetext'              => 'Voici la liste des suppressions les plus récentes.',
'deletionlog'                 => 'journal des suppressions',
'reverted'                    => 'Version précédente rétablie',
'deletecomment'               => 'Motif de suppression :',
'deleteotherreason'           => 'Motif autre ou supplémentaire :',
'deletereasonotherlist'       => 'Autre motif',
'deletereason-dropdown'       => '* Motifs de suppression les plus courants
** Demande de l’auteur
** Violation des droits d’auteur
** Vandalisme
** Langue erronée
** Message mis à jour de façon externe',
'delete-toobig'               => 'Cette page possède un historique important dépassant $1 versions. La suppression de telles pages a été limitée afin d’éviter des perturbations accidentelles de {{SITENAME}}.',
'delete-warning-toobig'       => 'Cette page possède un historique important dépassant $1 versions. La supprimer peut perturber le fonctionnement de la base de données de {{SITENAME}} ; à effectuer avec prudence.',
'rollback'                    => 'Révoquer les modifications',
'rollback_short'              => 'Révoquer',
'rollbacklink'                => 'révoquer',
'rollbackfailed'              => 'La révocation a échoué',
'cantrollback'                => 'Impossible de révoquer la modification ;
le dernier contributeur est le seul auteur de cette page.',
'alreadyrolled'               => 'Impossible de révoquer la dernière modification de la page « [[$1]] » effectuée par [[User:$2|$2]] ([[User talk:$2|Discussion]]) ; quelqu’un d’autre a déjà modifié ou révoqué la page. La dernière modification a été effectuée par [[User:$3|$3]] ([[User talk:$3|Discussion]]).',
'editcomment'                 => "Le résumé de la modification était : « ''$1'' ».", # only shown if there is an edit comment
'revertpage'                  => 'Révocation des modifications de [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussion]]) vers la dernière version de [[User:$1|$1]]', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success'            => 'Révocation des modifications effectuées par $1 ;
rétablissement de la dernière version par $2.',
'sessionfailure'              => 'Votre session de connexion semble avoir des problèmes ;
cette action a été annulée en prévention d’un piratage de session.
Veuillez cliquer sur « Précédent », rechargez la page d’où vous venez, puis réessayez.',
'protectlogpage'              => 'Journal des protections',
'protectlogtext'              => 'Voici une liste historique des protections et déprotections de pages.
Consultez la [[Special:ProtectedPages|liste des pages protégées]] pour la liste des protections actuellement opérationnelles.',
'protectedarticle'            => 'a protégé « [[$1]] »',
'modifiedarticleprotection'   => 'a modifié le niveau de protection de « [[$1]] »',
'unprotectedarticle'          => 'a déprotégé « [[$1]] »',
'protectsub'                  => '(Protéger « $1 »)',
'confirmprotect'              => 'Confirmer la protection',
'protectcomment'              => 'Motif de la protection :',
'protectexpiry'               => 'Date d’expiration :',
'protect_expiry_invalid'      => 'La date d’expiration est invalide.',
'protect_expiry_old'          => 'La date d’expiration est déjà passée.',
'unprotectsub'                => '(Déprotéger « $1 »)',
'protect-unchain'             => 'Débloquer les permissions de renommage',
'protect-text'                => "Vous pouvez consulter et modifier le niveau de protection de la page '''<nowiki>$1</nowiki>'''.",
'protect-locked-blocked'      => "Vous ne pouvez pas modifier le niveau de protection tant que vous êtes bloqué.
Voici les réglages actuels de la page '''$1''' :",
'protect-locked-dblock'       => "Le niveau de protection ne peut pas être modifié car la base de données est verrouillée.
Voici les réglages actuels de la page '''$1''' :",
'protect-locked-access'       => "Vous n’avez pas les droits nécessaires pour modifier les niveaux de protection de pages.
Voici les réglages actuels de la page '''$1''' :",
'protect-cascadeon'           => 'Cette page est actuellement protégée car incluse dans {{PLURAL:$1|la page suivante|les pages suivantes}}, {{PLURAL:$1|laquelle a été protégée|lesquelles ont été protégées}} avec l’option « protection en cascade » activée. Vous pouvez changer le niveau de protection de cette page sans que cela n’affecte la protection en cascade.',
'protect-default'             => 'Autoriser tous les utilisateurs',
'protect-fallback'            => 'Nécessite la permission « $1 »',
'protect-level-autoconfirmed' => 'Bloquer les nouveaux utilisateurs et les utilisateurs anonymes',
'protect-level-sysop'         => 'Administrateurs uniquement',
'protect-summary-cascade'     => 'protection en cascade',
'protect-expiring'            => 'expire le $1 (UTC)',
'protect-cascade'             => 'Protège aussi les pages incluses dans celle-ci (protection en cascade)',
'protect-cantedit'            => 'Vous ne pouvez pas changer les niveaux de protection de cette page car vous n’avez pas la permission de la modifier.',
'restriction-type'            => 'Permission :',
'restriction-level'           => 'Niveau de restriction :',
'minimum-size'                => 'Taille minimum',
'maximum-size'                => 'Taille maximum',
'pagesize'                    => '(octets)',

# Restrictions (nouns)
'restriction-edit'   => 'Modifier',
'restriction-move'   => 'Renommer',
'restriction-create' => 'Créer',

# Restriction levels
'restriction-level-sysop'         => 'protection complète',
'restriction-level-autoconfirmed' => 'semi-protection',
'restriction-level-all'           => 'tout niveau',

# Undelete
'undelete'                     => 'Voir les pages supprimées',
'undeletepage'                 => 'Voir et restaurer des pages supprimées',
'viewdeletedpage'              => 'Visualiser les pages supprimées',
'undeletepagetext'             => 'Ces pages ont été supprimées et se trouvent dans l’archive. Elles figurent toujours dans la base de données et peuvent être restaurées.
L’archive peut être effacée périodiquement.',
'undeleteextrahelp'            => "Pour restaurer l’historique complet de cette page, laissez toutes les cases décochées et cliquez sur '''''Restaurer'''''.
Pour effectuer une restauration partielle, cochez les cases correspondant aux versions à rétablir, puis cliquez sur '''''Restaurer'''''.
Cliquer sur '''''Réinitialiser''''' effacera la boîte de commentaire et réinitialisera toutes les cases à cocher.",
'undeleterevisions'            => '$1 {{PLURAL:$1|version archivée|versions archivées}}',
'undeletehistory'              => 'Si vous restaurez la page, toutes les versions seront replacées dans l’historique.
Si une nouvelle page avec le même nom a été créée depuis la suppression, les versions restaurées apparaîtront dans l’historique antérieur et la version courante ne sera pas automatiquement remplacée.',
'undeleterevdel'               => 'La restauration ne sera pas effectuée si, au final, la version la plus récente de la page sera partiellement supprimée. Dans ce cas, vous devez déselectionner les versions les plus récentes (en haut). Les versions des fichiers auxquelles vous n’avez pas accès ne seront pas restaurées.',
'undeletehistorynoadmin'       => 'Cette page a été supprimée.
Le motif de la suppression est indiqué dans le résumé ci-dessous, avec les détails des utilisateurs qui l’ont modifié avant sa suppression.
Le contenu effectif de ces versions supprimées n’est accessible qu’aux administrateurs.',
'undelete-revision'            => 'Version supprimée de $1, (révision du $4 à $5) par $3 :',
'undeleterevision-missing'     => 'Version incorrecte ou manquante.
Vous avez peut-être un mauvais lien, ou la version a pu être restaurée ou supprimée de l’archive.',
'undelete-nodiff'              => 'Aucune version précédente trouvée.',
'undeletebtn'                  => 'Restaurer',
'undeletelink'                 => 'visualiser/rétablir',
'undeletereset'                => 'Réinitialiser',
'undeletecomment'              => 'Résumé :',
'undeletedarticle'             => 'a restauré « [[$1]] »',
'undeletedrevisions'           => '$1 {{PLURAL:$1|version restaurée|versions restaurées}}',
'undeletedrevisions-files'     => '$1 version{{PLURAL:$1||s}} et $2 fichier{{PLURAL:$2||s}} restaurés',
'undeletedfiles'               => '$1 {{PLURAL:$1|fichier restauré|fichiers restaurés}}',
'cannotundelete'               => 'La restauration a échoué ;
un autre utilisateur a probablement déjà restauré la page.',
'undeletedpage'                => "<big>'''La page $1 a été restaurée.'''</big>

Consultez le [[Special:Log/delete|journal des suppressions]] pour obtenir la liste des récentes suppressions et restaurations.",
'undelete-header'              => 'Consultez le [[Special:Log/delete|journal des suppressions]] pour lister les pages récemment supprimées.',
'undelete-search-box'          => 'Rechercher des pages supprimées',
'undelete-search-prefix'       => 'Montrer les pages commençant par :',
'undelete-search-submit'       => 'Rechercher',
'undelete-no-results'          => 'Aucune page correspondante n’a été trouvée dans les archives de suppression.',
'undelete-filename-mismatch'   => 'Impossible de restaurer la version du fichier datée du $1 : le nom de fichier ne correspond pas.',
'undelete-bad-store-key'       => 'Impossible de restaurer la version du fichier datée du $1 : le fichier était absent avant la suppression.',
'undelete-cleanup-error'       => 'Erreur lors de la suppression du fichier d’archive inutilisé « $1 ».',
'undelete-missing-filearchive' => 'Impossible de restaurer le fichier d’archive avec l’identifiant $1 parce qu’il n’est pas dans la base de données.
Il a peut-être déjà été restauré.',
'undelete-error-short'         => 'Erreur lors de la restauration du fichier : $1',
'undelete-error-long'          => 'Des erreurs ont été rencontrées lors de la restauration du fichier :

$1',
'undelete-show-file-confirm'   => 'Êtes-vous sûr de vouloir visionner une version supprimée du fichier « <nowiki>$1</nowiki> » datant du $2 à $3 ?',
'undelete-show-file-submit'    => 'Oui',

# Namespace form on various pages
'namespace'      => 'Espace de noms :',
'invert'         => 'Inverser la sélection',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'Contributions de l’utilisateur',
'mycontris'     => 'Contributions',
'contribsub2'   => 'Pour $1 ($2)',
'nocontribs'    => 'Aucune modification correspondant à ces critères n’a été trouvée.',
'ucnote'        => 'Voici les <b>$1</b> dernières modifications effectuées par cet utilisateur au cours des <b>$2</b> derniers jours.',
'uclinks'       => 'Afficher les $1 dernières modifications ; afficher les $2 derniers jours.',
'uctop'         => '(dernière)',
'month'         => 'À partir du mois (et précédents) :',
'year'          => 'À partir de l’année (et précédentes) :',

'sp-contributions-newbies'     => 'Ne montrer que les contributions des nouveaux utilisateurs',
'sp-contributions-newbies-sub' => 'Parmi les nouveaux comptes',
'sp-contributions-blocklog'    => 'journal des blocages',
'sp-contributions-search'      => 'Rechercher les contributions',
'sp-contributions-username'    => 'Adresse IP ou nom d’utilisateur :',
'sp-contributions-submit'      => 'Rechercher',

'sp-newimages-showfrom' => 'Afficher les nouveaux fichiers à partir du $1 à $2',

# What links here
'whatlinkshere'       => 'Pages liées',
'whatlinkshere-title' => 'Pages qui pointent vers « $1 »',
'whatlinkshere-page'  => 'Page :',
'linklistsub'         => '(Liste de liens)',
'linkshere'           => "Les pages ci-dessous contiennent un lien vers '''[[:$1]]''' :",
'nolinkshere'         => "Aucune page ne contient de lien vers '''[[:$1]]'''.",
'nolinkshere-ns'      => "Aucune page ne contient de lien vers '''[[:$1]]''' dans l’espace de noms choisi.",
'isredirect'          => 'page de redirection',
'istemplate'          => 'inclusion',
'whatlinkshere-prev'  => '{{PLURAL:$1|précédente|$1 précédentes}}',
'whatlinkshere-next'  => '{{PLURAL:$1|suivante|$1 suivantes}}',
'whatlinkshere-links' => '← liens',

# Block/unblock
'blockip'                     => 'Bloquer l’utilisateur',
'blockiptext'                 => 'Utilisez le formulaire ci-dessous pour bloquer l’accès aux modifications faites à partir d’une adresse IP spécifique ou d’un nom d’utilisateur.
Une telle mesure ne devrait être prise que pour prévenir le vandalisme et en accord avec les [[{{MediaWiki:Policy-url}}|règles internes]].
Donnez ci-dessous un motif précis (par exemple en citant les pages qui ont été vandalisées).',
'ipaddress'                   => 'Adresse IP :',
'ipadressorusername'          => 'Adresse IP ou nom d’utilisateur :',
'ipbexpiry'                   => 'Durée avant expiration :',
'ipbreason'                   => 'Motif :',
'ipbreasonotherlist'          => 'Autre motif',
'ipbreason-dropdown'          => '* Motifs de blocage les plus fréquents
** Insertion de fausses informations
** Suppression injustifiée de contenu des pages
** Insertion répétée de liens externes publicitaires (spam)
** Insertion de contenu sans aucun sens et de déchets dans les pages
** Tentative d’intimidation ou harcèlement
** Abus d’utilisation de comptes multiples
** Nom d’utilisateur inacceptable, injurieux ou diffamant',
'ipbanononly'                 => 'Bloquer uniquement les utilisateurs anonymes',
'ipbcreateaccount'            => 'Empêcher la création de compte',
'ipbemailban'                 => 'Empêcher l’utilisateur d’envoyer des courriels',
'ipbenableautoblock'          => 'Bloquer automatiquement la dernière adresse IP utilisée par l’utilisateur et toutes ses IPs ultérieures qu’il pourrait essayer',
'ipbsubmit'                   => 'Bloquer cet utilisateur',
'ipbother'                    => 'Autre durée :',
'ipboptions'                  => '2 heures:2 hours,1 jour:1 day,3 jours:3 days,1 semaine:1 week,2 semaines:2 weeks,1 mois:1 month,3 mois:3 months,6 mois:6 months,1 an:1 year,indéfiniment:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'autre',
'ipbotherreason'              => 'Motif différent ou supplémentaire :',
'ipbhidename'                 => 'Masquer le nom d’utilisateur des modifications et des listes',
'badipaddress'                => 'Adresse IP incorrecte',
'blockipsuccesssub'           => 'Blocage réussi',
'blockipsuccesstext'          => '[[Special:Contributions/$1|$1]] a été bloqué.<br />
Consultez la [[Special:IPBlockList|liste des adresses IP et comptes bloqués]] pour réviser les blocages.',
'ipb-edit-dropdown'           => 'Modifier les motifs de blocage par défaut',
'ipb-unblock-addr'            => 'Débloquer $1',
'ipb-unblock'                 => 'Débloquer un compte utilisateur ou une adresse IP',
'ipb-blocklist-addr'          => 'Blocages existants pour $1',
'ipb-blocklist'               => 'Voir les blocages existants',
'unblockip'                   => 'Débloquer un utilisateur ou une adresse IP',
'unblockiptext'               => 'Utilisez le formulaire ci-dessous pour rétablir l’accès aux modifications depuis une adresse IP ou un nom d’utilisateur.',
'ipusubmit'                   => 'Supprimer ce blocage',
'unblocked'                   => '[[User:$1|$1]] a été débloqué',
'unblocked-id'                => 'Le blocage $1 a été enlevé',
'ipblocklist'                 => 'Adresses IP et utilisateurs bloqués',
'ipblocklist-legend'          => 'Chercher un utilisateur bloqué',
'ipblocklist-username'        => 'Nom de l’utilisateur ou adresse IP :',
'ipblocklist-summary'         => 'La liste ci-dessous montre tous les utilisateurs et adresses IP bloqués, par ordre anti-chronologique. Consulter le [[Special:Log/block|journal de blocage]] pour voir les dernières actions de blocage et déblocage effectuées.',
'ipblocklist-submit'          => 'Rechercher',
'blocklistline'               => '$1 : $2 a bloqué $3 ; $4',
'infiniteblock'               => 'permanent',
'expiringblock'               => 'expire le $1',
'anononlyblock'               => 'utilisateur non enregistré uniquement',
'noautoblockblock'            => 'blocage automatique désactivé',
'createaccountblock'          => 'création de compte bloquée',
'emailblock'                  => 'courriel bloqué',
'ipblocklist-empty'           => 'La liste des adresses IP bloquées est actuellement vide.',
'ipblocklist-no-results'      => 'L’adresse IP ou l’utilisateur demandé n’est pas bloqué.',
'blocklink'                   => 'bloquer',
'unblocklink'                 => 'débloquer',
'contribslink'                => 'contributions',
'autoblocker'                 => 'Vous avez été bloqué automatiquement parce que votre adresse IP a été récemment utilisée par « [[User:$1|$1]] ».
Le motif fourni pour le blocage de $1 est : « $2 ».',
'blocklogpage'                => 'Journal des blocages',
'blocklogentry'               => 'a bloqué [[$1]] ; expiration : $2 $3',
'blocklogtext'                => 'Ceci est le journal des actions de blocages et déblocages d’utilisateurs.
Les adresses IP automatiquement bloquées ne sont pas listées.
Consultez la [[Special:IPBlockList|liste des IP bloquées]] pour voir les bannissements et blocages effectivement en cours.',
'unblocklogentry'             => 'a débloqué $1',
'block-log-flags-anononly'    => 'utilisateurs anonymes seulement',
'block-log-flags-nocreate'    => 'création de compte interdite',
'block-log-flags-noautoblock' => 'autoblocage des IP désactivé',
'block-log-flags-noemail'     => 'envoi de courriel interdit',
'range_block_disabled'        => 'Le droit administrateur de créer des blocages de plages IP est désactivé.',
'ipb_expiry_invalid'          => 'Durée d’expiration incorrecte.',
'ipb_already_blocked'         => '« $1 » est déjà bloqué',
'ipb_cant_unblock'            => 'Erreur : identifiant de blocage $1 non trouvé.
Il est possible qu’un déblocage ait déjà été effectué.',
'ipb_blocked_as_range'        => 'Erreur : l’adresse IP $1 n’est pas bloquée directement et ne peut donc pas être débloquée.
Elle fait cependant partie de la plage $2 qui, elle, peut être débloquée.',
'ip_range_invalid'            => 'Plage IP incorrecte.',
'blockme'                     => 'Bloquez-moi',
'proxyblocker'                => 'Bloqueur de mandataires',
'proxyblocker-disabled'       => 'Cette fonction est désactivée.',
'proxyblockreason'            => 'Votre adresse IP a été bloquée car il s’agit d’un mandataire ouvert.
Veuillez contacter votre fournisseur d’accès Internet ou votre support technique et l’informer de ce sérieux problème de sécurité.',
'proxyblocksuccess'           => 'Fait.',
'sorbsreason'                 => 'Votre adresse IP est listée comme mandataire ouvert dans le DNSBL utilisé par {{SITENAME}}.',
'sorbs_create_account_reason' => 'Votre adresse IP est listée comme mandataire ouvert dans le DNSBL utilisé par {{SITENAME}}.
Vous ne pouvez pas créer un compte.',

# Developer tools
'lockdb'              => 'Verrouiller la base de données',
'unlockdb'            => 'Déverrouiller la base de données',
'lockdbtext'          => 'Le verrouillage de la base de données empêchera tous les utilisateurs de modifier des pages, d’enregistrer leurs préférences, de modifier leur liste de suivi et d’effectuer toutes les autres opérations nécessitant des changements dans la base de données.
Veuillez confirmer que c’est bien là ce que vous voulez faire et que vous déverrouillerez la base dès que votre opération de maintenance sera terminée.',
'unlockdbtext'        => 'Le déverrouillage de la base de données permettra à nouveau à tous les utilisateurs de modifier des pages, de changer leurs préférences, de modifier leur liste de suivi et d’effectuer les autres opérations nécessitant des changements dans la base de données.
Veuillez confirmer que c’est bien là ce que vous voulez faire.',
'lockconfirm'         => 'Oui, je confirme que je souhaite verrouiller la base de données.',
'unlockconfirm'       => 'Oui, je confirme que je souhaite déverrouiller la base de données.',
'lockbtn'             => 'Verrouiller la base de données',
'unlockbtn'           => 'Déverrouiller la base de données',
'locknoconfirm'       => 'Vous n’avez pas coché la case de confirmation.',
'lockdbsuccesssub'    => 'Verrouillage de la base de données réussi',
'unlockdbsuccesssub'  => 'Verrouillage de la base de données supprimé',
'lockdbsuccesstext'   => 'La base de données a été verrouillée.<br />
N’oubliez pas de la [[Special:UnlockDB|déverrouiller]] lorsque vous aurez terminé votre opération de maintenance.',
'unlockdbsuccesstext' => 'La base de données a été déverrouillée.',
'lockfilenotwritable' => 'Le fichier de verrouillage de la base de données n’est pas inscriptible.
Pour bloquer ou débloquer la base de données, il doit être accessible par le serveur web.',
'databasenotlocked'   => 'La base de données n’est pas verrouillée.',

# Move page
'movepage'                => 'Renommer une page',
'movepagetext'            => "Utilisez le formulaire ci-dessous pour renommer une page, en déplaçant tout son historique vers le nouveau nom.
L’ancien titre deviendra une page de redirection vers le nouveau titre.
Vous pouvez mettre à jour automatiquement les redirections actuelles qui pointent vers le titre original.
Si vous choisissez de ne pas le faire, asssurez-vous de vérifier toute [[Special:DoubleRedirects|double redirection]] ou [[Special:BrokenRedirects|redirection cassée]].
Vous avez la responsabilité de vous assurer que les liens continuent de pointer vers leur destination supposée.

Notez que la page ne sera '''pas''' déplacée s’il existe déjà une page avec le nouveau titre, sauf si cette dernière est vide ou n’est qu’une redirection et si son historique de modifications est vierge.
Cela veut dire que vous pouvez renommer une page vers sa position d’origine si vous avez commis une erreur, mais que vous ne pouvez écraser une page déjà existante.

'''ATTENTION !'''
Ceci peut provoquer un changement drastique et imprévu pour une page souvent consultée ;
assurez-vous d’en avoir compris les conséquences avant de continuer.",
'movepagetalktext'        => "La page de discussion associée, si présente, sera automatiquement renommée '''sauf si :'''
* une page de discussion non vide existe déjà avec le nouveau nom, ou
* vous décochez la case ci-dessous.

Dans ces cas-là, vous devrez renommer ou fusionner cette page manuellement si vous le désirez.",
'movearticle'             => 'Renommer la page :',
'movenologin'             => 'Non connecté',
'movenologintext'         => 'Pour pouvoir renommer une page, vous devez être [[Special:UserLogin|connecté]] en tant qu’utilisateur enregistré et votre compte doit avoir une ancienneté suffisante.',
'movenotallowed'          => 'Vous n’avez pas la permission de renommer les pages.',
'newtitle'                => 'Vers le nouveau titre :',
'move-watch'              => 'Suivre cette page',
'movepagebtn'             => 'Renommer la page',
'pagemovedsub'            => 'Renommage réussi',
'movepage-moved'          => "<big>'''« $1 »''' a été renommé '''« $2 »'''</big>", # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Il existe déjà une page portant ce titre, ou le titre que vous avez choisi n’est pas correct.
Veuillez en choisir un autre.',
'cantmove-titleprotected' => 'Vous ne pouvez pas déplacer une page vers cet emplacement car la création de page avec ce nouveau titre a été protégée.',
'talkexists'              => "'''La page elle-même a été déplacée avec succès, mais la page de discussion n’a pas pu être déplacée car il en existait déjà une sous le nouveau nom. Veuillez les fusionner manuellement.'''",
'movedto'                 => 'renommé en',
'movetalk'                => 'Renommer aussi la page de discussion associée',
'talkpagemoved'           => 'La page de discussion correspondante a également été déplacée.',
'talkpagenotmoved'        => 'La page de discussion correspondante n’a <strong>pas</strong> été déplacée.',
'1movedto2'               => 'a renommé [[$1]] en [[$2]]',
'1movedto2_redir'         => 'a déplacé [[$1]] vers [[$2]] en écrasant sa redirection',
'movelogpage'             => 'Journal des renommages et déplacements',
'movelogpagetext'         => 'Voici la liste de toutes les pages renommées ou déplacées.',
'movereason'              => 'Motif du renommage :',
'revertmove'              => 'rétablir',
'delete_and_move'         => 'Supprimer et renommer',
'delete_and_move_text'    => '== Suppression requise ==
La page de destination « [[:$1]] » existe déjà.
Voulez-vous vraiment la supprimer pour permettre ce renommage ?',
'delete_and_move_confirm' => 'Oui, j’accepte de supprimer la page de destination pour permettre le renommage.',
'delete_and_move_reason'  => 'Page supprimée automatiquement pour permettre un renommage',
'selfmove'                => 'Les titres d’origine et de destination sont les mêmes ;
impossible de renommer une page sur elle-même.',
'immobile_namespace'      => 'Le titre de destination est d’un type spécial ; il est impossible de renommer des pages vers cet espace de noms.',

# Export
'export'            => 'Exporter des pages',
'exporttext'        => 'Vous pouvez exporter en XML le texte et l’historique d’une page ou d’un ensemble de pages ;
le résultat peut alors être importé dans un autre wiki utilisant le logiciel MediaWiki via la [[Special:Import|page d’importation]].

Pour exporter des pages, entrez leurs titres dans la boîte de texte ci-dessous, à raison d’un titre par ligne. Sélectionnez si vous désirez ou non la version actuelle avec toutes les anciennes versions, avec les lignes de l’historique de la page, ou simplement la page actuelle avec des informations sur la dernière modification.

Dans ce dernier cas vous pouvez aussi utiliser un lien, tel que [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] pour la page [[{{MediaWiki:Mainpage}}]].',
'exportcuronly'     => 'Exporter uniquement la version courante, sans l’historique complet',
'exportnohistory'   => "----
'''Note :''' l’exportation de l’historique complet des pages à l’aide de ce formulaire a été désactivée pour des raisons de performance.",
'export-submit'     => 'Exporter',
'export-addcattext' => 'Ajouter les pages de la catégorie :',
'export-addcat'     => 'Ajouter',
'export-download'   => 'Enregistrer dans un fichier',
'export-templates'  => 'Inclure les modèles',

# Namespace 8 related
'allmessages'               => 'Messages système',
'allmessagesname'           => 'Nom du message',
'allmessagesdefault'        => 'Texte par défaut',
'allmessagescurrent'        => 'Texte actuel',
'allmessagestext'           => 'Ceci est la liste des messages disponibles dans l’espace MediaWiki.
Veuillez visiter la [http://www.mediawiki.org/wiki/Localisation Localisation de MediaWiki] et [http://translatewiki.net/ translatewiki.net] si vous désirez contribuer à la localisation générique de MediaWiki.',
'allmessagesnotsupportedDB' => "Cette page '''{{ns:special}}:Allmessages''' n’est pas utilisable car '''\$wgUseDatabaseMessages''' a été désactivé.",
'allmessagesfilter'         => 'Filtre de noms de message (expression rationnelle) :',
'allmessagesmodified'       => 'N’afficher que les modifications',

# Thumbnails
'thumbnail-more'           => 'Agrandir',
'filemissing'              => 'Fichier manquant',
'thumbnail_error'          => 'Erreur lors de la création de la miniature : $1',
'djvu_page_error'          => 'Page DjVu hors limites',
'djvu_no_xml'              => 'Impossible de récupérer le XML pour le fichier DjVu',
'thumbnail_invalid_params' => 'Paramètres de la miniature incorrects',
'thumbnail_dest_directory' => 'Impossible de créer le répertoire de destination',

# Special:Import
'import'                     => 'Importer des pages',
'importinterwiki'            => 'Importation inter-wiki',
'import-interwiki-text'      => 'Sélectionnez un wiki et un titre de page à importer.
Les dates des versions et les noms des contributeurs seront préservés.
Toutes les actions d’importation inter-wiki sont consignées dans l’[[Special:Log/import|historique des importations]].',
'import-interwiki-history'   => 'Copier toutes les versions de l’historique de cette page',
'import-interwiki-submit'    => 'Importer',
'import-interwiki-namespace' => 'Espace de noms de destination :',
'importtext'                 => 'Veuillez exporter le fichier depuis le wiki d’origine en utilisant son [[Special:Export|outil d’exportation]].
Sauvegardez-le sur votre disque dur puis téléversez-le ici.',
'importstart'                => 'Importation des pages...',
'import-revision-count'      => '$1 version{{PLURAL:$1||s}}',
'importnopages'              => 'Aucune page à importer.',
'importfailed'               => 'Échec de l’importation : <nowiki>$1</nowiki>',
'importunknownsource'        => 'Type inconnu de la source à importer',
'importcantopen'             => 'Impossible d’ouvrir le fichier à importer',
'importbadinterwiki'         => 'Mauvais lien inter-wiki',
'importnotext'               => 'Vide ou sans texte',
'importsuccess'              => 'L’importation a réussi !',
'importhistoryconflict'      => 'Un conflit a été détecté dans l’historique des versions (cette page a pu être importée auparavant).',
'importnosources'            => 'Aucune source d’importation inter-wiki n’a été définie et les téléversements directs d’historiques sont désactivés.',
'importnofile'               => 'Aucun fichier d’importation n’a été téléversé.',
'importuploaderrorsize'      => 'Le téléversement du fichier à importer a échoué.
Sa taille est supérieure au maximum autorisé pour les téléversements.',
'importuploaderrorpartial'   => 'Le téléversement du fichier à importer a échoué.
Son contenu n’a été transféré que partiellement.',
'importuploaderrortemp'      => 'Le téléversement du fichier à importer a échoué.
Un dossier temporaire est manquant.',
'import-parse-failure'       => 'Échec lors de l’analyse du XML à importer',
'import-noarticle'           => 'Aucune page à importer !',
'import-nonewrevisions'      => 'Toutes les versions ont été importées auparavant.',
'xml-error-string'           => '$1 à la ligne $2, colonne $3 (octet $4) : $5',
'import-token-mismatch'      => 'Perte des données de session. Veuillez réessayez.',
'import-invalid-interwiki'   => 'Impossible d’importer depuis le wiki spécifié.',

# Import log
'importlogpage'                    => 'Journal des importations',
'importlogpagetext'                => 'Importations administratives de pages avec leur historique de modifications depuis d’autres wikis.',
'import-logentry-upload'           => 'a importé [[$1]] par téléversement de fichier',
'import-logentry-upload-detail'    => '$1 version{{PLURAL:$1||s}}',
'import-logentry-interwiki'        => 'a importé [[$1]] par transwiki',
'import-logentry-interwiki-detail' => '$1 version{{PLURAL:$1||s}} depuis $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Votre page utilisateur',
'tooltip-pt-anonuserpage'         => 'La page utilisateur de l’IP avec laquelle vous contribuez',
'tooltip-pt-mytalk'               => 'Votre page de discussion',
'tooltip-pt-anontalk'             => 'La page de discussion pour les contributions depuis cette adresse IP',
'tooltip-pt-preferences'          => 'Vos préférences',
'tooltip-pt-watchlist'            => 'La liste des pages dont vous suivez les modifications',
'tooltip-pt-mycontris'            => 'La liste de vos contributions',
'tooltip-pt-login'                => 'Vous êtes invité à vous identifier, mais ce n’est pas obligatoire.',
'tooltip-pt-anonlogin'            => 'Vous êtes invité à vous identifier, mais ce n’est pas obligatoire.',
'tooltip-pt-logout'               => 'Se déconnecter',
'tooltip-ca-talk'                 => 'Discussion au sujet de cette page de contenu',
'tooltip-ca-edit'                 => 'Vous pouvez modifier cette page.
Veuillez utiliser le bouton de prévisualisation avant d’enregistrer.',
'tooltip-ca-addsection'           => 'Commencer une nouvelle section',
'tooltip-ca-viewsource'           => 'Cette page est protégée.
Vous pouvez toutefois en visualiser la source.',
'tooltip-ca-history'              => 'Les versions passées de cette page (avec leurs contributeurs)',
'tooltip-ca-protect'              => 'Protéger cette page',
'tooltip-ca-delete'               => 'Supprimer cette page',
'tooltip-ca-undelete'             => 'Rétablir les modifications faites sur cette page avant son effacement',
'tooltip-ca-move'                 => 'Renommer cette page',
'tooltip-ca-watch'                => 'Ajouter cette page à votre liste de suivi',
'tooltip-ca-unwatch'              => 'Retirer cette page de votre liste de suivi',
'tooltip-search'                  => 'Rechercher dans {{SITENAME}}',
'tooltip-search-go'               => 'Aller vers une page portant exactement ce nom si elle existe.',
'tooltip-search-fulltext'         => 'Rechercher les pages comportant ce texte.',
'tooltip-p-logo'                  => 'Page principale',
'tooltip-n-mainpage'              => "Visiter la page d'accueil du site",
'tooltip-n-portal'                => 'À propos du projet',
'tooltip-n-currentevents'         => 'Trouver les informations de fond sur l’actualité du moment',
'tooltip-n-recentchanges'         => 'Liste des modifications récentes sur le wiki',
'tooltip-n-randompage'            => 'Afficher une page au hasard',
'tooltip-n-help'                  => 'Aide',
'tooltip-n-sitesupport'           => 'Aidez-nous',
'tooltip-t-whatlinkshere'         => 'Liste des pages liées à celle-ci',
'tooltip-t-recentchangeslinked'   => 'Liste des modifications récentes des pages liées à celle-ci',
'tooltip-feed-rss'                => 'Flux RSS pour cette page',
'tooltip-feed-atom'               => 'Flux Atom pour cette page',
'tooltip-t-contributions'         => 'Voir la liste des contributions de cet utilisateur',
'tooltip-t-emailuser'             => 'Envoyer un courriel à cet utilisateur',
'tooltip-t-upload'                => 'Envoyer une image ou fichier média sur le serveur',
'tooltip-t-specialpages'          => 'Liste de toutes les pages spéciales',
'tooltip-t-print'                 => 'Version imprimable de cette page',
'tooltip-t-permalink'             => 'Lien permanent vers cette version de la page',
'tooltip-ca-nstab-main'           => 'Voir la page de contenu',
'tooltip-ca-nstab-user'           => 'Voir la page utilisateur',
'tooltip-ca-nstab-media'          => 'Voir la page du média',
'tooltip-ca-nstab-special'        => 'Ceci est une page spéciale, vous ne pouvez pas la modifier.',
'tooltip-ca-nstab-project'        => 'Voir la page du projet',
'tooltip-ca-nstab-image'          => 'Voir la page du fichier',
'tooltip-ca-nstab-mediawiki'      => 'Voir le message système',
'tooltip-ca-nstab-template'       => 'Voir le modèle',
'tooltip-ca-nstab-help'           => 'Voir la page d’aide',
'tooltip-ca-nstab-category'       => 'Voir la page de la catégorie',
'tooltip-minoredit'               => 'Marquer mes modifications comme mineures',
'tooltip-save'                    => 'Publier vos modifications',
'tooltip-preview'                 => 'Merci de prévisualiser vos modifications avant de les publier',
'tooltip-diff'                    => 'Permet de visualiser les changements que vous avez effectués',
'tooltip-compareselectedversions' => 'Afficher les différences entre deux versions de cette page',
'tooltip-watch'                   => 'Ajouter cette page à votre liste de suivi',
'tooltip-recreate'                => 'Recréer la page même si celle-ci a été effacée',
'tooltip-upload'                  => 'Démarrer le téléversement',

# Stylesheets
'common.css'   => '/* Le CSS placé ici sera appliqué à tous les habillages. */',
'monobook.css' => '/* Le CSS placé ici affectera les utilisateurs de l’habillage Monobook. */',

# Scripts
'common.js'   => '/* Tout JavaScript ici sera chargé avec chaque page accédée par n’importe quel utilisateur. */',
'monobook.js' => '/* Tout JavaScript ici sera chargé avec les pages accédées par les utilisateurs de l’habillage MonoBook uniquement. */',

# Metadata
'nodublincore'      => 'Les métadonnées « Dublin Core RDF » sont désactivées sur ce serveur.',
'nocreativecommons' => 'Les métadonnées « Creative Commons RDF » sont désactivées sur ce serveur.',
'notacceptable'     => 'Ce serveur wiki ne peut pas fournir les données dans un format que votre client est capable de lire.',

# Attribution
'anonymous'        => '{{PLURAL:$1|Utilisateur non enregistré|Utilisateurs non enregistrés}} de {{SITENAME}}',
'siteuser'         => 'Utilisateur $1 de {{SITENAME}}',
'lastmodifiedatby' => 'Cette page a été modifiée pour la dernière fois le $1 à $2 par $3.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Basé sur le travail de $1.',
'others'           => 'autres',
'siteusers'        => '{{PLURAL:$2|utilisateur|utilisateurs}} $1 de {{SITENAME}}',
'creditspage'      => 'Crédits de la page',
'nocredits'        => 'Il n’y a pas d’informations d’attribution disponibles pour cette page.',

# Spam protection
'spamprotectiontitle'    => 'Page automatiquement protégée pour cause de pourriel',
'spamprotectiontext'     => 'La page que vous avez voulu publier a été bloquée par le filtre anti-pourriel.
Ceci est probablement causé par un lien sur liste noire pointant vers un site externe.',
'spamprotectionmatch'    => "La chaîne de caractères « '''$1''' » a déclenché le détecteur de pourriel.",
'subcategorycount'       => '{{PLURAL:$1|Une sous-catégorie est listée |$1 sous-catégories sont listées}} ci-dessous. Si un lien « (200 précédents) » ou « (200 suivants) » est présent ci-dessus, il peut mener à d’autres sous-catégories.',
'categoryarticlecount'   => 'Il y a {{PLURAL:$1|un article|$1 articles}} dans cette catégorie.',
'category-media-count'   => 'Il y a {{PLURAL:un fichier|$1 fichiers}} dans cette catégorie.',
'listingcontinuesabbrev' => '(suite)',
'spambot_username'       => 'Nettoyage de pourriels par MediaWiki',
'spam_reverting'         => 'Rétablissement de la dernière version ne contenant pas de lien vers $1',
'spam_blanking'          => 'Toutes les versions contenant des liens vers $1 sont blanchies',

# Info page
'infosubtitle'   => 'Informations pour la page',
'numedits'       => 'Nombre de modifications : $1',
'numtalkedits'   => 'Nombre de modifications (page de discussion) : $1',
'numwatchers'    => 'Nombre de contributeurs ayant la page dans leur liste de suivi : $1',
'numauthors'     => 'Nombre d’auteurs distincts : $1',
'numtalkauthors' => 'Nombre d’auteurs distincts (page de discussion) : $1',

# Math options
'mw_math_png'    => 'Toujours produire une image PNG',
'mw_math_simple' => 'HTML si très simple, autrement PNG',
'mw_math_html'   => 'HTML si possible, autrement PNG',
'mw_math_source' => 'Laisser le code TeX original',
'mw_math_modern' => 'Pour les navigateurs modernes',
'mw_math_mathml' => 'MathML',

# Patrolling
'markaspatrolleddiff'                 => 'Marquer comme n’étant pas un vandalisme',
'markaspatrolledtext'                 => 'Marquer cette page comme non vandalisée',
'markedaspatrolled'                   => 'Marqué comme non vandalisé',
'markedaspatrolledtext'               => 'La version sélectionnée a été marquée comme non vandalisée.',
'rcpatroldisabled'                    => 'La fonction de patrouille des modifications récentes n’est pas activée.',
'rcpatroldisabledtext'                => 'La fonctionnalité de surveillance des modifications récentes n’est pas activée.',
'markedaspatrollederror'              => 'Ne peut être marqué comme non vandalisé',
'markedaspatrollederrortext'          => 'Vous devez sélectionner une version pour pouvoir la marquer comme non vandalisée.',
'markedaspatrollederror-noautopatrol' => 'Vous n’avez pas le droit de marquer vos propres modifications comme surveillées.',

# Patrol log
'patrol-log-page' => 'Journal des versions patrouillées',
'patrol-log-line' => 'a marqué la version $1 de $2 comme vérifiée $3',
'patrol-log-auto' => '(automatique)',
'patrol-log-diff' => 'v$1',

# Image deletion
'deletedrevision'                 => 'L’ancienne version $1 a été supprimée',
'filedeleteerror-short'           => 'Erreur lors de la suppression du fichier : $1',
'filedeleteerror-long'            => 'Des erreurs ont été rencontrées lors de la suppression du fichier :

$1',
'filedelete-missing'              => 'Le fichier « $1 » ne peut pas être supprimé parce qu’il n’existe pas.',
'filedelete-old-unregistered'     => 'La version du fichier spécifiée « $1 » n’est pas dans la base de données.',
'filedelete-current-unregistered' => 'Le fichier spécifié « $1 » n’est pas dans la base de données.',
'filedelete-archive-read-only'    => 'Le dossier d’archivage « $1 » n’est pas modifiable par le serveur.',

# Browsing diffs
'previousdiff' => '← Modification précédente',
'nextdiff'     => 'Modification suivante →',

# Media information
'mediawarning'         => "'''Attention :''' ce fichier pourrait contenir du code malveillant, votre système pouvant être compromis lors de son exécution.<hr />",
'imagemaxsize'         => 'Format maximal pour les images dans les pages de description d’images :',
'thumbsize'            => 'Taille de la miniature :',
'widthheightpage'      => '$1×$2, $3 pages',
'file-info'            => 'Taille du fichier : $1, type MIME : $2',
'file-info-size'       => '($1 × $2 pixels, taille du fichier : $3, type MIME : $4)',
'file-nohires'         => '<small>Pas de plus haute résolution disponible.</small>',
'svg-long-desc'        => '(Fichier SVG, résolution de $1 × $2 pixels, taille : $3)',
'show-big-image'       => 'Image en plus haute résolution',
'show-big-image-thumb' => '<small>Taille de cet aperçu : $1 × $2 pixels</small>',

# Special:Newimages
'newimages'    => 'Galerie des nouveaux fichiers',
'showhidebots' => '($1 bots)',
'noimages'     => 'Aucune image à afficher.',

# Bad image list
'bad_image_list' => 'Le format est le suivant :

Seules les listes d’énumération (commençant par *) sont prises en compte. Le premier lien d’une ligne doit être celui d’une mauvaise image.
Les autres liens sur la même ligne sont considérés comme des exceptions, par exemple des pages sur lesquels l’image peut apparaître.',

# Metadata
'metadata'          => 'Métadonnées',
'metadata-help'     => 'Ce fichier contient des informations supplémentaires, probablement ajoutées par l’appareil photo numérique ou le numériseur utilisé pour le créer. Si le fichier a été modifié depuis son état original, certains détails peuvent ne pas refléter entièrement l’image modifiée.',
'metadata-expand'   => 'Montrer les informations détaillées',
'metadata-collapse' => 'Cacher les informations détaillées',
'metadata-fields'   => 'Les champs de métadonnées d’EXIF listés dans ce message seront inclus dans la page de description de l’image quand la table de métadonnées sera réduite. Les autres champs seront cachés par défaut.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Largeur',
'exif-imagelength'                 => 'Hauteur',
'exif-bitspersample'               => 'Bits par composante',
'exif-compression'                 => 'Type de compression',
'exif-photometricinterpretation'   => 'Modèle colorimétrique',
'exif-orientation'                 => 'Orientation',
'exif-samplesperpixel'             => 'Composantes par pixel',
'exif-planarconfiguration'         => 'Arrangement des données',
'exif-ycbcrsubsampling'            => 'Taux de sous-échantillonnage de Y à C',
'exif-ycbcrpositioning'            => 'Positionnement YCbCr',
'exif-xresolution'                 => 'Résolution horizontale',
'exif-yresolution'                 => 'Résolution verticale',
'exif-resolutionunit'              => 'Unité de résolution',
'exif-stripoffsets'                => 'Emplacement des données de l’image',
'exif-rowsperstrip'                => 'Nombre de lignes par bande',
'exif-stripbytecounts'             => 'Taille en octets par bande',
'exif-jpeginterchangeformat'       => 'Position du SOI JPEG',
'exif-jpeginterchangeformatlength' => 'Taille en octets des données JPEG',
'exif-transferfunction'            => 'Fonction de transfert',
'exif-whitepoint'                  => 'Chromaticité du point blanc',
'exif-primarychromaticities'       => 'Chromaticité des primaires',
'exif-ycbcrcoefficients'           => 'Coefficients YCbCr',
'exif-referenceblackwhite'         => 'Valeurs de référence noir et blanc',
'exif-datetime'                    => 'Date de modification',
'exif-imagedescription'            => 'Description de l’image',
'exif-make'                        => 'Fabricant de l’appareil',
'exif-model'                       => 'Modèle de l’appareil',
'exif-software'                    => 'Logiciel utilisé',
'exif-artist'                      => 'Auteur',
'exif-copyright'                   => 'Détenteur du droit d’auteur',
'exif-exifversion'                 => 'Version EXIF',
'exif-flashpixversion'             => 'Version FlashPix',
'exif-colorspace'                  => 'Espace colorimétrique',
'exif-componentsconfiguration'     => 'Signification de chaque composante',
'exif-compressedbitsperpixel'      => 'Mode de compression de l’image',
'exif-pixelydimension'             => 'Hauteur d’image valide',
'exif-pixelxdimension'             => 'Largeur d’image valide',
'exif-makernote'                   => 'Notes du fabricant',
'exif-usercomment'                 => 'Commentaires de l’utilisateur',
'exif-relatedsoundfile'            => 'Fichier audio associé',
'exif-datetimeoriginal'            => 'Date de la prise originelle',
'exif-datetimedigitized'           => 'Date de la numérisation',
'exif-subsectime'                  => 'Date de modification',
'exif-subsectimeoriginal'          => 'Date de la prise originelle',
'exif-subsectimedigitized'         => 'Date de la numérisation',
'exif-exposuretime'                => 'Temps d’exposition',
'exif-exposuretime-format'         => '$1 sec ($2)',
'exif-fnumber'                     => 'Ouverture',
'exif-exposureprogram'             => 'Programme d’exposition',
'exif-spectralsensitivity'         => 'Sensitivité spectrale',
'exif-isospeedratings'             => 'Sensibilité ISO',
'exif-oecf'                        => 'Fonction de conversion opto-électronique',
'exif-shutterspeedvalue'           => 'Vitesse d’obturation',
'exif-aperturevalue'               => 'Ouverture',
'exif-brightnessvalue'             => 'Luminance',
'exif-exposurebiasvalue'           => 'Correction d’exposition',
'exif-maxaperturevalue'            => 'Ouverture maximale',
'exif-subjectdistance'             => 'Distance du sujet',
'exif-meteringmode'                => 'Mode de mesure',
'exif-lightsource'                 => 'Source de lumière',
'exif-flash'                       => 'Flash',
'exif-focallength'                 => 'Longueur focale',
'exif-subjectarea'                 => 'Emplacement du sujet',
'exif-flashenergy'                 => 'Énergie du flash',
'exif-spatialfrequencyresponse'    => 'Fréquence spatiale',
'exif-focalplanexresolution'       => 'Résolution horizontale du plan focal',
'exif-focalplaneyresolution'       => 'Résolution verticale du plan focal',
'exif-focalplaneresolutionunit'    => 'Unité de résolution du plan focal',
'exif-subjectlocation'             => 'Localisation du sujet',
'exif-exposureindex'               => 'Index d’exposition',
'exif-sensingmethod'               => 'Type de capteur',
'exif-filesource'                  => 'Source du fichier',
'exif-scenetype'                   => 'Type de scène',
'exif-cfapattern'                  => 'Motif CFA',
'exif-customrendered'              => 'Rendu personnalisé',
'exif-exposuremode'                => 'Mode d’exposition',
'exif-whitebalance'                => 'Balance des blancs',
'exif-digitalzoomratio'            => 'Taux de zoom numérique',
'exif-focallengthin35mmfilm'       => 'Longueur focale pour un film 35 mm',
'exif-scenecapturetype'            => 'Type de capture de la scène',
'exif-gaincontrol'                 => 'Contrôle du gain',
'exif-contrast'                    => 'Contraste',
'exif-saturation'                  => 'Saturation',
'exif-sharpness'                   => 'Netteté',
'exif-devicesettingdescription'    => 'Description de la configuration du dispositif',
'exif-subjectdistancerange'        => 'Distance du sujet',
'exif-imageuniqueid'               => 'Identifiant unique de l’image',
'exif-gpsversionid'                => 'Version de la balise GPS',
'exif-gpslatituderef'              => 'Référence pour la latitude',
'exif-gpslatitude'                 => 'Latitude',
'exif-gpslongituderef'             => 'Référence pour la longitude',
'exif-gpslongitude'                => 'Longitude',
'exif-gpsaltituderef'              => 'Référence d’altitude (0=altitude, 1=profondeur)',
'exif-gpsaltitude'                 => 'Altitude',
'exif-gpstimestamp'                => 'Heure GPS (horloge atomique)',
'exif-gpssatellites'               => 'Satellites utilisés pour la mesure',
'exif-gpsstatus'                   => 'État du récepteur',
'exif-gpsmeasuremode'              => 'Mode de mesure',
'exif-gpsdop'                      => 'Précision de la mesure',
'exif-gpsspeedref'                 => 'Unité de vitesse du récepteur GPS',
'exif-gpsspeed'                    => 'Vitesse du récepteur GPS',
'exif-gpstrackref'                 => 'Référence pour la direction du mouvement',
'exif-gpstrack'                    => 'Direction du mouvement',
'exif-gpsimgdirectionref'          => 'Référence pour la direction de l’image',
'exif-gpsimgdirection'             => 'Direction de l’image',
'exif-gpsmapdatum'                 => 'Système géodésique utilisé',
'exif-gpsdestlatituderef'          => 'Référence pour la latitude de la destination',
'exif-gpsdestlatitude'             => 'Latitude de la destination',
'exif-gpsdestlongituderef'         => 'Référence pour la longitude de la destination',
'exif-gpsdestlongitude'            => 'Longitude de la destination',
'exif-gpsdestbearingref'           => 'Référence pour le relèvement de la destination',
'exif-gpsdestbearing'              => 'Relèvement de la destination',
'exif-gpsdestdistanceref'          => 'Référence pour la distance à la destination',
'exif-gpsdestdistance'             => 'Distance à la destination',
'exif-gpsprocessingmethod'         => 'Nom de la méthode de traitement du GPS',
'exif-gpsareainformation'          => 'Nom de la zone GPS',
'exif-gpsdatestamp'                => 'Date GPS',
'exif-gpsdifferential'             => 'Correction différentielle GPS',

# EXIF attributes
'exif-compression-1' => 'Non compressé',

'exif-unknowndate' => 'Date inconnue',

'exif-orientation-1' => 'Normale', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Inversée horizontalement', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Tournée de 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Inversée verticalement', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Tournée de 90° dans le sens antihoraire et inversée verticalement', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Tournée de 90° dans le sens horaire', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Tournée de 90° dans le sens horaire et inversée verticalement', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Tournée de 90° dans le sens antihoraire', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'Données contiguës',
'exif-planarconfiguration-2' => 'Données séparées',

'exif-colorspace-ffff.h' => 'Non calibré',

'exif-componentsconfiguration-0' => 'N’existe pas',
'exif-componentsconfiguration-5' => 'V',

'exif-exposureprogram-0' => 'Indéfini',
'exif-exposureprogram-1' => 'Manuel',
'exif-exposureprogram-2' => 'Programme normal',
'exif-exposureprogram-3' => 'Priorité à l’ouverture',
'exif-exposureprogram-4' => 'Priorité à l’obturateur',
'exif-exposureprogram-5' => 'Programme création (préférence à la profondeur de champ)',
'exif-exposureprogram-6' => 'Programme action (préférence à la vitesse d’obturation)',
'exif-exposureprogram-7' => 'Mode portrait (pour clichés de près avec arrière-plan flou)',
'exif-exposureprogram-8' => 'Mode paysage (pour des clichés de paysages nets)',

'exif-subjectdistance-value' => '{{PLURAL:$1|$1 mètre|$1 mètres}}',

'exif-meteringmode-0'   => 'Inconnu',
'exif-meteringmode-1'   => 'Moyenne',
'exif-meteringmode-2'   => 'Moyenne pondérée au centre',
'exif-meteringmode-3'   => 'Spot',
'exif-meteringmode-4'   => 'Multi-spot',
'exif-meteringmode-5'   => 'Modèle',
'exif-meteringmode-6'   => 'Partielle',
'exif-meteringmode-255' => 'Autre',

'exif-lightsource-0'   => 'Inconnue',
'exif-lightsource-1'   => 'Lumière du jour',
'exif-lightsource-2'   => 'Fluorescent',
'exif-lightsource-3'   => 'Tungstène (lumière incandescente)',
'exif-lightsource-4'   => 'Flash',
'exif-lightsource-9'   => 'Temps clair',
'exif-lightsource-10'  => 'Temps nuageux',
'exif-lightsource-11'  => 'Ombre',
'exif-lightsource-12'  => 'Éclairage fluorescent « lumière du jour » (D 5700 – 7100 K)',
'exif-lightsource-13'  => 'Éclairage fluorescent blanc « jour » (N 4600 – 5400 K)',
'exif-lightsource-14'  => 'Éclairage fluorescent blanc « froid » (W 3900 – 4500 K)',
'exif-lightsource-15'  => 'Éclairage fluorescent blanc (WW 3200 – 3700 K)',
'exif-lightsource-17'  => 'Lumière standard A',
'exif-lightsource-18'  => 'Lumière standard B',
'exif-lightsource-19'  => 'Lumière standard C',
'exif-lightsource-24'  => 'Tungstène ISO de studio',
'exif-lightsource-255' => 'Autre source de lumière',

'exif-focalplaneresolutionunit-2' => 'Pouce',

'exif-sensingmethod-1' => 'Non défini',
'exif-sensingmethod-2' => 'Capteur de couleur à une puce',
'exif-sensingmethod-3' => 'Capteur de couleur à deux puces',
'exif-sensingmethod-4' => 'Capteur de couleur à trois puces',
'exif-sensingmethod-5' => 'Capteur de couleur séquentiel',
'exif-sensingmethod-7' => 'Capteur trilinéaire',
'exif-sensingmethod-8' => 'Capteur de couleur linéaire séquentiel',

'exif-filesource-3' => 'Appareil photo numérique',

'exif-scenetype-1' => 'Image directement photographiée',

'exif-customrendered-0' => 'Procédé normal',
'exif-customrendered-1' => 'Procédé personnalisé',

'exif-exposuremode-0' => 'Automatique',
'exif-exposuremode-1' => 'Manuelle',
'exif-exposuremode-2' => 'Fourchette automatique',

'exif-whitebalance-0' => 'Automatique',
'exif-whitebalance-1' => 'Manuelle',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Paysage',
'exif-scenecapturetype-2' => 'Portrait',
'exif-scenecapturetype-3' => 'Scène de nuit',

'exif-gaincontrol-0' => 'Aucun',
'exif-gaincontrol-1' => 'Gain faiblement positif',
'exif-gaincontrol-2' => 'Gain fortement positif',
'exif-gaincontrol-3' => 'Gain faiblement négatif',
'exif-gaincontrol-4' => 'Gain fortement négatif',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Faible',
'exif-contrast-2' => 'Fort',

'exif-saturation-0' => 'Normale',
'exif-saturation-1' => 'Faible',
'exif-saturation-2' => 'Élevée',

'exif-sharpness-0' => 'Normale',
'exif-sharpness-1' => 'Douce',
'exif-sharpness-2' => 'Dure',

'exif-subjectdistancerange-0' => 'Inconnue',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Rapproché',
'exif-subjectdistancerange-3' => 'Distant',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Nord',
'exif-gpslatitude-s' => 'Sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Est',
'exif-gpslongitude-w' => 'Ouest',

'exif-gpsstatus-a' => 'Mesure en cours',
'exif-gpsstatus-v' => 'Interopérabilité de la mesure',

'exif-gpsmeasuremode-2' => 'Mesure à 2 dimensions',
'exif-gpsmeasuremode-3' => 'Mesure à 3 dimensions',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilomètre par heure',
'exif-gpsspeed-m' => 'Mile par heure',
'exif-gpsspeed-n' => 'Nœud',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Vrai Nord',
'exif-gpsdirection-m' => 'Nord magnétique',

# External editor support
'edit-externally'      => 'Modifier ce fichier en utilisant une application externe',
'edit-externally-help' => "(Consulter [http://www.mediawiki.org/wiki/Manual:External_editors/fr les instructions d'installation] pour plus d’informations)",

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'toutes',
'imagelistall'     => 'toutes',
'watchlistall2'    => 'tout',
'namespacesall'    => 'Tous',
'monthsall'        => 'tous',

# E-mail address confirmation
'confirmemail'            => 'Confirmer l’adresse de courriel',
'confirmemail_noemail'    => 'Vous n’avez pas défini une adresse de courriel valide dans vos [[Special:Preferences|préférences]].',
'confirmemail_text'       => 'Ce wiki nécessite la vérification de votre adresse de courriel avant de pouvoir utiliser toute fonction de messagerie.
Utilisez le bouton ci-dessous pour envoyer un courriel de confirmation à votre adresse.
Le courriel inclura un lien comportant un code à usage unique et limité dans le temps ;
chargez ce lien dans votre navigateur pour confirmer que votre adresse de courriel est valide.',
'confirmemail_pending'    => '<div class="error"> Un code de confirmation vous a déjà été envoyé par courriel ; si vous venez de créer votre compte, veuillez attendre quelques minutes que le courriel arrive avant de demander un nouveau code. </div>',
'confirmemail_send'       => 'Envoyer un code de confirmation',
'confirmemail_sent'       => 'Courriel de confirmation envoyé',
'confirmemail_oncreate'   => 'Un code de confirmation a été envoyé à votre adresse de courriel.
Ce code n’est pas requis pour vous identifier sur ce wiki, mais vous devrez le fournir pour activer toute fonctionnalité basée sur les courriels.',
'confirmemail_sendfailed' => '{{SITENAME}} n’a pas pu vous envoyer le courriel de confirmation.
Veuillez vérifiez que votre adresse courriel ne comprend aucun caractère incorrect.

Le programme d’envoi de courriel a retourné l’indication suivante : $1',
'confirmemail_invalid'    => 'Code de confirmation incorrect.
Celui-ci a peut-être expiré.',
'confirmemail_needlogin'  => 'Vous devez $1 pour confirmer votre adresse de courriel.',
'confirmemail_success'    => 'Votre adresse de courriel a été confirmée.
Vous pouvez maintenant vous [[Special:UserLogin|identifier]] et profiter du wiki.',
'confirmemail_loggedin'   => 'Votre adresse de courriel est maintenant confirmée.',
'confirmemail_error'      => 'Un problème est survenu lors de l’enregistrement de votre confirmation.',
'confirmemail_subject'    => 'Confirmation d’adresse de courriel pour {{SITENAME}}',
'confirmemail_body'       => 'Quelqu’un, probablement vous avec l’adresse IP $1, a enregistré un compte « $2 » avec cette adresse de courriel sur le site {{SITENAME}}.

Pour confirmer que ce compte vous appartient vraiment et activer les fonctions de messagerie sur {{SITENAME}}, veuillez suivre le lien ci-dessous dans votre navigateur :

$3

S’il ne s’agit pas de vous, n’ouvrez pas le lien. Ce code de confirmation expirera le $4.',

# Scary transclusion
'scarytranscludedisabled' => '[La transclusion interwiki est désactivée]',
'scarytranscludefailed'   => '[La récupération de modèle a échoué pour $1]',
'scarytranscludetoolong'  => '[L’URL est trop longue]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks"> Rétroliens vers cette page :<br />
$1
</div>',
'trackbackremove'   => '([$1 Supprimer])',
'trackbacklink'     => 'Rétrolien',
'trackbackdeleteok' => 'Le rétrolien a été supprimé avec succès.',

# Delete conflict
'deletedwhileediting' => "'''Attention''' : cette page a été supprimée après que vous avez commencé à la modifier !",
'confirmrecreate'     => "L’utilisateur [[User:$1|$1]] ([[User talk:$1|Discussion]]) a supprimé cette page, alors que vous aviez commencé à l’éditer, pour le motif suivant :
: ''$2''
Veuillez confirmer que vous désirez réellement recréer cette page.",
'recreate'            => 'Recréer',

# HTML dump
'redirectingto' => 'Redirection vers [[:$1]]',

# action=purge
'confirm_purge'        => 'Voulez-vous rafraîchir cette page (purger le cache) ? $1',
'confirm_purge_button' => 'Confirmer',

# AJAX search
'searchcontaining' => 'Chercher les articles contenant « $1 ».',
'searchnamed'      => 'Chercher les articles nommés « $1 ».',
'articletitles'    => 'Articles commençant par « $1 »',
'hideresults'      => 'Cacher les résultats',
'useajaxsearch'    => 'Utiliser la recherche AJAX',

# Separators for various lists
'semicolon-separator' => '&nbsp;;&#32;',

# Multipage image navigation
'imgmultipageprev' => '← page précédente',
'imgmultipagenext' => 'page suivante →',
'imgmultigo'       => 'Accéder !',
'imgmultigotopre'  => 'Accéder à la page',

# Table pager
'ascending_abbrev'         => 'crois.',
'descending_abbrev'        => 'décr.',
'table_pager_next'         => 'Page suivante',
'table_pager_prev'         => 'Page précédente',
'table_pager_first'        => 'Première page',
'table_pager_last'         => 'Dernière page',
'table_pager_limit'        => 'Montrer $1 élément{{PLURAL:$1||s}} par page',
'table_pager_limit_submit' => 'Accéder',
'table_pager_empty'        => 'Aucun résultat',

# Auto-summaries
'autosumm-blank'   => 'Page blanchie',
'autosumm-replace' => 'Contenu remplacé par « $1 »',
'autoredircomment' => 'Page redirigée vers [[$1]]',
'autosumm-new'     => 'Page créée avec « $1 »',

# Size units
'size-bytes'     => '$1 o',
'size-kilobytes' => '$1 Kio',
'size-megabytes' => '$1 Mio',
'size-gigabytes' => '$1 Gio',

# Live preview
'livepreview-loading' => 'Chargement...',
'livepreview-ready'   => 'Chargement... terminé !',
'livepreview-failed'  => 'L’aperçu rapide a échoué !
Essayez la prévisualisation normale.',
'livepreview-error'   => 'Impossible de se connecter : $1 « $2 ».
Essayez la prévisualisation normale.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Les modifications datant de moins de $1 secondes peuvent ne pas apparaître dans cette liste.',
'lag-warn-high'   => 'En raison d’une forte charge des bases de données, les modifications datant de moins de $1 secondes peuvent ne pas apparaître dans cette liste.',

# Watchlist editor
'watchlistedit-numitems'       => 'Votre liste de suivi contient {{PLURAL:$1|un titre|$1 titres}}, sans compter les pages de discussion.',
'watchlistedit-noitems'        => 'Votre liste de suivi ne contient aucun titre.',
'watchlistedit-normal-title'   => 'Modifier la liste de suivi',
'watchlistedit-normal-legend'  => 'Retirer des titres de la liste de suivi',
'watchlistedit-normal-explain' => 'Les titres de votre liste de suivi sont visibles ci-dessous.
Pour retirer un titre de la liste (et sa page de discussion), cochez la case à côté puis cliquez sur le bouton « Retirer les titres sélectionnés ».
Vous pouvez aussi [[Special:Watchlist/raw|modifier la liste en mode brut]].',
'watchlistedit-normal-submit'  => 'Retirer les titres sélectionnés',
'watchlistedit-normal-done'    => '{{PLURAL:$1|Un titre a été enlevé|$1 titres ont été enlevés}} de votre liste de suivi :',
'watchlistedit-raw-title'      => 'Modifier la liste de suivi en mode brut',
'watchlistedit-raw-legend'     => 'Modification de la liste de suivi en mode brut',
'watchlistedit-raw-explain'    => 'Les titres de votre liste de suivi sont affichés ci-dessous et peuvent être modifiés en les ajoutant ou les retirant de la liste (un titre par ligne).
Lorsque vous avez fini, cliquez sur le bouton « Mettre à jour la liste de suivi » en bas.
Vous pouvez aussi [[Special:Watchlist/edit|utiliser l’éditeur normal]].',
'watchlistedit-raw-titles'     => 'Titres :',
'watchlistedit-raw-submit'     => 'Mettre à jour la liste de suivi',
'watchlistedit-raw-done'       => 'Votre liste de suivi a été mise à jour.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|Un titre a été ajouté|$1 titres ont été ajoutés}} :',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|Un titre a été retiré|$1 titres ont été retirés}} :',

# Watchlist editing tools
'watchlisttools-view' => 'Liste de suivi',
'watchlisttools-edit' => 'Voir et modifier la liste de suivi',
'watchlisttools-raw'  => 'Modifier la liste de suivi en mode brut',

# Core parser functions
'unknown_extension_tag' => 'Balise d’extension « $1 » inconnue',

# Special:Version
'version-extensions'               => 'Extensions installées',
'version-specialpages'             => 'Pages spéciales',
'version-parserhooks'              => 'Greffons du parseur',
'version-variables'                => 'Variables',
'version-other'                    => 'Divers',
'version-mediahandlers'            => 'Manipulateurs de médias',
'version-hooks'                    => 'Greffons',
'version-extension-functions'      => 'Fonctions d’extension internes',
'version-parser-extensiontags'     => 'Balises étendues du parseur',
'version-parser-function-hooks'    => 'Fonctions étendues du parseur',
'version-skin-extension-functions' => 'Fonctions d’extension de l’interface',
'version-hook-name'                => 'Nom du greffon',
'version-hook-subscribedby'        => 'Souscrit par',
'version-version'                  => 'Version',
'version-license'                  => 'Licence',
'version-software'                 => 'Logiciels installés',
'version-software-product'         => 'Produit',
'version-software-version'         => 'Version',

# Special:Filepath
'filepath'         => 'Chemin d’accès du fichier',
'filepath-page'    => 'Fichier :',
'filepath-submit'  => 'Chemin d’accès',
'filepath-summary' => 'Cette page affiche le chemin d’accès complet d’un fichier ; les images sont montrées en haute résolution, les fichiers audio et vidéo s’exécutent avec leur programme associé.

Entrez le nom du fichier sans le préfixe « {{ns:image}}: »',

);
