# phone.declineConferenceCallInvite

**Layer** : 214

```tl
phone.declineConferenceCallInvite#3c479971 msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->declineConferenceCallInvite(
	msg_id : 99,
);
```