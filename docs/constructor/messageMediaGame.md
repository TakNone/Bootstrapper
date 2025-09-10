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
		id : 6463441268260581658,
		access_hash : 6482216589704059788,
		short_name : 'V1LvoWxGAD24UBMl',
		title : 'sBIaCnRVPXT8Siq9',
		description : 'FYsU97hj1VkyZeaq',
		photo : $client->photoEmpty(
			id : -510184061199086709,
		),
		document : $client->documentEmpty(
			id : -6662452506052009438,
		),
	),
);
```