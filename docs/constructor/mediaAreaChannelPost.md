# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 225

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
		x : 1337210.6123046875,
		y : 1149109.5703125,
		w : 82306.986328125,
		h : 866550.4619140625,
		rotation : -1294361.52734375,
		radius : -180391.974609375,
	),
	channel_id : -239870540418509187,
	msg_id : 32,
);
```