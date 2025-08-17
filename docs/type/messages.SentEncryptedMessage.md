# messages.SentEncryptedMessage

**Description** : *Contains info on message sent to an encrypted chat*

**Layer** : 211

```tl
messages.sentEncryptedMessage#560f8935 date:int = messages.SentEncryptedMessage;
messages.sentEncryptedFile#9493ff32 date:int file:EncryptedFile = messages.SentEncryptedMessage;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.sentEncryptedMessage**](constructor/messages.sentEncryptedMessage) | Message without file attachments sent to an encrypted file |
| [**messages.sentEncryptedFile**](constructor/messages.sentEncryptedFile) | Message with a file enclosure sent to a protected chat |