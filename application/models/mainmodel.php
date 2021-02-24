<?php
class mainmodel extends CI_model
{
public function regist($a,$b)
{
$this->db->insert("login",$b);
$userid=$this->db->insert_id();
$a["user_id"]=$userid;
$this->db->insert("regtable",$a);
}
public function ecp($pass)
{
return password_hash($pass, PASSWORD_BCRYPT);
}

public function viewtab()
{
$this->db->select('*');
$this->db->join('login','login.id=regtable.user_id','inner');
  $qry=$this->db->get("regtable");
  return $qry;
 }
public function approve($id)
 {
$this->db->set('status','1');
$qry=$this->db->where("id",$id);
$qry=$this->db->update("login");
  return $qry;
 }
 public function reject($id)
{
$this->db->set('status','2');
$qry=$this->db->where("id",$id);
$qry=$this->db->update("login");
  return $qry;
       }
       public function selectpass($unm,$pass)
{
$this->db->select('password');
$this->db->from("login");
$this->db->where("uname",$unm);
$qry=$this->db->get()->row('password');
return $this->verifypass($pass,$qry);
}
public function verifypass($pass,$qry)
{
return password_verify($pass,$qry);
}
public function getuserid($unm)
{
$this->db->select('id');
$this->db->from("login");
$this->db->where("uname",$unm);
return $this->db->get()->row('id');
}
public function getuser($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
return $this->db->get()->row();
}
}
?>
