# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 216

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
		x : 15029.9638671875,
		y : 1103324.9833984375,
		w : -1052967.48828125,
		h : 843648.7001953125,
		rotation : -1627219.51953125,
		radius : -1823049.35546875,
	),
	channel_id : -7509700406484529727,
	msg_id : 77,
);
```