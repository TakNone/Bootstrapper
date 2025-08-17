# help.getTimezonesList

**Description** : *Returns timezone information that may be used elsewhere in the API, such as to set Telegram Business opening hours »*

**Layer** : 211

```tl
help.getTimezonesList#49b30240 hash:int = help.TimezonesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[help.TimezonesList](type/help.TimezonesList)

---

## Example

```php
$helpTimezonesList = $client->help->getTimezonesList(
	hash : 78,
);
```