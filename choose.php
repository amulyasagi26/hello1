    <!DOCTYPE html>
    <html lang="en">
     
    <head>
        <meta charset="UTF-8">
        <title>Button demo</title>
        <style>
            button {
                border: 2px solid yellow;
                color: white;
                background-color: black;
                font-size: 30px;
            }
            
            button:hover {
                border: 2px solid yellow;
                color: yellow;
                background-color: black;
                font-size: 30px;
            }
            
            
        </style>
    </head>
     
    <body>
        
       
        <form action="admin.php" id="form1">
            <button onclick="onClick(this)" id="button1">admin</button>
               
        </form>
        <form action="index.html" id="form2">
           <button onclick="onClick(this)" id="button2">student</button>
        </form>

    </body>
    
    </html>
    