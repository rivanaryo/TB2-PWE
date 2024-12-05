// Ambil elemen counter
const counterElementUser = document.getElementById('user');
const counterElementStore = document.getElementById('store');
const counterElementRelation = document.getElementById('relation');
// mulai dari angka 1
let angkaUser = 1;
let angkaStore = 1;
let angkaRelation = 1;
let text = "+";
// membuat fungsi interval
function updateCounterUser(){
    if (angkaUser <= 500){
        counterElementUser.textContent = angkaUser+text;
        angkaUser++ ;
    }else{
        clearInterval(intervalUser);
    }

}

function updateCounterStore(){
    if (angkaStore <= 30){
        counterElementStore.textContent = angkaStore+text;
        angkaStore++;
    }else{
        clearInterval(intervalStore);
    }
}

function updateCounterRelation(){
    if (angkaRelation <=100){
        counterElementRelation.textContent = angkaRelation+text;
        angkaRelation++;
    }else{
        clearInterval(intervalRelation);
    }
}



let intervalUser = setInterval(updateCounterUser,2);
let intervalStore = setInterval(updateCounterStore,30);
let intervalRelation = setInterval(updateCounterRelation,15);

