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
		x : 1827358.7607421875,
		y : 1374373.439453125,
		w : 1270461.8974609375,
		h : -1311294.3388671875,
		rotation : 123364.7421875,
		radius : 387321.03515625,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 29,
);
```