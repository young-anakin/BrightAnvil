document.addEventListener('DOMContentLoaded', ()=> {
const selectDrop = document.querySelector('#countries');


fetch('https://restcountries.com/v3.1/all').then(res =>{
    return res.json();

}).then(data=> {
    let output ="";
    data.array.forEach(country => {
        output += '<option value = "${country.name}">${country.name}</option>';
    })

selectDrop.innerHTML = output;
}).catch(err => {
    console.log(err);
})

});