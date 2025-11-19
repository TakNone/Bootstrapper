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
		user_id : -104508300878401144,
	),
	wallpaper : $client->wallPaper(
		id : 4921083836154435675,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8445898656565084061,
		slug : 'C3lFywzL7qfsHa9e',
		document : $client->documentEmpty(
			id : 4708471169995001003,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 67,
			second_background_color : 23,
			third_background_color : 11,
			fourth_background_color : 1,
			intensity : 59,
			rotation : 99,
			emoticon : '5gXSEhK9JduxzWZU',
		),
	),
);
```