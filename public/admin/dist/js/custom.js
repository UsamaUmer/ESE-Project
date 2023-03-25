     
       var btn = document.querySelector("#sanan");
       btn.onclick = function(){

        var x=document.getElementById('footerId');
        x.style.display="none";
        var y=document.getElementById('sanan');
        y.style.display="none";
        var z=document.getElementById('had');
        z.style.display="block";
        z.style.textAlign="center";
        window.print();
        y.style.display="block";
        x.style.display="block";

      }
    