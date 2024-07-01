const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    prevBtn = form.querySelector(".prevBtn"),
    allInputs = form.querySelectorAll(".first input");


    nextBtn.addEventListener("click", () => {
        allInputs.forEach(input => {
            if(input.value !=" ")
                {
                    form.classList.add('setActive');
                }
                else
                {
                    form.classList.remove('setActive');
                
                }
        })
    })

    prevBtn.addEventListener("click", () =>
    {
        form.classList.remove('setActive');
    })