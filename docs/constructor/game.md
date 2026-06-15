# game

**Description** : *Indicates an already sent game*

**Layer** : 227

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
	id : 1037326293068298404,
	access_hash : 6083203196546271633,
	short_name : '7XP8mjGbY2WN3pzC',
	title : 'v2fhXIq4HsR8cu7Y',
	description : '7rEjLc9ve8MamXRz',
	photo : $client->photoEmpty(
		id : -5679316586464612774,
	),
	document : $client->documentEmpty(
		id : -6590082972457036667,
	),
);
```