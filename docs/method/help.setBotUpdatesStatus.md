# help.setBotUpdatesStatus

**Description** : *Informs the server about the number of pending bot updates if they haven&#039;t been processed for a long time; for bots only*

**Layer** : 214

```tl
help.setBotUpdatesStatus#ec22cfcd pending_updates_count:int message:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pending_updates_count</mark> | [`int`](type/int) | Number of pending updates |
| <mark>message</mark> | [`string`](type/string) | Error message, if present |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->help->setBotUpdatesStatus(
	pending_updates_count : 63,
	message : '2gbRnv58qJX10QNw',
);
```