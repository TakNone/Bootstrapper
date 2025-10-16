# messageMediaGame

**Description** : *Telegram game*

**Layer** : 216

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
		id : -8441934021997781083,
		access_hash : 4273226281115998755,
		short_name : '4VjCF2uYb3m0pZKg',
		title : 'OfVGWRuC2E6MFqT8',
		description : 'JKDhWzqI13aw6UX9',
		photo : $client->photoEmpty(
			id : -3602026710916176326,
		),
		document : $client->documentEmpty(
			id : -7285051592863412850,
		),
	),
);
```