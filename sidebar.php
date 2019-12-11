<?php
/**!
 * The Sidebar
 * Note: The main column has simply Bootstrap flexbox "col-sm" so it will expand
 * to occupy the whole row (if no sidebar) or to occupy whatever part of the row
 * is available (if there is a sidebar, or more than one sidebar, etc.).
 *
 * (So, you don't need to set the main column to col-sm-8 or whatever.)
 */
?>

<?php if( is_active_sidebar('sidebar-widget-area') ): ?>
<!-- <div id="sidebar" class="sidebar col-sm-4" role="navigation"> -->
       <div class="col-sm-4 bg">
       	<form id="jForm">
	        <table>
		        <tr>
		            <select name="playername" id="playername"><option value="0">Player Name</option>
		                <option value="David Beckham">David Beckham</option>
		                <option value="Cristiano Ronaldo">Cristiano Ronaldo</option>
		                <option value="Diego Maradona">Diego Maradona</option>
		            </select>
		        </tr>
		         <tr>
		         	<select name="teamname" id="teamname"><option value="0">Team Name</option>
		        		<option value="Manchester">Manchester</option>
		                <option value="Liverpool">Liverpool</option>
		        	</select>
		        </tr>
		        <tr>
		         	<p class="jobserachbtn"><a href="" onclick="myfunction();">Search Jobs</a></p>
		        </tr>
		        </table>
	        </form>
        </div>
  <?php
    // b4st_sidebar_before();
    dynamic_sidebar('sidebar-widget-area');
    // b4st_sidebar_after();
  ?>
      </div>
<?php endif; ?>
