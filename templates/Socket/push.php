<?php
/**
 * @var \App\View\AppView $this
 * @var string $host
 * @var int $port
 * @var string $message
 */
?>
<div class="contacts index content">
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
            ws.send('<?= $message ?>');
        };
    </script>
</div>
