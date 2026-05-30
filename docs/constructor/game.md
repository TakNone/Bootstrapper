# game

**Description** : *Indicates an already sent game*

**Layer** : 225

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
	id : -3092752379263772984,
	access_hash : 2651266844746024597,
	short_name : 'a3mH6jLoYWJqUlh8',
	title : 'k3ywWTvUgrINPnb5',
	description : 'KWUPesGbEdlyFT3z',
	photo : $client->photoEmpty(
		id : 1043992124423551914,
	),
	document : $client->documentEmpty(
		id : 2703743489864124745,
	),
);
```