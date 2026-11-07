# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 229

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
		x : 1229270.123046875,
		y : -1103712.470703125,
		w : -1557844.4453125,
		h : 90617.2822265625,
		rotation : 962651.74609375,
		radius : 1345196.0126953125,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 95,
);
```