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
	level : 76,
	current_level_stars : -7163842061374137976,
	stars : -8724262281536001947,
	next_level_stars : 7699759407066025486,
);
```