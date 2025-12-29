# messageActionInviteToGroupCall

**Description** : *A set of users was invited to the group call*

**Layer** : 218

```tl
messageActionInviteToGroupCall#502f92f7 call:InputGroupCall users:Vector<long> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>users</mark> | [`Vector<long>`](type/long) | The invited users |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionInviteToGroupCall(
	call : $client->inputGroupCall(
		id : 7322608676663677636,
		access_hash : -3502833687955034674,
	),
	users : array(2668559517405429473),
);
```