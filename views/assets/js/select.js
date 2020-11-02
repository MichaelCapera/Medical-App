var select = document.getElementById('bancos');
 select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    //console.log(selectedOption.value + ': ' + selectedOption.text);
    document.getElementById('banco').value = selectedOption.value;
    console.log('banco');
 });



