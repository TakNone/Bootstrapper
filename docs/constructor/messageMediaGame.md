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
		id : 3708942154901416075,
		access_hash : -6932799533578408267,
		short_name : 'GI8WViSg9vm745Ht',
		title : '7UMqwEfH3QoGZLpm',
		description : 'S0v2LMGOfsYNX5nh',
		photo : $client->photoEmpty(
			id : -7226591047062756171,
		),
		document : $client->documentEmpty(
			id : -5206395214939905308,
		),
	),
);
```