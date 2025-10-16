# starsRating

**Description** : *Represents the profile&#039;s star rating, see here &raquo; for more info*

**Layer** : 216

```tl
starsRating#1b0e4f07 flags:# level:int current_level_stars:long stars:long next_level_stars:flags.0?long = StarsRating;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	level : 99,
	current_level_stars : 1398949224366432590,
	stars : -2771589086019649808,
	next_level_stars : 406817618762924829,
);
```