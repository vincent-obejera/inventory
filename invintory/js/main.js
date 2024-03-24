$("a.expansion-btn").click(function (){
    classes = this.className;
    var divNumber = classes.slice(-1);
    var toGetId = "#div-"+divNumber;
    if ($(toGetId).hasClass("expanded-div")){
     $(".normal-div").removeClass("compressed-div expanded-div");
    }
    else{
     $(".normal-div").removeClass("compressed-div expanded-div").addClass("compressed-div");;
     $(toGetId).removeClass("compressed-div").addClass("expanded-div");    
    }  
  });