<!-- sql example -->

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<div class="main">

    <section class="a">
        <h1 style="margin-top:100px;"> WELCOME </h1>
        <p style="margin-bottom:20px;"> This is a simple website that is vulnerable to SQL injection </p>
        <p style="margin-bottom: 100px; padding: 5px; background: #D3D3D3; border-radius: 10px;"> var query = 'SELECT * FROM data WHERE name ="' + input + '"'; </p>
    </section>

    <section class="a">
        <input type="text" value="inject here" />
        <input type="button" class="inputv" value="submit" onclick="submit()" style="padding: 10px 20px 10px 20px; border-radius: 10px; border: none;"/>
    </section>

    <section class="a">
        <table id="table">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
            </tr>
        </table>
    </section>
        

    <script>

        /**
         * This function is called when the submit button is clicked
         * It will send a query to the database and return the result
         * in table format
         */
        function submit() {
            
            // get the input from the text box
            var input = document.getElementsByTagName("input")[0].value
            
            // ---------------------------------------------------
            // ------------------ SQL INJECTION ------------------
            // ---------------------------------------------------
            var query = 'SELECT * FROM data WHERE name ="' + input + '"';

            // send query to database
            var xhttp = new XMLHttpRequest()
            xhttp.open("POST", "database.php", true)
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
            xhttp.send("action=send&sql=" + query)

            // get response from database
            xhttp.onreadystatechange = function() {
                
                // check if the response is good, otherwise print error
                if (this.readyState == 4 && this.status == 200) {

                    // parse the results
                    var result = JSON.parse(this.responseText)
                    
                    // reset the table
                    document.getElementById("table").innerHTML = "<tr><th>id</th><th>name</th><th>description</th></tr>"
                    
                    // for each object returned add new row to the table
                    for (var i = 0; i < result.length; i++) {

                        // create the row
                        var tableRow = document.createElement("tr")

                        // add the id
                        var tableData = document.createElement("td")
                        tableData.innerHTML = result[i].id
                        tableRow.appendChild(tableData)

                        // add the name
                        tableData = document.createElement("td")
                        tableData.innerHTML = result[i].name
                        tableRow.appendChild(tableData)

                        // add the description
                        tableData = document.createElement("td")
                        tableData.innerHTML = result[i].description
                        tableRow.appendChild(tableData)

                        // add the row to the table
                        document.getElementById("table").appendChild(tableRow)
                    }
                    
                } else {
                    console.log("response was not good")

                    // do some error handling here
                }
            }
        }
    </script>
</div>