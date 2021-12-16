window.addEventListener("load", initSite); 

document.getElementById("saveHoroscope").addEventListener("click", addInput)
document.getElementById("updateHoroscope").addEventListener("click", addUpdate)
document.getElementById("deleteHoroscope").addEventListener("click", addDelete)

async function initSite() {
        addResultInput(); 

}

async function addResultInput() {
    let option = {method: "GET"}
    let resultInput = await makeRequest("./API/viewHoroscope.php", option); 
    if(resultInput) {
        document.getElementById("resultInput").innerText = resultInput;

    } else {
        document.getElementById("resultInput").innerText = ""; 
    }

}



async function addInput() {
    let inputDate = document.getElementById("inputDate").value; 
    if (!inputDate.length) {
        alert("Var vänlig och ange födelsedatum!");
        return
    } 
    let date = new Date(inputDate)
    birthdayInput = {month: date.getMonth() +1, day: date.getDate()}; 

    let body = new FormData()
    body.set("date", JSON.stringify(birthdayInput))
    let option = {method: "POST", body}
    let result = await makeRequest("./API/addHoroscope.php", option); 
    console.log(result)
    addResultInput()
    
}

async function addUpdate() {
    let addUpdateInput = document.getElementById("updateHoroscope").value; 
    if (addUpdateInput.length) {
        alert("Ange ett födelsedatum och spara för att kunna uppdatera!")
        
    } 
    let body = new FormData()
    body.set("date", addUpdateInput)
    let option = {method: "POST", body}
    let result = await makeRequest("./API/updateHoroscope.php", option); 
    console.log(result)
    addResultInput()
    // Lägg till en ny horoskop efter klick 
}

async function addDelete() { 
    let deleteInput = document.getElementById("deleteHoroscope").value;
    document.getElementById("inputDate").value = ""; 
    if(deleteInput == "") {
        alert("horoskopet har raderats"); 
    }
    
    let option = {method: "DELETE"}
    let result = await makeRequest("./API/deleteHoroscope.php", option); 
    console.log(result)
    addResultInput(); 

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