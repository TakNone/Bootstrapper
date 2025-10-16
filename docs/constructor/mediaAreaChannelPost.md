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
		x : -1924347.6015625,
		y : 1224757.5966796875,
		w : 834214.8076171875,
		h : -1077903.8193359375,
		rotation : 506466.630859375,
		radius : -1927468.873046875,
	),
	channel_id : 6117535728077204917,
	msg_id : 23,
);
```