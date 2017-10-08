<?php 


namespace Mini\Model;

use Mini\Core\Model;

class Book
{
    public function getAllBooks() 
    {
        $listofbooks = array
        (
            array("Snow Crash", "Neal Stephenson", "Bantam Books", 1992, "https://en.wikipedia.org/wiki/Snow_Crash"),
            array("A Clockwork Orange", "Anthony Trengrove", "William Heinemann", 1962, "https://en.wikipedia.org/wiki/A_Clockwork_Orange_(novel)"),
            array("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", "Pan Books", 1979, "https://en.wikipedia.org/wiki/The_Hitchhiker%27s_Guide_to_the_Galaxy_(novel)"),  
            array("The Giver", "Lois Lowry", "Houghton Mifflin", 1993, "https://en.wikipedia.org/wiki/The_Giver")              
        );

        return $listofbooks;
    }
    

    
}