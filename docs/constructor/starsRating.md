# starsRating

**Layer** : 214

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
	level : 42,
	current_level_stars : 4924567123051030838,
	stars : 3545328302782626041,
	next_level_stars : -6200059583791461647,
);
```