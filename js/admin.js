const MODAL = document.querySelector('#modal');
const OPEN_MODAL = document.querySelector('.add-button');
const CLOSE_MODAL = document.querySelector('.close-modal');

OPEN_MODAL.addEventListener('click', () => {
    MODAL.showModal();
})

CLOSE_MODAL.addEventListener('click', () => {
    MODAL.close();
})




function hide_session() {
    document.querySelector('.session').style.display = "none";
}

setTimeout(hide_session, 4000);