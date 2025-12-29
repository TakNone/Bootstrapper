# phone.declineConferenceCallInvite

**Description** : *Declines a conference call invite*

**Layer** : 218

```tl
phone.declineConferenceCallInvite#3c479971 msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | The ID of the messageActionConferenceCall to decline |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |

---

## Example

```php
$updates = $client->phone->declineConferenceCallInvite(
	msg_id : 62,
);
```