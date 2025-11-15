# messages.sentEncryptedMessage

**Description** : *Message without file attachments sent to an encrypted file*

**Layer** : 216

```tl
messages.sentEncryptedMessage#560f8935 date:int = messages.SentEncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | Date of sending |

---

## Type

[messages.SentEncryptedMessage](type/messages.SentEncryptedMessage)

---

## Example

```php
$messagesSentEncryptedMessage = $client->messages->sentEncryptedMessage(
	date : 35,
);
```