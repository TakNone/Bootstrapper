# game

**Description** : *Indicates an already sent game*

**Layer** : 218

```tl
game#bdf9653b flags:# id:long access_hash:long short_name:string title:string description:string photo:Photo document:flags.0?Document = Game;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`long`](type/long) | ID of the game |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash of the game |
| <mark>short_name</mark> | [`string`](type/string) | Short name for the game |
| <mark>title</mark> | [`string`](type/string) | Title of the game |
| <mark>description</mark> | [`string`](type/string) | Game description |
| <mark>photo</mark> | [`Photo`](type/Photo) | Game preview |
| **document** | [`flags.0?Document`](type/Document) | Optional attached document |

---

## Type

[Game](type/Game)

---

## Example

```php
$game = $client->game(
	id : -4073558508327716349,
	access_hash : 5477663737223174728,
	short_name : 'EMU8GW7Os0Ig1CVj',
	title : 'B2KOLy76NVqPEQSI',
	description : '8TaNHJ14xWVDkXL3',
	photo : $client->photoEmpty(
		id : 8466310585784310442,
	),
	document : $client->documentEmpty(
		id : 3496375037636090091,
	),
);
```