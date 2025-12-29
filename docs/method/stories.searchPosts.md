# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 218

```tl
stories.searchPosts#d1810907 flags:# hashtag:flags.0?string area:flags.1?MediaArea peer:flags.2?InputPeer offset:string limit:int = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **hashtag** | [`flags.0?string`](type/string) | Hashtag (without the #) |
| **area** | [`flags.1?MediaArea`](type/MediaArea) | A mediaAreaGeoPoint or a mediaAreaVenue.  Note mediaAreaGeoPoint areas may be searched only if they have an associated address |
| **peer** | [`flags.2?InputPeer`](type/InputPeer) | If set, returns only stories posted by this peer |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination: initially an empty string, then the next_offset from the previously returned stories.foundStories |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.FoundStories](type/stories.FoundStories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **HASHTAG_INVALID** | `400` | The specified hashtag is invalid |

---

## Example

```php
$storiesFoundStories = $client->stories->searchPosts(
	hashtag : 'poCkR2hYbJHOwqa6',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : 368664.8271484375,
			y : 1746985.51953125,
			w : -1910026.2412109375,
			h : 495765.841796875,
			rotation : 299412.7470703125,
			radius : 1266941.3603515625,
		),
		geo : $client->geoPointEmpty(),
		title : 'bdOyLx1KrCqA8sRW',
		address : 'jPR3v80qAkIpXSTL',
		provider : 'vmCKfQB0c4xkyWeZ',
		venue_id : 'DU4QvrVhJHunsZCt',
		venue_type : 'YU6SpesKEa9N5HPJ',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'FJATjcdE5IlOWK3f',
	limit : 40,
);
```