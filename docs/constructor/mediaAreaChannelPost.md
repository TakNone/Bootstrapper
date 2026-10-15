# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 229

```tl
mediaAreaChannelPost#770416af coordinates:MediaAreaCoordinates channel_id:long msg_id:int = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the location sticker on top of the story media |
| <mark>channel_id</mark> | [`long`](type/long) | The channel that posted the message |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the channel message |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaChannelPost(
	coordinates : $client->mediaAreaCoordinates(
		x : 1579194.576171875,
		y : 1217143.2626953125,
		w : 1852941.44140625,
		h : 1983359.740234375,
		rotation : 1759496.30859375,
		radius : 1272241.36328125,
	),
	channel_id : 6499830190087351882,
	msg_id : 78,
);
```