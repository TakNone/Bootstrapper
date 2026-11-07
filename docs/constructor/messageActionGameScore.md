# messageActionGameScore

**Description** : *Someone scored in a game*

**Layer** : 229

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
	game_id : -1600344221649846759,
	score : 98,
);
```