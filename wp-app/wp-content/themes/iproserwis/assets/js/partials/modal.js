const footerAboutUs = document.querySelector('.about-us a');
const footerCovid = document.querySelector('.covid-19 a');
const serviceBtns = document.querySelectorAll('.service__btn');

if (serviceBtns !== null) {
    serviceBtns.forEach((serviceBtn) => {
        serviceBtn.addEventListener('click', () => {

            let priceInput = document.querySelector('.price-input');
            let serviceInput = document.querySelector('.service-input');
            let servicePhone = document.querySelector('.service-phone-input')
            let modelPhone = document.querySelector('.problems__title').textContent;
            let nameService = serviceBtn.getAttribute('data-name-service')
            let priceNotOriginal = serviceBtn.getAttribute('data-price-not-original')
            let priceOriginal = serviceBtn.getAttribute('data-price-original')

            if (nameService) {
                serviceInput.value = nameService
            }
            if (modelPhone) {
                servicePhone.value = modelPhone.trimEnd().trimStart()
            }
            if (priceNotOriginal || priceOriginal) {

                priceInput.value = priceOriginal + ' ' + priceNotOriginal
            }
        })
    })
}

addModalForFooterItem(footerAboutUs, '#about_us');
addModalForFooterItem(footerCovid, '#covid-19');

function addModalForFooterItem(item, id) {
    if (item !== null) {
        item.href = 'javascript:;';
        item.setAttribute('data-fancybox', "");
        item.setAttribute('data-src', id);
    }
}
