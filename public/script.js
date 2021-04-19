function change(element){
    var a= element.innerHTML;
    switch(a){
        case "Coffee":
            document.getElementById("img").src="data:image/jpeg;base64,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";
            document.getElementById("text0").innerHTML="This is AMERICANO!";
            document.getElementById("text1").innerHTML="Do you want to drink AMERICANO?";
            break;
        case "Order Online":
            document.getElementById("img").src="data:image/png;base64,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";
            document.getElementById("text0").innerHTML="Do you want to ORDER?";
            document.getElementById("text1").innerHTML="Contact us OR write.";
            break;
        case "About Us":
            document.getElementById("img").src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTmreLzGu1ZhcfPQgQeC4NbBMv90mmMfIKwtw&usqp=CAU";
            document.getElementById("text1").innerHTML="Our address is Makatayev Street, Almaty!";
            break;
        case "Contacts":
            document.getElementById("img").src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSMg3hgyv63DMTe91JXFsLkR_94qEFX1B2Oxg&usqp=CAU";
            document.getElementById("text0").innerHTML="Contacts US...";
            document.getElementById("text1").innerHTML="To contact us, call THIS number:+7 777 777 77 77";
            break;
    }
        $("img").animate({left: '+=100px'},"slow" );
        $("img").animate({left: '-=100px'},"slow" );
    }
        function big(element){
            element.style.fontSize="25px";
        }
        function small(element){
            element.style.fontSize="15px";
           
          } 
        