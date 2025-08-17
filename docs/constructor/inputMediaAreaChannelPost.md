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
		x : 805882.4072265625,
		y : 1061372.0830078125,
		w : -1764696.3515625,
		h : -1089482.6748046875,
		rotation : -1672419.9951171875,
		radius : -1369585.2431640625,
	),
	channel : $client->inputChannelEmpty(),
	msg_id : 18,
);
```