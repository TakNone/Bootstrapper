# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 218

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
		x : 443002.8564453125,
		y : 1768634.0439453125,
		w : -1050204.9833984375,
		h : -1744585.935546875,
		rotation : -1680962.138671875,
		radius : 627204.3466796875,
	),
	channel_id : 8087789710043388432,
	msg_id : 72,
);
```