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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : -2466369665572998264,
	access_hash : 6116809218480263857,
	short_name : 'vfaeNSTB0EYQ7jil',
	title : 'dcjyBgKSN95w6Xsn',
	description : 'Xw2lM0VKbv5gx1QW',
	photo : $client->photoEmpty(
		id : 5766380139500167065,
	),
	document : $client->documentEmpty(
		id : -1316360040083193607,
	),
	hash : 0,
);
```