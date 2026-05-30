# messageMediaGame

**Description** : *Telegram game*

**Layer** : 222

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
		id : -6879681354169531782,
		access_hash : -7328247772343378950,
		short_name : 'swZGDocpnegb23qt',
		title : 'mupa0cIhfvqUDRkr',
		description : 'CpobrMiSkBXauWjK',
		photo : $client->photoEmpty(
			id : -4154032505518402296,
		),
		document : $client->documentEmpty(
			id : 3092321896507412842,
		),
	),
);
```