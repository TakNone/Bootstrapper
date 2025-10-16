# starsRating

**Layer** : 216

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
	level : 61,
	current_level_stars : -2501431556830033710,
	stars : 5380883975470839545,
	next_level_stars : -8761963853176183150,
);
```