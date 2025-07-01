window.onload = function () {
const incomeBtn = document.querySelector('.income-btn');
const expenseBtn = document.querySelector('.expense-btn');

const modal = document.getElementById('incomeModal');
const expenseModal = document.getElementById('expenseModal');

const addIncomeBtn = document.getElementById('addIncomeBtn');
const addExpenseBtn = document.getElementById('addExpenseBtn');

const incomeDisplay = document.querySelector('.amt-inc');
const expenseDisplay = document.querySelector('.amt-exp');
const balanceDisplay = document.querySelector('.amt-bal');

const incomeCategoryBox = document.querySelector('.income-detail');
const expenseCategoryBox = document.querySelector('.expense-detail');

const incomeClose = document.getElementById('incomeClose');
const expenseClose = document.getElementById('expenseClose');

let totalIncome = 0;
let totalExpense = 0;

incomeDisplay.textContent = formatRupees(0);
expenseDisplay.textContent = formatRupees(0);
balanceDisplay.textContent = formatRupees(0);



function formatRupees(value) {
    return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR'
    }).format(value);
}

// Open modals
incomeBtn.onclick = () => {
    modal.style.display = "block";
};

expenseBtn.onclick = () => {
    expenseModal.style.display = "block";
};

// Close modals when clicking outside
// closeBtn.onclick = (e) => {
//     if (e.target == modal) modal.style.display = "none";
//     if (e.target == expenseModal) expenseModal.style.display = "none";
// };

// ---------Close-button----------------------
incomeClose.onclick = () => {
    modal.style.display = "none";
};

expenseClose.onclick = () => {
    expenseModal.style.display = "none";
};



// Add Income
addIncomeBtn.onclick = () => {
    const category = document.getElementById('incomeCategory').value;
    const amount = parseFloat(document.getElementById('incomeAmount').value);

    if (category && !isNaN(amount)) {
        totalIncome += amount;
        // incomeDisplay.textContent = `${totalIncome.toFixed(2)}`;
        incomeDisplay.textContent = formatRupees(totalIncome);
        updateBalance();

        if (incomeCategoryBox.innerText.trim() === 'No Data') {
            incomeCategoryBox.innerHTML = '';
        }

        // const newEntry = document.createElement('div');
        // newEntry.textContent = `${category}: ${formatRupees(amount)}`;
        // incomeCategoryBox.appendChild(newEntry);
        const newEntry = document.createElement('div');
        newEntry.className = 'entry-box income-data';

        newEntry.innerHTML = 
        ` <div class="entry-header">
            <span class="entry-text">${category}</span>
            <span class="entry-amount">+${formatRupees(amount)}</span>
        </div>
        <div class="progress-bar">
        <div class="progress"></div>
        </div>
        
        `
        incomeCategoryBox.appendChild(newEntry);

        document.getElementById('incomeCategory').value = '';
        document.getElementById('incomeAmount').value = '';
        modal.style.display = "none";
    }
};

// Add Expense
addExpenseBtn.onclick = () => {
    const category = document.getElementById('expenseCategory').value;
    const amount = parseFloat(document.getElementById('expenseAmount').value);

    if (category && !isNaN(amount)) {
        totalExpense += amount;
        expenseDisplay.textContent = formatRupees(totalExpense);
        updateBalance();

        if (expenseCategoryBox.innerText.trim() === 'No Data') {
            expenseCategoryBox.innerHTML = '';
        }

        // const newEntry = document.createElement('div');
        // newEntry.textContent = `${category}: ${amount.toFixed(2)}`;
        // expenseCategoryBox.appendChild(newEntry);
        const newEntry=document.createElement('div');
        newEntry.className = 'entry-box expense-data';

        newEntry.innerHTML = `
        <div class="entry-header">
            <span class="entry-text">${category}</span>
            <span class="entry-amount">+${formatRupees(amount)}</span>
        </div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>`

        expenseCategoryBox.appendChild(newEntry);

        document.getElementById('expenseCategory').value = '';
        document.getElementById('expenseAmount').value = '';
        expenseModal.style.display = "none";
    }
};

// Update Balance
function updateBalance() {
    const balance = totalIncome - totalExpense;
    balanceDisplay.textContent = formatRupees(balance);
}

}