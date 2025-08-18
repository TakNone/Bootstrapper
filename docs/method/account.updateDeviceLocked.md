# account.updateDeviceLocked

**Description** : *When client\-side passcode lock feature is enabled, will not show message texts in incoming PUSH notifications*

**Layer** : 211

```tl
account.updateDeviceLocked#38df3532 period:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`int`](type/int) | Inactivity period after which to start hiding message texts in PUSH notifications |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updateDeviceLocked(
	period : 76,
);
```