# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 218

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
		x : 927360.841796875,
		y : 1210091.90625,
		w : 2090618.8896484375,
		h : 1220459.3134765625,
		rotation : 1233014.5126953125,
		radius : -2086669.298828125,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 86,
);
```