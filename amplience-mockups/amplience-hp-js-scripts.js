// controls the width of buttons for cards (so they on the same line on mobile) in HP 01-04-2023 DO NOT REMOVE 
document.addEventListener('DOMContentLoaded', function(event) {

    const graphicalAssetButtons = document.querySelectorAll('.buttons-box');

    graphicalAssetButtons.forEach((buttons) => {
        const buttonElements = buttons.querySelectorAll('.hp-cards-btn');
        const numButtons = buttonElements.length;
        let width;

        if (numButtons === 1) {
            buttonElements[0].style.minWidth = "160px";
            buttonElements[0].style.margin = "0";
            buttons.style.padding = "0 1rem";
            buttons.style.maxWidth = "550px";
        }
        else if (numButtons === 2) {
            width = 'calc(50% - 14px)';
            buttons.style.maxWidth = "550px";
        } else if (numButtons === 3) {
            width = 'calc(33.3% - 14px)';
        } else if (numButtons === 4) {
            width = 'calc(50% - 14px)';
            buttons.classList.add("four-btns-stack-2x2");
        }

        if (width) {
            buttonElements.forEach((button) => {
            button.style.width = width;
            button.style.maxWidth = '160px';
            });
        }
    });

});
// controls the width of buttons for cards (so they on the same line on mobile) in HP 01-04-2023 DO NOT REMOVE 