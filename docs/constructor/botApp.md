# botApp

**Description** : *Contains information about a direct link Mini App*

**Layer** : 222

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
	id : 2343291217320386739,
	access_hash : 2907643719896235751,
	short_name : 'fzkRY3arQN7pjqsJ',
	title : 'uTMB5nA4OqwR8cKk',
	description : 'sB1HRKtfaqlDn3mV',
	photo : $client->photoEmpty(
		id : -765032813246324960,
	),
	document : $client->documentEmpty(
		id : 1686644977989269540,
	),
	hash : 0,
);
```