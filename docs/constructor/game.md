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
	id : 2208209552215991482,
	access_hash : 1769275104488289163,
	short_name : '268pXUayPuIVhQH7',
	title : 'eBq10VP2Yjixrc6I',
	description : 'DubTWjtOGUkZN5op',
	photo : $client->photoEmpty(
		id : 9156889461593717177,
	),
	document : $client->documentEmpty(
		id : 986001946905335333,
	),
);
```