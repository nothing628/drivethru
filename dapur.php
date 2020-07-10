<?php

require_once('connection.php');

include('views/header.php');
?>
<div class="container" id="app">
    Dapur {{count}}
    <button v-on:click="add">Add</button>
</div>

<?php
include('views/footer.php');
?>
<script>
    (function() {
        var app = new Vue({
            el: '#app',
            data() {
                return {
                    count: 0
                }
            },
            methods: {
                add() {
                    this.count++;
                }
            }
        })
    })()
</script>