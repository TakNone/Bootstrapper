# messageMediaGame

**Description** : *Telegram game*

**Layer** : 233

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
		id : -7927102216113326392,
		access_hash : -1159924376578935552,
		short_name : 'amAQGPZqXtrKozEu',
		title : 'mF70eby9IwAQUtpE',
		description : 'B3J0bOujQWEsnCD9',
		photo : $client->photoEmpty(
			id : 1560703822095604930,
		),
		document : $client->documentEmpty(
			id : -7701673184994985569,
		),
	),
);
```