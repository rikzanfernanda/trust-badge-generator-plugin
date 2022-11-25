let tbg_image;
window.onload = function () {
    tbg_image = new TrustBadgeGeneratorImage();
    let btnGenerate = document.querySelector('#trust_badge_generator #btn-generate')
    let modalElement = document.querySelector('#trust_badge_generator .trust_badge_generator-modal')
    let tab1 = document.querySelector('#trust_badge_generator .tab-1')
    let tab2 = document.querySelector('#trust_badge_generator .tab-2')
    let btnWrapper = document.querySelector('#trust_badge_generator .btn-wrapper')
    let btnDownload = document.querySelector('#trust_badge_generator #btnDownload')
    let colorpick = document.querySelector('#trust_badge_generator #colorpick')

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
            tab1.classList.add("hidden")
            tab2.classList.remove("hidden")
            btnWrapper.classList.remove("hidden")
            btnDownload.classList.remove("hidden")
        })
    })

    document.querySelector('#trust_badge_generator #btnPrev').addEventListener('click', function () {
        tab1.classList.remove("hidden")
        tab2.classList.add("hidden")
        btnWrapper.classList.add("hidden")
    })

    colorpick.addEventListener('change', function (e) {
        var colorpick = document.querySelector('#trust_badge_generator #colorpick').value;
        tbg_image.colorize(colorpick);
        // document.querySelector('#trust_badge_generator #colorpick').disabled = true;
    })

    btnDownload.addEventListener('click', function(e) {
        tbg_image.export();
    })
}