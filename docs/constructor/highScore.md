# highScore

**Description** : *Game highscore*

**Layer** : 222

```tl
highScore#73a379eb pos:int user_id:long score:int = HighScore;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pos</mark> | [`int`](type/int) | Position in highscore list |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>score</mark> | [`int`](type/int) | Score |

---

## Type

[HighScore](type/HighScore)

---

## Example

```php
$highScore = $client->highScore(
	pos : 14,
	user_id : 4979273157452216154,
	score : 29,
);
```