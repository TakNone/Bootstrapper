# inputBotAppID

**Description** : *Used to fetch information about a direct link Mini App by its ID*

**Layer** : 214

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
	id : 845885887614501325,
	access_hash : -2569729404510803587,
);
```