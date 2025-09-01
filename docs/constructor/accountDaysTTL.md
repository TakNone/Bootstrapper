# accountDaysTTL

**Description** : *Time to live in days of the current account*

**Layer** : 214

```tl
accountDaysTTL#b8d0afdf days:int = AccountDaysTTL;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>days</mark> | [`int`](type/int) | This account will self-destruct in the specified number of days |

---

## Type

[AccountDaysTTL](type/AccountDaysTTL)

---

## Example

```php
$accountDaysTTL = $client->accountDaysTTL(
	days : 82,
);
```