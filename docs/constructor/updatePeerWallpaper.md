# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 216

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
		user_id : -3902576257185113404,
	),
	wallpaper : $client->wallPaper(
		id : -3316411573186276763,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 2519573128022399771,
		slug : 'nvHTXyQF0mx5Ya4N',
		document : $client->documentEmpty(
			id : 165475069438153873,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 51,
			second_background_color : 41,
			third_background_color : 59,
			fourth_background_color : 6,
			intensity : 31,
			rotation : 84,
			emoticon : 'Wdu5wgDLK2ZYe7qO',
		),
	),
);
```