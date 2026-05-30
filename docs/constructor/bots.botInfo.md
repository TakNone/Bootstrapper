# bots.botInfo

**Description** : *Localized information about a bot*

**Layer** : 222

```tl
bots.botInfo#e8a775b0 name:string about:string description:string = bots.BotInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | Bot name |
| <mark>about</mark> | [`string`](type/string) | Bot about text |
| <mark>description</mark> | [`string`](type/string) | Bot description |

---

## Type

[bots.BotInfo](type/bots.BotInfo)

---

## Example

```php
$botsBotInfo = $client->bots->botInfo(
	name : 'oKSxswVHEk5rYimz',
	about : 'rs4zAmql0X6d5Ixf',
	description : 'grs8OJ3wLaR70ISD',
);
```