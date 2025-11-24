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
		id : 1054623670335682792,
		access_hash : 660382649908376050,
		short_name : 'ZE1ALbnjoa0txNUp',
		title : 'cj0dJLn6k3QAGP7y',
		description : 'hTaYNFkM1HgX6w3b',
		photo : $client->photoEmpty(
			id : 9220793728084405654,
		),
		document : $client->documentEmpty(
			id : 3623499938169220799,
		),
	),
);
```