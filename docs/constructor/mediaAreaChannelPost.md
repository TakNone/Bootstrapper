# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 211

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
		x : 1853902.1826171875,
		y : 1787471.3017578125,
		w : 1688868.271484375,
		h : -7467.93359375,
		rotation : 173662.1455078125,
		radius : 735310.8466796875,
	),
	channel_id : -5615721698916078016,
	msg_id : 8,
);
```