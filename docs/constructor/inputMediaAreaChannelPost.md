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
		x : 375382.3388671875,
		y : 1441347.8349609375,
		w : 1286010.20703125,
		h : 1299212.279296875,
		rotation : -846262.5185546875,
		radius : -480909.1064453125,
	),
	channel : $client->inputChannelEmpty(),
	msg_id : 46,
);
```