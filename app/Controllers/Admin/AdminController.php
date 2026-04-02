<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\CommentModel;
// use App\Models\InboxModel;
use App\Models\VisitorModel;

class AdminController extends BaseController
{
    public function __construct()
    {
        // $this->inboxModel = new InboxModel();
        // $this->commentModel = new CommentModel();
        $this->visitorModel = new VisitorModel();
    }
    
    public function index()
    {
        // Statistik pengunjung per bulan
        $visitor = $this->visitorModel->visitor_statistics();
        $bulan = [];
        $value = [];

        if (!empty($visitor) && is_array($visitor)) {
            foreach ($visitor as $result) {
                $bulan[] = $result->tgl;
                $value[] = (float) $result->jumlah;
            }
        }

        // Menghindari error jika count_visitor_this_month() mengembalikan null atau string
        $monthly_visitors = $this->visitorModel->count_visitor_this_month();
        $visitor_this_month = 1; // Default agar tidak menyebabkan pembagian dengan nol

        if (is_object($monthly_visitors) && $monthly_visitors->getNumRows() > 0) {
            $row = $monthly_visitors->getRowArray();
            $visitor_this_month = (int) ($row['tot_visitor'] ?? 1);
        }

        // Perhitungan pengunjung berdasarkan browser
        $browsers = ['chrome', 'firefox', 'explorer', 'safari', 'opera', 'robot', 'other'];
        $visitor_percentage = [];

        foreach ($browsers as $browser) {
            $method = "count_{$browser}_visitors";
            $result = $this->visitorModel->$method();

            if (is_object($result) && $result->getNumRows() > 0) {
                $row = $result->getRowArray();
                $visitor_count = (int) ($row["{$browser}_visitor"] ?? 0);
                $visitor_percentage[$browser] = ($visitor_count / $visitor_this_month) * 100;
            } else {
                $visitor_percentage[$browser] = 0;
            }
        }

        // Data untuk tampilan dashboard
        $data = [
            'akun' => $this->akun ?? null, // Menghindari error jika tidak ada properti
            'title' => 'Dashboard',
            'active' => $this->active ?? null, // Menghindari error jika tidak ada properti
            // 'total_inbox' => $this->inboxModel->where('inbox_status', 0)->countAllResults(),
            // 'total_comment' => $this->commentModel->where('comment_status', 0)->countAllResults(),
            'breadcrumbs' => $this->request->getUri()->getSegments(),
            'month' => json_encode($bulan),
            'value' => json_encode($value),
            'all_visitors' => $this->visitorModel->count_all_visitors(),
            'chrome_visitor' => $visitor_percentage['chrome'],
            'firefox_visitor' => $visitor_percentage['firefox'],
            'explorer_visitor' => $visitor_percentage['explorer'],
            'safari_visitor' => $visitor_percentage['safari'],
            'opera_visitor' => $visitor_percentage['opera'],
            'robot_visitor' => $visitor_percentage['robot'],
            'other_visitor' => $visitor_percentage['other']
        ];

        return view('admin/v_dashboard', $data);
    }
}
