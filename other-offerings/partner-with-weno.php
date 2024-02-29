<?php set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] ); ?>
<?php include("header.php"); ?>
        <section>
            <header class="page">
                <h1>
                    Partner With Weno
                </h1>
                <h2>
                    Enter additional copy here
                </h2>
            </header>
        </section>
    </div>
	<section class="other-offerings-page bg-jagged br-lightcyan-fill-top">
        <div class="medium">
        	<h1>Partner With Weno</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor tortor ut felis vehicula pulvinar. Donec at nulla urna, id imperdiet odio. Fusce fringilla adipiscing auctor. Aenean porttitor aliquet velit, id bibendum sem aliquam congue. Vestibulum ut leo elit. Nam orci ligula, commodo vitae interdum et, auctor eu tum. Donec euismod elit quis mauris tempor vel posuere dolor iaculis.</p>
            <form>
            	<ul class="clearfix">
                	<li class="first-select">
                    	<strong>First, Select</strong>
                    	<input type="radio" name="savers" id="choice_1" value="choice_1"><label for="choice_1">Choice 1</label>
                        <input type="radio" name="savers" id="choice_2" value="choice_2"><label for="choice_2">Choice 2</label>
                        <input type="radio" name="savers" id="choice_3" value="choice_3"><label for="choice_3">Choice 3</label>
                	</li>
                    <li class="second-select">
                    	<strong>Second, Select</strong>
                        <label for="zip-code">
                            Enter Filler
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