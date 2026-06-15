# messages.getQuickReplyMessages

**Description** : *Fetch \(a subset or all\) messages in a quick reply shortcut &raquo;*

**Layer** : 227

```tl
messages.getQuickReplyMessages#94a495c3 flags:# shortcut_id:int id:flags.0?Vector<int> hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>shortcut_id</mark> | [`int`](type/int) | Quick reply shortcut ID |
| **id** | [`flags.0?Vector<int>`](type/int) | IDs of the messages to fetch, if empty fetches all of them |
| <mark>hash</mark> | [`long`](type/long) | Hash for pagination, generated as specified here » (not the usual algorithm used for hash generation) |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SHORTCUT_INVALID** | `400` | The specified shortcut is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getQuickReplyMessages(
	shortcut_id : 79,
	id : array(69),
	hash : 0,
);
```