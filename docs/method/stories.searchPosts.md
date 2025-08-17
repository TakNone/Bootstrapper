# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here » for more info on the full flow*

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
	hashtag : 'y5ESpgZBdu6nDlmb',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : -1583457.703125,
			y : -626079.0859375,
			w : -1713273.119140625,
			h : -421755.7138671875,
			rotation : 2000029.4599609375,
			radius : -579461.455078125,
		),
		geo : $client->geoPointEmpty(),
		title : '1dZI4RqmwFJpu3fc',
		address : 'xhNIrzj9WElBfVRQ',
		provider : 'UDciHd5RsYFAGZOq',
		venue_id : 'eSEm9asOoFd2vQR5',
		venue_type : 'Lu6Q0IaKHUrpO2Ck',
	),
	peer : $client->inputPeerEmpty(),
	offset : 'HSPsaW8KkIgmUqYR',
	limit : 23,
);
```