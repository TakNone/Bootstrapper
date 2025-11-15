# mediaAreaChannelPost

**Description** : *Represents a channel post*

**Layer** : 218

```tl
mediaAreaChannelPost#770416af coordinates:MediaAreaCoordinates channel_id:long msg_id:int = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The size and location of the media area corresponding to the location sticker on top of the story media |
| <mark>channel_id</mark> | [`long`](type/long) | The channel that posted the message |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the channel message |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaChannelPost(
	coordinates : $client->mediaAreaCoordinates(
		x : 1532108.8955078125,
		y : -110116.7734375,
		w : 194396.43359375,
		h : 1564266.724609375,
		rotation : -1900573.6416015625,
		radius : -520099.7607421875,
	),
	channel_id : -1336916296224692860,
	msg_id : 77,
);
```