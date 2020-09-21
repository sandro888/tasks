<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        form {
            display: flex;
            padding: 40px;
            flex-direction: column;
            width: 40%;
            margin: 0 auto
        }

        textarea {
            padding: 12px 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
            outline: none;

        }

        label {
            font-family: Arial, Helvetica, sans-serif;

            padding-top: 25px;
            padding-bottom: 5px
        }

        input {
            height: 30px;

            outline: none;
        }

        button {
            width: 30%;
            height: 40px;
            background: purple;
            color: white;
            border: 1px solid transparent;
            margin: 0 auto;
            text-transform: uppercase;
            margin-top: 25px;
            border-radius: 10px
        }

        button:hover {
            background: transparent;
            color: purple;
            border: 1px solid purple;
            transition: 0.3s;
            cursor: pointer;

        }
    </style>
</head>

<body>
    <form action="{{ route('testpost')}}" method="POST">
        @csrf
        <label>Name:</label>
        <input required type="text" name="name" />
        <label>lastName:</label>

        <input required type="text" name="lastname" />
        <label>Email :</label>

        <input required type="text" name="email" />
        <label>birth date :</label>
        <input required type="date" name="date" />
        <label>Stuff about you :</label>

        <textarea required name="biography" id="" cols="10" rows="10"></textarea>
        <button>submit</button>
    </form>
</body>

</html>