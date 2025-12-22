<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hero {
            display: flex;
            /* columns: 1fr , 1fr,  1fr; */
            background-color: yellow;
            border: 1px solid green;
            /* flex-direction: row; */
            /* flex-wrap: wrap-reverse; */
        }

        .hero div {
  background-color: black;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
  color: white;
}
        @media (min-width:600px) {

            body {
                background-color: red;
            }

            .hero div {
                /* display: none; */
                /* opacity: 0; */
                /* background-color: red; */
                /* flex-direction: column; */
                
                

            }
            
        }
    </style>
</head>
<body>

<div class="hero">
    <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</div>
    
</body>
</html>