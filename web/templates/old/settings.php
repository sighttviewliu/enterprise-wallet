<?php

$pageTitle = 'Settings';
$mainClass = 'settings';
$activeNav = 3;

ob_start(); ?>

<h1>Advanced Features</h1>
                    <form>
                        <div class="row">
                            <div class="columns">
                                <p>
                                    <input type="checkbox" id="coin-control" name="coin-control" value="true">
                                    <label for="coin-control">Enable coin-control (specific or multiple input addresses for new transaction)</label>
                                    <br>
                                    <input type="checkbox" id="import-export" name="import-export" value="true">
                                    <label for="import-export">Enable ability to import/export transactions</label>
                                    <br>
                                    <input type="checkbox" id="export-keys" name="export-keys" value="true">
                                    <label for="export-keys">Enable ability to export public keys</label>
                                    <br>
                                    <input type="checkbox" id="darkTheme" name="darkThme" value="true">
                                    <label for="darkTheme">Enable dark theme</label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns">
                                <br>
                                <a href="#" class="button">Save Changes</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="columns">
                                <a href="#" class="button">Export Seed to file</a>
                            </div>
                        </div>
                    </form>

<?php

$mainContent = ob_get_contents();
ob_end_clean();

include 'template.php';

?>