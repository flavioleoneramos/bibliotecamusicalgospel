let obj = new Object()
obj.linha = "---------------------------------------"
for(let c = 0;c < obj.linha.length;c++){
  if(c == 0 || c == obj.linha.length - 1){
    if(c < obj.linha.length -1){
      console.log(obj.linha + "")
    }else{
      console.log("" + obj.linha)
    }
  }else if(c < 6){
    console.log("|" + "                                     " + "|")
    if(c < obj.linha.length - 1){
      //console.log("|")
    }
  }else{
    //console.log(" ")
  }
}