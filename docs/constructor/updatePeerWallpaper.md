# updatePeerWallpaper

**Description** : *The wallpaper &raquo; of a given peer has changed*

**Layer** : 222

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
		user_id : 5542812273758577353,
	),
	wallpaper : $client->wallPaper(
		id : 6215611458680813951,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 7880884441099475088,
		slug : 'pCD40HBKAdSqsXfe',
		document : $client->documentEmpty(
			id : -3936870330322674207,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 45,
			second_background_color : 11,
			third_background_color : 23,
			fourth_background_color : 74,
			intensity : 53,
			rotation : 66,
			emoticon : 'njNdWq4rex5OJsyR',
		),
	),
);
```