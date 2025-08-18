# inputGroupCallInviteMessage

**Layer** : 211

```tl
inputGroupCallInviteMessage#8c10603f msg_id:int = InputGroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[InputGroupCall](type/InputGroupCall)

---

## Example

```php
$inputGroupCall = $client->inputGroupCallInviteMessage(
	msg_id : 94,
);
```