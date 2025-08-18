# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 211

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
	hashtag : 'Pj1WfcbM37TLEgqK',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -1184052.0234375,
			y : 1154567.3837890625,
			w : -266414.9990234375,
			h : -2037852.3896484375,
			rotation : 303876.9033203125,
			radius : 1253401.6240234375,
		),
		geo : $client->geoPointEmpty(),
		title : 'PngqB7Xd9wyEcisF',
		address : 'aJmpHMXNVgdG3WzT',
		provider : 'ENPb02YmfCixKta3',
		venue_id : '9JinmpdQ3VsZXNz5',
		venue_type : 'OZW978NBACILVS2X',
	),
	peer : $client->inputPeerEmpty(),
	offset : 'We9srqI6lEQTbd8M',
	limit : 80,
);
```