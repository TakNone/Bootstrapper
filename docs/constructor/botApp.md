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
	id : -7951091973153419325,
	access_hash : 7400701194144166828,
	short_name : 'rp1HmQK0hO96oNCq',
	title : 'MXmOpNqu5hFKDdLE',
	description : 'CNpE14umgSxUZOqv',
	photo : $client->photoEmpty(
		id : -1853238249119982637,
	),
	document : $client->documentEmpty(
		id : 5531358391195085580,
	),
	hash : 0,
);
```