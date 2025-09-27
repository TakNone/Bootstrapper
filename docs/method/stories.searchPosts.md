# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 216

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
	hashtag : 'FR12svz4UlT6r3NC',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -644094.1318359375,
			y : 1014724.302734375,
			w : -1466234.1220703125,
			h : -502677.73828125,
			rotation : -516016.0205078125,
			radius : 387968.8251953125,
		),
		geo : $client->geoPointEmpty(),
		title : 'qKtyix7Mkm3I1UfG',
		address : 'lvWK8HhUu7eFrIwa',
		provider : '3uYj1woQchp9WrOn',
		venue_id : 'BIZr0iTHQCAU7k2h',
		venue_type : '0E1ZDkXxCylocAnz',
	),
	peer : $client->inputPeerEmpty(),
	offset : 'liURJ0qu5tGgpNfY',
	limit : 41,
);
```