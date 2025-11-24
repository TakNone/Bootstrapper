# updateUserTyping

**Description** : *The user is preparing a message; typing, recording, uploading, etc\. This update is valid for 6 seconds\. If no further updates of this kind are received after 6 seconds, it should be considered that the user stopped doing whatever they were doing*

**Layer** : 218

```tl
updateUserTyping#2a17bf5c flags:# user_id:long top_msg_id:flags.0?int action:SendMessageAction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | User id |
| **top_msg_id** | [`flags.0?int`](type/int) | NOTHING |
| <mark>action</mark> | [`SendMessageAction`](type/SendMessageAction) | Action type |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserTyping(
	user_id : 1703399611089734241,
	top_msg_id : 97,
	action : $client->sendMessageTypingAction(),
);
```