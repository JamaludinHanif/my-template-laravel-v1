<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            color: #999;
        }

        .container {
            /* max-width: 600px; */
            margin: 0 auto;
            padding: 20px;
        }

/*
        .header h1 {
            font-size: 24px;
            margin: 0;
        } */

        .invoice-info {
            margin-bottom: 40px;
        }

        .invoice-info div {
            margin-bottom: 10px;
        }

        .invoice-info span {
            display: inline-block;
            margin-right: 20px;
            /* width: 120px; */
            /* font-weight: bold; */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f5f5f5;
        }

        .table2 td {
            padding-right: 30px;
        }

        .judulInvoice {
            text-align: right;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }

        .total h3 {
            margin: 0;
            font-size: 18px;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>


<body>
    <div class="container">

        <table style="width: 100%;">
            <tr>
                <td>
                    <div>
                        <img src="https://adiva.co.id/storage/website/logo_website.png" width="50" alt="Company Logo"> <br>
                        Jamal Industri
                    </div>
                </td>
                <td style="text-align: right;">
                    <div>
                        <h1>INVOICE</h1>
                    </div>
                </td>
            </tr>
        </table>

        <div class="" style="height: 30px;"></div>

        <table class="table2">
            <tr>
                <td>
                    Invoice to
                </td>
                <td>
                    : Daniel Gallego
                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    : 123 Anywhere St., Any City, ST 12345
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal
                </td>
                <td>
                    : 06/09/2024
                </td>
            </tr>
        </table>

        <div class="" style="height: 30px;"></div>

        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A4 Paper (75gr/m2)</td>
                    <td>10</td>
                    <td>$20</td>
                    <td>$200</td>
                </tr>
                <tr>
                    <td>Pencil (12ea/box)</td>
                    <td>5</td>
                    <td>$15</td>
                    <td>$75</td>
                </tr>
                <tr>
                    <td>Ruler</td>
                    <td>2</td>
                    <td>$5</td>
                    <td>$10</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <h3>Subtotal: $285</h3>
            <h3>Tax (0%): $0</h3>
            <h3>Total: $285</h3>
        </div>

        <div class="payment-info">
            <h4>PAYMENT METHOD</h4>
            <p>Rimberio Bank</p>
            <p>Account Name: Alfredo Torres</p>
            <p>Account No.: 0123 4567 8901</p>
            <p>Pay by: 23 June 2023</p>
        </div>

        <div class="footer">
            <p>Thank you for your business!</p>
            <p>Authorized Signed</p>
            <p>123-456-7890 | 123 Anywhere St., Any City</p>
        </div>
    </div>
</body>
</html>
