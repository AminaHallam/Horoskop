window.addEventListener("load", initSite); 


async function initSite() {

    let data = await makeRequest("./API/addHoroscope.php")
    let data = await makeRequest("./API/updateHoroscope.php")

}

async function makeRequest() {
    try {
        let response = await fetch()
        let result = response.json()
        return result 


    } catch(err) {
        console.error(err)

    }


}