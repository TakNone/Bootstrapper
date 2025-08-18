# mediaAreaSuggestedReaction

**Description** : *Represents a reaction bubble*

**Layer** : 211

```tl
mediaAreaSuggestedReaction#14455871 flags:# dark:flags.0?true flipped:flags.1?true coordinates:MediaAreaCoordinates reaction:Reaction = MediaArea;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		x : -1408800.916015625,
		y : 1459442.02734375,
		w : -225084.857421875,
		h : 268505.8720703125,
		rotation : 39472.9658203125,
		radius : -38715.982421875,
	),
	reaction : $client->reactionEmpty(),
);
```