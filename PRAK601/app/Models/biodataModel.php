<?php 
    namespace App\models;

    use CodeIgniter\Model;

    class biodataModel extends Model{
        protected $nama = "Andri Rahman";
        protected $nim = "2110817210007";
        protected $prodi = "Teknologi Informasi";
        protected $citaCita = "Pengusaha";
        protected $hobi = "Badminton";
        protected $skill = "Desain Grafis";
        protected $alamat = "Banjarmasin, Kalimantan Selatan";
        protected $mottoHidup = "Selesaikan yang sudah dimulai dan syukurii apapun hasilnya";

        public function getNama(){
            return $this->nama;
        }

        public function getNim(){
            return $this->nim;
        }

        public function getProdi(){
            return $this->prodi;
        }

        public function getCitaCita(){
            return $this->citaCita;
        }

        public function getHobi(){
            return $this->hobi;
        }

        public function getSkill(){
            return $this->skill;
        }

        public function getAlamat(){
            return $this->alamat;
        }

        public function getMotto(){
            return $this->mottoHidup;
        }

    }
?>