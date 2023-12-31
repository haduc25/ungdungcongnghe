<?php
/**
* 
*/
class BaseModel
{
	private $host='localhost';
	private $user='root';
	private $pass='';
	private $dbname='db_sp_mk15';
	private $connect=null;

	
	function __construct()
	{
		$this->ketnoi();
	}
	public function ketnoi(){
		$this->connect = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		mysqli_set_charset($this->connect, 'UTF8');
	}
	
	public function kiemtradangnhap($tk,$mk){
		$sql = "select * from quanlynguoidung where ten_nd='".$tk."' and matkhau_nd='".$mk."'";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function dembanghi($tk,$mk){
		$sql = "select * from quanlynguoidung where ten_nd='".$tk."' and matkhau_nd='".$mk."'";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$dem = 0;
		}else{
			$dem = 1;
			}
		return $dem;
	}
	public function layloaisanpham(){
		$sql="select * from loaisanpham";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;

	}
	public function laysanpham(){
		$sql="select * from sanpham,loaisanpham where sanpham.id_loaisp=loaisanpham.id_loaisp";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}

	public function laysanphamtheoidloai($idl){
		$sql="select * from sanpham,loaisanpham where sanpham.id_loaisp=loaisanpham.id_loaisp and sanpham.id_loaisp=$idl";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function themsanpham($ten,$link_ha,$gia,$ngay,$id_l,$mota){
		$sql = "insert into sanpham(ten_sp,hinhanh_sp,gia_sp,ngaynhap_sp,id_loaisp,mota_sp) values ('".$ten."','".$link_ha."','".$gia."','".$ngay."','".$id_l."','".$mota."')";
		$this->connect->query($sql);
	}
	public function laysanpham_id($id_sua){
		$sql="select * from sanpham where id_sp=$id_sua";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;

	}
	public function suasanpham($id_sua,$ten,$link_ha,$gia,$ngay,$id_l,$mota){
		$sql = "update sanpham set ten_sp='".$ten."',hinhanh_sp='".$link_ha."',gia_sp='".$gia."',ngaynhap_sp='".$ngay."',id_loaisp='".$id_l."',mota_sp='".$mota."' where id_sp='".$id_sua."'";
		$this->connect->query($sql);
	}
	public function xoasanpham($id_xoa){
		$sql = "DELETE FROM sanpham WHERE id_sp = '".$id_xoa."'";
		$this->connect->query($sql);
	}

	public function dangky($tendk, $emaildk, $mkdk) {
		$quyen_nd = 2;
	
		$sql = "INSERT INTO quanlynguoidung (ten_nd, email_nd, matkhau_nd, quyen_nd) VALUES ('$tendk', '$emaildk', '$mkdk', '$quyen_nd')";
		$this->connect->query($sql);
	}
	
	public function laysanphamnoibat(){
		$sql="SELECT * FROM `sanpham` ORDER BY `sanpham`.`id_loaisp` ASC LIMIT 4";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	
	public function laysanphammoinhat(){
		$sql="SELECT * FROM `sanpham` ORDER BY `sanpham`.`ngaynhap_sp` DESC";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function laysanphamngaunhien($slsp){
		$sql="SELECT * FROM sanpham ORDER BY RAND() LIMIT $slsp";
		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}

	public function laysanphamtheoid($id_cart){
		$get_id = implode(",", array_keys($id_cart));
        $sql = "SELECT * FROM `sanpham` WHERE `id_sp` IN (".$get_id.") ";

		$this->ketqua=$this->connect->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}

	public function laysanphamtheoidList($id_list) {
		$get_id = implode(",", $id_list);
		$sql = "SELECT * FROM `sanpham` WHERE `id_sp` IN (".$get_id.") ";
	
		$this->ketqua = $this->connect->query($sql);
		if ($this->ketqua->num_rows == 0) {
			$data = 0;
		} else {
			while ($row = $this->ketqua->fetch_assoc()) {
				$data[] = $row;
			}
		}
		return $data;
	}

	// basemodel.php
	public function timkiemsp($kw) {
		$sql = "SELECT * FROM `sanpham` WHERE `ten_sp` LIKE '%$kw%' OR `gia_sp` LIKE '%$kw%'";
		
		$this->ketqua = $this->connect->query($sql);
		if ($this->ketqua->num_rows == 0) {
			$data = 0;
		} else {
			while ($row = $this->ketqua->fetch_assoc()) {
				$data[] = $row;
			}
		}
		return $data;
	}

	

}
?>