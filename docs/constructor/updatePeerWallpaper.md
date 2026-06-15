# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 227

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
		user_id : -8994338237971734006,
	),
	wallpaper : $client->wallPaper(
		id : 1552329510260278498,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -2315145982777313087,
		slug : 'y0z9ZDAhNuodbc36',
		document : $client->documentEmpty(
			id : -4318697993817860729,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 74,
			second_background_color : 81,
			third_background_color : 75,
			fourth_background_color : 27,
			intensity : 47,
			rotation : 84,
			emoticon : 'dgwI3p1bKm5ylAFn',
		),
	),
);
```