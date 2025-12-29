# chatInvitePeek

**Description** : *A chat invitation that also allows peeking into the group to read messages without joining it*

**Layer** : 218

```tl
chatInvitePeek#61695cb0 chat:Chat expires:int = ChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat</mark> | [`Chat`](type/Chat) | Chat information |
| <mark>expires</mark> | [`int`](type/int) | Read-only anonymous access to this group will be revoked at this date |

---

## Type

[ChatInvite](type/ChatInvite)

---

## Example

```php
$chatInvite = $client->chatInvitePeek(
	chat : $client->chatEmpty(
		id : 3083258070297958393,
	),
	expires : 59,
);
```