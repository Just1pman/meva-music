const header = document.querySelector('#header');

Fancybox.bind('[data-fancybox="header"]', {
    animated: false,
    showClass: false,
    hideClass: false,

    closeButton: "top",
    dragToClose: true,

    Toolbar: false,
    Thumbs: false,

    on: {
        ready: (fancybox) => {
            header.classList.add('opening-menu');
            const headerModal = document.querySelector('.header-modal');


            const div = document.createElement("div");
            div.classList.add('global-modals-wrapper');
            div.innerHTML = headerModal.outerHTML;
            fancybox.$backdrop.after(div);
        },
        destroy : () => {
            header.classList.remove('opening-menu');
        },
    },
});