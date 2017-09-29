function sa_change_status(id, type, session_var, session_id)
{
	if (window.XMLHttpRequest)
	{
		if (type != 'ad' && type != 'position')
			return false;

		sendXMLDocument(smf_prepareScriptUrl(smf_scripturl) + 'action=admin;area=ads;sa=' + type + 's;xml', 'status=' + id + '&' + session_var + '=' + session_id, sa_on_status_received);

		return false;
	}
}

function sa_on_status_received(XMLDoc)
{
	var xml = XMLDoc.getElementsByTagName('smf')[0];
	var id = xml.getElementsByTagName('id')[0].childNodes[0].nodeValue;
	var status = xml.getElementsByTagName('status')[0].childNodes[0].nodeValue;
	var label = xml.getElementsByTagName('label')[0].childNodes[0].nodeValue;
	var old = status == 'active' ? 'disabled.png' : 'active.png';

	if (id != 0)
	{
		status_image = document.getElementById('status_image_' + id);
		status_image.src = status_image.src.replace(old, status + '.png');
		status_image.alt = status_image.title = label;
	}

	return false;
}