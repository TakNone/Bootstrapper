# botApp

**Description** : *Contains information about a direct link Mini App*

**Layer** : 211

```tl
botApp#95fcd1d6 flags:# id:long access_hash:long short_name:string title:string description:string photo:Photo document:flags.0?Document hash:long = BotApp;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`long`](type/long) | bot mini app ID |
| <mark>access_hash</mark> | [`long`](type/long) | bot mini app access hash |
| <mark>short_name</mark> | [`string`](type/string) | bot mini app short name, used to generate Direct Mini App deep links |
| <mark>title</mark> | [`string`](type/string) | bot mini app title |
| <mark>description</mark> | [`string`](type/string) | bot mini app description |
| <mark>photo</mark> | [`Photo`](type/Photo) | bot mini app photo |
| **document** | [`flags.0?Document`](type/Document) | bot mini app animation |
| <mark>hash</mark> | [`long`](type/long) | Hash to pass to messages.getBotApp, to avoid refetching bot app info if it hasn't changed |

---

## Type

[BotApp](type/BotApp)

---

## Example

```php
$botApp = $client->botApp(
	id : 5801321510983528591,
	access_hash : -4453271526098966543,
	short_name : '8QyWiJ7lrVmvpZBD',
	title : 'AI0UBSrHmco7Y936',
	description : 'PCX8TOhpWslZ4AiQ',
	photo : $client->photoEmpty(
		id : 4147327729661608329,
	),
	document : $client->documentEmpty(
		id : 9895927352691994,
	),
	hash : 5474648474484711083,
);
```