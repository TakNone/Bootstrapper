# mediaAreaSuggestedReaction

**Description** : *Represents a reaction bubble*

**Layer** : 218

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
		x : 596109.6474609375,
		y : -962710.4716796875,
		w : 1260222.9921875,
		h : 272350.6123046875,
		rotation : -817702.9931640625,
		radius : -1222937.701171875,
	),
	reaction : $client->reactionEmpty(),
);
```