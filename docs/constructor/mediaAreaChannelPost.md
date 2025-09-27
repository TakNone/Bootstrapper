# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 214

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
		x : 57734.353515625,
		y : -1446427.5244140625,
		w : -993454.021484375,
		h : 269291.189453125,
		rotation : -971586.2490234375,
		radius : -813546.5224609375,
	),
	channel_id : 4322016632247251704,
	msg_id : 34,
);
```