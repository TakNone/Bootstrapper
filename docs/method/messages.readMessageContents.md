# messages.readMessageContents

**Description** : *Notifies the sender about the recipient having listened a voice message or watched a video*

**Layer** : 211

```tl
messages.readMessageContents#36a73f77 id:Vector<int> = messages.AffectedMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<int>`](type/int) | Message ID list |

---

## Result

[messages.AffectedMessages](type/messages.AffectedMessages)

---

## Example

```php
$messagesAffectedMessages = $client->messages->readMessageContents(
	id : array(24),
);
```