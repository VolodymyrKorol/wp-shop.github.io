

jQuery('.check-box').on('click', (e) => {
    e.target.classList.toggle('checkbox-checked')
    console.log(e.target.children[0].value)
})



jQuery('.arrow-slider').on('click',(e)=>{
    e.preventDefault();
})