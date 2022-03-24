let projectsStage = document.getElementsByClassName('stage')
let projectsPerso = document.getElementsByClassName('personnel')
let projectsCnam = document.getElementsByClassName('cnam')
let btnProjects = document.getElementsByClassName('item-menu-projet')

function deleteCategorie(projects){
    Array.from(projects).forEach(function (project){
        project.classList.add('projet-delete')
    })
}

Array.from(btnProjects).forEach(project => {
    project.addEventListener('click', (e) => {
        let categorieCurrent = e.target.id
        if(categorieCurrent === 'btn-stage'){
            Array.from(projectsStage).forEach(function (project){
                if(project.classList.contains('projet-delete') == true) {
                    project.classList.remove('projet-delete')
                }
            })
            Array.from(projectsPerso).forEach(function (project){
                if(project.classList.contains('projet-delete') == false) {
                    deleteCategorie(projectsPerso)
                }
            })
            Array.from(projectsCnam).forEach(function (project){
                if(project.classList.contains('projet-delete') == false) {
                    deleteCategorie(projectsCnam)
                }
            })
        }
        if(categorieCurrent === 'btn-perso'){
            Array.from(projectsPerso).forEach(function (project){
                if(project.classList.contains('projet-delete') == true) {
                    project.classList.remove('projet-delete')
                }
            })
            Array.from(projectsStage).forEach(function (project){
                if(project.classList.contains('projet-delete') == false) {
                    deleteCategorie(projectsStage)
                }
            })
            Array.from(projectsCnam).forEach(function (project){
                if(project.classList.contains('projet-delete') == false) {
                    deleteCategorie(projectsCnam)
                }
            })
        }
        if(categorieCurrent === 'btn-cnam'){
            Array.from(projectsCnam).forEach(function (project){
                if(project.classList.contains('projet-delete') == true) {
                    project.classList.remove('projet-delete')
                }
            })
            Array.from(projectsStage).forEach(function (project){
                if(project.classList.contains('projet-delete') == false) {
                    deleteCategorie(projectsStage)
                }
            })
            Array.from(projectsPerso).forEach(function (project){
                if(project.classList.contains('projet-delete') == false) {
                    deleteCategorie(projectsPerso)
                }
            })
        }
    })
})



