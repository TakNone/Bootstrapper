# messageActionInviteToGroupCall

**Description** : *A set of users was invited to the group call*

**Layer** : 227

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
		id : -2468278308932185293,
		access_hash : -1325464024672925832,
	),
	users : array(-601802670800054398),
);
```