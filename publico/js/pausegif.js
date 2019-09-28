const manual = new Freezeframe('.temas', {
    trigger: false
});
document.querySelector('.start')
    .addEventListener('click', () => {
        manual.start();
    });

document.querySelector('.stop')
    .addEventListener('click', () => {
        manual.stop();
    });