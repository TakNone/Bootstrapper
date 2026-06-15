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
		user_id : -2782021070918996942,
	),
	wallpaper : $client->wallPaper(
		id : -8812237834972129406,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -1675657599273246255,
		slug : 'TikQDWqwRHUe5jNm',
		document : $client->documentEmpty(
			id : 6324755989387305743,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 29,
			second_background_color : 49,
			third_background_color : 74,
			fourth_background_color : 89,
			intensity : 23,
			rotation : 49,
			emoticon : 'e28dUcs0PMXxJlCv',
		),
	),
);
```