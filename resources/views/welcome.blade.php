<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>
        Jela svijeta
    </title>
</head>
<body>
    
    <div>
        <div>
            <hr>

            <section>

                @if(count($meals) == 0)
                    <p>
                        Trenutno nema objavljenih jela
                    </p>
                @endif

                @foreach($meals as $meal)
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="">
                                    <h3>
                                        {{$meal['naziv']->name_hr}}
                                    </h3>
                            </a>
                        </div>
                        <div class="col-xl-6">
                            <a href="">
                                <h3>
                                    {{$meal['naziv']->name_en}}
                                </h3>
                            </a>
                        </div>
                        <div class="row">
                            <div class=col-xl-6>
                                <p>
                                    {{$meal['sastojak']->name_hr}}
                                </p>
                            </div>
                            <div class=col-xl-6>
                                <p>
                                    {{$meal['sastojak']->name_en}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=col-xl-6>
                                <p>
                                    {{$meal['kategorija']->name_hr}}
                                </p>
                            </div>
                            <div class=col-xl-6>
                                <p>
                                    {{$meal['kategorija']->name_en}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=col-xl-6>
                                <p>
                                    {{$meal['tag']->name_hr}}
                                </p>
                            </div>
                            <div class=col-xl-6>
                                <p>
                                    {{$meal['tag']->name_hr}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        </div>     
                    </div>   

                @endforeach

            </section>

        </div>
    </div>

</body>
</html>