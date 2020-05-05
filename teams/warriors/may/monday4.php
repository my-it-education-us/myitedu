<?php
require_once 'database.php';
date_default_timezone_set('America/New_York');
class Birthday{
    private $db;
    public $parms;
    public $month;
    public $day;
    public $horoscopes;
    public $status = 'notsent';
    public function __construct()
    {
        //run this job at 12:01 every day
        $this->db = new \Database\database('MY-IT-EDUCATION.US');
        $this->month = date('m');
        $this->day = date('d');

        $this->parms = [
            'month' => $this->month,
            'day' => $this->day,
        ];
        $this->horoscopes = [
            'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn', 'Aquarius', 'Pisces'
        ];
    }

    public function fetchUsersByBirthday(){
        $sql = "SELECT * FROM birthdays WHERE EXTRACT(MONTH FROM dob) = $this->month and EXTRACT(DAY FROM dob) = $this->day and status = 0";
        $users = $this->db->sql($sql);

        if(count($users)>0){
            $this->sendMail();
        }
        return $this->db->sql($sql);
    }

    public function sendMail(){
        $this->status = 'sent';
        //Insantiating the mail class and send email to the user based on horoscope
        $this->updateDB();
    }

    public function updateDB(){
        $sql = "UPDATE birthdays SET status = 1, updated_at = '".date('Y-m-d h:i:s')."' WHERE EXTRACT(MONTH FROM dob) = $this->month and EXTRACT(DAY FROM dob) = $this->day and status = 0";
        return $this->db->sql($sql);
    }

}

$obj = new Birthday();
$obj = new Birthday();
$users = $obj->fetchUsersByBirthday();

echo "<pre>";
$today = date('Y-m-d');
$obj->month = (int) $obj->month;
echo "You were born as " . $obj->horoscopes[$obj->month];
echo "<hr>";
echo "Status: ". $obj->status;
echo "<hr>";
print_r($users);