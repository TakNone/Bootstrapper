# EncryptedChat

**Description** : *Object contains info on an encrypted chat*

**Layer** : 211

```tl
encryptedChatEmpty#ab7ec0a0 id:int = EncryptedChat;
encryptedChatWaiting#66b25953 id:int access_hash:long date:int admin_id:long participant_id:long = EncryptedChat;
encryptedChatRequested#48f1d94c flags:# folder_id:flags.0?int id:int access_hash:long date:int admin_id:long participant_id:long g_a:bytes = EncryptedChat;
encryptedChat#61f0d4c7 id:int access_hash:long date:int admin_id:long participant_id:long g_a_or_b:bytes key_fingerprint:long = EncryptedChat;
encryptedChatDiscarded#1e1c7c45 flags:# history_deleted:flags.0?true id:int = EncryptedChat;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**encryptedChatEmpty**](constructor/encryptedChatEmpty) | Empty constructor |
| [**encryptedChatWaiting**](constructor/encryptedChatWaiting) | Chat waiting for approval of second participant |
| [**encryptedChatRequested**](constructor/encryptedChatRequested) | Request to create an encrypted chat |
| [**encryptedChat**](constructor/encryptedChat) | Encrypted chat |
| [**encryptedChatDiscarded**](constructor/encryptedChatDiscarded) | Discarded or deleted chat |