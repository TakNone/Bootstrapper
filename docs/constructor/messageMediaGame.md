# messageMediaGame

**Description** : *Telegram game*

**Layer** : 211

```tl
messageMediaGame#fdb19008 game:Game = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>game</mark> | [`Game`](type/Game) | Game |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaGame(
	game : $client->game(
		id : 1841109374003381952,
		access_hash : -5126502539523173335,
		short_name : 'OpDxHT73hlB6Cdco',
		title : 'eHp7vKh3qLVof0wM',
		description : 'sMIx0UbTNlFpznZe',
		photo : $client->photoEmpty(
			id : 4664966423625482917,
		),
		document : $client->documentEmpty(
			id : 735629481834300029,
		),
	),
);
```