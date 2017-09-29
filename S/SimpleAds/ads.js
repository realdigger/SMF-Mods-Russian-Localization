function update_ad_clicks(id_ad)
{
	var temp_image = new Image();
	temp_image.src = smf_prepareScriptUrl(smf_scripturl) + 'action=update_ad_clicks;ad=' + parseInt(id_ad) + ';xml';
}