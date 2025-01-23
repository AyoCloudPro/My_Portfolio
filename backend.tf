terraform { 
  cloud { 
    
    organization = "digitalmages" 

    workspaces { 
      name = "Portfolio" 
    } 
  } 
}