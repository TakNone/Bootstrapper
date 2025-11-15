# messageActionChatJoinedByLink

**Description** : *A user joined the chat via an invite link*

**Layer** : 218

```tl
messageActionChatJoinedByLink#31224c3 inviter_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user that created the invite link |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChatJoinedByLink(
	inviter_id : -3372366660739808114,
);
```