<?php
$username=$_SESSION ['username'];
?>
<!-- Main Wrapper -->
<div id="main-wrapper">
	<div class="wrapper style3">
		<div class="inner">
			<div class="container">
				<div class="row">
					<form >
            <table>
               <tr>
                <th id="blank"> </th>
                <th colspan="4"id="days">Mon </th>
                <th colspan="3"id="days">Tue</th>
                <th colspan="2"id="days">Wed </th>
                <th colspan="3"id="days">Thur </th>
                <th colspan="3"id="days">Fri </th>
                <th>CM </th>     
            </tr>
            <tr>
                <?php
                    $abre=array('Cadet','MA','BRC','AA','SRC','MA','BRC','SRC','MA','BRC','MA','BRC','SRC','MA','BRC','AA','CM');
                    $columns=count($abre);
                    for ($i=0;$i<$columns;$i++) {
                        echo'<th>'.$abre[$i].'</th>';
                    }
                ?>
            </tr>
            <tr > 
                <th><?php echo "$username"?></th>
                
                <?php
                      $loopname="activities";
                      $selstack=array();
                      $activities= array('','Army Training','Cadet Performance Review Board','Class','Corps Center Guard','Corps Soccer Team','Darling Recruiting Company','Fish Drill Team','IEEE','LAB','Parson Mounted Cavalry','Rec','Recon Platoon','Ross Volunteer Company','Rudders Rangers','Ranger Challenge','Study Group','Tutoring','Work');
                      //$actimg=array('','','','','','','','','','','','','','','','','','','','','','','','','','','');
                       for ($k=0;$k<$columns-1;$k++) {
                           echo '<td class="styled_select">';
                           $loopnameinner=$loopname.$k;
                           array_push($selstack, $loopnameinner)
                           ?><select name="<?php echo $loopnameinner;?>"><?php
                           for($i=0;$i<count($activities);$i++){
                              echo'<option value="'.($i+1).'">'.$activities[$i].'</option>';
                           }
                           echo '</select>'; 
                           echo '</td>';
                       }
                      ?><td><input type="submit"  value="Submit Changes"></td>
            </tr>
            <tr>
                    <th> Currently signed out for</th>
                    <?php for ($p=0;$p<$columns-1;$p++){?>
                        <td><img src="pagecontent/signout/reasonimages/RangerChallenge.png"  alt="auto" /></td>
                     <?php } ?>
            </tr>
            <?php for ($i=0;$i<3;$i++){?>
    
                 <tr>
                
                    <th>user</th>
                     <?php for ($p=0;$p<$columns-1;$p++){?>
                        <td><img src="pagecontent/signout/reasonimages/class.png"  alt="auto" /></td>
                     <?php } ?>
                     
                </tr>
                 <?php }?>
            </table>
        </form>
				</div>
			</div>
		</div>
	</div>
</div>
