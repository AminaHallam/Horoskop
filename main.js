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
    let resultInput = await makeRequest(url, option, body, addInput); 
    console.log(resultInput)

}



async function addInput() {
    let inputDate = document.getElementById("inputDate").value; 
    let date = new Date(inputDate)
    
    let month = date.getMonth() +1
    let day = date.getDate() 
    console.log(month, day)


    let body = new FormData()
    body.set("date", inputDate)
    let option = {method: "POST", body}
    let result = await makeRequest("./API/addHoroscope.php", option); 
    console.log("saveDate")

    
}

async function addUpdate() {
    let inputDate = document.getElementById("updateHoroscope").value; 
    let body = new FormData()
    body.set("date", inputDate)
    let option = {method: "POST", body}
    let result = await makeRequest("./API/updateHoroscope.php", option); 
    console.log("addUpdate")


}

async function addDelete() {
    let deleteInput = document.getElementById("deleteHoroscope").value;
    
    let body = new FormData()
    body.set("date", deleteInput)
    let option = {method: "DELETE", body}
    let result = await makeRequest("./API/deleteHoroscope.php", option); 
    console.log("addDeleteInput")

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