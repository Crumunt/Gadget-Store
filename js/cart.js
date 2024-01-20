const INCREMENT_BUTTON = document.querySelectorAll('.increment')
const DECREMENT_BUTTON = document.querySelectorAll('.decrement')

INCREMENT_BUTTON.forEach(increment => increment.addEventListener('click', () => {

    let quantity = increment.previousElementSibling
    let quantityValue = Number(quantity.textContent)
    quantityValue += 1;
    quantity.textContent = quantityValue

    CHECKBOX.forEach(checkbox => {
        if (checkbox.checked && quantity.classList.contains(checkbox.id)) {

            let productPrice = Number(document.querySelector(`span[class="${checkbox.id}"]`).textContent)

            totalPrice.textContent = Number(totalPrice.textContent) + productPrice
        }
    })

}))

DECREMENT_BUTTON.forEach(decrement => decrement.addEventListener('click', () => {

    let quantity = decrement.nextElementSibling
    let quantityValue = Number(quantity.textContent)
    quantityValue -= 1;

    CHECKBOX.forEach(checkbox => {
        if (checkbox.checked && quantity.classList.contains(checkbox.id)) {

            if (quantityValue <= 0) {
                quantity.textContent = 1
                return
            }

            let productPrice = Number(document.querySelector(`span.${checkbox.id}`).textContent)

            totalPrice.textContent = Number(totalPrice.textContent) - productPrice
        }
    })

    if (quantityValue <= 1) quantityValue = 1
    quantity.textContent = quantityValue

}))

const CHECKBOX = document.querySelectorAll('input[type="checkbox"]')
let numberOfItems = document.querySelector('.numberOfItems')
let totalPrice = document.querySelector('.totalPrice')

CHECKBOX.forEach(checkbox => checkbox.addEventListener('click', () => {

    let productPrice = Number(document.querySelector(`span.${checkbox.id}`).textContent)
    let productQuantity = Number(document.querySelector(`.quantity.${checkbox.id}`).textContent)

    if (checkbox.checked) {
        numberOfItems.textContent = Number(numberOfItems.textContent) + 1;
        totalPrice.textContent = Number(totalPrice.textContent) + (productPrice * productQuantity)
        checkbox.classList.add('selected')
    }
    if (!checkbox.checked && checkbox.classList.contains('selected')) {
        numberOfItems.textContent = Number(numberOfItems.textContent) - 1;
        totalPrice.textContent = Number(totalPrice.textContent) - (productPrice * productQuantity)
        checkbox.classList.remove('selected')
    }
    
}))