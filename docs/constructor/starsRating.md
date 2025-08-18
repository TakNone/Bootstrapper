# starsRating

**Layer** : 211

```tl
starsRating#1b0e4f07 flags:# level:int current_level_stars:long stars:long next_level_stars:flags.0?long = StarsRating;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>level</mark> | [`int`](type/int) | NOTHING |
| <mark>current_level_stars</mark> | [`long`](type/long) | NOTHING |
| <mark>stars</mark> | [`long`](type/long) | NOTHING |
| **next_level_stars** | [`flags.0?long`](type/long) | NOTHING |

---

## Type

[StarsRating](type/StarsRating)

---

## Example

```php
$starsRating = $client->starsRating(
	level : 78,
	current_level_stars : 1274205739667278961,
	stars : -8053292105770803051,
	next_level_stars : -1494539803079122374,
);
```