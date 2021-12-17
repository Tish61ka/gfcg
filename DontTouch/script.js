let btn = document.querySelector('.btn');
let sch = 0;
btn.onclick = (e) =>{
    e.preventDefault();
    
}
document.addEventListener('keypress', function(event){
    if(event.code=='KeyZ'){
    let data1 = a.value;
    data2 = parseInt(b.value) + data2;
    let vivod = document.getElementById(sch);
    if( sch > 0){
        vivod.innerHTML = data2;
    }else{
        vivod.innerHTML = '0';
    }
    sch++;
    if(sch>6){
        sch = 0;
    }
    }else{
        return;
    }
});