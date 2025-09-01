# messageMediaGame

**Description** : *Telegram game*

**Layer** : 214

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
		id : -7054641059830870614,
		access_hash : 3923486842524282023,
		short_name : 'ExWbBiUsQt8wPSA1',
		title : 'OLF7Q1j5em98pDwJ',
		description : 'mDbZGPWfHEsLwzeX',
		photo : $client->photoEmpty(
			id : 7241023434383175043,
		),
		document : $client->documentEmpty(
			id : 6451651083460259529,
		),
	),
);
```