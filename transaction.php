<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- -------------header------------- -->
    <header>
        <div class="h_container">
            <div class="logoo">
                <img src="img/logo.png" alt="logo" width="30px" height="30px">
                <h2 class="head-name">FINMAN</h2>
            </div>
            <div class="navigate">
                <nav>
                    <ul>
                        <li><a href="home.php">Dashboard</a></li>
                        <li><a href="transaction.php">Transaction</a></li>
                        <Li><a href="manage.php">Manage</a></Li>
                    </ul>
                </nav>
            </div>
            <button class="acc">
                <img src="img/setting.svg" class="acc-img">
            </button>
        </div>
    </header>

    <!-- ------------Transaction history---------- -- -->
    <div class="select transaction">

        <div class="over-text">
            Transaction History
        </div>

        <div class="date-select">
            <label for="start">Start Date:</label>
            <input type="date" name="start-date">
        </div>
    </div>
    <div class="line"></div>

    <!-- ----------transaction-table----------- -->
    <div class="transaction-detail">
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                    <td>shoes</td>
                    <td>01-10-2025</td>
                    <td class="exp">Expense</td>
                    <td class="amt">10000</td>
                </tr>
                <tr>    
                    <td>shoes</td>
                    <td>01-10-2025</td>
                    <td class="inc">Income</td>
                    <td class="amt">10000</td>
                </tr>
            </tbody>

        </table>
    </div>
    <!-- ---------------transaction-records----------- -->
</body>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Transaction Table</title>
<style>
body {
  font-family: Arial, sans-serif;
  padding: 20px;
  background-color: #f4f4f4;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color: white;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

th, td {
  padding: 12px 16px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #fafafa;
  color: #555;
}

.expense {
  color: red;
  background-color: #ffecec;
  border-radius: 5px;
  padding: 4px 8px;
  display: inline-block;
}

.income {
  color: green;
  background-color: #e0f9e0;
  border-radius: 5px;
  padding: 4px 8px;
  display: inline-block;
}
</style>
</head>
<body>

<h2>Transaction History</h2>

<table>
<thead>
  <tr>
    <th>Category</th>
    <th>Description</th>
    <th>Date</th>
    <th>Type</th>
    <th>Amount</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>👟 Shoes</td>
    <td>Shoes</td>
    <td>01/06/2025</td>
    <td><span class="expense">Expense</span></td>
    <td>₹6,000.00</td>
  </tr>
  <tr>
    <td>🧥 Clothes</td>
    <td>Clothes</td>
    <td>01/06/2025</td>
    <td><span class="expense">Expense</span></td>
    <td>₹3,000.00</td>
  </tr>
  <tr>
    <td>💰 Salary</td>
    <td>Salary</td>
    <td>01/06/2025</td>
    <td><span class="income">Income</span></td>
    <td>₹50,000.00</td>
  </tr>
  <tr>
    <td>🍲 Food</td>
    <td>Food</td>
    <td>01/06/2025</td>
    <td><span class="expense">Expense</span></td>
    <td>₹4,000.00</td>
  </tr>
  <tr>
    <td>📈 Investments</td>
    <td>Investments</td>
    <td>01/06/2025</td>
    <td><span class="income">Income</span></td>
    <td>₹50,000.00</td>
  </tr>
</tbody>
</table>

</body>
</html> -->

</html>