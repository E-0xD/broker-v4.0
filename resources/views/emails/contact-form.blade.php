<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        <h2>New Contact Form Submission</h2>

        <b>Name:</b> {{ $formData['name'] }} {{ $formData['last_name'] }}
        <br>
        <b>Email:</b> {{ $formData['email'] }}
        <br>
        <b>Phone:</b> {{ $formData['phone'] }}
        <br>

        <b>Message:</b>
        {{ $formData['message'] }}
    </body>

</html>
