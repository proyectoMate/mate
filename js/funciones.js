/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
			
function confirmaEliminar()
{
   if (window.confirm("¿Esta seguro de realizar esta accion?") === true) 
   {
       return true;
   }
   else
   {
       return false;
   }  
}