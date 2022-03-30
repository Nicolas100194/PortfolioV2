let hamburgerIcon = document.getElementsByClassName('header-icon')
let sitePusher = document.getElementsByClassName('push')
let siteCache = document.getElementsByClassName('site-cache')

Array.from(hamburgerIcon).forEach(icon => {
    icon.addEventListener('click', () => {
        if(sitePusher[0].classList.length == 1) {
            sitePusher[0].classList.add('site-pusher')
        } else {
            sitePusher[0].classList.remove('site-pusher')
        }
    })
})

siteCache[0].addEventListener('click', ()=>{
    if(sitePusher[0].classList.length == 2){
        sitePusher[0].classList.remove('site-pusher')
    }
})