# botApp

**Description** : *Contains information about a direct link Mini App*

**Layer** : 218

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
	id : 1446272732560282843,
	access_hash : 3438509285600436037,
	short_name : 'G47NmT9RkM13xHBg',
	title : 'nsqdKE6iZwxUYpNX',
	description : 'fjVvazF56QtOSLpe',
	photo : $client->photoEmpty(
		id : -5035708958076782726,
	),
	document : $client->documentEmpty(
		id : -6306752623552528531,
	),
	hash : 0,
);
```