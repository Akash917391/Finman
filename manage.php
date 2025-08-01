<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage-FinMan</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
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
    <main>
        <div class="headline">
            <div class="mng-cn">
            <h2>Manage</h2>
            <p>Manage Your Account Setting And Category </p>
        </div>
        <div class="line"></div>
        <div class="mng-content">
        <div class="incm-ctgr">
            <div class="img">
                <img src="img/income.svg" alt="income img" height="35px" width="35px">
            </div>
            <div class="h2">
                <h2>Income Categories</h2>
                <p>Sorted by Name</p>
            </div>
           
        </div>
        <div class="incm">
        <div class="incm-boxes">
            <div class="emoji">😎</div>
            <div class="label">Business</div>
            <button class="remove all">🗑️  Remove</button>
        </div>
         <div class="incm-boxes">
            <div class="emoji">💵</div>
            <div class="label">Job</div>
            <button class="remove all">🗑️ Remove</button>
        </div>
        </div>
        </div>
         <div class="line"></div>
          <div class="incm-ctgr">
            <div class="img">
                <img src="img/expense.svg" alt="income img" height="35px" width="35px">
            </div>
            <div class="h2">
                <h2>Expense Categories</h2>
                <p>Sorted by Name</p>
            </div>
            
        </div>
        <div class="expense">
        <div class="expense-boxes">
            <div class="emoji">🛍️</div>
            <div class="label">Shopping</div>
            <button class="remove all">🗑️  Remove</button>
        </div>
         <div class="expense-boxes">
            <div class="emoji">🍔</div>
            <div class="label">Food</div>
            <button class="remove all">🗑️ Remove</button>
        </div>
        </div>
        </div>
        </div>
    </main>
</body>
</html>
