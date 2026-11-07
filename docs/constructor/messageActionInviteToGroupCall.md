# messageActionInviteToGroupCall

**Description** : *A set of users was invited to a video chat/livestream &raquo;*

**Layer** : 229

```tl
messageActionInviteToGroupCall#502f92f7 call:InputGroupCall users:Vector<long> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Video chat/livestream to which the users were invited |
| <mark>users</mark> | [`Vector<long>`](type/long) | The invited users |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionInviteToGroupCall(
	call : $client->inputGroupCall(
		id : 3605031786584732019,
		access_hash : 1812287198405218769,
	),
	users : array(-2899527843756263128),
);
```