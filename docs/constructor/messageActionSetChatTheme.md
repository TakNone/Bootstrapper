# messageActionSetChatTheme

**Description** : *The chat theme was changed*

**Layer** : 214

```tl
messageActionSetChatTheme#b91bbd3a theme:ChatTheme = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>theme</mark> | [`ChatTheme`](type/ChatTheme) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetChatTheme(
	theme : $client->chatThemeUniqueGift(
		gift : $client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			can_upgrade : true,
			require_premium : true,
			limited_per_user : true,
			id : 2076217191245735297,
			sticker : $client->documentEmpty(...),
			stars : 6581616922936816857,
			availability_remains : 17,
			availability_total : 59,
			availability_resale : 7502835110904538646,
			convert_stars : -8744322897702070930,
			first_sale_date : 46,
			last_sale_date : 15,
			upgrade_stars : -9123504209159137604,
			resell_min_stars : 8807713495527215248,
			title : 'IQWUi7NbzZ5ATkwt',
			released_by : $client->peerUser(...),
			per_user_total : 75,
			per_user_remains : 30,
			locked_until_date : 35,
		),
		theme_settings : array(
			$client->themeSettings(
				message_colors_animated : true,
				base_theme : $client->baseThemeClassic(...),
				accent_color : 77,
				outbox_accent_color : 51,
				message_colors : array(96),
				wallpaper : $client->wallPaper(...),
			),
		),
	),
);
```