# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 225

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
		user_id : -9047281119217712919,
	),
	wallpaper : $client->wallPaper(
		id : -8558210184233955560,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -4755117584633941374,
		slug : 'bARh3qvJM4cyDw1n',
		document : $client->documentEmpty(
			id : -4063394933950791623,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 75,
			second_background_color : 53,
			third_background_color : 94,
			fourth_background_color : 70,
			intensity : 94,
			rotation : 35,
			emoticon : 'LFnNiJPeoVAIpsgC',
		),
	),
);
```