<?php
// $Id: views-view-table.tpl.php,v 1.8 2009/01/28 00:43:43 merlinofchaos Exp $
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $class: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * @ingroup views_templates
 */
?>
<?php
	// we only want one person here
	$row = $rows[0] ? $rows[0] : NULL;

//	print_r($rows);
?>

<?php if($logged_in) {
	print $row['edit_node'];
} ?>

<div id="faculty-name">
	<?php print $row['field_first_value']; ?>
	<?php print $row['title']; ?>
</div>
<table class="<?php print $class; ?>">
  <tbody>
    <tr class="images-row">
	<td class="views-field-fields-person-position-cell">
		<span class="views-field-field-person-image-fid"><?php print $row['field_person_image_fid']; ?></span>
		<br />
		<span class="views-field-field-position-value"><?php print $row['field_position_value']; ?></span>
		</td>
	<td class="views-field-field-affiliations-value-cell">
		<span class="views-field-field-affiliations-value"><?php print $row['field_affiliations_value']; ?></span>
		</td>
	<td class="views-field-field-second-image-fid-1-cell">
		<span class="views-field-field-second-image-fid-1"><?php print $row['field_second_image_fid_1']; ?></span>
		</td>
    </tr>
    <tr class="information-row">
	<td colspan="2" class="views-field-fields-person-information-cell">
		<span class="views-field-field-degrees-value"><?php print $row['field_degrees_value']; ?></span><br />
		<span class="views-field-field-address-value"><span class="information-label">Campus Address:</span> <?php print $row['field_address_value']; ?></span><br />
		<span class="views-field-field-phone-value"><span class="information-label">Office Phone:</span> <?php print $row['field_phone_value']; ?></span><br />
		<span class="views-field-field-lab-phone-value"><span class="information-label">Lab Phone:</span> <?php print $row['field_lab_phone_value']; ?></span><br />
		<span class="views-field-field-email-email"><span class="information-label">Email:</span> <?php print $row['field_email_email']; ?></span>
		</td>
	<td class="views-field-field-links-cell">
		<span class="views-field-field-publications-link-url"><?php print $row['field_publications_link_url']; ?></span><br />
		<span class="views-field-field-website-url"><?php print $row['field_website_url']; ?></span>
		</td>
    </tr>
  </tbody>
</table>
<div id="faculty-research-interests">
	<?php print $row['field_research_interests_value']; ?>
</div>
<div id="faculty-research-publications">
	<?php print $row['field_publications_value']; ?>
</div>
