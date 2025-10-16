# inputMediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 216

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
		x : 1285037.3623046875,
		y : -335871.3779296875,
		w : -959870.2666015625,
		h : -1595314.4697265625,
		rotation : -797776.126953125,
		radius : -1376251.478515625,
	),
	channel : $client->inputChannelEmpty(),
	msg_id : 49,
);
```