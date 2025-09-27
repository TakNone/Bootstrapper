# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 214

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
		x : 2076676.4658203125,
		y : 992046.69921875,
		w : -1419120.9443359375,
		h : 1415058.7333984375,
		rotation : 1311423.701171875,
		radius : -532605.2900390625,
	),
	channel : $client->inputChannelEmpty(),
	msg_id : 92,
);
```