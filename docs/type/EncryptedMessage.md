# EncryptedMessage

**Description** : *Object contains encrypted message*

**Layer** : 211

```tl
encryptedMessage#ed18c118 random_id:long chat_id:int date:int bytes:bytes file:EncryptedFile = EncryptedMessage;
encryptedMessageService#23734b06 random_id:long chat_id:int date:int bytes:bytes = EncryptedMessage;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**encryptedMessage**](constructor/encryptedMessage) | Encrypted message |
| [**encryptedMessageService**](constructor/encryptedMessageService) | Encrypted service message |