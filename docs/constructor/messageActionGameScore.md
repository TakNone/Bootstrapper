# messageActionGameScore

**Description** : *Someone scored in a game*

**Layer** : 216

```tl
messageActionGameScore#92a72876 game_id:long score:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>game_id</mark> | [`long`](type/long) | Game ID |
| <mark>score</mark> | [`int`](type/int) | Score |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGameScore(
	game_id : 486298264913151287,
	score : 74,
);
```