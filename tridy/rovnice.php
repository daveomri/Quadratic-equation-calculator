<?php
class kvadrRovnice{
        var $D;
        var $x;
        var $x1;
        var $output;
				function diskrimi($a, $b, $c){
					$this->D = ($b**2)-(4*$a*$c);
					}
				function vypocKoren($a, $b){
					if ($a == 0){
						$this->output = "Nejedná se o kvadratickou rovnici";
					}
					else{
						if ($this->D == 0){
							$this->x = (($b*(-1))/(2*$a)); 
							$this->output = "Rovnice má jeden dvojnásobný kořen x = ".$this->x."" ;
									}
						else if ($this->D < 0){
							$this->output = "Rovnice má výsledek v množině komplexních čísel.";	
						}
						else{
							$this->x1 = ((-$b + ($this->D)**0.5)/(2*$a)); 
							$this->x = ((-$b - ($this->D)**0.5)/(2*$a)); 
							$this->output = "Rovnice má dva kořeny<br/>x1 = ".$this->x."<br/>"."x2 = ".$this->x1 ;
				        }
				      }
			      }	
           function vyTiskni(){
              echo($this->output);
           }	
			    }			
?> 