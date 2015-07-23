<?php
/**
 * contact.php gives contact details
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

      <h3>Contact</h3>
      <p>If you want to discuss membership or anything to do with the activity of the Castle Sailing Club, please contact <?php echo($page->contact); ?>, preferably by email, on:</p>
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

