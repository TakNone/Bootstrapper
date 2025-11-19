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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	hashtag : 'mAgsTU0v3Mq2X1Fc',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -1943779.4873046875,
			y : -1132759.3251953125,
			w : -487010.2001953125,
			h : -1299247.255859375,
			rotation : 934783.5986328125,
			radius : 2017090.51171875,
		),
		geo : $client->geoPointEmpty(),
		title : '1MqcoBjUAfaz7sRl',
		address : '8IzZAoWcGStaNsgL',
		provider : '4Q0iFCHBscuLtJhv',
		venue_id : 'ItD7g3ksKz5xPG8C',
		venue_type : 'xLFEKUQka0Vig5qc',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'khsfmJNT0bEwK5jp',
	limit : 46,
);
```