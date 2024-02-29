<?php set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] ); ?>
<?php include("header.php"); ?>
        <section>
            <header class="page">
                <h1>
                    Weno Savers
                </h1>
                <h2>
                    Enter additional copy here
                </h2>
            </header>
        </section>
    </div>
	<section class="other-offerings-page bg-jagged br-lightcyan-fill-top">
        <div class="medium">
        	<h1>Weno Savers</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor tortor ut felis vehicula pulvinar. Donec at nulla urna, id imperdiet odio. Fusce fringilla adipiscing auctor. Aenean porttitor aliquet velit, id bibendum sem aliquam congue. Vestibulum ut leo elit. Nam orci ligula, commodo vitae interdum et, auctor eu tum. Donec euismod elit quis mauris tempor vel posuere dolor iaculis.</p>
            <p class="learn-how-link"><a href="#">Click here to learn how to post your company’s weno saver!</a></p>
            <form>
            	<ul class="clearfix">
                	<li class="first-select">
                    	<strong>First, Select</strong>
                    	<input type="radio" name="savers" id="personal_savers" value="personal_savers"><label for="personal_savers">Personal Savers</label>
                        <input type="radio" name="savers" id="biz_to_biz_savers" value="biz_to_biz_savers"><label for="biz_to_biz_savers">Biz To Biz Savers</label>
                        <input type="radio" name="savers" id="big_ticket_savers" value="big_ticket_savers"><label for="big_ticket_savers">Big Tickets Savers</label>
                        <input type="radio" name="savers" id="all_savers" value="all_savers"><label for="all_savers">All Savers</label>
                	</li>
                    <li class="second-select">
                    	<strong>Second, Select</strong>
                        <label for="zip-code">
                            Enter Zipcode
                            <input type="text" id="zip-code">
                        </label>
                	</li>
                    <li class="third-select">
                    	<strong>Third, Click Search</strong>
                        <input type="submit" value="search">
                	</li>
                </ul>
            </form>
		</div>
        <button type="button" class="go-top">Go Back to Top</button>
    </section>
    <!-- lazy preload hover states -->
    <div style="display: none;">
    	<img src="../img/radio-o.png" alt="preload" />
        <img src="../img/radio-o@2x.png" alt="preload" />
        <img src="../img/radio-o-sm.png" alt="preload" />
        <img src="../img/radio-o-sm@2x.png" alt="preload" />
    </div>
<?php include("footer.php"); ?>