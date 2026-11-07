# messageMediaGame

**Description** : *Telegram game*

**Layer** : 229

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
		id : 1387994908356008092,
		access_hash : 4318037692987146727,
		short_name : 'DwbYi8dSuqm5OazJ',
		title : 'vT5GW9xOlAQ6Ns7w',
		description : 'zYZURpkOcjvhyLrM',
		photo : $client->photoEmpty(
			id : -4846163563321386053,
		),
		document : $client->documentEmpty(
			id : -2604721210087421615,
		),
	),
);
```