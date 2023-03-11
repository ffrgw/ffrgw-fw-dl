<?php
/**
 * @author    Leo Maroni, Caspar Armster
 * @copyright 2017 Leo Maroni, Caspar Armster, Freifunk Hennef/Freie Netzwerker e.V. (www.freifunk-hennef.de / www.freie-netzwerker.de)
 * @license   Licensed under GPLv3
 */

/** Texte für die 2 Stufige Auswahl einer Meta-Community.
*/
    $texte = array(
        "ebene1_titel" => "Freifunk Community",
        "ebene1_text" => "Freifunk Community auswählen",
        "ebene2_titel" => "Bereich der Community",
        "ebene2_text" => "Bereich der Community auswählen",
        "ebene3_titel" => "Firmware Downloader",
        "ebene3_text" => "Zur Firmware-Download Seite"
    );

    $community = array(
	    0 => array(
		    "community_id" => 0,
		    "shortlinkname" => 'rgw',
		    "name" => "RG-West",
		    "head_titel" => "Freifunk RG-West Firmware",
		    "link_text" => "Zurück zur Startseite",
		    "link_url" => "https://freifunk.ruhr/",
		    "lang_titel" => "Freifunk RG-West Firmware Auswahl",
		    "lang_text" => "Bitte suchen Sie den passenden Router aus, indem Sie den Hersteller, das Modell und die Version auswählen.<br />Legen Sie anschließend fest, ob sie den Router zum ersten Mal auf dem Router eine Freifunk Firmware installieren und welches Entwicklungsstadium die Firmware haben soll.",
		    "download_path" => "../images/FF-RGW/",
		    "download_url" => "http://images.freifunk.ruhr/FF-RGW/",
			"sub_auswahl" => array(1,2,3),
		    "show" => true
	    ),
	    1 => array(
		    "community_id" => 1,
		    "shortlinkname" => 'rgw-ob',
		    "name" => "Oberhausen",
		    "head_titel" => "Freifunk Oberhausen Firmware",
		    "link_text" => "Zurück zur Startseite",
		    "link_url" => "https://freifunk-oberhausen.net/",
		    "lang_titel" => "Freifunk Oberhausen Firmware Auswahl",
		    "lang_text" => "Bitte suchen Sie den passenden Router aus, indem Sie den Hersteller, das Modell und die Version auswählen.<br />Legen Sie anschließend fest, ob sie den Router zum ersten Mal auf dem Router eine Freifunk Firmware installieren und welches Entwicklungsstadium die Firmware haben soll.",
		    "download_path" => "../images/FF-RGW/",
		    "download_url" => "http://images.freifunk.ruhr/FF-RGW/",
		    "geojson" => "geojson/oberhausen.geojson",
		    "show" => false
	    ),
	    2 => array(
		    "community_id" => 2,
		    "shortlinkname" => 'rgw-mh',
		    "name" => "Mülheim a.d.R.",
		    "head_titel" => "Freifunk Mülheim a.d.R. Firmware",
		    "link_text" => "Zurück zur Startseite",
		    "link_url" => "https://freifunk-muelheim.de/",
		    "lang_titel" => "Freifunk Mülheim a.d.R. Firmware Auswahl",
		    "lang_text" => "Bitte suchen Sie den passenden Router aus, indem Sie den Hersteller, das Modell und die Version auswählen.<br />Legen Sie anschließend fest, ob sie den Router zum ersten Mal auf dem Router eine Freifunk Firmware installieren und welches Entwicklungsstadium die Firmware haben soll.",
		    "download_path" => "../images/FF-RGW/",
		    "download_url" => "http://images.freifunk.ruhr/FF-RGW/",
		    "geojson" => "geojson/muelheim.geojson",
		    "show" => false
	    ),
	    3 => array(
		    "community_id" => 3,
		    "shortlinkname" => 'rgw-du',
		    "name" => "Duisburg (Rechtsrheinisch)",
		    "head_titel" => "Freifunk Duisburg Firmware",
		    "link_text" => "Zurück zur Startseite",
		    "link_url" => "http://freifunk-duisburg.de/",
		    "lang_titel" => "Freifunk Duisburg Firmware Auswahl",
		    "lang_text" => "Bitte suchen Sie den passenden Router aus, indem Sie den Hersteller, das Modell und die Version auswählen.<br />Legen Sie anschließend fest, ob sie den Router zum ersten Mal auf dem Router eine Freifunk Firmware installieren und welches Entwicklungsstadium die Firmware haben soll.",
		    "download_path" => "../images/FF-RGW/",
		    "download_url" => "http://images.freifunk.ruhr/FF-RGW/",
		    "geojson" => "geojson/duisburg-rechts.geojson",
		    "show" => false
	    ),
	    4 => array(
		    "community_id" => 4,
		    "shortlinkname" => 'niers',
		    "name" => "Niersufer",
		    "head_titel" => "Freifunk Niersufer Firmware",
		    "link_text" => "Zurück zur Startseite",
			"link_url" => "https://freifunk-niersufer.de/firmware/",
		    "geojson" => "geojson/niersufer.geojson",
			"sub_auswahl" => array(5,6,7),
		    "show" => true
	    ),
	    5 => array(
		    "community_id" => 5,
		    "name" => "Mönchengladbach",
		    "shortlinkname" => 'niers-mg',
			"linktoseite" => "https://freifunk-niersufer.de/firmware/",
		    "show" => false
	    ),
	    6 => array(
		    "community_id" => 6,
		    "name" => "Moers",
		    "shortlinkname" => 'niers-mo',
			"linktoseite" => "https://freifunk-niersufer.de/firmware/",
		    "show" => false
	    ),
	    7 => array(
		    "community_id" => 7,
		    "name" => "Niersufer",
		    "shortlinkname" => 'niers-niers0',
			"linktoseite" => "https://freifunk-niersufer.de/firmware/",
		    "show" => false
	    ),
	);