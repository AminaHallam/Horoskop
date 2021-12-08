window.addEventListener("load", initSite); 

document.getElementById("saveHoroscope").addEventListener("click", addInput)
document.getElementById("updateHoroscope").addEventListener("click", addUpdate)
document.getElementById("deleteHoroscope").addEventListener("click", addDelete)

async function initSite() {
    try {
        
        let GET = await makeRequest("./API/addHoroscope.php", {method: "POST"}); 
        console.log(GET)


        let body = new FormData()
        body.set("name", JSON.stringify(horoscopeList))

        
        let POST = await makeRequest("./API/updateHoroscope.php", {method: "POST", body: JSON.stringify(horoscopeList)}); 
        
        
        console.log(POST)

    } catch(err) {
        console.error(err)

    }

}



function addInput() {
    let inputDate = document.getElementById("inputDate").value; 
    console.log(inputDate)
    

    
}

function addUpdate() {
    let inputDate = document.getElementById("updateHoroscope").value; 
    console.log(inputDate)



}

function addDelete() {
    let deleteInput = document.getElementById("deleteHoroscope").value;
    console.log(deleteInput)



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