<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/Style.css"> -->
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family:cursive;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            min-width: 100%;
            /* background: url(./css/teddy_bg.jpg); */
            background: linear-gradient(45deg,rgb(255, 161, 239),rgb(170, 234, 253));
            background-size: cover;
            background-repeat: no-repeat;
        }

        .wrapper{
            width: 470px;
            border-radius: 5px;
            padding: 25px 25px 30px;
        }
        .wrapper fieldset{
            text-align: center;
            height: 60px;
            -webkit-text-fill-color:black;
            font: bold;
        }
        .dt_picker{
            background:url(./css/paper_bg.jpg);
        }
        .wrapper h2{
            text-align: center;
        }
        .wrapper textarea{
            width: 100%;
            height: 50px;
            padding: 15px;
            outline: none;
            resize: none;
            font-size: 11px;
            margin-top: 20px;
            border-radius: 5px;
            border-color:aliceblue;
            margin-top: 20px;
            max-height: 200px;
            fill-opacity:initial;
            background:url(./css/paper_bg.jpg);
        }
        textarea:is(:focus, :valid){
            border-width: 2px;
            padding: 14px;
            border-color:aqua;
        }
        textarea::-webkit-scrollbar{
            width:0px;
        }
        .ent{
            width:100%;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <p>
            <fieldset>
                <legend>Select the date</legend>
                <label for="my_dates">Date : 
                    <input type="date" id="my_dates" class="dt_picker">
                </label>
            </fieldset>
            
        </p>
        <textarea placeholder="Type somthin'" id="txt" cols="30" rows="10"></textarea>
        <div class="ent">
            <input type="submit" onclick="data_adder()" value="SAVE">
        </div>
    </div>
    <script>
        // var dict_data_lst = [1,2,3,4];
        // function data_adder(){
        //     var fso = new ActiveXObject("Scripting.FileSystemObject");
        //     var fileLoc = "./data_store.csv";
        //     var file = fso.OpenTextFile(fileLoc,2,true,0);
        //     file.writeline(dict_data_lst)
        //     file.Close();
        //     alert('successfully saved..!');
        // }
        const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e =>{
            textarea.style.height = "50px";
            let scHeight = e.target.scrollHeight;
            textarea.style.height = `${scHeight}px`;
        })
    </script>
</body>
</html>