function hideTopnav() {
    document.querySelector('.topMenu').classList.add('position');
    hasScrolled = false;
}

function showTopnav() {
    document.querySelector('.topMenu').classList.remove('position');
}

let hasScrolled;

document.addEventListener('scroll', function() {
    if (!hasScrolled) {
        hasScrolled = true;
        showTopnav();
    }
});

let tabs = document.querySelectorAll('.rules__list--a');

tabs.forEach((tab) => {
    tab.addEventListener('click', function(){
        setTimeout(function() {
            hideTopnav();
        }, 800);
    });
});