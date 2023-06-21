// document.addEventListener('DOMContentLoaded', () => {
//     const lightBtn = document.querySelector('.light--mode');
//     const darkBtn = document.querySelector('.dark--mode');
//     const root = document.documentElement;
//
//     // darkBtn.style.display = 'none';
//
//     // Remove the comment if you want to add the light theme
//
//     // lightBtn.addEventListener('click', () => {
//     //     root.setAttribute('color-mode', 'light');
//     //     lightBtn.style.display = "none";
//     //     darkBtn.style.display = "flex";
//     // });
//     //
//     // darkBtn.addEventListener('click', () => {
//     //     root.setAttribute('color-mode', 'dark');
//     //     darkBtn.style.display = "none";
//     //     lightBtn.style.display = "flex";
//     // });
//
//     // Remove the comment if you want to add the light theme
// });
//
// localStorage.removeItem('acf');

// document.addEventListener('DOMContentLoaded', () => {
//     const lightBtn = document.querySelector('.light--mode');
//     const darkBtn = document.querySelector('.dark--mode');
//     const root = document.documentElement;
//
//     // darkBtn.style.display = 'none';
//
//     // Remove the comment if you want to add the light theme
//
//     // lightBtn.addEventListener('click', () => {
//     //     root.setAttribute('color-mode', 'light');
//     //     lightBtn.style.display = "none";
//     //     darkBtn.style.display = "flex";
//     // });
//     //
//     // darkBtn.addEventListener('click', () => {
//     //     root.setAttribute('color-mode', 'dark');
//     //     darkBtn.style.display = "none";
//     //     lightBtn.style.display = "flex";
//     // });
//
//     // Remove the comment if you want to add the light theme
// });
//
// localStorage.removeItem('acf');

document.addEventListener('DOMContentLoaded', () => {
    const introText = document.querySelector('#introText');
    const freelancerNameElement = document.querySelector('.freelancer-name');

    if (introText && typeof freelancerData !== 'undefined' && freelancerData.freelancerName) {
        const text = `
      Nice to meet you my name is
       ${freelancerData.freelancerName}
    `;

        const typingSpeed = 100;
        const delayBeforeName = 100; // Delay of 2000 milliseconds (2 seconds)

        let charIndex = 0;
        let displayText = '';

        const type = () => {
            if (charIndex < text.length) {
                displayText += text.charAt(charIndex);
                introText.innerHTML = displayText;
                charIndex++;
                setTimeout(type, typingSpeed);
            } else {
                setTimeout(() => {
                    freelancerNameElement.textContent = freelancerData.freelancerName;
                }, delayBeforeName);
            }
        };

        type();
    }
});

