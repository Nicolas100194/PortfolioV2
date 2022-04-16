var links = document.getElementsByClassName("link-projet")
let popup = document.getElementsByClassName("modal")
let popupCurrent =  ""

function openPopup(){
    Array.from(links).forEach(link =>{
        link.addEventListener('click', (e)=>{
                popup[0].style.display = "block"
                if(e.target.id !== "")
                    popupCurrent = e.target.id
                    console.log(popupCurrent)
        })
    })
}

function closePopup(){
    document.addEventListener('click', (e)=>{
        if(e.target.classList[0] === "modal" && e.target.length != 2)
            popup[0].style.display = "none"
    })
}

function loadPopup(){
    let httpRequest = new XMLHttpRequest()
    httpRequest.onreadystatechange = function (){
        console.log(this)
        if(httpRequest.readyState === 4){

            let donnees = JSON.parse(httpRequest.response)
            donnees = Object.entries(donnees)

            donnees.forEach((item)=>{
                console.log(item.forEach((item2)=>{
                    console.log(item2[0])
                }))
            })
        }
    }
    httpRequest.open('GET', '../PortfolioV2/app/Projet.php', true)
    httpRequest.setRequestHeader('X-Requested-With', '')
    httpRequest.send()
}



loadPopup()
openPopup()
closePopup()