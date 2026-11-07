# messageActionInviteToGroupCall

**Description** : *A set of users was invited to a video chat/livestream &raquo;*

**Layer** : 233

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
		id : 479279159654883865,
		access_hash : -2642145500282844058,
	),
	users : array(-7948039182795340086),
);
```