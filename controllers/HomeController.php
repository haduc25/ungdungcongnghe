<?php
session_start();
require_once 'models/BaseModel.php';
/**
* 
*/
class SanphamController
{
	public $model;
	function __construct()
	{
		$this->model = new BaseModel();
	}
	
	public function dieuhuong(){
		if (isset($_GET['action'])) {
			switch ($_GET['action']) {

					case 'taikhoan':
						include_once('views/taikhoan.php');
						if (isset($_POST['nutdangnhap'])) {
							$t=$_POST['tdn'];
							$m=$_POST['mk'];
							$dem1=$this->model->dembanghi($t,$m);
							$data2=$this->model->kiemtradangnhap($t,$m);
							if ($dem1 == 0) {
								echo "Đăng nhập thất bại";
							}else{
								$_SESSION['tennd']=$t;
								$_SESSION['quyennd']=$data2[0]['quyen_nd'];
								// header('Location:index.php');
								?>
									<script>location.href = 'index.php';</script>
								<?php
							}
						} elseif (isset($_POST['nutdangky'])) {
							$tendk = $_POST['tendk'];
							$emaildk = $_POST['emaildk'];
							$mkdk = $_POST['mkdk'];

							$this->model->dangky($tendk, $emaildk, $mkdk);

							// auto sign
							$dem1=$this->model->dembanghi($tendk,$mkdk);
							$data2=$this->model->kiemtradangnhap($tendk,$mkdk);
							
							$_SESSION['tennd']=$tendk;
							$_SESSION['quyennd']=$data2[0]['quyen_nd'];
							?>
								<script>location.href = 'index.php';</script>
							<?php
						}
						break;
					
				// page products
				case 'sanpham':
					$data = $this->model->layloaisanpham();
					$data1 = $this->model->laysanpham();
					if (isset($_GET['idloai'])) {
						$data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
					}
					include_once('views/sanpham.php');
					break;

				// page gioithieu
				case 'gioithieu':
					include_once('views/gioithieu.php');
					break;

				// page lienhe
				case 'lienhe':
					include_once('views/lienhe.php');
					break;

				// page products detail
				case 'chitietsanpham':
					$data = $this->model->layloaisanpham();
					$data1 = $this->model->laysanpham();
					$spnn = $this->model->laysanphamngaunhien(8);

					if (isset($_GET['idloai'])) {
						$data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
					}
					include_once('views/chitietsanpham.php');
					break;
					

				// page cart
				// case 'giohang':
				// 	$data = $this->model->layloaisanpham();
				// 	$data1 = $this->model->laysanpham();

				// 	// $data1 = $this->model->laysanphamtheoidloai2();
				// 	$con2 = $this->model->ketnoi();
					
				// 	// echo "task: " . $_GET['task'];
				// 	// // exit;
				// 	// if (isset($_GET['task'])) {
				// 	// 	echo "task: " . $_GET['task'];
				// 	// 	// $data2 = $this->model->laysanphamtheoidloai($_GET['task']);
				// 	// 	// exit;
				// 	// }
				// 	include_once('views/giohang.php');
				// 	break;

				case 'giohang':
					$data = $this->model->layloaisanpham();
					$data1 = $this->model->laysanpham();
				
					if(!empty($_SESSION["cart"])){
						$id_cart = $_SESSION["cart"]; // Đây là danh sách id sản phẩm trong giỏ hàng
						$data_cart = $this->model->laysanphamtheoidList(array_keys($id_cart));
					}

					include_once('views/giohang.php');
					break;
				



				case 'themsanpham':
					$data = $this->model->layloaisanpham();
					$data1 = $this->model->laysanpham();
					include_once('views/them.php');
					if (isset($_POST['them'])) {
						$t=$_POST['tsp'];
						$l="anh/".$_POST['lha'];
						$g=$_POST['gsp'];
						$m=$_POST['mtsp'];
						$li=$_POST['idlsp'];
						$n=date('Y-m-d');
						$this->model->themsanpham($t,$l,$g,$n,$li,$m);
						header('Location: index.php?action=quantri');
					}
					break;

				case 'quantri':
					$data = $this->model->layloaisanpham();
					$data1 = $this->model->laysanpham();
					if (isset($_GET['idloai'])) {
						$data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
					}
					include_once('views/quantri.php');
					break;
				
				case 'sua':
					$data = $this->model->layloaisanpham();
					$data1 = $this->model->laysanpham();
					
					if (isset($_GET['id_sua'])) {
						$data2 = $this->model->laysanpham_id($_GET['id_sua']);
						include_once('views/sua.php');
						if (isset($_POST['sua'])) {
							$t=$_POST['tsp'];
							if ($_POST['lha']=="") {
								$l=$data2[0]['hinhanh_sp'];
							}else{
								$l="anh/".$_POST['lha'];
							}
																				
							$g=$_POST['gsp'];
							$m=$_POST['mtsp'];
							$li=$_POST['idlsp'];
							$n=date('Y-m-d');
							$this->model->suasanpham($_GET['id_sua'],$t,$l,$g,$n,$li,$m);
							header('Location:index.php?action=quantri');

						}
					}
					break;

					case 'xoasanpham':
						if (isset($_GET['id_xoa'])) {
							$id_xoa = $_GET['id_xoa'];
							$this->model->xoasanpham($id_xoa);
							header('Location: index.php?action=quantri');
						}
						break;

				default:
					break;
			}
		}else{
			$data = $this->model->layloaisanpham();
			$data1 = $this->model->laysanpham();

			$spnoibat = $this->model->laysanphamnoibat();
			$spmoinhat = $this->model->laysanphammoinhat();

			if (isset($_GET['idloai'])) {
				$data2 = $this->model->laysanphamtheoidloai($_GET['idloai']);
			}
			
			include_once('views/home.php');
		}
	}
	
}
?>