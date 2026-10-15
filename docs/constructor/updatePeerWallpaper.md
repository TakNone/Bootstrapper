# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 229

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
		user_id : -3704092330040238790,
	),
	wallpaper : $client->wallPaper(
		id : 1758841738450312550,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 4553041701761565352,
		slug : 'jphxyaIi3Fg7PnBM',
		document : $client->documentEmpty(
			id : 5040426143021713097,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 17,
			second_background_color : 50,
			third_background_color : 33,
			fourth_background_color : 9,
			intensity : 88,
			rotation : 80,
			emoticon : 'pcV1GjUQo7gOEmaI',
		),
	),
);
```