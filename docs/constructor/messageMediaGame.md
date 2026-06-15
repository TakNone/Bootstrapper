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
		id : 4329053314887297175,
		access_hash : -5977061940439492667,
		short_name : 'PSidleWIMa56Uh8Y',
		title : 'd82Hn5VgU9LFJ0XM',
		description : 'RjdK3WOfV8bs6c1i',
		photo : $client->photoEmpty(
			id : 6386213211783269370,
		),
		document : $client->documentEmpty(
			id : 7144029929724612164,
		),
	),
);
```