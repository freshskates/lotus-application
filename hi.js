let input = document.getElementById("search1");


function s(string){


/* d3.csv("db1.csv", function(data){
console.log(data);
});
}
*/
let FILE_LOCATION = './db1.csv';
fs.readFile(FILE_LOCATION, function (err, data) {
    if (err) throw err;
    if(data.includes('search string')){
     console.log(data)
    }
  });

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

}

  /*
      data.array.forEach(element => {
        console.log('here');
        if(toLowerCase(string) == toLowerCase(element)){
            alert('Found!' + element);
        }



    });
    */