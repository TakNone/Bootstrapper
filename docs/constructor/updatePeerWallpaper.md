# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 233

```tl
updatePeerWallpaper#ae3f101d flags:# wallpaper_overridden:flags.1?true peer:Peer wallpaper:flags.0?WallPaper = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **wallpaper_overridden** | [`flags.1?true`](type/true) | Whether the other user has chosen a custom wallpaper for us using messages.setChatWallPaper and the for_both flag, see here » for more info |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer where the wallpaper has changed |
| **wallpaper** | [`flags.0?WallPaper`](type/WallPaper) | The new wallpaper, if none the wallpaper was removed and the default wallpaper should be used |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePeerWallpaper(
	wallpaper_overridden : true,
	peer : $client->peerUser(
		user_id : 8308653582896192261,
	),
	wallpaper : $client->wallPaper(
		id : 3232385496964715526,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 881163269822535507,
		slug : 'bpEjXdg7Mq2faIhZ',
		document : $client->documentEmpty(
			id : -4475828387952317036,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 73,
			second_background_color : 93,
			third_background_color : 1,
			fourth_background_color : 64,
			intensity : 81,
			rotation : 57,
			emoticon : 'B0Gxfo5p6LU37i9s',
		),
	),
);
```