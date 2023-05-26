var c1 = document.getElementById("container1");
var c2 = document.getElementById("container2");
var c3 = document.getElementById("container3");


function printThings() {
    // ideally this would populate the webpage with images
    // for now this is going to contain exactly one image, repeated over and over

    for (let index = 0; index < 50; index++) {
        // print the first 50 photos

        var testImage1 = document.createElement("img");
        var testImage2 = document.createElement("img");
        var testImage3 = document.createElement("img");

        testImage1.setAttribute("src", "https://rlv.zcache.com.br/vaca_que_monta_um_patinete-r078a8eabc8cb490fb6831b6dbd18281b_agtbm_8byvr_736.jpg");
        testImage2.setAttribute("src", "https://images.unsplash.com/photo-1680109103347-9e6f19139870?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60");
        testImage3.setAttribute("src", "https://plus.unsplash.com/premium_photo-1676693583291-0056b190b6bc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60");

        document.getElementById("container1").appendChild(testImage1);
        document.getElementById("container2").appendChild(testImage2);
        document.getElementById("container3").appendChild(testImage3);

        for (let index = 0; index < 3; index++) {

            document.getElementById('mainframe').childNodes
        }
        
    }
}

document.addEventListener("readystatechange", printThings);