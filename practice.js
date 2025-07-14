const incomeBtn = document.querySelector('.income-btn');
const expenseBtn = document.querySelector('.expense-btn');

const incomeAmount = document.querySelector(".amt-inc");
const expenseAmount = document.querySelector(".amt-exp");
const budgetamount = document.querySelector(".amt-bal");

const modal = document.getElementById('incomeModal');
const expenseModal = document.getElementById('expenseModal');

const incomeClose = document.getElementById("incomeClose");
const expenseClose = document.getElementById("expenseClose");

const addIncomeBtn = document.getElementById("addIncomeBtn");
const addExpenseBtn = document.getElementById("addExpenseBtn");

const incomeCategoryBox = document.querySelector(".income-detail");
const expenseCategoryBox = document.querySelector(".expense-detail");

let totalIncome = 0;
let totalExpense = 0;

incomeAmount.textContent = formateRupees(0);
expenseAmount.textContent = formateRupees(0);
budgetamount.textContent = formateRupees(0);

// ----------Currency convert to Rupees---------
function formateRupees(val) {
    let formatter = new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
    });
    let formattedvalue = formatter.format(val);
    return formattedvalue;
}

// -------Open-Model---------
incomeBtn.onclick = () => {
    modal.style.display = 'block';
}

expenseBtn.onclick = () => {
    expenseModal.style.display = 'block';
}

// -------Close-Model-----------


incomeClose.onclick = () => {
    modal.style.display = 'none';
}

expenseClose.onclick = () => {
    expenseModal.style.display = 'none';
}

// ------Add-income-----------

addIncomeBtn.onclick = () => {
    const category = document.getElementById('incomeCategory').value;
    const amount = parseInt(document.getElementById('incomeAmount').value);

    if (category && !isNaN(amount)) {
        totalIncome = totalIncome + amount;
        incomeAmount.textContent = formateRupees(totalIncome);
        updateBalance();


        if (incomeCategoryBox.innerText.trim() === 'No Data') {
            incomeCategoryBox.innerText = '';
        }
        // const newEntry = document.createElement('div');
        // newEntry.textContent = `${category} : ${formateRupees(amount)}`;
        // incomeCategoryBox.appendChild(newEntry);

        const newEntry = document.createElement('div');
        newEntry.className = 'entry-box income-entry';

        newEntry.innerHTML = `
            <div class="entry-header">
                <span class="entry-category">${category}</span>
                <span class="entry-amount">+${formateRupees(amount)}</span>
            </div>
             <div class="entry-bar">
                <div class="progress" style="width: 100%;"></div>
            </div>
            `

        document.getElementById('incomeCategory').value = '';
        document.getElementById('incomeAmount').value = '';
        modal.style.display = "none";
    }
}

// --------Add-Expense-----------

addExpenseBtn.onclick = () => {
    const category = document.getElementById('expenseCategory').value;
    const amount = parseInt(document.getElementById('expenseAmount').value);

    if (category && !isNaN(amount)) {
        totalExpense = totalExpense + amount;
        expenseAmount.textContent = formateRupees(totalExpense);
        updateBalance();


        if (expenseCategoryBox.innerText.trim() === 'No Data') {
            expenseCategoryBox.innerText = '';
        }
        // const newEntry = document.createElement('div');
        // newEntry.textContent = `${category} : ${formateRupees(amount)}`;
        // expenseCategoryBox.appendChild(newEntry);
        const newEntry = document.createElement('div');
        newEntry.className = 'entry-box expense-entry';

        newEntry.innerHTML = `
        <div class="entry-header">
        <span class="entry-category">${category}</span>
        <span class="entry-amount">-${formateRupees(amount)}</span>
        </div>
    <div class="entry-bar"><div class="progress" style="width: 100%;"></div></div>
`;

        expenseCategoryBox.appendChild(newEntry);


        document.getElementById('expenseCategory').value = '';
        document.getElementById('expenseAmount').value = '';
        expenseModal.style.display = "none";
    }
}


//--------- Update Balance -----------

function updateBalance() {
    const balance = totalIncome - totalExpense;
    budgetamount.textContent = formateRupees(balance);
};