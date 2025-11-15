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
		id : 5782993572788698982,
		access_hash : 2168922692841030918,
	),
	users : array(-4160427359865724372),
);
```