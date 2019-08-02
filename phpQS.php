<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-UMpQFQdby6sZ3T16Qz0uq+QsAA7AhfgfMhkZdFOjY8D5kfgRaU2RKE6wHNEo7062" crossorigin="anonymous">
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <style>
        html {
            height: 100%;
        }

        body {
            background-color: #2590eb;
            height: 100%;
        }

        .wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper .file-upload {
            height: 200px;
            width: 200px;
            border-radius: 100px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 4px solid #fff;
            overflow: hidden;
            background-image: linear-gradient(to bottom, #2590eb 50%, #fff 50%);
            background-size: 100% 200%;
            transition: all 1s;
            color: #fff;
            font-size: 100px;
        }

        .wrapper .file-upload input[type='file'] {
            height: 200px;
            width: 200px;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .wrapper .file-upload:hover {
            background-position: 0 -100%;
            color: #2590eb;
            cursor: pointer;
        }

        #kirim{
            background-color: #2590eb;
            border: 2px solid white;
            width: 150px;
            height:50px;
            border-radius: 15px;
            color: white; 
            cursor: pointer;
            transition-duration: 0.5s;
        }

        #kirim:hover{
            background-color: #f2076d;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1> Upload Gambar Anda </h1>
        <div class="file-upload">
            <form action="upload.php" method="post" enctype="multipart/form-data">

                <input type="file" name="fileToUpload" id="fileToUpload"><br><i class="fa fa-arrow-up"></i>
                <br>
        </div>
        <input id="kirim" style="margin-left: 50px;" type="submit" value="Send Image" name="submit">
        </form>
    </div>
</body>

</html>