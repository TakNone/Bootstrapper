# bots.botInfo

**Description** : *Localized information about a bot*

**Layer** : 227

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
	name : 'iQNIAl8mLw2VJYM9',
	about : 'c0sf1tDVoB6aZYg7',
	description : 'X5kyrbSw1U6oQasm',
);
```