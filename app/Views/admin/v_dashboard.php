<!DOCTYPE html>
<html>

<head>
    <title><?= esc($title); ?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Dashboard Statistik Website" />
    <meta name="keywords" content="dashboard, analytics, admin" />
    <meta name="author" content="Ircham Ali" />
    <link rel="shortcut icon" href="<?= base_url('assets/backend/images/favicons/apple-touch-icon.png'); ?>">
    
    <!-- Styles -->
    <link href="<?= base_url('assets/backend/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/backend/plugins/fontawesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/backend/css/modern.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/backend/css/custom.css'); ?>" rel="stylesheet" />
    
    <!-- JavaScript Libraries -->
    <script src="<?= base_url('assets/backend/plugins/jquery/jquery-2.1.4.min.js'); ?>" defer></script>
    <script src="<?= base_url('assets/backend/plugins/bootstrap/js/bootstrap.min.js'); ?>" defer></script>
    <script src="<?= base_url('assets/backend/plugins/chartsjs/Chart.min.js'); ?>" defer></script>
</head>

<body class="page-header-fixed compact-menu page-sidebar-fixed">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <?= $this->include('layout/sidebar-dashboard'); ?>
        <div class="page-inner">
            <?= $this->include('layout/title-dashboard'); ?>
            
            <!-- Main Content -->
            <div id="main-wrapper">
                <div class="row">
                    <?php $stats = [
                        ['title' => 'Unique Visitors', 'count' => $all_visitors, 'icon' => 'icon-users', 'class' => 'success'],
                        ['title' => 'Page Views', 'count' => $all_post_views, 'icon' => 'icon-eye', 'class' => 'info'],
                        ['title' => 'All Posts', 'count' => $all_posts, 'icon' => 'icon-pencil', 'class' => 'warning'],
                        ['title' => 'Comments Received', 'count' => $all_comments, 'icon' => 'icon-bubbles', 'class' => 'danger']
                    ];
                    ?>
                    <?php foreach ($stats as $stat) : ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"> <?= esc(number_format($stat['count'])); ?> </p>
                                        <span class="info-box-title"> <?= esc($stat['title']); ?> </span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="<?= esc($stat['icon']); ?>" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <h4 class="panel-title">Visitors This Month</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="visitorChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->

            <div class="page-footer">
                <p class="no-s"> <?= date('Y'); ?> &copy; Powered by Ircham Ali.</p>
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("visitorChart").getContext("2d");
            var visitorChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?= json_encode($month); ?>,
                    datasets: [{
                        label: "Visitors",
                        backgroundColor: "rgba(34,186,160,0.2)",
                        borderColor: "rgba(34,186,160,1)",
                        data: <?= json_encode($value); ?>,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
</body>

</html>
