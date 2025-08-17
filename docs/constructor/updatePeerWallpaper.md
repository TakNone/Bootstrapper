# updatePeerWallpaper

**Description** : *The wallpaper » of a given peer has changed*

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
		user_id : 2318755933594141190,
	),
	wallpaper : $client->wallPaper(
		id : 168180786684549517,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -1975922667057976855,
		slug : 'fJUmvMRjn4ErNwey',
		document : $client->documentEmpty(
			id : 2800671794636827144,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 22,
			second_background_color : 28,
			third_background_color : 76,
			fourth_background_color : 94,
			intensity : 40,
			rotation : 89,
			emoticon : 'iYJd8qHFZ9T1LoX7',
		),
	),
);
```