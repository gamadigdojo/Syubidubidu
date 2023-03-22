<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset("CSS/adminPanel.css")}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <nav>
        <ul class="navbar">
            <li><a href="">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Products</a></li>
        </ul>
    </nav>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>PRODUCTS</th>
                    <th>PRICE</th>
                    <th>STOCK</th>
                    <th>TYPE</th>
                    <th>DESCRIPTION</th>
                    <th>EDIT/DELETE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-column">
                        <img src="1.png" alt="">
                        <div>
                            <h5>Name</h5>
                            <p>ID</p>
                        </div>
                    </td>
                    <td>Rp 12.000.000</td>
                    <td>12</td>
                    <td>Snack</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td>
                        <div style="display: flex; gap: 10px">
                            <a href="">
                                <button type="button" class="btn btn-success"><i class="uil uil-edit"></i></button>
                            </a>
                            <form action="" method="POST">
                                <button type="submit" class="btn btn-danger"><i class="uil uil-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="product-column">
                        <img src="1.png" alt="">
                        <div>
                            <h5>Name</h5>
                            <p>ID</p>
                        </div>
                    </td>
                    <td>Rp 12.000.000</td>
                    <td>12</td>
                    <td>Snack</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td>
                        <div style="display: flex; gap: 10px">
                            <a href="">
                                <button type="button" class="btn btn-success"><i class="uil uil-edit"></i></button>
                            </a>
                            <form action="" method="POST">
                                <button type="submit" class="btn btn-danger"><i class="uil uil-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>