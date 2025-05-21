<?php
include ('../koneksi.php');
	echo $id = $_POST['id'];
	echo $nama =$_POST['nama'];
	echo $email = $_POST['email'];
	echo $password = $_POST['password'];
	
	                       $update = mysqli_query($conn, "UPDATE user SET
						   
                                        nama = '".$nama."',
                                        email = '".$email."',
                                        password = '".$password."' where
										id = '".$id."'");
                        if($update) {
                            echo 'berhasil';
							header('../member/setting.php');
                        }               
                        else{
                            echo 'gagal'.mysqli_error($conn);
                        }
	


                ?>