# highScore

**Description** : *Game highscore*

**Layer** : 216

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
	pos : 74,
	user_id : 1887126173468630720,
	score : 53,
);
```