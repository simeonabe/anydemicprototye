<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Covid Datas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>



<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="icon.png" width="160" height="160">
        <div class="container">
            <a class="navbar-brand" href="#">ANYDEMIC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shoping.php">Shoping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h2>COVID -19 Cases in <span id="country"></span> <img src="" id="flag"></h2>
    <div class="board">
        <div class="card a"><i class="fa fa-tachometer"></i><h5>Active Cases</h5><span id="active"></span></div>
        <div class="card ca"><i class="fa fa-th-list"></i><h5>Total Cases</h5><span id="cases"></span></div>
        <div class="card cr"><i class="fa fa-times-circle"></i><h5>Critical Cases</h5><span id="critical"></span></div>
        <div class="card d"><i class="fa fa-times"></i><h5>Total Deaths</h5><span id="death"></span></div>
        <div class="card r"><i class="fa fa-check-square-o"></i><h5>Recovered Cases</h5><span id="recovered"></span></div>
        <div class="card t"><i class="fa fa-eye"></i><h5>Total Testes Done</h5><span id="tests"></span></div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">

    fetch('https://corona.lmao.ninja/v2/countries/Latvia')
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            console.log(data);
            document.getElementById("country").innerHTML = data.country;
            document.getElementById("active").innerHTML = data.active.toLocaleString();
            document.getElementById("cases").innerHTML = data.cases.toLocaleString();
            document.getElementById("critical").innerHTML = data.critical.toLocaleString();
            document.getElementById("death").innerHTML = data.deaths.toLocaleString();
            document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
            document.getElementById("tests").innerHTML = data.tests.toLocaleString();
            document.getElementById("flag").src = data.countryInfo.flag;
        });
</script>