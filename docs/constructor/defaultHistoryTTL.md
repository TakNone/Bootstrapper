# defaultHistoryTTL

**Description** : *Contains info about the default value of the Time\-To\-Live setting, applied to all new chats*

**Layer** : 218

```tl
defaultHistoryTTL#43b46b20 period:int = DefaultHistoryTTL;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`int`](type/int) | Time-To-Live setting applied to all new chats |

---

## Type

[DefaultHistoryTTL](type/DefaultHistoryTTL)

---

## Example

```php
$defaultHistoryTTL = $client->defaultHistoryTTL(
	period : 33,
);
```