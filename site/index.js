$.getJSON("https://api.covidactnow.org/v2/states.timeseries.json?apiKey=142a16ea70654f1a8bb123d3ae597ffc", function (data) {
console.log(data)

var cases = data.actuals.cases

$('.cases').append(cases)
})

fetch("https://api.covidactnow.org/v2/states.timeseries.json?apiKey=142a16ea70654f1a8bb123d3ae597ffc").then(
    res => {
        res.json().then(
            data => {
                console.log(data.data);
                if (data.data.length > 0) {

                    var temp = "";
                    data.data.forEach((itemData) => {
                        temp += "<tr>";
                        temp += "<td>" + itemData.cases + "</td>";
                        temp += "<td>" + itemData.country + "</td>";
                        temp += "<td>" + itemData.positiveTests + "</td></tr>";
                    });
                    document.getElementById('data').innerHTML = temp;
                }
            }
        )
    }
)