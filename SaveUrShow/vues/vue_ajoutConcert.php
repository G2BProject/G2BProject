<div class="formulaire">
			<form action="index.php?page=ajoutConcert" method="post" enctype="multipart/form-data">
				<p><label for="nom_du_concert" class="standard"> <?php echo $NOM_CONCERT ?> :</label> <input type="text" name="nom_du_concert" id="nom_du_concert"/></p>
				<p><label for="salle" class="standard"> <?php echo $NOM_SALLE ?>:</label><input type="text" name="salle" id="salle"/></p>
				<p><label for="artiste" class="standard"> <?php echo $NOM_ARTISTE ?>:</label><input type="text" name="artiste" id="artiste"/></p>
				<p><label for="image_concert" class="standard"> <?php echo $AFFICHE ?> :</label><input type="file" name="image_concert" id="image_concert"/></p>
					<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
				<p><span class="standard"><?php echo $DATE_CONCERT ?> :</span>
					<select name="jour">
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

					<select name="mois">
						<option value="01"><?php echo $JANVIER ?></option>
						<option value="02"><?php echo $FEVRIER ?></option>
						<option value="03"><?php echo $MARS ?></option>
						<option value="04"><?php echo $AVRIL ?></option>
						<option value="05"><?php echo $MAI ?></option>
						<option value="06"><?php echo $JUIN ?></option>
						<option value="07"><?php echo $JUILLET ?></option>
						<option value="08"><?php echo $AOUT ?></option>
						<option value="09"><?php echo $SEPTEMBRE ?></option>
						<option value="10"><?php echo $OCTOBRE ?></option>
						<option value="11"><?php echo $NOVEMBRE ?></option>
						<option value="12"><?php echo $DECEMBRE ?></option>
					</select>

					<select name="an">
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
					</select>
				</p>

				<p><span class="standard"> <?php echo $HEURE_CONCERT ?> :</span>
					<select name="heure">
						<option value="00">00h</option>
						<option value="01">01h</option>
						<option value="02">02h</option>
						<option value="03">03h</option>
						<option value="04">04h</option>
						<option value="05">05h</option>
						<option value="06">06h</option>
						<option value="07">07h</option>
						<option value="08">08h</option>
						<option value="09">09h</option>
						<option value="10">10h</option>
						<option value="11">11h</option>
						<option value="12">12h</option>
						<option value="13">13h</option>
						<option value="14">14h</option>
						<option value="15">15h</option>
						<option value="16">16h</option>
						<option value="17">17h</option>
						<option value="18">18h</option>
						<option value="19">19h</option>
						<option value="20">20h</option>
						<option value="21">21h</option>
						<option value="22">22h</option>
						<option value="23">23h</option>
					</select>
					 
					<select name="minute">
						<option value="00">00</option>
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
						<option value="32">32</option>
						<option value="33">33</option>
						<option value="34">34</option>
						<option value="35">35</option>
						<option value="36">36</option>
						<option value="37">37</option>
						<option value="38">38</option>
						<option value="39">39</option>
						<option value="40">40</option>
						<option value="41">41</option>
						<option value="42">42</option>
						<option value="43">43</option>
						<option value="44">44</option>
						<option value="45">45</option>
						<option value="46">46</option>
						<option value="47">47</option>
						<option value="48">48</option>
						<option value="49">49</option>
						<option value="50">50</option>
						<option value="51">51</option>
						<option value="52">52</option>
						<option value="53">53</option>
						<option value="54">54</option>
						<option value="55">55</option>
						<option value="56">56</option>
						<option value="57">57</option>
						<option value="58">58</option>
						<option value="59">59</option>
					</select>
				</p>

       			<p class="standard"><input type="submit" value="<?php echo $AJOUT_CONCERT ?>"></p>
       		</form>
</div>