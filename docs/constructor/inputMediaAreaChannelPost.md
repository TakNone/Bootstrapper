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
		x : 1781897.609375,
		y : 405606.1064453125,
		w : -1073542.1064453125,
		h : -726513.00390625,
		rotation : 500478.349609375,
		radius : -189163.044921875,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 4,
);
```