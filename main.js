window.addEventListener("load", initSite); 


async function initSite() {
    try {
        
        let GET = await makeRequest("./API/addHoroscope.php", {method: "GET"}); 
        console.log(GET)



        
        let POST = await makeRequest("./API/updateHoroscope.php", {method: "POST", body }); 
        console.log(POST)

    } catch(err) {
        console.error(err)

    }

}

async function makeRequest(url, option) {
    try {
        let response = await fetch(url, option)
        let result = response.json()
        return result 


    } catch(err) {
        console.error(err)

    }


}