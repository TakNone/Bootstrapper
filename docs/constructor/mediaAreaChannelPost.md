# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 227

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
		x : -900192.453125,
		y : -1164853.318359375,
		w : 191430.2216796875,
		h : -974303.2216796875,
		rotation : -1513227.828125,
		radius : 1958480.478515625,
	),
	channel_id : 1618067604777795655,
	msg_id : 43,
);
```