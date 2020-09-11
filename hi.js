let input = document.getElementById("search1");

const Http = new XMLHttpRequest();

async function getname(){

  const url='https://api.mojang.com/users/profiles/minecraft/rawbert';
  const response = await fetch(url);
  const data = await response.json(); 
  console.log(data);

}

getname();





input.addEventListener("keyup", function(event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
      // Cancel the default action, if needed
      alert(input.value);
      s(input.value);
      event.preventDefault();
      // Trigger the button element with a click
      document.getElementById("myBtn").click();
    }
  }); 



  /*
      data.array.forEach(element => {
        console.log('here');
        if(toLowerCase(string) == toLowerCase(element)){
            alert('Found!' + element);
        }



    });
    */