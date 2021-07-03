<!doctype html>
<html lang="en">
<head>
    <title>Pusher Test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-body">
                    <form action="{{  route('sendMessage')  }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="message">Messages:</label>
                            <input type="text" name="message" id="message" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
