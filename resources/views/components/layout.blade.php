<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    
    <x-navbar />
    <br>
    <h1 class="mx-4">THE AULAB POST</h1>
    <x-header />

    
   {{$slot}} 
</body>
</html>

    

