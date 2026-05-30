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
		id : -3417173081914371276,
		access_hash : -1559787291523208820,
		short_name : 'yJ0gbrtSx4G8EaCz',
		title : 'WL4X6j5IBrbOQupv',
		description : 'BT4pjI8NsiZu3JE5',
		photo : $client->photoEmpty(
			id : -5636582655115190780,
		),
		document : $client->documentEmpty(
			id : -4507855388511406800,
		),
	),
);
```