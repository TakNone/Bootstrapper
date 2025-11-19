# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 218

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
		user_id : -7214229207794186747,
	),
	wallpaper : $client->wallPaper(
		id : 5319820510190475432,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -3651000082017540881,
		slug : 'tq61yjExoNFguPDr',
		document : $client->documentEmpty(
			id : -2166093594183232673,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 86,
			second_background_color : 24,
			third_background_color : 83,
			fourth_background_color : 98,
			intensity : 54,
			rotation : 12,
			emoticon : 'k8YjWH1BTQCRNelA',
		),
	),
);
```