ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
});
    
ScrollReveal().reveal('.texto h2, .primeiroDados h2, .sintaxe', { origin: 'top' });
ScrollReveal().reveal('.function, .texto',  { origin: 'bottom' });
ScrollReveal().reveal('.image, .primeiroDados p, .descricao', { origin: 'left' });
ScrollReveal().reveal('.exemplo', { origin: 'right' });

const typed = new Typed('.anime', {
    strings: ['getcwd()', 'chdir()', 'dir()'],
    typedSpeed: 300,
    backSpeed: 300,
    backDelay: 300,
    loop: true
})