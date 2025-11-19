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
		x : -806102.27734375,
		y : 1153785.794921875,
		w : 2045366.267578125,
		h : -565476.33984375,
		rotation : -1184743.5126953125,
		radius : 1774924.5537109375,
	),
	channel : $client->get_input_channel(peer : '@LiveProto'),
	msg_id : 23,
);
```