<!doctype html>
<html lang="en">
<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('11a0d25629018705e574', {
            cluster: 'mt1'
        });

        var channel = pusher.subscribe('message-channel');
        channel.bind('message-event', function (data) {
            let messagesSection = $("#messages");
            messagesSection.append(`<div class="alert alert-primary">${data.message}</div>`);
            // alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>

<hr>

<div id="messages"></div>
</body>
</html>
