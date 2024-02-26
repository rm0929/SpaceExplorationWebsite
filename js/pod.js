async function getAPIResponse() {
    const apiKey = "wpWkiJayFNIE6QYQh0afJxUyhUuGZCuWhf60D7KV"

    const space_pic_api = await fetch('https://api.nasa.gov/planetary/apod?api_key=' + apiKey);

    const response = await space_pic_api.json();

    return response;
}

(async () => { 
    const response = await getAPIResponse();
    // console.log(response);

    document.querySelector(".pod-title").innerHTML = response.title;
    document.querySelector(".pod-image").setAttribute("src", response.hdurl);
    document.querySelector(".pod-explained").innerHTML = response.explanation;
})();


document.querySelector(".see-more-less").addEventListener("click", (e) => {
    if(e.target.innerHTML == "See More"){
        document.querySelector(".pod-explained").style.display = "block";
        e.target.innerHTML = "See Less";
    }else{
        document.querySelector(".pod-explained").style.display = "none";
        e.target.innerHTML = "See More";
    }
});