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
		x : 1340634.0458984375,
		y : 35229.75,
		w : -1776172.8076171875,
		h : 1675206.744140625,
		rotation : -1804392.9130859375,
		radius : -315018.8955078125,
	),
	channel_id : -697510105340568070,
	msg_id : 55,
);
```