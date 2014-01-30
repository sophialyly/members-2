<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_link_membership($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href="'.  base_url().'index.php/membership/edit/'.$id.'">Edit</a>';
    $html .='<a href="'.  base_url().'index.php/membership/delete/'.$id.'">Delete</a>';
	//$html .='<a href="'.  base_url().'subscriber/add/'.$id.'">ADD PAYMENT</a>';
    $html.='</span>';
    
    return $html;
}
function get_link_invoice($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href="'.  base_url().'index.php/invoice/edit/'.$id.'">Edit</a>';
    $html .='<a href="'.  base_url().'index.php/invoice/delete/'.$id.'">Delete</a>'.'<br />';
	$html .='<a href="'.  base_url().'index.php/invoice/add_invoice_payment/'.$id.'">AddPayment</a>';
    $html.='</span>';
    
    return $html;
}
function get_link_payment($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href="'.  base_url().'index.php/payment/edit/'.$id.'">Edit</a>';
    $html .='<a href="'.  base_url().'index.php/payment/delete/'.$id.'">Delete</a>';
	//$html .='<a href="'.  base_url().'subscriber/add/'.$id.'">ADD PAYMENT</a>';
    $html.='</span>';
    
    return $html;
}
function get_link_member($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
	$html .='<a href="'.  base_url().'index.php/member/single_view/'.$id.'">View</a>';
    $html .='<a href="'.  base_url().'index.php/member/edit/'.$id.'">Edit</a>';
    $html .='<a href="'.  base_url().'index.php/member/delete/'.$id.'">Delete</a>';

    $html.='</span>';
    
    return $html;
}