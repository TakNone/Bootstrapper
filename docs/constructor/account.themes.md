# account.themes

**Description** : *Installed themes*

**Layer** : 214

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
	hash : -3535581741620504571,
	themes : array(
		$client->theme(
			creator : true,
			default : true,
			for_chat : true,
			id : 8754497477506279703,
			access_hash : -2484144288503225765,
			slug : 'u7DbMpqhmvSTtgPF',
			title : 'XNLQGiHUyoz0bABZ',
			document : $client->documentEmpty(
				id : -3785726622305403269,
			),
			settings : array(
				$client->themeSettings(
					message_colors_animated : true,
					base_theme : $client->baseThemeClassic(...),
					accent_color : 3,
					outbox_accent_color : 19,
					message_colors : array(15),
					wallpaper : $client->wallPaper(...),
				),
			),
			emoticon : '1VDiTwpAgZPEsJRG',
			installs_count : 35,
		),
	),
);
```