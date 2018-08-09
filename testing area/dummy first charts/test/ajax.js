            //ajax CALL

            //    //call ajax
            var accessarray = [1,2,3,4];
            var results = [];
            var ajax = new XMLHttpRequest();
            var method = "GET";
            var url = "charts/data.php";
            var asynchronous = true;

            ajax.open(method, url, asynchronous);
            //sending ajax request
            ajax.send();

            //receiving response from data.php
            ajax.onreadystatechange = function () {

                var temp = [];
                var results = [];
                if (this.readyState == 4 && this.status == 200) {
                    // converting JSON back to array
                    var data = JSON.parse(this.responseText);
                    console.log(data) // for debugging


                    //looping throught the data
                    
                    for (var a = 0; a < data.length; a++) {
                        temp[a] = data[a].id;
                        alert("loop" + a + "=" + temp[a]);
                    }    
                }
            }
            
