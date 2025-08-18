# game

**Description** : *Indicates an already sent game*

**Layer** : 211

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
	id : 4276425592377623564,
	access_hash : -5756759583005144072,
	short_name : 'f2HKEVMk85pjzoeB',
	title : '8JyPgizfwTrpoHuY',
	description : '1stFEV6wkJoHvqT8',
	photo : $client->photoEmpty(
		id : -5775897306483392417,
	),
	document : $client->documentEmpty(
		id : 3194722819702148748,
	),
);
```