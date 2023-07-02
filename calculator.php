<!DOCTYPE html>
<html>

<head>
    <title>CALCULATOR</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <style>
        body {
            background: #33d9b2;
            font-size: 12px;
        }

        body,
        button,
        input {
            font-family: 'Righteous', cursive;
            font-weight: 700;
            letter-spacing: 1.4px;
        }

        .background {
            display: flex;
            min-height: 100vh;
        }

        .container {
            flex: 0 1 700px;
            margin: auto;
            padding: 10px;
        }

        .screen {
            position: relative;
            background: #3e3e3e;
            border-radius: 15px;
        }

        .screen:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            right: 20px;
            bottom: 0;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
            z-index: -1;
        }

        .screen-body {
            display: flex;
        }

        .screen-body-item {
            flex: 1;
            padding: 50px;
        }

        .screen-body-item.left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .select-style {

            appearance: none;

            background-color: transparent;
            border: none;
            padding: 0 1em 0 0;
            margin: 0;
            width: 100%;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            line-height: inherit;

        }


        .app-title {
            display: flex;
            /*flex-direction: column;*/
            justify-content: center;
            align-items: center;
            color: #33d9b2;

            font-size: 26px;
            text-transform: uppercase;
            border-left: 4px solid #218c74;
            padding: 10px;
        }

        .app-form-group {
            margin-bottom: 15px;
        }

        .app-form-group.buttons {
            margin-bottom: 0;
            text-align: right;
        }

        .app-form-control {
            width: 100%;
            padding: 10px 0;
            background: none;
            border: none;
            border-bottom: 1px solid #666;
            color: #ddd;
            font-size: 14px;
            text-transform: uppercase;
            outline: none;
            transition: border-color .2s;
        }

        .app-form-control::placeholder {
            color: #FFF;
        }

        .app-form-control:focus {
            border-bottom-color: #ddd;
        }

        .app-form-button {
            background: #33d9b2;
            border: none;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            outline: none;
            padding: 10px 12px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .app-form-button:hover {
            color: #218c74;
        }

        .showdata {
            text-align: center;
            color: white;
            font-size: 1.2rem;
            padding-top: -10px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <div class="animated infinite pulse">
                                CALCULATOR
                            </div>
                        </div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form method="POST">
                            <div class="app-form-group">
                                <input type="text" class="app-form-control" placeholder="ENTER THE FIRST NUMBER" name="num1"
                                    
                                >
                            </div>
                            <div class="app-form-group">
                                <input type="text" class="app-form-control" placeholder="ENTER THE SECOND NUMBER"
                                   name="num2">
                            </div>
                            <div class="select-style">
                                <select name="operation">
                                    <option value="add">ADD</option>
                                    <option value="sub">SUBSTRACT</option>
                                    <option value="mult">PRODUCT</option>
                                    <option value="div">DIVISION</option>
                                </select>
                            </div>
                            <br>

                            <div>
                                <input type="submit" name="submit" value="submit" class="app-form-button">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="app-form-group showdata">
                    <p>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $num1=$_POST['num1'];
                            $num2=$_POST['num2'];
                            $operation =$_POST['operation'];
                            switch ($operation) 
                            {
                                case 'add':$sum=$num1+$num2;
                                echo "The addition of two number is {$sum}";
                                    
                                    break;
                                case 'sub':$subtract=$num1-$num2;
                                echo "The subtraction of two number is {$subtract}";
                                    
                                    break;
                                case 'mult':$pro=$num1*$num2;
                                echo "The addition of two number is {$pro}";
                                    
                                    break;
                                case 'div':$division=$num1/$num2;
                                echo "The addition of two number is {$division}";
                                    
                                    break;
                                
                                
                                default:
                                   echo "wrong";
                                    break;
                            }
                            


                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
