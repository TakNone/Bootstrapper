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
	hashtag : '30uMiU1JLdRwGXr6',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -1927942.681640625,
			y : -1081625.2978515625,
			w : 768160.189453125,
			h : -177096.3671875,
			rotation : -1202010.08203125,
			radius : 1521211.4658203125,
		),
		geo : $client->geoPointEmpty(),
		title : 'fneBWbUAk41iEyFD',
		address : 'G1gu0QpsbSjakEyI',
		provider : '9jbQLk6KcTynvmeY',
		venue_id : 'uJHQjcUim3xDlZ45',
		venue_type : 'Kd1y8rquQRUj7hHP',
	),
	peer : $client->inputPeerEmpty(),
	offset : 'XBdiMJA7YlZoGnfF',
	limit : 40,
);
```