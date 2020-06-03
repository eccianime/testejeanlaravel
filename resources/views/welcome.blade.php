<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script type="text/javascript" src=https://code.jquery.com/jquery-2.2.4.min.js></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
    margin: 0;
    height: 100%;
    background: #ccc;
}

.container{
    margin: 10% auto;

}

.right{
    background-color: white;
    padding: 25px;
    border: 1px solid #999
}

.right h4{
    text-align: center;
}

.right input, .right h4{
    margin-bottom: 30px;
}

.left p{
    width: 300px;
}

.footer{
    position: fixed;
    left: 45%;
    bottom: 0px;
}

        </style>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <div class="col-sm-8">
            <div class="left">
                <h1>Logo</h1>
            <h1>Best Headline in the world</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna.</p>
                
            </div>
            </div>
            <div class="col-sm-4">
                <div class="right">
                    <h4>Try us for free</h4>
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                      </div>
                      <a href="#" class="btn btn-primary btn-block">CTA BUTTON</a>
                    </form>
                    
                </div>
            </div>
        </div>          
        
    </div>

    <div class="footer">
        <small>2020 CopyRight</small>   
    </div>
    


    </div>
    </body>
</html>
