<?php
/**
 * membership.php deals with membership issues
 *
 * It calls our class, htmlPage, sets the title for our page, sets the page content,
 * & streams the completed boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 23-07-2015, 21:15h
 * @copyright 2015 Haven Consulting
 */

  /* The following line makes the server display error messages.
     Uncomment it during development. */
  //ini_set("display_errors", 1);

  /* The next two lines bring in the htmlPage class and create a new instance.
     Don't change these lines! */
  require("library/htmlPage.class.php");
  $page = new htmlPage();
  /* The next line streams the initial html.  Don't change this. */
  $page->HTMLstreamTop();
?>

      <h3>Membership</h3>
      <p>Membership of the Castle Sailing Club (CSC) is principally open to all current and former employees of Hampshire County Council and their families.  There is also limited associate membership. CSC members become members of the <a href="http://www3.hants.gov.uk/calshot.htm" target="_blank">Calshot Activities Centre</a> which entitles them to car parking, free launching and the use of shower and changing facilities.  There is also a bar and a cafe in the Sunderland Hanger.</p>
      <p>The club has been at Calshot since 1960 and has a relaxed attitude to its sailing activities, being well suited to independent sailors, although occasional group events are organised.  There are no club duties to perform, members come and go as they please.</p>

      <h3>Annual Fees</h3>
      <p>Membership fees are the same for individuals or families.  Membership of Calshot Activities Centre and the parking fee are required if anyone wishes to sail; this covers launch fees and use of facilities and allows for concessionary boat park rates, which are about half normal rates.</p>
      <p>Indicative fees for 2014 are as follows:</p>
      <table>
        <tr><td>Castle SC membership</td>	<td class="r-align">&pound;10</td><td>per indiv or family</td></tr>
        <tr><td>Calshot Association</td>	<td class="r-align">&pound;13</td><td></td></tr>
        <tr><td>Calshot annual parking</td>	<td class="r-align">&pound;38</td><td></td></tr>
        <tr><td>Calshot 2nd car (optional)</td>	<td class="r-align">&nbsp;&nbsp;&pound;25</td><td></td></tr>
      </table>
      <p>Boat park/launch fees:</p>
      <table>
        <tr><td>Less than 3.5m length</td>	<td class="r-align">&pound;42.50</td></tr>
        <tr><td>3.5m to 4.49m</td>		<td class="r-align">&pound;104.50</td></tr>
        <tr><td>4.5m to 5.5m</td>		<td class="r-align">&nbsp;&nbsp;&pound;163.00</td></tr>
      </table>
      <p>Please note, these boat park and launching fees are significantly discounted and only 
      	apply to the first boat of Hampshire County Council past and current employees.  Additional
      	boats are charged at the full amount.</p>

      <h3>How to Apply</h3>
      <p>If you are associated with Hampshire County Council and would like to discuss membership of the Castle Sailing Club, please contact <?php echo($page->contact); ?>, preferably by email, on:</p>
      <p class="centre"><?php echo("<a href=\"mailto:$page->email\">$page->email"); ?></a></p>
      <p>or by 'phone on:</p>
      <p class="centre"><?php echo($page->phone); ?></p>

<?php
  /* The final line streams the final html.  Don't change this. */
  $page->HTMLstreamBottom();
/**---------------------------------------------
 *             End of Code
 *----------------------------------------------
 */
?>

