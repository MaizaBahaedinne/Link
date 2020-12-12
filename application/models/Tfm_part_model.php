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
        if($statut != '' )
        {
            $this->db->where('BaseTbl.statut =', $statut  );
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
        $this->db->select(' count(BaseTbl.id) nbr , BaseTbl.dateInscrip ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->where('BaseTbl.tfmId =',$projetId );
        $this->db->group_by('  hour( BaseTbl.dateInscrip ) ,   day( BaseTbl.dateInscrip )  ');
        $this->db->order_by('   BaseTbl.dateInscrip   ');
 
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
        $this->db->select(' count(Users.userId) partant ,BaseTbl.id , Users.name , Clubs.name ClubName , Clubs.clubID , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');

        $this->db->group_by('Clubs.clubID');

        $this->db->where('BaseTbl.tfmId = '.$ProjectId );
        if ($statut != '' ) {
            $this->db->where('BaseTbl.statut = '.$statut );
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
    function TFMClubPartListing2()
    {
        $this->db->select(' count(Users.userId) partant ,BaseTbl.id , Users.name , Clubs.name ClubName , Clubs.clubID , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');

        $this->db->group_by('Clubs.clubID');

        $this->db->where('BaseTbl.tfmId = 7 and BaseTbl.p_tranch1 > 0    ' );
 
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
    function TFMPartListinByclub($clubId,$projectId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2, BaseTbl.remb ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId =  ',$projectId );

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
    function TFMPartListinByclubToP($prjectId,$clubId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId = '.$prjectId.' and  BaseTbl.statut = 1 ' );

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
    function TFMPartListinByclubT1($clubId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId = 7  and BaseTbl.p_tranch1 > 0 and   BaseTbl.p_tranch2 = 0 ' );
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
    function TFMPartListinByclubT2($projectId,$clubId)
    {
        $this->db->select(' BaseTbl.id , Users.name , Clubs.name ClubName , Role.role , Users.cellule , Users.gouvernorat , BaseTbl.p_tranch1 , BaseTbl.p_tranch2 , BaseTbl.moto , BaseTbl.sysMobile , BaseTbl.statut , Usersr1.name as recp1 , BaseTbl.dateP_tranch1 as dateTranche1 , Usersr2.name as recp2 , BaseTbl.dateP_tranch2 as dateTranche2 , BaseTbl.remb  ');
        $this->db->from('tbl_tfm_part as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.userId', 'LEFT');
        $this->db->join('tbl_club as Clubs', 'Clubs.clubID = Users.ClubID', 'LEFT');
        $this->db->join('tbl_roles as Role', 'Role.roleId = Users.roleId','left');
        $this->db->join('tbl_users as Usersr2', 'Usersr2.userId = BaseTbl.recepteurTranche2', 'LEFT');
        $this->db->join('tbl_users as Usersr1', 'Usersr1.userId = BaseTbl.recepteurTranche1', 'LEFT');
        
        $this->db->where('BaseTbl.tfmId = '.$projectId.' and BaseTbl.statut = 1 ' );

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
    function TFMMyBus($userId)
    { 
        $this->db->select('Buspart.id  , Buspart.region , Buspart.num , Buspart.depart , Buspart.type  , Buspart.arrive , Users.userId , Users.name responsable ,  Users.mobile cont   ');
        $this->db->from('BusPart as BaseTbl');
        $this->db->join('tbl_tfm_bus as Buspart', 'Buspart.id = BaseTbl.busId' , 'LEFT');
        $this->db->join('tbl_users as Users', 'Users.userId = Buspart.responsable ', 'LEFT');
        $this->db->where('BaseTbl.userId =' , $userId);
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
    function TFMMyBuss()
    { 
        $this->db->select(' BaseTbl.id , BaseTbl.region , BaseTbl.num , BaseTbl.type , BaseTbl.depart  , BaseTbl.arrive , BaseTbl.capacite , Users.name responsable , Users.mobile contact  ');
        $this->db->from('tbl_tfm_bus as BaseTbl');
        $this->db->join('tbl_users as Users', 'Users.userId = BaseTbl.responsable ', 'LEFT');
        $this->db->join('tbl_tfm_bus_part as Buspart', 'Buspart.busId = BaseTbl.id ', 'LEFT');
        $this->db->group_by('BaseTbl.id');
        $query = $this->db->get();
        $result = $query->result();        
        return $result ; 
    }

  
          
     /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function BusPartList($id)
    { 
        $this->db->select('') ;
        $this->db->from('BusPart as BaseTbl');
         $this->db->where('BaseTbl.busId=',$id ) ;


        $query = $this->db->get();
        $result = $query->result();        
        return $result ; 
    }


}

