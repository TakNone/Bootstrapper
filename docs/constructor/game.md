# game

**Description** : *Indicates an already sent game*

**Layer** : 222

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
	id : 8079766263003270313,
	access_hash : 2067594209019342489,
	short_name : 'T2Ymric1jDdRwlpe',
	title : 'ln5bP1LetFoDEVxj',
	description : 'qH9rNfzU1sDhnG3A',
	photo : $client->photoEmpty(
		id : 7524374272655843215,
	),
	document : $client->documentEmpty(
		id : 7657472257576113339,
	),
);
```