<?php
session_start();
$configparams = require_once('../.Config/configparams.php');


require_once('menubar.php'); ?>


<div class="NyitvatartasDoboz">
    <div class="NyitvaCim">
        <p>
            Nyitvatartás
        </p>
    </div>
    
    <div class="NyitvaAlcim">
        <p>
            Ha azt látják az aktuális naptárban, hogy <strong>JÁTSZÓHÁZ</strong>, akkor nyugodtan lehet jönni, szeretettel várunk minden kis és nagy lurkót.
            Amennyiben <strong>SZÜLINAP</strong> címszót látnak, egyértelműen zártkörű a rendezvény. (Természetesen szülinapok iránt érdeklődni, 
            előleget kifizetni ekkor is lehetséges, jöjjenek nyugodtan, csak a gyermekek játszani nem tudnak.)
        </p>

    </div>
    <div class="Jelzesek">
        <p>
            🔵Zártkörű születésnap van
        </p>
        <p>
            🔴Zárva tartunk
        </p>
        <p>
            🟣Játszóház üzemel
        </p>
        <p>
            🟢Játszóházunkban tematikus rendezvényt tartunk 
        </p>
        
        <p id="HelpABenaknak">
            Ha szeretnék látni éppen milyen rendezvény van nálunk, vagy fordítsák el a telefont az oldalára, 
            vagy a friss hírek kezdőoldalon a bejegyzések között megtekinthetik.
        </p>

    </div>
    
    <p id="HelpABenaknak2">
	    *Amennyiben azokon a napokon szeretnének ellátogatni hozzánk vagy épp gyermekmegőrzést igényelnének, amikor <span style="text-decoration: underline;font-weight: bold;">ZÁRVA*</span> 				vagyunk, kérem <span style="text-decoration: underline;font-weight: bold;"><a href="tel:+36203410948">telefonáljanak</a></span>. Időpontot egyeztetünk és ha megoldható, kinyitunk.
	</p>
    
    <div id="calendar-wrap">
    		<div class="EvHonap">
    		    
    		    <div class="w3-content w3-display-container">
    		        <div class=Egysorba>
    		           <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    		            <!--<div class="Nyilakkozti"> <p> Itt tudd lépni a hónapok között</p></div>-->
                        
    		       
    
                        
                        
                        <!-------------december hónap------------------>
        		        <div class="honapok">
        		            <h1>2022 December</h1>
        		            <div id="okt" class="calendar">
                    			<ul class="weekdays">
                    				<li>Hétfő</li>
                    				<li>Kedd</li>
                    				<li>Szerda</li>
                    				<li>Csütörtök</li>
                    				<li>Péntek</li>
                    				<li>Szombat</li>
                    				<li>Vasárnap</li>
                    			</ul>
                    			<ul class="weekdays-mobil">
                    				<li>H</li>
                    				<li>K</li>
                    				<li>Sze</li>
                    				<li>Cs</li>
                    				<li>P</li>
                    				<li>Szo</li>
                    				<li>V</li>
                    			</ul>
                
                    			<!-- Days from previous month -->
                
                    			<ul class="days">
                    				<li class="day other-month">
                    					<div class="date">28</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">29</div>
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">30</div>    					
                    				</li>
                    				<!-- Days in current month -->
                    				<li class="day">
                    					<div class="date">1</div>   
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">2</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">3</div> 
                    					<div class="event-esemeny">
                    						<div class="event-cim">
                    							Télapó buli 🎅🏼
                    						</div>
                    						<div class="event-ido">
                    							9:30-15:00
                    						</div>
                    					</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">4</div>
                    					<div class="event-esemeny">
                    						<div class="event-cim">
                    							Kalandra fel! 
                    						</div>
                    						<div class="event-ido">
                    							
                    						</div>
                    					</div>
                    					<div class="event-zarva" style="height:65px">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #2 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">5</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">6</div>  
                    					<div class="event-esemeny">
                    						<div class="event-cim">
                    							Mézeskalács díszítés
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">7</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">8</div>   
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">9</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">10</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-12:30
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							12:30-15:00
                    						</div>
                    					</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div> 
                    				</li>
                    				<li class="day">
                    					<div class="date">11</div> 
                    				        <div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-12:30
                    						</div>
                    					</div> 
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							12:30-15:00
                    						</div>
                    					</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #3 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">12</div> 
                    				        <div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:30
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">13</div>  
                    					<div class="event-esemeny">
                    						<div class="event-cim">
                    							Mézeskalács díszítés
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">14</div>   
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">15</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">16</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:30
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">17</div> 
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							09:30-12:00
                    						</div>
                    					</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							12:30-15:30
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">18</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-15:30
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #4 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">19</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">20</div> 
                    					<div class="event-esemeny">
                    						<div class="event-cim">
                    							Mézeskalács díszítés
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">21</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">22</div>  
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">23</div>  
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">24</div>
                    					<div class="event-zarva">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">25</div> 
                    					<div class="event-zarva">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    			</ul>
                
                    					<!-- Row #5 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">26</div>  
                    					<div class="event-zarva">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">27</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">28</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-15:30 ☎️📞
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">29</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">30</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">31</div> 
                    					<div class="event-zarva">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    				<!-- Next Month --> 
                    				<li class="day other-month">
                    					<div class="date">1</div>    					
                    				</li>
                    			</ul>
                    		</div><!-- /. calendar -->
    
        		        </div>
    
    
    
    
    
                        <!-------------január hónap------------------>
        		        <div class="honapok">
        		            <h1>2023 Január</h1>
        		            <div id="okt" class="calendar">
                    			<ul class="weekdays">
                    				<li>Hétfő</li>
                    				<li>Kedd</li>
                    				<li>Szerda</li>
                    				<li>Csütörtök</li>
                    				<li>Péntek</li>
                    				<li>Szombat</li>
                    				<li>Vasárnap</li>
                    			</ul>
                    			<ul class="weekdays-mobil">
                    				<li>H</li>
                    				<li>K</li>
                    				<li>Sze</li>
                    				<li>Cs</li>
                    				<li>P</li>
                    				<li>Szo</li>
                    				<li>V</li>
                    			</ul>
                
                    			<!-- Days from previous month -->
                
                    			<ul class="days">
                    				<li class="day other-month">
                    					<div class="date">26</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">27</div>
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">28</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">29</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">30</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">31</div>    					
                    				</li>
                    				<!-- Days in current month -->
                    				<li class="day">
                    					<div class="date">1</div>
                    					<div class="event-zarva">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #2 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">2</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">3</div>   
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">4</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">5</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">6</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00 ☎️📞
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">7</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-12:30
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							12:30-15:00
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">8</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-15:30
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #3 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">9</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">10</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">11</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">12</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">13</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">14</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-15:30
                    						</div>
                    					</div>
                    					<div class="event-szuli">
                    						<div class="event-cim">
                    							Szülinap
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">15</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #4 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">16</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">17</div>
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">18</div>
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">19</div>
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">20</div>  
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">21</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">22</div>   
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    					<!-- Row #5 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">23</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">24</div>
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">25</div>
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">26</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">27</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">28</div>   
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">29</div>  
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    			<!-- Row #6 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">30</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">31</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<!-- Next Month --> 
                    				<li class="day other-month">
                    					<div class="date">1</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">2</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">3</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">4</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">5</div>    					
                    				</li>
                    			</ul>
                
                    		</div><!-- /. calendar -->
    
        		        </div>




                        <!-------------február hónap------------------>
        		        <div class="honapok">
        		            <h1>2023 Február</h1>
        		            <div id="okt" class="calendar">
                    			<ul class="weekdays">
                    				<li>Hétfő</li>
                    				<li>Kedd</li>
                    				<li>Szerda</li>
                    				<li>Csütörtök</li>
                    				<li>Péntek</li>
                    				<li>Szombat</li>
                    				<li>Vasárnap</li>
                    			</ul>
                    			<ul class="weekdays-mobil">
                    				<li>H</li>
                    				<li>K</li>
                    				<li>Sze</li>
                    				<li>Cs</li>
                    				<li>P</li>
                    				<li>Szo</li>
                    				<li>V</li>
                    			</ul>
                
                    			<!-- Days from previous month -->
                
                    			<ul class="days">
                    				<li class="day other-month">
                    					<div class="date">30</div>    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">31</div>
                    				</li>
                    				<!-- Days in current month -->
                    				<li class="day">
                    					<div class="date">1</div>    			
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>		
                    				</li>
                    				<li class="day">
                    					<div class="date">2</div>   
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">3</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">4</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">5</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #2 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">6</div> 
                    					<div class="event-zarva">
                    					    <p>ZÁRVA
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">7</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">8</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">9</div>   
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">10</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">11</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">12</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #3 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">13</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">14</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">15</div>   
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">16</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">17</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">18</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">19</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    				<!-- Row #4 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">20</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">21</div> 
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">22</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">23</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">24</div>  
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							15:30-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">25</div>
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">26</div> 
                    					<div class="event-jatszo">
                    						<div class="event-cim">
                    							Játszóház
                    						</div>
                    						<div class="event-ido">
                    							10:00-18:00
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                
                    					<!-- Row #5 -->
                
                    			<ul class="days">
                    				<li class="day">
                    					<div class="date">27</div>  
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<li class="day">
                    					<div class="date">28</div>
                    					<div class="event-zarva">
                    					    <p id="gepen"><span style="text    -decoration: underline;font-weight: bold;">ZÁRVA,</span> de előzetes bejelentkezésre <span style="text-decoration: underline;font-weight: bold;">KINYITUNK.</span> <a href="tel:+36203410948">Telefonáljon! </a>
                    					    </p>
                    					    <p id="telefonon">ZÁRVA*
                    					    </p>
                    					</div>
                    				</li>
                    				<!-- Next Month --> 
                    				<li class="day other-month">
                    					<div class="date">1</div> 
                    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">2</div> 
                    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">3</div> 
                    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">4</div> 
                    					
                    				</li>
                    				<li class="day other-month">
                    					<div class="date">5</div>    					
                    				</li>
                    			</ul>
                    		</div><!-- /. calendar -->
    
        		        </div>
                        
                        
                        
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> 
    		        </div>
                         <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> 
                          
                </div>
                
                <script>
                var slideIndex = 1;
                showDivs(slideIndex);
                
                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }
                
                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("honapok");
                  if (n > x.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  x[slideIndex-1].style.display = "block";  
                }
                </script>

    		</div>
    		    
    		    
    		
    	</div><!-- /. wrap -->

        <p id="HelpABenaknak2">
	    *Amennyiben azokon a napokon szeretnének ellátogatni hozzánk vagy épp gyermekmegőrzést igényelnének, amikor <span style="text-decoration: underline;font-weight: bold;">ZÁRVA*</span> 				vagyunk, kérem <span style="text-decoration: underline;font-weight: bold;"><a href="tel:+36203410948">telefonáljanak</a></span>. Időpontot egyeztetünk és ha megoldható, kinyitunk.
	</p>

</div>

<?php require_once('footer.php'); ?>