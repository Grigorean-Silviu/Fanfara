window.onload = function(){
// LOCATION FORM
    var btn = document.getElementById('submitBtn');
    // var listItems = document.querySelectorAll('#listElem li');
    function displayCities(cities) {
        let list = document.getElementById('listElem');
        list.innerHTML = '';
        cities.forEach(city => {
            list.innerHTML += `<li><a href="${city.link}">${city.name}</a></li>`;
        });
    }
    btn.addEventListener("click", function (e) {
        e.preventDefault();
        let inputValue = document.getElementById('loc').value;
        if (inputValue === '') return;
        var myRequest = new XMLHttpRequest();
        myRequest.open('GET', 'https://api.teleport.org/api/cities/?search=' + inputValue);
        myRequest.onload = function () {
            if (myRequest.status === 200) {
                var ourData = JSON.parse(myRequest.response);
                let cities = [];
                ourData._embedded["city:search-results"].forEach(function (el) {
                    let city = {name: '', link: ''};
                    city.name = el.matching_full_name;
                    city.link = el._links["city:item"].href;
                    cities.push(city);
                });
                displayCities(cities);
            } else {
                console.log("We connected to the server, but it returned an error.");
            }
        };
        myRequest.onerror = function () {
            console.log("Connection error");
        };
        myRequest.send();
    });
};