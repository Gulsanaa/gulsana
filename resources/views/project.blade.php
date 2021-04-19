<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
        <div class="row" style="text-align: center;margin-top: 40px;">
</div> 
</div>

<select class="form-control Langchange">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="kz" {{ session()->get('locale') == 'kz' ? 'selected' : '' }}>Kazakh</option>
                </select>

<div class="menu">
<div id="coffee" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">{{ __( 'lang.word1') }}</div>
<div id="order online" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">{{ __('lang.word2') }}</div>
<div id="about us" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)" >{{ __('lang.word3') }}</div>
<div id="contacts" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">{{ __('lang.word4') }}</div>
<img  onclick ="window.location.reload()" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQOd7OC_3hdLSpG3wl85YgcP9CJ8bkSGkzJZw&usqp=CAU" alt="coffee" width="40px">
</div>

<div class="img">
    <img id="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSdwC8jSMth9MBAOjn3jsVtg0Nw6F1TgCxQ1w&usqp=CAU" alt="coffee" width="300px">
    <h1 id="text0">{{ __('lang.word5') }}</h1>
    <p id="text1">{{ __('lang.word6') }}</p>
</div>

<div class = "container1">
<div class = "row" style="margin-top:-330px">
<div class = "col-md-4 col-md-offset-4">
<h3>File upload + Autorename</h3>
<hr>
<form action="{{ route('file.upload') }}" method="get"  enctype="multipart/form-data">
@csrf
<input type="file" name="_file" id ="_file" class="form-control"> <br>
<button type ="submit" class ="btn btn-success">Upload</button>
</form>
</div>
</div>
</div>


</body>
</html>