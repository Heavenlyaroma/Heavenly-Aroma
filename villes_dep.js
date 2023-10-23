function retour_villes(le_dep)
{
	var chaine_villes="";
	
	switch(le_dep)
	{
		
		case "33":
		chaine_villes = "Alberta|British Columbia|Manitoba|New Brunswick|Newfoundland and Labrador|Northwest Territories|Nova Scotia|Nunavut|Ontario|Prince Edward Island|Quebec|Saskatchewan|Yukon";
		break;
		case "41":
		chaine_villes = "London, City of|Aberdeen City|Aberdeenshire |Argyll and Bute|Clackmannanshire|Dumfries and Galloway|Dundee City|East Ayrshire|East Dunbartonshire|East Lothian|East Renfrewshire|Edinburgh, City of|Eilean Siar|Falkirk|Fife|Glasgow City|Highland|Inverclyde|Midlothian|Moray|North Ayrshire|North Lanarkshire|Orkney Islands|Perth and Kinross|Renfrewshire|Scottish Borders|Shetland Islands|South Ayrshire|South Lanarkshire|Stirling|West Dunbartonshire|West Lothian|Antrim and Newtownabbey|Ards and North Down|Armagh City, Banbridge and Craigavon|Belfast City|Causeway Coast and Glens|Derry and Strabane|Fermanagh and Omagh|Lisburn and Castlereagh|Mid and East Antrim|Mid-Ulster|Newry, Mourne and Down|Barking and Dagenham|Barnet|Bexley|Brent|Bromley|Camden|Croydon|Ealing|Enfield|Greenwich|Hackney|Hammersmith and Fulham|Haringey|Harrow|Havering|Hillingdon|Hounslow|Islington|Kensington and Chelsea|Kingston upon Thames|Lambeth|Lewisham|Merton|Newham|Redbridge|Richmond upon Thames|Southwark|Sutton|Tower Hamlets";
		break;
		case "42":
		chaine_villes = "Abu Dhabi|Ajman|Dubai|Fujairah|Ras al-Khaimah|Sharjah|Umm al-Quwain";
		break;
		case "43":
		chaine_villes = "Canton of Lucerne|Canton of Neuchâtel|Canton of Schaffhausen|Canton of Solothurn|Canton of St. Gallen|Canton of Valais |Canton of Vaud|Canton of Zug|canton of Zürich|Glarus|Graubünden|Nidwalden|Obwalden|Schwyz|Thurgau|Ticino|Uri";
		break;
		case "45":
		chaine_villes = "Alabama|Alaska|American Samoa|Arizona|Arkansas|Baker Island|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Guam|Hawaii|Howland Island|Idaho|Illinois|Indiana|Iowa|Jarvis Island|Johnston Atoll|Kansas|Kentucky|Kingman Reef|Louisiana|Maine|Maryland|Massachusetts|Michigan|Midway Atoll|Minnesota|Mississippi|Missouri|Montana|Navassa Island|Nebraska|Nevada|New Hampshire<|New Jersey|New Mexico|New York|North Carolina|North Dakota|Northern Mariana Islands|Ohio|Oklahoma|Oregon|Palmyra Atoll|Pennsylvania|Puerto Rico|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|United States Minor Outlying Islands|United States Virgin Islands|Utah|Vermont|Virginia|Wake Island|Washington|West Virginia|Wisconsin|Wyoming";
		break;
		case "40":
		chaine_villes = "Akershus|Buskerud|Finnmark|Hedmark|Hordaland|Jan Mayen|Møre og Romsdal|Nord-Trøndelag|Nordland|Oppland|Oslo|Østfold|Rogaland|Sogn og Fjordane|Sør-Trøndelag|Svalbard|Telemark|Troms|Trøndelag|Vest-Agder|Vestfold";
		break;
		case "46":
		chaine_villes = "Alo|Alsace|Aquitaine|Auvergne|Auvergne-Rhône-Alpes|French Polynesia|Grand Est|Guadeloupe|Hauts-de-France|Île-de-France|Languedoc-Roussillon|Limousin|Lorraine|Lower Normandy|Martinique|Mayotte|Nord-Pas-de-Calais|Normandy|Nouvelle-Aquitaine|Occitania|Paris|Pays de la Loire|Picardy|Poitou-Charentes|Provence-Alpes-Côte d'Azur|Réunion|Rhône-Alpes|Saint Barthélemy|Saint Martin|Saint Pierre and Miquelon||Upper Normandy|Uvea|Wallis and Futuna";
		break;
		case "47":
		chaine_villes = "Antwerp|Brussels-Capital Region|East Flanders|Flanders|Flemish Brabant|Hainaut|Liège|Limburg|Luxembourg|Namur|Wallonia|Walloon Brabant|West Flanders";
		break;
		case "48":
		chaine_villes = "Bjelovar-Bilogora County|Brod-Posavina County|Dubrovnik-Neretva County|Istria County|Koprivnica-Križevci County|Krapina-Zagorje County|Lika-Senj County|Međimurje County|Osijek-Baranja County|Požega-Slavonia County|Primorje-Gorski Kotar County|Šibenik-Knin County|Sisak-Moslavina County|Split-Dalmatia County|Varaždin County|Virovitica-Podravina County|Vukovar-Syrmia County|Zadar County|Zagreb|Zagreb County";
		break;
		case "49":
		chaine_villes = "Anhui|Beijing|Chongqing|Fujian|Gansu|Guangdong|Guangxi Zhuang Autonomous Region|Guizhou|Hainan|Hebei|Heilongjiang|Henan|Hong Kong|Hubei|Hunan|Inner Mongolia|Jiangsu|Jiangxi|Jilin|Keelung|Liaoning|Macau|Ningxia Hui Autonomous Region|Qinghai|Shaanxi|Shandong|Shanghai|Shanxi|Sichuan|Taiwan Province, People's Republic of China|Tibet Autonomous Region|Xinjiang|Yunnan|Zhejiang";
		break;
		case "50":
		chaine_villes = "Åland Islands|Central Finland|Central Ostrobothnia|Eastern Finland Province|Finland Proper|Kainuu|Kymenlaakso|Lapland|North Karelia|Northern Ostrobothnia| Savonia|Ostrobothnia|Oulu Province|Päijänne Tavastia|Pirkanmaa|Satakunta|South Karelia|Southern Ostrobothnia|Southern Savonia|Tavastia Proper|Uusimaa";
		break;
		case "51":
		chaine_villes = "Baden-Württemberg|Bavaria[Berlin|Brandenburg|Bremen|Hamburg|Hesse|Lower Saxony|Mecklenburg-Vorpommern|North Rhine-Westphalia|Rhineland-Palatinate|Saarland|Saxony|Saxony-Anhalt|Schleswig-Holstein|Thuringia";
		break;
		case "52":
		chaine_villes = "Aceh|Bali|Bangka Belitung Islands|Banten|Bengkulu|Central Java|Central Kalimantan|Central Sulawesi|East Java|East Kalimantan|East Nusa Tenggara|Gorontalo|Jakarta|Jambi|Kalimantan|Lampung|Lesser Sunda Islands|Maluku|Maluku Islands|North Kalimantan|North Maluku|North Sulawesi|North Sumatra|Papua|Riau|Riau Islands|South Kalimantan|South Sulawesi|South Sumatra|Southeast Sulawesi|Special Region of Yogyakarta|Sulawesi|Sumatra|West Java|West Nusa Tenggara|West Papua|West Sulawesi|West Sumatra";
		break;
		case "53":
		chaine_villes = "Abruzzo|Aosta Valley|Apulia|Basilicata|Benevento Province|Calabria|Campania|Emilia-Romagna|Friuli Venezia Giulia|Lazio|Libero consorzio comunale di Agrigento|Libero consorzio comunale di Caltanissetta|Libero consorzio comunale di Enna|Libero consorzio comunale di Ragusa|Libero consorzio comunale di Siracusa|Libero consorzio comunale di Trapani|Liguria|Lombardy|Marche|Metropolitan City of Bari|Metropolitan City of Bologna|Metropolitan City of Cagliari|Metropolitan City of Catania|Metropolitan City of Florence|Metropolitan City of Genoa|Metropolitan City of Messina|Metropolitan City of Milan|Metropolitan City of Naples|Metropolitan City of Palermo|Metropolitan City of Reggio Calabria|Metropolitan City of Rome|Metropolitan City of Turin|Metropolitan City of Venice|Molise|Pesaro and Urbino Province|Piedmont|Province of Alessandria|Province of Ancona|Province of Ascoli Piceno|Province of Asti|Province of Avellino|Province of Barletta-Andria-Trani|Province of Belluno|Province of Bergamo|Province of Biella|Province of Brescia|Province of Brindisi|Province of Campobasso|Province of Carbonia-Iglesias|Province of Caserta|Province of Catanzaro|Province of Chieti|Province of Como|Province of Cosenza|Province of Cremona|Province of Crotone|Province of Cuneo|Province of Fermo|Province of Ferrara|Province of Foggia|Province of Forlì-Cesena|Province of Frosinone|Province of Gorizia|Province of Grosseto|Province of Imperia|Province of Isernia|Province of L'Aquila|Province of La Spezia|Province of Latina|Province of Lecce|Province of Lecco|Province of Livorno|Province of Lodi|Province of Lucca|Province of Macerata|Province of Mantua|Province of Massa and Carrara|Province of Matera|Province of Medio Campidano|Province of Modena|Province of Monza and Brianza|Province of Novara|Province of Nuoro|Province of Ogliastra|Province of Olbia-Tempio|Province of Oristano|Province of Padua|Province of Parma|Province of Pavia|Province of Perugia|Province of Pescara|Province of Piacenza|Province of Pisa|Province of Pistoia|Province of Pordenone|Province of Potenza|Province of Prato|Province of Ravenna|Province of Reggio Emilia|Province of Rieti|Province of Rimini|Province of Rovigo|Province of Salerno|Province of Sassari|Province of Savona|Province of Siena|Province of Sondrio|Province of Taranto|Province of Teramo|Province of Terni|Province of Treviso|Province of Trieste|Province of Udine|Province of Varese|Province of Verbano-Cusio-Ossola|Province of Vercelli|Province of Verona|Province of Vibo Valentia|Province of Vicenza|Province of Viterbo|Sardinia|Sicily|South Tyrol|Trentino|Trentino-South Tyrol|Tuscany|Umbria|Veneto";
		break;
		case "54":
		chaine_villes = "Aichi Prefecture|Akita Prefecture|Aomori Prefecture|Chiba Prefecture|Ehime Prefecture|Fukui Prefecture|Fukuoka Prefecture|Fukushima Prefecture|Gifu Prefecture|Gunma Prefecture|Hiroshima Prefecture|Hokkaidō Prefecture|Hyōgo Prefecture|Ibaraki Prefecture|Ishikawa Prefecture|Iwate Prefecture|Kagawa Prefecture|Kagoshima Prefecture|Kanagawa Prefecture|Kumamoto Prefecture|Kyōto Prefecture|Mie Prefecture|Miyagi Prefecture|Prefecture|Nagano Prefecture|Nagasaki Prefecture|Nara Prefecture| Prefecture|Ōita Prefecture|Okayama Prefecture|Okinawa Prefecture|Ōsaka Prefecture|Saga Prefecture|Saitama Prefecture|Shiga Prefecture|Shimane Prefecture|Shizuoka Prefecture|Tochigi Prefecture|Tokushima Prefecture|Tokyo|Tottori Prefecture|Toyama Prefecture|Wakayama Prefecture|Yamagata Prefecture|Yamaguchi Prefecture|Yamanashi Prefecture";
		break;
		case "55":
		chaine_villes = "Chagang Province|Kangwon Province|North Hamgyong Province|North Hwanghae Province|North Pyongan Province|Pyongyang|Rason|Ryanggang Province|South Hamgyong Province|South Hwanghae Province|South Pyongan Province";
		break;
		case "56":
		chaine_villes = "Busan|Daegu|Daejeon|Gangwon Province|Gwangju|Gyeonggi Province|Incheon|Jeju|North Chungcheong Province|North Gyeongsang Province|North Jeolla Province|Sejong City|Seoul|South Chungcheong Province|South Gyeongsang Province|South Jeolla Province|Ulsan";
		break;
		case "57":
		chaine_villes = "Canton of Capellen|Canton of Clervaux|Canton of Diekirch|Canton of Echternach|Canton of Esch-sur-Alzette|Canton of Grevenmacher|Canton of Luxembourg|Canton of Mersch|Canton of Redange|Canton of Remich|Canton of Vianden|Canton of Wiltz|Diekirch District|Grevenmacher District|Luxembourg District";
		break;
		case "58":
		chaine_villes = "Bonaire|Drenthe|Flevoland|Friesland|Gelderland|Groningen|Limburg|North Brabant|North Hollan|Overijssel|Saba|Sint Eustatius|South Holland|Utrecht|Zeeland";
		break;
		case "59":
		chaine_villes = "Blekinge|Dalarna County|Gävleborg County|Gotland County|Halland County|Jönköping County-Kalmar County|Kronoberg County|Norrbotten County|Örebro County|Östergötland County|Skåne County|Södermanland County|Stockholm County|Uppsala County|Värmland County|Västerbotten Count|Västernorrland County|Västmanland County|Västra Götaland ";
		break;
		case "60":
		chaine_villes = "A Coruña Province|Albacete Province|Alicante Province|Almería Province|Andalusia|Araba / Álava|Aragon|Badajoz Province|Balearic Islands|Barcelona Province|Basque Country|Biscay|Burgos Province|Cáceres Province|Cádiz Province|Canary Islands|Cantabria|Castellón Province|and León|Castile-La Mancha|Catalonia|Ceuta|Ciudad Real Province|Community of Madrid|Córdoba Province|Cuenca Province|Extremadura|Galicia|Gipuzkoa|Girona Province|Granada Province|Guadalajara Province|Huelva Province|Huesca Province|Jaén Province|La Rioja|Las Palmas Province|León Province|Lleida Province|Lugo Province|Madrid Province|Málaga Province|Melilla|Murcia Province|Navarre|Ourense Province|Palencia Province|Pontevedra Province|Province of Asturias|Province of Ávila|Region of Murcia|Salamanca Province|Santa Cruz de Tenerife Province|Segovia Province|Seville Province|Soria Province|Tarragona Province|Teruel Province|Toledo Province|Valencia Province|Valencian Community|Valladolid Province<|Zamora Province|Zaragoza Province";
		break;
		case "61":
		chaine_villes = "Adana Province|Adıyaman Province|Afyonkarahisar Provinc|Ağrı Province|Aksaray Province|Amasya Province|Ankara Province|Antalya Province|Ardahan Province|Artvin Province<|Aydın Province|Balıkesir Province|Bartın Province|Batman Province|Bayburt Province|Bilecik Province|Bingöl Province|Bitlis Province|Bolu Province|Burdur Province|Bursa Province|Çanakkale Province|Çankırı Province|Çorum Province|Denizli Province|Diyarbakır Province|Düzce Province|Edirne Province|Elazığ Province|Erzincan Province|Erzurum Province|Eskişehir Province|Province|Giresun Province|Gümüşhane Province|Hakkâri Province|Hatay Province|Iğdır Province|Isparta Province|Istanbul Province|İzmir Province|Kahramanmaraş Province|Karabük Province|Karaman Province|Kars Province|Kastamonu Province|Kayseri Province|Kilis Province|Kırıkkale Province|Kırklareli Province|Kırşehir Province|Kocaeli Province|Konya Province|Kütahya Province|Malatya Provinc|Manisa Province|Mardin Province|Mersin Province|Muğla Province|Muş Province|Nevşehir Province|Niğde Province|Ordu Province|Osmaniye Province|Rize Province|Sakarya Province|Samsun Province|Şanlıurfa Province|Siirt Province|Sinop Province|Sivas Province|Şırnak Province|Tekirdağ Province|Tokat Province|Trabzon Province|Tunceli Province|Uşak Province|Van Province|Yalova Province|Yozgat Province|Zonguldak Province	";
		break;

	}
	
	return chaine_villes;
}