# messageMediaGame

**Description** : *Telegram game*

**Layer** : 227

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
		id : -7973208419882852400,
		access_hash : 1994482702858767637,
		short_name : 'c2m94oTWHMGPh1bj',
		title : 'UTlnIXvzipJ0tA94',
		description : 'TtjNc8MPDnb1SU3f',
		photo : $client->photoEmpty(
			id : -2441168114509159951,
		),
		document : $client->documentEmpty(
			id : -4340971619446803662,
		),
	),
);
```