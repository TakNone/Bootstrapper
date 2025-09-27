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
		x : 1065810.87890625,
		y : 235811.2607421875,
		w : 795673.6494140625,
		h : -1076371.109375,
		rotation : 1127700.431640625,
		radius : 303278.5146484375,
	),
	channel : $client->inputChannelEmpty(),
	msg_id : 72,
);
```