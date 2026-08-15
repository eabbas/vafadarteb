

function action(element){
    element.parentElement.classList.toggle("translate-x-full")

    element.classList.toggle("w-80")

    element.parentElement.children[0].classList.toggle("translate-x-[-100px]")
    element.parentElement.children[0].classList.toggle("opacity-0")
    element.parentElement.children[0].classList.toggle("invisible")
    element.parentElement.children[2].classList.toggle("translate-x-[-100px]")
    element.parentElement.children[2].classList.toggle("opacity-0")
    element.parentElement.children[2].classList.toggle("invisible")
    element.children[0].classList.toggle("translate-x-[-100px]")
    element.children[0].classList.toggle("opacity-0")
    element.children[0].classList.toggle("invisible")

    element.parentElement.children[1].classList.toggle("translate-x-[100px]")
    element.parentElement.children[1].classList.toggle("opacity-100")
    element.parentElement.children[1].classList.toggle("invisible")
    element.parentElement.children[1].classList.toggle("translate-x-[100px]")
    element.parentElement.children[3].classList.toggle("opacity-100")
    element.parentElement.children[3].classList.toggle("invisible")
    element.children[1].classList.toggle("translate-x-[0px]")
    element.children[1].classList.toggle("opacity-100")
    element.children[1].classList.toggle("invisible")


}