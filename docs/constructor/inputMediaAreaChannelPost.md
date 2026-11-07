# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 233

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
		x : 2025189.607421875,
		y : -709227.5009765625,
		w : -1060723.2607421875,
		h : 540930.2802734375,
		rotation : 1915550,
		radius : -268171.263671875,
	),
	channel : $client->get_input_channel(channel : '@LiveProto'),
	msg_id : 39,
);
```