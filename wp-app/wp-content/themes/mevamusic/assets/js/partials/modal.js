const header = document.querySelector('#header');

const commonParams = {
    animated: false,
    showClass: false,
    hideClass: false,

    closeButton: "top",
    dragToClose: true,

    Toolbar: false,
    Thumbs: false,
    helpers : {
        overlay : {
            opacity: 0.5,
            locked: true
        }
    }
}

Fancybox.bind('[data-fancybox="header"]', {
    ...commonParams,
    on: {
        ready: (fancybox) => {
            const headerModal = document.querySelector('.header-modal');
            header.classList.add('opening-menu');
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

Fancybox.bind('[data-fancybox="map"]', {
    ...commonParams,
    on: {
        ready: (fancybox) => {
            const headerModal = document.querySelector('.map-modal');
            const div = document.createElement("div");
            div.classList.add('global-modals-wrapper');

            div.innerHTML = headerModal.outerHTML;
            fancybox.$backdrop.after(div);
        },
    },
});

$('.js-service-card_btn').each(function () {
    const id = $(this).attr('id');
    const cardContainer = $(this).closest('.js-service-card');
    const cardTitle = cardContainer.find('.js-card__title').text()
    const cardDescription = cardContainer.data('description')
    let cardDescriptionList = cardContainer.find('.js-more-modal__list').prop('outerHTML');
    if (cardDescriptionList) {
        cardDescriptionList = cardDescriptionList.replace(/visually-hidden/g, '')
    }
    const cardImageUrl = cardContainer.find('.js-service-card__img').attr('src')
    const cardPrice = cardContainer.data('price')

    Fancybox.bind(`#${id}`, {
        ...commonParams,
        on: {
            ready: function (fancybox) {
                const headerModal = document.querySelector('.more-modal');
                const title = headerModal.querySelector('.more-modal__title')
                const description = headerModal.querySelector('.more-modal__description')
                const list = headerModal.querySelector('.more-modal__list')
                const image = headerModal.querySelector('.more-modal__image')
                const price = headerModal.querySelector('.more-modal__price')

                title.innerHTML = cardTitle;
                description.innerHTML = cardDescription.replace(/break-row/g, "<br/>")
                list.innerHTML = '';
                if(cardDescriptionList) {
                    list.innerHTML = cardDescriptionList
                }
                price.innerHTML = cardPrice
                image.src = cardImageUrl

                const div = document.createElement("div");
                div.classList.add('global-modals-wrapper');
                div.innerHTML = headerModal.outerHTML;
                fancybox.$backdrop.after(div);
            },
        },
        destroy : () => {
            image.src = ''
        },
    });
})