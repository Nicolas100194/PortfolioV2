const h1 = document.getElementsByClassName('title-dynamique')
new Typewriter(h1[0],{
    loop: true,
    deleteSpeed: 30
})
    .changeDelay(20)
    .typeString('<span class="title-dev"> Javascript</span>')
    .pauseFor(1000)
    .deleteChars(10)
    .pauseFor(300)
    .typeString('<span class="title-dev"> Wordpress</span>')
    .pauseFor(1000)
    .deleteChars(9)
    .pauseFor(300)
    .typeString('<span class="title-dev"> php</span>')
    .pauseFor(1000)
    .deleteChars(3)
    .pauseFor(300)
    .start()