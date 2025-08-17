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
		id : -6509266584362363494,
		access_hash : -6840337401915667053,
		short_name : 'PJoGV5g16M7TQkdn',
		title : 'rmckZgDJtES76qFO',
		description : 'try6LeUIG20ZFOMR',
		photo : $client->photoEmpty(
			id : -4236332504960072143,
		),
		document : $client->documentEmpty(
			id : 7644211512251889833,
		),
	),
);
```