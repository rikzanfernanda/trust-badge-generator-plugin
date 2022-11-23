window.onload = function () {
    let btnGenerate = document.querySelector('#trust_badge_generator #btn-generate')
    let modalElement = document.querySelector('#trust_badge_generator .trust_badge_generator-modal')
    let tab1 = document.querySelector('#trust_badge_generator .tab-1')
    let tab2 = document.querySelector('#trust_badge_generator .tab-2')
    let btnWrapper = document.querySelector('#trust_badge_generator .btn-wrapper')

    btnGenerate.addEventListener('click', function () {
        modalElement.classList.remove("hidden")
        tab1.classList.remove("hidden")
        tab2.classList.add("hidden")
        btnWrapper.classList.add("hidden")
    })
    document.querySelector('#trust_badge_generator .close').addEventListener('click', function () {
        modalElement.classList.add("hidden")
    })

    let btnChooseImg = document.querySelectorAll("#trust_badge_generator .img-preview button")
    btnChooseImg.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            let src = e.target.parentElement.querySelector("img").src

            tab1.classList.add("hidden")
            tab2.classList.remove("hidden")
            btnWrapper.classList.remove("hidden")
        })
    })

    document.querySelector('#trust_badge_generator #btnPrev').addEventListener('click', function () {
        tab1.classList.remove("hidden")
        tab2.classList.add("hidden")
        btnWrapper.classList.add("hidden")
    })
}