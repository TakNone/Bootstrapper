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
		user_id : -493026391953218764,
	),
	wallpaper : $client->wallPaper(
		id : -2661278596983790577,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -7286129161173535885,
		slug : 'G4TfuolBbXaRm7WJ',
		document : $client->documentEmpty(
			id : 2794376438049863626,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 27,
			second_background_color : 4,
			third_background_color : 36,
			fourth_background_color : 77,
			intensity : 29,
			rotation : 8,
			emoticon : 'Nt6QuKsBy1R0riVJ',
		),
	),
);
```