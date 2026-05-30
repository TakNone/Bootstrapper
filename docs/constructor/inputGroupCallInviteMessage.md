# inputGroupCallInviteMessage

**Description** : *Join a group call through a messageActionConferenceCall invitation message*

**Layer** : 225

```tl
inputGroupCallInviteMessage#8c10603f msg_id:int = InputGroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the messageActionConferenceCall |

---

## Type

[InputGroupCall](type/InputGroupCall)

---

## Example

```php
$inputGroupCall = $client->inputGroupCallInviteMessage(
	msg_id : 89,
);
```