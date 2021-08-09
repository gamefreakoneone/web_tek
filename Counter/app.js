// Set initial count
let count = 0;

// Select values and buttons
const value = document.querySelector("#value");
const btns = document.querySelectorAll(".btn");

btns.forEach(function (btn) {
    btn.addEventListener('click', function (e){
        console.log(e.currentTarget.classList);
        const styles = e.currentTarget.classList;
        if(styles.contains('decrease')){
            count--;
        } else if (styles.contains("reset")){
            count=0;
        } else if (styles.contains("increase")) {
            count++;
        }

        if(count>0){
            value.style.color = 'green';
        } else if (count < 0){
            value.style.color = 'red';
        } else if (count == 0){
            value.style.color = '#222';
        }
        value.textContent= count;
    })
})

// console.log(btns);