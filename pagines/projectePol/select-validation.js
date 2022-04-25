(function() {

    $("select").on("changed.bs.select", 
          function(e, clickedIndex, newValue, oldValue) {
        console.log(this.value, clickedIndex, newValue, oldValue)
    });
  
  });