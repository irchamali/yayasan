<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table            = 'tbl_visitors';
    protected $primaryKey       = 'visit_id';
    protected $allowedFields    = ['visit_date', 'visit_ip', 'visit_platform'];
    
    // Update query
    function count_visitor($user_ip, $agent)
    {
        $cek_ip = $this->where('visit_ip', $user_ip)
                    ->where('DATE(visit_date)', 'CURDATE()', false)
                    ->countAllResults();

        if ($cek_ip < 1) {
            return $this->insert([
                'visit_ip'      => $user_ip,
                'visit_platform' => $agent,
            ]);
        }
    }
    
    // Update query 
    function visitor_statistics()
    {
        $query = $this->db->query("
            SELECT DATE_FORMAT(visit_date,'%d') AS tgl, COUNT(visit_ip) AS jumlah 
            FROM tbl_visitors 
            WHERE MONTH(visit_date) = MONTH(CURDATE()) 
            GROUP BY visit_date
        ");
    }

    function count_all_visitors()
    {
        $query = $this->db->table('tbl_visitors')->countAll();
        return $query;
    }

    function count_all_post_views()
    {
        $query = $this->db->table('tbl_post_views')->countAll();
        return $query;
    }

    function count_all_posts()
    {
        $query = $this->db->table('tbl_post')->countAll();
        return $query;
    }

    function count_all_comments()
    {
        $query = $this->db->table('tbl_comment')->countAll();
        return $query;
    }

    // Update query
    function top_five_articles()
    {
        return $this->db->table('tbl_post')
                        ->orderBy('post_views', 'DESC')
                        ->limit(5)
                        ->get()
                        ->getResult();
    }

    // Update query
    // function count_visitor_this_month()
    // {
    //     return $this->selectCount('visit_id', 'tot_visitor')
    //                 ->where('MONTH(visit_date)', 'MONTH(CURDATE())', false)
    //                 ->get()
    //                 ->getRowArray()['tot_visitor'];
    // }
    public function count_visitor_this_month()
    {
        return $this->db->table('tbl_visitors')
                        ->select('COUNT(visit_id) as tot_visitor')
                        ->where('MONTH(visit_date)', date('m'))
                        ->where('YEAR(visit_date)', date('Y'))
                        ->get(); // <-- Harus ada get()
    }

    // Update query
    function count_chrome_visitors()
    {
        return $this->selectCount('visit_id', 'chrome_visitor')
                    ->where('visit_platform', 'Chrome')
                    ->where('MONTH(visit_date)', 'MONTH(CURDATE())', false)
                    ->get()
                    ->getRowArray()['chrome_visitor'];
    }

    function count_firefox_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) firefox_visitor FROM tbl_visitors WHERE (visit_platform='Firefox' OR visit_platform='Mozilla') AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    function count_explorer_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) explorer_visitor FROM tbl_visitors WHERE visit_platform='Internet Explorer' AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    function count_safari_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) safari_visitor FROM tbl_visitors WHERE visit_platform='Safari' AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    function count_opera_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) opera_visitor FROM tbl_visitors WHERE visit_platform='Opera' AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    function count_robot_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) robot_visitor FROM tbl_visitors WHERE (visit_platform='YandexBot' OR visit_platform='Googlebot' OR visit_platform='Yahoo') AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }

    function count_other_visitors()
    {
        $query = $this->db->query("SELECT COUNT(*) other_visitor FROM tbl_visitors WHERE 
			(NOT visit_platform='YandexBot' AND NOT visit_platform='Googlebot' AND NOT visit_platform='Yahoo' 
			AND NOT visit_platform='Chrome' AND NOT visit_platform='Firefox' AND NOT visit_platform='Mozilla'
			AND NOT visit_platform='Internet Explorer' AND NOT visit_platform='Safari' AND NOT visit_platform='Opera') 
			AND MONTH(visit_date)=MONTH(CURDATE())");
        return $query;
    }
}
