# account.themes

**Description** : *Installed themes*

**Layer** : 216

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
			id : 2974396385220954170,
			access_hash : -7845255480252838045,
			slug : 'ezT2h5t6lmusUSOA',
			title : 'INMZc5EJw0CzWvrP',
			document : $client->documentEmpty(
				id : 7439972395380526679,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(...),
					accent_color : 98,
					outbox_accent_color : 8,
					message_colors : array(10),
					wallpaper : $client->wallPaper(...),
				),
			),
			emoticon : 'GW1aJufYSOUvwjx0',
			installs_count : 98,
		),
	),
);
```