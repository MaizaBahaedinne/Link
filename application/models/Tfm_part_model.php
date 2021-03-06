<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Tfm_part_model extends CI_Model
{




        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMValid($userId)
    { 
        $this->db->select('');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->where('userId=',$userId);
        $this->db->where('tfmId=',7);
        $this->db->where('statut=',1);
        
        $query = $this->db->get();
        $result = $query->result();        
        return $query->row();
    }



    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListing($projetId , $statut = '' )
    {
        $this->db->select(' Users.userId ,BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.dateInscrip ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->where('BaseTbl.tfmId =',$projetId );
        if($statut != 2 )
        {
            $this->db->where('BaseTbl.statut =', $statut  );
            $this->db->where('BaseTbl.p_tranch2 =', 80 );
            $this->db->where('BaseTbl.p_tranch1 =', 90  );
        }
        elseif($statut == 1 )
        {
            $this->db->where('BaseTbl.statut =', $statut  );
        }

        $this->db->group_by('BaseTbl.userId ' );
 
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListing1($projetId , $statut = '' )
    {
        $this->db->select(' Users.userId ,BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.dateInscrip ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->where('BaseTbl.tfmId =',$projetId );
        if($statut != '' )
        {
            $this->db->where('BaseTbl.statut =', $statut  );
            $this->db->where('BaseTbl.p_tranch2 =', 0 );
            $this->db->where('BaseTbl.p_tranch1 =', 90  );

        }
 
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }




    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartRythme($projetId  )
    {
        $this->db->select(' count(BaseTbl.id) nbr , BaseTbl.dateInscrip  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->where('BaseTbl.tfmId =',$projetId );
        $this->db->group_by(' Date(BaseTbl.dateInscrip)  ');
        $this->db->order_by('  BaseTbl.dateInscrip    ');
 
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }






    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMClubPartListing($ProjectId,$statut = '')
    {   

        if($ProjectId != 2500){
        $this->db->select(' count(Users.userId) partant ,BaseTbl.id , Users.name , Clubs.name ClubName , Clubs.city , Clubs.clubID , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.pointDepart ');
        }else{
            $this->db->select(' count(Users.userId) partant ,BaseTbl.id , Users.name , Users.cellule ClubName , Clubs.city , Clubs.clubID , Role.role , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 ');
        }

        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');

       
        if($ProjectId != 2500){
         $this->db->group_by('Clubs.clubID');
        }else{
           $this->db->group_by('Users.cellule'); 
        }

        $this->db->where('BaseTbl.tfmId = '.$ProjectId );
        if ($statut != '' ) {
            $this->db->where('BaseTbl.statut = '.$statut );
        }

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }
        
        
            /**
  

     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListinByclub($clubId,$projectId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2, BaseTbl.remb  , BaseTbl.pointDepart ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId =  ',$projectId );



        if($clubId > 5){
        $this->db->where('Users.clubID =', $clubId);    
        }



        $this->db->order_by('Users.name ','DESC'); 

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListinByclubToP($prjectId,$clubId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId = '.$prjectId.' and  BaseTbl.statut = 2 ' );

        $this->db->where('Users.clubID =', $clubId);    

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListinByclubT1($clubId,$projectId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId = ' , $projectId );
        $this->db->where('p_tranch1 = ','0' );
        $this->db->where('Users.clubID =', $clubId);    
     
        $this->db->order_by('Users.name','ASC');

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListinByclubT2($clubId,$projectId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1  , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
       
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');


        $this->db->where('BaseTbl.tfmId = ', $projectId);
        $this->db->where('statut = ','2' );
        $this->db->where('p_tranch1 > ','0' );
        $this->db->where('Users.clubID =', $clubId);    
      
        $this->db->order_by('Users.name','ASC');

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }




         /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function PointDeDepart($projectId)
    {
        $this->db->select(' pointDepart , count(pointDepart) nombre ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->where('BaseTbl.tfmId =  ',$projectId );
        $this->db->where('statut = ','2' );
        $this->db->group_by('BaseTbl.pointDepart ') ; 

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListinByclubC($clubId,$projectId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1  , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2   ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
       
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');

        $this->db->where('BaseTbl.tfmId = '. $projectId.' and  BaseTbl.p_tranch2 > 0 ');
        $this->db->where('Users.clubID =', $clubId);    
        
        $this->db->order_by('Users.name','ASC');

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartListinByclubV($clubId,$ProjectId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId = '.$ProjectId.'   ' );

        $this->db->where('Users.clubID =', $clubId);    

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
   function TFMCountByClub($ProjectId)
    {
        $this->db->select('Clubs.name as ClubName ,  Clubs.city , count(Users.userId) as members , (select count(*) form tbl_tfm_part where  ) as autorise  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId =',$ProjectId);
        
        $this->db->group_by('Users.clubID ');
        $this->db->order_by('BaseTbl.dateInscrip','DESC');  
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

 /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartByCityListing($ProjectId,$statut)
    {
        $this->db->select('  Clubs.city , count(BaseTbl.id) as countPart');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');

        $this->db->where('BaseTbl.tfmId ='.$ProjectId.' and  BaseTbl.statut ='.$statut );
       

         $this->db->group_by('Clubs.city');
          $this->db->order_by('countPart DESC');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }



    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartByClubListing($ProjectId,$statut)
    {
        $this->db->select('  Clubs.name , count(BaseTbl.id) as countPart , count(FEMME.userId) as femme , count(HOMME.userId) as homme ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as FEMME', 'FEMME.userId = BaseTbl.userId and FEMME.sexe = "femme" ', 'LEFT');
        $this->db->join('tbl_users as HOMME', 'HOMME.userId = BaseTbl.userId and HOMME.sexe = "homme" ', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');

        $this->db->where('BaseTbl.tfmId ='.$ProjectId.' and  BaseTbl.statut ='.$statut  );
     

         $this->db->group_by('Clubs.name');
         $this->db->order_by('countPart DESC');

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }


     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartConfirmedBySexeHListing($ProjectId)
    {
        $this->db->select('count(HOMME.userId) as hommec ');
        $this->db->from('tbl_tfm_part as BaseTbl');     
        $this->db->join('tbl_users as HOMME', 'HOMME.userId = BaseTbl.userId and HOMME.sexe = "homme" ', 'LEFT');

        $this->db->where('BaseTbl.tfmId = '.$ProjectId.' and  BaseTbl.statut = 1 ');

        $query = $this->db->get();
        $result = $query->row();        
        return $result;
    }


        /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPartConfirmedBySexeFListing($ProjectId)
    {
        $this->db->select('count(FEMME.userId) as femmec  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as FEMME', 'FEMME.userId = BaseTbl.userId and FEMME.sexe = "femme" ', 'LEFT');
        $this->db->where('BaseTbl.tfmId = '.$ProjectId.' and  BaseTbl.p_tranch1 > 0 ');
     


        

        $query = $this->db->get();
        $result = $query->row();        
        return $result;
    }


 



    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function TFMPaiementByUser($projectId)
    {
        $this->db->select(' BaseTbl.id , sum(BaseTbl.p_tranch1) p_tranch1 , sum(BaseTbl.p_tranch2) p_tranch2 , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2, BaseTbl.remb ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        $this->db->where('BaseTbl.tfmId =  ',$projectId );
        $this->db->where(' BaseTbl.recepteurTranche1 = BaseTbl.recepteurTranche2 ');    
        $this->db->group_by('Usersr1.name ') ; 

        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }



   


}