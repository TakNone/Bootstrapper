# messages.sentEncryptedFile

**Description** : *Message with a file enclosure sent to a protected chat*

**Layer** : 216

```tl
messages.sentEncryptedFile#9493ff32 date:int file:EncryptedFile = messages.SentEncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | Sending date |
| <mark>file</mark> | [`EncryptedFile`](type/EncryptedFile) | Attached file |

---

## Type

[messages.SentEncryptedMessage](type/messages.SentEncryptedMessage)

---

## Example

```php
$messagesSentEncryptedMessage = $client->messages->sentEncryptedFile(
	date : 93,
	file : $client->encryptedFileEmpty(),
);
```