# messages.setDefaultHistoryTTL

**Description** : *Changes the default value of the Time\-To\-Live setting, applied to all new chats*

**Layer** : 218

```tl
messages.setDefaultHistoryTTL#9eb51445 period:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`int`](type/int) | The new default Time-To-Live of all messages sent in new chats, in seconds |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TTL_PERIOD_INVALID** | `400` | The specified TTL period is invalid |

---

## Example

```php
$bool = $client->messages->setDefaultHistoryTTL(
	period : 77,
);
```