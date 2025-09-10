# game

**Description** : *Indicates an already sent game*

**Layer** : 214

```tl
game#bdf9653b flags:# id:long access_hash:long short_name:string title:string description:string photo:Photo document:flags.0?Document = Game;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 10115829583138831,
	access_hash : -8812027495035738724,
	short_name : 'gD8PoScbrEFzRua4',
	title : 'yv4KwhikaEDFqgjH',
	description : 'KbxBOViFpntSERHU',
	photo : $client->photoEmpty(
		id : -4369283021682705716,
	),
	document : $client->documentEmpty(
		id : -2720293813830783311,
	),
);
```