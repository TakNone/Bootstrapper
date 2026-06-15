# stories.searchPosts

**Description** : *Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*

**Layer** : 227

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
	hashtag : '4QhFK156tW0uobBn',
	area : $client->mediaAreaVenue(
		coordinates : $client->mediaAreaCoordinates(
			x : 913061.3076171875,
			y : -1045337.189453125,
			w : -1306221.732421875,
			h : 803914.720703125,
			rotation : -1021803.9130859375,
			radius : 503351.14453125,
		),
		geo : $client->geoPointEmpty(),
		title : '5CJdgNEOAwFHVQix',
		address : '8ZHBUI5sacpGlrRf',
		provider : 'qz1rD3TSXQpm5YyK',
		venue_id : 'u84G0vKcRnHw3UgM',
		venue_type : 'jaOoJbwBXf3mut4l',
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset : 'JWqKPFYcAE8GRkdU',
	limit : 85,
);
```