# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 211

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
		user_id : 5128149925128176122,
	),
	wallpaper : $client->wallPaper(
		id : 4380830120353026741,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -634157416428269712,
		slug : 'jSgV8OXmpew5G9cM',
		document : $client->documentEmpty(
			id : -5643439904531538726,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 75,
			second_background_color : 48,
			third_background_color : 25,
			fourth_background_color : 78,
			intensity : 17,
			rotation : 18,
			emoticon : 'Pewhj4bmZxW3z2VX',
		),
	),
);
```