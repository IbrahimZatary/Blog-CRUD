<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<style>

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 10px;
        }
        
        h1 {
            text-align: center;
            color: #000;
            margin: 10px 0;
            font-size: 2.1rem;
        }
        
        .register {
            background-color: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }
        
        .register h1 {
            color: #222;
            font-size: 1.8rem;
            margin-bottom: 15px;
            text-align: left;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        input {
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fafafa;
            transition: border-color 0.3s;
        }
        
        input:focus {
            outline: none;
            border-color: #555;
            background-color: #fff;
        }
        
        input::placeholder {
            color: #666;
        }
        
        button {
            background-color: #000;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.5s;
            margin-top: 10px;
        }
        
        button:hover {
            background-color: rgb(255, 255, 255);
            color: black;
            border: 1px solid black ;
        }
        
        
        
        /* responsive */
        @media (max-width: 600px) {
            .register {
                padding: 20px;
                margin: 0 10px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .register h1 {
                font-size: 1.5rem;
            }
        }
</style>
<body>
    <h1>ZataryBlog.</h1>
    <div class="register">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            {{--  required is handlled by controller validate  --}}
            <label for="email">Email : </label>
            <input name="email" type="email" placeholder="Enter your Email" >
            <label for="name">Name : </label>
            <input name="name" type="text" >
            <label for="password">Password : </label>
            <input name="password" type="password" >
            <ul>
                <ul>
                    <li>Be between 8 and 20 characters long</li>
                    <li>Include at least one uppercase letter</li>
                    <li>One lowercase letter</li>
                    <li>least one number</li>
                    <li>One special character (e.g., !@#$%)</li>
                </ul>
            </ul>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>