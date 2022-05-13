window.onload = function () {

    let btn = document.getElementById('submitBtn');
    // var listItems = document.querySelectorAll('#listElem li');
    let url_req2 = new URL('https://app.ticketmaster.com/discovery/v2/events.json?countryCode=US&apikey=7zePiuPxmBU0eauWXt5LsCHA923RijDo');
    url_req2.searchParams.set('q', 'test me!');

    function displayCities(cities) {
        let list = document.getElementById('listElem');
        list.innerHTML = ''; // golesc lista din HTML
        cities.forEach(city => { //parcurg lista cu cities
            list.innerHTML += `<li data-url="${city.link}">${city.name}</li>`; //umplu lista cu ce vreau din api
        });
    }

    document.addEventListener("click", function (e) {

        if (!!e.target.dataset["url"]) {
            let myRequest2 = new XMLHttpRequest();

            myRequest2.onload = function () {
                if (myRequest2.status === 200) { // daca e succes
                    let ourData = JSON.parse(myRequest2.response);
                    Req3(ourData.geoname_id);
                } else {
                    console.log("We connected to the server, but it returned an error.");
                }
            };
            myRequest2.open('GET', e.target.dataset["url"]);
            myRequest2.send();
        }
    });

    function Req3(geoname_id) {
        let myRequest3 = new XMLHttpRequest();
        myRequest3.onload = function () {
            if (myRequest3.status === 200) { // daca e succes
                let ourData = JSON.parse(myRequest3.response);
                console.log(ourData);
            } else {
                console.log("We connected to the server, but it returned an error.");
            }
        }
        myRequest3.open('GET', `https://app.ticketmaster.com/discovery/v2/events.json?keyword=devjam&source=universe&geoPoint=${geoname_id}&apikey=15sEmEPb3iOSOVmwoYq5D3rWGVFwrDkS`);
        myRequest3.send();
    }


    btn.addEventListener("click", function (e) {
        e.preventDefault(); // ca sa se incarce mai repede pagina
        let inputValue = document.getElementById('loc').value;
        if (inputValue === '') return;

        // cities request & request that requires authentication
        let myRequest = new XMLHttpRequest();

        myRequest.onload = function () {
            if (myRequest.status === 200) { // daca e succes
                let ourData = JSON.parse(myRequest.response);
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
        myRequest.open('GET', 'https://api.teleport.org/api/cities/?search=' + inputValue);
        myRequest.send();

    }); //END -> EventListener

}; // END -> window.onload