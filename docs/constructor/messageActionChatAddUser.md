# messageActionChatAddUser

**Description** : *New member in the group*

**Layer** : 211

```tl
messageActionChatAddUser#15cefd00 users:Vector<long> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<long>`](type/long) | Users that were invited to the chat |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChatAddUser(
	users : array(924888923587622454),
);
```