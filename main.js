window.addEventListener("load", initSite); 

document.getElementById("saveHoroscope").addEventListener("click", addInput)
document.getElementById("updateHoroscope").addEventListener("click", addUpdate)
document.getElementById("deleteHoroscope").addEventListener("click", addDelete)

async function initSite() {
    try {

        let body = new FormData()
        body.set("date", inputDate)

    } catch(err) {
        console.error(err)

    }
}

async function addResultInput() {
    document.getElementById("resultInput").innerText = result;
    let option = {method: "GET", body}
    let resultInput = await makeRequest("./API/viewHoroscope.php", option, body); 
    console.log(resultInput)

}



async function addInput() {
    let inputDate = document.getElementById("inputDate").value; 
    let date = new Date(inputDate)
    birthdayInput = {month: date.getMonth() +1, day: date.getDate()}; 

    let body = new FormData()
    body.set("date", JSON.stringify(birthdayInput))
    let option = {method: "POST", body}
    let result = await makeRequest("./API/addHoroscope.php", option); 
    console.log(result)

    
}

async function addUpdate() {
    let inputDate = document.getElementById("updateHoroscope").value; 
    let body = new FormData()
    body.set("date", inputDate)
    let option = {method: "POST", body}
    let result = await makeRequest("./API/updateHoroscope.php", option); 
    console.log(result)


}

async function addDelete() {
    let deleteInput = document.getElementById("deleteHoroscope").value;
    let option = {method: "DELETE"}
    let result = await makeRequest("./API/deleteHoroscope.php", option); 
    console.log(result)

}



async function makeRequest(url, option) {
    try {
        let response = await fetch(url, option)
        let result = await response.json()
        return result 


    } catch(err) {
        console.error(err)

    }


}