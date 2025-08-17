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
		x : -1940707.4638671875,
		y : 1142280.3408203125,
		w : -1726127.3017578125,
		h : 1108210.03125,
		rotation : 12569.7958984375,
		radius : 300813.9326171875,
	),
	channel_id : 3613414159871855024,
	msg_id : 35,
);
```