# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 211

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
		x : -1664384.9306640625,
		y : -2056608.1318359375,
		w : -334641.6884765625,
		h : 2814.341796875,
		rotation : 1227952.818359375,
		radius : -1510243.6650390625,
	),
	channel : $client->inputChannelEmpty(),
	msg_id : 38,
);
```