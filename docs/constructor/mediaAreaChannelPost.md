# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 222

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
		x : -1548938.0986328125,
		y : 1504907.830078125,
		w : -1495876.7900390625,
		h : 1901187.1162109375,
		rotation : 421461.1259765625,
		radius : 1034767.11328125,
	),
	channel_id : -5753561275770211011,
	msg_id : 75,
);
```