# messageMediaGame

**Description** : *Telegram game*

**Layer** : 218

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
		id : -7218557989900982178,
		access_hash : 5898295242169574531,
		short_name : 'VlusmRCTXkJDfai5',
		title : '7I0apsDYUh8kL9CW',
		description : 'C7A92fXclU5irEhk',
		photo : $client->photoEmpty(
			id : -3789288221419896693,
		),
		document : $client->documentEmpty(
			id : 8703048056367850795,
		),
	),
);
```