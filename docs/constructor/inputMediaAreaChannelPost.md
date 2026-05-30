# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 225

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
		x : 1173640.9443359375,
		y : 1355321.634765625,
		w : -238417.7685546875,
		h : -1321480.232421875,
		rotation : 387338.9013671875,
		radius : 1810047.359375,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 22,
);
```