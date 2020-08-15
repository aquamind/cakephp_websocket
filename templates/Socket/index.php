<?php
/**
 * @var \App\View\AppView $this
 * @var string $host
 * @var int $port
 */
?>
<div class="contacts index content">
    <div id="main" class="container"></div>
    <script>
        var ws = new WebSocket('<?= 'ws://' . $host . ':' . strval($port)?>');

        ws.onclose = function(event) {
            alert("websocket " + event.target.url + " is closed");
        };

        ws.onerror = function(event) {
            alert("websocket " + event.target.url + " is error");
        };

        ws.onopen = function(event) {
            console.log("websocket " + event.target.url + " is opened");
        };

        ws.onmessage = function(event) {
            var main = document.getElementById("main");
            main.innerHTML = '<div>' + event.data + '</div>';
        };
    </script>
</div>
