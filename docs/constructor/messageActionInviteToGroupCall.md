# messageActionInviteToGroupCall

**Description** : *A set of users was invited to the group call*

**Layer** : 216

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
		id : -232254055825208014,
		access_hash : -2254940791506824751,
	),
	users : array(622078142736361984),
);
```