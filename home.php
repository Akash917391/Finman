<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <!-- -------------Greet-------------- -->

    <div class="greet">
        <div class="greet_text">Hello,User!</div>
        <div class="inc-exp-btn">
            <button class="income-btn">
                Income
            </button>

            <button class="expense-btn">
                Expense
            </button>
        </div>
    </div>

    <!-- ------------overview---------- -- -->

    <div class="select">

        <div class="over-text">
            Overview
        </div>

        <div class="date-select">
            <label for="start">Date:</label>
            <input type="date" name="start-date">
        </div>
    </div>

    <!-----------------dETAIL-SECTION------------------>

    <div class="detail">
        <div class="boxes">
            <img src="img/income.svg">
            <div class="info">
                <div class="box-txt">Income</div>
                <div class="amt-inc"></div>
            </div>
        </div>
        <div class="boxes">
            <img src="img/expense.svg">
            <div class="info">
                <div class="box-txt">Expense</div>
                <div class="amt-exp"></div>
            </div>
        </div>
        <div class="boxes">
            <img src="img/balance.svg">
            <div class="info">
                <div class="box-txt">Balance</div>
                <div class="amt-bal"></div>
            </div>
        </div>
    </div>


    <!-- ----------------CATEGORY-SECTION------------------->
    <div class="category-container">
        <div class="income-category">
            Income By Category
            <div class="income-detail">
                No Data
            </div>
        </div>
        <div class="expense-category">
            Expense By Category
            <div class="expense-detail">
                No Data
            </div>
        </div>
    </div>


    <!-- Income Modal Form -->


    <div id="incomeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add Income</h3>
                <span id="incomeClose" class="close">&times;</span>
            </div>
            <label>Category:</label>
            <input type="text" id="incomeCategory" placeholder="e.g. Salary">

            <label>Amount:</label>
            <input type="number" id="incomeAmount" placeholder="e.g. 5000">

            <label for="start">Date:</label>
            <input type="date" name="income-date">

            <button id="addIncomeBtn">Add</button>
        </div>
    </div>


    <!-- Expense Modal Form -->
    <div id="expenseModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add Expense</h3>
                <span id="expenseClose" class="close">&times;</span>
            </div>
            <label>Category:</label>
            <input type="text" id="expenseCategory" placeholder="e.g. Food">

            <label>Amount:</label>
            <input type="number" id="expenseAmount" placeholder="e.g. 2000">

            <label for="start">Date:</label>
            <input type="date" name="income-date">

            <button id="addExpenseBtn">Add</button>
        </div>
    </div>

    <!-- <script src="script.js"></script> -->
    <!-- <script src="practice.js"></script> -->
     <script src="prac.js"></script>

</body>

</html>
