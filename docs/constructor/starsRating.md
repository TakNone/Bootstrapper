# starsRating

**Description** : *Represents the profile&#039;s star rating, see here &raquo; for more info*

**Layer** : 222

```tl
starsRating#1b0e4f07 flags:# level:int current_level_stars:long stars:long next_level_stars:flags.0?long = StarsRating;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>level</mark> | [`int`](type/int) | The current level, may be negative |
| <mark>current_level_stars</mark> | [`long`](type/long) | The numerical value of the rating required for the current level |
| <mark>stars</mark> | [`long`](type/long) | Numerical value of the current rating |
| **next_level_stars** | [`flags.0?long`](type/long) | The numerical value of the rating required for the next level |

---

## Type

[StarsRating](type/StarsRating)

---

## Example

```php
$starsRating = $client->starsRating(
	level : 43,
	current_level_stars : 2064067650632832773,
	stars : -6708516715972891681,
	next_level_stars : 7623278051613368398,
);
```