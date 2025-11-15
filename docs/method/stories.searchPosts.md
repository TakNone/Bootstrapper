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
	hashtag : '2nm14y6sbTSL3Jvt',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -887770.7822265625,
			y : 1681244.2822265625,
			w : 126057.1669921875,
			h : -84662.9189453125,
			rotation : 1148989.1923828125,
			radius : -790371.7802734375,
		),
		geo : $client->geoPointEmpty(),
		title : 'nf0XZLyqAurQ6H3U',
		address : 'z5BGEJ7atTZxQ4ly',
		provider : '5di42qUswfu73PSZ',
		venue_id : 'ArZK6y9u0HMNE4w3',
		venue_type : 'TFzYtbdlCEn0LHxy',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'dLA7bSP4ziMhYG8J',
	limit : 55,
);
```