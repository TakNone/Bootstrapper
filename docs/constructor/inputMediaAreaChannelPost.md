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
		x : -750005.455078125,
		y : 1607772.62109375,
		w : 1964753.001953125,
		h : 993722.20703125,
		rotation : -1815508.4765625,
		radius : 526930.5595703125,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 48,
);
```