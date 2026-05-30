# mediaAreaSuggestedReaction

**Description** : *Represents a reaction bubble*

**Layer** : 222

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
		x : 631375.8486328125,
		y : -1942607.2470703125,
		w : -1746461.8642578125,
		h : -1682573.7421875,
		rotation : 1419358.6611328125,
		radius : 1416532.7734375,
	),
	reaction : $client->reactionEmpty(),
);
```