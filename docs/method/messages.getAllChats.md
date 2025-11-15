# messages.getAllChats

**Description** : *Get all chats, channels and supergroups*

**Layer** : 218

```tl
messages.getAllChats#875f74be except_ids:Vector<long> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>except_ids</mark> | [`Vector<long>`](type/long) | Except these chats/channels/supergroups |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->getAllChats(
	except_ids : array(3288291647392171280),
);
```