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
		id : 115274563235251949,
		access_hash : -8121518314073189745,
		short_name : 'nD8qJ4IruLUiom1a',
		title : '1cgPBMKJ7N9mtszb',
		description : '5WDXuJcwB2eMofpd',
		photo : $client->photoEmpty(
			id : -5229234463971274769,
		),
		document : $client->documentEmpty(
			id : -2515043180376816136,
		),
	),
);
```