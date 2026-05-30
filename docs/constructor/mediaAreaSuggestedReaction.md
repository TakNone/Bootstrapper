# mediaAreaSuggestedReaction

**Description** : *Represents a reaction bubble*

**Layer** : 225

```tl
mediaAreaSuggestedReaction#14455871 flags:# dark:flags.0?true flipped:flags.1?true coordinates:MediaAreaCoordinates reaction:Reaction = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether the reaction bubble has a dark background |
| **flipped** | [`flags.1?true`](type/true) | Whether the reaction bubble is mirrored (see here » for more info) |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | The coordinates of the media area corresponding to the reaction button |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | The reaction that should be sent when this area is clicked |

---

## Type

[MediaArea](type/MediaArea)

---

## Example

```php
$mediaArea = $client->mediaAreaSuggestedReaction(
	dark : true,
	flipped : true,
	coordinates : $client->mediaAreaCoordinates(
		x : -136700.5009765625,
		y : 2054889.908203125,
		w : -600067.8203125,
		h : -1922988.3125,
		rotation : 438725.298828125,
		radius : -941034.9365234375,
	),
	reaction : $client->reactionEmpty(),
);
```