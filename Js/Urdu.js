let firstNumber = document.getElementById('firstNumber');
let SecondNumber = document.getElementById('SecondNumber');
let copyIconOne = document.getElementById('copyIconOne');
let copyIconTwo = document.getElementById('copyIconTwo');
let newicon1 = document.getElementById('newicon1');
let newicon2 = document.getElementById('newicon2');
let FormContent = document.getElementById('FormContent');
let Applybtn = document.getElementById('Applybtn');
let Contactbtn = document.getElementById('Contactbtn');


copyIconOne.addEventListener('click', function () {
    if (firstNumber.value != "" || firstNumber.value.length >= 1) {
        navigator.clipboard.writeText(firstNumber.value);
        copyIconOne.style.display = "none";
        newicon1.innerHTML = "✔";

        setInterval(() => {
            copyIconOne.style.display = "inline";
            newicon1.innerHTML = "";

        }, 6000);

    }

})
copyIconTwo.addEventListener('click', function () {
    if (SecondNumber.value != "" || SecondNumber.value.length >= 1) {
        navigator.clipboard.writeText(SecondNumber.value);
        copyIconTwo.style.display = "none";
        newicon2.innerHTML = "✔";

        setInterval(() => {
            copyIconTwo.style.display = "inline";
            newicon2.innerHTML = "";

        }, 9000);

    }

})





// Form open and hide

Applybtn.addEventListener('click', function () {
    FormContent.style.display="inline"
})

Contactbtn.addEventListener('click', function () {
    FormContent.style.display="inline"
})

