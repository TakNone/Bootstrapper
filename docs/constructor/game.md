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
	id : 3026313085314134105,
	access_hash : 8993600718333508661,
	short_name : 'vT38o4H0tdBZpyXe',
	title : 'O0jTgsf2ph7dXDHR',
	description : 'YwCtuNhvOLfIMKHl',
	photo : $client->photoEmpty(
		id : 851026834077617529,
	),
	document : $client->documentEmpty(
		id : 6510429946468742757,
	),
);
```