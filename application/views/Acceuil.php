<?php   

                                                $url = base_url().'Posts/Comments/4';
                                  
                                                $content = file_get_contents($url); 
                                            

                                                $json = json_decode($content, true);
                                                    

                                                   echo count($json) ;
                                               ?>  