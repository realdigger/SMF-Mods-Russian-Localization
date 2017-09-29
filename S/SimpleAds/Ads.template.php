<?php
// Version: 1.0.1; Ads

function template_ad_position($position)
{
	global $context;

	if (!isset($context['ads'][$position]))
		return;

	if ($context['ads'][$position]['type'] == 1)
	{
		$random = array_rand($context['ads'][$position]['ads']);

		echo '
	<div id="ad_', $position, '_', $random, '">
		', $context['ads'][$position]['ads'][$random], '
	</div>';

		$context['displayed_ads'][] = $random;
	}
	else
	{
		foreach ($context['ads'][$position]['ads'] as $id => $content)
		{
			echo '
	<div id="ad_', $position, '_', $id, '">
		', $content, '
	</div>';

			$context['displayed_ads'][] = $id;
		}
	}
}

function template_ads_outer_above()
{
	template_ad_position('overall_header');
}

function template_ads_outer_below()
{
	template_ad_position('overall_footer');
}

function template_ads_inner_above()
{
	global $context;

	echo '<br style="line-height: 0.1em;" />';

	template_ad_position('below_menu');

	if (isset($context['ads']['left_side']) || isset($context['ads']['right_side']))
	{
		echo '
	<table style="width: 100%;" cellpadding="0" cellspacing="0">
		<tr>';

		if (isset($context['ads']['left_side']))
		{
			echo '
			<td style="vertical-align: top;">';

			template_ad_position('left_side');

			echo '
			</td>';
		}

		echo '
			<td style="vertical-align: top;">';
	}
}

function template_ads_inner_below()
{
	global $context, $settings;

	if (isset($context['ads']['left_side']) || isset($context['ads']['right_side']))
	{
		echo '
			</td>';

		if (isset($context['ads']['right_side']))
		{
			echo '
			<td style="vertical-align: top;">';

			template_ad_position('right_side');

			echo '
			</td>';
		}

		echo '
		</tr>
	</table>';
	}

	template_ad_position('above_footer');

	echo '<br style="line-height: 0.1em;" />';
}

?>