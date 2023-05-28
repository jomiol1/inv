<?php

  require_once('includes/load.php');

/*--------------------------------------------------------------*/
/* Function for find all database table rows by table name
/*--------------------------------------------------------------*/
function find_all($table) {
   global $db;
   if(tableExists($table))
   {
     return find_by_sql("SELECT * FROM ".$db->escape($table));
   }
}
/*--------------------------------------------------------------*/
/* Function for Perform queries
/*--------------------------------------------------------------*/
function find_by_sql($sql)
{
  global $db;
  $result = $db->query($sql);
  $result_set = $db->while_loop($result);
 return $result_set;
}

/*--------------------------------------------------------------*/
/*  Function for Find data from table by id
/*--------------------------------------------------------------*/
function find_latest_id($table)
{
  global $db;
  if(tableExists($table))
  {
    $sql    = "SELECT max(id) AS latest FROM ".$db->escape($table);    
    $result = $db->query($sql);
     return($db->fetch_assoc($result));
  }
}

/*--------------------------------------------------------------*/
/*  Function for Find latest id from table
/*--------------------------------------------------------------*/
function find_by_id($table,$id)
{
  global $db;
  $id = (int)$id;
    if(tableExists($table)){
          $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE id='{$db->escape($id)}' LIMIT 1");
          if($result = $db->fetch_assoc($sql))
            return $result;
          else
            return null;
     }
}


/*--------------------------------------------------------------*/
/*  Function for Find latest id from table
/*--------------------------------------------------------------*/
function find_by_id_par_value($table,$id,$par)
{
  global $db;
  $id = (int)$id;
    if(tableExists($table)){
          $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE {$db->escape($par)}='{$db->escape($id)}' LIMIT 1");
          if($result = $db->fetch_assoc($sql))
            return $result;
          else
            return null;
     }
}

/*--------------------------------------------------------------*/
/* Function for Perform queries
/*--------------------------------------------------------------*/
function find_by_id_par($table,$id,$par)
{
  global $db;
  $id = (int)$id;
  $results = array();
  $sql = "SELECT * FROM {$db->escape($table)} WHERE {$db->escape($par)}='{$db->escape($id)}' ";
  $result = find_by_sql($sql);
  return $result;
}

/*--------------------------------------------------------------*/
/* Function for Perform queries
/*--------------------------------------------------------------*/
function find_by_id_contrat($table,$id,$par,$par2)
{
  global $db;
  $id = (int)$id;
  $results = array();
  $sql = "SELECT * FROM {$db->escape($table)} WHERE {$db->escape($par)}='{$db->escape($id)}' and tipo='{$db->escape($par2)}'";
  $result = find_by_sql($sql);
  return $result;
}

/*--------------------------------------------------------------*/
/* Function for Delete data from table by id
/*--------------------------------------------------------------*/
function delete_by_id($table,$id)
{
  global $db;
  if(tableExists($table))
   {
    $sql = "DELETE FROM ".$db->escape($table);
    $sql .= " WHERE id=". $db->escape($id);
    $sql .= " LIMIT 1";
    $db->query($sql);
    return ($db->affected_rows() === 1) ? true : false;
   }
}
/*--------------------------------------------------------------*/
/* Function for Count id  By table name
/*--------------------------------------------------------------*/

function count_by_id($table){
  global $db;
  if(tableExists($table))
  {
    $sql    = "SELECT COUNT(id) AS total FROM ".$db->escape($table)." where active=1";
    $result = $db->query($sql);
     return($db->fetch_assoc($result));
  }
}

/*--------------------------------------------------------------*/
/* Function for Count id  By table name
/*--------------------------------------------------------------*/

function count_by_id_par($table,$row){
  global $db;
  if(tableExists($table))
  {
    $sql    = "SELECT COUNT(id) AS total FROM ".$db->escape($table)." WHERE inv_reinvest='{$db->escape($row)}' and active=1";
    $result = $db->query($sql);
     return($db->fetch_assoc($result));
  }
}

/*--------------------------------------------------------------*/
/* Function for Count id  By table name and where parameter
/*--------------------------------------------------------------*/

function count_by_id_par_where($table,$row,$cond ){
  global $db;
  if(tableExists($table))
  {
    $sql    = "SELECT COUNT(id) AS total FROM ".$db->escape($table)." WHERE inv_reinvest='{$db->escape($row)}'";
    $result = $db->query($sql);
     return($db->fetch_assoc($result));
  }
}



/*--------------------------------------------------------------*/
/* Function for Count id  By table name
/*--------------------------------------------------------------*/

function max_mes($table){
  global $db;
  if(tableExists($table))
  {
    //$sql    = "SELECT perc_mes_value as value FROM ".$db->escape($table)." order by id desc limit 1";
    $sql= "SELECT id,perc_mes_value as value FROM ".$db->escape($table)." where perc_mes_value!=0 order by id desc limit 1";
    $result = $db->query($sql);
     return($db->fetch_assoc($result));
  }
}


/*--------------------------------------------------------------*/
/* Determine if database table exists
/*--------------------------------------------------------------*/
function tableExists($table){
  global $db;
  $table_exit = $db->query('SHOW TABLES FROM '.DB_NAME.' LIKE "'.$db->escape($table).'"');
      if($table_exit) {
        if($db->num_rows($table_exit) > 0)
              return true;
         else
              return false;
      }
  }
 /*--------------------------------------------------------------*/
 /* Login with the data provided in $_POST,
 /* coming from the login form.
/*--------------------------------------------------------------*/
  function authenticate($username='', $password='') {
    global $db;
    $username = $db->escape($username);
    $password = $db->escape($password);
    $sql  = sprintf("SELECT id,username,password,user_level FROM users WHERE username ='%s' LIMIT 1", $username);
    $result = $db->query($sql);
    if($db->num_rows($result)){
      $user = $db->fetch_assoc($result);
      $password_request = sha1($password);
      if($password_request === $user['password'] ){
        return $user['id'];
      }
    }
   return false;
  }
  /*--------------------------------------------------------------*/
  /* Login with the data provided in $_POST,
  /* coming from the login_v2.php form.
  /* If you used this method then remove authenticate function.
 /*--------------------------------------------------------------*/
   function authenticate_v2($username='', $password='') {
     global $db;
     $username = $db->escape($username);
     $password = $db->escape($password);
     $sql  = sprintf("SELECT id,username,password,user_level FROM users WHERE username ='%s' and status=1 LIMIT 1", $username);
     $result = $db->query($sql);
     if($db->num_rows($result)){
       $user = $db->fetch_assoc($result);
       $password_request = sha1($password);
       if($password_request === $user['password'] ){
         return $user;
       }
     }
    return false;
   }


  /*--------------------------------------------------------------*/
  /* Find current log in user by session id
  /*--------------------------------------------------------------*/
  function current_user(){
      static $current_user;
      global $db;
      if(!$current_user){
         if(isset($_SESSION['user_id'])):
             $user_id = intval($_SESSION['user_id']);
             $current_user = find_by_id('users',$user_id);
        endif;
      }
    return $current_user;
  }
  /*--------------------------------------------------------------*/
  /* Find all user by
  /* Joining users table and user gropus table
  /*--------------------------------------------------------------*/
  function find_all_user(){
      global $db;
      $results = array();
      $sql = "SELECT u.id,u.name,u.username,u.user_level,u.status,u.last_login,";
      $sql .="g.group_name ";
      $sql .="FROM users u ";
      $sql .="LEFT JOIN user_groups g ";
      $sql .="ON g.group_level=u.user_level ORDER BY u.name ASC";
      $result = find_by_sql($sql);
      return $result;
  }
  /*--------------------------------------------------------------*/
  /* Function to update the last log in of a user
  /*--------------------------------------------------------------*/

 function updateLastLogIn($user_id)
	{
		global $db;
    $date = make_date();
    $sql = "UPDATE users SET last_login='{$date}' WHERE id ='{$user_id}' LIMIT 1";
    $result = $db->query($sql);
    return ($result && $db->affected_rows() === 1 ? true : false);
	}

  /*--------------------------------------------------------------*/
  /* Find all Group name
  /*--------------------------------------------------------------*/
  function find_by_groupName($val)
  {
    global $db;
    $sql = "SELECT group_name FROM user_groups WHERE group_name = '{$db->escape($val)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
  }
  /*--------------------------------------------------------------*/
  /* Find group level
  /*--------------------------------------------------------------*/
  function find_by_groupLevel($level)
  {
    global $db;
    $sql = "SELECT group_level FROM user_groups WHERE group_level = '{$db->escape($level)}' LIMIT 1 ";
    $result = $db->query($sql);
    return($db->num_rows($result) === 0 ? true : false);
  }
  /*--------------------------------------------------------------*/
  /* Function for cheaking which user level has access to page
  /*--------------------------------------------------------------*/
   function page_require_level($require_level){
     global $session;
     $current_user = current_user();
     $login_level = find_by_groupLevel($current_user['user_level']);
     //if user not login
     if (!$session->isUserLoggedIn(true)):
            $session->msg('d','Por favor Iniciar sesión...');
            redirect('index.php', false);
      //if Group status Deactive
     elseif($login_level['group_status'] === '0'):
           $session->msg('d','Este nivel de usuario esta inactivo!');
           redirect('home.php',false);
      //cheackin log in User level and Require level is Less than or equal to
     elseif($current_user['user_level'] <= (int)$require_level):
              return true;
      else:
            $session->msg("d", "¡Lo siento!  no tienes permiso para ver la página.");
            redirect('home.php', false);
        endif;

     }
   /*--------------------------------------------------------------*/
   /* Function for Finding all product name
   /* JOIN with categorie  and media database table
   /*--------------------------------------------------------------*/
  /*function join_product_table(){
     global $db;
     $sql  =" SELECT p.id,p.name,p.quantity,p.buy_price,p.sale_price,p.media_id,p.date,c.name";
    $sql  .=" AS categorie,m.file_name AS image";
    $sql  .=" FROM products p";
    $sql  .=" LEFT JOIN categories c ON c.id = p.categorie_id";
    $sql  .=" LEFT JOIN media m ON m.id = p.media_id";
    $sql  .=" ORDER BY p.id ASC";
    return find_by_sql($sql);

   }*/

   function join_product_table_clave($_par){
      /*global $db;
      $sql  =" SELECT p.id,p.inv_name,p.inv_last_name,p.inv_dir,p.inv_sex,p.inv_phone,p.inv_email,p.inv_birthday,p.inv_reinvest,p.active,p.media_id,p.inv_perc_perm";
      $sql  .=" ,m.file_name AS image";
      $sql  .=" FROM investors p";
      $sql  .=" ";
      $sql  .=" LEFT JOIN media m ON m.id = p.media_id";
      $sql  .=" ";
      
      return find_by_sql($sql);*/

      global $session;
      $session->msg('d',' Lo siento, registro falló.');
      if(!empty($_par))
      {

            /*$aKeyword = explode(" ", $_POST['PalabraClave']);
            $query ="SELECT * FROM investors WHERE inv_name like '%" . $aKeyword[0] . "%' OR inv_last_name like '%" . $aKeyword[0] . "%'";
            
           for($i = 1; $i < count($aKeyword); $i++) {
              if(!empty($aKeyword[$i])) {
                  $query .= " OR inv_last_name like '%" . $aKeyword[$i] . "%'";
              }
            }
           
           $result = $db->query($query);
           echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
                           
           if(mysqli_num_rows($result) > 0) {
              $row_count=0;
              echo "<br><br>Resultados encontrados: ";
              echo "<br><table class='table table-striped'>";
              While($row = $result->fetch_assoc()) {   
                  $row_count++;                         
                  echo "<tr><td>".$row_count." </td><td>". $row['inv_name'] . "</td><td>". $row['inv_last_name'] . "</td></tr>";
              }
              echo "</table>";
        
          }
          else {
              echo "<br>Resultados encontrados: Ninguno";
          
          }*/
      }
   
      

  }



   function join_product_table($active,$reinvest,$flag,$id){
    global $db;
    $sql  =" SELECT p.id,p.inv_name,p.inv_last_name,p.inv_dir,p.inv_sex,p.inv_phone,p.inv_email,p.inv_birthday,p.inv_reinvest,p.active,p.media_id,p.inv_perc_perm,nota";
    $sql  .=" ,m.file_name AS image,inv.inv_rendi_value as value";
    $sql  .=" FROM investors p";
    $sql  .=" ";
    $sql  .=" LEFT JOIN media m ON m.id = p.media_id LEFT JOIN inv_rendi inv ON inv.investor_id=p.id ";
    $sql  .=" where active='$active' and inv.per_mes_id='$id'";
    if($flag==1){
      $sql  .=" and inv_reinvest='$reinvest'";
    }else{
      $sql  .=" ";
    }
   
   return find_by_sql($sql);

  }



  function join_product_table_all($active,$reinvest,$flag){
    global $db;
    $sql  =" SELECT p.id,p.inv_name,p.inv_last_name,p.inv_dir,p.inv_sex,p.inv_phone,p.inv_email,p.inv_birthday,p.inv_reinvest,p.active,p.media_id,p.inv_perc_perm,nota,p.inv_cedula";
    $sql  .=" ,m.file_name AS image";
    $sql  .=" FROM investors p";
    $sql  .=" ";
    $sql  .=" LEFT JOIN media m ON m.id = p.media_id  ";
    $sql  .=" where active='$active'";
    if($flag==1){
      $sql  .=" and inv_reinvest='$reinvest'";
    }else{
      $sql  .=" ";
    }
   
   return find_by_sql($sql);

  }


  /*--------------------------------------------------------------*/
  /* Function for Finding all product name
  /* Request coming from ajax.php for auto suggest
  /*--------------------------------------------------------------*/

   function find_product_by_title($product_name){
     global $db;
     $p_name = remove_junk($db->escape($product_name));
     $sql = "SELECT name FROM products WHERE name like '%$p_name%' LIMIT 5";
     $result = find_by_sql($sql);
     return $result;
   }

  /*--------------------------------------------------------------*/
  /* Function for Finding all product info by product title
  /* Request coming from ajax.php
  /*--------------------------------------------------------------*/
  function find_all_product_info_by_title($title){
    global $db;
    $sql  = "SELECT * FROM products ";
    $sql .= " WHERE name ='{$title}'";
    $sql .=" LIMIT 1";
    return find_by_sql($sql);
  }

  /*--------------------------------------------------------------*/
  /* Function for Update product quantity
  /*--------------------------------------------------------------*/
  function update_product_qty($qty,$p_id){
    global $db;
    $qty = (int) $qty;
    $id  = (int)$p_id;
    $sql = "UPDATE products SET quantity=quantity -'{$qty}' WHERE id = '{$id}'";
    $result = $db->query($sql);
    return($db->affected_rows() === 1 ? true : false);

  }
  /*--------------------------------------------------------------*/
  /* Function for Display Recent product Added
  /*--------------------------------------------------------------*/
 function find_recent_product_added($limit){
   global $db;
   $sql   = " SELECT p.id,p.name,p.sale_price,p.media_id,c.name AS categorie,";
   $sql  .= "m.file_name AS image FROM products p";
   $sql  .= " LEFT JOIN categories c ON c.id = p.categorie_id";
   $sql  .= " LEFT JOIN media m ON m.id = p.media_id";
   $sql  .= " ORDER BY p.id DESC LIMIT ".$db->escape((int)$limit);
   return find_by_sql($sql);
 }
 /*--------------------------------------------------------------*/
 /* Function for Find Highest saleing Product
 /*--------------------------------------------------------------*/
 function find_higest_saleing_product($limit){
   global $db;
   $sql  = "SELECT p.name, COUNT(s.product_id) AS totalSold, SUM(s.qty) AS totalQty";
   $sql .= " FROM sales s";
   $sql .= " LEFT JOIN products p ON p.id = s.product_id ";
   $sql .= " GROUP BY s.product_id";
   $sql .= " ORDER BY SUM(s.qty) DESC LIMIT ".$db->escape((int)$limit);
   return $db->query($sql);
 }
 /*--------------------------------------------------------------*/
 /* Function for find all sales
 /*--------------------------------------------------------------*/
 function find_all_sale(){
   global $db;
   $sql  = "SELECT s.id,s.qty,s.price,s.date,p.name";
   $sql .= " FROM sales s";
   $sql .= " LEFT JOIN products p ON s.product_id = p.id";
   $sql .= " ORDER BY s.date DESC";
   return find_by_sql($sql);
 }
 /*--------------------------------------------------------------*/
 /* Function for Display Recent sale
 /*--------------------------------------------------------------*/
function find_recent_sale_added($limit){
  global $db;
  $sql  = "SELECT s.id,s.qty,s.price,s.date,p.name";
  $sql .= " FROM sales s";
  $sql .= " LEFT JOIN products p ON s.product_id = p.id";
  $sql .= " ORDER BY s.date DESC LIMIT ".$db->escape((int)$limit);
  return find_by_sql($sql);
}
/*--------------------------------------------------------------*/
/* Function for Generate sales report by two dates
/*--------------------------------------------------------------*/
function find_sale_by_dates($start_date,$end_date){
  global $db;
  $start_date  = date("Y-m-d", strtotime($start_date));
  $end_date    = date("Y-m-d", strtotime($end_date));
  /*$sql  = "SELECT s.date, p.name,p.sale_price,p.buy_price,";
  $sql .= "COUNT(s.product_id) AS total_records,";
  $sql .= "SUM(s.qty) AS total_sales,";
  $sql .= "SUM(p.sale_price * s.qty) AS total_saleing_price,";
  $sql .= "SUM(p.buy_price * s.qty) AS total_buying_price ";
  $sql .= "FROM sales s ";
  $sql .= "LEFT JOIN products p ON s.product_id = p.id";
  $sql .= " WHERE s.date BETWEEN '{$start_date}' AND '{$end_date}'";
  $sql .= " GROUP BY DATE(s.date),p.name";
  $sql .= " ORDER BY DATE(s.date) DESC";*/
  $sql = "SELECT s.inv_name as nombre,s.inv_last_name as apellido,s.inv_phone as telefono,s.inv_email as email,";
  $sql .= " s.inv_dir as direccion,s.date_create as fecha,s.inv_birthday as birthday,p.inv_ini_value as valor, ";
  $sql .= " SUM(p.inv_ini_value) AS total_saleing_price";
  $sql .= " FROM investors s ";
  $sql .= " LEFT JOIN inv_ini p ON s.id = p.inv_id WHERE ";
  $sql .= " s.date_create BETWEEN '2020-01-01' AND '2020-05-31' ";
  $sql .= " GROUP BY s.id";

  return $db->query($sql);
}



/*--------------------------------------------------------------*/
/* Function for Generate Daily sales report
/*--------------------------------------------------------------*/
function  dailySales($year,$month){
  global $db;
  $sql  = "SELECT s.qty,";
  $sql .= " DATE_FORMAT(s.date, '%Y-%m-%e') AS date,p.name,";
  $sql .= "SUM(p.sale_price * s.qty) AS total_saleing_price";
  $sql .= " FROM sales s";
  $sql .= " LEFT JOIN products p ON s.product_id = p.id";
  $sql .= " WHERE DATE_FORMAT(s.date, '%Y-%m' ) = '{$year}-{$month}'";
  $sql .= " GROUP BY DATE_FORMAT( s.date,  '%e' ),s.product_id";
  return find_by_sql($sql);
}
/*--------------------------------------------------------------*/
/* Function for Generate Monthly sales report
/*--------------------------------------------------------------*/
function  monthlySales($year){
  global $db;
  $sql  = "SELECT s.qty,";
  $sql .= " DATE_FORMAT(s.date, '%Y-%m-%e') AS date,p.name,";
  $sql .= "SUM(p.sale_price * s.qty) AS total_saleing_price";
  $sql .= " FROM sales s";
  $sql .= " LEFT JOIN products p ON s.product_id = p.id";
  $sql .= " WHERE DATE_FORMAT(s.date, '%Y' ) = '{$year}'";
  $sql .= " GROUP BY DATE_FORMAT( s.date,  '%c' ),s.product_id";
  $sql .= " ORDER BY date_format(s.date, '%c' ) ASC";
  return find_by_sql($sql);
}


/*--------------------------------------------------------------*/
/* /*Se realiza la suma del capital inicial y de las adiciones del inversionista menos los retiros que se realizan, si reinvierte se suma la reinversión*/
/*--------------------------------------------------------------*/
function TotalInicialAdicion() {
  global $db;
  /*$sql  = "SELECT id, SUM(val) total, reinvest FROM(
    select t.investor_id as id,sum(t.add_inv_val) as val, h.inv_reinvest as reinvest from add_inv t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.inv_id as id,t.inv_ini_value as val, h.inv_reinvest as reinvest from inv_ini t,investors h where h.active='1' and t.inv_id=h.id
    )T
  GROUP BY id;";*/

  /*$sql ="SELECT id, SUM(val) total, reinvest FROM(
    select t.investor_id as id,sum(t.ret_cap_inv*-1) as val,h.inv_reinvest as reinvest from ret_cap t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.investor_id as id,sum(t.add_inv_val) as val, h.inv_reinvest as reinvest from add_inv t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.inv_id as id,t.inv_ini_value as val, h.inv_reinvest as reinvest from inv_ini t,investors h where h.active='1' and t.inv_id=h.id
    union ALL
    select t.investor_id as id,sum(t.inv_rendi_value) as val,h.inv_reinvest as reinvest from inv_rendi t,investors h where h.inv_reinvest='1' and t.investor_id=h.id GROUP by id
    )T
  GROUP BY id";*/
  $sql = "SELECT id, SUM(val) total, reinvest,inv_perc_perm,porc_fijo FROM(
    /*Retiro de capital*/
    	select 
    		t.investor_id as id,
    		sum(t.ret_cap_inv*-1) as val,
    		h.inv_reinvest as reinvest,
    		h.inv_perc_perm,h.porc_fijo 
    	from 
    		ret_cap t,
    		investors h 
    	where 
    		h.active='1' and 
    		t.investor_id=h.id 		
    	GROUP BY id
    union all
        /*Adicion de inversion*/
        select t.investor_id as id,
        	sum(if(t.day_flag=0 and t.add_inv_day !=30,(t.add_inv_val/30)*t.add_inv_day,t.add_inv_val)) as val, 
            h.inv_reinvest as reinvest,
            h.inv_perc_perm,h.porc_fijo 
        from 
            add_inv t,
            investors h 
        where 
            h.active='1' and 
            t.investor_id=h.id 
        GROUP BY id
    
    union all
		/*inversion inicial*/
        select t.inv_id as id,    	
        	sum(if(t.flag_days=0 and t.days != 30,(t.inv_ini_value/30)*t.days,t.inv_ini_value)) as val,
    		h.inv_reinvest as reinvest,
    		h.inv_perc_perm,h.porc_fijo                
    	from 
    		inv_ini t,
    		investors h 
    	where 
    		h.active='1' and 
    		t.inv_id=h.id
    	GROUP by id
    union ALL
    /*rendimientos mes a mes*/
    	select t.investor_id as id,
    		sum(t.inv_rendi_value) as val,
    		h.inv_reinvest as reinvest,
    		h.inv_perc_perm,
    		h.porc_fijo 
    	from 
    		inv_rendi t,
    		investors h 
    	where 
    		h.inv_reinvest='1' and 
    		t.investor_id=h.id 
    	GROUP by id
    )T
  GROUP BY id";

  return find_by_sql($sql);
}

function TotalReinversion($id) {
  global $db;
  $sql = "SELECT id, SUM(val) total, reinvest,inv_perc_perm,porc_fijo FROM(
    select t.investor_id as id,sum(t.ret_cap_inv*-1) as val,h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from ret_cap t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.investor_id as id,sum(t.add_inv_val) as val, h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from add_inv t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.inv_id as id,t.inv_ini_value as val, h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from inv_ini t,investors h where h.active='1' and t.inv_id=h.id
    union ALL
    select t.investor_id as id,sum(t.inv_rendi_value) as val,h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from inv_rendi t,investors h where h.inv_reinvest='1' and t.inv_rendi_value>0 and t.investor_id=h.id GROUP by id
    )T where id='{$id}'
  GROUP BY id";

  return find_by_sql($sql);
}



function TotalInversionFondo() {
  global $db;
  $sql = "SELECT SUM(val) total FROM(
    select t.investor_id as id,sum(t.ret_cap_inv*-1) as val,h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from ret_cap t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.investor_id as id,sum(t.add_inv_val) as val, h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from add_inv t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    union all
    select t.inv_id as id,t.inv_ini_value as val, h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from inv_ini t,investors h where h.active='1' and t.inv_id=h.id
    union ALL
    select t.investor_id as id,sum(t.inv_rendi_value) as val,h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from inv_rendi t,investors h where h.inv_reinvest='1' and t.inv_rendi_value>0 and t.investor_id=h.id GROUP by id
    )T";

  return find_by_sql($sql);
}




/*--------------------------------------------------------------*/
/* /*Consulta para sacar el total de los rendimientos*/
/*--------------------------------------------------------------*/
function TotalRendi() {
  global $db;

  $sql = "SELECT id, SUM(val) total, reinvest,inv_perc_perm,porc_fijo FROM(
    select t.investor_id as id,sum(t.inv_rendi_value) as val,h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from inv_rendi t,investors h where t.investor_id=h.id GROUP by id
    )T
  GROUP BY id";

  return find_by_sql($sql);
}

/*--------------------------------------------------------------*/
/* /*Consulta para sacar el total de los rendimientos*/
/*--------------------------------------------------------------*/
function TotalInvIni() {
  global $db;

  $sql = "SELECT id, SUM(val) total, reinvest,inv_perc_perm,porc_fijo FROM(
    select t.inv_id as id,t.inv_ini_value as val, h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from inv_ini t,investors h where h.active='1' and t.inv_id=h.id
    )T
  GROUP BY id";

  return find_by_sql($sql);
}

/*--------------------------------------------------------------*/
/* /*Consulta para sacar el total de los rendimientos*/
/*--------------------------------------------------------------*/
function TotalAddInv() {
  global $db;

  $sql = "SELECT id, SUM(val) total, reinvest,inv_perc_perm,porc_fijo FROM(
    select t.investor_id as id,sum(t.add_inv_val) as val, h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from add_inv t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    )T
  GROUP BY id";

  return find_by_sql($sql);
}

/*--------------------------------------------------------------*/
/* /*Total retiro de capital*/
/*--------------------------------------------------------------*/
function TotalRetCap() {
  global $db;
  $sql = "SELECT id, SUM(val) total, reinvest,inv_perc_perm,porc_fijo FROM(
    select t.investor_id as id,sum(t.ret_cap_inv*-1) as val,h.inv_reinvest as reinvest,h.inv_perc_perm,h.porc_fijo from ret_cap t,investors h where h.active='1' and t.investor_id=h.id GROUP BY id
    )T
  GROUP BY id";

  return find_by_sql($sql);
}


/*--------------------------------------------------------------*/
/* /*Total retiro de capital*/
/*--------------------------------------------------------------*/
function TotalPagoMensual() {
  global $db;
  $sql = "select sum(t.inv_rendi_value) as val,m.perc_mes_name as mes from perc_mes m,inv_rendi t,investors h where t.investor_id=h.id and t.per_mes_id=m.id and h.active=1 GROUP by t.per_mes_id";

  return find_by_sql($sql);
}

?>
