<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Expense Tracker</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="header1">
            <img src="1logo.jpeg" class="logo"><p1 class="a" style="font-size: 30px; font-family: serif-script; color: white; font-weight: 800; cursor: pointer;" >Track My Money .<br>Start Tracking Your Money .</p1>
    </div>
    <div class="header">
        <?php
            $name1 = $_POST['username1'] ?? '';
            $name2 = $_POST['username2'] ?? '';
            if (empty($name1))
                {
                    if (empty($name2))
                        {
                            echo "<h1> Hey friend , let's start our money tracking journey. </h1>";
                        }
                    else
                        {
                            echo "<h1> Hey $name2 ! Welcome back ! </h1>";
                        }
                }
            else
                {
                    echo "<h1> Hello and Welcome $name1 ! let's get started our money tracking journey. </h1>";
                }
        ?>
        <div class="header-controls">
            <div class="date-picker">
                <i class="fas fa-calendar"></i>
                <span id="current-date">16 January 2026</span>
            </div>

            <div class="export-btn">
                <i class="fas fa-download"></i>
                Download
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Monthly Income</h3>
                    <button class="card-menu"><i class="fas fa-ellipsis-v"></i></button>
                </div>
                <div class="amount income-amount" style="color: white;">0</div>
                <div class="change">
                    <i class="fas fa-arrow-up"></i>
                    12% Vs Last Month
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Monthly Expense</h3>
                    <button class="card-menu"><i class="fas fa-ellipsis-v"></i></button>
                </div>
                    <div class="amount expense-amount" style="color: white;">0</div>
                <div class="change2">
                    <i class="fas fa-arrow-up"></i>
                    12% Vs Last Month
                </div>
            </div>

            <div class="card my-card">
                <div class="card-header">
                    <h3 class="card-title">My Card</h3>
                    <button class="card-menu" style="color: white;"><i class="fas fa-ellipsis-v"></i></button>
                </div>
                <div style="font-size: 0.75rem; opacity: 0.8; margin-bottom: 1rem;">Linked to your Primary Wallet</div>

                <div class="card-chip"></div>
                <div class="card-number">2355 4235 4521 8639</div>
                <div class="card-holder">Neel Bamania</div>

                <div class="card-logo">
                    <div class="card-logo-circle logo-red"></div>
                    <div class="card-logo-circle logo-orange"></div>
                </div>

                <div class="spending-section">
                    <div style="margin-bottom: 0.5rem; font-size: 0.875rem; opacity: 0.9;">Spending limit</div>
                    <div class="spending-limit">$4,645.00</div>
                    <div class="spending-used">Used from $12,645.00</div>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart-section">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Overview</h3>
                    <div style="display: flex; gap: 1rem;">
                        
                    </div>
                </div>

                <div class="chart-container" style="background: #b2d6fc;">
                    <div class="chart-bar" style="height: 120px;"></div>
                    <div class="chart-bar" style="height: 80px;"></div>
                    <div class="chart-bar active" style="height: 200px;">
                        <div style="position: absolute; top: -30px; left: 50%; transform: translateX(-50%); background: white; padding: 0.25rem 0.5rem; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-size: 0.75rem; ">
                            <div style="font-weight: 600;">April 2026</div>
                            <div style="color: #10b981;">Income: $894</div>
                            <div style="color: #ea580c;">Expense: $768</div>
                        </div>
                        <div class="chart-bar-income" style="height: 120px;"></div>
                        <div class="chart-bar-expense" style="height: 80px;"></div>
                    </div>
                    <div class="chart-bar" style="height: 150px;"></div>
                    <div class="chart-bar" style="height: 90px;"></div>
                    <div class="chart-bar" style="height: 110px;"></div>
                    <div class="chart-bar" style="height: 130px;"></div>
                    <div class="chart-bar" style="height: 100px;"></div>
                    <div class="chart-bar" style="height: 80px;"></div>
                    <div class="chart-bar" style="height: 140px;"></div>
                    <div class="chart-bar" style="height: 95px;"></div>
                    <div class="chart-bar" style="height: 105px;"></div>
                </div>

                <div class="chart-lables">
                    <span>Jan</span>
                    <span>Fab</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                    <span>Jun</span>
                    <span>Jul</span>
                    <span>Aug</span>
                    <span>Sep</span>
                    <span>Oct</span>
                    <span>Nov</span>
                    <span>Dec</span>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Expenses</h3>
                    <button class="card-menu"><i class="fas fa-ellipsis-v"></i></button>
                </div>

                <div style="font-size: 0.75rem; color: white; margin-bottom: 1rem;">Spending breakdown by catogory</div>

                <div class="expenses-breakdown">
                    <div class="total-expenses" style="color: #FFC401;">$24,645.00</div>

                    <div class="period-tabs">
                        <span class="period-tab">Daily</span>
                        <span class="period-tab">Weekly</span>
                        <span class="period-tab active" style="color: #FFC401;">Monthly</span>
                    </div>

                    <div class="period-amounts">
                        <span>Daily</span>
                        <span>Weekly</span>
                        <span>Monthly</span>
                    </div>

                    <div class="period-values">
                        <span>$1,345</span>
                        <span>$7,136</span>
                        <span>$14,927</span>
                    </div>

                    <div class="color-bar"></div>

                    <div class="expense-categories">
                        <ul class="expense-categories">
                            <li class="expense-category">
                                <div class="category-info">
                                    <div class="category-dot dot-food"></div>
                                    <span>Food & Health</span>
                                </div>
                                <span>863</span>
                            </li>

                            <li class="expense-category">
                                <div class="category-info">
                                    <div class="category-dot dot-entertainment"></div>
                                    <span>Entertainments</span>
                                </div>
                                <span>248</span>
                            </li>

                            <li class="expense-category">
                                <div class="category-info">
                                    <div class="category-dot dot-shopping"></div>
                                    <span>Shopping</span>
                                </div>
                                <span>1835</span>
                            </li>

                            <li class="expense-category">
                                <div class="category-info">
                                    <div class="category-dot dot-investment"></div>
                                    <span>Investment</span>
                                </div>
                                <span>1835</span>
                            </li>


                        </ul>


                    </div>
                </div>
            </div>
        </div>
        
        <div class="card transactions-section">
             <div class="card-header">
                <h3 class="card-title">Recent transactions</h3>
                <div class="filters">
                    
                </div>
             </div>

             <table class="transactions-table">
                <thead>
                    <tr>
                        <th>Date<i class="fas fa-sort"></i></th>
                        <th>Category<i class="fas fa-sort"></i></th>
                        <th>Amount<i class="fas fa-sort"></i></th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                       <td>Jan 14,2026</td>
                       <td>Subscription</td>
                       <td>$440.00</td>
                       <td><span class="status-success">Success</span></td>
                       <td><button class="action-btn"><i class="fas fa-ellipsis-h"></i></button></td>
                    </tr>

                    <tr>
                       <td>Jan 10,2026</td>
                       <td>Subscription</td>
                       <td>$440.00</td>
                       <td><span class="status-success">Success</span></td>
                       <td><button class="action-btn"><i class="fas fa-ellipsis-h"></i></button></td>
                    </tr>

                    <tr>
                       <td>Jan 8,2026</td>
                       <td>Subscription</td>
                       <td>$440.00</td>
                       <td><span class="status-success">Success</span></td>
                       <td><button class="action-btn"><i class="fas fa-ellipsis-h"></i></button></td>
                    </tr>
                </tbody>
             </table>
        </div>
    </div>

   <!--  income and expense button -->
     <div class="add-buttons">
        <button class="fab fab-income" onclick="openIncomeModal()" title="Add Income">
            <i class="fas fa-plus"></i>
        </button>

        <button class="fab fab-expense" onclick="openExpenseModal()" title="Add Expense">
            <i class="fas fa-minus"></i>
        </button>
     </div>

     <!-- income modal -->
      <div id="incomeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header" style=" background: #161F28;">
                <h2 class="modal-title" style=" color: #FFC401;">Add Income</h2>
                <button class="close-btn" onclick="closeModal('incomeModal')">&times;</button>
            </div>

            <div class="modal-body" style=" background: #194051;">
                <form  id="incomeForm" autocomplete="off">
                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Amount</label>
                        <input type="number" class="form-input" id="incomeAmount" placeholder="Enter Amount" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Category</label>
                        <select class="form-select" id="incomeCategory" required>
                            <option value="">Select Category</option>
                            <option value="salary">Salary</option>
                            <option value="freelance">Freelance</option>
                            <option value="business">Business</option>
                            <option value="investment">Investment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Description</label>
                        <input type="text" class="form-input" id="incomeDescription" placeholder="Enter Description" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Date</label>
                        <input type="date" class="form-input" id="incomeDate" required>
                    </div>
                </form>
            </div>

            <div class="modal-footer" style=" background: #194051;">
                <button class="btn btn-secondary" onclick="closeModal('incomeModal')" style=" background: #161F28;">Cancel</button>
                <button class="btn btn-primary" onclick="addIncome()">Add Income</button>
            </div>
        </div>
      </div>

      <div id="expenseModal" class="modal">
        <div class="modal-content">
            <div class="modal-header" style=" background: #161F28;">
                <h2 class="modal-title" style=" color: #FFC401;">Add Expense</h2>
                <button class="close-btn" onclick="closeModal('expenseModal')">&times;</button>
            </div>

            <div class="modal-body" style=" background: #194051;">
                <form  id="expenseForm" autocomplete="off">
                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Amount</label>
                        <input type="number" class="form-input" id="expenseAmount" placeholder="Enter Amount" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Category</label>
                        <select class="form-select" id="expenseCategory" required>
                            <option value="">Select Category</option>
                            <option value="food">Food</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="shopping">Shopping</option>
                            <option value="transport">Transport</option>
                            <option value="utilities">Utilities</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Description</label>
                        <input type="text" class="form-input" id="expenseDescription" placeholder="Enter Description" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style=" color: white;">Date</label>
                        <input type="date" class="form-input" id="expenseDate" required>
                    </div>
                </form>
            </div>

            <div class="modal-footer" style=" background: #194051;">
                <button class="btn btn-secondary" onclick="closeModal('expenseModal')" style=" background: #161F28;">Cancel</button>
                <button class="btn btn-primary" onclick="addExpense()">Add Expense</button>
            </div>
        </div>
      </div>

      <div class="footer">
            <p1>&copy; 2026 Track My Money . All Rights Reserved . Developed By Neel Bamania . <br> <br>
            <div class="follow">  
                Follow us on - <br>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            </p1>  
      </div>
    <script src="script.js"></script>
</body>

</html>