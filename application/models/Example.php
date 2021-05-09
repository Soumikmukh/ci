<?php

class Example extends CI_Model{
	function data($demand_id,$origin_country,$new_port){
	$sql = "select tf.tf_id, tu.company_name,tpd1.tpo_name as origin_port, tpd.tpo_name, tmc.country_name, tf.tf_freight_price, tcl.currency_position,
(CASE
WHEN tf.tf_term = 'incl_dthc' THEN 'Incl DTHC'
WHEN tf.tf_term = 'excl_dthc' THEN 'Excl DTHC'
WHEN tf.tf_term = 'lifo' THEN 'LIFO'
WHEN tf.tf_term = 'lilo' THEN 'LILO'
ELSE ''
END) AS freight_term_txt,
(CASE
WHEN tu.user_type = 1 THEN 'superadmin'
WHEN tu.user_type = 2 THEN 'customer'
WHEN tu.user_type = 4 THEN 'shipper'
ELSE ''
END) AS added_by_user_type
from tbl_freight tf
left join tbl_mng_country tmc on tmc.country_id=tf.tf_destination
left join tbl_port_details tpd on tpd.tpo_id=tf.tf_destination_port
left join tbl_port_details tpd1 on tpd1.tpo_id=tf.tf_origin_port
left join tbl_currency_list tcl on tcl.currency_position=tf.tf_freight_currency
left join tbl_user tu on tu.id=tf.tf_shipper_ref
where tf.tf_origin= ? and tf.tf_validity >=curdate() and tf.is_active='1' and
(find_in_set( ? ,tf.invite_supplier_list) or tf.tf_added_by= ? ) AND tf.tf_destination_port IN ? ";

	$data = $this->db->query($sql, array($origin_country,$demand_id,$demand_id,$new_port));
// 	echo $this->db->last_query();
// 	echo "<br>";

// die();
	return $data->result();
	}
	
}

?>