let links = document.getElementsByClassName("link-projet")
let popup = document.getElementsByClassName("modal")
let popupCurrent =  ""

function openPopup(){
    Array.from(links).forEach(link =>{
        link.addEventListener('click', ()=>{
            if(link.classList[2] == 'media-impact'){
                popup[0].style.display = "block"
                popupCurrent = 0
            }
            if(link.classList[2] == 'aqua-plaisir'){
                popup[1].style.display = "block"
                popupCurrent = 1
            }
            if(link.classList[2] == 'wordpress-perso'){
                popup[2].style.display = "block"
                popupCurrent = 2
            }
            if(link.classList[2] == 'system-solar'){
                popup[3].style.display = "block"
                popupCurrent = 3
            }
            if(link.classList[2] == 'theme-cnam'){
                popup[4].style.display = "block"
                popupCurrent = 4
            }
            if(link.classList[2] == 'portfolio'){
                popup[5].style.display = "block"
                popupCurrent = 5
            }
        })
    })
}


function closePopup(){
    document.addEventListener('click', (e)=>{
        if(e.target.classList[0] === "modal" && e.target.length != 2)
            popup[popupCurrent].style.display = "none"
    })
}



openPopup()
closePopup()