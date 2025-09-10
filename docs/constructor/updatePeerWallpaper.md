# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 214

```tl
updatePeerWallpaper#ae3f101d flags:# wallpaper_overridden:flags.1?true peer:Peer wallpaper:flags.0?WallPaper = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : 2394223133055379800,
	),
	wallpaper : $client->wallPaper(
		id : -5088097144407549081,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 1418407093836942486,
		slug : 'C1Lqt40sS5GpmXTu',
		document : $client->documentEmpty(
			id : -6579898626284471825,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 42,
			second_background_color : 46,
			third_background_color : 89,
			fourth_background_color : 38,
			intensity : 44,
			rotation : 29,
			emoticon : 'vczfS2eRKAyXB9Gr',
		),
	),
);
```