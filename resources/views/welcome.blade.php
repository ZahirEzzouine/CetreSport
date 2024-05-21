<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>


body{
    background-image: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
    height: 100vh;
}
.wrapper{
    width:100% ;
    height: 60%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 100px;
}
.container{
    height: 400px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: start;
}
.card{
    width:80px ;
    border-radius: 75px !important;
    background-size: cover;
    cursor: pointer;
    overflow: hidden;
    border-radius: 2rem;
    margin: 0 10px;
    display: flex;
    align-items: flex-end;
    transition: .6s cubic-bezier(.28,-0.03,0,.99);
    box-shadow: 0px 10px 30px -5px rgba(0,0,0,0.8);
}
.card >.row{
    color:white ;
    display: flex;
    flex-wrap: nowrap;
}
.card >.row > .icon {
    background: #223;
    color: white;
    border-radius: 50%;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px;
}
.card >.row > .description {
    display: flex;
    justify-content: center;
    flex-direction: column;
    overflow: hidden;
    height: 80px;
    width: 520px;
    opacity: 0;
    transform: translateY(30px);
    transition: .3s;
    transition: all .3s ease;
}
.description{
    color:black;
    font-size:1em;
    box-shadow:9px 9px 10px 1px black;
    background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    padding-top: 5px;
    align-items:center;
}
.description h4{
    text-transform: uppercase;
}
input{
    display: none;

}
input:checked + label {
    width:600px  ;
}
input:checked + label .description {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
.card[for='c1']{
    background-image: url('images/imgg.jpg.avif');
}
.card[for='c2']{
    background-image: url('images/img.jpg.avif');
}
.card[for='c3']{
    background-image: url('images/tenis.jpg.jpg');
}
.card[for='c4']{
    background-image: url('images/cricket.jpg.webp');
}
.card[for='c5']{
    background-image: url('images/natation.avif');
}
</style>
<body>

    @extends('layouts.layout')
    @section("content")



    <div class="wrapper">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>Musculation</h4>
                        <p>pratiquer votre sports avec des nouvelles matériels

                        </p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" checked>
            <label for="c2" class="card">

                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>Football</h4>
                        <p> football is more than just a game</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" checked>
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>image</h4>
                        <p>tennis is a dynamic and engaging sport that combines athleticism,.</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c4" checked>
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>Cricket</h4>
                        <p> cricket is a dynamic and captivating sport.</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c5" checked>
            <label for="c5" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4> Natation </h4>
                        <p>Are you ready to make a splash towards a healthier lifestyle?</p>
                    </div>
                </div>
            </label>
        </div>

    </div>
@endsection
</body>
</html>
