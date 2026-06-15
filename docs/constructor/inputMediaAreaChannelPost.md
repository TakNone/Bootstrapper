# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 227

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
		x : -411567.2529296875,
		y : -1152587.734375,
		w : -453859.3974609375,
		h : -74096.4453125,
		rotation : -797273.8154296875,
		radius : 1460845.9716796875,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 34,
);
```