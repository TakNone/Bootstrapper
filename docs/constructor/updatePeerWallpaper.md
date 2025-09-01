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
		user_id : 1534034169544058147,
	),
	wallpaper : $client->wallPaper(
		id : 3669016791088934212,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 8559500068466977056,
		slug : 'nb6rvif9JU0PMDxq',
		document : $client->documentEmpty(
			id : -4121607507972146711,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 20,
			second_background_color : 54,
			third_background_color : 30,
			fourth_background_color : 100,
			intensity : 62,
			rotation : 89,
			emoticon : 'AGCpEdkPy6hFRxQr',
		),
	),
);
```