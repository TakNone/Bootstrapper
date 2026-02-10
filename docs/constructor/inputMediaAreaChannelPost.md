# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 222

```tl
inputMediaAreaChannelPost#2271f2bf coordinates:MediaAreaCoordinates channel:InputChannel msg_id:int = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the location sticker on top of the story media |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel that posted the message |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the channel message |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->inputMediaAreaChannelPost(
	coordinates : $client->mediaAreaCoordinates(
		x : 1687623.1513671875,
		y : 49962.25390625,
		w : -1678748.4326171875,
		h : -136003.71484375,
		rotation : 89044.8720703125,
		radius : 1202791.8076171875,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 6,
);
```