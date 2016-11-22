<?php

$pageTitle = 'Import/Export Transaction';
$mainClass = 'send-factoids';
$activeNav = 1;

ob_start(); ?>

<div class="row">
                        <div class="columns">
                            <a href="/" class="button close-button" data-close aria-label="Close reveal"><span aria-hidden="true">&times;</span></a>
                            <h1>Import/Export Transactions</h1>
                            <p><a href="#" class="button">Import from file</a></p>
                            <form>
                                <div class="coin-control">
                                    <div class="row">
                                        <div class="columns">
                                            <label>Send from:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="small-12 medium-7 large-8 columns">
                                            <div class="input-group">
                                                <input type="text" name="input1" class="input-group-field" placeholder="Type factoid address">
                                                <a data-toggle="addressbook" class="input-group-button button"><i class="fa fa-book"></i></a>
                                            </div>
                                        </div>
                                        <div class="small-10 medium-4 large-3 columns">
                                            <div class="input-group">
                                                <input type="text" class="input-group-field" name="input1-num" placeholder="Amount of factoids">
                                                <span class="input-group-label">FCT</span>
                                            </div>
                                        </div>
                                        <div class="small-2 medium-1 columns">
                                                <a href="#" class="button expanded newPlus">&nbsp;</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns">
                                        <label>Send to:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-7 large-8 columns">
                                        <div class="input-group">
                                            <input type="text" name="output1" class="input-group-field" placeholder="Type factoid address">
                                            <a data-toggle="addressbook" class="input-group-button button"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                    <div class="small-10 medium-4 large-3 columns">
                                        <div class="input-group">
                                            <input type="text" class="input-group-field" name="output1-num" placeholder="Amount of factoids">
                                            <span class="input-group-label">FCT</span>
                                        </div>
                                    </div>
                                    <div class="small-2 medium-1 columns">
                                            <a href="#" class="button expanded newPlus">&nbsp;</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 medium-7 large-8 columns">

                                    </div>
                                    <div class="small-12 medium-4 large-3 columns end">
                                        <label>Fee:</label>
                                        <div class="input-group">
                                            <input type="text" class="input-group-field" disabled="true" name="fee" value="0.108">
                                            <span class="input-group-label">FCT</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="small-12 medium-7 large-8 columns">

                                    </div>
                                    <div class="small-12 medium-4 large-3 columns end">
                                        <label>Transaction Total:</label>
                                        <div class="input-group">
                                            <input type="text" class="input-group-field" disabled="true" name="subtotal" id="subtotal" value="0.108">
                                            <span class="input-group-label">FCT</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="columns">
                                        <input type="checkbox" id="sign-transaction" name="sign-transaction" value="true">
                                        <label for="sign-transaction">Sign transaction</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns">
                                        <a href="#" class="button">Export to file</a>
                                        <a href="#" class="button">Broadcast Transaction</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="reveal" id="addressbook" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
						<h1>Select Address</h1>
						<form>
							<input type="radio" name="address" id="address" value="FA3cih2o2tjEUsnnFR4jX1tQXPpSXFwsp3rhVp6odL5PNCHWvZV1"> factoid1<br>
							<input type="radio" name="address" id="address" value="FA3cih2o2tjEUsnnFR4jX1tQXPpSXFwsp3rhVp6odL5PNCHWvZV1"> factoid2<br>
							<input type="radio" name="address" id="address" value="FA3cih2o2tjEUsnnFR4jX1tQXPpSXFwsp3rhVp6odL5PNCHWvZV1"> factoid3<br>
							<input type="radio" name="address" id="address" value="FA3cih2o2tjEUsnnFR4jX1tQXPpSXFwsp3rhVp6odL5PNCHWvZV1"> factoid4<br>
							<input type="radio" name="address" id="address" value="FA3cih2o2tjEUsnnFR4jX1tQXPpSXFwsp3rhVp6odL5PNCHWvZV1"> factoid5<br>
							<a href="#" class="button" target="_blank">Continue</a>
						</form>
						<button class="close-button" data-close aria-label="Close reveal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

<?php

$mainContent = ob_get_contents();
ob_end_clean();

include 'template.php';

?>