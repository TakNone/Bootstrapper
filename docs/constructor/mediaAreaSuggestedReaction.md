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
		x : -1586510.5400390625,
		y : -617221.2421875,
		w : 1705232.0888671875,
		h : 1708239.9609375,
		rotation : 1476005.8203125,
		radius : -1951230.3720703125,
	),
	reaction : $client->reactionEmpty(),
);
```