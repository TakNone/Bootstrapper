# messageMediaGame

**Description** : *Telegram game*

**Layer** : 225

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
		id : 8817853046469122134,
		access_hash : 8234455701858618773,
		short_name : 'Y8tq1aXzNyIfUW9T',
		title : 'Am30iftXBz2xJecT',
		description : 'LYnsClhgxRBZI912',
		photo : $client->photoEmpty(
			id : -3625757600298993508,
		),
		document : $client->documentEmpty(
			id : 1554201044881053886,
		),
	),
);
```