<?php

require_once('connection.php');

include('views/header.php');
?>
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 l12">
                <h3>Harap Login</h3>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="User Name" id="first_name" type="text" class="validate">
                        <label for="first_name">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Password" id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Masuk ke Aplikasi
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
include('views/footer.php');
