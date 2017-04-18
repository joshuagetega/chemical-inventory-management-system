<!DOCTYPE html>
<html>
 <head>
    <style>
    
        body {
            margin: 0;
            padding: 0;
            background-color: crimson;
        }
    
        div.container {
            margin-left: 25%;
        }
        
        #docLinks {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position:fixed;
            width:25%;
            height:100%;
            overflow: hidden;
            background-color: crimson;
            
        }
        
        
        
        #docLinks li a {
            display: block;
            color: white;
            text-align:left;
            padding:1em;
            border-bottom: 1px solid white;
            text-decoration: none;
        }
        
        #docLinks a:hover {
            background-color: #111111;
        }
        
        #upstairStock {
            font-family: "Trebuchet MS", Arial, Helvetica, Sans-serif;
            border-collapse: collapse;
            width: 100%
        }
        
        #upstairStock td, #upstairStock th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #upstairStock tr {background-color: #ccc;}
        

        
        #upstairStock th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ccc;
            color: black;
            
        }
        
        input[type=text], input[type=number], input[type=date], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: white;
        }
        
        input[type=submit] {
            width: 13%;
            background-color: green;
            color: white;
            padding: 7px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=reset] {
            width: 10%;
            background-color: crimson;
            color: white;
            padding: 7px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: blue;
        }
        
        #newStock, #moveToChase, #emptyBottles, #safetyIn, #safetyOut, #chemicalsOrdered {
            border: 2px solid white;
            border-radius: 5px;
            background-color: #ccc;
            margin: 20px 0;
            padding: 20px;
            max-width: 100%;
        }
        
        h2, p {
            text-align: center;
        }
        

    </style>
 </head>

 <body>
 
    <div>
        <ul id="docLinks">
            <li><a href="#newStock">New Chemicals</a></li>
            <li><a href="#moveToChase">Move Chemicals To Chase</a></li>
            <li><a href="#emptyBottles">Empty Bottles</a></li>
            <li><a href="#upstairStorage">Mezzanine Level Storage</a></li>
            <li><a href="#safetyIn">Safety Report: Chemicals Into Cleanroom</a></li>
            <li><a href="#safetyOut">Safety Report: Chemicals Out of Cleanroom</a></li>
        </ul>
    </div>
 
<div class="container">
    
    <div id="newStock">
        <h2>New bottles</h2>
        <form method="post" action=newBottles.php onsubmit="return confirm('Are you sure?')">

            <label for="chemical">Chemical</label>
            <select id="chemical" name="chemical" required>
                <option value="REMOVER PG">REMOVER PG</option>
                <option value="EBR-PG">EBR-PG</option>
                <option value="BAKER BTS-220">BAKER BTS-220</option>
                <option value="IPA">IPA</option>
                <option value="1165">1165</option>
                <option value="MIBK">MIBK</option>
                <option value="1:3 MIBK:IPA">1:3 MIBK:IPA</option>
                <option value="SU8 DEVELOPER">SU8 DEVELOPER</option>
                <option value="ACETONE">ACETONE</option>
                <option value="PRS-3000">PRS-3000</option>
                <option value="METHANOL">METHANOL</option>
                <option value="TCL">TCL</option>
                <option value="AL ETCHANT">ALUMINIUM ETCHANT</option>
                <option value="CR ETCHANT">CHROMIUM ETCHANT</option>
                <option value="GOLD ETCHANT">GOLD ETCHANT</option>
                <option value="HYDROBROMIC ACID">HYDROBROMIC ACID</option>
                <option value="BOE 5:1">BOE 5:1</option>
                <option value="BOE 7:1">BOE 7:1</option>
                <option value="HF 49%">HF 49%</option>
                <option value="ACETIC ACID">ACETIC ACID</option>
                <option value="HCL">HCL</option>
                <option value="SULFURIC ACID">SULFURIC ACID</option>
                <option value="PHOSPHORIC ACID">PHOSPHORIC ACID</option>
                <option value="AMMONIUM HYDROXIDE">AMMONIUM HYDROXIDE</option>
                <option value="POTASSIUM HYDROXIDE">POTASSIUM HYDROXIDE</option>
                <option value="SODIUM HYDROXIDE">SODIUM HYDROXIDE</option>
                <option value="351">351</option>
                <option value="CD-26">CD-26</option>
                <option value="MF 319">MF 319</option>
                <option value="MICRO DEV">MICRO DEV</option>
                <option value="AZ300 MIF DEVELOPER">AZ300 MIF DEVELOPER</option>
                <option value="AZ400K DEVELOPER">AZ400K DEVELOPER</option>
                <option value="AZ726 MIF DEVELOPER">AZ726 MIF DEVELOPER</option>
                <option value="NITRIC ACID">NITRIC ACID</option>
                <option value="HYDROGEN PEROXIDE">HYDROGEN PEROXIDE</option>

            </select>
            
            <label for="numberOfNewBottles">Number of bottles:</label>
            <input type="number" name="numberOfNewBottles" id="numberOfNewBottles" required>
            
        
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br> 
        
        </form>
    </div>
    
    <div id="moveToChase">
        <h2>Move Bottles To Chase</h2>
        <form method="post" action=moveToChase.php onsubmit="return confirm('Are you sure?')">

            <label for="chemical">Chemical</label>
            <select id="chemical" name="chemical" required>
                <option value="REMOVER PG">REMOVER PG</option>
                <option value="EBR-PG">EBR-PG</option>
                <option value="BAKER BTS-220">BAKER BTS-220</option>
                <option value="IPA">IPA</option>
                <option value="1165">1165</option>
                <option value="MIBK">MIBK</option>
                <option value="1:3 MIBK:IPA">1:3 MIBK:IPA</option>
                <option value="SU8 DEVELOPER">SU8 DEVELOPER</option>
                <option value="ACETONE">ACETONE</option>
                <option value="PRS-3000">PRS-3000</option>
                <option value="METHANOL">METHANOL</option>
                <option value="TCL">TCL</option>
                <option value="AL ETCHANT">ALUMINIUM ETCHANT</option>
                <option value="CR ETCHANT">CHROMIUM ETCHANT</option>
                <option value="GOLD ETCHANT">GOLD ETCHANT</option>
                <option value="HYDROBROMIC ACID">HYDROBROMIC ACID</option>
                <option value="BOE 5:1">BOE 5:1</option>
                <option value="BOE 7:1">BOE 7:1</option>
                <option value="HF 49%">HF 49%</option>
                <option value="ACETIC ACID">ACETIC ACID</option>
                <option value="HCL">HCL</option>
                <option value="SULFURIC ACID">SULFURIC ACID</option>
                <option value="PHOSPHORIC ACID">PHOSPHORIC ACID</option>
                <option value="AMMONIUM HYDROXIDE">AMMONIUM HYDROXIDE</option>
                <option value="POTASSIUM HYDROXIDE">POTASSIUM HYDROXIDE</option>
                <option value="SODIUM HYDROXIDE">SODIUM HYDROXIDE</option>
                <option value="351">351</option>
                <option value="CD-26">CD-26</option>
                <option value="MF 319">MF 319</option>
                <option value="MICRO DEV">MICRO DEV</option>
                <option value="AZ300 MIF DEVELOPER">AZ300 MIF DEVELOPER</option>
                <option value="AZ400K DEVELOPER">AZ400K DEVELOPER</option>
                <option value="AZ726 MIF DEVELOPER">AZ726 MIF DEVELOPER</option>
                <option value="NITRIC ACID">NITRIC ACID</option>
                <option value="HYDROGEN PEROXIDE">HYDROGEN PEROXIDE</option>

            </select>
            
            <label for="bottlesMovedToChase">Number of bottles:</label>
            <input type="number" name="bottlesMovedToChase" id="bottlesMovedToChase" required>
            
        
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br> 
        
        </form>
    </div>
    
    <div id="emptyBottles">
        <h2>Empty Bottles</h2>
        <form method="post" action=emptyBottles.php onsubmit="return confirm('Are you sure?')">

            <label for="chemical">Chemical</label>
            <select id="chemical" name="chemical" required>
                <option value="REMOVER PG">REMOVER PG</option>
                <option value="EBR-PG">EBR-PG</option>
                <option value="BAKER BTS-220">BAKER BTS-220</option>
                <option value="IPA">IPA</option>
                <option value="1165">1165</option>
                <option value="MIBK">MIBK</option>
                <option value="1:3 MIBK:IPA">1:3 MIBK:IPA</option>
                <option value="SU8 DEVELOPER">SU8 DEVELOPER</option>
                <option value="ACETONE">ACETONE</option>
                <option value="PRS-3000">PRS-3000</option>
                <option value="METHANOL">METHANOL</option>
                <option value="TCL">TCL</option>
                <option value="AL ETCHANT">ALUMINIUM ETCHANT</option>
                <option value="CR ETCHANT">CHROMIUM ETCHANT</option>
                <option value="GOLD ETCHANT">GOLD ETCHANT</option>
                <option value="HYDROBROMIC ACID">HYDROBROMIC ACID</option>
                <option value="BOE 5:1">BOE 5:1</option>
                <option value="BOE 7:1">BOE 7:1</option>
                <option value="HF 49%">HF 49%</option>
                <option value="ACETIC ACID">ACETIC ACID</option>
                <option value="HCL">HCL</option>
                <option value="SULFURIC ACID">SULFURIC ACID</option>
                <option value="PHOSPHORIC ACID">PHOSPHORIC ACID</option>
                <option value="AMMONIUM HYDROXIDE">AMMONIUM HYDROXIDE</option>
                <option value="POTASSIUM HYDROXIDE">POTASSIUM HYDROXIDE</option>
                <option value="SODIUM HYDROXIDE">SODIUM HYDROXIDE</option>
                <option value="351">351</option>
                <option value="CD-26">CD-26</option>
                <option value="MF 319">MF 319</option>
                <option value="MICRO DEV">MICRO DEV</option>
                <option value="AZ300 MIF DEVELOPER">AZ300 MIF DEVELOPER</option>
                <option value="AZ400K DEVELOPER">AZ400K DEVELOPER</option>
                <option value="AZ726 MIF DEVELOPER">AZ726 MIF DEVELOPER</option>
                <option value="NITRIC ACID">NITRIC ACID</option>
                <option value="HYDROGEN PEROXIDE">HYDROGEN PEROXIDE</option>

            </select>
            
            <label for="numberOfEmptyBottles">Number of bottles:</label>
            <input type="number" name="numberOfEmptyBottles" id="numberOfEmptyBottles" required>
            
        
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br> 
        
        </form>
    </div>
    
    <div id="upstairStorage">
        <h2 style="color:white;">Upstair Storage</h2>
        
        <table id="upstairStock">
        
        <tr><th>Chemical</th><th>Location</th><th>Shelf Life (Years)</th><th>Min</th><th>Max</th><th>Bottles In Stock</th><th>Bottles To Order</th></tr>
        
        <?php
            include "dbconnect.php";
            $sql = "SELECT chemical,location,shelf_life_in_years,min,max,num_bottles FROM CNS_database.upstair_storage ORDER BY location";
            $result = mysqli_query($conn,$sql);
            while ($chemical = mysqli_fetch_assoc($result)) {
                if (($chemical['num_bottles'] <= $chemical['min']) && ($chemical['max'] != 0)) {
                    echo "<tr style='background-color:white'>";
                } else {
                    echo "<tr>";
                }
                echo "<td>".$chemical['chemical']."</td>";
                echo "<td>".$chemical['location']."</td>";
                echo "<td>".$chemical['shelf_life_in_years']."</td>";
                echo "<td>".$chemical['min']."</td>";
                echo "<td>".$chemical['max']."</td>";
                echo "<td>".$chemical['num_bottles']."</td>";
                if ($chemical['num_bottles'] <= $chemical['min']) {
                    echo "<td>".($chemical['max'] - $chemical['num_bottles'])."</td></style>";
                } else {
                    echo "<td>"."0"."</td>";
                }
                echo "</tr>";
            }
        ?>
        
        </table>
        
        <br>

    
    </div>
    
    <div id="safetyIn">
        <h2>Safety Report: Chemicals Into Cleanroom</h2>
        <form method="post" action=chemicalsIntoCleanroom.php>
            Start date:
            <input type="date" name="startDate" required>
            End date:
            <input type="date" name="endDate" required>
            
            <input type="submit" name="export_excel" value="Export to Excel">
            <input type="reset" value="Reset">
        </form>

    </div>
    
    
    <div id="safetyOut">
        <h2>Safety Report: Bottles Out Of Cleanroom</h2>
        <form method="post" action=bottlesOutOfCleanroom.php>
            Start date:
            <input type="date" name="startDate" required>
            End date:
            <input type="date" name="endDate" required>
            
            <input type="submit" name="export_excel" value="Export to Excel">
            <input type="reset" value="Reset">
        </form>

    </div>
    
    <div id="chemicalsOrdered">
        <h2>Chemicals Ordered</h2>
        <form>

            <label for="chemical">Chemical</label>
            <select id="chemical" name="chemical" required>
                <option value="REMOVER PG">REMOVER PG</option>
                <option value="EBR-PG">EBR-PG</option>
                <option value="BAKER BTS-220">BAKER BTS-220</option>
                <option value="IPA">IPA</option>
                <option value="1165">1165</option>
                <option value="MIBK">MIBK</option>
                <option value="1:3 MIBK:IPA">1:3 MIBK:IPA</option>
                <option value="SU8 DEVELOPER">SU8 DEVELOPER</option>
                <option value="ACETONE">ACETONE</option>
                <option value="PRS-3000">PRS-3000</option>
                <option value="METHANOL">METHANOL</option>
                <option value="TCL">TCL</option>
                <option value="AL ETCHANT">ALUMINIUM ETCHANT</option>
                <option value="CR ETCHANT">CHROMIUM ETCHANT</option>
                <option value="GOLD ETCHANT">GOLD ETCHANT</option>
                <option value="HYDROBROMIC ACID">HYDROBROMIC ACID</option>
                <option value="BOE 5:1">BOE 5:1</option>
                <option value="BOE 7:1">BOE 7:1</option>
                <option value="HF 49%">HF 49%</option>
                <option value="ACETIC ACID">ACETIC ACID</option>
                <option value="HCL">HCL</option>
                <option value="SULFURIC ACID">SULFURIC ACID</option>
                <option value="PHOSPHORIC ACID">PHOSPHORIC ACID</option>
                <option value="AMMONIUM HYDROXIDE">AMMONIUM HYDROXIDE</option>
                <option value="POTASSIUM HYDROXIDE">POTASSIUM HYDROXIDE</option>
                <option value="SODIUM HYDROXIDE">SODIUM HYDROXIDE</option>
                <option value="351">351</option>
                <option value="CD-26">CD-26</option>
                <option value="MF 319">MF 319</option>
                <option value="MICRO DEV">MICRO DEV</option>
                <option value="AZ300 MIF DEVELOPER">AZ300 MIF DEVELOPER</option>
                <option value="AZ400K DEVELOPER">AZ400K DEVELOPER</option>
                <option value="AZ726 MIF DEVELOPER">AZ726 MIF DEVELOPER</option>
                <option value="NITRIC ACID">NITRIC ACID</option>
                <option value="HYDROGEN PEROXIDE">HYDROGEN PEROXIDE</option>

            </select>
            
            <label for="chemicalsOrdered">Number of bottles:</label>
            <input type="number" name="chemicalsOrdered" id="chemicalsOrdered" required>
            
        
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br> 
        
        </form>
    </div>
    
</div>
       
 </body>
 

</html>