# account.themes

**Description** : *Installed themes*

**Layer** : 225

```tl
account.themes#9a3d8c6d hash:long themes:Vector<Theme> = account.Themes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>themes</mark> | [`Vector<Theme>`](type/Theme) | Themes |

---

## Type

[account.Themes](type/account.Themes)

---

## Example

```php
$accountThemes = $client->account->themes(
	hash : 0,
	themes : array(
		$client->theme(
			creator : true,
			default : true,
			for_chat : true,
			id : -4036503095995685696,
			access_hash : -3231665219917405147,
			slug : 'uAlLzWDH4vwEUdny',
			title : 'V8O13dFKAWwEakgh',
			document : $client->documentEmpty(
				id : 6932544825816004883,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(),
					accent_color : 21,
					outbox_accent_color : 71,
					message_colors : array(64),
					wallpaper : $client->wallPaper(
						id : -7829106751414935879,
						creator : true,
						default : true,
						pattern : true,
						dark : true,
						access_hash : 2753987596480112103,
						slug : 'gADd7Sb5ihkUEp36',
						document : $client->documentEmpty(...),
						settings : $client->wallPaperSettings(...),
					),
				),
			),
			emoticon : 't9mCIXVrpQHE014L',
			installs_count : 39,
		),
	),
);
```