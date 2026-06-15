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
		x : 546262.5966796875,
		y : 1470460.373046875,
		w : 1139395.0888671875,
		h : 170956.853515625,
		rotation : 123189.904296875,
		radius : -1993240.54296875,
	),
	channel_id : 4636520950749650538,
	msg_id : 33,
);
```