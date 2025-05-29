<?php
require "includes/dashboard_header.php";
require "functions/functions.php";
?>

<body>
    <div class="navbar_container">
        <div class="logo_container">
            <a href="index.php">
                <img src="" alt="SkyCheap">
            </a>
        </div>

        <div class="logout_container">
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </div>
    <div class="main_container">
        <div class="sidebar_container">
            <div class="sidebar_header">
                <a href="dashboard.php">
                    <div class="username">Dansarkee</div>
                    <div class="balance">balance: N5000</div>
                </a>
            </div>

            <!-- <hr class="divider"> -->

            <div class="sidebar_menu" id="dashboard">
                <a href="dashboard.php"><i class="fa-solid fa-laptop"></i>Dashboard</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=data.php&title=buy_data_plans"><i class="fa-solid fa-signal"></i>Buy data</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=airtime.php&title=buy_airtime"><i class="fa-solid fa-phone"></i></i>Buy Airtime</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=cableTV_sub.php&title=purchase_cableTV_plan"><i class="fa-solid fa-tv"></i>Subscribe cableTV</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=electricity_bill.php&title=purchase_elctricity_plan"><i class="fa-solid fa-bolt"></i>Pay Electricity bill</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=educational_pin.php&title=buy_educational_pin"><i class="fa-solid fa-thumbtack"></i>Buy Educational pins</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=fund_wallet.php&title=fund_wallet"><i class="fa-solid fa-wallet"></i>Fund Wallet</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=transaction.php&title=transaction_history"><i class="fa-solid fa-tent-arrow-left-right"></i>Transactions</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=wallet_summary.php&title=wallet_summary"><i class="fa-solid fa-wallet"></i>Wallet Summary</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=referral.php&title=my_referrals"><i class="fa-solid fa-asterisk"></i>My referrals</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=price.php&title=veiw_latest_price"><i class="fa-solid fa-money-bill-1-wave"></i>Pricing</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php?file=account.php&title=my_account"><i class="fa-solid fa-file-invoice"></i>Account</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php"><i class="fa-solid fa-gear"></i>Setting</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php"><i class="fa-solid fa-tape"></i>Developers API</a>
            </div>

            <div class="sidebar_menu">
                <a href="dashboard.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
            </div>
        </div>

        <div class="mainbody">
            <div class="title">
                <?php echo get_titles(); ?>
            </div>

            <div class="main_content">
                <?php get_files(); ?>
            </div>
        </div>
    </div>
</body>

</html>