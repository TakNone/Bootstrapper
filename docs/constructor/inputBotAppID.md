# inputBotAppID

**Description** : *Used to fetch information about a direct link Mini App by its ID*

**Layer** : 216

```tl
inputBotAppID#a920bd7a id:long access_hash:long = InputBotApp;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | direct link Mini App ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash, obtained from the botApp constructor |

---

## Type

[InputBotApp](type/InputBotApp)

---

## Example

```php
$inputBotApp = $client->inputBotAppID(
	id : 1976187003057382677,
	access_hash : 5496627235553586953,
);
```