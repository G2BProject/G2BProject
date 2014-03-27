<html>
	<head>
        	<meta charset="utf-8" />
        	<link rel="stylesheet" href="style_inscription.css" />
        	<title>Inscription</title>
	</head>

	<nav>

	</nav>

	<body>
		
		<p class="typeUtilisateur">Vous vous inscrivez en tant que : <span class="particulier">particulier</span>.</p>
			<div class="formulaire">
			<form method="post" action="traitement.php">
				<p><label class="standard"><span class="etoile">*</span>Nom d'utilisateur :</label><input type="text" name="pseudo" id="pseudo"/></p>
				<p><label class="standard"><span class="etoile">*</span>Adresse mail :</label><input type="mail" name="mail" id="mail"/></p>
				<p><label class="standard"><span class="etoile">*</span>Confirmation d'adresse mail :</label><input type="mail" name="mailConfirm" id="mailConfirm"/></p>
				<p><label class="standard"><span class="etoile">*</span>Mot de passe :</label><input type="password" name="password" id="password"/></p>
				<p><label class="standard"><span class="etoile">*</span>Confirmation de mot de passe :</label><input type="password" name="passwordConfirm" id="passwordConfirm"/></p>
				<p><label class="standard">Nom :</label><input type="text" name="name" id="name"/></p>
				<p><label class="standard">Prenom :</label><input type="text" name="prenom" id="prenom"/></p>
				<p><span class="standard">Sexe :</span>
					 <input type="radio" name="sexe" value="homme" id="homme" /> <label for="homme">Homme</label>
       					 <input type="radio" name="sexe" value="femme" id="femme" /> <label for="femme">Femme</label></p>
				<p><span class="standard">Date de naissance :</span>
					<select name="jour" size="1">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>

					<select name="mois" size="1">
						<option value="janvier">Janvier</option>
						<option value="février">Février</option>
						<option value="mars">Mars</option>
						<option value="avril">Avril</option>
						<option value="mai">Mai</option>
						<option value="juin">Juin</option>
						<option value="juillet">Juillet</option>
						<option value="août">Août</option>
						<option value="septembre">Septembre</option>
						<option value="octobre">Octobre</option>
						<option value="novembre">Novembre</option>
						<option value="décembre">Décembre</option>
					</select>

					<select name="an" size="1">
						<option value="1924" >1924</option>
						<option value="1925" >1925</option>
						<option value="1926" >1926</option>
						<option value="1927" >1927</option>
						<option value="1928" >1928</option>
						<option value="1929" >1929</option>
						<option value="1930" >1930</option>
						<option value="1931" >1931</option>
						<option value="1932" >1932</option>
						<option value="1933" >1933</option>
						<option value="1934" >1934</option>
						<option value="1935" >1935</option>
						<option value="1936" >1936</option>
						<option value="1937" >1937</option>
						<option value="1938" >1938</option>
						<option value="1939" >1939</option>
						<option value="1940" >1940</option>
						<option value="1941" >1941</option>
						<option value="1942" >1942</option>
						<option value="1943" >1943</option>
						<option value="1944" >1944</option>
						<option value="1945" >1945</option>
						<option value="1946" >1946</option>
						<option value="1947" >1947</option>
						<option value="1948" >1948</option>
						<option value="1949" >1949</option>
						<option value="1950" >1950</option>
						<option value="1951" >1951</option>
						<option value="1952" >1952</option>
						<option value="1953" >1953</option>
						<option value="1954" >1954</option>
						<option value="1955" >1955</option>
						<option value="1956" >1956</option>
						<option value="1957" >1957</option>
						<option value="1958" >1958</option>
						<option value="1959" >1959</option>
						<option value="1960" >1960</option>
						<option value="1961" >1961</option>
						<option value="1962" >1962</option>
						<option value="1963" >1963</option>
						<option value="1964" >1964</option>
						<option value="1965" >1965</option>
						<option value="1966" >1966</option>
						<option value="1967" >1967</option>
						<option value="1968" >1968</option>
						<option value="1969" >1969</option>
						<option value="1970" >1970</option>
						<option value="1971" >1971</option>
						<option value="1972" >1972</option>
						<option value="1973" >1973</option>
						<option value="1974" >1974</option>
						<option value="1975" >1975</option>
						<option value="1976" >1976</option>
						<option value="1977" >1977</option>
						<option value="1978" >1978</option>
						<option value="1979" >1979</option>
						<option value selected="1980" >1980</option>
						<option value="1981" >1981</option>
						<option value="1982" >1982</option>
						<option value="1983" >1983</option>
						<option value="1984" >1984</option>
						<option value="1985" >1985</option>
						<option value="1986" >1986</option>
						<option value="1987" >1987</option>
						<option value="1988" >1988</option>
						<option value="1989" >1989</option>
						<option value="1990" >1990</option>
						<option value="1991" >1991</option>
						<option value="1992" >1992</option>
						<option value="1993" >1993</option>
						<option value="1994" >1994</option>
						<option value="1995" >1995</option>
						<option value="1996" >1996</option>
						<option value="1997" >1997</option>
						<option value="1998" >1998</option>
						<option value="1999" >1999</option>
						<option value="2000" >2000</option>
						<option value="2001" >2001</option>
						<option value="2002" >2002</option>
						<option value="2003" >2003</option>
						<option value="2004" >2004</option>
						<option value="2005" >2005</option>
						<option value="2006" >2006</option>
						<option value="2007" >2007</option>
						<option value="2008" >2008</option>
						<option value="2009" >2009</option>
						<option value="2010" >2010</option>
						<option value="2011" >2011</option>
						<option value="2012" >2012</option>
						<option value="2013" >2013</option>
						<option value="2014" >2014</option>
					</select>
				<p><label class="standard">Adresse :</label><input type="text" name="adresse" id="adresse"/></p>

					<p><span class="standard">Pays :</span>
					<select name="pays" size="1">			
						<option value selected="France">France </option>
						<option value="Afghanistan">Afghanistan </option>
						<option value="Afrique_Centrale">Afrique centrale </option>
						<option value="Afrique_du_sud">Afrique du Sud </option>
						<option value="Albanie">Albanie </option>
						<option value="Algerie">Algerie </option>
						<option value="Allemagne">Allemagne </option>
						<option value="Andorre">Andorre </option>
						<option value="Angola">Angola </option>
						<option value="Anguilla">Anguilla </option>
						<option value="Arabie_Saoudite">Arabie Saoudite </option>
						<option value="Argentine">Argentine </option>
						<option value="Armenie">Armenie </option>
						<option value="Australie">Australie </option>
						<option value="Autriche">Autriche </option>
						<option value="Azerbaidjan">Azerbaidjan </option>
						<option value="Bahamas">Bahamas </option>
						<option value="Bangladesh">Bangladesh </option>
						<option value="Barbade">Barbade </option>
						<option value="Bahrein">Bahrein </option>
						<option value="Belgique">Belgique </option>
						<option value="Belize">Belize </option>
						<option value="Benin">Benin </option>
						<option value="Bermudes">Bermudes </option>
						<option value="Bielorussie">Bielorussie </option>
						<option value="Bolivie">Bolivie </option>
						<option value="Botswana">Botswana </option>
						<option value="Bhoutan">Bhoutan </option>
						<option value="Boznie_Herzegovine">Boznie Herzegovine </option>
						<option value="Bresil">Bresil </option>
						<option value="Brunei">Brunei </option>
						<option value="Bulgarie">Bulgarie </option>
						<option value="Burkina_Faso">Burkina Faso </option>
						<option value="Burundi">Burundi </option>
						<option value="Caiman">Caiman </option>
						<option value="Cambodge">Cambodge </option>
						<option value="Cameroun">Cameroun </option>
						<option value="Canada">Canada </option>
						<option value="Canaries">Canaries </option>
						<option value="Cap_vert">Cap Vert </option>
						<option value="Chili">Chili </option>
						<option value="Chine">Chine </option>
						<option value="Chypre">Chypre </option>
						<option value="Colombie">Colombie </option>
						<option value="Comores">Colombie </option>
						<option value="Congo">Congo </option>
						<option value="Congo_democratique">Congo democratique </option>
						<option value="Cook">Cook </option>
						<option value="Coree_du_Nord">Coree du Nord </option>
						<option value="Coree_du_Sud">Coree du Sud </option>
						<option value="Costa_Rica">Costa Rica </option>
						<option value="Cote_d_Ivoire">Côte d'Ivoire </option>
						<option value="Croatie">Croatie </option>
						<option value="Cuba">Cuba </option>
						<option value="Danemark">Danemark </option>
						<option value="Djibouti">Djibouti </option>
						<option value="Dominique">Dominique </option>
						<option value="Egypte">Egypte </option>
						<option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
						<option value="Equateur">Equateur </option>
						<option value="Erythree">Erythree </option>
						<option value="Espagne">Espagne </option>
						<option value="Estonie">Estonie </option>
						<option value="Etats_Unis">Etats Unis </option>
						<option value="Ethiopie">Ethiopie </option>
						<option value="Falkland">Falkland </option>
						<option value="Feroe">Feroe </option>
						<option value="Fidji">Fidji </option>
						<option value="Finlande">Finlande </option>
						<option value="France">France </option>
						<option value="Gabon">Gabon </option>
						<option value="Gambie">Gambie </option>
						<option value="Georgie">Georgie </option>
						<option value="Ghana">Ghana </option>
						<option value="Gibraltar">Gibraltar </option>
						<option value="Grece">Grece </option>
						<option value="Grenade">Grenade </option>
						<option value="Groenland">Groenland </option>
						<option value="Guadeloupe">Guadeloupe </option>
						<option value="Guam">Guam </option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guernesey">Guernesey </option>
						<option value="Guinee">Guinee </option>
						<option value="Guinee_Bissau">Guinee Bissau </option>
						<option value="Guinee equatoriale">Guinee Equatoriale </option>
						<option value="Guyana">Guyana </option>
						<option value="Guyane_Francaise ">Guyane Francaise </option>
						<option value="Haiti">Haiti </option>
						<option value="Hawaii">Hawaii </option>
						<option value="Honduras">Honduras </option>
						<option value="Hong_Kong">Hong Kong </option>
						<option value="Hongrie">Hongrie </option>
						<option value="Inde">Inde </option>
						<option value="Indonesie">Indonesie </option>
						<option value="Iran">Iran </option>
						<option value="Iraq">Iraq </option>
						<option value="Irlande">Irlande </option>
						<option value="Islande">Islande </option>
						<option value="Israel">Israel </option>
						<option value="Italie">Italie </option>
						<option value="Jamaique">Jamaique </option>
						<option value="Jan Mayen">Jan Mayen </option>
						<option value="Japon">Japon </option>
						<option value="Jersey">Jersey </option>
						<option value="Jordanie">Jordanie </option>
						<option value="Kazakhstan">Kazakhstan </option>
						<option value="Kenya">Kenya </option>
						<option value="Kirghizstan">Kirghizistan </option>
						<option value="Kiribati">Kiribati </option>
						<option value="Koweit">Koweit </option>
						<option value="Laos">Laos </option>
						<option value="Lesotho">Lesotho </option>
						<option value="Lettonie">Lettonie </option>
						<option value="Liban">Liban </option>
						<option value="Liberia">Liberia </option>
						<option value="Liechtenstein">Liechtenstein </option>
						<option value="Lituanie">Lituanie </option>
						<option value="Luxembourg">Luxembourg </option>
						<option value="Lybie">Lybie </option>
						<option value="Macao">Macao </option>
						<option value="Macedoine">Macedoine </option>
						<option value="Madagascar">Madagascar </option>
						<option value="Malaisie">Malaisie </option>
						<option value="Malawi">Malawi </option>
						<option value="Maldives">Maldives </option>
						<option value="Mali">Mali </option>
						<option value="Malte">Malte </option>
						<option value="Man">Man </option>
						<option value="Mariannes du Nord">Mariannes du Nord </option>
						<option value="Maroc">Maroc </option>
						<option value="Marshall">Marshall </option>
						<option value="Martinique">Martinique </option>
						<option value="Maurice">Maurice </option>
						<option value="Mauritanie">Mauritanie </option>
						<option value="Mayotte">Mayotte </option>
						<option value="Mexique">Mexique </option>
						<option value="Micronesie">Micronesie </option>
						<option value="Midway">Midway </option>
						<option value="Moldavie">Moldavie </option>
						<option value="Monaco">Monaco </option>
						<option value="Mongolie">Mongolie </option>
						<option value="Montserrat">Montserrat </option>
						<option value="Mozambique">Mozambique </option>
						<option value="Namibie">Namibie </option>
						<option value="Nauru">Nauru </option>
						<option value="Nepal">Nepal </option>
						<option value="Nicaragua">Nicaragua </option>
						<option value="Niger">Niger </option>
						<option value="Nigeria">Nigeria </option>
						<option value="Niue">Niue </option>
						<option value="Norfolk">Norfolk </option>
						<option value="Norvege">Norvege </option>
						<option value="Nouvelle_Caledonie">Nouvelle Caledonie </option>
						<option value="Nouvelle_Zelande">Nouvelle Zelande </option>
						<option value="Oman">Oman </option>
						<option value="Ouganda">Ouganda </option>
						<option value="Ouzbekistan">Ouzbekistan </option>
						<option value="Pakistan">Pakistan </option>
						<option value="Palau">Palau </option>
						<option value="Palestine">Palestine </option>
						<option value="Panama">Panama </option>
						<option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinee </option>
						<option value="Paraguay">Paraguay </option>
						<option value="Pays_Bas">Pays Bas </option>
						<option value="Perou">Perou </option>
						<option value="Philippines">Philippines </option>
						<option value="Pologne">Pologne </option>
						<option value="Polynesie">Polynesie </option>
						<option value="Porto_Rico">Porto Rico </option>
						<option value="Portugal">Portugal </option>
						<option value="Qatar">Qatar </option>
						<option value="Republique_Dominicaine">Republique Dominicaine </option>
						<option value="Republique_Tcheque">Republique Tcheque </option>
						<option value="Reunion">Reunion </option>
						<option value="Roumanie">Roumanie </option>
						<option value="Royaume_Uni">Royaume Uni </option>
						<option value="Russie">Russie </option>
						<option value="Rwanda">Rwanda </option>
						<option value="Sahara Occidental">Sahara Occidental </option>
						<option value="Sainte_Lucie">Sainte Lucie </option>
						<option value="Saint_Marin">Saint Marin </option>
						<option value="Salomon">Salomon </option>
						<option value="Salvador">Salvador </option>
						<option value="Samoa_Occidentales">Samoa Occidentales</option>
						<option value="Samoa_Americaine">Samoa Americaine </option>
						<option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>
						<option value="Senegal">Senegal </option>
						<option value="Seychelles">Seychelles </option>
						<option value="Sierra Leone">Sierra Leone </option>
						<option value="Singapour">Singapour </option>
						<option value="Slovaquie">Slovaquie </option>
						<option value="Slovenie">Slovenie</option>
						<option value="Somalie">Somalie </option>
						<option value="Soudan">Soudan </option>
						<option value="Sri_Lanka">Sri Lanka </option>
						<option value="Suede">Suede </option>
						<option value="Suisse">Suisse </option>
						<option value="Surinam">Surinam </option>
						<option value="Swaziland">Swaziland </option>
						<option value="Syrie">Syrie </option>
						<option value="Tadjikistan">Tadjikistan </option>
						<option value="Taiwan">Taiwan </option>
						<option value="Tonga">Tonga </option>
						<option value="Tanzanie">Tanzanie </option>
						<option value="Tchad">Tchad </option>
						<option value="Thailande">Thailande </option>
						<option value="Tibet">Tibet </option>
						<option value="Timor_Oriental">TimorOriental </option>
						<option value="Togo">Togo </option>
						<option value="Trinite_et_Tobago">Trinite et Tobago </option>
						<option value="Tristan da cunha">Tristan de cuncha </option>
						<option value="Tunisie">Tunisie </option>
						<option value="Turkmenistan">Turmenistan </option>
						<option value="Turquie">Turquie </option>
						<option value="Ukraine">Ukraine </option>
						<option value="Uruguay">Uruguay </option>
						<option value="Vanuatu">Vanuatu </option>
						<option value="Vatican">Vatican </option>
						<option value="Venezuela">Venezuela </option>
						<option value="Vierges_Americaines">Vierges Americaines </option>
						<option value="Vierges_Britanniques">Vierges Britanniques </option>
						<option value="Vietnam">Vietnam </option>
						<option value="Wake">Wake </option>
						<option value="Wallis et Futuma">Wallis et Futuma </option>
						<option value="Yemen">Yemen </option>
						<option value="Yougoslavie">Yougoslavie </option>
						<option value="Zambie">Zambie </option>
						<option value="Zimbabwe">Zimbabwe </option>
					</select>

				<p><span class="standard">Voulez-vous vous inscrire à la newsletter ?</span>
					 <input type="radio" name="newsletter" value="oui" id="oui" /> <label for="oui">Oui</label>
       					 <input type="radio" name="newsletter" value="non" id="non" /> <label for="non">Non</label></p>

				<p class="details"><span class="etoile">*</span> : champs obligatoires</p>

       			<p><a class="connecter" href="">S'inscrire</a></p>
				
				
			</div>
	</body>
</html>
