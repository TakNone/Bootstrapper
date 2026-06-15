# chatInviteAlready

**Description** : *The user has already joined this chat*

**Layer** : 227

```tl
chatInviteAlready#5a686d7c chat:Chat = ChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat</mark> | [`Chat`](type/Chat) | The chat connected to the invite |

---

## Type

[ChatInvite](type/ChatInvite)

---

## Example

```php
$chatInvite = $client->chatInviteAlready(
	chat : $client->chatEmpty(
		id : -5700904591878196253,
	),
);
```